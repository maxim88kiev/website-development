<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use AMBase\Podelu\Calculator;

$currentCity = \luckyproject\geo\GeoHelper::getCurrentCityName();

$arBanksIds = [];
foreach($arResult['ITEMS'] as $arItem){
  $arBanksIds[] = $arItem['ID'];
}
$arCity = Bitrix\Iblock\ElementTable::getList([
  'filter' => ['NAME' => $currentCity,'IBLOCK_ID'=>4],
  'select' => ['NAME','ID']
])->Fetch();
$resZon = CIBlockElement::GetList(
  [],
  [
    'ACTIVE' => 'Y',
    'IBLOCK_ID' => '5',
    'PROPERTY_PROPERTY_CITY' => $arCity['ID']
  ],
  false,
  false,
  [
    'ID','NAME'
  ]
  );
  $arrayZones = [];

  while($arZon = $resZon->fetch()){
    $arrayZones[] = $arZon['ID'];
  }
$resTarrifs = CIBlockElement::GetList(
  [],
  [
    'ACTIVE' => 'Y',
    'IBLOCK_ID' => '2',
    'PROPERTY_PROPERTY_BANK' => $arBanksIds,
    'PROPERTY_PROPERTY_TARRIF_ZONE' => $arrayZones
  ]
  );
$arTarrifsBanksMap = [];
$tariffs = [];
while($rsTarif = $resTarrifs->GetNextElement()){
    $arTarif = $rsTarif->GetFields();
    $arTarif['PROPERTIES'] = $rsTarif->GetProperties();
    $arTarrifsBanksMap[$arTarif['PROPERTIES']['PROPERTY_BANK']['VALUE']][] = $arTarif;
    $tariffs[] = $arTarif;
}

$calculator = new \AMBase\Podelu\Calculator($tariffs);
$sortedBankIdList = $calculator->sort();

foreach($arResult['ITEMS'] as $arItem){
    $bankId = $arItem['ID'];
    $arBanks[$bankId] = $arItem;
    if($sortedBankIdList[$bankId]['sort'] != '') {
        $arBanks[$bankId]['BUSINESS_SORT'] = $sortedBankIdList[$bankId]['sort'];
    } else {
        $arBanks[$bankId]['BUSINESS_SORT'] = 100;
    }
    $arBanks[$bankId]['TOTAL_COUNT'] = count($arTarrifsBanksMap[$arItem['ID']]);
}
$arResult['ITEMS'] = $calculator->sortBy($arBanks, 'BUSINESS_SORT');

$this->__component->SetResultCacheKeys(array('SECTION_PAGE_URL'));