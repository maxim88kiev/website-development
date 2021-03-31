
<footer class="footer-container typefooter-<?php echo isset($typefooter) ? $typefooter : '1'?>">
	<?php if ($footer_block6) : ?>
		<div class="before-footer">			
			<?php echo $footer_block6; ?>				
		</div>
	<?php endif; ?>
	<div class="footer-w">
		
		<!-- FOOTER TOP -->
		<?php if ($footer_block5) : ?>
		<div class="footer-top">
			<div class="container">			
				<?php echo $footer_block5; ?>				
			</div> 
		</div>
		<?php endif; ?>
		<!-- FOOTER CENTER -->
		<div class="footer-center">
			<div class="container content">
				
				<!-- BOX ABOUT -->
				<div class="box-footer1 contact-us">
					<?php echo $footer_block3; ?>
				</div>

				<!-- BOX ACCOUNT -->
				<div class="box-account box-footer">
					<div class="module clearfix">
						<h3 class="modtitle"><?php echo $text_account; ?></h3>
						<div class="modcontent" >
							<ul class="menu">
								<li><a href="<?php echo $manufacturer; ?>"><?php echo $text_manufacturer; ?></a></li>
								<li><a href="<?php echo $voucher; ?>"><?php echo $text_voucher; ?></a></li>
								<li><a href="<?php echo $affiliate; ?>"><?php echo $text_affiliate; ?></a></li>
								<li><a href="<?php echo $special; ?>"><?php echo $text_special; ?></a></li>
							</ul>
						</div>
					</div>
				</div>
				
				<!-- BOX SERVICE -->
				<div class="box-service box-footer">
					<h3 class="modtitle"><?php echo $text_service; ?></h3>
					<div  class="modcontent" >
				        <ul class="menu">
				          <li><a href="<?php echo $contact; ?>"><?php echo $text_contact; ?></a></li>
				          <li><a href="<?php echo $return; ?>"><?php echo $text_return; ?></a></li>
				          <li><a href="<?php echo $sitemap; ?>"><?php echo $text_sitemap; ?></a></li>
				        </ul>
				    </div>
			    </div>		
		
			</div>
		</div>
	</div>


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
