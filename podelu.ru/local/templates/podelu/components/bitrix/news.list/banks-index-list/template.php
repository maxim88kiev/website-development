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
$count = 0;
?>
<div class="row row-bank">
	<?foreach($arResult["BANKS"] as $arBank):?>
		<div class="col-md-4 col-sm-6 col-xs-12 <?if($count++ >= 24) { ?> hidden hide-bank-item <?php } ?>">
			<a href="<?=$arBank['URL']?>">
				<img src="<?=$arBank['IMG']['SRC']?>"
                     width="<?=$arBank['IMG']['WIDTH']?>"
                     height="<?=$arBank['IMG']['HEIGHT']?>"
                     alt="<?=$arBank['IMG']['ALT']?>"
                     title="<?=$arBank['IMG']['TITLE']?>">
			</a>
		</div>
	<?endforeach?>
</div>

<?if (count($arResult["BANKS"]) > 24):?>
    <div class="col-md-24 btn-container js-show-more-banks-container">
        <div class="section-btn section-btn-index">
            <a href="#" class="btn js-show-more-banks">Посмотреть еще</a>
            <a href='#' class='btn js-hide-more-banks'>Скрыть список</a>
        </div>
    </div>
<?endif?>