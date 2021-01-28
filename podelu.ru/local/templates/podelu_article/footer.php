</main>
<div class="footer">
    <div class="footer__inside-wrap">
        <div class="footer__btn_wrap">
            <a href="#" class="footer__logo-link">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/RUU342.svg" alt="" class="footer__logo-img">
            </a>

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu-footer",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N",
                    "COMPONENT_TEMPLATE" => "menu-footer"
                ),
                false
            );?>
        </div>
        <div class="footer__text">
            <div class="copyright">
                <small>© 2019-<?=date('Y')?>&nbsp;Все товарные знаки принадлежат их владельцам и используются исключительно для обозначения товаров и услуг, введенных в&nbsp;оборот их правообладателем. Информация, представлена на сайте в исключительно информационных целях и не может рассматриваться в качестве оферты. Данные на сайте могут отличаться от актуальных данных.<small></small></small><br><a href="/terms.pdf"><span style="color: #ffffff;">Пользовательское соглашение</span></a><br><span style="color: #ffffff;">Обратная связь:hello@podelu.ru</span> <br><a href="tel:88002015811"><span style="color: #ffffff;">88002015811</span></a>
            </div>
        </div>
    </div>
</div>


<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "select-region",
    Array(
        "ROOT_MENU_TYPE" => "geo",
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "geo",
        "USE_EXT" => "Y"
    )
);?>

        <span style="font:700 14px Gerbera;"></span>
</html>