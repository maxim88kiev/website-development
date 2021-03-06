<div class="products-list list_block row nopadding-xs <?php echo $listingType ?>">
	<?php foreach ($products as $idproduct =>$product) {?>
	<?php 
	if($listingType =='grid'){?>
	<div class="product-layout col-xs-6">
		<div class="product-item-container">
			<div class="left-block">
				<div class="product-image-container ">
					<a href="<?php echo $product['href']; ?>" title="<?php echo $product['name']; ?>">
						<img  src="<?php echo $product['thumb']; ?>"  title="<?php echo $product['name']; ?>" class="img-responsive" />
					</a>
				</div>
				
			</div>
			<div class="box-label">
				<!--Sale Label-->
				<?php if ( $product['special']) : ?>
					<span class="label-product label-sale">
						<?php   echo $product['discount']; ?> 
					</span>
				<?php endif; ?>
				
			</div>  
			
			<div class="right-block">
				<div class="caption">
					<h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>		
					<?php if (isset($rating_status) && $rating_status!= 0) : ?>
					<div class="ratings">
						<div class="rating-box">
						<?php for ($i = 1; $i <= 5; $i++) { ?>
						<?php if ($product['rating'] < $i) { ?>
						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						<?php } else { ?>
						<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						<?php } ?>
						<?php } ?>
						</div>
					</div>
					<?php endif; ?>
					
					<?php if ($product['price']) { ?>
					<div class="price">
						<?php if (!$product['special']) { ?>
							<span class="price-new"><?php echo $product['price']; ?></span>
						<?php } else { ?>
							<span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
					<?php } ?>
					</div>
					<?php } ?>
					
					<div class="description <?php if (!isset($lstdescription_status) || $lstdescription_status != 1) : ?> hidden <?php endif; ?>">
						<p><?php echo $product['description']; ?></p>
					</div>
					

				
						<!-- XD stickers start -->
						<?php if (!empty($product['product_xd_stickers'])) { ?>
						<div class="xd_stickers_wrapper">
							<?php foreach($product['product_xd_stickers'] as $xd_sticker) { ?>
								<div class="xd_stickers <?php echo $xd_sticker['id']; ?>">
									<?php echo $xd_sticker['text']; ?>
								</div>
							<?php } ?>
						</div>
						<?php } ?>
						<!-- XD stickers end -->
					
				
					<div class="button-group">
					<?php if($mobile['addcart_status']):?>
					<button class="addToCart font-sn add_btn_list" type="button"  title="<?php echo $button_cart; ?>" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');"> <!--<i class="fa fa-shopping-cart"></i>--><span><span><?php echo $button_cart; ?></span></button>
					<?php endif;?>
			  </div>
				</div>
				
			</div>
		</div>
	</div>
	<?php //Clearfix fluid grid layout
		$id = $idproduct+1;
		if(($id  % 2) == 0) {$id = 1; echo '<div class="clearfix visible-xs-block"></div>';}
	?>
	
	<?php }else {?>
	
	<div class="product-list product-layout col-xs-12">
		<div class="product-item-container clearfix">
			<div class="left-block">
				<div class="product-image-container ">
					<img  src="<?php echo $product['thumb']; ?>"  title="<?php echo $product['name']; ?>" class="img-responsive" />
					
					<div class="box-label">
						<!--Sale Label-->
						<?php if ($product['special']) : ?>
							<span class="label-product label-sale">
								<?php echo $product['discount']; ?>    
							</span>
						<?php endif; ?>
					</div>  
				</div>
				
				
			</div>
			<!-- end left block -->
			
			<div class="right-block right_list_elem">
				<!-- NAME -->
				<div class="caption">
					<h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>		
					<!-- RATING -->
					<!--<div class="ratings">
						<div class="rating-box">
						<?php //for ($i = 1; $i <= 5; $i++) { ?>
						<?php //if ($product['rating'] < $i) { ?>
						<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
						<?php //} else { ?>
						<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
						<?php //} ?>
						<?php //} ?>
						</div>
					</div>-->
					<!-- PRICE -->
					<?php if ($product['price']) { ?>
					<div class="price">
						  <?php if (!$product['special']) { ?>
						  <span class="price-new price-new_el"><?php echo $product['price']; ?></span>
						  <?php } else { ?>
						  <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
						  <?php } ?>
						  
					</div>
					<?php } ?>
				
					<!-- DESCRIP -->
					<div class="description ">
						<p class="desc_product">
						<?php 
							$limit = 65;
							$product_description_short = (strlen($product['description']) > $limit ? utf8_substr($product['description'], 0, $limit) . '...' : $product['description']);
							echo $product_description_short;
						?>
						</p>
					</div>
					
				</div>
				

				
						<!-- XD stickers start -->
						<?php if (!empty($product['product_xd_stickers'])) { ?>
						<div class="xd_stickers_wrapper">
							<?php foreach($product['product_xd_stickers'] as $xd_sticker) { ?>
								<div class="xd_stickers <?php echo $xd_sticker['id']; ?>">
									<?php echo $xd_sticker['text']; ?>
								</div>
							<?php } ?>
						</div>
						<?php } ?>
						<!-- XD stickers end -->
					
				
			  <div class="button-group">
				<?php if($mobile['addcart_status']):?>
				<button class="addToCart font-sn add_btn_list" type="button"  title="<?php echo $button_cart; ?>" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');"> <!--<i class="fa fa-shopping-cart"></i>--><span><span><?php echo $button_cart; ?></span></button>
				<?php endif;?>
				
				<?php if($mobile['wishlist_status']):?>
				<button class="wishlist btn-button" type="button"  title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-heart-o"></i></button>
				<?php endif;?>
				
				<?php if($mobile['compare_status']):?>
				<button class="compare btn-button" type="button"  title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-retweet"></i></button>
				<?php endif;?>
			  </div>
		   
			</div><!-- right block -->

		</div>
	</div>
	<?php }?>
	
<?php } ?>
</div>

<style>

.list_block{
	margin-top: 20px !important;
}

.price-new_el {
    color: #f0ad73 !important;
}

.products-list.list .product-layout .product-item-container {
    display: table;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.desc_product {
    font-size: 14px;
    font-weight: initial;
    color: #000;
}

.right_list_elem{
	padding-top: 30px;
}

</style>
