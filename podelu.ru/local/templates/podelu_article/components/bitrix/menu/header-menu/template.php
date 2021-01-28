<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (!empty($arResult)):?>
    <div class="header__menu header-menu">
        <?foreach($arResult as $arItem):?>
	        <?if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) continue;?>
	        <?if($arItem["SELECTED"]):?>
		        <a href="<?=$arItem["LINK"]?>" class="header-menu__item header-menu__item_selected"><?=$arItem["TEXT"]?></a>
	        <?else:?>
		        <a href="<?=$arItem["LINK"]?>" class="header-menu__item"><?=$arItem["TEXT"]?></a>
	        <?endif?>
        <?endforeach?>
    </div>
<?endif?>
