<div class="section mobile-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    Результаты поиска
                </div>
            </div>
        </div>

        <?if ($arResult['ID'] == 1682):?>
            <div class="row container__anchor-list">
                <div class="col-md-24">
                    <?include 'anchor-list.php'?>
                </div>
            </div>
        <?endif;?>

        <div class="row">
            <?php foreach($tariffData as $tariff) { ?>
                <div class="col-xs-12 mobile-main-card-container">
                    <div class="mobile-main-card">
                        <div class="mobile-main-card-header">
                            <img src="<?php echo $arResult['DETAIL_PICTURE']['SRC']; ?>" class="img-responsive">
                        </div>

                        <div class="mobile-main-card-body">
                            <div class="card-bank-header">
                                <?php if(isset($tariff['PROPERTIES']['PROPERTY_NAME']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_NAME']['VALUE'])) {
                                    echo $tariff['PROPERTIES']['PROPERTY_NAME']['VALUE'];
                                } ?>
                            </div>

                            <!--							<div class="card-bank-desc">
                                                            Описание в две строки. Описание в две строки. Описание в две строки.
                                                        </div>-->

                            <div class="card-bank-inline">
                                Открытие счета:
                                <span>
									<?php if(isset($tariff['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'])) {
                                        echo $tariff['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'];
                                    } ?>
								</span>
                            </div>
                            <div class="card-bank-inline">
                                Плата за обслуживание:
                                <span>
									<?php if(isset($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'])) {
                                        echo markNumberWithTags(
                                            implode("<br/>", $tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
                                            "<strong>",
                                            "</strong>"
                                        );
                                    } ?>
								</span>
                            </div>

                            <div class="card-bank-content">
                                <div class="card-bank-section-header">Платежи и переводы ЮЛ в рублях</div>
                                <div class="row">
                                    <div class="col-xs-12 bank-key">
                                        Внутрибанковские переводы ЮЛ
                                    </div>
                                    <div class="col-xs-12 bank-value">
                                        <?php if(isset($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']),
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
                                        <?php if(isset($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
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
                                        <?php if(isset($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']),
                                                "<strong>",
                                                "</strong>"
                                            );
                                        } ?>
                                    </div>
                                </div>

                                <div class="card-bank-section-header">Переводы ФЛ в рублях</div>
                                <div class="row">
                                    <div class="col-xs-24 bank-value">
                                        <?php if(isset($tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE'])) {
                                            echo markNumberWithTags(
                                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']),
                                                "<strong>",
                                                "</strong>"
                                            );
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-main-card-footer clearfix">
                            <a target="_blank" href="<?php echo $arResult['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']; ?>" class="btn">Оставить заявку</a>
                            <a href="#" class="link js-show-more-bank">Посмотреть детали</a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>