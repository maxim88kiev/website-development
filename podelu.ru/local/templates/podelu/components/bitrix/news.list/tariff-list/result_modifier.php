<?php

use \luckyproject\geo\GeoHelper;
use \Bitrix\Main\Loader;

Loader::includeModule('ambase.podelu');

function isRkoCityPath()
{
    $arUri = parse_url($_SERVER['REQUEST_URI']);
    $arPath = explode('/', $arUri['path']);

    if (count($arPath) !== 4) {
        return false;
    }

    if ($arPath[1] !== 'rko') {
        return false;
    }

    $dir = $_SERVER['DOCUMENT_ROOT'] . '/rko/';
    $dirs = [];
    $files = scandir($dir);
    foreach ($files as $file) {
        if (is_dir($dir . $file) && !in_array($file, ['.', '..'])) {
            $dirs[] = $file;
        }
    }

    if (in_array($arPath[2], $dirs)) {
        return false;
    }

    return true;
}

function isOnlineBank($bankID)
{
    return in_array($bankID, [1681, 1682, 1694, 1728]);
}

if (empty($arParams['CITY_NAME'])) {
    $arParams['CITY_NAME'] = GeoHelper::getCurrentCityName();
}

$arResult['BANKS'] = getBankList();

if ($arParams['OLD_SORT'] != 'Y') {
    $calculator = new \AMBase\Podelu\Calculator($arResult['ITEMS']);
    $sortedBankIdList = $calculator->sort();

    foreach ($arResult['ITEMS'] as $index => $arItem) {
        $bankId = $arItem['PROPERTIES']['PROPERTY_BANK']['VALUE'];
        $arResult['ITEMS'][$index]['BUSINESS_SORT'] = $sortedBankIdList[$bankId]['sort'];
    }

    $arResult['ITEMS'] = $calculator->sortBy($arResult['ITEMS'], 'BUSINESS_SORT');
}

if (empty($arParams['DISPLAY_TITLE'])) {
    $arParams['DISPLAY_TITLE'] = 'Результаты поиска';
}

$countBanksSuffix = 'вашем городе';
if (isRkoCityPath()) {
    $countBanksSuffix = '#CITY_FORM_6#';
}

foreach($arResult["ITEMS"] as $i => $tariffItem) {
    $bankID = $tariffItem['PROPERTIES']['PROPERTY_BANK']['VALUE'];
    $arBankItem = getBank($bankID, $arResult['BANKS']);
    $countBranchesInCity = getBranchesCountByCityAndBankId($arParams['CITY_NAME'], $bankID);

    $countBanks = '';
    if (isOnlineBank($bankID)) {
        $countBanks = '<strong>Онлайн-банк</strong>';
    } else {
        $countBanks .= '<strong>';
        $countBanks .= $arBankItem['PROPERTIES']['PROPERTY_COUNT_BRANCHES_IN_COUNTRY']['VALUE'];
        $countBanks .= '</strong>';
        $countBanks .= ' по стране<br/>';
        $countBanks .= '<strong>' . $countBranchesInCity . '</strong> в ' . $countBanksSuffix;
    }

    $arResult["ITEMS"][$i]['COUNT_BANKS'] = $countBanks;
}