<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (!empty($arResult['ITEMS'])):?>
    <div class="header__geo header-geo" data-geo="open">
        <span class="header-geo__title">Ваш город: </span>
        <span class="header-geo__city"><?=$arResult['TITLE']?></span>
    </div>
<?endif?>
