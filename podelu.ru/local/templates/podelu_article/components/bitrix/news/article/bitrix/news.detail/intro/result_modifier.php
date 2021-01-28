<?php

if (empty($arResult['DISPLAY_PROPERTIES']['INTRO_TEXT']['~VALUE']['TEXT'])) {
    $matches = [];
    $text = $arResult['PROPERTIES']['PROPERTY_TEXT']['~VALUE']['TEXT'];

    if (preg_match('/<p>.*?<\/p>/s', $text, $matches)) {
        $arResult['DISPLAY_PROPERTIES']['INTRO_TEXT']['~VALUE']['TEXT'] = $matches[0];
    }
}