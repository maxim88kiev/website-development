<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
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

$tariffData = $arResult['TARIFF_DATA'];
$tariffCount = count($tariffData);
?>
<div class="bank-table-container-wrapper">
    <div class="right-block">
        <div class="right-block__right"></div>
        <div class="right-block__left"></div>
    </div>
    <div class="bank-table-container">
        <table class="bank-table">
            <thead>
            <tr>
                <th rowspan="2" class="fixed-column">
                    <img src="<?php echo $arResult['DETAIL_PICTURE']['SRC']; ?>">
                </th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_NAME']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_NAME']['VALUE'])) { ?>
                        <th><?php echo $tariff['PROPERTIES']['PROPERTY_NAME']['VALUE']; ?></th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr class="bank-table-btn-row">
                <?php foreach($tariffData as $tariff) { ?>
                    <th>
                        <a target="_blank"
                           href="/goto/<?=$arResult['CODE']?>"
                           class="btn"
                           onclick="ym(56399854, 'reachGoal', '2'); return true;"
                        >Выбрать</a>
                    </th>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column">Стоимость открытия счета в рублях </th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                $tariff['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'],
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            </thead>

            <tbody>
            <tr>
                <th class="fixed-column bank-table-section-title"></th>
                <th colspan="5" class="fixed-row bank-table-section-title">Ведение счета</th>
            </tr>
            <?php /*
								<tr>
									<th class="fixed-column">Срок бесплатного ведения счета</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_ACCOUNT_FREE_TERM']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_ACCOUNT_FREE_TERM']['VALUE'])) { ?>
											<th><?php echo $tariff['PROPERTIES']['PROPERTY_ACCOUNT_FREE_TERM']['VALUE']; ?></th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								*/ ?>
            <tr>
                <th class="fixed-column">Плата за обслуживание</th>
                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column">Проценты на остаток при наличии операций за календарный месяц</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PERCENT_MOUNT']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_ACCOUNT_PERCENT_MOUNT']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_ACCOUNT_PERCENT_MOUNT']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>

            <tr>
                <th class="fixed-column bank-table-section-title"></th>
                <th colspan="5" class="fixed-row bank-table-section-title">Платежи и переводы ЮЛ в рублях</th>
            </tr>
            <tr>
                <th class="fixed-column">Внутрибанковские переводы ЮЛ</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column">Межбанковские переводы ЮЛ через интернет и мобильный банк</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column">Платежи на бумажном носителе</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>

            <tr>
                <th class="fixed-column bank-table-section-title"></th>
                <th colspan="5" class="fixed-row bank-table-section-title">Переводы ФЛ в рублях</th>
            </tr>

            <tr>
                <th class="fixed-column">Переводы ФЛ в рублях</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column bank-table-section-title"></th>
                <th colspan="5" class="fixed-row bank-table-section-title">Внесение наличных</th>
            </tr>

            <tr>
                <th class="fixed-column">Внесение наличных через кассу</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column">Внесение наличных через устройства самообслуживания</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>

            <tr>
                <th class="fixed-column bank-table-section-title"></th>
                <th colspan="5" class="fixed-row bank-table-section-title">Снятие наличных</th>
            </tr>

            <tr>
                <th class="fixed-column">Снятие наличных через кассу</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>
            <tr>
                <th class="fixed-column">Снятие наличных через устройства самообслуживания</th>

                <?php foreach($tariffData as $tariff) { ?>
                    <?php if(isset($tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE'])) { ?>
                        <th>
                            <?php echo markNumberWithTags(
                                implode("<br/>", $tariff['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE']),
                                "<strong>",
                                "</strong>"
                            ); ?>
                        </th>
                    <?php } else { ?>
                        <th></th>
                    <?php } ?>
                <?php } ?>
            </tr>

            <?php /*
								<tr>
									<th class="fixed-column bank-table-section-title"></th>
									<th colspan="5" class="fixed-row bank-table-section-title">Комиссия за входящие переводы</th>
								</tr>


								<tr>
									<th class="fixed-column">Комиссия за входящие переводы</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_COMMISION_FOR_INCOMING_TRANSFER']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_COMMISION_FOR_INCOMING_TRANSFER']['VALUE'])) { ?>
											<th><?php echo $tariff['PROPERTIES']['PROPERTY_COMMISION_FOR_INCOMING_TRANSFER']['VALUE']; ?></th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>

								<tr>
									<th class="fixed-column">Овердрафт</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_OVERDRAFT']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_OVERDRAFT']['VALUE'])) { ?>
											<th>
												<?php echo markNumberWithTags(
													implode("<br/>", $tariff['PROPERTIES']['PROPERTY_OVERDRAFT']['VALUE']),
													"<strong>",
													"</strong>"
												); ?>
											</th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Торговый эквайринг</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_TRADING_ACQUIRING']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_TRADING_ACQUIRING']['VALUE'])) { ?>
											<th>
												<?php echo markNumberWithTags(
													implode("<br/>", $tariff['PROPERTIES']['PROPERTY_TRADING_ACQUIRING']['VALUE']),
													"<strong>",
													"</strong>"
												); ?>
											</th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Интернет эквайринг</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_INTERNET_ACQUIRING']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_INTERNET_ACQUIRING']['VALUE'])) { ?>
											<th>
												<?php echo markNumberWithTags(
													implode("<br/>", $tariff['PROPERTIES']['PROPERTY_INTERNET_ACQUIRING']['VALUE']),
													"<strong>",
													"</strong>"
												); ?>
											</th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Зарплатный проект</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_SALARY_PROJECT']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_SALARY_PROJECT']['VALUE'])) { ?>
											<th>
												<?php echo markNumberWithTags(
													implode("<br/>", $tariff['PROPERTIES']['PROPERTY_SALARY_PROJECT']['VALUE']),
													"<strong>",
													"</strong>"
												); ?>
											</th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Выпуск карты</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_CARD_ISSUE']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_CARD_ISSUE']['VALUE'])) { ?>
											<th>
												<?php echo markNumberWithTags(
													implode("<br/>", $tariff['PROPERTIES']['PROPERTY_CARD_ISSUE']['VALUE']),
													"<strong>",
													"</strong>"
												); ?>
											</th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Подключение мобильного банка</th>

									<?php foreach($tariffData as $tariff) { ?>
										<?php if(isset($tariff['PROPERTIES']['PROPERTY_MOBILE_BANK_CONNECTION']['VALUE']) AND !empty($tariff['PROPERTIES']['PROPERTY_MOBILE_BANK_CONNECTION']['VALUE'])) { ?>
											<th>
												<?php echo markNumberWithTags(
													implode("<br/>", $tariff['PROPERTIES']['PROPERTY_MOBILE_BANK_CONNECTION']['VALUE']),
													"<strong>",
													"</strong>"
												); ?>
											</th>
										<?php } else { ?>
											<th></th>
										<?php } ?>
									<?php } ?>
								</tr>
								*/ ?>
            </tbody>
        </table>
    </div>
</div>
