<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<div class="section desktop-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    Результаты поиска
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-24">
                <div class="main-table-container">

                    <table class="main-table tableFixHead">
                        <thead>
                            <tr>
                                <th>Тариф</th>
                                <th>Открытие счета</th>
                                <th>Ведение счета</th>
                                <th>Межбанковские платежи</th>
                                <th>Подача<br> документов в ФНС</th>
                                <th>Стоимость регистрации</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                        <?foreach($arResult["ITEMS"] as $tariffItem):?>
                            <?php
                            $bankID = $tariffItem['PROPERTIES']['PROPERTY_BANK']['VALUE'];
                            $arBankItem = getBank($bankID, $arResult['BANKS']);

                            //$countBranchesInCity = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $bankID);
                            ?>
                            <tr data-bank-id="<?=$bankID?>" onclick="window.open('<?=$arBankItem['DETAIL_PAGE_URL']?>')">
                                <th>
                                    <div>
                                        <a href="<?=$arBankItem["DETAIL_PAGE_URL"]?>">
                                            <img src="<?=$arBankItem['DETAIL_PICTURE']?>">
                                        </a>
                                        <br/>
                                        <small><?=$arBankItem['NAME']?></small>
                                        <br/>
                                        <small class='tariff-name'><?=$tariffItem['NAME']?></small>
                                    </div>
                                </th>
                                <th>
                                    <?php echo markNumberWithTags($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'], "<strong>", "</strong>"); ?>
                                </th>
                                <th>
                                    <?php
                                    echo markNumberWithTags(
                                        implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </th>
                                <th>
                                    <?
                                    echo markNumberWithTags(
                                        implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </th>

                                <th>
                                    <div class="count-banks-row">
                                        <?=$arBankItem['PROPERTIES']['NEED_GO_TO_FNS']['VALUE']?>
                                    </div>
                                </th>

                                <th>
                                    <?=$arBankItem['PROPERTIES']['REGISTRATION_COST']['VALUE']?>
                                </th>

                                <th>
                                    <a target="_blank" href="<?=$arBankItem['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']?>" class="btn">Оставить заявку</a>
                                    <a href="<?=$arBankItem["DETAIL_PAGE_URL"]?>" class="link">Посмотреть детали</a>
                                </th>
                            </tr>
                        <?endforeach?>
                        </tbody>
                    </table>
                    <!--
                    <div style="text-align: center;">
                            <a href="#" class="btn main-table-bottom-btn">Показать все</a>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</div>