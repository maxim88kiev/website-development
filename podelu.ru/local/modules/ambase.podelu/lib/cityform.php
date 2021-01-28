<?php
namespace AMBase\Podelu;

use \Bitrix\Main\Application;

final class CityForm
{
    const SESSION_KEY = 'CITY_FORMS';

    private static $instance = null;

    public static function getInstance(): cityform
    {
        if (static::$instance === null) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function selectCityFormsByCityName($cityName)
    {
        $connection = Application::getConnection();
        $sql = "SELECT * FROM ambase_podelu_cities WHERE form_1 = '$cityName';";
        $recordset = $connection->query($sql);
        return $recordset->fetch();
    }

    public static function setCityFormsByCityName($cityName)
    {
        $data = static::selectCityFormsByCityName($cityName);
        return $_SESSION[static::SESSION_KEY] = $data;
    }

    public static function getCityForms()
    {
        $urlForMoscow = [
            '/calculator/',
            '/calculator/ip/',
            '/calculator/ooo/',
        ];

        if (in_array($_SERVER['REQUEST_URI'], $urlForMoscow)) {
            $cityForms = [
                'Москва', 'Москвы', 'Москве', 'Москву', 'Москвой', 'Москве'
            ];
        } else {
            $cityForms = $_SESSION[static::SESSION_KEY];
        }

        $filename = $_SERVER['DOCUMENT_ROOT'] . '/geo.log';
        $data = [
            'datetime' => (new \DateTime())->format('c'),
            'type' => 'getCityForms',
            'city' => $_SESSION['LUCKY_PROJECT_GEO']['CITY'],
        ];
        file_put_contents($filename, json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);

        return $cityForms;
    }

    public static function getCityNameByForm($form)
    {
        return static::getCityForms()[$form];
    }
}