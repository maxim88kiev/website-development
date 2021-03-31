
<footer class="footer-container typefooter-<?php echo isset($typefooter) ? $typefooter : '1'?>">
	
	<!-- FOOTER TOP -->
	<div class="footer-top">
		<div class="container content">
			
			<!-- BOX ABOUT -->
			<div class="box-footer1 contact-us">
				<?php echo $footer_block3; ?>
			</div>

			<!-- BOX ACCOUNT -->
			<div class="box-account box-footer">
				<div class="module clearfix">
					<div class="modtitle h3"><?php echo $text_account; ?></div>
					<div class="modcontent" >
						<ul class="menu">
							<!-- <li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li> -->
							<li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>  
							<li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
							<!--<li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>  -->
						</ul>
					</div>
				</div>
			</div>
			<!-- BOX INFORMATION -->
			<?php if ($informations) : ?>
			<div class="box-information box-footer">
				<div class="module clearfix">
					<div class="modtitle h3"><?php echo $text_information; ?></div>
					<div  class="modcontent" >
						<ul class="menu">
							<?php foreach ($informations as $information) { ?>
							<li><a href="<?php echo $information['href']; ?>"><?php echo $information['title']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<!-- BOX SERVICE -->
			<div class="box-service box-footer">
				<div  class="modcontent" >
					<div class="modtitle h3"><?php echo $text_service; ?></div>
			        <ul class="menu">
			          <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
			       <!--   <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>  -->
			          <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
			        </ul>
			        <div class="footer-socials">
				    	<a href="https://www.facebook.com/talansafety/" target="_blank"><img src="https://talan.ua/image/catalog/icons/fb.png" width="50"></i></a>
				    	<a href="https://www.youtube.com/channel/UCrnar3YIJi2ekyQ6ppBO2qQ/videos" target="_blank"><img src="https://talan.ua/image/catalog/icons/yout.png" width="50"></i></a>
				    </div>
			    </div>
		    </div>		
	
		</div>
	</div>
	
	<!-- FOOTER CENTER -->
	<?php if ($footer_top1) : ?>
	<div class="footer-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<?php echo $footer_top1; ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<?php echo $footer_block4; ?>
				</div>
			</div>
		</div> 
	</div>
	<?php endif; ?>

	<!-- FOOTER BOTTOM -->
	<div class="footer-bottom ">
		<div class="container">
			<div class="row">
				<?php $col_copyright = ($imgpayment_status) ? 'col-sm-8 copyright' : 'col-sm-12'?>
				<div class="<?php echo $col_copyright;?>">
					<?php 
					$datetime = new DateTime();
					$cur_year	= $datetime->format('Y');
					echo (!isset($copyright) || !is_string($copyright) ? $powered : str_replace('{year}', $cur_year, html_entity_decode($copyright, ENT_QUOTES, 'UTF-8')));?>
				</div>

				<?php if (isset($imgpayment_status) && $imgpayment_status != 0) : ?>
				<div class="col-sm-4 text-right">
					<?php
					if ((isset($imgpayment) && $imgpayment != '') ) { ?>
						<img src="image/<?php echo  $imgpayment ?>"  alt="imgpayment">
					<?php } ?>
				</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</footer>
