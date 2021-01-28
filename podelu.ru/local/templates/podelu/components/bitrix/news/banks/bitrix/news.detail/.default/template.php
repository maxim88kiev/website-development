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

<?php if($tariffCount === 1) { ?>
	<style>
		.bank-table tr th {
			width: 100%;

		}
	</style>
<?php } ?>

<?php if($tariffCount === 2) { ?>
	<style>
		.bank-table tr th { width: 50%; }
	</style>
<?php } ?>

<?php if($tariffCount === 3) { ?>
	<style>
		.bank-table tr th { width: 280px; }
	</style>
<?php } ?>

<?php if($tariffCount === 4) { ?>
	<style>
		.bank-table tr th { width: 25%; }
	</style>
<?php } ?>

<?php if($tariffCount <= 4) { ?>
	<style>
		.right-block {
			display: none;
		}
	</style>
<?php } ?>

<?php
	// Выводим только те города, отделения которых есть в городах
	$bankId = $arResult['ID'];
	// Данные со всеми региоными
	$data = \luckyproject\geo\GeoHelper::getAllGeoData();

	global $COUNT_BRANCHES_CITIES_CACHED;
	if( isset($COUNT_BRANCHES_CITIES_CACHED[$bankId]) ) {
		$str = "";
		foreach($COUNT_BRANCHES_CITIES_CACHED[$bankId] as $cityName => $countBranches) {
			if( $countBranches > 0 ) {
				$region = searchInAllGeoData($data, $cityName);

				$str .= "<li><a href='/ajax/region.php?region=" . searchInAllGeoData($data, $cityName) . "&city=$cityName'>$region, $cityName</a></li>";
			}
		}
	}
?>

<?php
	if( isset($arResult['PROPERTIES']['PROPERTY_HEADER_IMAGE']['VALUE']) AND !empty($arResult['PROPERTIES']['PROPERTY_HEADER_IMAGE']['VALUE'])  ) {
		$path = CFile::GetPath($arResult['PROPERTIES']['PROPERTY_HEADER_IMAGE']['VALUE']);
	} else {
		$path = "/local/templates/podelu/assets/image/bg.png";
	}
?>

<div class="header bank-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-16 col-sm-24 col-xs-24">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "breadcrumbs-articles",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0",
                        "COMPONENT_TEMPLATE" => "breadcrumbs-articles"
                    ),
                    false
                );
                ?>

                <div class="header-title detail-title">
                    <h1><?php echo $arResult['PROPERTIES']['PROPERTY_HEADER_TITLE']['VALUE']; ?></h1>
                </div>
                <div class="header-description  detail-description">
                    <?php echo $arResult['PROPERTIES']['PROPERTY_HEADER_SUBTITLE']['VALUE']['TEXT']; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section advantages-items">
    <div class="container">
        <? if($arResult['PROPERTIES']['PROPERTY_ADVANTEGES']['VALUE']['TEXT']): ?>
            <div class="row">
                <div class="col-md-24">
                    <div class="section-title">
                        <h2><?php echo $arResult['PROPERTIES']['PROPERTY_ADVANTEGES']['~VALUE']['TEXT']; ?></h2>
                    </div>
                </div>
            </div>
        <? endif; ?>

        <?$isWide = in_array($arResult['ID'], [1681, 1682, 1694, 1728]);?>
        <div class="row">
            <div class="advantage-item <?= ($isWide ? 'wide' : '');   ?>">
                <img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage1.png">
                <?php if($isWide) { ?>
                    <div class="advantage-title">
                        <strong>Онлайн-банк</strong>
                    </div>
                    <div class="advantage-subtitle">
                        Полностью цирфовой банк - без визита в отделение
                    </div>
                <?php } else { ?>
                    <div class="advantage-title">
                        <strong><?php echo $arResult['PROPERTIES']['PROPERTY_COUNT_BRANCHES_IN_COUNTRY']['VALUE']; ?></strong> отделений
                    </div>
                    <div class="advantage-subtitle">
                        по всей России
                    </div>
                <?php } ?>
            </div>

            <?if ($isWide):?>

            <?else:?>
                <div class="advantage-item <?= ($isWide ? 'wide' : '');?>">
                    <img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage2.png">
                    <?php
                    if (!function_exists('getWordEnding')) {
                        function getWordEnding($number, $suffix) {
                            $keys = array(2, 0, 1, 1, 1, 2);
                            $mod = $number % 100;
                            $suffix_key = ($mod > 7 && $mod < 20) ? 2: $keys[min($mod % 10, 5)];
                            return $suffix[$suffix_key];
                        }
                    }
                    ?>
                    <div class="advantage-title">
                        <strong><?=$number = getBranchesCountByCityAndBankId(\luckyproject\geo\GeoHelper::getCurrentCityName(), $arResult['ID']);?></strong> <?php echo getWordEnding($number,$suffix  = array('отделение', 'отделения', 'отделений')); ?>
                    </div>

                    <div class="advantage-subtitle">в Вашем городе</div>
                </div>
            <?endif?>

            <div class="advantage-item <?= ($isWide ? 'wide' : '');   ?>">
                <img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage3.png">

                <div class="advantage-title">
                    <strong><?php echo $arResult['PROPERTIES']['PROPERTY_YEARS']['VALUE']; ?></strong> лет
                </div>
                <div class="advantage-subtitle">
                    на рынке
                </div>
            </div>

            <div class="advantage-item <?= ($isWide ? 'wide' : '');   ?>">
                <img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage4.png">

                <div class="advantage-title">
                </div>
                <div class="advantage-subtitle">
                    <?php echo $arResult['PROPERTIES']['PROPERTY_STATE_SHARE_IN_CAPITAL']['~VALUE']['TEXT']; ?>
                </div>
            </div>

            <div class="advantage-item <?= ($isWide ? 'wide' : '');   ?>">
                <img src="<?php echo SITE_TEMPLATE_PATH;?>/assets/image/advantage5.png">

                <div class="advantage-title">
                    <strong>
                    <?php echo $arResult['PROPERTIES']['PROPERTY_RATING_GOOGLE']['VALUE']; ?>
                    /
                    <?php echo $arResult['PROPERTIES']['PROPERTY_RATING_APPLE']['VALUE']; ?>
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

<?if ($arResult['ID'] == 10):?>
    <a href="/tariffs_new_calculator/" class="sberbank-btn">Сравнить с тарифами топ 7 банков</a>
<?endif?>

<?include 'include/mobile.php'?>
