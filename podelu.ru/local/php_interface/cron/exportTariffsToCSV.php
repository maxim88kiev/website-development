#!/usr/bin/php
<?php
$_SERVER["DOCUMENT_ROOT"] = __DIR__ . '/../../..';
$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];

if(php_sapi_name() !== 'cli'){
    exit();
}

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/csv_data.php");

set_time_limit(0);

\Bitrix\Main\Loader::includeModule('iblock');


$FIELDS = [
    "ID",
    "NAME",
    "PROPERTY_PROPERTY_BANK" ,
];

$PROPS = [
    "PROPERTY_ACCOUNT_PAYMENT_INTERVAL", //Плата за обслуживание
    "PROPERTY_PEOPLE_TRANSFER_INTERVAL" , //Переводы ФЛ в рублях
    "PROPERTY_CASH_OUT_SELF_INTERVAL" , //Снятие наличных через устройства самообслуживания
    "PROPERTY_CASH_IN_SELF_INTERVAL" , //Внесение наличных через устройства самообслуживания
];

$csvFile = new CCSVData();
$fields_type = 'R';
$delimiter = ";";
$csvFile->SetFieldsType($fields_type);
$csvFile->SetDelimiter($delimiter);

$arrHeaderCSV = [
    "ID тарифа" ,
    "Банк" ,
    "Города",
    "Название тарифа" ,
    "Плата за обслуживание" ,
    "Переводы ФЛ в рублях" ,
    "Снятие наличных через устройства самообслуживания" ,
    "Внесение наличных через устройства самообслуживания" ,
];

$csvFile->SaveFile($_SERVER["DOCUMENT_ROOT"] . "/upload/export_pockets.csv", $arrHeaderCSV);

$rsTariffs = CIBlockElement::GetList([] ,
    [
        "IBLOCK_ID" => 2,
        "ACTIVE" => "Y",
    ]
);

$banks = getBankList(["ID" , "NAME"]);

$tariffZonesToCitiesMap = [];
$rsTariffZones = CIBlockElement::GetList(
    [] ,
    [
        "IBLOCK_ID" => 5,
        "ACTIVE" => "Y"
    ]
);
$tariffZonesToCitiesMapRaw = [];
while($rsTariffZone = $rsTariffZones->GetNextElement()){
    $fields = $rsTariffZone->GetFields();
    $props = $rsTariffZone->GetProperties();
    $tariffZonesToCitiesMapRaw[$fields['ID']] = $props['PROPERTY_CITY']['VALUE'];
}

foreach ($tariffZonesToCitiesMapRaw as $id => $cities) {
    $rsCities = CIBlockElement::GetList([] , ['ID' => $cities , 'IBLOCK_ID' => 4] , false , false , ['NAME']);
    while ($arCity = $rsCities->Fetch()) {
        $tariffZonesToCitiesMap[$id][] = $arCity['NAME'];
    }
}

while($rsTariff = $rsTariffs->GetNextElement()){
    $fields = $rsTariff->GetFields();
    $props = $rsTariff->GetProperties();
    $cities = [];
    if(array_key_exists($props['PROPERTY_TARRIF_ZONE']['VALUE'] , $tariffZonesToCitiesMap)){
        $cities = $tariffZonesToCitiesMap[$props['PROPERTY_TARRIF_ZONE']['VALUE']];
    }
    $dataRow = [];
    foreach ($PROPS as $code) {
        $dataProp = [];
        if($props[$code]){
            foreach ($props[$code]['VALUE'] as $value) {
                $dataProp[] = sprintf("FROM:{%s}|TO:{%s}|PERCENT:{%s}|LESS_TO:{%s}" ,
                    $value['FROM'],
                    $value['TO'],
                    $value['PERCENT'],
                    $value['LESS_TO']
                );
            }
            $dataRow[$code] = implode("\n" , $dataProp);
        }
    }
    $i = 0;
    $data = [
        $fields['ID'],
        $banks[$props["PROPERTY_BANK"]["VALUE"]]['NAME'],
        implode("\n" , $cities),
        str_replace(',' , ' ' , $fields['NAME']),
        $dataRow['PROPERTY_ACCOUNT_PAYMENT_INTERVAL'],
        $dataRow['PROPERTY_PEOPLE_TRANSFER_INTERVAL'],
        $dataRow['PROPERTY_CASH_OUT_SELF_INTERVAL'],
        $dataRow['PROPERTY_CASH_IN_SELF_INTERVAL'],
    ];
    $csvFile->SaveFile($_SERVER["DOCUMENT_ROOT"] . "/upload/export_pockets.csv", $data);
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>