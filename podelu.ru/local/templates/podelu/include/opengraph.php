<?
$scheme = (CMain::IsHTTPS()) ? "https://" : "http://";
$domain = $scheme . $_SERVER['SERVER_NAME'];

$arUri = parse_url($_SERVER['REQUEST_URI']);
$ogType = 'website';
$ogUrl = $domain . $arUri['path'];
$ogImage = $domain . SITE_TEMPLATE_PATH . '/assets/image/main-banner.png';
$arImageSize = getimagesize($_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/assets/image/main-banner.png');
?>
<meta property="og:title" content="<?$APPLICATION->ShowTitle()?>" />
<meta property="og:description" content="<?$APPLICATION->ShowProperty('description')?>" />
<meta property="og:type" content="<?$APPLICATION->ShowProperty('og:type', $ogType)?>" />
<meta property="og:image" content="<?$APPLICATION->ShowProperty('og:image', $ogImage)?>" />
<meta property="og:image:width" content="<?=$arImageSize[0]?>" />
<meta property="og:image:height" content="<?=$arImageSize[1]?>" />
<meta property="og:url" content="<?$APPLICATION->ShowProperty('og:url', $ogUrl)?>" />
<meta property="fb:app_id" content="" />
