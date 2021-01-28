<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('iblock');

$arFields = Array(
    'IBLOCK_ID' => BANK_IBLOCK_ID,
    'NAME' => 'Операционный день',
    'ACTIVE' => "Y",
    'CODE' => 'OPERATION_DAY',
    'PROPERTY_TYPE' => 'S',
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

echo 'success';