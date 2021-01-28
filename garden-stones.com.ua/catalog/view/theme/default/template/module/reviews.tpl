<?php
/*------------------------------------------------------------------------
# Customer Reviews
# ------------------------------------------------------------------------
# The Krotek
# Copyright (C) 2011-2019 The Krotek. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website: https://thekrotek.com
# Support: support@thekrotek.com
-------------------------------------------------------------------------*/
?>
<link rel="stylesheet" type="text/css" href="catalog/view/theme/<?php echo $template; ?>/stylesheet/<?php echo $extension; ?>.css" />



<h3 class="reviews_block_title"><?php echo $reviews_title; ?></h3>
<div class="news_block_title_line1"></div>
<div class="news_block_title_line2"></div>
<div class="news_block_title_line3"></div>

<div class="reviews_block">

	<?php foreach ($products as $product) { ?>

	<div class="reviews_block_item">

		<div class="reviews_block_item-left">
			<a href="<?php echo $product['href']; ?>">
				<img src="image/<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
			</a>
			<a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
		</div>

		<div class="reviews_block_item-right">
			<div class="item-right-description">
				<?php echo $product['review_text']; ?>
			</div>
			<div class="item-right">
				<div class="item-right-author">
					<?php echo $product['review_author']; ?>
				</div>
				<div class="item-right-date">
					<?php echo $product['review_date']; ?>
				</div>
				<div class="item-right-oll">
					<a href="<?php echo $product['href']; ?>#review_block_title"><?php echo $reviews_oll; ?><span>&#187;</span></a>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

</div>

<!--<h3 class="reviews_block_title_oll"><?php echo $reviews_title_oll; ?><span class="block_title_oll"></span></h3>-->


<!--<div class="row">
	<?php foreach ($products as $product) { ?>
		<div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="product-thumb transition">
				<div class="image">
					<a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a>
				</div>
				<div class="caption">
					<h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
					<p><?php echo $product['description']; ?></p>
					<?php if ($product['rating']) { ?>
						<div class="rating">
							<?php for ($i = 1; $i <= 5; $i++) { ?>
								<?php if ($product['rating'] < $i) { ?>
									<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
								<?php } else { ?>
									<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								<?php } ?>
							<?php } ?>
						</div>
					<?php } ?>
					<?php if ($product['price']) { ?>
						<p class="price">
							<?php if (!$product['special']) { ?>
								<?php echo $product['price']; ?>
							<?php } else { ?>
								<span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
							<?php } ?>
							<?php if ($product['tax']) { ?>
								<span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
							<?php } ?>
						</p>
					<?php } ?>
					<div class="review">
						<div class="review-text"><?php echo $product['review_text']; ?></div>
						<div class="review-meta">
							<span class="review-author"><?php echo $product['review_author']; ?></span>, <span class="review-date"><?php echo $product['review_date']; ?></span>
						</div>
					</div>
				</div>
				<div class="button-group">
					<button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span></button>
					<button type="button" data-toggle="tooltip" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-heart"></i></button>
					<button type="button" data-toggle="tooltip" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-exchange"></i></button>
				</div>
			</div>
		</div>
	<?php } ?>
</div>-->