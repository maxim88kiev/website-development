<div class="calculator-rko__filter filter">
    <div class="calculator-rko__filter-header">
        <h2 class="calculator-rko__filter-title">Параметры тарифов</h2>
    </div>

    <div class="calculator-rko__filter-body">
        <?
        function isChecked($from, $to, $arResult) {
            if ($arResult['FILTER']['CONTRAGENTS']['FROM'] != $from) {
                return false;
            }

            if ($arResult['FILTER']['CONTRAGENTS']['TO'] != $to) {
                return false;
            }

            return true;
        }

        $arContragents = [
            ['title' => '0-5', 'from' => 0, 'to' => 5, 'checked' => false],
            ['title' => '6-15', 'from' => 6, 'to' => 15, 'checked' => false],
            ['title' => '16-30', 'from' => 16, 'to' => 30, 'checked' => false],
            ['title' => '31-100', 'from' => 31, 'to' => 100, 'checked' => false],
            ['title' => 'более 100', 'from' => 100, 'to' => INFINITE_NUMBER, 'checked' => false],
        ];

        if (empty($arResult['FILTER'])) {
            $arContragents[0]['checked'] = true;
        } else {
            foreach ($arContragents as $i => $arContragent) {
                if (isChecked($arContragent['from'], $arContragent['to'], $arResult)) {
                    $arContragents[$i]['checked'] = true;
                }
            }
        }
        ?>
        <div class="calculator-rko__filter-field group-checkboxes">
            <h3 class="calculator-rko__filter-field-title desktop-title">
                для перевода контрагентам<br>
                в&nbsp;месяц
            </h3>
            <h3 class="mobile-title">для перевода контрагентам,<br>переводов в месяц</h3>

            <?foreach($arContragents as $arContragent):?>
                <label class="checkbox">
                    <input class="checkbox-filter"
                           <?=$arContragent['checked'] ? 'checked="checked"':''?>
                           type="radio"
                           data-value-from="<?=$arContragent['from']?>"
                           data-value-to="<?=$arContragent['to']?>"
                           name="CONTRAGENTS"
                    />
                    <div class="checkbox__text">
                        <span><?=$arContragent['title']?></span>
                        <span class="prefix">переводов</span>
                    </div>
                </label>
            <?endforeach?>
        </div>

        <div class="calculator-rko__filter-field group-checkboxes">
            <h3 class="calculator-rko__filter-field-title desktop-title">
                для снятия наличных<br>
                в&nbsp;месяц
            </h3>
            <h3 class="mobile-title">для снятия наличных,тыс. руб в месяц</h3>

            <label class="checkbox">
                <input class="checkbox-filter" <?=((($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 0) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == 50)) || empty($arResult['FILTER']))?"checked='checked'":''?> type="radio" data-value-from="0" data-value-to="50" name="CASH_WITHDRAW" />
                <div class="checkbox__text">до 50<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" <?=(($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 50) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == 100))?"checked='checked'":''?> type="radio" data-value-from="50" data-value-to="100" name="CASH_WITHDRAW" />
                <div class="checkbox__text">50-100<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" <?=(($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 100) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == 500))?"checked='checked'":''?> type="radio" data-value-from="100" data-value-to="500" name="CASH_WITHDRAW" />
                <div class="checkbox__text">100-500<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" type="radio" <?=(($arResult['FILTER']['CASH_WITHDRAW']['FROM'] == 500) && ($arResult['FILTER']['CASH_WITHDRAW']['TO'] == INFINITE_NUMBER))?"checked='checked'":''?> data-value-from="500" data-value-to="<?=INFINITE_NUMBER?>" name="CASH_WITHDRAW" />
                <div class="checkbox__text">более 500<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
        </div>

        <div class="calculator-rko__filter-field group-checkboxes">
            <h3 class="calculator-rko__filter-field-title">
                для перевода физ. лицам<br>
                в&nbsp;месяц
            </h3>
            <h3 class="mobile-title">для перевода физ. лицам,тыс. руб в месяц</h3>

            <label class="checkbox">
                <input class="checkbox-filter" <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 0) && ($arResult['FILTER']['TRANSFER']['TO'] == 150)) || empty($arResult['FILTER']))?"checked='checked'":''?> type="radio" data-value-from="0" data-value-to="150" name="TRANSFER" />
                <div class="checkbox__text">до 150<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 150) && ($arResult['FILTER']['TRANSFER']['TO'] == 300)))?"checked='checked'":''?> type="radio" data-value-from="150" data-value-to="300" name="TRANSFER" />
                <div class="checkbox__text">150-300<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 300) && ($arResult['FILTER']['TRANSFER']['TO'] == 500)))?"checked='checked'":''?> type="radio" data-value-from="300" data-value-to="500" name="TRANSFER" />
                <div class="checkbox__text">300-500<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" <?=((($arResult['FILTER']['TRANSFER']['FROM'] == 500) && ($arResult['FILTER']['TRANSFER']['TO'] == INFINITE_NUMBER)))?"checked='checked'":''?> type="radio" data-value-from="500" data-value-to="<?=INFINITE_NUMBER?>" name="TRANSFER" />
                <div class="checkbox__text">более 500<span class="prefix">&nbsp;тыс. руб</span></div>
            </label>
        </div>

        <div class="calculator-rko__filter-field group-checkboxes">
            <label class="checkbox">
                <input class="checkbox-filter" type="checkbox" name="WITHOUT_ACCOUNT_PAYMENT" <?=($arResult['FILTER']['WITHOUT_ACCOUNT_PAYMENT'])?"checked='checked'":''?> />
                <div class="checkbox__text">без платы за обслуживание</div>
            </label>
            <label class="checkbox">
                <input class="checkbox-filter" type="checkbox" name="INTERNATIONAL_TRADE" <?=($arResult['FILTER']['INTERNATIONAL_TRADE'])?"checked='checked'":''?> />
                <div class="checkbox__text">для международной торговли</div>
            </label>
        </div>
    </div>

    <?if($arParams['FILTER_BANKS'] == 'Y'):?>
        <div class="calculator-rko__filter-header">
            <h2 class="calculator-rko__filter-title">Банки для сравнения</h2>
        </div>

        <div class="calculator-rko__filter-body calculator-rko__filter-body_banks">
            <div class="controls">
                <span class="link select-all">выбрать все</span>
                <span class="link clear-all">очистить все</span>
            </div>

            <div class="extra-links">
                <span data-filter-banks="online">только онлайн банки</span>
                <span data-filter-banks="state">только гос. банки</span>
            </div>

            <div class="calculator-rko__filter-field banks-container">
                <? foreach ($arResult['BANKS'] as $BANK):?>
                    <label class="checkbox" data-bank-id="<?=$BANK["ID"]?>">
                        <input class="checkbox-filter"
                               name="BANK"
                               type="checkbox"
                               <?if(in_array($BANK["ID"] , $arResult['FILTER']['BANK']) || $BANK['SELECTED'] == 'Y'):?>checked='checked'<?endif;?>
                               data-bank-online="<?=$BANK['DATA']['BANK_ONLINE']?>"
                               data-bank-state="<?=$BANK['DATA']['BANK_STATE']?>"
                        />
                        <div class="checkbox__text"><?=$BANK["NAME"]?></div>
                    </label>
                <?endforeach;?>
            </div>
        </div>
    <?endif;?>
</div>