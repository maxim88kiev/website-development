<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use \luckyproject\geo\GeoHelper;
use \AMBase\Podelu\Bank;

function isShowBank($id, $cityName)
{
    if (Bank::isOnline($id)) {
        return true;
    }

    if (getBranchesCountByCityAndBankId($cityName, $id) > 0) {
        return true;
    }

    return false;
}

$currentCityName = GeoHelper::getCurrentCityName();

$arBanks = [];
foreach ($arResult['ITEMS'] as $arItem) {
    if (!isShowBank($arItem['ID'], $currentCityName)) {
        continue;
    }

    $arBanks[] = [
        'ID' => $arItem['ID'],
        'NAME' => $arItem['NAME'],
        'URL' => $arItem['DETAIL_PAGE_URL'],
        'IMG' => [
            'SRC' => $arItem['DETAIL_PICTURE']['SRC'],
            'WIDTH' => $arItem['DETAIL_PICTURE']['WIDTH'],
            'HEIGHT' => $arItem['DETAIL_PICTURE']['HEIGHT'],
            'ALT' => $arItem['DETAIL_PICTURE']['ALT'],
            'TITLE' => $arItem['DETAIL_PICTURE']['TITLE'],
        ],
    ];
}

$arResult['BANKS'] = $arBanks;
