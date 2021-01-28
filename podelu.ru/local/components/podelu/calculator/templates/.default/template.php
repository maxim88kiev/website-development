<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @var array $arResult['BANKS'] Информация о банках */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
CJSCore::Init();

$this->setFrameMode(true);
?>
<div class="calculator-rko hidden-xs">
    <div class="row">
        <div class="col-md-24">
            <div class="section-title">Сравнение тарифов на расчетно-кассовое обслуживание в #CITY_FORM_6#</div>
        </div>
    </div>

    <div class="calculator-rko__body calculator-container hidden-xs">
        <?include 'include/calculator-rko__filter.php'?>
        <?include 'include/calculator-rko__results.php'?>
    </div>

    <script>
        window.NEW_CALCULATOR_DESKTOP_PARAMS = <?= CUtil::PhpToJSObject($arParams);?>
    </script>
</div>

