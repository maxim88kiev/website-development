<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <base href="<?php echo $base; ?>" />
  <?php if ($description) { ?>
  <meta name="description" content="<?php echo $description; ?>" />
  <?php } ?>
  <?php if ($keywords) { ?>
  <meta name="keywords" content= "<?php echo $keywords; ?>" />
  <?php } ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php if ($icon) { ?>
  <link href="<?php echo $icon; ?>" rel="icon" />
  <?php } ?>
  <?php foreach ($links as $link) { ?>
  <link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
  <?php } ?>
  <meta name="google-site-verification" content="SF3CpML2OdrGFBpMAKlJv4HNmAcvt8AVHGcVAj1W7F4" />
  <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" type="text/css" />
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
  <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
  <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
  <link href="catalog/view/javascript/owlcarousel/assets/owl.carousel.css" rel="stylesheet">
  <link href="catalog/view/javascript/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
  
  <script src="https://cdn.bitrix24.ua/b5794297/crm/tag/call.tracker.js?26476943"></script>
  <script src="https://cdn.bitrix24.ua/b5794297/crm/site_button/loader_1_llzale.js?26476943"></script>
  <link type="text/css" rel="stylesheet" href="https://real1.bitrix24.ua/bitrix/js/imopenlines_widget/styles.css?r=1588254439-19">
  <script type="text/javascript" async="" charset="UTF-8" src="https://real1.bitrix24.ua/bitrix/js/imopenlines_widget/script.js?r=1588254439-19"></script>
  <script data-skip-moving="true">(function(w,d,u){var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);})(window,document,'https://cdn.bitrix24.ua/b5794297/crm/site_button/loader_1_llzale.js');</script>
  <script>var telerWdWidgetId="8f44e386-e700-443e-ad76-8aacb30dcd71";var telerWdDomain="real1.phonet.com.ua";</script>
  <script src="//real1.phonet.com.ua/public/widget/call-catcher/lib-v3.js"></script>
  <script type="text/javascript">(function(){var request,b=document.body,c='className',cs='customize-support',rcs=new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');request=true;b[c]=b[c].replace(rcs,' ');b[c]+=(window.postMessage&&request?' ':' no-')+cs;}());</script>
  <?php foreach ($styles as $style) { ?>
  <link href="<?php echo $style['href']; ?>" type="text/css" rel="<?php echo $style['rel']; ?>" media="<?php echo $style['media']; ?>" />
  <?php } ?>
  <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
  <script src="catalog/view/javascript/owlcarousel/owl.carousel.js" type="text/javascript"></script>

  <?php foreach ($scripts as $script) { ?>
  <script src="<?php echo $script; ?>" type="text/javascript"></script>
  <?php } ?>
  <?php echo $google_analytics; ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150294372-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150294372-1');
</script>
</head>
<body class="<?php echo $class; ?>">
<nav id="top" class="top_header">
  <div class="container top_header_container">
    <?php //echo $currency; ?>
    <!--<div id="top-links" class="nav pull-right">-->
      <ul class="top_header_container_ul">
        <li class="nav_hov"><a href="<?php echo $about_us; ?>"><?php echo $text_about_us; ?></a></li>
        <li class="nav_hov"><a href="<?php echo $delivery; ?>"><?php echo $text_delivery; ?></a></li>
        <li class="nav_hov"><a href="<?php echo $news; ?>"><?php echo $text_blog; ?></a></li>
        <li class="nav_hov"><a href="<?php echo $photo_gallery; ?>"><?php echo $text_photo_gallery; ?></a></li>
        <li class="nav_hov"><a href="<?php echo $contacts; ?>"><?php echo $text_contacts; ?></a></li>
      </ul>
      <ul class="top_header_container_ul_right">
        <li class="nav_lang"><?php echo $language; ?></li>
        <li class="dropdown container_ul_account">
          <a href="<?php echo $account; ?>" title="<?php echo $text_account; ?>" class="dropdown-toggle" data-toggle="dropdown">
            <!--<i class="fa fa-user"></i>-->
            <span class=" account_style"><?php echo $text_account; ?></span>
            <!--<span class="caret"></span>-->
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php if ($logged) { ?>
            <li><a href="<?php echo $account; ?>"><?php echo $text_account; ?></a></li>
            <li><a href="<?php echo $order; ?>"><?php echo $text_order; ?></a></li>
            <li><a href="<?php echo $transaction; ?>"><?php echo $text_transaction; ?></a></li>
            <li><a href="<?php echo $download; ?>"><?php echo $text_download; ?></a></li>
            <li><a href="<?php echo $logout; ?>"><?php echo $text_logout; ?></a></li>
            <?php } else { ?>
            <li><a href="<?php echo $register; ?>"><?php echo $text_register; ?></a></li>
            <li><a href="<?php echo $login; ?>"><?php echo $text_login; ?></a></li>
            <?php } ?>
          </ul>
        </li>
          <!--<li><a href="<?php echo $contact; ?>"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md"><?php echo $telephone; ?></span></li>
         <li><a href="<?php echo $wishlist; ?>" id="wishlist-total" title="<?php echo $text_wishlist; ?>"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_wishlist; ?></span></a></li>
         <li><a href="<?php echo $shopping_cart; ?>" title="<?php echo $text_shopping_cart; ?>"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_shopping_cart; ?></span></a></li>
         <li><a href="<?php echo $checkout; ?>" title="<?php echo $text_checkout; ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_checkout; ?></span></a></li>-->
      </ul>
    <!--</div>-->
  </div>
</nav>
<header>
  <div class="container header_content">


    <div class="header_content__block">
      <div id="logo" class="header_content__block--logo">
        <?php if ($logo) { ?>
        <a href="/">
          <img src="<?php echo $logo; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="img-responsive" /></a>
        <?php } else { ?>
        <h1>
          <a href="/"><?php echo $name; ?></a>
        </h1>
        <?php } ?>
      </div>
    </div>
    <div class="header_content__block search">
      <div class="header_content__block--time">Пн - Пт 9:00 - 19:00</div>
      <div class="header_content__block--search"><?php echo $search; ?></div>
    </div>
    <div class="header_content__block tell">
      <div class="header_content__block--tel tel1">+38 (044) 592 31 06</div>
      <div class="header_content__block--tel tel2">+38 (096) 961 30 14</div>
    </div>
    <div class="header_content__block cart"><div class="header_content__block--cart"><?php echo $cart; ?></div></div>
  </div>
</header>
<?php if ($categories) { ?>
<div class="container navbar_block">
  <nav id="menu" class="navbar navbar_block_menu">
    <div class="navbar-header"><span id="category" class="visible-xs"><?php echo $text_category; ?></span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse navbar_block_menu_collapse">
      <ul class="nav navbar-nav navbar_block_menu_collapse_nav">
        <?php

        foreach ($categories as $cat_num => $category ) { ?>
        <?php if ($category['children']) { ?>
        <li class="dropdown menu_collapse_nav_li"><a href="<?php echo $category['href']; ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category['name']; ?></a>
          <div class="dropdown-menu">
            <div class="dropdown-inner">
              <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
              <ul class="list-unstyled">
                <?php foreach ($children as $child) { ?>
                <li><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a></li>
                <?php } ?>
              </ul>
              <?php } ?>
            </div>
            <a href="<?php echo $category['href']; ?>" class="see-all"><?php echo $text_all; ?> <?php echo $category['name']; ?></a> </div>
        </li>
        <?php } else { ?>
          <li class="menu_collapse_nav_li"><a href="<?php echo $category['href']; ?>"><?php 
		  
		  if($category['name'] == 'Эксклюзивные  камни-валуны'){
			echo 'Эксклюзивные камни'; 
		  }else{
			echo $category['name']; 
		  }
		  
		  ?></a></li>
          <?php //if($cat_num == 5){ ?>
          <!--<li class="menu_collapse_nav_li"><a href="/gravelfix">Gravel Fix</a></li>-->
          <?php //}?>

        <?php } ?>
        <?php } ?>
      </ul>
    </div>
  </nav>
</div>
<?php } ?>
