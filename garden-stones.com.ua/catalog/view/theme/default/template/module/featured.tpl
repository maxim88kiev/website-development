<h3 class="popular_block_title"><?php echo $heading_title; ?></h3>
<div class="news_block_title_line1"></div>
<div class="news_block_title_line2"></div>
<div class="news_block_title_line3"></div>
<div class="popular_block">
<?php foreach ($products as $product) { ?>
<div class="popular_block_product">
  <a class="popular_block_product_img" href="<?php echo $product['href']; ?>">
    <img src="/image/<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
  </a>
  <h4 class="popular_block_product_title"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
  <?php if ($product['price']) { ?>
  <p class="popular_block_product_price">
    <?php if (!$product['special']) { 
	echo $product['price'];
	} else { ?>
    <span class="popular_block_product_price-old"><?php echo $product['price']; ?></span>
    <span class="popular_block_product_price-new"><?php echo $product['special']; ?></span>
    <?php } ?>
  </p>
  <?php } ?>

  <!--<button class="popular_block_product_but" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');">
    <?php echo $button_cart; ?>
  </button>-->
  <a class="product_but_href" href="<?php echo $product['href']; ?>">
    <button class="popular_block_product_but" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>');">
      <?php echo $button_cart; ?>
    </button>
  </a>
</div>
<?php } ?>
</div>



<!--
<div class="row">
  <?php foreach ($products as $product) { ?>
  <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="product-thumb transition">
      <div class="image">
        <a href="<?php echo $product['href']; ?>">
          <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
        </a>
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
-->