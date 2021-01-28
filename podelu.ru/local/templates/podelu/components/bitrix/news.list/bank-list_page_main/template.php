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
<div class="bank-list">
    <div class="bank-list__container">
        <div class="bank-list__title">Наши партнеры</div>

        <div class="bank-list__items">
            <?foreach($arResult["BANKS"] as $arBank):?>
                <div class="bank-list__item">
                    <a class="bank-list__item-link" href="<?=$arBank['URL']?>">
                        <img class="bank-list__item-image"
                             src="<?=$arBank['IMG']['SRC']?>"
                             width="<?=$arBank['IMG']['WIDTH']?>"
                             height="<?=$arBank['IMG']['HEIGHT']?>"
                             alt="<?=$arBank['IMG']['ALT']?>"
                             title="<?=$arBank['IMG']['TITLE']?>">

                        <span class="bank-list__item-detail">Подробнее</span>
                    </a>
                </div>
            <?endforeach?>
        </div>
    </div>
</div>
