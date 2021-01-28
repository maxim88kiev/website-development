<div class="footer">
    <div class="container old-block">
        <div class="row">
            <div class="col-md-4 col-sm-24 col-xs-24">
                <div class="footer-logo">
                    <a href="/"><img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/image/logo-white.svg"></a>
                </div>
            </div>
            <div class="ordered-rows">
                <div class="col-md-20 col-sm-24 col-xs-24">
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
                <!--
                <div class="col-md-5 col-sm-24 col-xs-24">
                    <div class="navbar-button">
                        <a class="btn btn-default">Выбрать тариф РКО</a>
                    </div>
                </div>
                -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-24">
                <div class="copyright">
                    <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/include/copyright.php", Array(), Array(
                            "MODE" => "html",
                            "NAME" => "Редактировать копирайт",
                            "TEMPLATE" => "/include/copyright.php"
                        )
                    );?>

                    <?php
                    /**
                     * -------------------------------------------------------
                     * НЕ УДАЛЯТЬ ПАРТНЕРСКУЮ ССЫЛКУ. Согласовано с клиентом.
                     * -------------------------------------------------------
                     */
                    ?>
                    <?php if( isset($_GET['from_partner']) AND $_GET['from_partner'] === 'lucky-project' ) { ?>
                        <br/><br/>
                        <a href="https://lucky-project.ru/" target="_blank">
                            <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/image/logo-lp.svg" style="height: 30px;">
                            <br/>
                            <span style="color: #d0cfcf; font-size: 12px;">
										Разработка и проектирование
									</span>
                        </a>
                    <?php } ?>
                    <?php
                    /**
                     * -------------------------------------------------------
                     * НЕ УДАЛЯТЬ ПАРТНЕРСКУЮ ССЫЛКУ. Согласовано с клиентом.
                     * -------------------------------------------------------
                     */
                    ?>
                </div>
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
