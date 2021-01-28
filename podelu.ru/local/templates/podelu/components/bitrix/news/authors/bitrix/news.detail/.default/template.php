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
?>
<div class="author">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && !empty($arResult['IMAGE'])):?>
        <div class="author__image">
            <img src="<?=$arResult['IMAGE']?>" alt="">
        </div>
	<?endif?>

    <h1 class="author__name"><?=$arResult["NAME"]?></h1><?=!empty($arResult["TITLE"])?',':''?>

    <?if (strlen($arResult["TITLE"])>0):?>
        <div class="author__title"><?=$arResult["TITLE"]?></div>
    <?endif?>

    <?if (strlen($arResult["DETAIL_TEXT"])>0):?>
        <?=$arResult["DETAIL_TEXT"]?>
    <?endif?>
</div>
