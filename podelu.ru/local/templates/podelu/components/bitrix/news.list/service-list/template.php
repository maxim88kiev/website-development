<div class="service-list">
    <div class="service-list__container">
        <div class="service-list__info">
            <div class="service-list__title">Услуги</div>
            <div class="service-list__description">Помогаем предпринимателям быстро и просто выбирать партнеров</div>
        </div>

        <div class="service-list__items">
            <?foreach ($arResult['ITEMS'] as $arItem):?>
                <div class="service-list__item">
                    <div class="service-list__item-image">
                        <img src="<?=$arItem['IMAGE']?>" alt="">
                    </div>

                    <div class="service-list__item-name"><?=$arItem['NAME']?></div>

                    <a class="service-list__item-link" href="<?=$arItem['LINK']?>">Подробнее</a>
                </div>
            <?endforeach?>
        </div>
    </div>
</div>