<div class="advantage-list">
    <div class="advantage-list__container">
        <div class="advantage-list__image">
            <img src="<?=$templateFolder?>/img/1.png" alt="">
        </div>

        <div class="advantage-list__info">
            <div class="advantage-list__title">Почему выбирают нас</div>
            <div class="advantage-list__description">Преимущества<br>podelu</div>

            <div class="advantage-list__items">
                <?foreach ($arResult['ITEMS'] as $arItem):?>
                    <div class="advantage-list__item">
                        <div class="advantage-list__item-name"><?=$arItem['NAME']?></div>
                        <div class="advantage-list__item-description"><?=$arItem['DESCRIPTION']?></div>
                    </div>
                <?endforeach?>
            </div>
        </div>
    </div>
</div>