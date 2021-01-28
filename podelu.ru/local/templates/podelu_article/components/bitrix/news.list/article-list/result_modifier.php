<?php
use Spatie\ImageOptimizer\OptimizerChainFactory;
$optimizerChain = OptimizerChainFactory::create();

$authorArticleKey = [];
foreach ($arResult['ITEMS'] as $i => $arItem) {
    if (!empty($arItem['PROPERTIES']['AUTHOR']['VALUE'])) {
        $authorId = $arItem['PROPERTIES']['AUTHOR']['VALUE'];
        $authorArticleKey[$authorId][] = $i;
    }

    $imageId = $arItem['PREVIEW_PICTURE']['ID'];
    if (empty($imageId)) {
        $imageId = $arItem['DETAIL_PICTURE']['ID'];
    }

    if (!empty($imageId)) {
        $image = CFile::ResizeImageGet($imageId, ['width' => 319, 'height' => 338], 2, true);
        if(file_exists($_SERVER['DOCUMENT_ROOT'] . $image['src'])) {
            $optimizerChain->optimize($_SERVER['DOCUMENT_ROOT'] . $image['src']);

            $arResult['ITEMS'][$i]['IMG'] = [
                'SRC' => $image['src'],
                'WIDTH' => $image['width'],
                'HEIGHT' => $image['height'],
                'ALT' => $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_ALT'],
                'TITLE' => $arItem['IPROPERTY_VALUES']['ELEMENT_PREVIEW_PICTURE_FILE_TITLE'],
            ];
        }

    }

    if (!file_exists($_SERVER['DOCUMENT_ROOT'].$image['src'])) {
        unset($arResult['ITEMS'][$i]['IMG']);
    }

    $propCountComments = $arItem['PROPERTIES']['COUNT_COMMENTS'];
    $arResult['ITEMS'][$i]['COUNT_COMMENTS'] = $propCountComments['VALUE'] ?: $propCountComments['DEFAULT_VALUE'];
}

$arFilter = ['ID' => array_keys($authorArticleKey)];
$arSelect = ['ID', 'IBLOCK_ID', 'NAME', 'DETAIL_PAGE_URL', 'PROPERTY_TITLE', 'PROPERTY_LINK'];
$dbResult = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);
while ($arAuthor = $dbResult->GetNext()) {
    $keys = $authorArticleKey[$arAuthor['ID']];
    foreach($keys as $key) {
        $str = '<a ';
        $str .= ' ';

        if (!empty($arAuthor['PROPERTY_LINK_VALUE'])) {
            $str .= 'href="' . $arAuthor['PROPERTY_LINK_VALUE'] . '" target="_blank"';
        } else {
            $str .= 'href="' . $arAuthor['DETAIL_PAGE_URL'] . '"';
        }

        $str .= '>';
        $str .= $arAuthor['NAME'] . '</a>';
        $arResult['ITEMS'][$key]['AUTHOR'] = $str;
    }
}
