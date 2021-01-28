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
?><div class="header" style="background-image: url(/local/templates/podelu/assets/image/tariff-banner.png);">
	<div class="container">
		<div class="row">
			<div class="col-md-16 col-sm-24 col-xs-24">
				<div class="header-title">
					<?php echo $arResult['NAME']; ?>
				</div>
				<div class="header-description">

				</div>
			</div>
		</div>
	</div>
</div>


<?php
	$arResultBank = CIBlockElement::GetList(
		Array(),
		[
			"IBLOCK_ID" => BANK_IBLOCK_ID,
			"ACTIVE" => "Y",
			"ID"=> $arResult['PROPERTIES']['PROPERTY_BANK']['VALUE']
		],
		false,
		Array(),
		[
			"ID",
			"IBLOCK_ID",
			"NAME",
			"DETAIL_PAGE_URL",
			"PREVIEW_PICTURE",
			"DETAIL_PICTURE",
			"PROPERTY_*"
		]
	);

	$object = $arResultBank->GetNextElement();

	$arBank = [];
	$arBank = $object->GetFields();
	$arBank['PROPERTIES'] = $object->GetProperties();
?>

<!-- Приемущества -->
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-24">
				<div class="section-title">
					<?php echo $arBank['PROPERTIES']['PROPERTY_ADVANTEGES']['~VALUE']['TEXT']; ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="advantage-item">
				<img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage1.png">

				<?php if($arBank['ID'] == 1681 OR $arBank['ID'] == 1682 OR $arBank['ID'] == 1694) { ?>
					<div class="advantage-title">
						<strong>Онлайн-банк</strong>
					</div>
					<div class="advantage-subtitle">
						Полностью цирфовой банк - без визита в отделение
					</div>
				<?php } else { ?>
					<div class="advantage-title">
						<strong><?php echo $arBank['PROPERTIES']['PROPERTY_COUNT_BRANCHES_IN_COUNTRY']['VALUE']; ?></strong> отделений
					</div>
					<div class="advantage-subtitle">
						по всей России
					</div>
				<?php } ?>
			</div>

			<?php if($arBank['ID'] == 1681 OR $arBank['ID'] == 1682 OR $arBank['ID'] == 1694) { ?>
				<style>
					.advantage-item {
						width: 25%;
					}
				</style>
			<?php } else { ?>
				<div class="advantage-item">
					<img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage2.png">

					<div class="advantage-title">
						<strong><?php echo getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $arBank['ID']); ?></strong> отделений
					</div>
					<div class="advantage-subtitle">
						в Вашем городе
					</div>
				</div>
			<?php } ?>

			<div class="advantage-item">
				<img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage3.png">

				<div class="advantage-title">
					<strong><?php echo $arBank['PROPERTIES']['PROPERTY_YEARS']['VALUE']; ?></strong> лет
				</div>
				<div class="advantage-subtitle">
					на рынке
				</div>
			</div>
			<div class="advantage-item">
				<img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage4.png">

				<div class="advantage-title">
				</div>
				<div class="advantage-subtitle">
					<?php echo $arBank['PROPERTIES']['PROPERTY_STATE_SHARE_IN_CAPITAL']['~VALUE']['TEXT']; ?>
				</div>
			</div>
			<div class="advantage-item">
				<img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage5.png">

				<div class="advantage-title">
					<strong>
					<?php echo $arBank['PROPERTIES']['PROPERTY_RATING_GOOGLE']['VALUE']; ?>
					/
					<?php echo $arBank['PROPERTIES']['PROPERTY_RATING_APPLE']['VALUE']; ?>
					</strong> рейтинг
				</div>
				<div class="advantage-subtitle">
					приложения для бизнеса
					<br/>
					в App Store/Google Play
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container tariff-table">
	<div class="row">
		<div class="col-md-16">
			<div class="section desktop-main-table-container">
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
										<img src="<?php echo CFile::GetPath($arBank['DETAIL_PICTURE']); ?>">
									</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_NAME']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_NAME']['VALUE'])) { ?>
										<th><?php echo $arResult['PROPERTIES']['PROPERTY_NAME']['VALUE']; ?></th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr class="bank-table-btn-row">
									<th>
										<a target="_blank" href="<?php echo $arResult['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE']; ?>" class="btn">Выбрать</a>
									</th>
								</tr>
								<tr>
									<th class="fixed-column">Стоимость открытия счета в рублях </th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												$arResult['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'],
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
							</thead>

							<tbody>
								<tr>
									<th class="fixed-column bank-table-section-title"></th>
									<th colspan="1" class="fixed-row bank-table-section-title">Ведение счета</th>
								</tr>
								<tr>
									<th class="fixed-column">Плата за обслуживание</th>
									<?php if(isset($arResult['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Проценты на остаток при наличии операций за календарный месяц</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_ACCOUNT_PERCENT_MOUNT']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_ACCOUNT_PERCENT_MOUNT']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_ACCOUNT_PERCENT_MOUNT']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>

								<tr>
									<th class="fixed-column bank-table-section-title"></th>
									<th colspan="1" class="fixed-row bank-table-section-title">Платежи и переводы ЮЛ в рублях</th>
								</tr>
								<tr>
									<th class="fixed-column">Внутрибанковские переводы ЮЛ</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Межбанковские переводы ЮЛ через интернет и мобильный банк</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Платежи на бумажном носителе</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>

								<tr>
									<th class="fixed-column bank-table-section-title"></th>
									<th colspan="1" class="fixed-row bank-table-section-title">Переводы ФЛ в рублях</th>
								</tr>

								<tr>
									<th class="fixed-column">Переводы ФЛ в рублях</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_PAPER']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_PEOPLE_TRANSFER']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column bank-table-section-title"></th>
									<th colspan="1" class="fixed-row bank-table-section-title">Внесение наличных</th>
								</tr>

								<tr>
									<th class="fixed-column">Внесение наличных через кассу</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_CASH_IN_CASHBOX']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Внесение наличных через устройства самообслуживания</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_CASH_IN_SELF']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>

								<tr>
									<th class="fixed-column bank-table-section-title"></th>
									<th colspan="1" class="fixed-row bank-table-section-title">Снятие наличных</th>
								</tr>

								<tr>
									<th class="fixed-column">Снятие наличных через кассу</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_CASH_OUT_CASHBOX']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
								<tr>
									<th class="fixed-column">Снятие наличных через устройства самообслуживания</th>

									<?php if(isset($arResult['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE'])) { ?>
										<th>
											<?php echo markNumberWithTags(
												implode("<br/>", $arResult['PROPERTIES']['PROPERTY_CASH_OUT_SELF']['VALUE']),
												"<strong>",
												"</strong>"
											); ?>
										</th>
									<?php } else { ?>
										<th></th>
									<?php } ?>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-8">
            <div class="banner-tariff-rkko">
                <div class="logo-white">
                    <img src="/upload/medialibrary/df2/df2ee6fa4f3c0a3ab9a17e27d9d22dfb.png" alt="logo">
                </div>
                <div class="banner-article-title">
                    Оцените все преимущества обслуживания в банке
                </div>
                <div class="container-banner-article">
                    <ul class="navbar-banner-article">
                       <li><span>Задайте количество платежей</span></li>
                       <li><span>Сравните тарифы по РКО</span></li>
                       <li><span>Выберите лучшее предложение</span></li>
                    </ul>
                </div>
                <div class="container-btn-article-banner">
                    <a href="#" class="btn">Выбрать тариф РКО</a>
                </div>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "article-list-item",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "0",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        0 => "ID",
                        1 => "CODE",
                        2 => "XML_ID",
                        3 => "NAME",
                        4 => "TAGS",
                        5 => "SORT",
                        6 => "PREVIEW_TEXT",
                        7 => "PREVIEW_PICTURE",
                        8 => "DETAIL_TEXT",
                        9 => "DETAIL_PICTURE",
                        10 => "DATE_ACTIVE_FROM",
                        11 => "ACTIVE_FROM",
                        12 => "DATE_ACTIVE_TO",
                        13 => "ACTIVE_TO",
                        14 => "SHOW_COUNTER",
                        15 => "SHOW_COUNTER_START",
                        16 => "IBLOCK_TYPE_ID",
                        17 => "IBLOCK_ID",
                        18 => "IBLOCK_CODE",
                        19 => "IBLOCK_NAME",
                        20 => "IBLOCK_EXTERNAL_ID",
                        21 => "DATE_CREATE",
                        22 => "CREATED_BY",
                        23 => "CREATED_USER_NAME",
                        24 => "TIMESTAMP_X",
                        25 => "MODIFIED_BY",
                        26 => "USER_NAME",
                        27 => "",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "7",
                    "IBLOCK_TYPE" => "-",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        0 => "PROPERTY_DESCRIPTION",
                        1 => "PROPERTY_HEADER",
                        2 => "PROPERTY_TEXT",
                        3 => "",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "COMPONENT_TEMPLATE" => "article-list-item"
                ),
                false
            );?>
		</div>
	</div>
</div>

<?php
	global $arFaqFilter;
	$arFaqFilter = [
		"ID" => $arBank['PROPERTIES']['PROPERTY_FAQ']['VALUE']
	];
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "faq", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "N",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "CODE",
			2 => "XML_ID",
			3 => "NAME",
			4 => "TAGS",
			5 => "SORT",
			6 => "PREVIEW_TEXT",
			7 => "PREVIEW_PICTURE",
			8 => "DETAIL_TEXT",
			9 => "DETAIL_PICTURE",
			10 => "DATE_ACTIVE_FROM",
			11 => "ACTIVE_FROM",
			12 => "DATE_ACTIVE_TO",
			13 => "ACTIVE_TO",
			14 => "SHOW_COUNTER",
			15 => "SHOW_COUNTER_START",
			16 => "IBLOCK_TYPE_ID",
			17 => "IBLOCK_ID",
			18 => "IBLOCK_CODE",
			19 => "IBLOCK_NAME",
			20 => "IBLOCK_EXTERNAL_ID",
			21 => "DATE_CREATE",
			22 => "CREATED_BY",
			23 => "CREATED_USER_NAME",
			24 => "TIMESTAMP_X",
			25 => "MODIFIED_BY",
			26 => "USER_NAME",
			27 => "",
		),
		"FILTER_NAME" => "arFaqFilter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "6",	// Код информационного блока
		"IBLOCK_TYPE" => "SITE",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "PROPERTY_ASK",
			1 => "PROPERTY_QUESTION",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>