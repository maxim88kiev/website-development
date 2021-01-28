<?php

// Подключение /vendor/autoload.php в файлe /bitrix/php_interface/dbconn.php

use \Bitrix\Main\Loader;

Loader::includeModule('ambase.podelu');

AMBase\Podelu\EventManager::bindEvents();

require($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/CUserIntervalProperty.php');

// ID Информационного блока банков
define('BANK_IBLOCK_ID', 1);
// ID Информационного блока тарифов
define('TARIFF_IBLOCK_ID', 2);
// ID Информационного блока тарифных зон
define('TARIFF_ZONE_IBLOCK_ID', 5);
define('INFINITE_NUMBER', 5000000);
define('HLBT_TARIFF_INDEX_TABLE_ID', 1);


// Путь до файла с кол-во отделений в городах
define('PATH_TO_COUNT_BRANCHES_CITIES', $_SERVER['DOCUMENT_ROOT'] . '/count_branches_cities.json');
global $COUNT_BRANCHES_CITIES_CACHED;
$COUNT_BRANCHES_CITIES_CACHED = json_decode(file_get_contents(PATH_TO_COUNT_BRANCHES_CITIES), true);

// Путь до файла с главными городами
//define('PATH_TO_MAIN_CITIES', $_SERVER['DOCUMENT_ROOT'] . '/main_cities.json');
//global $MAIN_CITIES_CACHED;

// Город по-умолчанию
define('DEFAULT_CITY_NAME', 'Москва');

// Подключаем функции-хелперы
require('helper.php');

// Подключаем хелпер для модуля определения региона
require('geo/boot.php');

// Include Bitrix iblock module
CModule::IncludeModule("iblock");

/**
 * Получить список ID тарифных зон по названию города,
 * либо по текущему местоположению
 *
 * @param string $cityName Название города
 * @return array
 */
function getTariffZonesIdsByGeoFilter($cityName='') {
    if (!$cityName) {
        $cityName = \luckyproject\geo\GeoHelper::getCurrentCityName();
    }

    $currentRegion = \luckyproject\geo\GeoHelper::getCurrentRegionName();

    $tariffZonesResultIds = lucky_cache("getTariffZonesIdsByGeoFilter.$cityName", function() use($cityName, $currentRegion) {
        // Получем все тарифные зоны по GEO пользователя
        $result = \CIBlockElement::GetList(
            [],
            [
                "IBLOCK_ID" => TARIFF_ZONE_IBLOCK_ID,
                [
                    "LOGIC" => "OR",
                    [
                        "PROPERTY_PROPERTY_CITY.NAME" => "%$cityName%"
                    ]
                ]
            ],
            false,
            ["nTopCount" => 999],
            ["ID"]
        );

        $tariffZonesResultIds = [];
        while($object = $result->GetNextElement()) {
            $tariffZonesResultIds[] = $object->GetFields()['ID'];
        }

        return $tariffZonesResultIds;
    });

    // Если тарифных зон для текущего города не нашли
    if( empty($tariffZonesResultIds) ) {
        // Получем список соотвествия Регион => Город (Административный центр)
        /*
        global $MAIN_CITIES_CACHED;
        if($MAIN_CITIES_CACHED === NULL) {
            $MAIN_CITIES_CACHED = json_decode(file_get_contents(PATH_TO_MAIN_CITIES), true);
        }

        $cityName = DEFAULT_CITY_NAME;
        // Если такой регион есть, то берем его. Иначе используем город по умолчанию
        if( isset($MAIN_CITIES_CACHED[$currentRegion]) ) {
            $cityName = $MAIN_CITIES_CACHED[$currentRegion];
        }
        */

        // Город по умолчанию - Москва
        $cityName = "Москва";

        $result = \CIBlockElement::GetList(
            [],
            [
                "IBLOCK_ID" => TARIFF_ZONE_IBLOCK_ID,
                [
                    "LOGIC" => "OR",
                    [
                        "PROPERTY_PROPERTY_CITY.NAME" => "%$cityName%"
                    ]
                ]
            ],
            false,
            ["nTopCount" => 999],
            ["ID"]
        );

        $tariffZonesResultIds = [];
        while($object = $result->GetNextElement()) {
            $tariffZonesResultIds[] = $object->GetFields()['ID'];
        }
    }

    return $tariffZonesResultIds;
}

/**
 * Получить список ID тарифов по названию города,
 * либо по текущему местоположению
 *
 * @param int $step
 * @param string $cityName
 *
 * @return array
 */
function getTariffIdListByGeoFilter($step = 30, $cityName='') {
    if ($cityName) {
        $tariffZonesResultIds = getTariffZonesIdsByGeoFilter($cityName);
    } else {
        $tariffZonesResultIds = getTariffZonesIdsByGeoFilter();
    }

    $cacheKey = sha1("getTariffIdListByGeoFilter.$step" . json_encode($tariffZonesResultIds));
    $arTariffResultIds = lucky_cache($cacheKey, function() use($step, $tariffZonesResultIds) {
        $result = \CIBlockElement::GetList(
            [],
            [
                "IBLOCK_ID" => TARIFF_IBLOCK_ID,
                "PROPERTY_PROPERTY_TARRIF_ZONE.ID" => $tariffZonesResultIds,
                array(
                    "LOGIC" => "AND",
                    array('>=PROPERTY_PROPERTY_INTERVAL_TO' => $step),
                    array('<=PROPERTY_PROPERTY_INTERVAL_FROM' => $step)
                )
            ],
            false,
            ["nTopCount" => 999],
            ['ID']
        );

        $arTariffResultIds = [];
        while($object = $result->GetNextElement()) {
            $arTariffResultIds[] = $object->GetFields()['ID'];
        }

        return $arTariffResultIds;
    });

    return $arTariffResultIds;
}

/**
 * Получить список банков
 * @param array $arSelect
 * @return array
 */
function getBankList($arSelect = ["ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_*", "DETAIL_PAGE_URL", "CODE"]) {
    $result = CIBlockElement::GetList([], ["IBLOCK_ID" => BANK_IBLOCK_ID], false, [], $arSelect);

    $arBankResult = [];
    while($object = $result->GetNextElement()) {
        $item = $object->GetFields();
        $item['PREVIEW_PICTURE'] = CFile::GetPath($item["PREVIEW_PICTURE"]);
        $item['DETAIL_PICTURE'] = CFile::GetPath($item["DETAIL_PICTURE"]);

        $item['PROPERTIES'] = $object->GetProperties();

        $arBankResult[$item['ID']] = $item;
    }

    return $arBankResult;
}

function getBankListByIds($ids = [] , $arSelect = ["ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PROPERTY_*", "DETAIL_PAGE_URL", "CODE"]) {
    $result = CIBlockElement::GetList([], ["IBLOCK_ID" => BANK_IBLOCK_ID , "ID" => $ids], false, [], $arSelect);

    $arBankResult = [];
    while($object = $result->GetNextElement()) {
        $item = $object->GetFields();
        $item['PREVIEW_PICTURE'] = CFile::GetPath($item["PREVIEW_PICTURE"]);
        $item['DETAIL_PICTURE'] = CFile::GetPath($item["DETAIL_PICTURE"]);

        $item['PROPERTIES'] = $object->GetProperties();

        $arBankResult[$item['ID']] = $item;
    }

    return $arBankResult;
}

/**
 * Получить данные по банку используя его ID
 * @param int $id
 * @param array $arBankResult
 * @return mixed
 */
function getBank($id, $arBankResult) {
    if (empty($arBankResult[$id])) {
        return false;
    }

    return $arBankResult[$id];
}

/**
 * Пометить цифры в тексе тэгами. Пример
 * markNumberWithTags('1 200 руб.', '<b>', '</b>'); => "<b>1 200</b> руб."
 * @param string $value
 * @param string $openTag
 * @param string $closeTag
 * @todo Сделать нормальное регулярное выражение
 * @return string
 */
function markNumberWithTags($value, $openTag, $closeTag) {
    return preg_replace('/[0-9 ]+/', "$openTag$0$closeTag", $value);
}


function splitPocketValue($value) {
    $result = $value;
    if(strpos($value , "—") !== false){
        $chanks = explode("—" , $value);
        if(count($chanks) == 2){
            $result = '<div class="tariff-item__head-param-value"><span>' . $chanks[0] . '</span><span>' . markNumberWithTags($chanks[1], "<strong>", "</strong>").'</span></div>';
        }
    } else {

        $result = $value;
    }
    return $result;
}

/**
 * Получить все тарифы конкретного банка
 * @param integer $id
 * @return array
 */
function getAllTariffByBankID($id) {
    $arSelect = Array(
        "ID",
        "IBLOCK_ID",
        "IBLOCK_SECTION_ID",
        "NAME",
        "PROPERTY_*"
    );

    global $arFilter;
    $arFilter = Array(
        "IBLOCK_ID" => TARIFF_IBLOCK_ID,
        "ACTIVE" => "Y",
        "PROPERTY_PROPERTY_BANK"=> $id
    );

    $arResult = CIBlockElement::GetList(
        Array(),
        $arFilter,
        false,
        Array(),
        $arSelect
    );

    $data = [];
    while($object = $arResult->GetNextElement()) {
        $arItem = $object->GetFields();
        $arItem['PROPERTIES'] = $object->GetProperties();

        $data[] = $arItem;
    }

    return $data;
}

/**
 * Получить все тарифы конретного банка по ID банка и ID's тариынфх планов
 * @param string $bankId
 * @return mixed
 */
function getAllTarifByBankIdAndCityName($bankId) {
    $tariffZonesResultIds = getTariffZonesIdsByGeoFilter();

    $cacheKey = sha1("getAllTarifByBankIdAndCityName.$bankId" . json_encode($tariffZonesResultIds));

    $data = lucky_cache($cacheKey, function() use($bankId, $tariffZonesResultIds) {
        $arSelect = Array(
            "ID",
            "IBLOCK_ID",
            "IBLOCK_SECTION_ID",
            "NAME",
            "PROPERTY_*"
        );

        global $arFilter;
        $arFilter = Array(
            "IBLOCK_ID" => TARIFF_IBLOCK_ID,
            "ACTIVE" => "Y",
            "PROPERTY_PROPERTY_BANK" => $bankId,
            "PROPERTY_PROPERTY_TARRIF_ZONE.ID" => $tariffZonesResultIds,
        );

        $arResult = CIBlockElement::GetList(
            Array(),
            $arFilter,
            false,
            Array("nTopCount" => 999),
            $arSelect
        );

        $data = [];
        while($object = $arResult->GetNextElement()) {
            $arItem = $object->GetFields();
            $arItem['PROPERTIES'] = $object->GetProperties();

            $data[] = $arItem;
        }

        return $data;
    });

    return $data;
}

/**
 * Получить кол-во отделений в определенном городе
 *
 * @param string $city
 * @param integer $bankId
 * @return int
 */
function getBranchesCountByCityAndBankId($city, $bankId) {
    return lucky_cache("getBranchesCountByCityAndBankId.$city.$bankId", function() use($city, $bankId) {
        global $COUNT_BRANCHES_CITIES_CACHED;

        if( isset($COUNT_BRANCHES_CITIES_CACHED[$bankId][$city]) ) {
            return $COUNT_BRANCHES_CITIES_CACHED[$bankId][$city];
        } else {
            return -1;
        }
    });
}

function searchInAllGeoData($data, $cityName) {
    foreach($data as $regionName => $regions) {
        foreach($regions as $city) {
            if( $city === $cityName ) {
                return $regionName;
            }
        }
    }

    return false;
}

function lucky_cache($key, $callback, $time = 3600, $path = 'luckyprojectcache') {
    $cache = \Bitrix\Main\Data\Cache::createInstance();

    $arCacheData = [];
    if ($cache->initCache($time, $key, $path)) {
        $arCacheData = $cache->GetVars();

        $arCacheData = $arCacheData['cache'];
    } elseif ($cache->startDataCache()) {
        $arCacheData = call_user_func($callback);

        $cache->endDataCache(['cache' => $arCacheData]);
    }

    return $arCacheData;
}