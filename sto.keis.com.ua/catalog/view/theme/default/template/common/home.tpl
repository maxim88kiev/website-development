<?php echo $header; ?>
<div class="container block_content">
  <div class="row">

<div class="content_home">
      <?php foreach ($categories as $category) { ?>
      <?php if ($category['children']) { ?>
  <div class="content_home__category">
    <div class="content_home__category_img"><img src="https://sto.keis.com.ua/image/<?php echo $category['image']; ?>"></div>
    <div class="content_home__category_block">
      <div class="category_block_txt">
        <a href="<?php echo $category['href']; ?>" class=""><?php echo $category['name']; ?></a>
      </div>
      <div class="category_block_child">
              <?php foreach (array_chunk($category['children'], ceil(count($category['children']) / $category['column'])) as $children) { ?>
                <?php foreach ($children as $child) { ?>
        <div class="category_block_child_txt">
          <span>&raquo;</span><a href="<?php echo $child['href']; ?>"><?php echo $child['name']; ?></a>
        </div>
                <?php } ?>
              <?php } ?>
      </div>
    </div>
  </div>
      <?php } else { ?>
  <div class="content_home__category">
    <div class="content_home__category_img"><img src="https://sto.keis.com.ua/image/<?php echo $category['image']; ?>"></div>
    <div class="content_home__category_block">
      <div class="category_block_txt">
        <a href="<?php echo $category['href']; ?>" class=""><?php echo $category['name']; ?></a>
      </div>
      <div class="category_block_child">
      </div>
    </div>
  </div>
      <?php } ?>
      <?php } ?>
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