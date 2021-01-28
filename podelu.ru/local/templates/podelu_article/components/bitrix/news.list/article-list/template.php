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
<div class="text_block5">Другие статьи по теме:</div>
<?foreach($arResult["ITEMS"] as $i => $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="tile">
        <a href="<?=$arItem['DETAIL_PAGE_URL']; ?>" class="img_link">
            <img src="<?=$arItem['IMG']['SRC']?>"
                 width="<?=$arItem['IMG']['WIDTH']?>"
                 height="<?=$arItem['IMG']['HEIGHT']?>"
                 alt="<?=$arItem['IMG']['ALT']?>"
                 title="<?=$arItem['IMG']['TITLE']?>">
        </a>

        <a class="text" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
            <?=$arItem['PROPERTIES']['PROPERTY_HEADER']['VALUE'];?>
        </a>
        <br>
        <span class="btn-item4"><?=$arItem['SHOW_COUNTER']?></span>
        <span class="btn-item5"><?=$arItem['COUNT_COMMENTS']?></span>
    </div>
<?endforeach;?>