<?php
if (php_sapi_name() === 'cli') {
    $_SERVER['DOCUMENT_ROOT'] = dirname(__DIR__, 4);
}

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

Bitrix\Main\Loader::includeModule('iblock');

$el = new CIBlockElement;
$errors = 0;

$arFilter = ['IBLOCK_ID' => 4];
$arSelectFields = ['ID', 'NAME'];
$dbResult = $el->GetList([], $arFilter, false, false, $arSelectFields);

while ($arElement = $dbResult->Fetch()) {
    $params = ['replace_space' => '-', 'replace_other' => '-'];
    $code = CUtil::translit($arElement['NAME'], 'ru', $params);

    $isSuccess = $el->Update($arElement['ID'], ['CODE' => $code]);
    if (!$isSuccess) {
        $errors++;
        echo "<pre>";
        print_r($el->LAST_ERROR);
        echo "</pre>";
    }
}

if ($errors === 0) {
    echo "Good\n";
}