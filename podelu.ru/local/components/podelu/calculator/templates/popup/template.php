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
$this->setFrameMode(true);
?>

<div id="tariff-info-popup" class="search-results">
    <div class="search-results__tariff-item" data-tariff-id="<?=$arResult['ID']?>" data-bank-id="<?=$arResult["BANK"]["ID"]?>">
        <div class="search-results__tariff-item-head">
            <img src="<?php echo $arResult['BANK_PICTURE']['src']; ?>">
            <a class="tariff-item__all-tariffs-bank" href="/banks/<?php echo $arResult['BANK']["CODE"]; ?>/">Все тарифы банка</a>
        </div>
        <span class="tariff-item__title"><?php echo $arResult['NAME']; ?></span>
        <div class="tariff-item__params">
            <div class="tariff-item__param">
                <span class="tariff-item__param-name">Плата за обслуживание:</span><br>
                <span class="tariff-item__param-value">
                    <?php
                    echo markNumberWithTags(
                        implode("<br/>", $arResult['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
                        "<strong>",
                        "</strong>"
                    );
                    ?>
                        </span>
            </div>
            <div class="tariff-item__param">
                <span class="tariff-item__param-name">Платежи юр. лицам:</span><br>
                <span class="tariff-item__head-param-values">
                    <?php
                    echo markNumberWithTags(
                        implode("<br/>", $arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']),
                        "<strong>",
                        "</strong>"
                    );
                    ?>
                </span>
            </div>
        </div>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Комиссия за переводы физ. лицам:</span>
            <hr>
            <div class="tariff-item__head-param-values">
                <?php
                foreach ($arResult['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE'] as $val) {
                    echo splitPocketValue($val);
                }
                ?>
            </div>
        </div>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Комиссия за снятие наличных через кассу:</span>
            <hr>
            <div class="tariff-item__head-param-values">
                <?php
                foreach ($arResult['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE'] as $val) {
                    echo splitPocketValue($val);
                }
                ?>
            </div>
        </div>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Комиссия за снятие наличных через банкомат:</span>
            <hr>
            <div class="tariff-item__head-param-values">
                <?php
                foreach ($arResult['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE'] as $val) {
                    echo splitPocketValue($val);
                }
                ?>
            </div>
        </div>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Комиссия за внесение наличных через кассу:</span>
            <hr>
            <div class="tariff-item__head-param-values">
                <?php
                foreach ($arResult['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE'] as $val) {
                    echo splitPocketValue($val);
                }
                ?>
            </div>
        </div>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Комиссия за внесение наличных через банкомат:</span>
            <hr>
            <div class="tariff-item__head-param-values">
                <?php
                foreach ($arResult['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE'] as $val) {
                    echo splitPocketValue($val);
                }
                ?>
            </div>
        </div>
        <?if($arResult['BANK']['PROPERTIES']['OPERATION_DAY']['VALUE']):?>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Операционный день:</span>
            <hr>
            <span class="tariff-item__head-param-values">
                <?=$arResult['BANK']['PROPERTIES']['OPERATION_DAY']['VALUE']?>
            </span>
        </div>
        <?endif;?>
        <div class="tariff-item__head-param">
            <span class="tariff-item__head-param-title">Комиссия эквайринга:</span>
            <hr>
            <div class="tariff-item__head-param-values">
                <?php
                foreach ($arResult['PROPERTIES']['PROPERTY_TRADING_ACQUIRING']['VALUE'] as $val) {
                    echo splitPocketValue($val);
                }
                ?>
            </div>
        </div>

        <div class="tariff-item__links">
            <a class="site-bank-link" onclick="ym(63939727, 'reachGoal', '1'); return true;" href="<?php echo $arResult['BANK']['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']; ?>">На сайт банка</a>
            <a class="tariff-item__details" data-fancybox-close href="javascript:void(0)">Скрыть детали</a>
        </div>
    </div>
</div>

