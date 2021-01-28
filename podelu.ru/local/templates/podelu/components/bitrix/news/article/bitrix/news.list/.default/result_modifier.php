<?php

$this->__component->SetResultCacheKeys(array('SECTION_PAGE_URL'));

$authorArticleKey = [];
foreach ($arResult['ITEMS'] as $key => $arItem) {
    if (!empty($arItem['PROPERTIES']['AUTHOR']['VALUE'])) {
        $authorId = $arItem['PROPERTIES']['AUTHOR']['VALUE'];
        $authorArticleKey[$authorId][] = $key;
    }
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
