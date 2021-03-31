<?php if(isset($registry)){$this->soconfig = new Soconfig($registry);} 

?>
		<div class="container footer-content">
		
		
		<?php 
		  $path = "common/home";
		  $url = $_SERVER['REQUEST_URI'];
		  if ($url == "/mob/" or strripos($url, $path)) {?>
			

			<div class="col-md-6 order-2 order-md-2 order-lg-3 col-lg-4 pb-2">
                                <div class="talan-numbers">
                                    <div class="mr-lg-2">
                                        <h3 class="talan_h3"><?php echo $text_romny; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635611">(067) 463-56-11</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380544832161">(05448)-3-21-61</a></p>
                                        <h3 class="talan_h3"><?php echo $text_kiev; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635603">(067) 463-56-03</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380442894427">(044) 289-44-27</a></p>
                                        <h3 class="talan_h3"><?php echo $text_kharkov; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380679410705">(067) 941-07-05</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380675027406">(067) 502-74-06</a></p>
                                    </div>
                                    <div>
                                        <h3 class="talan_h3"><?php echo $text_dnieper; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635604">(067) 463-56-04</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380567324095">(056)-732-40-95</a></p>
                                        <h3 class="talan_h3"><?php echo $text_nikolaev; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674635602">(067) 463-56-02</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380512581192">(0512) 58-11-92</a></p>
                                        <h3 class="talan_h3"><?php echo $text_ternopil; ?></h3>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380674013748">(067) 401-37-48</a></p>
                                        <p class="talan_p"><img src="image/catalog/talan_img/Vector-phone.svg" alt=""><a href="tel:+380352520406">(0352) 52-04-06</a></p>
                                    </div>
                                </div>
                            </div>
			
			
		 <?php } ?>
			
			<?php if ($mobile['phone_status'] && $mobile['email_status']):?>
			<!--<div class="footernav-top">
				<div class="need-help">
					<p><?php echo $objlang->get('text_needhelp')?></p>
					<div class="nh-contact">
						<?php if ($mobile['phone_status']):?><a href="tel:<?php echo $mobile['phone_text'];?>"><i class="fa fa-phone"></i><?php echo $mobile['phone_text'];?></a> <?php endif;?>
						<?php if ($mobile['email_status']):?><a class="need-help-padding" href="mailto:<?php echo $mobile['email_text'];?>" target="_top"><i class="fa fa-envelope-o"></i> <?php echo $objlang->get('text_emailus')?></a> <?php endif;?>
					</div>
				</div>
			</div>-->
			<?php endif;?>
			
			<?php if ($mobile['customfooter_status']):?>
			<!--<div class="footernav-social">
				<?php echo  html_entity_decode($mobile['customfooter_text'], ENT_QUOTES, 'UTF-8');?>
			</div>-->
			<?php endif;?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?php if ($mobile['menufooter_status'] ):?>
			
			
			<div class="footernav-midde">
				<ul class="footer-link-list row">
				
					<li class="col-xs-6"><a href="technologies"><?php echo $footer_technologies; ?></a></li>
					<li class="col-xs-6"><a href="https://drive.google.com/file/d/1FNeTOgPBkABDpFW2SPiuDBBLVyG60wr7/view"><?php echo $text_catalog_left; ?></a></li>
					<li class="col-xs-6"><a href="certificates"><?php echo $text_sert_left; ?></a></li>
					<li class="col-xs-6"><a href="contact-us"><?php echo $text_contact_left; ?></a></li>
				
					<?php 
					/*if(isset($mobile['footermenus'])){
						foreach($mobile['footermenus'] as $nummber => $menuitem) {*/ ?>
						<!--<li class="col-xs-6"><a href="<?php //echo $menuitem['link'];?>"> <?php //echo $menuitem['name'];?> </a></li>-->
						<?php /*}
					}*/
					?>
					
				</ul>
			</div>
			
			<div align="center" class="social_img">
			<ul>
				<li><a href="https://www.facebook.com/talansafety" target="_blank"> <div class="facebook_img"></div> </a></li>
				<li><a href="https://www.instagram.com/talan_shoes/" target="_blank"> <div class="insta_img"></div> </a></li>
				<li><a href="https://www.youtube.com/channel/UCDtnwGxrf0-VVwvtSkhNeGQ/" target="_blank" rel="nofollow"> <div class="youtube_img"></div></a></li>
			</ul>	
			</div>
			<?php endif;?>
			
			<div class="footernav-bottom">
				<div class="text-center">
					<?php if ( !empty($mobile['imgpayment'] )) : ?>
						<p class="nomargin"><img alt="Footer Image" class="form-group" src="<?php echo 'image/'.$mobile['imgpayment'];?>"></p>
					<?php endif;?>
					
					<?php 
					$datetime = new DateTime();
					$cur_year	= $datetime->format('Y');
					$copyright = $mobile['copyright'];
					echo (!isset($copyright) || !is_string($copyright) ? $powered : str_replace('{year}', $cur_year,html_entity_decode($copyright, ENT_QUOTES, 'UTF-8')));
					?>
					
				</div>
			</div>
		</div>
		
	</div>
	<!-- End Main Content -->
	
	</div>
	<!-- End Main wrapper -->
	
    <?php 
		//Render Panel Left
		include(DIR_TEMPLATE.'so-mobile/template/soconfig/panel_left.tpl');
	?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>
