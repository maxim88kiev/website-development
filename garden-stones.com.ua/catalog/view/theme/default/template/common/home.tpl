<?php echo $header; ?>
<div class="container container_block">
  <div class="">
    <div id="slider_block" class="row">
        <div class="slider_block_element">
          <img class="scale-with-grid" src="image/alubord-min11-min.jpg" alt="1" width="100%" height="100%">
          <h1 class="slider_block_element_text">
            <?php echo $text_home_slider_1; ?>
          </h1>
        </div>
        <div class="slider_block_element">
          <img class="scale-with-grid" src="image/alubord-min22-min.jpg" alt="1" width="100%" height="100%">
          <div class="slider_block_element_text">
            <?php echo $text_home_slider_2; ?>
          </div>
        </div>
        <div class="slider_block_element">
          <img class="scale-with-grid" src="image/alubord-min33.jpg" alt="1" width="100%" height="100%">
          <div class="slider_block_element_text">
            <?php echo $text_home_slider_3; ?>
          </div>
        </div>
    </div>


    <div class="cat_block">
      <a href="/pebble">
        <div class="cat_block_element">
          <img class="scale-with-grid" src="image/catalog/category/cat_01.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt">
            <?php echo $category_1; ?>
          </div>
        </div>
      </a>
      <a href="/mramornaya-kroshka">
        <div class="cat_block_element">
          <img class="scale-with-grid" src="image/catalog/category/cat_02.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_2; ?></div>
        </div>
      </a>
      <a href="/dekorativnyie-kamni">
        <div class="cat_block_element">
          <img class="scale-with-grid" src="image/catalog/category/cat_03.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_3; ?></div>
        </div>
      </a>
      <a href="/dekorativnoe-steklo">
        <div class="cat_block_element">
          <img class="scale-with-grid" src="image/catalog/category/cat_04.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_4; ?></div>
        </div>
      </a>
      <a href="/fontany">
        <div class="cat_block_element end">
          <img class="scale-with-grid" src="image/catalog/category/cat_05.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_5; ?></div>
        </div>
      </a>
      <a href="/bordyur-sadoviy">
        <div class="cat_block_element end">
          <img class="scale-with-grid" src="image/catalog/category/cat_07.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_7; ?></div>
        </div>
      </a>
      <a href="/gravelfix">
        <div class="cat_block_element end">
          <img class="scale-with-grid" src="image/catalog/category/cat_06.png" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_6; ?></div>
        </div>
      </a>
      <a href="/stones_aquariums">
        <div class="cat_block_element end">
          <img class="scale-with-grid" src="image/catalog/category/cat_08.png" style="border-radius: 50%;" alt="1" width="263" height="263">
          <div class="cat_block_element_txt"><?php echo $category_8; ?></div>
        </div>
      </a>
    </div>


    <?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?><?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>