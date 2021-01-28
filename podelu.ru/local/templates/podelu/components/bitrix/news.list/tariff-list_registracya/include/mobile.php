<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<div class="section mobile-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    Результаты поиска
                </div>
            </div>
        </div>

        <div class="row mobile-main-card-list">
            <?php foreach($arResult["ITEMS"] as $tariffItem) { ?>
                <?php
                $bankID = $tariffItem['PROPERTIES']['PROPERTY_BANK']['VALUE'];
                $arBankItem = getBank($bankID, $arResult['BANKS']);

                $countBranchesInCity = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $bankID);
                ?>
                <div class="col-xs-12 mobile-main-card-container">
                    <div class="mobile-main-card">
                        <div class="mobile-main-card-header">
                            <div class="mobile-main-card-header-left">
                                <a href="/banks/<?php echo $arBankItem["CODE"]; ?>/">
                                    <img src="<?php echo $arBankItem['DETAIL_PICTURE']; ?>" class="img-responsive">
                                </a>
                            </div>
                            <div class="mobile-main-card-header-right">
                                <strong>Отделения:</strong>
                                <br/>
                                <strong><?php echo $arBankItem['PROPERTIES']['PROPERTY_COUNT_BRANCHES_IN_COUNTRY']['VALUE']; ?></strong> по стране
                                <br/>
                                <?php if($bankID == 1681 OR $bankID == 1682 OR $bankID == 1694 OR $bankID == 1728) { ?>
                                    <strong>Онлайн-банк</strong>
                                <?php } else { ?>
                                    <strong><?php echo $countBranchesInCity; ?></strong> в вашем городе
                                <?php } ?>
                            </div>

                            <div class="mobile-main-card-header-title">
                                <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_NAME']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_NAME']['VALUE'])) {
                                    echo markNumberWithTags($tariffItem['PROPERTIES']['PROPERTY_NAME']['VALUE'], "<strong>", "</strong>");
                                } ?>
                            </div>
                        </div>


                        <div class="mobile-main-card-body">
                            <div class="mobile-main-card-text">
                                <strong>Открытие счета:</strong>

                                <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'])) {
                                    echo markNumberWithTags($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'], "<strong>", "</strong>");
                                } ?>
                            </div>

                            <div class="mobile-main-card-text">
                                <strong>Ведение счета:</strong>
                                <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'])) {
                                    echo markNumberWithTags(
                                        implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
                                        "<strong>",
                                        "</strong>"
                                    );
                                } ?>
                            </div>

                            <div class="mobile-main-card-text">
                                <strong>Межбанковские платежи:</strong>
                                <br/>
                                <span class="mobile-main-card-subtext">
									<?php if(isset($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE'])) {
                                        echo implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']);
                                    } ?>
	                            </span>
                            </div>

                            <div class="mobile-main-card-text">
                                <strong>Подача документов в ФНС:</strong>
                                <br/>
                                <span class="mobile-main-card-subtext">
									<?=$arBankItem['PROPERTIES']['NEED_GO_TO_FNS']['VALUE']?>
	                            </span>
                            </div>

                            <div class="mobile-main-card-text">
                                <strong>Стоимость регистрации:</strong>
                                <br/>
                                <span class="mobile-main-card-subtext">
									<?=$arBankItem['PROPERTIES']['REGISTRATION_COST']['VALUE']?>
	                            </span>
                            </div>

                            <div class="card-bank-content">
                                <div class="card-bank-section-header">Платежи и переводы ЮЛ в рублях</div>
                                <div class="row">
                                    <div class="col-xs-12 bank-key">
                                        Внутрибанковские переводы ЮЛ
                                    </div>
                                    <div class="col-xs-12 bank-value">
                                        <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']),
                                                "<strong>",
                                                "</strong>"
                                            );
                                        } ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 bank-key">
                                        Межбанковские переводы ЮЛ через интернет и мобильный банк
                                    </div>
                                    <div class="col-xs-12 bank-value">
                                        <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
                                                "<strong>",
                                                "</strong>"
                                            );
                                        } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 bank-key">
                                        Платежи на бумажном носителе
                                    </div>
                                    <div class="col-xs-12 bank-value">
                                        <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']),
                                                "<strong>",
                                                "</strong>"
                                            );
                                        } ?>
                                    </div>
                                </div>

                                <div class="card-bank-section-header">Переводы ФЛ в рублях</div>
                                <div class="row">
                                    <div class="col-xs-24 bank-value">
                                        <?php if(isset($tariffItem['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']),
                                                "<strong>",
                                                "</strong>"
                                            );
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-main-card-footer clearfix">
                            <a  target="_blank" href="<?php echo $arBankItem['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']; ?>" class="btn">Оставить заявку</a>
                            <a href="#" class="link js-show-more-bank">Посмотреть детали</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>