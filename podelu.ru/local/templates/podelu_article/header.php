<?php

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/fonts.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/0_reset.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/base.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/editor_styles.css");

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/1_page_template.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/2_header.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/3_intro.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/4_content.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/5_footer.css");

// lazyload css
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/lazyload/notification.css");

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery-3.5.1.min.js");
// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/rsbar.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/rsbar_no_auto_fix.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/menu.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/scrollToComments.js");
?>
<!DOCTYPE html>
<html <?$APPLICATION->ShowProperty('pageSchemaOrg', '')?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152636847-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-152636847-1');
    </script>
    <script src="https://www.googleoptimize.com/optimize.js?id=GTM-MK3LFVV"></script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MFT69L6');</script>
    <!-- End Google Tag Manager -->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(56399854, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/56399854" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <?
    $APPLICATION->ShowMeta("robots");
    $APPLICATION->ShowMeta("description");
    $APPLICATION->ShowCSS();
    $APPLICATION->ShowHeadStrings();
    $APPLICATION->ShowHeadScripts();
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
<body>
    <?$APPLICATION->ShowPanel();?>

    <div class="header">
        <div class="header__inside-wrap">
            <a class="header__logo" href="/">
                <img class="header__logo-img"
                     src="<?=SITE_TEMPLATE_PATH?>/img/30354A.svg"
                     alt="">
            </a>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "header-menu", Array(
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


            <div id="openMenuBtn" class="btn2 header__hamburger"></div>

        </div>

        <?$APPLICATION->IncludeComponent("bitrix:menu", "menu-mobile", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "",	// Тип меню для остальных уровней
            "DELAY" => "N",	// Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "1",	// Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
            "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        ),
            false
        );?>

    </div>


<main class="main">


