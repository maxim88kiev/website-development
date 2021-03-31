<div class="bestseller">
	<div class="bestseller-inner">
		<h3><?php echo $heading_title; ?></h3>
		<div class="rows">
		  <?php foreach ($products as $product) { ?>
		  <div class="product-layout">
		    <div class="product-thumb transition">
		      
					<div class="image">
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
						<a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
					</div>
				
		      <div class="caption">
		      	<div class="rating">
		          <?php for ($i = 1; $i <= 5; $i++) { ?>
		          <?php if ($product['rating'] < $i) { ?>
		          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
		          <?php } else { ?>
		          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
		          <?php } ?>
		          <?php } ?>
		        </div>
		        <div class="h4"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></div>
		        <p class="hidden"><?php echo $product['description']; ?></p>
		        <?php if ($product['price']) { ?>
		        <p class="price">
		          <?php if (!$product['special']) { ?>
		          <?php echo ((int)$product['price'] == 0) ? $text_no_price : $product['price']; ?>
		          <?php } else { ?>
		          <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
		          <?php } ?>
		          <?php if ($product['tax']) { ?>
		          <span class="price-tax hidden"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
		          <?php } ?>
		        </p>
		        <?php } ?>
		      </div>
		      <div class="button-group">
		        <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span></button>
		        <button type="button" data-toggle="tooltip" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-heart"></i></button>
		        <button type="button" data-toggle="tooltip" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-exchange"></i></button>
		      </div>
		    </div>
		  </div>
		  <?php } ?>
		</div>
	</div>
</div>
	
