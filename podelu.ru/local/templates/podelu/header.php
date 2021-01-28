<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \AMBase\Podelu\Ui;
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


    <?php


         $curPage = $APPLICATION->getCurPage(false);



         $siteProtocol = CMain::IsHTTPS() ? 'https://' : 'http://';
         if(
             ($_SERVER['SCRIPT_NAME'] == '/banks/index.php' || $_SERVER['REAL_FILE_PATH'] == '/banks/index.php') ||
             ($_SERVER['SCRIPT_NAME'] == '/article/index.php' || $_SERVER['REAL_FILE_PATH'] == '/article/index.php') ||
             ($_SERVER['SCRIPT_NAME'] == '/rko/index.php' || $_SERVER['REAL_FILE_PATH'] == '/rko/index.php')
             ){

         }else{
            echo '<link rel="canonical" href="'.$siteProtocol.SITE_SERVER_NAME.$curPage.'" />';
         }

        ?>

    <?$APPLICATION->ShowProperty('canonical', '')?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?//$APPLICATION->ShowHead();?>
    <?

        $APPLICATION->ShowCSS();
        $APPLICATION->ShowHeadStrings();
        $APPLICATION->ShowHeadScripts();
    $APPLICATION->ShowMeta("robots");
        $APPLICATION->ShowMeta("description");
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <?include 'include/opengraph.php'?>

    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="<?=SITE_TEMPLATE_PATH?>/assets/image/favicon.png" />

    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/vendor/bootstrap-3.4.1/css/bootstrap.min.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/vendor/slick-1.8.1/slick/slick.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/vendor/slick-1.8.1/slick/slick-theme.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/vendor/rangeslider.js-2.3.0/rangeslider.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/vendor/fancybox/jquery.fancybox.min.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/main.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/style.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/assets/css/calc.css');?>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/vendor/jquery-3.4.1/jquery-3.4.1.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/vendor/fancybox/jquery.fancybox.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/vendor/bootstrap-3.4.1/js/bootstrap.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/vendor/slick-1.8.1/slick/slick.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/vendor/rangeslider.js-2.3.0/rangeslider.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/js/jquery.lazyload.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/vendor/jquery.poshytip.min.js");?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/assets/js/main.js");?>
    <meta name="yandex-verification" content="74481793ecad3e10" />
    <meta name="yandex-verification" content="15916fb28e2e0927" />

    <link rel="preload" href="/local/templates/podelu/vendor/slick-1.8.1/slick/fonts/slick.woff" as="font" type="font/woff" crossorigin="anonymous">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MFT69L6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?
include 'header_new.php';
?>

