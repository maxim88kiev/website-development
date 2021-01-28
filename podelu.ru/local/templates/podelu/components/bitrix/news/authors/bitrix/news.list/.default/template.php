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
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="author-list__item col-md-6 col-sm-12 col-xs-24">
        <div class="author-list__item-container"
             id="<?=$this->GetEditAreaId($arItem['ID']);?>">

            <?if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])):?>
                <div class="author-list__item-image" onclick="window.open('<?=$arItem['PROPERTIES']['LINK']['VALUE']?>')">
            <?else:?>
                <div class="author-list__item-image" onclick="window.location.href = '<?=$arItem["DETAIL_PAGE_URL"]?>'">
            <?endif?>


                <img src="<?=$arItem["IMAGE"]?>"
                     alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                     title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"/>
            </div>

            <div class="author-list__item-name">
                <?if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])):?>
                    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" target="_blank"><?=$arItem["NAME"]?></a><?=!empty($arItem["TITLE"])?',':''?>
                <?else:?>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a><?=!empty($arItem["TITLE"])?',':''?>
                <?endif?>
            </div>

            <?if (!empty($arItem["TITLE"])):?>
                <div class="author-list__item-title">
                    <?=$arItem["TITLE"]?>
                </div>
            <?endif?>
        </div>
	</div>
<?endforeach?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <div class="author-list__pager">
        <?=$arResult["NAV_STRING"]?>
    </div>
<?endif?>

