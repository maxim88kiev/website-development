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

function cutByWords($maxlen, $text) {
    $len = (mb_strlen($text) > $maxlen) ? mb_strripos(mb_substr($text, 0, $maxlen), ' ') : $maxlen;
    $cutStr = mb_substr($text, 0, $len);
    $temp = (mb_strlen($text) > $maxlen) ? $cutStr. '...' : $cutStr;
    return $temp;
}
?>
<?if(!empty($arResult["ITEMS"])):?>
<div class="block-news-article">
    <div class="header-article">Интересные статьи</div>
        <div class="container-article">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <div class="item-news">
                    <div class="theme-news">
                        <?echo $arItem["NAME"]?>
                    </div>
                    <div class="block-content-news">
                        <div class="content-news text-content">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                <?=cutByWords(70, $arItem["PROPERTIES"]['PROPERTY_DESCRIPTION']['VALUE']['TEXT'])?>
                            </a>
                        </div>
                        <div class="content-news eays-content">
                            <img src="/local/templates/podelu/assets/image/eays.png">
                        </div>
                        <div class="content-news views-content"><?=$arItem['SHOW_COUNTER']?></div>
                    </div>
                    <hr>
                </div>
            <?endforeach;?>
        </div>
</div>
<?endif;?>