<?php
if (strpos($arParams['DETAIL_URL'], '#SECTION_CODE_PATH#') !== false) {
    $sectionCodePath = array();
    if ($arParams['CACHE_TYPE'] !== 'N') {
        $cache = \Bitrix\Main\Application::getInstance()->getManagedCache();
        $cacheTtl = $arParams['CACHE_TIME'];
        $cacheId = 'GetNavChain-'.$arResult['IBLOCK_ID'].'-'.$arResult['IBLOCK_SECTION_ID'];
    }
    if ($arParams['CACHE_TYPE'] !== 'N' && $cache->read($cacheTtl, $cacheId)) {
        $rsSectionList = $cache->get($cacheId);
        $rsSectionList = $rsSectionList['rsSectionList'];
    } else {
        $rsSectionList = \CIBlockSection::GetNavChain($arResult['IBLOCK_ID'], $arResult['IBLOCK_SECTION_ID'], array('CODE'));
    }
    if ($arParams['CACHE_TYPE'] !== 'N') {
        $cache->set($cacheId, array('rsSectionList' => $rsSectionList));
    }
    while ($arSection = $rsSectionList->Fetch()) {
        $sectionCodePath[] = $arSection['CODE'];
    }
    $sectionCodePath = implode('/', $sectionCodePath);
}
if (
    (strpos($arParams['DETAIL_URL'], '#SECTION_CODE_PATH#') === false || !empty($sectionCodePath))
     && (strpos($arParams['DETAIL_URL'], '#SECTION_CODE#') === false || !empty($arResult['SECTION']['CODE']))
     && (strpos($arParams['DETAIL_URL'], '#SECTION_ID#') === false || !empty($arResult['SECTION']['ID']))
     && (strpos($arParams['DETAIL_URL'], '#ELEMENT_CODE#') === false || !empty($arParams['ELEMENT_CODE']))
     && (strpos($arParams['DETAIL_URL'], '#ELEMENT_ID#') === false || !empty($arResult['ID']))
) {
    $relCanonical = str_replace(
        array('#SECTION_CODE_PATH#', '#SECTION_CODE#', '#SECTION_ID#', '#ELEMENT_CODE#', '#ELEMENT_ID#'),
        array($sectionCodePath, $arResult['SECTION']['CODE'], $arResult['SECTION']['ID'], $arParams['ELEMENT_CODE'], $arResult['ID']),
        $arParams['DETAIL_URL']
    );
    $serverName = \Bitrix\Main\Context::getCurrent()->getServer()->getServerName();
    $isHttps = \Bitrix\Main\Context::getCurrent()->getRequest()->isHttps();
    \Bitrix\Main\Page\Asset::getInstance()->addString(
        '<link rel="canonical" href="'.($isHttps ? 'https' : 'http').'://'.$serverName.$relCanonical.'">', true
    );
}