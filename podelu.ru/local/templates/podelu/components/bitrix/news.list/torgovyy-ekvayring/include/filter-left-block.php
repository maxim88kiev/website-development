<div class="filter-left-block">
    <div class="filter-left-block__heading">
        Параметры тарифов
    </div>

    <div class="filter-left-block__devider"></div>

    <div class="filter-left-block__body">
        <div class="filter-left-block__subheading">
            Торговый оборот в месяц
            <span class="show-mobile">(тыс. руб.)</span>
        </div>

        <div class="filter-left-block__flow">
            <div class="filter-left-block__flow-item filter-left-block__input-row">
                <input type="radio" id="checkbox1" name="interval" data-start="0" data-end="50" <?php if($intervalStart == 0 AND $intervalEnd == 50) { ?> checked <?php } ?>>
                <label for="checkbox1">
                    до 50 <span class="hide-mobile">тыс. руб</span>
                </label>
            </div>

            <div class="filter-left-block__flow-item filter-left-block__input-row">
                <input type="radio" id="checkbox2" name="interval" data-start="50" data-end="100" <?php if($intervalStart == 50 AND $intervalEnd == 100) { ?> checked <?php } ?>>
                <label for="checkbox2">
                    50-100 <span class="hide-mobile">тыс. руб</span>
                </label>
            </div>

            <div class="filter-left-block__flow-item filter-left-block__input-row">
                <input type="radio" id="checkbox3" name="interval" data-start="100" data-end="500" <?php if($intervalStart == 100 AND $intervalEnd == 500) { ?> checked <?php } ?>>
                <label for="checkbox3">
                    100-500 <span class="hide-mobile">тыс. руб</span>
                </label>
            </div>

            <div class="filter-left-block__flow-item filter-left-block__input-row">
                <input type="radio" id="checkbox5" name="interval" data-start="500" data-end="2000" <?php if($intervalStart == 500 AND $intervalEnd == 2000) { ?> checked <?php } ?>>
                <label for="checkbox5">
                    500<span class="hide-mobile">тыс.</span>-2 млн<span class="hide-mobile">. руб</span>
                </label>
            </div>

            <div class="filter-left-block__flow-item filter-left-block__input-row">
                <input type="radio" id="checkbox6" name="interval" data-start="2000" <?php if($intervalStart == 2000) { ?> checked <?php } ?>>
                <label for="checkbox6">
                    <span class="hide-mobile">более</span>
                    <span class="show-mobile">></span>
                    2 млн<span class="hide-mobile">. руб</span>
                </label>
            </div>
        </div>
    </div>



    <div class="filter-left-block__mobile">
        <div class="filter-left-block__mobile-title">Другие параметры</div>

        <div class="filter-left-block__mobile-filters">
            <div class="filter-left-block__body filter-left-block__equipment-type">
                <div class="filter-left-block__subheading">
                    Предоставляемое оборудование
                </div>

                <div class="filter-left-block__input-row">
                    <input type="checkbox" id="checkbox-terminal-rent" name="check-terminal-rent">
                    <label for="checkbox-terminal-rent">терминал в аренду или бесплатно</label>
                </div>

                <div class="filter-left-block__input-row">
                    <input type="checkbox" id="checkbox-buy-terminal" name="check-buy-terminal">
                    <label for="checkbox-buy-terminal">покупка терминала</label>
                </div>

                <div class="filter-left-block__input-row">
                    <input type="checkbox" id="checkbox-my-terminal" name="check-my-terminal">
                    <label for="checkbox-my-terminal">со своим терминалом</label>
                </div>
            </div>

            <div class="filter-left-block__heading">
                Банки для сравнения
            </div>

            <div class="filter-left-block__devider"></div>

            <div class="filter-left-block__body">
                <div class="filter-left-block__bank-type-list">
                    <div class="filter-left-block__split-filter">
                        <div class="js-only-bank-select-all">
                            выбрать все
                        </div>
                        <div class="js-only-bank-clear-all">
                            очистить все
                        </div>
                    </div>

                    <div class="filter-left-block__bank-item">
                        <div class="filter-left-block__bank-item--arrow"></div>
                        <div class="filter-left-block__bank-item-text js-only-bank-branches">
                            только банки с отделениями
                        </div>
                    </div>

                    <div class="filter-left-block__bank-item">
                        <div class="filter-left-block__bank-item--arrow"></div>
                        <div class="filter-left-block__bank-item-text js-only-bank-online">
                            только онлайн-банки
                        </div>
                    </div>

                    <div class="filter-left-block__bank-item">
                        <div class="filter-left-block__bank-item--arrow"></div>
                        <div class="filter-left-block__bank-item-text js-only-bank-gos">
                            только гос. банки
                        </div>
                    </div>
                </div>

                <div class="filter-left-block__banks-container">
                    <?foreach($arResult['FILTER']['BANKS'] as $bankItem):?>
                        <div class="filter-left-block__input-row">
                            <input
                                class="js-only-bank-checkbox"
                                type="checkbox"
                                name="bank-id"
                                value="<?=$bankItem['bx_id']?>"
                                data-branches="<?=$bankItem['DATA_BRANCHES']?>"
                                data-online="<?=$bankItem['DATA_ONLINE']?>"
                                data-gos="<?=$bankItem['DATA_GOS']?>"
                                id="checkbox-bank-<?=$bankItem['bx_id']?>"
                                <?=$bankItem['checked'] ? 'checked' : ''?>
                            >
                            <label for="checkbox-bank-<?=$bankItem['bx_id']?>"><?=$bankItem['bx_name']?></label>
                        </div>
                    <?endforeach?>
                </div>
            </div>
        </div>
    </div>
</div>