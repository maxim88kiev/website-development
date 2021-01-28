<?php
    /**
     * Файл для экспорта тарифных зон из CMS 1C Bitrix
     * Используется только вместе с модулем для испорта CSV https://marketplace.1c-bitrix.ru/solutions/webizi.csv/
     * 
     * @author Ivan Kryukov <fanatneba@gmail.com>
     */
    require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

    // ID инфоблока с тарифными зонами
    define('TARIFF_ZONES_IBLOCK_ID', 5);

    $result = CIBlockElement::GetList(
        [], 
        ["IBLOCK_ID" => TARIFF_ZONES_IBLOCK_ID], 
        false, 
        [], 
        ["ID", "NAME", "IBLOCK_ID", "PROPERTY_PROPERTY_BANK.NAME"]
    );

    $data = [];
    while( $object = $result->GetNextElement() ) {
        $fields = $object->GetFields();

        $tariffZoneNumber = $fields['NAME'];
        $bankName = $fields['PROPERTY_PROPERTY_BANK_NAME'];

        // Асоциативный массив: Номер тарифной зоны + Название банка => ID в Bitrix
        $data[ sha1(trim($tariffZoneNumber) . trim($bankName)) ] = $fields['ID'];
    }

    die(json_encode($data));
