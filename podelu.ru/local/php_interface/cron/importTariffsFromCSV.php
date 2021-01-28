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
    "PROPERTY_PROPERTY_ACCOUNT_PAYMENT_INTERVAL", //Плата за обслуживание
    "PROPERTY_PROPERTY_PEOPLE_TRANSFER_INTERVAL" , //Переводы ФЛ в рублях
    "PROPERTY_PROPERTY_CASH_OUT_SELF_INTERVAL" , //Снятие наличных через устройства самообслуживания
    "PROPERTY_PROPERTY_CASH_IN_SELF_INTERVAL" , //Внесение наличных через устройства самообслуживания
    "PROPERTY_PROPERTY_BANK" , //Внесение наличных через устройства самообслуживания
];

$csvFile = new CCSVData('R', true);
if(!file_exists($_SERVER["DOCUMENT_ROOT"] . "/upload/export_pockets.csv"))
    exit;

$csvFile->LoadFile($_SERVER["DOCUMENT_ROOT"] . "/upload/export_pockets.csv");
$csvFile->SetDelimiter(';');

while($arRes = $csvFile->Fetch()){
    $rows['PROPERTY_ACCOUNT_PAYMENT_INTERVAL'] = explode("\n" , $arRes[4]);
    $rows['PROPERTY_PEOPLE_TRANSFER_INTERVAL'] = explode("\n" , $arRes[5]);
    $rows['PROPERTY_CASH_OUT_SELF_INTERVAL'] = explode("\n" , $arRes[6]);
    $rows['PROPERTY_CASH_IN_SELF_INTERVAL'] = explode("\n" , $arRes[7]);
    $tariffId = $arRes[0];
    foreach ($rows as $k => $row) {
//        $propForUpdate = [];
        foreach ($row as $rowData) {
            preg_match_all("/FROM:{(?P<FROM>[0-9., ]*)}\|TO:{(?P<TO>[0-9., ]*)}\|PERCENT:{(?P<PERCENT>[0-9., ]*)}\|LESS_TO:{(?P<LESS_TO>[0-9., ]*)}/", $rowData, $matches);
            $propForUpdate[$k][]["VALUE"] = [
                "FROM" => reset($matches["FROM"]),
                "TO" => reset($matches["TO"]),
                "PERCENT" => reset($matches["PERCENT"]),
                "LESS_TO" => reset($matches["LESS_TO"]),
            ];
        }
    }
    CIBlockElement::SetPropertyValuesEx((int)$tariffId , TARIFF_IBLOCK_ID , $propForUpdate);
    $propForUpdate = [];

}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>