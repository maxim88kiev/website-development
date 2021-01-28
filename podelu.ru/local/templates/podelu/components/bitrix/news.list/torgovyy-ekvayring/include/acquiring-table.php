<div class="acquiring-table">

    <div class="acquiring-table__header ">
        <div class="acquiring-table__column acquiring-table__column--bank">
            Банк
        </div>
        <div class="acquiring-table__column acquiring-table__column--for-what">
            Для кого
        </div>
        <div class="acquiring-table__column acquiring-table__column--rate">
            Ставка
        </div>
        <div class="acquiring-table__column acquiring-table__column--equipment">
            Оборудование
        </div>
        <div class="acquiring-table__column acquiring-table__column--button">

        </div>
    </div>

    <div class="acquiring-table__body">
        <?foreach ($arResult['TARIFFS'] as $tariff):?>
            <div class="acquiring-table__bank-container js-bank-container" data-bank-id="<?=$tariff->bank->id?>">
                <div class="acquiring-table__row">
                    <div class="acquiring-table__column acquiring-table__column--bank">
                        <?=$tariff->bank->name?>
                        <img src="<?php echo $arResult['BANKS'][$bankId]['DETAIL_PICTURE']; ?>">

                        <a href="#" class="acquiring-table__show-more js-acquiring-show-more" data-bank-id="<?=$tariff->bank->id?>">
                            Смотреть детали
                        </a>
                    </div>
                </div>
            </div>
        <?endforeach?>

        <?php foreach($arResult['ITEMS_GROUP_BY_BANK_ID'] as $bankId => $arItems) { ?>
            <div class="acquiring-table__bank-container js-bank-container" data-bank-id="<?php echo $bankId; ?>">
                <div class="acquiring-table__row">
                    <div class="acquiring-table__column acquiring-table__column--bank">
                        <?php echo $arResult['BANKS'][$bankId]['NAME']; ?>
                        <img src="<?php echo $arResult['BANKS'][$bankId]['DETAIL_PICTURE']; ?>">

                        <a href="#" class="acquiring-table__show-more js-acquiring-show-more" data-bank-id="<?php echo $bankId; ?>">
                            Смотреть детали
                        </a>
                    </div>
                    <div class="acquiring-table__column acquiring-table__column--for-what">
                        <?php if( $arItems['TYPE'] === 'GROUP' ) { ?>
                            <select class="acquiring-table__select js-acquiring-change-industry">
                                <option disabled selected></option>
                                <?php foreach( $arItems['ITEMS'] as $inductryItems ) { ?>
                                    <?php if( $inductryItems['TYPE'] === 'GROUP' ) { ?>
                                        <?php
                                        $rates = [];

                                        foreach($inductryItems['ITEMS'] as $productTermsItems) {
                                            $rates[] = $productTermsItems['RATE'];
                                        }
                                        ?>
                                        <option data-rates="<?php echo implode('<br/>', $rates); ?>" value="<?php echo($inductryItems['ID']); ?>"><?php echo($inductryItems['NAME']); ?></option>
                                    <?php } ?>
                                <?php } ?>
                            </select>
                        <?php } ?>

                        <?php if( $arItems['TYPE'] === 'ELEMENTS' ) { ?>
                            <span>
													<?php echo $arItems['INDUSTRY']; ?>
												</span>
                        <?php } ?>
                    </div>

                    <div class="acquiring-table__column acquiring-table__column--rate">
											<span class="js-acquiring-rate">
												<?php if( $arItems['TYPE'] === 'ELEMENTS' ) { ?>
                                                    <?php echo $arItems['RATE']; ?>
                                                <?php } ?>
											</span>
                    </div>

                    <?php
                    // ID раздела с оборудованием
                    $sectionIdWithEqupment = $arResult['BANKS'][$bankId]['PROPERTIES']['PROPERTY_EQUIPMENT_TRADE_ACQUIRING']['VALUE'];

                    $mobileAcquiringElements = CIBlockElement::GetList(
                        [], [
                        "IBLOCK_ID" => 10,
                        "ACTIVE" => "Y",
                        "SECTION_ID" => $sectionIdWithEqupment
                    ],
                        false,
                        [], [
                            "ID",
                            "IBLOCK_ID",
                            "IBLOCK_SECTION_ID",
                            "NAME",
                            "PREVIEW_PICTURE",
                            "PROPERTY_*"
                        ]
                    );

                    $equipment = [];
                    while($object = $mobileAcquiringElements->GetNextElement()) {
                        $arItem = $object->GetFields();
                        $arItem['PROPERTIES'] = $object->GetProperties();

                        $equipment[] = $arItem;
                    }

                    $equipmentCount = count($equipment);
                    ?>

                    <?php if($equipmentCount == 1 OR $equipmentCount == 2) { ?>
                        <style>
                            .css-equipment-block-right-<?php echo $bankId; ?> .acquiring-table__equipment-container:after {
                                display: none;
                            }

                            .css-equipment-block-right-<?php echo $bankId; ?> :after {
                                content: ' ';
                                background: #005559;
                                width: 1px;
                                height: 27px;
                                position: absolute;
                                top: 50%;
                                right: 0px;
                                margin-top: -13px;
                            }
                        </style>
                    <?php } ?>

                    <div class="acquiring-table__column acquiring-table__column--equipment css-equipment-block-right-<?php echo $bankId; ?> <?php if($equipmentCount == 1) { ?> acquiring-table__column--equipment-once <?php } ?>">
                        <div class="acquiring-table__equipment-container">
                            <?php foreach($equipment as $equipmentItem) { ?>
                                <div class="acquiring-table-table__equipment-item">
                                    <?php if( !empty($equipmentItem["PREVIEW_PICTURE"]) ) { ?>
                                        <img class="acquiring-table-table__equipment-picture" src="<?php echo CFile::GetPath($equipmentItem["PREVIEW_PICTURE"]); ?>">
                                    <?php } ?>

                                    <div class="acquiring-table-table__equipment-title">
                                        <?php echo $equipmentItem['NAME']; ?>
                                    </div>

                                    <div class="acquiring-table-table__equipment-subtitle">
                                        <?php echo $equipmentItem['PROPERTIES']['PROPERTY_COST']['VALUE'][0]; ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="acquiring-table__subtext">
                            <?php if( $arItems['TYPE'] === 'ELEMENTS' ) { ?>
                                <?php if($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_CHECK_BUY_TERMINAL']['VALUE'] !== 'Y') { ?>
                                    Покупка оборудования недоступна <br/>
                                <?php } ?>

                                <?php if($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_CHECK_MY_TERMINAL']['VALUE'] !== 'Y') { ?>
                                    Подключение собственного терминала недоступно <br/>
                                <?php } ?>

                                <?php if($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_CHECK_TERMINAL_RENT']['VALUE'] !== 'Y') { ?>
                                    Аренда оборудования недоступна
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="acquiring-table__column acquiring-table__column--button">
                        <a href="<?php echo $arResult['BANKS'][$bankId]['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']; ?>" class="btn" target="_blank" rel="nofollow">На сайт банка</a>
                    </div>
                </div>

                <div class="js-bank-additional-info-container" data-bank-id="<?php echo $bankId; ?>" style="display: none;">
                    <div class="acquiring-table__row acquiring-table__row--additional">
                        <div class="acquiring-table__column acquiring-table__column--bank">
												<span>
													<strong>
														Тариф
													</strong>
												</span>
                        </div>
                        <div class="acquiring-table__column acquiring-table__column--for-what">
												<span>
													<strong>
														Условия предоставления
													</strong>
												</span>
                        </div>
                        <div class="acquiring-table__column acquiring-table__column--rate">
												<span>
													<strong>
														Ставка Visa,
														<br/>
														Mastercard, Мир
													</strong>
												</span>
                        </div>
                    </div>

                    <?php if( $arItems['TYPE'] === 'ELEMENTS' ) { ?>
                        <?php foreach( $arItems['ITEMS'] as $arItem ) { ?>
                            <div class="acquiring-table__row acquiring-table__row--additional">
                                <div class="acquiring-table__column acquiring-table__column--bank">
														<span>
															<?php echo $arItem['NAME']; ?>

															<u>(<?php echo $arItem['PROPERTIES']['PROPERTY_INTERVAL_START']['VALUE']; ?>/<?php echo $arItem['PROPERTIES']['PROPERTY_INTERVAL_END']['VALUE']; ?>)</u>
														</span>
                                </div>
                                <div class="acquiring-table__column acquiring-table__column--for-what">
														<span>
															<?php
                                                            echo markNumberWithTags(
                                                                implode("<br/>", $arItem['PROPERTIES']['PROPERTY_CONDITIONS_PRODUCT']['VALUE']),
                                                                "<strong>",
                                                                "</strong>"
                                                            );
                                                            ?>
														</span>
                                </div>
                                <div class="acquiring-table__column acquiring-table__column--rate">
														<span>
															<?php
                                                            foreach($arItem['PROPERTIES']['PROPERTY_RATE']['VALUE'] as $rateRow) {
                                                                $tmp = substr(strstr($rateRow, '—'), 1, strlen($rateRow));
                                                                //echo markNumberWithTags($tmp, "<strong>", "</strong>");

                                                                echo $rateRow . "<br/>";
                                                            }
                                                            ?>
														</span>
                                </div>
                                <div class="acquiring-table__column acquiring-table__column--equipment">
														<span>
															<?php
                                                            echo markNumberWithTags(
                                                                implode("<br/>", $arItem['PROPERTIES']['PROPERTY_CONDITIONS_TERMINAL']['VALUE']),
                                                                "<strong>",
                                                                "</strong>"
                                                            );
                                                            ?>
														</span>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <?php if( $arItems['TYPE'] === 'GROUP' ) { ?>
                        <?php foreach( $arItems['ITEMS'] as $inductryItems ) { ?>
                            <?php if( $inductryItems['TYPE'] === 'GROUP' ) { ?>
                                <?php foreach($inductryItems['ITEMS'] as $productTermsItems) { ?>
                                    <?php if( $productTermsItems['TYPE'] === 'GROUP' ) { ?>
                                        <?php foreach($productTermsItems['ITEMS'] as $arItem) { ?>
                                            <div class="acquiring-table__row acquiring-table__row--additional js-acquiring-inductry-item" data-inductry-id="<?php echo($inductryItems['ID']); ?>">
                                                <div class="acquiring-table__column acquiring-table__column--bank">
																		<span>
																			<?php echo $arItem['NAME']; ?>


																			<u>(<?php echo $arItem['PROPERTIES']['PROPERTY_INTERVAL_START']['VALUE']; ?>/<?php echo $arItem['PROPERTIES']['PROPERTY_INTERVAL_END']['VALUE']; ?>)</u>
																		</span>
                                                </div>
                                                <div class="acquiring-table__column acquiring-table__column--for-what">
																		<span>
																			<?php
                                                                            echo markNumberWithTags(
                                                                                implode("<br/>", $arItem['PROPERTIES']['PROPERTY_CONDITIONS_PRODUCT']['VALUE']),
                                                                                "<strong>",
                                                                                "</strong>"
                                                                            );
                                                                            ?>
																		</span>
                                                </div>
                                                <div class="acquiring-table__column acquiring-table__column--rate">
																		<span>
																			<?php
                                                                            foreach($arItem['PROPERTIES']['PROPERTY_RATE']['VALUE'] as $rateRow) {
                                                                                $tmp = substr(strstr($rateRow, '—'), 1, strlen($rateRow));
                                                                                //echo markNumberWithTags($tmp, "<strong>", "</strong>");

                                                                                echo $rateRow . "<br/>";
                                                                            }
                                                                            ?>
																		</span>
                                                </div>
                                                <div class="acquiring-table__column acquiring-table__column--equipment">
																		<span>
																			<?php
                                                                            echo markNumberWithTags(
                                                                                implode("<br/>", $arItem['PROPERTIES']['PROPERTY_CONDITIONS_TERMINAL']['VALUE']),
                                                                                "<strong>",
                                                                                "</strong>"
                                                                            );
                                                                            ?>
																		</span>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>

                    <div class="acquiring-table__row acquiring-table__row--additional">
                        <div class="acquiring-table__column acquiring-table__column--bank">
                            <a href="#" class="acquiring-table__show-more acquiring-table__show-more--inverse js-acquiring-show-less" data-bank-id="<?php echo $bankId; ?>">
                                Скрыть детали
                            </a>
                        </div>
                        <div class="acquiring-table__column acquiring-table__column--for-what">
                            <?php if( $arItems['TYPE'] === 'ELEMENTS' ) { ?>
                                <?php if( isset($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_RATE_OTHER']['VALUE']) AND !empty($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_RATE_OTHER']['VALUE']) ) { ?>
                                    <span>
															<strong>Прочие платежные системы:</strong>
															<?php echo implode(', ', $arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_RATE_OTHER']['VALUE']); ?>
														</span>
                                <?php } ?>
                            <?php } ?>
                        </div>

                        <div class="acquiring-table__column acquiring-table__column--rate">

                        </div>

                        <div class="acquiring-table__column acquiring-table__column--equipment">
                            <?php if( $arItems['TYPE'] === 'ELEMENTS' ) { ?>
                                <?php if( isset($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_CONNECTED']['VALUE']) AND !empty($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_CONNECTED']['VALUE']) ) { ?>
                                    <strong>Подключение:</strong> <?php echo $arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_CONNECTED']['VALUE']; ?>
                                <?php } ?>

                                <br/>

                                <?php if( isset($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_TERMS']['VALUE']) AND !empty($arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_TERMS']['VALUE']) ) { ?>
                                    <strong>Сроки зачисления:</strong> <?php echo implode(", ", $arItems['ITEMS'][0]['PROPERTIES']['PROPERTY_TERMS']['VALUE']); ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>