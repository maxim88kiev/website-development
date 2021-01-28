<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

\Bitrix\Main\Loader::includeModule('iblock');

$arIblock = CIBlock::GetList([], ['CODE' => 'BANKS'])->Fetch();
if (empty($arIblock)) {
    echo 'Инфоблок с CODE=BANKS не найден';
    die();
}

$iblockElement = new CIBlockElement;
$iblockProperty = new CIBlockProperty;
$iblockPropertyEnum = new CIBlockPropertyEnum;

$arFilter = ['IBLOCK_ID' => $arIblock['ID'], 'CODE' => 'NEED_GO_TO_FNS'];
$arIblockProperty = $iblockProperty->GetList([], $arFilter)->Fetch();
if (empty($arIblockProperty)) {
    $propValues = [
        'Самостоятельно' => ['Сбербанк', 'Райффайзен', 'МодульБанк'],
        'Без посещения ФНС' => [
            'Альфа Банк',
            'ВТБ',
            'Открытие',
            'Тинькофф',
            'Точка',
            'ПромСвязьБанк',
            'Локо-Банк',
            'Банк Дом.РФ'
        ]
    ];

    $arFields = [
        'IBLOCK_ID' => $arIblock['ID'],
        'ACTIVE' => 'Y',
        'NAME' => 'Подача документов в ФНС',
        'CODE' => 'NEED_GO_TO_FNS',
        'PROPERTY_TYPE' => 'L',
        'VALUES' => []
    ];
    $propId = $iblockProperty->Add($arFields);

    foreach(array_keys($propValues) as $index => $value) {
        $arFields = [
            'PROPERTY_ID' => $propId,
            'VALUE' => $value,
            'DEF' => 'N',
            'SORT' => ($index + 1) * 10,
        ];
        $enumValueId = $iblockPropertyEnum->add($arFields);

        $arFilter = [
            'IBLOCK_ID' => $arIblock['ID'],
            'NAME' => array_map(function($value) {
                return '%' . $value . '%';
            }, $propValues[$value]),
        ];

        $dbResult = CIBlockElement::GetList([], $arFilter);
        while($arBank = $dbResult->Fetch()) {
            $iblockElement->SetPropertyValuesEx(
                $arBank['ID'],
                $arIblock['ID'],
                [$propId => $enumValueId]
            );
        }
    }
}


$arFilter = ['IBLOCK_ID' => $arIblock['ID'], 'CODE' => 'REGISTRATION_COST'];
$arIblockProperty = $iblockProperty->GetList([], $arFilter)->Fetch();
if (empty($arIblockProperty)) {
    $propValues = [
        'Госпошлина либо ЭЦП' => ['Сбербанк', 'Райффайзен', 'МодульБанк'],
        'Бесплатно' => [
            'Альфа Банк',
            'ВТБ',
            'Открытие',
            'Тинькофф',
            'Точка',
            'ПромСвязьБанк',
            'Локо-Банк',
            'Банк Дом.РФ'
        ]
    ];

    $arFields = [
        'IBLOCK_ID' => $arIblock['ID'],
        'ACTIVE' => 'Y',
        'NAME' => 'Стоимость регистрации',
        'CODE' => 'REGISTRATION_COST',
        'PROPERTY_TYPE' => 'L',
        'VALUES' => []
    ];
    $propId = $iblockProperty->Add($arFields);

    foreach(array_keys($propValues) as $index => $value) {
        $arFields = [
            'PROPERTY_ID' => $propId,
            'VALUE' => $value,
            'DEF' => 'N',
            'SORT' => ($index + 1) * 10,
        ];
        $enumValueId = $iblockPropertyEnum->add($arFields);

        $arFilter = [
            'IBLOCK_ID' => $arIblock['ID'],
            'NAME' => array_map(function($value) {
                return '%' . $value . '%';
            }, $propValues[$value]),
        ];

        $dbResult = CIBlockElement::GetList([], $arFilter);
        while($arBank = $dbResult->Fetch()) {
            $iblockElement->SetPropertyValuesEx(
                $arBank['ID'],
                $arIblock['ID'],
                [$propId => $enumValueId]
            );
        }
    }
}

echo 'Ok';
