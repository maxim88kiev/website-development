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
    $arFilter = ['IBLOCK_ID' => 7];
    $dbResult = CIBlockSection::GetList(['NAME' => 'ASC'], $arFilter, false);
    while ($arSection = $dbResult->GetNext()) {
        $arResult["SECTIONS"][$arSection["ID"]] = [
            'NAME' => $arSection['NAME'],
            'URL' => $arSection['SECTION_PAGE_URL'],
        ];
    }
    ?>
    <div class="row author-detail-article-list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?$arSection = $arResult["SECTIONS"][$arItem["IBLOCK_SECTION_ID"]]?>
            <div class="col-md-12 col-sm-12 col-xs-24 js-article-item" data-category="<?=$arResult["SECTIONS"][$arItem["IBLOCK_SECTION_ID"]]["NAME"];?>">
                <div class="article-list-item article-list-item--mini">
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-responsive">
                    </a>

                    <div class="article-list-item__title">
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <?=$arItem["NAME"]?>
                        </a>
                    </div>


                    <div class="article-list-item__footer">
                        <a class="article-list-item__category" href="<?=$arSection['URL']?>">
                            <?=$arSection["NAME"]?>
                        </a>

                        <div class="article-list-item__author">
                            <?=$arItem["AUTHOR"]?>
                        </div>
                    </div>
                </div>
            </div>

        <?endforeach;?>
    </div>
<?endif?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>
