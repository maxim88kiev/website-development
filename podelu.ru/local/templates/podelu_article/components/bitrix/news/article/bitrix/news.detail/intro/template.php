<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$arSection = $arResult['SECTION']['PATH'][0];

$src = SITE_TEMPLATE_PATH . '/img/30365F.svg';
if (!empty($arResult['DISPLAY_PROPERTIES']['INTRO_IMAGE']['FILE_VALUE']['SRC'])) {
    $src = $arResult['DISPLAY_PROPERTIES']['INTRO_IMAGE']['FILE_VALUE']['SRC'];
}

$propCountComments = $arResult['PROPERTIES']['COUNT_COMMENTS'];
$countComments = $propCountComments['VALUE'] ?: $propCountComments['DEFAULT_VALUE'];
?>
<img src="<?=$src?>" alt="" class="img">
<div class="btn_group">
    <a class="btn-item3" href="<?=$arSection['SECTION_PAGE_URL']?>"><?=$arSection['NAME']?></a>
    <span class="additional_object_separator"> | </span>
    <span class="btn-item4 disable"><?=$arResult['SHOW_COUNTER']?></span>
    <span id="goToCommentsBlock" class="btn-item5"><?=$countComments?></span>
</div>
<div class="text_block">
    <?=$arResult['NAME']?>
</div>
<div class="text_block1">
    <?=$arResult['DISPLAY_PROPERTIES']['INTRO_TEXT']['~VALUE']['TEXT']?>
</div>
