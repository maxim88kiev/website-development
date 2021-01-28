<?php

if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Iblock\ElementTable;
use AMBase\Podelu\Repositories\CityRepository;
use AMBase\Podelu\CitySelector;



return [
    'CityRepository' => DI\create(CityRepository::class)
        ->constructor(new ElementTable),
    'CitySelector' => DI\create(CitySelector::class)
        ->constructor(DI\get('CityRepository'))
];
