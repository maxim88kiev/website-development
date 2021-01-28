<?php
if (!empty($arResult["DETAIL_PICTURE"])) {
    $arSize = ['width' => 142, 'height' => 142];
    $image = CFile::ResizeImageGet($arResult["DETAIL_PICTURE"], $arSize, 2);
    $arResult['IMAGE'] = $image['src'];
}

$arResult['TITLE'] = $arResult['PROPERTIES']['TITLE']['VALUE'];
