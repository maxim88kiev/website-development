<?php
    namespace luckyproject\geo;

    /**
     * Вспомогательный класс для работы с GEO
     */
    final class GeoHelper {

        /**
         * Веозвоащает все регионы и города в виде асоциативного массива
         * @return array
         */
        public static function getAllGeoData() {
            $geoData = [];

            $file = file(PATH_TO_GEO_DATA);
            foreach($file as $line) {
                $tmp = explode(';', $line);

                $region = trim($tmp[0]);
                $city = trim($tmp[1]);

                if( !isset($geoData[$region]) ) {
                    $geoData[$region] = [];
                }
                $geoData[$region][] = $city;
            }
            file_put_contents(__DIR__.'/info_456.log',print_r($geoData[$city],true));
            return $geoData;
        }

        /**
         * Определение местоположения пользователя
         * @return array
         */
        public static function detect(GeoData $adapter) {
            return [
                'CITY' => $adapter->getCityName(),
                'REGION' => $adapter->getRegionName()
            ];
        }

        /**
         * Возвращает имя города пользователя
         * @example GeoHelper::getCurrentCityName();
         * @return mixed
         */
        public static function getCurrentCityName() {
            return isset($_SESSION['LUCKY_PROJECT_GEO']['CITY']) ? $_SESSION['LUCKY_PROJECT_GEO']['CITY'] : 'Москва';
        }

        /**
         * Возвращает имя регионы пользователя
         * @example GeoHelper::getCurrentRegionName();
         * @return mixed
         */
        public static function getCurrentRegionName() {
            return isset($_SESSION['LUCKY_PROJECT_GEO']['REGION']) ? $_SESSION['LUCKY_PROJECT_GEO']['REGION'] : false;
        }
    }