<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @var array $arResult['BANKS'] Информация о банках */
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
?>
<div class="section mobile-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title"><?=$arParams['DISPLAY_TITLE']?></div>
            </div>
        </div>

        <div class="row">
            <?php foreach($arResult["ITEMS"] as $tariffItem) { ?>
				<?php
					$bankID = $tariffItem['PROPERTIES']['PROPERTY_BANK']['VALUE'];
					$arBankItem = getBank($bankID, $arResult['BANKS']);

					$countBranchesInCity = getBranchesCountByCityAndBankId($arParams['CITY_NAME'], $bankID);
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
	                            <span>Отделения:</span>
	                            <br/>
                                <?=$tariffItem['COUNT_BANKS']?>
	                        </div>

	                        <div class="mobile-main-card-header-title">
								<?php if(isset($tariffItem['PROPERTIES']['PROPERTY_NAME']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_NAME']['VALUE'])) {
									echo markNumberWithTags($tariffItem['PROPERTIES']['PROPERTY_NAME']['VALUE'], "<strong>", "</strong>");
								} ?>
	                        </div>
	                    </div>


	                    <div class="mobile-main-card-body">
	                        <div class="mobile-main-card-text">
	                            <span>Открытие счета:</span>

								<?php if(isset($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'])) {
									echo markNumberWithTags($tariffItem['PROPERTIES']['PROPERTY_OPEN_COST']['VALUE'], "<strong>", "</strong>");
								} ?>
	                        </div>

	                        <div class="mobile-main-card-text">
	                            <span>Ведение счета:</span>
								<?php if(isset($tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE'])) {
									echo markNumberWithTags(
										implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_ACCOUNT_PAYMENT']['VALUE']),
										"<strong>",
										"</strong>"
									);
								} ?>
	                        </div>

	                        <div class="mobile-main-card-text">
	                            <span>Межбанковские платежи:</span>
	                            <br/>
	                            <span class="mobile-main-card-subtext">
									<?php if(isset($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']) AND !empty($tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE'])) {
										echo implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']);
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
	                        <a class="btn"
                               href="/goto/<?=$arBankItem['CODE']?>"
                               target="_blank"
                               onclick="ym(56399854, 'reachGoal', '1'); return true;">
                                Оставить заявку
                            </a>
	                        <a class="link js-show-more-bank" href="#" >Посмотреть детали</a>
	                    </div>
	                </div>
	            </div>
	        <?php } ?>
        </div>
    </div>
</div>

<div class="section desktop-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title"><?=$arParams['DISPLAY_TITLE']?></div>
            </div>
        </div>

        <div class="row">
            <div class="extended-calculator col-xs-24">
                <a class="extended-calculator__link" href="/tariffs_new_calculator/">Расширенный калькулятор</a>
            </div>

            <div class="col-md-24">
                <div class="main-table-container">
                    <table class="main-table tableFixHead">
                        <thead>
                            <tr>
                                <th>Тариф</th>
                                <th>Открытие счета</th>
                                <th>Ведение счета</th>
                                <th>Межбанковские платежи</th>
                                <th>Отделения</th>
                                <th>Рейтинг<br/> мобильного банка</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
							<?php foreach($arResult["ITEMS"] as $tariffItem) { ?>
								<?php
									$bankID = $tariffItem['PROPERTIES']['PROPERTY_BANK']['VALUE'];
									// Банк
									$arBankItem = getBank($bankID, $arResult['BANKS']);
									$bankLink = $arBankItem['PROPERTIES']['PROPERTY_PARTNER_URL']['VALUE'];

									/*
									$tariffZoneResult = CIBlockElement::GetList(
										[],
										[
											"IBLOCK_ID" => TARIFF_ZONE_IBLOCK_ID,
											"ID" => $tariffItem["PROPERTIES"]["PROPERTY_TARRIF_ZONE"]["VALUE"]
										],
										false,
										false,
										["ID", "IBLOCK_ID", "NAME"]
									);

									$tariffZone = [];
									while( $object = $tariffZoneResult->GetNextElement() ) {
										$tariffZone[] = $object->GetFields();
									}
									*/

									// Кол-во отделений в городе
									$countBranchesInCity = getBranchesCountByCityAndBankId($arParams['CITY_NAME'], $bankID);

									// Если это не онлайн банк и его нет в текущем городе пользователя, то не показываем его
									//if( $bankID != 1681 AND $bankID != 1682 AND $bankID != 1694 AND ($countBranchesInCity == 0 OR $countBranchesInCity == -1) ) {
									//	continue;
									//}
								?>

							<tr data-bank-id="<?=$bankID?>">
									<th>
										<div>
											<a href="/banks/<?php echo $arBankItem["CODE"]; ?>/">
												<img src="<?php echo $arBankItem['DETAIL_PICTURE']; ?>">
											</a>
											<br/>
											<small><?php echo $arBankItem['NAME']; ?></small>
											<br/>
											<small class='tariff-name'><?php echo $tariffItem['NAME']; ?></small>
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
										<?php
											echo markNumberWithTags(
												implode("<br/>", $tariffItem['PROPERTIES']['PROPERTY_BUSINESS_TRANSFER_TELECOM']['VALUE']),
												"<strong>",
												"</strong>"
											);
										?>
									</th>
									<th>
										<div class="count-banks-row">
                                            <?=$tariffItem['COUNT_BANKS']?>
										</div>
									</th>
									<th>
										Google Play - <?php echo $arBankItem['PROPERTIES']['PROPERTY_RATING_GOOGLE']['VALUE']; ?>
										<br/>
										App Store - <?php echo $arBankItem['PROPERTIES']['PROPERTY_RATING_APPLE']['VALUE']; ?>
									</th>
									<th>
										<a class="btn"
                                           href="/goto/<?=$arBankItem['CODE']?>"
                                           target="_blank"
                                           onclick="ym(56399854, 'reachGoal', '1'); return true;">
                                            Оставить заявку
                                        </a>
										<a href="/banks/<?php echo $arBankItem["CODE"]; ?>/" class="link">Посмотреть детали</a>
									</th>
								</tr>
							<?php } ?>
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

<?php /*
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
*/ ?>