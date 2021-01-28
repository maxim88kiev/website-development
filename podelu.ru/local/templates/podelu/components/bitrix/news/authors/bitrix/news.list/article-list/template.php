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
?>
<?if (!empty($arResult["ITEMS"])):?>
    <?
    $arFilter = Array("IBLOCK_ID" => 7);
    $dbResult = CIBlockSection::GetList(Array("NAME"=>"ASC"), $arFilter, false);
    while ($fetch = $dbResult->GetNext()) {
        $arResult["SECTIONS"][$fetch["ID"]]["NAME"] = $fetch["NAME"];
    }
    ?>
    <div class="row">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="col-md-12 col-sm-12 col-xs-24 js-article-item" data-category="<?=$arResult["SECTIONS"][$arItem["IBLOCK_SECTION_ID"]]["NAME"];?>">
                <div class="article-list-item article-list-item--mini">
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive">
                    </a>

                    <div class="article-list-item__title">
                        <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>">
                            <?echo $arItem["NAME"]?>
                        </a>
                    </div>


                    <div class="article-list-item__footer">
                        <div class="article-list-item__category">
                            <?=$arResult["SECTIONS"][$arItem["IBLOCK_SECTION_ID"]]["NAME"];?>
                        </div>

                        <div class="article-list-item__author">
                            <?=$arItem["AUTHOR"]?>
                        </div>
                    </div>
                </div>
            </div>

        <?endforeach;?>
    </div>
<?endif?>