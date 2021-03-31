<header id="header" class=" variant typeheader-<?php echo isset($typeheader) ? $typeheader : '1' ?>">
    <div class="header-top">
        <div class="page__top-menu">
            <nav class="list-nav">
                <ul class="list-nav__items">
                    <li class="list-nav__item"><a href="technologies"><?php echo $menu_top_technologies; ?></a></li>
                    <li class="list-nav__item"><a href="download-center"><?php echo $menu_top_download; ?></a></li>
                    <li class="list-nav__item"><a href="about-us"><?php echo $menu_top_about_us; ?></a></li>
                    <li class="list-nav__item"><a href="terms-of-payment-and-delivery"><?php echo $menu_top_roleofpayment; ?></a></li>
                    <li class="list-nav__item"><a href="contact-us"><?php echo $menu_top_contact; ?></a></li>
                </ul>
            </nav>
            <div class="page__user-bar">
                <div class="block__header-lang">
                    <?php echo $language; ?>
                </div>
                <div class="user-panel__item">
                    <a class="user-panel__link" href="<?= $logged ? $account : $login ?>">
                        <i class="fa fa-user"></i><span><?php echo $text_login_top; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header">
        <div class="content-block__header">
            <div class="block__header-logo">
                <?php $this->soconfig->get_logo(); ?>
            </div>
			
			<script>
			
				if(window.location.pathname=='/'){
					$('.block__header-logo a').on('click', function(e) {
						e.preventDefault();
					});
				}
			
			</script>
			
			
            <div class="block__header_container">
                <nav class="block__header-navbar">
                    <div class="dropdown">
                        <a id="dLabel" role="button" data-toggle="dropdown" class="btn" data-target="#"
                           href=""><?php echo $menu_products; ?>
                        </a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="antistatic">Antistatic</a></li>
							<li><a href="elegance">Elegance</a></li>
							<li><a href="walker"><?php echo $menu_walker; ?></a></li>
							<li><a href="airlight"><?php echo $menu_airlight; ?></a></li>
							<li><a href="outdoor"><?php echo $menu_outdoor_line; ?></a></li>
							<li><a href="premium"><?php echo $menu_premium; ?></a></li>
							<li><a href="elite"><?php echo $menu_elite; ?></a></li>
							<li><a href="tornado">Tornado</a></li>
							<li><a href="standart"><?php echo $menu_standart_1; ?></a></li>
                            <li><a href="standart-1"><?php echo $menu_standart_series; ?></a></li>
							<li><a href="all-products"><?php echo $menu_all_products; ?></a></li>
                            <li><a href="tactical"><?php echo $menu_tactical; ?></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="my-search">
                    <?php echo $content_search; ?>
                </div>
                <div class="blocks__tel-cont">
                    <div class="tel__text">
                        <div class="tel__text-1"><?php echo $text_retail_header ?>:</div>
                        <div class="tel__text-1"><?php echo $text_wholesale_header ?>:</div>
                    </div>
                    <div class="blocks__tel">
                        <div class="block__tel">
                            <a href="tel:+380951901004" class="clients-p">+38 (095) 190-10-04</a>
                        </div>
                        <div class="block__tel">
                            <a href="tel:+380672200385" class="clients-p">+38 (067) 220-03-85</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__header-info">
                <div class="blocks__cart-comparison">
                    <a href="compare-products"><img src="/image/catalog/talan_img/cart-comparison.svg" alt="" title=""
                                                    height="19"></a>
                </div>
                <div class="blocks__cart-marker">
                    <a href="wishlist"><img src="/image/catalog/talan_img/cart-marker.svg" alt="" title="" height="19"></a>
                </div>
                <div class="blocks__cart-leng">
                    <div class="blocks__cart">
                        <div class="block__cart">
                            <?php echo $cart ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar switcher -->
    <?php if (!isset($toppanel_status) || $toppanel_status != 0) : ?>
        <?php if (!isset($toppanel_type) || $toppanel_type != 2) : ?>
            <div class="navbar-switcher-container">
                <div class="navbar-switcher">
			<span class="i-inactive">
				<i class="fa fa-caret-down"></i>
			</span>
                    <span class="i-active fa fa-times"></span>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</header>


<!--<div class="header-container">
			<div class="header-container-flex">
				<div class="logo">
			   		<?php //$this->soconfig->get_logo();?>
			   	</div>
				<div class="my-search">
					<div class="icon-search hidden-lg"><i class="fa fa-search"></i></div>
					<?php //echo $content_search; ?>
				</div>

				<?php //if($phone_status): ?>
					<div class="telephone hidden-xs hidden-sm hidden-md" >
						<?php
/*if (isset($contact_number) && is_string($contact_number)) {
    echo $text_retail_header . ' : <b><a href="tel:' . html_entity_decode($contact_number, ENT_QUOTES, 'UTF-8') . '">' . html_entity_decode($contact_number, ENT_QUOTES, 'UTF-8') . '</a></b>';
} else {echo 'Telephone No';}*/
?>
					</div>
				<?php //endif; ?>

				<div class="telephone" style="font-size:18px; color:#fff; position:relative; top:-7px;">
					<?php //echo $text_retail_header ?>: <span class="_b"><a href="tel:+380951901004">(095) 190-10-04</a></span>
					/ <?php //echo $text_wholesale_header ?>: <span class="_b"><a href="tel:+380672200385">(067) 220-03-85</a></span>

				</div>


				<div class="my-main-menu">
				    <?php /*if (trim($content_menu)) :
						echo $content_menu;
				    endif;*/ ?>
				</div>

				<div class="languages">
					<div class="shopping_cart">
						<?php //echo $cart ?>
					</div>

					<div class="login">
						<?php //if($logged) { ?>
							<a href="<?php //echo $account; ?>"><i class="fa fa-user"></i></a>
						<?php //} else { ?>
							<a href="<?php //echo $login; ?>"><i class="fa fa-user"></i></a>
						<?php //} ?>
					</div>

					<?php //if($lang_status):?>
					<ul class="lang-curr">
					<li id="i-social" class="i-social"> </li>
						<li class="language"><?php //echo $language; ?></li>
					</ul>
					<?php //endif; ?>
				</div>


			</div>
	</div>	-->

<?php
$path = "common/home";
$url = $_SERVER['REQUEST_URI'];
if ($url == "/" or strripos($url, $path)) {
    $is_home = TRUE;
} else {
    $is_home = false;
}

