<?php
$curPage = $arResult['SECTION_PAGE_URL'];
$siteProtocol = CMain::IsHTTPS() ? 'https://' : 'http://';

if(!empty($curPage)) {
   $APPLICATION->AddHeadString('<link rel="canonical" href="'.$siteProtocol.SITE_SERVER_NAME.$curPage.'" />',true);
} else {
   $curPage = $APPLICATION->GetCurPage(false);
   $APPLICATION->AddHeadString('<link rel="canonical" href="'.$siteProtocol.SITE_SERVER_NAME.$curPage.'" />',true);
}