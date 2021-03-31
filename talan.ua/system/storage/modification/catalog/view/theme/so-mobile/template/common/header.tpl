<?php
/******************************************************
 * @package	SO Theme Framework for Opencart 2.3.x
 * @author	http://www.magentech.com
 * @license	GNU General Public License
 * @copyright(C) 2008-2015 Magentech.com. All rights reserved.
*******************************************************/
require_once(DIR_SYSTEM . 'soconfig/classes/soconfig.php');
if( isset($registry)){$this->soconfig = new Soconfig($registry);}
else{ include(DIR_TEMPLATE.'so-mobile/template/soconfig/not_registry.php'); exit; } 
?>

<!DOCTYPE html>
<html lang="<?= $objlang->get('code'); ?>">
<head prefix="og:http://ogp.me/ns# fb:http://ogp.me/ns/fb# product:http://ogp.me/ns/product#">
<title><?php echo $title; ?></title>

<?php if ($noindex) { ?>
<!-- OCFilter Start -->
<meta name="robots" content="index,nofollow" />
<!-- OCFilter End -->
<?php } ?>
      
<meta charset="UTF-8" />
<base href="<?php echo $base; ?>" />

	<?php if ($robots) { ?>
	<meta name="robots" content="<?php echo $robots; ?>" />
	<?php } ?>
<meta name="format-detection" content="telephone=no" />

<?php if($layouts){?><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><?php }?>
<?php if ($description) { ?><meta name="description" content="<?php echo $description; ?>" /><?php } ?>
<?php if ($keywords) { ?><meta name="keywords" content="<?php echo $keywords; ?>" /><?php } ?>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<?php // Begin General CSS ----- 
	if($direction=='ltr') $this->soconfig->addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css');
	else if($direction=='rtl') $this->soconfig->addCss('catalog/view/javascript/soconfig/css/bootstrap/bootstrap.rtl.min.css');
	else  $this->soconfig->addCss('catalog/view/javascript/bootstrap/css/bootstrap.min.css');
	$this->soconfig->addCss('catalog/view/javascript/font-awesome/css/font-awesome.min.css');
	$this->soconfig->addCss('catalog/view/javascript/soconfig/css/lib.css');
	$this->soconfig->addCss('catalog/view/javascript/soconfig/css/ratchet/ratchet.css');
	
	foreach ($styles as $style) $this->soconfig->addCss($style['href']);  
	if(isset($cssfile_status) && $cssfile_status ) foreach ($cssfile as $file) $this->soconfig->addCss($file);  
?>

<?php // Begin Themes Scripts ----
	$this->soconfig->addJs('catalog/view/javascript/jquery/jquery-2.1.1.min.js');
	$this->soconfig->addJs('catalog/view/javascript/bootstrap/js/bootstrap.min.js');
	$this->soconfig->addJs('catalog/view/javascript/soconfig/js/libs.js');
	if(isset($mobile['barnav']) && $mobile['barnav']) $this->soconfig->addJs('catalog/view/javascript/soconfig/js/mobile/topnav.js');

	$this->soconfig->addJs('catalog/view/javascript/soconfig/js/system.mobile.js');
	$this->soconfig->addJs('catalog/view/javascript/soconfig/js/ratchet/ratchet.js');
	
	
	$this->soconfig->addJs(URL_TEMPLATE.'so-mobile/js/so.custom.js');
	$this->soconfig->addJs(URL_TEMPLATE.'so-mobile/js/common.js');
	
	if(!defined('OWL_CAROUSEL')){
		$this->soconfig->addCss('catalog/view/javascript/soconfig/css/owl.carousel.css');
		$this->soconfig->addJs('catalog/view/javascript/soconfig/js/owl.carousel.js');
		define('OWL_CAROUSEL', 1);
	}
	
	foreach ($scripts as $script) $this->soconfig->addJs($script);
	if(isset($jsfile_status) && $jsfile_status) foreach ($jsfile as $file) $this->soconfig->addJs($file);
	
	$this->soconfig->scss_compassMobile();
    $this->soconfig->css_out();
	$this->soconfig->js_out();
	
?>

	<?php //Begin Google Fonts -----?>
	<?php if (isset($mobile['url_body']) && $mobile['body_status'] == 'google'):?> <link href='<?php echo $mobile['url_body'] ?>' rel='stylesheet' type='text/css'> <?php endif; ?>	
	<?php if (isset($mobile['url_heading']) && $mobile['heading_status'] == 'google'):?> <link href='<?php echo $mobile['url_heading'] ?>' rel='stylesheet' type='text/css'> <?php endif; ?>	

	<?php if (isset($mobile['selector_body']) && !empty($mobile['selector_body'])) :?>
		<style type="text/css"><?php 
			if ($mobile['body_status'] =='google') echo html_entity_decode($mobile['selector_body']).'{font-family:'.  $mobile['family_body'].'}';
			else echo $mobile['selector_body'].'{font-family:'. $mobile['normal_body'].'}';
			?>
		</style>
	<?php endif; ?>		

	<?php if (isset($mobile['selector_heading']) && !empty($mobile['selector_heading'])) :?>
		<style type="text/css"><?php 
			if ($mobile['heading_status'] =='google') echo html_entity_decode($mobile['selector_heading']).'{font-family:'.  $mobile['family_heading'].'}';
			else echo $mobile['selector_heading'].'{font-family:'. $mobile['normal_heading'].'}';
			?>
		</style>
	<?php endif; ?>	
	<?php // End Google Fonts ----- ?>



<?php if (!empty($mlseo_meta)) { echo $mlseo_meta; } ?>
      
	<?php foreach ($links as $link) { ?>
		<link href="<?php echo $link['href']; ?>" rel="<?php echo $link['rel']; ?>" />
	<?php } ?>

	<?php foreach ($analytics as $analytic) { ?>
		<?php echo $analytic; ?>
	<?php } ?>
	
	<link href="catalog/view/theme/so-mobile/css/new_style_mob.css" rel="stylesheet" />
	


					<?php
					// XD Stickers start
						if (!empty($xd_stickers)) {
							echo'<style type="text/css">';
					?>
								.xd_stickers_wrapper {
                     display: block;
                     height: 104px;
                     width: 104px;
                     position: absolute;
                     top: 5px;
                     font-size: 0;
								}
					<?php if ($xd_stickers_position == 0) { ?>
									.xd_stickers_wrapper {
										top: 5px;
										left: 15px;
										right: auto;
									}
					<?php } else { ?>
									.xd_stickers_wrapper {
										top: 5px;
										right: 15px;
										left: auto;
									}
					<?php } ?>
								.xd_stickers {
									padding: 0 10px;
									margin-bottom: 5px;
								}
					<?php
							foreach ($xd_stickers as $xd_sticker) {
								// var_dump($xd_sticker);
								if ($xd_sticker['status'] == '1') {
					?>
					.<?php echo $xd_sticker['id'] ?> {
						  background: transparent url(../../image/<?php echo $xd_sticker['bg'] ?>) no-repeat ; 
					}
					<?php
								}
							}
							echo'</style>';
						}
					// XD Stickers end
					?>
				
</head>

<?php
	//Render a class Body
	if($store_id){
		$mobile['mobilelayout'] = $store_id > 2 ? '1' :$store_id  ;
		$mobile['mobileheader'] = $store_id > 2 ? '1' :$store_id;
		
	}
	$cls_body  =  $class .' ';
	$cls_body .=  $direction.' ' ;
	$cls_body .=  'mobilelayout-'.$mobile['mobilelayout'].' ' ;
	
?>
<body class="<?php echo $cls_body;?>">
	
	<!-- Begin Main wrapper -->
	<div id="wrapper">
	<?php 
		//Render Panel Left
		
		$path = "common/home";
		$url = $_SERVER['REQUEST_URI'];
		if ($url == "/mob/" or strripos($url, $path)) {
			$is_home = TRUE;
		}else{
			$is_home = false;
		}  
		if (!$is_home) {
			include(DIR_TEMPLATE.'so-mobile/template/soconfig/panel_bar.tpl');
		}
	?>
	
	<?php 
	//Select Top Bar Scroll Down
	
	if($mobile['barnav']){
		if(isset($mobile['mobileheader']) ){
			$header_alert = '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Pleases Create Position Header</div>';
			switch ($mobile['mobileheader']) {
				case "0":
					$header1 = DIR_TEMPLATE.'so-mobile/template/header/header1.tpl';
					if (file_exists($header1)) include($header1);
					else echo $header_alert; 
					break;
				case "1":
					$header2 = DIR_TEMPLATE.'so-mobile/template/header/header2.tpl';
					if (file_exists($header2)) include($header2);
					else echo $header_alert; 
					break;
				case "2":
					$header3 = DIR_TEMPLATE.'so-mobile/template/header/header3.tpl';
					if (file_exists($header3)) include($header3);
					else echo $header_alert; 
					break;
				default:
					$header2 = DIR_TEMPLATE.'so-mobile/template/header/header2.tpl';
					if (file_exists($header2)) include($header2);
					break;
			}
		}else{
			include(DIR_TEMPLATE.'so-mobile/template/header/header1.tpl');
		}
	}
	?>
	
	<!-- Begin Main Content -->
	<div class="content">
	
	<?php 
	//Select Type Of Header
	
	if(!$mobile['barnav']){
		
		if(isset($mobile['mobileheader']) ){
			$header_alert = '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Pleases Create Position Header</div>';
			switch ($mobile['mobileheader']) {
				case "0":
					$header1 = DIR_TEMPLATE.'so-mobile/template/header/header1.tpl';
					if (file_exists($header1)) include($header1);
					else echo $header_alert; 
					break;
				case "1":
					$header2 = DIR_TEMPLATE.'so-mobile/template/header/header2.tpl';
					if (file_exists($header2)) include($header2);
					else echo $header_alert; 
					break;
				case "2":
					$header3 = DIR_TEMPLATE.'so-mobile/template/header/header3.tpl';
					if (file_exists($header3)) include($header3);
					else echo $header_alert; 
					break;
			}
		}else{
			include(DIR_TEMPLATE.'so-mobile/template/header/header1.tpl');
		}
	}
	?>

	
	
	