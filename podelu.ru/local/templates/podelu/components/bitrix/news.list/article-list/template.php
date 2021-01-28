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
use Bitrix\Main\Localization\Loc;
use AMBase\Podelu\Ui;

$this->setFrameMode(true);

$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/slick-1.8.1/slick/slick.css');
$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/slick-1.8.1/slick/slick-theme.css');
$this->addExternalJs(SITE_TEMPLATE_PATH . "/vendor/lazysizes.min.js");
$this->addExternalJs(SITE_TEMPLATE_PATH . "/vendor/slick-1.8.1/slick/slick.min.js");

$sliderId = 'slider_' . $this->randString();
?>

<div class="section section-article">


    <?php if( CSite::InDir('/banks/') ) { ?>
        <div class="row">
            <div class="col-md-24">
                <div class="section-title">
                    Полезные статьи
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="slider" id="<?=$sliderId?>">
        <?foreach($arResult["ITEMS"] as $i => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="slider__item">
                <div class="article-item" data-href="<?=$arItem['DETAIL_PAGE_URL']?>">
                    <div class="article-image">
                        <canvas width="346" height="230"></canvas>
                        <?if (!empty($arItem['IMG'])):?>
                            <?if ($i < 3):?>
                                <img src="<?=$arItem['IMG']['SRC']?>"
                                     width="<?=$arItem['IMG']['WIDTH']?>"
                                     height="<?=$arItem['IMG']['HEIGHT']?>"
                                     alt="<?=$arItem['IMG']['ALT']?>"
                                     title="<?=$arItem['IMG']['TITLE']?>">
                            <?else:?>
                                <img class="lazyload"
                                     data-src="<?=$arItem['IMG']['SRC']?>"
                                     width="<?=$arItem['IMG']['WIDTH']?>"
                                     height="<?=$arItem['IMG']['HEIGHT']?>"
                                     alt="<?=$arItem['IMG']['ALT']?>"
                                     title="<?=$arItem['IMG']['TITLE']?>">
                            <?endif?>
                        <?else:?>
                            <?=Ui::getNoImage(100)?>
                        <?endif?>
                    </div>

                    <div class="article-header">
                        <?php echo $arItem['PROPERTIES']['PROPERTY_HEADER']['VALUE']; ?>

                        <?if (!empty($arItem['AUTHOR'])):?>
                            <div class="article-header__author">
                                <?=Loc::getMessage('ARTICLE_AUTHOR_TITLE')?>:
                                <?=$arItem['AUTHOR']?>
                            </div>
                        <?endif?>

                        <?if (!empty($arItem['DISPLAY_ACTIVE_FROM'])):?>
                            <div class="article-header__date"><?=$arItem['DISPLAY_ACTIVE_FROM']?></div>
                        <?endif?>
                    </div>

                    <div class="article-text">
                        <?=$arItem['PROPERTIES']['PROPERTY_DESCRIPTION']['~VALUE']['TEXT']; ?>
                    </div>

                    <div class="article-button">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']; ?>">Подробнее</a>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
</div>

<?if (count($arResult["ITEMS"]) > 3):?>
    <script>
        $('#<?=$sliderId?>').slick({
            infinite: false,
            slidesToShow: 3,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });
    </script>
<?endif;?>