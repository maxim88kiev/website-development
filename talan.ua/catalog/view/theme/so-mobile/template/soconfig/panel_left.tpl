<div id="panel-menu" class="side-menu panel panel-left">
	<div class="content">
		<div class="panel-left__top clearfix text-center">
			<div class="panel-logo">
				   <?php  //$this->soconfig->get_logoMobile();?>
				   <a href="/mob/"><img src="<?php echo $_SERVER['DOCUMENT_ROOT'];?>/image/catalog/talan_img/logo_menu.svg" alt="logo"></a>
			</div>
			<?php if($mobile['barsearch_status'] == 1):?>
			<div class="panel-search">
				<?php echo $search; ?>
			</div>
			<?php endif; ?>
		</div>
		<?php if ($categories) { ?>
		<div class="panel-left__midde">
			 <div class="panel-group" id="panel-category" role="tablist" aria-multiselectable="true">
				<!--<?php //$i = 0; foreach ($categories as $category) { $i++; ?>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" >
						<a href="<?php //echo $category['href']; ?>"><?php //echo $category['name']; ?></a>
						<?php //if ($category['children']) { ?>
							<span class="head"><a  class="pull-right accordion-toggle" data-toggle="collapse" data-parent="#panel-category" href="#panel-category<?php //echo $i; ?>" aria-expanded="true"></a></span>
						<?php //} ?>
						
					</div>
					
					<?php //if(!empty($category['children'])) { ?>
					<div id="panel-category<?php //echo $i; ?>" class="panel-collapse collapse " role="tabpanel">
						<ul>
						   <?php //foreach ($category['children'] as $child) { ?>
							<li>
							  <a href="<?php //echo $child['href']; ?>"><?php //echo $child['name']; ?></a>
							</li>
						   <?php //} ?>
						</ul>
					</div>
					<?php //} ?>
				</div>
				
				<?php //} ?>-->
				
				
			
				
				
				
				
				<nav class="mob__header-navbar">
                    <div class="dropdown">
						<ul class="multi-level-mob">
						   <li class="mob_menu_first"><a role="button" data-toggle="dropdown" class="mob_menu_item" data-target="#"
							   href=""><?php echo $text_product_left; ?>
							</a>
							<div class="mob_menu_img">
								<svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.25" d="M1 1L6 6L11 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							</li>
							
							
							
							
							<ul class="multi-drop-mob">
								<li><a href="antistatic" class="mob_menu_items">Antistatic</a></li>
								<li><a href="elegance" class="mob_menu_items">Elegance</a></li>
								<li><a href="walker" class="mob_menu_items">Walker</a></li>
								<li><a href="airlight" class="mob_menu_items">AirLight</a></li>
								<li><a href="outdoor" class="mob_menu_items">OutDoor</a></li>
								<li><a href="premium-" class="mob_menu_items">Premium</a></li>
								<li><a href="elite" class="mob_menu_items">Elite</a></li>
								<li><a href="tornado" class="mob_menu_items">Tornado</a></li>
								<li><a href="standart" class="mob_menu_items">Standart+</a></li>
								<li><a href="standart-1" class="mob_menu_items">Standart</a></li>
								<li><a href="all-products" class="mob_menu_items"><?php echo $text_ollproduct_left; ?></a></li>
								<li><a href="tactical" class="mob_menu_items">Tactical</a></li>
							</ul>

							<!--<ul class="multi-drop-mob">
								<li><a href="new-models" class="mob_menu_items">Новинки</a></li>
								<li><a href="standart" class="mob_menu_items">Серия Standart</a></li>
								<li><a href="standart-1" class="mob_menu_items">Серия Standart+</a></li>
								<li><a href="elite" class="mob_menu_items">Серия Elite</a></li>
								<li><a href="premium" class="mob_menu_items">Серия Premium</a></li>
								<li><a href="outdoor-line" class="mob_menu_items">Серия OutDoor</a></li>
								<li><a href="airlight" class="mob_menu_items">Серия AirLight</a></li>
								<li><a href="walker" class="mob_menu_items">Серия Walker</a></li>
								<li><a href="tactical" class="mob_menu_items">Tactical</a></li>
								<li class="dropdown-submenu" id="mob_menu_submenu">
									<a role="button" data-toggle="dropdown" class="mob_menu_items" data-target="#"
							   href="">По назначению</a>
									<ul  class="dropdown-menu multi-level dropdown-mob" role="menu" aria-labelledby="dropdownMenu">
										<li>
											<a href="category/промышленность/защитная-обувь/" class="mob_menu_drop">Защитная обувь</a>
										</li>
										<li>
											<a href="category/промышленность/рабочая-обувь/" class="mob_menu_drop">Рабочая обувь</a>
										</li>
										<li><a href="category/промышленность/спецобувь-1/" class="mob_menu_drop">Спецобувь</a>
										</li>
										<li>
											<a href="category/промышленность/военная-обувь/"class="mob_menu_drop">Военная обувь</a>
										</li>
										<li>
											<a href="category/промышленность/тактическая-обувь/" class="mob_menu_drop">Тактическая обувь</a>
										</li>
										<li>
											<a href="category/промышленность/строительная-обувь/" class="mob_menu_drop">Строительная обувь</a>
										</li>
									</ul>
								</li>
							</ul>-->
							
							<li><a class="mob_menu_item"
							   href="https://drive.google.com/file/d/1FNeTOgPBkABDpFW2SPiuDBBLVyG60wr7/view"><?php echo $text_catalog_left; ?>
							</a></li>
							<li><a class="mob_menu_item"
							   href="technologies"><?php echo $footer_technologies; ?>
							</a></li>
							<li><a class="mob_menu_item"
							   href="certificates"><?php echo $text_sert_left; ?>
							</a></li>
							<li><a class="mob_menu_item"
							   href="contact-us"><?php echo $text_contact_left; ?>
							</a></li>
						</ul>
                    </div>
                </nav>
				
			</div>
			
			
		</div>
		<?php } ?>
		
		<div class="panel-left__bottom clearfix text-center">
			<?php if($mobile['barcompare_status'] == 1):?>
			<div class="col-xs-6">
				<i class="fa fa-check-square-o" aria-hidden="true"></i>
				<div class="bot-inner">
					<a href="<?php echo $compare; ?>"><?php echo $text_compare; ?></a>
				</div>
			</div>
			<?php endif; ?>
			<?php if($mobile['barwistlist_status'] == 1):?>
			<div class="col-xs-6">
				<i class="fa fa-heart" aria-hidden="true"></i>
				<div class="bot-inner">
					<a href="<?php echo $wishlist; ?>"><?php echo $text_wishlist; ?></a>
				</div>
			</div>
			<?php endif; ?>
			
			<?php if($mobile['barlanguage_status'] == 1 && !empty($language)):?>
			<div class="panel-left__language">
				<?php echo $language; ?>
			</div>
			<?php endif; ?>
			<?php if($mobile['barcurenty_status'] == 1):?>
			<div class="col-xs-6 panel-left__currency">
				<?php echo $currency; ?> 
				<h4><?php echo $objlang->get('text_currency'); ?></h4>

			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

