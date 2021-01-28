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
?><div class="header banks-page">
	<div class="container">
		<div class="row">
			<div class="col-md-16 col-sm-24 col-xs-24">
				<div class="header-title banks-title">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "header-title",
							"AREA_FILE_RECURSIVE" => "Y"
						),
						false
					);?>
				</div>
				<div class="header-description banks-description">
					<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "header-description",
							"AREA_FILE_RECURSIVE" => "Y"
						),
						false
					);?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $count = 0; ?>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?php
        $countBranchesInCity = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $arItem['ID']);

        // Если это не онлайн банк и его нет в текущем городе пользователя, то не показываем его
        if( $arItem['ID'] != 1681 AND $arItem['ID'] != 1682 AND $arItem['ID'] != 1694 AND $arItem['ID'] != 1687 AND $arItem['ID'] != 1728 AND ($countBranchesInCity == 0 OR $countBranchesInCity == -1) ) {
            continue;
        }
        $count++;
    ?>
<?endforeach;?>

<div class="section mobile-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    Найдено <span class="count-banks"><?=$count;?></span> банков для открытия РКО в <span class="customer-city">вашем городе</span>
                </div>
            </div>
        </div>

        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?php
                    $countBranchesInCity = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $arItem['ID']);

                    // Если это не онлайн банк и его нет в текущем городе пользователя, то не показываем его
                    if( $arItem['ID'] != 1681 AND $arItem['ID'] != 1682 AND $arItem['ID'] != 1694 AND $arItem['ID'] != 1687 AND $arItem['ID'] != 1728 AND ($countBranchesInCity == 0 OR $countBranchesInCity == -1) ) {
                        continue;
                    }
                ?>

                <div class="col-xs-12 mobile-main-card-container">
                    <div class="mobile-main-card">
                        <div class="mobile-main-card-header">
                            <div class="mobile-main-card-header-logo-bank">
                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                                <img src="<?php echo $arItem['DETAIL_PICTURE']['SRC']; ?>" class="img-responsive">
                            </a>
                            </div>
                        </div>

                        <div class="mobile-main-card-body">
                            <div class="mobile-main-card-text">
                                <span>Количество тарифов РКО:</span>

                                <?php
                                    //$data = getAllTariffByBankID($arItem['ID']);
                                   // $count = count($data);
                                   $count = $arItem['TOTAL_COUNT'];

                                    // to continue here
                                    $text = "";
                                    if($count >= 5) {
                                        $text = "<strong>$count</strong> тарифов";
                                    } else if($count == 1) {
                                        $text = "<strong>$count</strong> тариф";
                                    } else {
                                        $text = "<strong>$count</strong> тарифа";
                                    }

                                    echo $text;
                                ?>
                            </div>

                            <div class="mobile-main-card-text">
                                <span>Отделения:</span>
                                <div class="count-banks-row">
                                    <strong><?php echo $arItem['PROPERTIES']['PROPERTY_COUNT_BRANCHES_IN_COUNTRY']['VALUE']; ?></strong> по стране
                                    <br/>
                                    <strong><?php echo $countBranchesInCity; ?></strong> в вашем городе
                                </div>
                            </div>

                            <div class="mobile-main-card-text">
                                <span>Рейтинг мобильного банка:</span>
                                <div class="mobile-rating">
                                    <strong class="rating-aple">
                                        App Store - <?php echo $arItem['PROPERTIES']['PROPERTY_RATING_APPLE']['VALUE']; ?>
                                    </strong>
                                    <br/>
                                    <strong class="rating-android">
                                        Google Play - <?php echo $arItem['PROPERTIES']['PROPERTY_RATING_GOOGLE']['VALUE']; ?>
                                    </strong>
                                </div>
                            </div>
                        </div>

                        <div class="mobile-main-card-footer clearfix">
                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="btn">Оставить заявку</a>
                            <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="link">Посмотреть детали</a>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
</div>

<div class="section desktop-main-table-container">
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    <?php $count = 0; ?>
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                     <?php
                         $countBranchesInCity = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $arItem['ID']);
                      // Если это не онлайн банк и его нет в текущем городе пользователя, то не показываем его
                     if( $arItem['ID'] != 1681 AND $arItem['ID'] != 1682 AND $arItem['ID'] != 1694 AND $arItem['ID'] != 1687 AND $arItem['ID'] != 1728 AND ($countBranchesInCity == 0 OR $countBranchesInCity == -1) ) {
                     continue;
                     }
                     $count++;
                     ?>
                <?endforeach;?>
                    Найдено <?=$count; ?> банков для открытия РКО в вашем городе
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-24">
                <div class="main-table-container">
                    <table class="main-table tableFixHead">
                        <thead>
                            <tr>
                                <th>Банк</th>
                                <th>Количество тарифов РКО</th>
                                <th>Время на рынке</th>
                                <th>Структура собственности</th>
                                <th>Отделения</th>
                                <th>Рейтинг
                                    <br/> мобильного банка</th>
                                <th></th>
                            </tr>
                        </thead>

                        <?php $count_the_banks = 0;?>
                        <tbody>
                            <?foreach($arResult["ITEMS"] as $arItem):?>
								<?php
									$countBranchesInCity = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $arItem['ID']);

									// Если это не онлайн банк и его нет в текущем городе пользователя, то не показываем его
									if( $arItem['ID'] != 1681 AND $arItem['ID'] != 1682 AND $arItem['ID'] != 1694 AND $arItem['ID'] != 1687 AND $arItem['ID'] != 1728 AND ($countBranchesInCity == 0 OR $countBranchesInCity == -1) ) {
										continue;
                                    }
								?>

								<tr onclick='window.location.href = "<?=$arItem["DETAIL_PAGE_URL"]?>"'>
									<th>
                                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                                            <img src="<?php echo $arItem['DETAIL_PICTURE']['SRC']; ?>" style="max-height: 25px;">
                                        </a>
										<br/>
										<small>
											<?echo $arItem["NAME"]?>
										</small>
									<th>
                                        <?php
                                           // $data = getAllTariffByBankID($arItem['ID']);
                                           // $count = count($data);
                                           $count = $arItem['TOTAL_COUNT'];
                                            $text = "";
                                            if($count >= 5) {
                                                $text = "<strong>$count</strong> тарифов";
                                            } else if($count == 1) {
                                                $text = "<strong>$count</strong> тариф";
                                            } else {
                                                $text = "<strong>$count</strong> тарифа";
                                            }

                                            echo $text;
                                        ?>
									</th>
									<th>
										<strong><?php echo $arItem['PROPERTIES']['PROPERTY_YEARS']['VALUE']; ?></strong> лет
									</th>
									<th>
                                        <?php echo $arItem['PROPERTIES']['PROPERTY_STATE_SHARE_IN_CAPITAL']['~VALUE']['TEXT']; ?>
									</th>
									<th>
										<?php if($arItem['ID'] == 1681 OR $arItem['ID'] == 1682 OR $arItem['ID'] == 1694 OR $arItem['ID'] == 1728 /*OR $arItem['ID'] == 1687*/) { ?>
											<strong>Онлайн-банк</strong>
										<?php } else { ?>
                                            <strong><?php echo $arItem['PROPERTIES']['PROPERTY_COUNT_BRANCHES_IN_COUNTRY']['VALUE']; ?></strong> по стране
											<br/>
											<strong><?php echo $countBranchesInCity; ?></strong> в вашем городе
										<?php } ?>
									</th>
									<th>
                                        Google Play - <?php echo $arItem['PROPERTIES']['PROPERTY_RATING_GOOGLE']['VALUE']; ?>
										<br/>
										App Store - <?php echo $arItem['PROPERTIES']['PROPERTY_RATING_APPLE']['VALUE']; ?>
									</th>
									<th>
										<span class="link">Посмотреть детали</span>
                                    </th>
                                </tr>
							<?endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>