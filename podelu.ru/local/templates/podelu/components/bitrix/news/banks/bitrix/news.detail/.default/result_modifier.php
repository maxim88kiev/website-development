<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arResult['TARIFF_DATA'] = getAllTarifByBankIdAndCityName($arResult['ID']);
if(empty($arResult['TARIFF_DATA'])){
    LocalRedirect('/banks/' , false , '301 Moved permanently');
}
$APPLICATION->SetPageProperty('tariffData', $arResult['TARIFF_DATA']);
$APPLICATION->SetPageProperty('tariffCount', count($arResult['TARIFF_DATA']));
$APPLICATION->SetPageProperty(
    'tableHeader', $arResult['PROPERTIES']['PROPERTY_TABLE_HEADER']['VALUE']
);

if (!empty($arResult['PROPERTIES']['PROPERTY_FAQ']['VALUE'])) {
    $arFaqFilter = ['ID' => $arResult['PROPERTIES']['PROPERTY_FAQ']['VALUE']];
    $APPLICATION->SetPageProperty("arFaqFilter", $arFaqFilter);
}
