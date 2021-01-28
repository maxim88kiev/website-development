<?php
use luckyproject\geo as Geo;
use AMBase\Podelu\CityForm;
use AMBase\Podelu\URL;

// Путь до класса для работы с сервисом SxGeo
define('PATH_TO_SXGEO_PHP', $_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/geo/SxGeo/SxGeo.php");
// Путь до базы данных для сервиса SxGeo
define('PATH_TO_SXGEO_DAT', $_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/geo/SxGeo/SxGeoCity.dat");
// Путь до файла со всеми регионами и городами в формате CSV
define('PATH_TO_GEO_DATA', $_SERVER['DOCUMENT_ROOT'] . "/local/templates/podelu/region.csv");

require_once(PATH_TO_SXGEO_PHP);

require_once('GeoData.php');
require_once('SxGeoAdapter.php');
require_once('GeoHelper.php');

// Если ГЕО не определено, то пытаемся сделать это
AddEventHandler("main", "OnPageStart", function() {
    \Bitrix\Main\Loader::includeModule('iblock');
    
    if (URL::isIncludeCity()) {
        $cityName = URL::getCityName();
        $_SESSION['LUCKY_PROJECT_GEO']['CITY'] = $cityName;
        CityForm::setCityFormsByCityName($cityName);
        return;
    }

    $isChangedIp = $_SESSION['REMOTE_ADDR'] !== $_SERVER['REMOTE_ADDR'];
    if (empty($_SESSION['LUCKY_PROJECT_GEO']['CITY']) || $isChangedIp)  {
        $adapter = new Geo\SxGeoAdapter($_SERVER['REMOTE_ADDR']);

        $data = Geo\GeoHelper::detect($adapter);
        unset($adapter);

        $arUrl = parse_url($_SERVER['REQUEST_URI']);

        if (empty($data['CITY']) OR empty($data['REGION'])) {
            $data['REGION'] = 'Москва';
            $data['CITY'] = 'Москва';

            if ($arUrl['path'] === '/rko/') {
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /rko/moscow/");
                exit();
            }
        }
        
        $arCityFilter = ['IBLOCK_ID' => 4, 'NAME' => $data['CITY']];
    	$arCity = CIBlockElement::GetList([], $arCityFilter)->Fetch();
		if (empty($arCity)) {
            $data['REGION'] = 'Москва';
            $data['CITY'] = 'Москва';

            if ($arUrl['path'] === '/rko/') {
                header("HTTP/1.1 301 Moved Permanently");
                header("Location: /rko/moscow/");
                exit();
            }
        }

        $filename = $_SERVER['DOCUMENT_ROOT'] . '/geo.log';
		$logData = [
            'datetime' => (new DateTime())->format('c'),
		    'type' => 'cityDetected',
		    'city' => $data['CITY'],
        ];
		file_put_contents($filename, json_encode($logData, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);

        $_SESSION['LUCKY_PROJECT_GEO'] = $data;
        $_SESSION['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
        CityForm::setCityFormsByCityName($data['CITY']);
    }
});