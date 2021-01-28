<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    $arResult['CURRENT_CITY_NAME'] = \luckyproject\geo\GeoHelper::getCurrentCityName();
    $arResult['CURRENT_REGION_NAME'] = \luckyproject\geo\GeoHelper::getCurrentRegionName();

    $arResult['GEO_DATA'] = \luckyproject\geo\GeoHelper::getAllGeoData();
    $arResult['JSON_CITIES'] = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/cities.json"), false);
    $this->IncludeComponentTemplate();
?>