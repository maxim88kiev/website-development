<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use luckyproject\geo\GeoHelper;

$link = '/rko/';

$cityName = GeoHelper::getCurrentCityName();
$arFilter = ['IBLOCK_ID' => 4, 'NAME' => $cityName];
$arElement = CIBlockElement::GetList([], $arFilter)->Fetch();
if (!empty($arElement) && $cityName !== 'Москва') {
    $link .= $arElement['CODE'] . '/';
}

$calculatorLink = ['Расчет РКО', $link, [], [], ''];
$aMenuLinks = array_merge([$calculatorLink], $aMenuLinks);
