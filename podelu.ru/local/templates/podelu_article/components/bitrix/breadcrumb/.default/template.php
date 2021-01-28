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

$strReturn .= '<div class="bread_crumbs">';
$siteProtocol = (CMain::IsHTTPS()) ? "https://" : "http://";
$strMicro = '<script type="application/ld+json">{"@context": "http://schema.org","@type": "BreadcrumbList","itemListElement": [';
global $USER;

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<span class="additional_object_separator"> > </span>' : '');
    $itemPosition = $index + 1;

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= $arrow . '<a class="btn-item2" href="'.$arResult[$index]["LINK"].'" title="'.$title.'" id="bx_breadcrumb_'.$index.'">'.$title.'</a>';
        $strMicro .= '{"@type": "ListItem","position": '.$itemPosition.',"name": "'.$title.'","item": "'.$siteProtocol.SITE_SERVER_NAME.$arResult[$index]["LINK"].'"},';
	}
	else
	{
        $curPage = $GLOBALS['APPLICATION']->GetCurPage($get_index_page=false);
		$strReturn .= $arrow . '<span class="btn-item2">' . $title . '</span>';
        $strMicro .= '{"@type": "ListItem","position": '.$itemPosition.',"name": "'.$title.'","item": "'.$siteProtocol.SITE_SERVER_NAME.$curPage.'"}';
	}
}

$strReturn .= '<div style="clear:both"></div></div>';
$strMicro .= ']}</script>';
$strReturn .= $strMicro;

return $strReturn;
