<?php
    /**
     * Экспорт названий городов с соответствующим ему ID. Вывод в формате json
     * 
     * @author Ivan Kryukov <fanatneba@gmail.com>
     */
    require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    // ID инфоблока с городами
    define('CITIES_IBLOCK_ID', 4);

    $result = CIBlockElement::GetList(
        [], 
        ["IBLOCK_ID" => CITIES_IBLOCK_ID], 
        false, 
        [], 
        ["ID", "NAME", "PROPERTY_PROPERTY_BANK"]
    );

    $cities = [];
    while( $object = $result->GetNextElement() ) {
        $fields = $object->GetFields();
        $cities[ trim($fields['NAME']) ] = intval($fields['ID']);
    }

    ksort($cities);

    die(json_encode($cities));