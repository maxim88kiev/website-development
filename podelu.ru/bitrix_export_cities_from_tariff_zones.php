<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    $result = \CIBlockElement::GetList(
        [], 
        [
            "IBLOCK_ID" => TARIFF_ZONE_IBLOCK_ID
        ], 
        false, 
        ["nTopCount" => 999], 
        ["ID", "IBLOCK_ID", "PROPERTY_PROPERTY_CITY.VALUE"]
    );

    $tariffZonesResult = [];
    while($object = $result->GetNextElement()) {
        $tmp = [];

        $tmp['FIELDS'] = $object->GetFields();
        $tmp['PROPERTIES'] = $object->GetProperties();

        $tariffZonesResult[] = $tmp;
    }   
    
    $ids = [];
    foreach($tariffZonesResult as $arItem) {
        foreach($arItem['PROPERTIES']['PROPERTY_CITY']['VALUE'] as $id) {
            $ids[$id] = $id;
        }
    }

    $result = \CIBlockElement::GetList(
        [], 
        [
            "IBLOCK_ID" => 4,
            "ID" => $ids
        ], 
        false, 
        ["nTopCount" => 999], 
        ["ID", "NAME"]
    );

    $cities = [];
    while($object = $result->GetNextElement()) {
        $cities[] = $object->GetFields()['NAME'];
    }   

    file_put_contents('cities.json', json_encode($cities));