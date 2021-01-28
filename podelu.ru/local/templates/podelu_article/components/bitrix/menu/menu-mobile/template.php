<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

?>
<?if (!empty($arResult)):?>
    <div id="menuElement" class="menu1">
        <div class="menu1__item-wrap">
            <?foreach($arResult['ITEMS'] as $arItem):?>
	            <?if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>

                <?if($arItem["SELECTED"]):?>
		            <a href="<?=$arItem["LINK"]?>" class="btn-item selected"><?=$arItem["TEXT"]?></a>
	            <?else:?>
		            <a href="<?=$arItem["LINK"]?>" class="btn-item"><?=$arItem["TEXT"]?></a>
	            <?endif?>
            <?endforeach?>

            <span class="btn-item1" data-geo="open">Ваш город: <?=$arResult['TITLE']?></span>
        </div>

        <div id="closeMenuBtn" class="btn-close"></div>
    </div>
<?endif?>



