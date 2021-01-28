<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (!empty($arResult['ITEMS'])):?>
    <div class="header-city">
        <div class="header-city__title">Ваш город:</div>
        <div class="header-city__name"><?=$arResult['TITLE']?></div>
    </div>
<?endif?>

