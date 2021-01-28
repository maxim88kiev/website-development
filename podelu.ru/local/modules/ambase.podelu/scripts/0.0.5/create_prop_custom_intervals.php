<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('iblock');

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '2.2. Плата за обслуживание(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_ACCOUNT_PAYMENT_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);


$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '3.1. Внутрибанковские переводы ЮЛ(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_BUSINESS_TRANSFER_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '3.2. Межбанковские переводы ЮЛ через интернет и мобильный банк(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_BUSINESS_TRANSFER_TELECOM_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '4. Переводы ФЛ в рублях(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_PEOPLE_TRANSFER_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '5.1. Внесение наличных через кассу(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_CASH_IN_CASHBOX_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '5.2. Внесение наличных через устройства самообслуживания(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_CASH_IN_SELF_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '6.1. Снятие наличных через кассу(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_CASH_OUT_CASHBOX_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '6.2. Снятие наличных через устройства самообслуживания(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_CASH_OUT_SELF_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);


$arFields = Array(
    'IBLOCK_ID' => 2,
    'NAME' => '11. Зарплатный проект(карман)',
    'ACTIVE' => "Y",
    'CODE' => 'PROPERTY_SALARY_PROJECT_INTERVAL',
    'USER_TYPE' => 'intervals_percent',
    'MULTIPLE' => "Y"
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

echo 'success';
