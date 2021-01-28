<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (!empty($arResult['ITEMS'])):?>
    <div class="geo-text-container" style="text-align: right;">
        Ваш город: <span class="navbar-location__value js-popup-city-form"><?=$arResult['TITLE']?></span>
    </div>
<?endif?>
