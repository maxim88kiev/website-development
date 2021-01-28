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

use Bitrix\Main\Context;

global $intervalStart;
global $intervalEnd;

include 'functions.php';

$this->setFrameMode(true);
$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/jquery-nice-select-1.1.0/scss/nice-select.css');
$this->addExternalCss(SITE_TEMPLATE_PATH.'/assets/css/magnific-popup.css');
$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/slick-1.8.1/slick/slick.css');
$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/slick-1.8.1/slick/slick-theme.css');

$this->addExternalJs(SITE_TEMPLATE_PATH . '/vendor/jquery-nice-select-1.1.0/js/jquery.nice-select.min.js');
$this->addExternalJs(SITE_TEMPLATE_PATH.'/assets/js/jquery.magnific-popup.min.js');
$this->addExternalJs(SITE_TEMPLATE_PATH . "/vendor/slick-1.8.1/slick/slick.min.js");
$request = Context::getCurrent()->getRequest();
?>
<script>
    window.filter = {
        'interval-start': 0,
        'interval-end': 50,
        'banks': '<?php echo implode(',', $arResult['BANK_IDS']); ?>'
    };
</script>

<div class="acquiring">
    <div class="acquiring__title section-title section-title-ekvayring">
        СРАВНИТЕ ТАРИФЫ НА торговый эквайринг <span>в #CITY_FORM_6#</span>
    </div>

    <div class="acquiring__filter">
        <?include 'include/filter-left-block.php'?>
    </div>

    <div class="acquiring__banks">
        <div id="acquiring-table-container" class="acquiring-table-container">
            <?
            if($request->isAjaxRequest()) {
                $APPLICATION->RestartBuffer();
            }
            ?>

            <?include 'include/acquiring__bank-list.php'?>
            <script>
                $(function() {
                    $('.js-acquiring-change-industry option:eq(1)').attr('selected', 'selected').change();
                    new Acquiring('.acquiring', <?=CUtil::PhpToJSObject($arResult['BANKS'])?>);
                });
            </script>

            <?
            if ($request->isAjaxRequest()) {
                die();
            }
            ?>
        </div>
    </div>
</div>

