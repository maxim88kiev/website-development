<?php

foreach ($arResult['ITEMS'] as $i => $arItem) {
    if (!empty($arItem["PREVIEW_PICTURE"])) {
        $arPicture = $arItem["PREVIEW_PICTURE"];
    } elseif (!empty($arItem["DETAIL_PICTURE"])) {
        $arPicture = $arItem["DETAIL_PICTURE"];
    }

    if (!empty($arPicture)) {
        $arSize = ['width' => 142, 'height' => 142];
        $image = CFile::ResizeImageGet($arPicture, $arSize, 2);
        $arResult['ITEMS'][$i]['IMAGE'] = $image['src'];
    }

    $arResult['ITEMS'][$i]['TITLE'] = $arItem['PROPERTIES']['TITLE']['VALUE'];
}
