<?php
$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/owlcarousel/assets/owl.carousel.css');
$this->addExternalCss(SITE_TEMPLATE_PATH . '/vendor/owlcarousel/assets/owl.theme.default.css');
$this->addExternalJs(SITE_TEMPLATE_PATH . '/vendor/owlcarousel/owl.carousel.js');
?>
<div class="content-list content-list_page_main">
    <div class="content-list__title">Еще мы пишем контент для<br> предпринимателей в СМИ</div>

    <div class="content-list__items owl-carousel">
        <?foreach ($arResult['ITEMS'] as $arItem):?>
            <div class="content-list__item">
                <div class="content-list__item-name"><?=$arItem['NAME']?></div>

                <div class="content-list__item-site">
                    <div class="content-list__item-site-image">
                        <img src="<?=$arItem['IMAGE']?>" alt="">
                    </div>

                    <div class="content-list__item-site-info">
                        <div class="content-list__item-site-name"><?=$arItem['SITE']?></div>
                        <div class="content-list__item-site-date"><?=$arItem['DATE']?></div>
                    </div>
                </div>
            </div>
        <?endforeach?>
    </div>


    <script>
        $('.content-list__items').owlCarousel({
            center: true,
            items: 5,
            loop:true,
            margin: 32,
            autoWidth: true,
        });
    </script>
</div>