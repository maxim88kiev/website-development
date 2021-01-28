<div class="acquiring__bank" data-id="<?=$arBank['ID']?>">
    <?
    $arRegion = $arBank['REGIONS'][$arBank['REGION_INDEX']];


    if (!empty($_SESSION['ACQUIRING']['BANKS'][$arBank['ID']]['INDUSTRY'])) {
        $industryId = $_SESSION['ACQUIRING']['BANKS'][$arBank['ID']]['INDUSTRY'];
        $arIndustry = $arRegion['INDUSTRIES'][$industryId];
    } else {
        $arIndustry = reset($arRegion['INDUSTRIES']);
    }
    ?>
    <div class="acquiring__bank-row">
        <div class="acquiring__bank-col acquiring__bank-col_info">
            <div class="acquiring__bank-logo">
                <img src="<?=$arBank['PREVIEW_PICTURE']?>" alt="">
            </div>
            <?if (count($arRegion['INDUSTRIES']) === 1):?>
                <div class="acquiring__bank-industry">
                    <?=$arIndustry['name']?>
                </div>
            <?else:?>
                <div class="acquiring__bank-industry">
                    <select class="acquiring__bank-industry-select">
                        <?foreach ($arRegion['INDUSTRIES'] as $industry):?>
                            <option value="<?=$industry['id']?>"><?=$industry['name']?></option>
                        <?endforeach?>
                    </select>

                    <div class="nice-select" tabindex="0">
                        <span class="current"><?=$arIndustry['name']?></span>

                        <ul class="list">
                            <?foreach ($arRegion['INDUSTRIES'] as $industry):?>
                                <?
                                $className = 'option';
                                if ($industry['id'] === $arIndustry['id']) {
                                    $className .= ' selected';
                                }
                                ?>
                                <li data-value="<?=$industry['id']?>" class="<?=$className?>"><?=$industry['name']?></li>
                            <?endforeach?>
                        </ul>
                    </div>
                </div>
            <?endif?>

            <div class="acquiring__bank-link-detail">
                <span>Смотреть детали</span>
            </div>
        </div>

        <div class="acquiring__bank-col acquiring__bank-col_rate">
            <div class="acquiring__bank-rate-title">Ставка:</div>
            <div class="acquiring__bank-rate">
                <?=$arIndustry['RATE']?>
            </div>
        </div>

        <div class="acquiring__bank-col acquiring__bank-col_equipment-options">
            <div class="acquiring__bank-equipment-title">Оборудование:</div>

            <div class="acquiring__bank-equipment-option-list">
                <?$className = 'acquiring__bank-equipment-option_' . ($arIndustry['TERMINAL_BUY'] ? 'yes' : 'no');?>
                <span class="acquiring__bank-equipment-option <?=$className?>">Покупка</span>

                <?$className = 'acquiring__bank-equipment-option_' . ($arIndustry['TERMINAL_OWN'] ? 'yes' : 'no');?>
                <span class="acquiring__bank-equipment-option <?=$className?>">Собственный терминал</span>

                <?$className = 'acquiring__bank-equipment-option_' . ($arIndustry['TERMINAL_RENT'] ? 'yes' : 'no');?>
                <span class="acquiring__bank-equipment-option <?=$className?>">Аренда</span>
            </div>
        </div>

        <div class="acquiring__bank-col acquiring__bank-col_equipment acquiring__bank-col_equipment-count_<?=count($arBank['EQUIPMENTS'])?>">
            <div class="acquiring__bank-equipment-prev"></div>


            <div class="acquiring__bank-equipment-scroll">
                <?
                $className = 'acquiring__bank-equipment-list';
                if ($arBank['IS_ONE_EQUIPMENT_PRICE']) {
                    $className .= ' acquiring__bank-equipment-list_common-price';
                }
                ?>
                <div class="<?=$className?>">
                    <?foreach ($arBank['EQUIPMENTS'] as $arEquipment):?>
                        <?include 'acquiring__bank-equipment.php'?>
                    <?endforeach?>
                </div>

                <?if ($arBank['IS_ONE_EQUIPMENT_PRICE']):?>
                    <div class="acquiring__bank-equipment-list-price">
                        <?=$arBank['EQUIPMENTS'][0]['price']?>
                    </div>
                <?endif?>
            </div>

            <div class="acquiring__bank-equipment-next"></div>

            <?if (count($arBank['EQUIPMENTS']) > 1):?>
                <div class="acquiring__bank-equipment-baloon-list">
                    <?foreach ($arBank['EQUIPMENTS'] as $i => $arEquipment):?>
                        <?if ($i === 0):?>
                            <div class="acquiring__bank-equipment-baloon acquiring__bank-equipment-baloon_active"></div>
                        <?else:?>
                            <div class="acquiring__bank-equipment-baloon"></div>
                        <?endif?>
                    <?endforeach?>
                </div>
            <?endif?>
        </div>

        <div class="acquiring__bank-col acquiring__bank-col_link">
            <a class="acquiring__bank-link"
               href="<?=$arBank['link']?>"
               target="_blank">
                На сайт банка
            </a>
        </div>
    </div>

    <div class="acquiring__bank-detail" style="display: none;">

        <div class="acquiring__bank-detail-col">
            <div class="acquiring__bank-detail-title acquiring__bank-detail-title_icon-card">Комиссия эквайринга</div>

            <div class="acquiring__bank-tariff-list">
                <?$emptyName = 1;?>
                <?foreach ($arIndustry['TARIFFS'] as $arTariff):?>
                    <div class="acquiring__bank-tariff">
                        <?
                        $name = $arTariff['name'];
                        if (empty($name)) {
                            $name = 'Тариф ' . $emptyName++;
                        }
                        ?>

                        <div class="acquiring__bank-tariff-name">
                            <span><?=$name?>:</span><?=$arTariff['terms']?>
                        </div>

                        <div class="acquiring__bank-tariff-description">
                            <?=formatTariffRates($arTariff['rates'])?>
                        </div>
                    </div>
                <?endforeach?>
            </div>
        </div>

        <div class="acquiring__bank-detail-col">
            <div class="acquiring__bank-detail-title">Дополнительно</div>

            <div class="acquiring__bank-options">
                <?
                $arTariff = reset($arIndustry['TARIFFS']);
                $arPaysystems = explode(',', $arTariff['paysystems']);
                $paysystems = 'недоступны';
                foreach ($arPaysystems as $i => $paysystem) {
                    $paysystem = trim($paysystem);

                    if (in_array($paysystem, ['Visa', 'Mastercard', 'Мир'])) {
                        unset($arPaysystems[$i]);
                    }
                }

                if (!empty($arPaysystems)) {
                    $paysystems = implode(', ', $arPaysystems);
                }
                ?>
                <div class="acquiring__bank-option">
                    <span class="acquiring__bank-option-name">Прочие платежные системы</span>
                    <span class="acquiring__bank-option-value"><?=$paysystems?></span>
                </div>

                <div class="acquiring__bank-option">
                    <span class="acquiring__bank-option-name">Подключение</span>
                    <span class="acquiring__bank-option-value"><?=$arTariff['connection_price']?></span>
                </div>

                <div class="acquiring__bank-option">
                    <span class="acquiring__bank-option-name">Сроки зачисления</span>
                    <span class="acquiring__bank-option-value"><?=$arTariff['dates']?></span>
                </div>
            </div>
        </div>

        <div class="acquiring__bank-detail-hide">
            Скрыть детали
        </div>
    </div>
</div>