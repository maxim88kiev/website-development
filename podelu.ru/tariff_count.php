<?php
    /**
     * Подсчет кол-ва тарифов в конкретном регионе
     * 
     * @author Ivan Kryukov <fanatneba@gmail.com>
     */
    require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    $result = CIBlockElement::GetList(
        [], 
        ["IBLOCK_ID" => 2], 
        false, 
        [], 
        ["ID", "NAME", "CODE", "IBLOCK_ID", "PROPERTY_PROPERTY_BANK.NAME", "PROPERTY_PROPERTY_TARRIF_ZONE.NAME"]
    );

    $count = 0;

    $data = [];
    while( $object = $result->GetNextElement() ) {
        $fields = $object->GetFields();

        $data[] = $fields;
    }

    foreach($data as $item) {
        $arParams = array("replace_space"=>"-","replace_other"=>"-");
        $trans = Cutil::translit($item['NAME'] . " " . $item['PROPERTY_PROPERTY_BANK_NAME'] . " " . $item['PROPERTY_PROPERTY_TARRIF_ZONE_NAME'],"ru",$arParams);

        $el = new CIBlockElement;
        $res = $el->Update($item['ID'], [
            'CODE' => $trans
        ]);

    }