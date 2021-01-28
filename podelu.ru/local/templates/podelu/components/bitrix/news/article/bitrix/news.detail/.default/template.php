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
use \Bitrix\Main\Localization\Loc;
?>
<!-- Детальная страница статей в article -->
<div class="container">
    <div class="row">
        <div class="col-xs-24">
            <h1 class="section-title title-article">
                <?php echo $arResult['PROPERTIES']['PROPERTY_HEADER']['VALUE']; ?>
            </h1>

            <?if (!empty($arResult['AUTHOR'])):?>
                <div class="author-article">
                    <div class="author-article__img">
                        <img src="<?=$arResult['AUTHOR']['IMG']?>" alt="">
                    </div>
                    <div class="author-article__info">
                        <div class="author-article__name">
                            <?=$arResult['AUTHOR']['LINK']?>
                        </div>
                        <div class="author-article__title"><?=$arResult['AUTHOR']['TITLE']?></div>
                    </div>
                </div>
            <?endif?>
        </div>

        <?if (!empty($arResult['DISPLAY_ACTIVE_FROM'])):?>
            <div class='col-xs-12'>
                <div class='section-date date-article'>
                    <p><?= $arResult['DISPLAY_ACTIVE_FROM']?></p>
                </div>
            </div>
        <?endif?>
    </div>
</div>

<?if (!empty($arResult['DETAIL_PICTURE']['SRC'])):?>
	<div class="container article-banner-container">
		<div class="row">
			<div class="container main-banner-wrapper">
				<div class="article-banner" style="background-image: url('<?php echo $arResult['DETAIL_PICTURE']['SRC']; ?>');">
				</div>
			</div>
		</div>
	</div>
<?endif?>

<?$this->SetViewTarget('container-article-text');?>
<div class="container-article-text">
    <?if (!empty($arResult['CONTENTS'])):?>
        <?include 'include/contents.php'?>
    <?endif?>
    <?=$arResult['PROPERTIES']['PROPERTY_TEXT']['~VALUE']['TEXT']; ?>
</div>
<?$this->EndViewTarget();?>
