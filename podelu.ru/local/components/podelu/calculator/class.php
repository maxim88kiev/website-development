<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use \luckyproject\geo\GeoHelper;
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;
use Bitrix\Main\Loader;
use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;
use Bitrix\Main\Data\Cache;
use AMBase\Podelu\Services\BankService;

class TariffsCalculator extends \CBitrixComponent implements Controllerable
{
    const BANK_POCHTABANK = 1690; // количество отделений разделить на 4
    const BANK_SOVKOMBANK = 1696; // количество отделений разделить на 2
    const BANK_TINKOFF    = 1681; // всегда №6
    const BANK_TOCHKA     = 1682; // всегда №7
    const BANK_MODULBANK  = 1687; // всегда №12
    const BANK_AVANGARD   = 1689; // всегда №14
    const BANK_LOCKOBANK  = 1692; // всегда №17

    const DEFAULT_COUNT_FILTER_BANKS = 7;

    private $excludeTariffIds = [
        7967 , 7965 , 7972 , 7978 , 7976 , 7983 , 7993 , 7991 , 7998 , 	8005 , 8003 , 8010 , 8018 , 8016 , 8023
    ];

    private $defaultFilterBanks = [];
    private $banks = [];

    private $tariffsHLBT;
    private $acquiringPercentList = [];

    public function configureActions()
    {
        return [
            'getTariffs' => [
                'prefilters' => [],
                'postfilters' => []
            ] ,

            'getTariffInfo' => [
                'prefilters' => [],
                'postfilters' => []
            ] ,

        ];
    }


    public function __construct($component = null)
    {
        parent::__construct($component);
        $this->initHL();
        $this->initBanksFilter();
    }



    public function onPrepareComponentParams($arParams)
    {
        if(!empty($arParams['DEFAULT_BANKS'])){
            $this->defaultFilterBanks = $arParams['DEFAULT_BANKS'];
        }
        return $arParams;
    }

    public function initHL()
    {
        Loader::includeModule("highloadblock");
        $hlblock = HL\HighloadBlockTable::getById(HLBT_TARIFF_INDEX_TABLE_ID)->fetch();
        $entity = HL\HighloadBlockTable::compileEntity($hlblock);
        $this->tariffsHLBT = $entity->getDataClass();
    }

    //region Функции фильтрации
    public function filtrateTariffs($filters = [])
    {
        $countPaymentFrom = isset($filters['CONTRAGENTS']['FROM'])?(int)$filters['CONTRAGENTS']['FROM']:0;
        $countPaymentTo = isset($filters['CONTRAGENTS']['TO'])?(int)$filters['CONTRAGENTS']['TO']:5;
        $filter = [
            "LOGIC" => "AND",
            ['=UF_COUNT_PAY_FROM' => $countPaymentFrom],
            ['=UF_COUNT_PAY_TO' => $countPaymentTo],
        ];


        $cashWihdrawFrom = isset($filters['CASH_WITHDRAW']['FROM'])?((int)$filters['CASH_WITHDRAW']['FROM'])*1000:0;
        if($filters['CASH_WITHDRAW']['TO'] == INFINITE_NUMBER){
            $cashWihdrawTo = INFINITE_NUMBER;
        } else {
            $cashWihdrawTo = isset($filters['CASH_WITHDRAW']['TO'])?((int)$filters['CASH_WITHDRAW']['TO'])*1000:50000;
        }
        $filterPayment = [
            "LOGIC" => "AND",
            ['=UF_CASH_OUT_FROM' => $cashWihdrawFrom],
            ['=UF_CASH_OUT_TO' => $cashWihdrawTo],
        ];

        $peopleTransferFrom = isset($filters['TRANSFER']['FROM'])?((int)$filters['TRANSFER']['FROM'])*1000:0;
        if($filters['TRANSFER']['TO'] == INFINITE_NUMBER){
            $peopleTransferTo = INFINITE_NUMBER;
        } else {
            $peopleTransferTo = isset($filters['TRANSFER']['TO'])?((int)$filters['TRANSFER']['TO'])*1000:150000;
        }
        $filterCashWithdraw = [
            "LOGIC" => "AND",
            ['=UF_TRANSFER_FROM' => $peopleTransferFrom],
            ['=UF_TRANSFER_TO' => $peopleTransferTo],
        ];

        $filter = array_merge($filter , $filterPayment , $filterCashWithdraw);
        $filterBanks = ($filters['BANK'])?:$this->defaultFilterBanks;
        $cityName = GeoHelper::getCurrentCityName();
        /*$cacheId = md5($cityName . serialize($filter));
        $cache = Cache::createInstance();*/
        if (false) {
            //$this->arResult['ITEMS'] = $cache->getVars();
        } else {

            if ($cityName) {
                $tariffZonesResultIds = getTariffZonesIdsByGeoFilter($cityName);
            } else {
                $tariffZonesResultIds = getTariffZonesIdsByGeoFilter();
            }


            $rsTariffs = CIBlockElement::GetList(
                [] ,
                [
                    "IBLOCK_ID" => TARIFF_IBLOCK_ID,
                    "ACTIVE" => "Y",
                    "PROPERTY_PROPERTY_BANK" => $filterBanks,
                    "PROPERTY_PROPERTY_TARRIF_ZONE.ID" => $tariffZonesResultIds,
                    "!ID" => $this->excludeTariffIds
                ]
            );

            $tariffsCache = [];
            $tariffsBanksMap = [];
            $arTariffsIndexesSort = [];
            foreach ($this->banks as $bank) {
                $tariffsBanksMap[$bank['ID']] = [];
            }

            while($rsTariff = $rsTariffs->GetNextElement()){
                $tariff = $rsTariff->GetFields();
                $tariff['PROPERTIES'] = $rsTariff->GetProperties();
                $tariffsCache[$tariff['ID']] = $tariff;
                if(array_key_exists($tariff['PROPERTIES']['PROPERTY_BANK']['VALUE'] , $tariffsBanksMap)){
                    $tariffsBanksMap[$tariff['PROPERTIES']['PROPERTY_BANK']['VALUE']][$tariff['ID']] = $tariff;
                }
            }

            $filter["=UF_TARIFF_ID"] = array_keys($tariffsCache);
            $rsTariffsIndexesSort = $this->tariffsHLBT::getList(array(
                "select" => array("*"),
                "order" => array("UF_INDEX_SORT" => "ASC"),
                "filter" => $filter
            ));

            while($arTariffItem = $rsTariffsIndexesSort->fetch()){
                $arTariffsIndexesSort[$arTariffItem["UF_TARIFF_ID"]] = $arTariffItem["UF_INDEX_SORT"];
            }



            $resultTariffsArr = [];
            foreach ($tariffsBanksMap as $tariffsArr) {
                if(!empty($tariffsArr)){
                    $arrForSort = [];
                    foreach ($tariffsArr as $id => $item) {
                        if(array_key_exists($id , $arTariffsIndexesSort)){
                            $arrForSort[$arTariffsIndexesSort[$id]] = $id;
                        }
                    }
                    ksort($arrForSort);
                    $firstTariffId = reset($arrForSort);
                    $resultTariffsArr[$firstTariffId] = (int)$arTariffsIndexesSort[$firstTariffId];
                }
            }
            //asort($resultTariffsArr);

            $items = [];
            $bankList = getBankList();
            foreach ($resultTariffsArr as  $tariffId => $indexSort) {
                if(array_key_exists($tariffId , $tariffsCache)){
                    $tariff = $tariffsCache[$tariffId];
                    $tariff['INDEX_SORT'] = $indexSort;

                    $tariff['BANK'] = $bankList[$tariff['PROPERTIES']['PROPERTY_BANK']['VALUE']];

                    $bank = new stdClass();
                    $bank->id = $tariff['BANK']['ID'];
                    $bank->name = $tariff['BANK']['NAME'];
                    $bank->url = $tariff['BANK']['DETAIL_PAGE_URL'];
                    $bank->partnerUrl = $tariff['BANK']['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE'];
                    $bank->salaryProject = $tariff['BANK']['PROPERTIES']['SALARY_PROJECT']['VALUE'];

                    $tariff['bank'] = $bank;


                    if($tariff['BANK']['~PREVIEW_PICTURE']){
                        $tariff['BANK_PICTURE'] = CFile::ResizeImageGet($tariff['BANK']['~PREVIEW_PICTURE'] , ['width' => 110 , 'height' => 26]);
                    } else {
                        $tariff['BANK_PICTURE'] = CFile::ResizeImageGet($tariff['BANK']['~DETAIL_PICTURE'] , ['width' => 110 , 'height' => 26]);
                    }

                    if($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT_INTERVAL']['VALUE']){
                        foreach ($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT_INTERVAL']['VALUE'] as $propVal) {
                            if(isset($propVal['FROM'])){
                                $tariff['PROPERTY_ACCOUNT_PAYMENT_FORMAT'] = number_format((float)$propVal['FROM'] , 0 , '.' , ' ');
                                $tariff['PROPERTY_ACCOUNT_PAYMENT_FORMAT'] .= ' руб/мес';
                                break;
                            }
                        }
                        if(!isset($tariff['PROPERTY_ACCOUNT_PAYMENT_FORMAT'])){
                            $tariff['PROPERTY_ACCOUNT_PAYMENT_FORMAT'] = $tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'][0];
                        }
                    }

                    if($tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER_INTERVAL']['VALUE']){
                        foreach ($tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER_INTERVAL']['VALUE'] as $propVal) {
                            if($this->inInterval($peopleTransferFrom , $peopleTransferTo ,  $propVal)){
                                $tariff['PROPERTY_PEOPLE_TRANSFER_FORMAT'] = $this->renderIntervalValue($propVal, true);
                                break;
                            }
                        }
                        if(!isset($tariff['PROPERTY_PEOPLE_TRANSFER_FORMAT'])){
                            $propVal = $tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER_INTERVAL']['VALUE'][0];
                            $tariff['PROPERTY_PEOPLE_TRANSFER_FORMAT'] = $this->renderIntervalValue($propVal, true);
                        }
                    }

                    if ($tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF_INTERVAL']['VALUE']) {
                        foreach ($tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF_INTERVAL']['VALUE'] as $propVal) {
                            if ($this->inInterval($cashWihdrawFrom , $cashWihdrawTo ,  $propVal)) {
                                $tariff['PROPERTY_CASH_OUT_SELF_FORMAT'] = $this->renderIntervalValue($propVal, true);
                                break;
                            }
                        }

                        if(!isset($tariff['PROPERTY_CASH_OUT_SELF_FORMAT'])){
                            // $propVal = $tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF_INTERVAL']['VALUE'][0];
                            // $tariff['PROPERTY_CASH_OUT_SELF_FORMAT'] = $this->renderIntervalValue($propVal, true);
                            $tariff['PROPERTY_CASH_OUT_SELF_FORMAT'] = $tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE'][0];
                            $tariff['PROPERTY_CASH_OUT_SELF_FORMAT'] = preg_replace('/\d+(%|\s?тыс\.|,\d%)?/', '<strong>$0</strong> ', $tariff['PROPERTY_CASH_OUT_SELF_FORMAT']);
                        }
                    }

                    $tariff['acquiring'] = $this->getTariffAcquiring($tariff);

                    $peopleTransferIntervalProp = $tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER_INTERVAL'];
                    $tariff['PEOPLE_TRANSFER_INTERVAL'] = $this->renderInterval($peopleTransferIntervalProp['VALUE']);

                    $cashOutSelfIntervalProp = $tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF_INTERVAL'];
                    $tariff['CASH_OUT_SELF_INTERVAL'] = $this->renderInterval($cashOutSelfIntervalProp['VALUE']);

                    $cashInSelfIntervalProp = $tariff['PROPERTIES']['PROPERTY_CASH_IN_SELF_INTERVAL'];
                    $tariff['CASH_IN_SELF_INTERVAL'] = $this->renderInterval($cashInSelfIntervalProp['VALUE']);

                    $cashOutCashboxIntervalProp = $tariff['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX_INTERVAL'];
                    $tariff['CASH_OUT_CASHBOX'] = $this->renderInterval($cashOutCashboxIntervalProp['VALUE']);

                    $cashInCashboxIntervalProp = $tariff['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX_INTERVAL'];
                    $tariff['CASH_IN_CASHBOX'] = $this->renderInterval($cashInCashboxIntervalProp['VALUE']);

                    $items[] = $tariff;
                }
            }
            $this->arResult['ITEMS'] = $items;

            //$cache->endDataCache($items); // записываем в кеш
        }

        $this->arResult['CITY_NAME'] = $cityName;


    }

    private function filtrateInternationalTradeFilter($filters){
        if($filters['INTERNATIONAL_TRADE'] == 'on'){
            $banksForInternationalTradeCache = [];
            $rsBanks = \CIBlockElement::GetList(
                [] ,
                [
                    "IBLOCK_ID" => BANK_IBLOCK_ID,
                    "ACTIVE" => "Y",
                    "=PROPERTY_INTERNATIONAL_TRADE_VALUE" => 'да'
                ]
            );
            while($arBank = $rsBanks->Fetch()){
                $banksForInternationalTradeCache[] = $arBank['ID'];
            }

            if(!empty($banksForInternationalTradeCache)) {
                $this->arResult['FILTER']['BANK'] = $banksForInternationalTradeCache;
            }
        }
    }

    private function filtrateWithoutPaymentAccountFilter($filters){
        if($this->arResult['ITEMS'] && $filters['WITHOUT_ACCOUNT_PAYMENT'] == 'on'){
            foreach ($this->arResult['ITEMS'] as $i => $ITEM) {
                if($ITEM['PROPERTY_ACCOUNT_PAYMENT_FORMAT'] !== "0 руб/мес"){
                    unset($this->arResult['ITEMS'][$i]);
                }
            }
        }
    }
    //endregion

    //region Служебные функции
    private function inInterval($from , $to , $pocketVal){
        $pocketMid = ceil(((int)$to + (int)$from)/2);
        if((int)$to == INFINITE_NUMBER){
            $pocketMid = (int)$from;
        }

        $result = false;
        if($this->isFullInterval($pocketVal) && ($pocketMid >= (int)$pocketVal['FROM'] && $pocketMid <= (int)$pocketVal['TO'])){
            $result = true;
        } else if($this->isOpenInterval($pocketVal) && ($pocketMid >= (int)$pocketVal['FROM'])){
            $result = true;
        }

        return $result;
    }

    private function isFullInterval($pocketVal){
        return isset($pocketVal['FROM']) && isset($pocketVal['TO']) && (isset($pocketVal['PERCENT']) || isset($pocketVal['INDIVIDUALLY']));
    }

    private function isOpenInterval($pocketVal) {
        return isset($pocketVal['FROM']) && !isset($pocketVal['TO']) && (isset($pocketVal['PERCENT']) || isset($pocketVal['INDIVIDUALLY']));
    }

    private function getShortValue($val){
        $number = number_format($val , 0 , '.' , ',');
        $chanks = explode(',' , $number);
        $shortNumber = 0;
        if((count($chanks) - 1) == 1){
            $shortNumber = (int)$val/1000;
            $shortNumber .= ' тыс.';
        } else if((count($chanks) - 1) == 2){
            $shortNumber = (int)$val/1000000;
            $shortNumber .= ' млн.';
        }
        return $shortNumber;
    }

    private function convertPocketToString($propVal){
        $stringFormat = '';
        if(preg_match('/0\.[0-9][0-9]/' , $propVal['PERCENT']))
            return null;
        if($propVal['PERCENT'] === 0){
            $propVal['PERCENT'] = 'бесплатно';
        } else if(isset($propVal['PERCENT'])) {
            $propVal['PERCENT'] = $propVal['PERCENT'] . '%';
        } else if(isset($propVal['INDIVIDUALLY']) && !isset($propVal['PERCENT'])){
            $propVal['PERCENT'] = 'индивидуально';
        }

        if($this->isFullInterval($propVal)){
            $stringFormat = sprintf('от %s до %s руб в месяц — %s' , $this->getShortValue($propVal['FROM']) , $this->getShortValue($propVal['TO']) , $propVal['PERCENT']);
        } else if($this->isOpenInterval($propVal)) {
            $stringFormat = sprintf('свыше %s руб в месяц — %s' , $this->getShortValue($propVal['FROM']) , $propVal['PERCENT']);
        }
        return $stringFormat;
    }
    //endregion

    private function initBanksFilter() {

        $cityName = GeoHelper::getCurrentCityName();

        if ($cityName) {
            $tariffZonesResultIds = getTariffZonesIdsByGeoFilter($cityName);
        } else {
            $tariffZonesResultIds = getTariffZonesIdsByGeoFilter();
        }

        $rsTariffs = CIBlockElement::GetList(
            [] ,
            [
                "IBLOCK_ID" => TARIFF_IBLOCK_ID,
                "ACTIVE" => "Y",
                //"PROPERTY_PROPERTY_BANK" => $filters['BANK'],
                "PROPERTY_PROPERTY_TARRIF_ZONE.ID" => $tariffZonesResultIds,
            ]
        );

        $tariffs = [];
        while($rsTariff = $rsTariffs->GetNextElement()) {
            $tariff = $rsTariff->GetFields();
            $tariff['PROPERTIES'] = $rsTariff->GetProperties();
            $tariffs[$tariff['ID']] = $tariff;
        }

        $calculator = new \AMBase\Podelu\Calculator($tariffs);
        $sortedBankIdList = $calculator->sort();
        $arBanks = getBankList();

        foreach ($arBanks as $index => $arItem) {
            $bankId = $arItem['ID'];
            if($sortedBankIdList[$bankId]['sort'] != '') {
                $arBanks[$index]['BUSINESS_SORT'] = $sortedBankIdList[$bankId]['sort'];
            } else {
                $arBanks[$index]['BUSINESS_SORT'] = 100;
            }

        }

        $arBanks = $calculator->sortBy($arBanks, 'BUSINESS_SORT');

        foreach ($arBanks as $val) {
            $val['DATA']['BANK_ONLINE'] = BankService::isOnlineBank($val['ID']) ? 'true' : 'false';
            $val['DATA']['BANK_STATE'] = $val['PROPERTIES']['PROPERTY_CHECK_GOS']['VALUE'] === 'Y' ? 'true' : 'false';

            $this->banks[$val['ID']] = $val;
        }

        $bankIds = array_keys($this->banks);
        if(empty($this->defaultFilterBanks)){
            $this->defaultFilterBanks = array_slice($bankIds , 0 , self::DEFAULT_COUNT_FILTER_BANKS);
        }
    }


    private function markFilterBanks($filters = []){
        $i = 0;
        foreach ($this->arResult['BANKS'] as &$val) {
            $val['SELECTED'] = (in_array($val['ID'],$filters))?'Y':'N';
            $val['FILTER_SORT'] = (in_array($val['ID'],$filters))?$i:$i+100;
            $i++;
        }
        usort($this->arResult['BANKS'] , function($a , $b){
            return $a['FILTER_SORT'] > $b['FILTER_SORT'];
        });
    }

    private function prepareTariffInfoResult($tariffId){
        if($tariffId){
            $rsTariff = \CIBlockElement::GetList([] , ['ID' => $tariffId])->GetNextElement();
            $this->arResult = $rsTariff->GetFields();
            $this->arResult['PROPERTIES'] = $rsTariff->GetProperties();
            $this->arResult['BANK'] = getBank($this->arResult['PROPERTIES']['PROPERTY_BANK']['VALUE'] , getBankList());
            if($this->arResult['BANK']['~DETAIL_PICTURE']){
                $this->arResult['BANK_PICTURE'] = CFile::ResizeImageGet($this->arResult['BANK']['~DETAIL_PICTURE'] , ['width' => 110 , 'height' => 26]);
            }
        }
    }


    public function executeComponent()
    {
        $this->arResult['BANKS'] = $this->banks;
        $this->filtrateTariffs();
        $this->markFilterBanks($this->defaultFilterBanks);
        $this->includeComponentTemplate();
    }

    //AJAX Actions
    public function getTariffsAction($filters , $template , $params)
    {
        $this->arResult['FILTER'] = $filters;
        $this->arResult['BANKS'] = $this->banks;
        $this->arParams = $params;
        ob_start();
        if(!$params['FILTER_BANKS']){
            $this->arResult['FILTER']['BANK'] = ($params['DEFAULT_BANKS'])?:$this->defaultFilterBanks;
            $this->filtrateInternationalTradeFilter($this->arResult['FILTER']);
            $this->filtrateTariffs($this->arResult['FILTER']);
            $this->filtrateWithoutPaymentAccountFilter($this->arResult['FILTER']);
            $this->markFilterBanks($this->arResult['FILTER']['BANK']);
        } else if(empty($filters['BANK'])){
            $this->arResult['ITEMS'] = [];
        } else {
            $this->filtrateInternationalTradeFilter($this->arResult['FILTER']);
            $this->filtrateTariffs($this->arResult['FILTER']);
            $this->filtrateWithoutPaymentAccountFilter($this->arResult['FILTER']);
            $this->markFilterBanks($this->arResult['FILTER']['BANK']);
        }

        $this->includeComponentTemplate('template' , $this->getPath() . '/templates/' . $template);
        $result = ob_get_contents();
        ob_end_clean();
        return $result;
    }

    public function getTariffInfoAction($tariffId , $template)
    {

        $cache = Cache::createInstance();
        if ($cache->initCache(24*60*60, md5($tariffId) , 'tariff_info')) {
            $result = $cache->getVars();
        }
        elseif ($cache->startDataCache()) {
            ob_start();
            $this->prepareTariffInfoResult($tariffId);
            $this->includeComponentTemplate('template' , $this->getPath() . '/templates/' . $template);
            $result = ob_get_contents();
            ob_end_clean();
            $cache->endDataCache($result);
        }

        return $result;
    }

    private function getTariffAcquiring($arTariff)
    {
        $filterCashWithdraw = $this->getFilterValue('CASH_WITHDRAW');
        $filterTransfer = $this->getFilterValue('TRANSFER');

        $middleCashWithdraw = ($filterCashWithdraw['FROM'] + $filterCashWithdraw['TO']) / 2;
        $middleTransfer = ($filterTransfer['FROM'] + $filterTransfer['TO']) / 2;

        $turnover = ($middleCashWithdraw + $middleTransfer) * 3;

        return $this->getAcquiringPercent($arTariff['bank']->id, $turnover);
    }

    private function getFilterValue($filterName)
    {
        if (!empty($this->arResult['FILTER'][$filterName])) {
            return $this->arResult['FILTER'][$filterName];
        }

        switch ($filterName) {
            case 'CASH_WITHDRAW':
                return ['FROM' => 0, 'TO' => 50];
            case 'TRANSFER':
                return ['FROM' => 0, 'TO' => 150];
            default:
                return null;
        }
    }

    private function getAcquiringPercent($bankId, $turnover)
    {
        if (empty($this->acquiringPercentList)) {
            $this->loadAcquiringPercentList($turnover);
        }

        return $this->acquiringPercentList[$bankId];
    }

    private function loadAcquiringPercentList($turnover)
    {
        $connection = Bitrix\Main\Application::getConnection();

        $sql = "select ab.bx_id, ar.value, ar.min, ar.max from acquiring_rates as ar";
        $sql .= " left join acquiring_tariffs as at on ar.tariff_id = at.id";
        $sql .= " left join acquiring_banks as ab on at.bank_id = ab.id";
        $sql .= " where ar.min <= $turnover and ar.max >= $turnover";
        $sql .= " order by ar.value asc";

        $recordset = $connection->query($sql);
        while ($record = $recordset->fetch()) {
            if (!empty($this->acquiringPercentList[$record['bx_id']])) {
                continue;
            }

            $this->acquiringPercentList[$record['bx_id']] = $record['value'];
        }
    }

    private function renderInterval($interval)
    {
        usort($interval, function($a, $b) {
            if (empty($b['FROM'])) {
                return 1;
            }

            if (empty($a['FROM'])) {
                return -1;
            }

            if (empty($a['TO'])) {
                return 1;
            }

            if ($a['FROM'] == $b['FROM']) {
                return 0;
            }

            return ($a['FROM'] < $b['FROM']) ? -1 : 1;
        });


        $html = '';
        foreach ($interval as $value) {
            if (empty($value['PERCENT']) && empty($value['ONE_PERCENT'])) {
                continue;
            }

            $html .= $this->renderIntervalValue($value);
        }

        return $html;
    }

    private function renderIntervalValue($value, $includeMonth = false)
    {
        ob_start();

        include 'interval.php';

        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }

    private function getIntervalValue($value)
    {
        if ($value >= 1000000) {
            $value /= 1000000;
            $prefix = 'млн.';
        } else {
            $value /= 1000;
            $prefix = 'тыс.';
        }

        return [
          'VALUE' => $this->formatValue($value),
          'PREFIX' => $prefix
        ];
    }

    private function formatValue($value)
    {
        return strpos($value, '.') ? str_replace('.', ',', $value) : $value;
    }
}
