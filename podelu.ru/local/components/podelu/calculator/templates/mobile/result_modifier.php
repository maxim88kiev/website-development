<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if(!empty($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as &$ITEM) {
        $ITEM['BANK'] = getBank($ITEM['PROPERTIES']['PROPERTY_BANK']['VALUE'] , $arResult['BANKS']);
        if($ITEM['BANK']['~DETAIL_PICTURE']){
            $ITEM['BANK_PICTURE'] = CFile::ResizeImageGet($ITEM['BANK']['~DETAIL_PICTURE'] , ['width' => 110 , 'height' => 26]);
        }
    }
}