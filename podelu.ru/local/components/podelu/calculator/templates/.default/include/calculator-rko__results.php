<div class="calculator-rko__results">
    <div class="calculator-rko__table p-table">
        <div class="calculator-rko__table-row calculator-rko__table-row_header p-table__row p-table__row_header">
            <div class="calculator-rko__table-col calculator-rko__table-col_type_1 p-table__col">Тариф</div>
            <div class="calculator-rko__table-col calculator-rko__table-col_type_1 p-table__col">Плата за обслуживание</div>
            <div class="calculator-rko__table-col calculator-rko__table-col_type_2 p-table__col">Платежи юр. лицам</div>
            <div class="calculator-rko__table-col calculator-rko__table-col_type_2 p-table__col">Комиссия за<br>переводы физ. лицам</div>
            <div class="calculator-rko__table-col calculator-rko__table-col_type_2 p-table__col">Комиссия за снятие<br>наличных</div>
            <div class="calculator-rko__table-col calculator-rko__table-col_type_1 p-table__col"></div>
        </div>

        <?if(empty($arResult['ITEMS'])):?>
            <div class="calculator-rko__table-row p-table__row">
                <div class="calculator-rko__table-col calculator-rko__table-col_type_3 p-table__col">
                    Выберите банки для сравнения
                </div>
            </div>
        <?else:?>
            <?foreach($arResult["ITEMS"] as $tariffItem):?>
                <?$bank = $tariffItem['bank'];?>

                <div class="calculator-rko__item p-table__row">
                    <div class="calculator-rko__preview calculator-rko__table-row">
                        <div class="calculator-rko__table-col calculator-rko__table-col_type_1 p-table__col">
                            <div class="calculator-rko__tariff-name"><?=$tariffItem['NAME']?></div>
                            <div class="calculator-rko__tariff-img">
                                <img src="<?=$tariffItem['BANK_PICTURE']['src']?>">
                            </div>
                            <span class="calculator-rko__link calculator-rko__link_detail show-detail">Смотреть детали</span>
                        </div>

                        <div class="calculator-rko__table-col calculator-rko__table-col_type_1 p-table__col">
                            <div class="calculator-rko__value">
                                <?php
                                echo markNumberWithTags(
                                    $tariffItem['PROPERTY_ACCOUNT_PAYMENT_FORMAT'],
                                    "<strong>",
                                    "</strong>"
                                );
                                ?>
                            </div>
                        </div>

                        <div class="calculator-rko__table-col calculator-rko__table-col_type_2 p-table__col">
                            <div class="calculator-rko__value">
                                <?php
                                echo markNumberWithTags(
                                    implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
                                    "<strong>",
                                    "</strong>"
                                );
                                ?>
                            </div>
                        </div>

                        <div class="calculator-rko__table-col calculator-rko__table-col_type_2 p-table__col">
                            <div class="calculator-rko__value">
                                <?=$tariffItem['PROPERTY_PEOPLE_TRANSFER_FORMAT']?>
                            </div>
                        </div>

                        <div class="calculator-rko__table-col calculator-rko__table-col_type_2 p-table__col">
                            <div class="calculator-rko__value">
                                <?=$tariffItem['PROPERTY_CASH_OUT_SELF_FORMAT']?>
                            </div>
                        </div>

                        <div class="calculator-rko__table-col calculator-rko__table-col_type_1 p-table__col">
                            <a class="calculator-rko__bank-link"
                               href="<?=$bank->partnerUrl?>"
                               target="_blank"
                               onclick="ym(63939727, 'reachGoal', '1'); return true;">
                                На сайт банка
                            </a>

                            <a class="calculator-rko__link" href="<?=$bank->url?>">
                                Все тарифы
                            </a>
                        </div>
                    </div>

                    <div class="calculator-rko__detail">
                        <div class="calculator-rko__table-row">
                            <div class="calculator-rko__table-col"></div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Плата за месяц</strong><br>
                                    <?php
                                    echo markNumberWithTags(
                                        implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Межбанковские платежи:</strong><br>
                                    <?php
                                    echo markNumberWithTags(
                                        implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value calculator-rko__value_interval">
                                    <?=$tariffItem['PEOPLE_TRANSFER_INTERVAL']?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Через банкомат:</strong>
                                </div>

                                <div class="calculator-rko__value calculator-rko__value_interval">
                                    <?=$tariffItem['CASH_OUT_SELF_INTERVAL']?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Комиссия за внесение наличных:</strong><br>
                                    <strong>Через банкомат:</strong><br>
                                </div>

                                <div class="calculator-rko__value calculator-rko__value_interval">
                                    <?=$tariffItem['CASH_IN_SELF_INTERVAL']?>
                                </div>
                            </div>
                        </div>

                        <div class="calculator-rko__table-row">
                            <div class="calculator-rko__table-col"></div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Открытие счета</strong><br>
                                    <?php
                                    echo markNumberWithTags(
                                        $tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'],
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Внутрибанковские платежи:</strong><br>
                                    <?php
                                    echo markNumberWithTags(
                                        implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']),
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Зарплатный проект:</strong><br>
                                    <?php
                                    echo markNumberWithTags(
                                        implode("<br/>", $bank->salaryProject),
                                        "<strong>",
                                        "</strong>"
                                    );
                                    ?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Через кассу:</strong>
                                </div>

                                <div class="calculator-rko__value calculator-rko__value_interval">
                                    <?
                                    if($tariffItem['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE'][0] == 'нет') {
                                        echo 'нет касс';
                                    } else {
                                        echo $tariffItem['CASH_OUT_CASHBOX'];
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="calculator-rko__table-col">
                                <div class="calculator-rko__value">
                                    <strong>Через кассу:</strong>
                                </div>

                                <div class="calculator-rko__value calculator-rko__value_interval">
                                    <?php
                                    if($tariffItem['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE'][0] == 'нет') {
                                        echo 'нет касс';
                                    } else {
                                        echo $tariffItem['CASH_IN_CASHBOX'];
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="calculator-rko__item-footer calculator-rko__table-row">
                            <span class="calculator-rko__link calculator-rko__link_detail">Скрыть детали</span>

                            <?if($tariffItem['BANK']['PROPERTIES']['OPERATION_DAY']['VALUE']):?>
                                <span class="calculator-rko__value">
                                    <strong>Операционный день:&nbsp;</strong>
                                    <?=$tariffItem['BANK']['PROPERTIES']['OPERATION_DAY']['VALUE']?>
                                </span>
                            <?endif?>

                            <?if ($tariffItem['acquiring']):?>
                            <span class="calculator-rko__value">
                                <a href="/torgovyy-ekvayring/"><strong>Комиссия эквайринга</strong></a> - <?=$tariffItem['acquiring']?>%
                            </span>
                            <?endif?>
                        </div>
                    </div>
                </div>
            <?endforeach?>
        <?endif?>
    </div>
</div>