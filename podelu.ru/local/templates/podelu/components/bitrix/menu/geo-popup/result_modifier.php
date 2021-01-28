<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use AMBase\Podelu\URL;
use \luckyproject\geo\GeoHelper;

$path = parse_url($_SERVER['REQUEST_URI'])['path'];

$arResult['ITEMS'] = $arResult;
$arResult['STAY_THIS_PAGE'] = !URL::isIncludeCity() && !in_array($path, ['/rko/', '/rko/ip/', '/rko/ooo/']);
$arResult['CURRENT_CITY_NAME'] = GeoHelper::getCurrentCityName();
$arResult['CURRENT_REGION_NAME'] = GeoHelper::getCurrentRegionName();


if (empty($arResult['CURRENT_CITY_NAME'])) {
    $arResult['CURRENT_CITY_NAME'] = 'Москва';
    $arResult['CURRENT_REGION_NAME'] = 'Москва';
}

$arResult['TITLE'] = 'Выбрать';
if (!empty($arResult['CURRENT_CITY_NAME'])) {
    $arResult['TITLE'] = $arResult['CURRENT_CITY_NAME'];
}


