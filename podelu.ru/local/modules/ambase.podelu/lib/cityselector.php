<?php

namespace AMBase\Podelu;

use AMBase\Podelu\Repositories\CityRepository;
use luckyproject\geo\GeoHelper;

class CitySelector
{
    private $repository = null;

    public function __construct(CityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getCityList()
    {
        $aMenuLinks = [];

        $geoData = GeoHelper::getAllGeoData();
        $arUrl = explode('/', $_SERVER['REQUEST_URI']);
        $prefix = '/rko/';
        if (in_array($arUrl[2], ['ip', 'ooo'])) {
            $prefix .= $arUrl[2] . '/';
        }

        $arCities = $this->repository->all(['order' => ['SORT', 'NAME']]);
        foreach ($arCities as $arCity) {
            $name = $arCity['NAME'];
            $region = searchInAllGeoData($geoData, $arCity['NAME']);
            $code = $prefix . $arCity['CODE'] . '/';

            if (!in_array($name, ['Москва', 'Санкт-Петербург'])) {
                $name .= ', ' . $region;
            }

            $dataUrl = '/ajax/region.php?city=' . $arCity['NAME'] . '&region=' . $region;

            $vars = [
                'ID' => $arCity['ID'],
                'NAME' => $arCity['NAME'],
                'CODE' => $arCity['CODE'],
                'DATA_URL' => $dataUrl,
            ];

            $aMenuLinks[] = [$name, $code, [], $vars, ''];
        }

        return $aMenuLinks;
    }
}