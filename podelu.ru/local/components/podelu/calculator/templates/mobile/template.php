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

<section class="calculator-container-mobile visible-xs">
    <div class="tariff-params-filters">
        <h2>Подберите тариф для себя</h2>
        <div class="tariff-params-filter tariff-params-filter__payments">
            <span class="tariff-params-filter__header">Платежи ЮЛ и ИП, шт./мес.</span>
            <ul class="tariff-params-filter__options">
                <li data-value-from="0" data-value-to="5" data-name="CONTRAGENTS" class="js-filter-option <?=((($arResult['FILTER']['CONTRAGENTS']['FROM'] == 0) && ($arResult['FILTER']['CONTRAGENTS']['TO'] == 5)) || empty($arResult['FILTER']))?"selected":''?>">0-5</li>
                <li data-value-from="6" data-value-to="15" data-name="CONTRAGENTS" class="js-filter-option <?=(($arResult['FILTER']['CONTRAGENTS']['FROM'] == 6) && ($arResult['FILTER']['CONTRAGENTS']['TO'] == 15))?"selected":''?>">6-15</li>
                <li data-value-from="16" data-value-to="30" data-name="CONTRAGENTS" class="js-filter-option <?=(($arResult['FILTER']['CONTRAGENTS']['FROM'] == 16) && ($arResult['FILTER']['CONTRAGENTS']['TO'] == 30))?"selected":''?>">16-30</li>
                <li data-value-from="31" data-value-to="100" data-name="CONTRAGENTS" class="js-filter-option <?=(($arResult['FILTER']['CONTRAGENTS']['FROM'] == 31) && ($arResult['FILTER']['CONTRAGENTS']['TO'] == 100))?"selected":''?>">31-100</li>
                <li data-value-from="100" data-value-to="<?=INFINITE_NUMBER?>" data-name="CONTRAGENTS" class="js-filter-option <?=(($arResult['FILTER']['CONTRAGENTS']['FROM'] == 100) && ($arResult['FILTER']['CONTRAGENTS']['TO'] == INFINITE_NUMBER))?"selected":''?>">более 100</li>
            </ul>
        </div>
        <div class="tariff-params-filter tariff-params-filter__transfers">
            <span class="tariff-params-filter__header">Переводы ФЛ на карту, тыс.руб./мес.</span>
            <ul class="tariff-params-filter__options">
                <li data-value-from="0" data-value-to="150" data-name="TRANSFER" class="js-filter-option <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 0) && ($arResult['FILTER']['TRANSFER']['TO'] == 150)) || empty($arResult['FILTER']))?"selected":''?>">до 150</li>
                <li data-value-from="150" data-value-to="300" data-name="TRANSFER" class="js-filter-option <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 150) && ($arResult['FILTER']['TRANSFER']['TO'] == 300)))?"selected":''?>">150-300</li>
                <li data-value-from="300" data-value-to="500" data-name="TRANSFER" class="js-filter-option <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 300) && ($arResult['FILTER']['TRANSFER']['TO'] == 500)))?"selected":''?>">300-500</li>
                <li data-value-from="500" data-value-to="<?=INFINITE_NUMBER?>" data-name="TRANSFER" class="js-filter-option <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 500) && ($arResult['FILTER']['TRANSFER']['TO'] == INFINITE_NUMBER)))?"selected":''?>">более 500</li>
            </ul>

        </div>
        <div class="tariff-params-filter tariff-params-filter__cashout">
            <span class="tariff-params-filter__header">Снятие наличных в банкомате, тыс.руб./мес.</span>
            <ul class="tariff-params-filter__options">
                <li data-value-from="0" data-value-to="50" data-name="CASH_WITHDRAW" class="js-filter-option <?=((($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 0) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == 50)) || empty($arResult['FILTER']))?"selected":''?>">до 50</li>
                <li data-value-from="50" data-value-to="100" data-name="CASH_WITHDRAW" class="js-filter-option <?=(($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 50) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == 100))?"selected":''?>">50-100</li>
                <li data-value-from="100" data-value-to="500" data-name="CASH_WITHDRAW" class="js-filter-option <?=(($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 100) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == 500))?"selected":''?>">100-500</li>
                <li data-value-from="500" data-value-to="<?=INFINITE_NUMBER?>" data-name="CASH_WITHDRAW" class="js-filter-option <?=(($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 500) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == INFINITE_NUMBER))?"selected":''?>">более 500</li>
            </ul>
        </div>
        <div class="tariff-params-filters__bank-link-wrapper">
            <?if ($arParams['FILTER_BANKS'] == 'Y'):?>
            <a data-fancybox class="tariff-params-filters__banks-compare" href="#banks-popup">Банки для сравнения</a>
            <?endif;?>
        </div>
    </div>
    <div class="search-results">
        <h2>Подходящие вам тарифы с возможностью открытия онлайн в #CITY_FORM_6#</h2>
        <div class="search-results__container">
            <?php foreach($arResult["ITEMS"] as $tariffItem):?>
                <?php //if($tariffItem['BANK']['SELECTED'] != 'Y') continue; ?>
            <div class="search-results__tariff-item" data-tariff-id="<?=$tariffItem['ID']?>" data-index-sort="<?=$tariffItem['INDEX_SORT']?>" data-bank-id="<?=$tariffItem['BANK']['ID']?>">
                <div class="search-results__tariff-item-head">
                    <img src="<?php echo $tariffItem['BANK_PICTURE']['src']; ?>">
                    <a class="tariff-item__all-tariffs-bank" href="/banks/<?php echo $tariffItem['BANK']["CODE"]; ?>/">Все тарифы банка</a>
                </div>

                <span class="tariff-item__title"><?php echo $tariffItem['NAME']; ?></span>
                <div class="tariff-item__params">
                    <div class="tariff-item__param">
                        <span class="tariff-item__param-name">Плата за обслуживание:</span><br>
                        <span class="tariff-item__param-value"><?php
                            echo markNumberWithTags(
                                $tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'][0],
                                "<strong>",
                                "</strong>"
                            );
                            ?>
                        </span>
                    </div>
                    <div class="tariff-item__param">
                        <span class="tariff-item__param-name">Платежи юр. лицам:</span><br>
                        <span class="tariff-item__param-value">
                            <?php
                            echo markNumberWithTags(
                                $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE'][0],
                                "<strong>",
                                "</strong>"
                            );
                            ?>
                        </span>
                    </div>
                    <div class="tariff-item__param">
                        <span class="tariff-item__param-name">Комиссия за переводы физ. лицам:</span><br>
                        <span class="tariff-item__param-value">
                            <?php
                            echo markNumberWithTags(
                                $tariffItem['PROPERTY_PEOPLE_TRANSFER_FORMAT'],
                                "<strong>",
                                "</strong>"
                            );
                            ?>
                        </span>
                    </div>
                    <div class="tariff-item__param">
                        <span class="tariff-item__param-name">Комиссия за снятие наличных:</span><br>
                        <span class="tariff-item__param-value">
                            <?php
                            echo markNumberWithTags(
                                $tariffItem['PROPERTY_CASH_OUT_SELF_FORMAT'],
                                "<strong>",
                                "</strong>"
                            );
                            ?>
                        </span>
                    </div>
                </div>
                <div class="tariff-item__links">
                    <a class="site-bank-link" onclick="ym(63939727, 'reachGoal', '1'); return true;" href="<?php echo $tariffItem['BANK']['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']; ?>">Посмотреть на сайте</a>
                    <a class="tariff-item__details js-calculator-tariff-popup" href="javascript:void(0)">Смотреть детали</a>
                </div>
            </div>
            <?endforeach;?>
        </div>
    </div>
    <?if ($arParams['FILTER_BANKS'] == 'Y'):?>
        <div id="banks-popup" style="display: none;">
            <div class="banks-popup__container">
                <h2>Банки для сравнения</h2>
                <div class="extra-links">
                    <a href="javascript:void(0)">только онлайн банки</a>
                    <a href="javascript:void(0)">только гос. банки</a>
                </div>
                <ul class="navbar-menu__mobile-banks">
                    <? foreach ($arResult['BANKS'] as $BANK):?>
                        <label class="checkbox" data-bank-id="<?=$BANK["ID"]?>">
                            <input class="checkbox-filter" name="BANK" type="checkbox" <?if(in_array($BANK["ID"] , $arResult['FILTER']['BANK']) || $BANK['SELECTED'] == 'Y'):?>checked='checked'<?endif;?> />
                            <div class="checkbox__text"><?=$BANK["NAME"]?></div>
                        </label>
                    <?endforeach;?>

                </ul>
                <div class="banks-popup__buttons">
                    <a class="clear-all" href="javascript:void(0)">Очистить</a>
                    <a class="apply" href="javascript:void(0)">Применить</a>
                </div>
            </div>
        </div>
    <?endif?>
</section>
<script>
    window.NEW_CALCULATOR_MOBILE_PARAMS = <?= CUtil::PhpToJSObject($arParams);?>
</script>
