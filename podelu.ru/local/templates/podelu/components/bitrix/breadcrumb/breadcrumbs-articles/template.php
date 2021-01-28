<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

$strReturn .= '<div class="bx-breadcrumb">';
$siteProtocol = (CMain::IsHTTPS()) ? "https://" : "http://";
$strMicro = '<script type="application/ld+json">{"@context": "http://schema.org","@type": "BreadcrumbList","itemListElement": [';
global $USER;

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');
    $itemPosition = $index + 1;

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">
					<span>'.$title.'</span>
				</a>
			</div>';
            $strMicro .= '{"@type": "ListItem","position": '.$itemPosition.',"name": "'.$title.'","item": "'.$siteProtocol.SITE_SERVER_NAME.$arResult[$index]["LINK"].'"},';
	}
	else
	{
        $curPage = $GLOBALS['APPLICATION']->GetCurPage($get_index_page=false);
		$strReturn .= '
			<div class="bx-breadcrumb-item">
				'.$arrow.'
				<span>'.$title.'</span>
			</div>';
            $strMicro .= '{"@type": "ListItem","position": '.$itemPosition.',"name": "'.$title.'","item": "'.$siteProtocol.SITE_SERVER_NAME.$curPage.'"}';
	}
}

$strReturn .= '<div style="clear:both"></div></div>';
$strMicro .= ']}</script>';
$strReturn .= $strMicro;

return $strReturn;
