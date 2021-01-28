<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('iblock');

$prop = CIBlockProperty::GetList([] , ['CODE' => 'PROPERTY_SALARY_PROJECT'])->Fetch();
CIBlockProperty::Delete($prop['ID']);

$prop = CIBlockProperty::GetList([] , ['CODE' => 'PROPERTY_SALARY_PROJECT_INTERVAL'])->Fetch();
CIBlockProperty::Delete($prop['ID']);

$arFields = Array(
    'IBLOCK_ID' => BANK_IBLOCK_ID,
    'NAME' => 'Зарплатный проект',
    'ACTIVE' => "Y",
    'CODE' => 'SALARY_PROJECT',
    'PROPERTY_TYPE' => 'S',
    'MULTIPLE' => 'Y',
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

echo 'success';