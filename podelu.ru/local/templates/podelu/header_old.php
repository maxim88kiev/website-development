<?php

use \AMBase\Podelu\Ui;
?>

<div id="panel"><!-- 12345 -->
    <?$APPLICATION->ShowPanel();?>
</div>
<div id="navbar" class="navbar">
    <div class="navbar-toggle"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-24 col-xs-12">
                <div class="navbar-logo xs-hidden">
                    <a href="/">
                        <img src="<?php echo SITE_TEMPLATE_PATH ?>/assets/image/image.png">
                    </a>
                </div>
            </div>
            <div class="navbar-dropdown">
                <div class="col-md-12 col-sm-16 col-xs-24">
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "menu-top", Array(
                        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                        "DELAY" => "N",	// Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",	// Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                        "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                        false
                    );?>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-24">
                    <div class="navbar-location">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "geo",
                            Array(
                                "ROOT_MENU_TYPE" => "geo",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "geo",
                                "USE_EXT" => "Y"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(Ui::isShowBreadcrumbs()):?>
    <div class="container breadcrumbs">
        <div class="row">
            <div class="col-md-24 col-sm-24 col-xs-24">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "breadcrumbs-articles",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0",
                        "COMPONENT_TEMPLATE" => "breadcrumbs-articles"
                    ),
                    false
                );
                ?>
            </div>
        </div>
    </div>
<?php endif;?>
<?php
if (
    !defined('ERROR_404') AND
    !CSite::InDir('/banks/') AND
    !CSite::InDir('/tarif/') AND
    !CSite::InDir('/article/') AND
    !CSite::InDir('/tag/') AND
    !CSite::InDir('/authors/') AND
    !CSite::InDir('/main/') AND
    !CSite::InDir('/post/') AND
    !CSite::InDir('/torgovyy-ekvayring/') AND
    !CSite::InDir('/index.php')
) { ?>
    <?php
    $pageTemplate = 'calc-page';
    ?>
    <div class="header <?=$pageTemplate?>">
        <div class="container">
            <div class="row">
                <div class="col-md-16 col-sm-24 col-xs-24">
                    <div class="header-title tariff-title">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "header-title",
                                "AREA_FILE_RECURSIVE" => "Y"
                            ),
                            false
                        );?>
                    </div>

                    <div class="header-description tarif-description">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            ".default",
                            array(
                                "AREA_FILE_SHOW" => "page",
                                "AREA_FILE_SUFFIX" => "header-description",
                                "AREA_FILE_RECURSIVE" => "Y"
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php if (CSite::InDir('/index.php')) { ?>
    <div class="container main-banner-wrapper">
        <div class="main-banner">
            <div class="section-title-white">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "header-title",
                    "AREA_FILE_RECURSIVE" => "Y"
                ),
                    false
                );?>
            </div>
            <div class="section-sub-title-white">
                <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "header-description",
                    "AREA_FILE_RECURSIVE" => "Y"
                ),
                    false
                );?>
            </div>
        </div>
    </div>
<?php } ?>