<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('iblock');

$arFields = [
    'IBLOCK_TYPE_ID' => 'SITE',
    'LID' => 's1',
    'CODE' => 'authors',
    'NAME' => 'Авторы',
    'ACTIVE' => 'Y',
    'SORT' => '500',
    'LIST_PAGE_URL' => '#SITE_DIR#/authors/',
    'DETAIL_PAGE_URL' => '#SITE_DIR#/authors/#SECTION_CODE_PATH#/#ELEMENT_CODE#/',
    'SECTION_PAGE_URL' => '#SITE_DIR#/authors/#SECTION_CODE_PATH#/',
    'GROUP_ID' => [2 => 'R'],
];
$ib = new CIBlock();
$iblockId = $ib->Add($arFields);

$arFields = [];
$arFields['LOG_SECTION_ADD']['IS_REQUIRED'] = 'Y';
$arFields['LOG_SECTION_EDIT']['IS_REQUIRED'] = 'Y';
$arFields['LOG_SECTION_DELETE']['IS_REQUIRED'] = 'Y';
$arFields['LOG_ELEMENT_ADD']['IS_REQUIRED'] = 'Y';
$arFields['LOG_ELEMENT_EDIT']['IS_REQUIRED'] = 'Y';
$arFields['LOG_ELEMENT_DELETE']['IS_REQUIRED'] = 'Y';
$arFields['CODE']['IS_REQUIRED'] = 'Y';
$arFields['CODE']['DEFAULT_VALUE']['UNIQUE'] = 'Y';
$arFields['CODE']['DEFAULT_VALUE']['TRANSLITERATION'] = 'Y';
$arFields['CODE']['DEFAULT_VALUE']['TRANS_CASE'] = 'L';
$arFields['CODE']['DEFAULT_VALUE']['TRANS_SPACE'] = '-';
$arFields['CODE']['DEFAULT_VALUE']['TRANS_OTHER'] = '-';
$arFields['CODE']['DEFAULT_VALUE']['TRANS_EAT'] = 'Y';
$arFields['CODE']['DEFAULT_VALUE']['USE_GOOGLE'] = 'Y';
$arFields['SECTION_CODE']['IS_REQUIRED'] = 'Y';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['UNIQUE'] = 'Y';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['TRANSLITERATION'] = 'Y';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['TRANS_CASE'] = 'L';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['TRANS_SPACE'] = '-';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['TRANS_OTHER'] = '-';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['TRANS_EAT'] = 'Y';
$arFields['SECTION_CODE']['DEFAULT_VALUE']['USE_GOOGLE'] = 'Y';
CIBlock::SetFields($iblockId, $arFields);

$arFields = Array(
    'IBLOCK_ID' => $iblockId,
    'NAME' => 'Подпись',
    'ACTIVE' => "Y",
    'CODE' => 'TITLE',
    'PROPERTY_TYPE' => 'S',
);
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);


$arIblockArticle = $ib->GetList([], ['CODE' => 'article'])->Fetch();

$arFields = [
    'IBLOCK_ID' => $arIblockArticle['ID'],
    'NAME' => 'Автор',
    'ACTIVE' => "Y",
    'CODE' => 'AUTHOR',
    'PROPERTY_TYPE' => 'E',
    'LINK_IBLOCK_ID' => $iblockId,
];
$ibp = new CIBlockProperty;
$PropID = $ibp->Add($arFields);

echo 'success';
