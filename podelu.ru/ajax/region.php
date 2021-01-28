<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use \luckyproject\geo\GeoHelper;
use AMBase\Podelu\CityForm;
use AMBase\Podelu\Redirect;

if (isset($_GET['query'])) {
    $query = mb_convert_case(mb_strtolower(trim($_GET['query'])), MB_CASE_TITLE, "UTF-8");

    $regions = GeoHelper::getAllGeoData();

    $result = [];
    foreach($regions as $region => $regions) {
        foreach($regions as $city) {
            if (mb_strpos($city, $query) === false) {
                continue;
            } else {
                array_push($result, [
                    'region' => $region,
                    'city' => $city
                ]);
            }
        }
    }

    die(json_encode($result));
}

if (isset($_GET['city']) && isset($_GET['region'])) {
    $city = trim($_GET['city']);
    $region = trim($_GET['region']);

    $regions = GeoHelper::getAllGeoData();

    $location = $_SERVER['HTTP_REFERER'];

    if (isset($regions[$region])) {
        if (in_array($city, $regions[$region])) {
            $_SESSION['LUCKY_PROJECT_GEO']['REGION'] = $region;
            $_SESSION['LUCKY_PROJECT_GEO']['CITY'] = $city;
            CityForm::setCityFormsByCityName($city);

            if ($uri = (new Redirect())->getUriForNewCity($city)) {
                $location = $uri;
            }
        }
    }

    echo json_encode(['REDIRECT_URL' => $location]);
}
