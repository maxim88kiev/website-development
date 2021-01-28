<?php

use AMBase\Podelu\Articles\Banners\BannerRepository;

function getLevel($str) {
    $level = 0;

    for ($i = 0; $i < mb_strlen($str); $i++) {
        $char = $str[$i];

        if (in_array($char, ['-', ' '])) {
            $level += $char === '-' ? 1 : 0;
        } else {
            break;
        }
    }

    return $level;
}


$arResult['CONTENTS'] = [];
if (!empty($arResult['PROPERTIES']['CONTENTS']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['CONTENTS']['VALUE'] as $i => $text) {
        $level = getLevel($text);
        $text = preg_replace('/(-.\s?)/', '', $text);

        $link = $arResult['PROPERTIES']['CONTENTS']['DESCRIPTION'][$i];

        $arResult['CONTENTS'][] = [
            'link' => $link,
            'text' => $text,
            'style' => 'padding-left: ' . 20 * $level . 'px',
        ];
    }
}

if (!empty($arResult['PROPERTIES']['AUTHOR']['VALUE'])) {
    $authorId = $arResult['PROPERTIES']['AUTHOR']['VALUE'];
    $oAuthor = CIBlockElement::GetByID($authorId)->GetNextElement();
    $arAuthor = $oAuthor->GetFields();
    $arAuthor['PROPERTIES'] = $oAuthor->GetProperties();

    $imgId = $arAuthor['PREVIEW_PICTURE'];
    if (empty($imgId)) {
        $imgId = $arAuthor['DETAIL_PICTURE'];
    }

    $link = '<a ';
    $link .= ' ';

    if (!empty($arAuthor['PROPERTIES']['LINK']['VALUE'])) {
        $link .= 'href="' . $arAuthor['PROPERTIES']['LINK']['VALUE'] . '" target="_blank"';
    } else {
        $link .= 'href="' . $arAuthor['DETAIL_PAGE_URL'] . '"';
    }

    $link .= '>';
    $link .= $arAuthor['NAME'] . '</a>';

    $img = CFile::ResizeImageGet($imgId, ['width' => 64, 'height' => 64], 2);


    $arResult['AUTHOR'] = [
        'NAME' => $arAuthor['NAME'],
        'LINK' => $link,
        'TITLE' => $arAuthor['PROPERTIES']['TITLE']['VALUE'],
        'IMG' => $img['src'],
    ];
}

$bannerHtml = '';
$bannerRepository = new BannerRepository();
if ($arResult['PROPERTIES']['BANNER_HORIZONTAL']['VALUE']) {
    $bannerId = $arResult['PROPERTIES']['BANNER_HORIZONTAL']['VALUE'];
    $banner = $bannerRepository->findById($bannerId);

    $bannerHtml .= $banner->render();
}

if ($arResult['PROPERTIES']['BANNER_MOBILE']['VALUE']) {
    $bannerId = $arResult['PROPERTIES']['BANNER_MOBILE']['VALUE'];
    $banner = $bannerRepository->findById($bannerId);

    $bannerHtml .= $banner->render();
}


if ($bannerHtml) {
    $text = $arResult['PROPERTIES']['PROPERTY_TEXT']['~VALUE']['TEXT'];
    $text = preg_replace('/(<div class="banner-730-164".*\s*.*\s*<\/div>)/', $bannerHtml, $text);
    $arResult['PROPERTIES']['PROPERTY_TEXT']['~VALUE']['TEXT'] = $text;
}

if ($arResult['PROPERTIES']['BANNER_VERTICAL']['VALUE']) {

}


