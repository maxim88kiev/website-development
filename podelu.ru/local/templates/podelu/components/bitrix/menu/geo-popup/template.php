<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult['ITEMS'])):?>

    <div class="select-region-layer" style="display: none;"></div>
    <div class="select-region" style="display: none;">
        <div class="city-close"></div>

        <p><b>Ваш город не <?=$arResult['CURRENT_CITY_NAME']?>?</b></p>

        <input type="text" name="search" placeholder="Введите город">

        <ul>
            <?foreach ($arResult['ITEMS'] as $arItem):?>
                <li>
                    <?if ($arResult['STAY_THIS_PAGE']):?>
                        <span data-url="<?=$arItem['PARAMS']['DATA_URL']?>"><?=$arItem['TEXT']?></span>
                    <?else:?>
                        <a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
                    <?endif?>
                </li>
            <?endforeach?>
        </ul>
    </div>
<?endif?>
