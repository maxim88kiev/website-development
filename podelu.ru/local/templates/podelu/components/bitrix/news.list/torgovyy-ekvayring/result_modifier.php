<?php

use luckyproject\geo\GeoHelper;
use AMBase\Podelu\Acquiring\Filter;
use AMBase\Podelu\Services\BankService;


$cityName = GeoHelper::getCurrentCityName();

function getRegionIndex($arBank) {
    $currentCityName = GeoHelper::getCurrentCityName();

    foreach ($arBank['REGIONS'] as $arRegion) {
        if ($arRegion['bx_name'] === $currentCityName) {
            return $arRegion['id'];
        }
    }

    $bankName = trim($arBank['NAME']);

    if ($bankName == 'Сбербанк') {
        return 75; // Если в списке нет текущего города, отдавать тарифы по Москве
    }

    if ($bankName == 'СДМ-Банк') {
//        return 3; // Если в списке нет текущего города, отдавать тарифы для остальныx городов
         return 84; // Если в списке нет текущего города, отдавать тарифы для остальныx городов
    }

    return 0;
}

function getIblockByCode($code) {
    $arFilter = ['CODE' => $code];
    return CIBlock::GetList([], $arFilter)->Fetch();
}

$connection = Bitrix\Main\Application::getConnection();
$sqlHelper = $connection->getSqlHelper();



$acquiringBanks = [];
$sql = 'select * from acquiring_banks';
$recordset = $connection->query($sql);


$banks = [];
while ($record = $recordset->fetch()) {
    $record['sort'] = BankService::getSort($record['bx_id'], 500);

    $countBranches = $GLOBALS['COUNT_BRANCHES_CITIES_CACHED'][$record['bx_id']][$cityName];
    $record['countBranches'] = BankService::getCountBranches($record['bx_id'], $countBranches);

    $banks[] = $record;
}

// сортировка $banks
usort($banks, function($a, $b) {
    return $b['countBranches'] <=> $a['countBranches'];
});

$i = 0;
foreach($banks as $j => $bank) {
    $i++;
    $success = true;
    while($success) {
        try {
            $banks[$j]['sort'] = BankService::getSort($bank['bx_id'], $i);
            $success = false;
        } catch (\Exception $exception) {
            $i++;
        }
    }
}

usort($banks, function($a, $b) {
    return $a['sort'] <=> $b['sort'];
});
// end сортировка $banks

$filterBanks = [];
if (!empty($_GET['banks'])) {
    $filterBanks = explode(',', $_GET['banks']);
}

$countChecked = 7;
foreach ($banks as $bank) {
    if (empty($filterBanks)) {
        $bank['checked'] = $countChecked-- > 0;
    } else {
        $bank['checked'] = in_array($bank['bx_id'], $filterBanks);
    }

    if ($bank['checked']) {
        $acquiringBanks[$bank['bx_id']] = $bank;
    }


    $bank['DATA_BRANCHES'] = getDataBranches($bank);
    $bank['DATA_ONLINE'] = BankService::isOnlineBank($bank['bx_id']) ? 'true' : 'false';
    $bank['DATA_GOS'] = 'false';

    $arResult['FILTER']['BANKS'][] = $bank;
}

$tmp = $banks;
$banks = [];
foreach($tmp as $bank) {
    $banks[$bank['id']] = $bank;
}

$arFilter = ["IBLOCK_ID" => 1, "ACTIVE" => "Y"];
if (empty($acquiringBanks)) {
    $arFilter['ID'] = -1;
} else {
    $arFilter['ID'] = array_keys($acquiringBanks);
}

$arSelect = [
    "ID",
    "IBLOCK_ID",
    "IBLOCK_SECTION_ID",
    "DETAIL_PAGE_URL",
    "NAME",
    "SORT",
    "PREVIEW_PICTURE",
    "DETAIL_PICTURE",
    "PROPERTY_*"
];
$dbResult = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

$arResult['BANKS'] = [];
while($object = $dbResult->GetNextElement()) {
    $arItem = $object->GetFields();
    $arItem['PROPERTIES'] = $object->GetProperties();

    $arItem['PREVIEW_PICTURE'] = CFile::GetPath($arItem["PREVIEW_PICTURE"]);
    $arItem['DETAIL_PICTURE'] = CFile::GetPath($arItem["DETAIL_PICTURE"]);

    $arItem['SORT'] = BankService::getSort($arItem['ID'], $arItem['SORT']);
    $countBranches = $GLOBALS['COUNT_BRANCHES_CITIES_CACHED'][$arItem['ID']][$cityName];
    $arItem['COUNT_BRANCHES'] = BankService::getCountBranches($arItem['ID'], $countBranches);

    $arResult['BANKS'][$arItem['ID']] = $arItem;
}

// Список ID банков
$arResult['BANK_IDS'] = [];
foreach($arResult['BANKS'] as $arBankItem) {
    $arResult['BANK_IDS'][] = $arBankItem['ID'];
}

$industries = [];
$sql = 'select * from acquiring_industries';
$recordset = $connection->query($sql);
while ($industry = $recordset->fetch()) {
    $industries[$industry['id']] = $industry;
}

$regions = [];
$sql = 'select * from acquiring_regions';
$recordset = $connection->query($sql);
while ($region = $recordset->fetch()) {
    $regions[$region['id']] = $region;
}

$sql = "select * from acquiring_region_city where bx_name = '$cityName'";
$regionSberbank = $connection->query($sql)->fetch();

$rates = [];
$sql = 'select * from acquiring_rates';
$recordset = $connection->query($sql);
while ($rate = $recordset->fetch()) {
    $rates[$rate['tariff_id']][] = $rate;
}

$tariffs = [];
$sql = 'select * from acquiring_tariffs';

if (empty($_GET['interval-start']) && empty($_GET['interval-end'])) {
    $_GET['interval-end'] = 50;
}

if (!empty($_GET['interval-start']) || !empty($_GET['interval-end'])) {
    $sql .= ' where';

    $start = $sqlHelper->forSql($_GET['interval-start']);
    $end = $sqlHelper->forSql($_GET['interval-end']);

    if (!empty($start) && !empty($end)) {
        $sql .= " (flow_min <= $start and flow_max >= $start) or (flow_min <= $end and flow_max >= $end)";
    } else if (!empty($start)) {
        $sql .= ' flow_min <= ' . $start . ' and flow_max >= ' . $start;
    } else if (!empty($end)) {
        $sql .= ' flow_min <= ' . $end . ' and flow_max >= ' . $end;
    }
}

$recordset = $connection->query($sql);
while ($tariff = $recordset->fetch()) {
    $bank = $banks[$tariff['bank_id']];

    if ($bank['bx_name'] === 'Сбербанк' && $tariff['region_id'] !== $regionSberbank['region_id']) {
        continue;
    }

    if (empty($arResult['BANKS'][$bank['bx_id']])) {
        continue;
    }

    $tariff['bank'] = $bank;

    $bankId = $bank['bx_id'];
    $regionId = $tariff['region_id'];
    $industryId = $tariff['industry_id'];
    $tariffId = $tariff['id'];

    $tariff['rates'] = $rates[$tariff['id']];


    if (!empty($arResult['BANKS'][$bankId])) {
        $arResult['BANKS'][$bankId]['link'] = $bank['link'];
    }

    if (empty($arResult['BANKS'][$bankId]['REGIONS'][$regionId])) {
        $arResult['BANKS'][$bankId]['REGIONS'][$regionId] = $regions[$regionId];
    }

    if (empty($arResult['BANKS'][$bankId]['REGIONS'][$regionId]['INDUSTRIES'][$industryId])) {
        $arResult['BANKS'][$bankId]['REGIONS'][$regionId]['INDUSTRIES'][$industryId] = $industries[$industryId];
    }

    $arResult['BANKS'][$bankId]['REGIONS'][$regionId]['INDUSTRIES'][$industryId]['TARIFFS'][$tariffId] = $tariff;
}

if (empty($_GET['interval-start'])) {
    $_GET['interval-start'] = 0;
}
if (empty($_GET['interval-end'])) {
    $_GET['interval-end'] = 50;
}

$start = (int)$_GET['interval-start'];
$end = (int)$_GET['interval-end'];


$unsetBankIndex = [];
foreach($arResult['BANKS'] as $i => $arBank) {
    foreach ($arResult['FILTER']['BANKS'] as $j => $bank) {
        if ($bank['bx_id'] == $arBank['ID']) {
            $arResult['FILTER']['BANKS'][$j]['DATA_GOS'] = getDataGos($arBank);
        }
    }



    $regionKeys = array_keys($arBank['REGIONS']);

    $arResult['BANKS'][$i]['REGION_INDEX'] = $regionKeys[0];
    if (count($arBank['REGIONS']) > 1) {
        $arResult['BANKS'][$i]['REGION_INDEX'] = getRegionIndex($arBank);
    }

    foreach ($arBank['REGIONS'] as $j => $arRegion) {
        foreach ($arRegion['INDUSTRIES'] as $k => $arIndustry) {
            $minRate = 100;
            $terminalRent = false;
            $terminalBuy = false;
            $terminalOwn = false;

            foreach ($arIndustry['TARIFFS'] as $arTariff) {
                if ($arTariff['terminal_rent']) {
                    $terminalRent = true;
                }

                if ($arTariff['terminal_buy']) {
                    $terminalBuy = true;
                }

                if ($arTariff['terminal_own']) {
                    $terminalOwn = true;
                }

                foreach($arTariff['rates'] as $arRate) {
                    $min = $arRate['min'];
                    $max = $arRate['max'];

                    if ($start && $end) {
                        if (!($min <= $start && $start <= $max) && !($min <= $end && $end <= $max)) {
                            continue;
                        }
                    } else if ($start) {
                        if (!($min <= $start && $start <= $max)) {
                            continue;
                        }
                    } else if ($end) {
                        if (!($min <= $end && $end <= $max)) {
                            continue;
                        }
                    }

                    $value = (float)str_replace(',', '.', $arRate['value']);

                    if ($value < $minRate) {
                        $minRate = $value;
                    }
                }
            }

            if ($minRate === 100) {
                $arResult['BANKS'][$i]['REGIONS'][$j]['INDUSTRIES'][$k]['RATE'] = 'индивидуально';
            } else {
                $arResult['BANKS'][$i]['REGIONS'][$j]['INDUSTRIES'][$k]['RATE'] = str_replace('.', ',', $minRate) . '%';
            }

            $arResult['BANKS'][$i]['REGIONS'][$j]['INDUSTRIES'][$k]['TERMINAL_RENT'] = $terminalRent;
            $arResult['BANKS'][$i]['REGIONS'][$j]['INDUSTRIES'][$k]['TERMINAL_BUY'] = $terminalBuy;
            $arResult['BANKS'][$i]['REGIONS'][$j]['INDUSTRIES'][$k]['TERMINAL_OWN'] = $terminalOwn;

            if (needUnset($arResult['BANKS'][$i]['REGIONS'][$j]['INDUSTRIES'][$k])) {
                $unsetBankIndex[] = $i;
            }
        }
    }

    if (empty($arBank['REGIONS'])) {
        $unsetBankIndex[] = $i;
    }
}

foreach ($unsetBankIndex as $i) {
    unset($arResult['BANKS'][$i]);
}


function getDataBranches($arBank)
{
    return $arBank['countBranches'] > 0 ? 'true' : 'false';
}

function getDataOnline($arBank)
{
    return BankService::isOnlineBank($arBank['ID']) ? 'true' : 'false';
}

function getDataGos($arBank)
{
    return $arBank['PROPERTIES']['PROPERTY_CHECK_GOS']['VALUE'] === 'Y' ? 'true' : 'false';
}

function needUnset($arBank)
{
    if (isEmptyFilter() || isRent($arBank) || isBuy($arBank) || isOwn($arBank)) {
        return false;
    }

    return true;
}

function isEmptyFilter()
{
    $filterParams = [
        'check-terminal-rent',
        'check-buy-terminal',
        'check-my-terminal',
    ];

    foreach ($filterParams as $param) {
        if (!empty($_GET[$param])) {
            return false;
        }
    }

    return true;
}

function isRent($arBank)
{
    return $_GET['check-terminal-rent'] && $arBank['TERMINAL_RENT'];
}

function isBuy($arBank)
{
    return $_GET['check-buy-terminal'] && $arBank['TERMINAL_BUY'];
}

function isOwn($arBank)
{
    return $_GET['check-my-terminal'] && $arBank['TERMINAL_OWN'];
}

$arEquipments = [];
$arIblock = getIblockByCode('acquiring_equipments');
$arFilter = ['IBLOCK_ID' => $arIblock['ID']];
$dbResult = CIBlockElement::GetList([], $arFilter);
while ($arEquipment = $dbResult->Fetch()) {

    if (!empty($arEquipment['PREVIEW_PICTURE'])) {
        $img = CFile::ResizeImageGet($arEquipment['PREVIEW_PICTURE'], ['width' => 30, 'height' => 34], 2);
        $arEquipment['PREVIEW_PICTURE'] = $img['src'];
    }

    $arEquipments[$arEquipment['ID']] = $arEquipment;
}

$sql = 'select * from acquiring_equipments';
$recordset = $connection->query($sql);
while ($equipment = $recordset->fetch()) {
    $bankId = $equipment['bank_bx_id'];
    if (empty($arResult['BANKS'][$bankId])) {
        continue;
    }

    $arEquipment = $arEquipments[$equipment['equipment_bx_id']];
    $arEquipment['description'] = $equipment['description'];
    $arEquipment['price'] = $equipment['price'];

    $arResult['BANKS'][$bankId]['EQUIPMENTS'][] = $arEquipment;
}

foreach ($arResult['BANKS'] as $i => $arBank) {
    $arResult['BANKS'][$i]['IS_ONE_EQUIPMENT_DESCRIPTION'] = true;

    if (count($arBank['EQUIPMENTS']) <= 1) {
        $arResult['BANKS'][$i]['IS_ONE_EQUIPMENT_DESCRIPTION'] = false;
        continue;
    }

    $isOneEquipmentDescription = true;
    $equipmentDescription = $arBank['EQUIPMENTS'][0]['description'];

    foreach ($arBank['EQUIPMENTS'] as $arEquipment) {
        if ($equipmentDescription != $arEquipment['description']) {
            $arResult['BANKS'][$i]['IS_ONE_EQUIPMENT_DESCRIPTION'] = false;
            break;
        }
    }
}

foreach ($arResult['BANKS'] as $i => $arBank) {
    $arResult['BANKS'][$i]['IS_ONE_EQUIPMENT_PRICE'] = true;

    if (count($arBank['EQUIPMENTS']) <= 1) {
        $arResult['BANKS'][$i]['IS_ONE_EQUIPMENT_PRICE'] = false;
        continue;
    }

    $isOneEquipmentDescription = true;
    $equipmentDescription = $arBank['EQUIPMENTS'][0]['price'];

    foreach ($arBank['EQUIPMENTS'] as $arEquipment) {
        if ($equipmentDescription != $arEquipment['price']) {
            $arResult['BANKS'][$i]['IS_ONE_EQUIPMENT_PRICE'] = false;
            break;
        }
    }
}


// сортировка
usort($arResult['BANKS'], function($a, $b) {
    return $b['COUNT_BRANCHES'] <=> $a['COUNT_BRANCHES'];
});

$i = 0;
foreach($arResult['BANKS'] as $j => $arBank) {
    $i++;
    $success = true;
    while($success) {
        try {
            $arResult['BANKS'][$j]['SORT'] = BankService::getSort($arBank['ID'], $i);
            $success = false;
        } catch (\Exception $exception) {
            $i++;
        }
    }
}

usort($arResult['BANKS'], function($a, $b) {
    return $a['SORT'] <=> $b['SORT'];
});