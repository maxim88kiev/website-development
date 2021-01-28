<?php

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use AMBase\Podelu\App;

$citySelector = App::getInstance()->container->get('CitySelector');
$aMenuLinks = $citySelector->getCityList();
