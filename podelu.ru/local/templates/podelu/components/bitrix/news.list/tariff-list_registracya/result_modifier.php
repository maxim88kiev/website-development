<?php
use \Bitrix\Main\Loader;
use \luckyproject\geo\GeoHelper;
use \AMBase\Podelu\CalculatorRegister;

Loader::includeModule('ambase.podelu');

if (empty($arParams['CITY_NAME'])) {
    $arParams['CITY_NAME'] = GeoHelper::getCurrentCityName();
}

$arResult['BANKS'] = getBankList();
$arResult['ITEMS'] = (new CalculatorRegister($arResult['ITEMS'], $arParams['SORT_BANKS']))->exec();
