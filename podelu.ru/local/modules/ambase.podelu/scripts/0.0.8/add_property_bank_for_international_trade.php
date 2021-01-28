<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('iblock');

$arFields = Array(
    'IBLOCK_ID' => BANK_IBLOCK_ID,
    'NAME' => 'Международная торговля',
    'ACTIVE' => "Y",
    'CODE' => 'INTERNATIONAL_TRADE',
    'PROPERTY_TYPE' => 'L',
    'LIST_TYPE' => 'C',
    'VALUES' => [
        'Y' => 'да'
    ]
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

echo 'success';