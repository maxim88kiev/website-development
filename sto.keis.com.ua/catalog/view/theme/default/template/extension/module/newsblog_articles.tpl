<?php //if ($heading_title) { ?>
<div class="news_block">
    <div class="news_block_content">
    <h3 class="news_txt_h3">Новости<?php //echo $heading_title; ?></h3>
    <?php //} ?>
    <?php if ($html) { ?>
    <?php echo $html; ?>
    <?php } ?>
    <div class="row news_block_cont">
      <?php foreach ($articles as $article) { ?>
      <div class="product-layout news_block_layout col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="transition">
          <?php if ($article['thumb']) { ?>
          <div class="image news_block_image">
              <a href="<?php echo $article['href']; ?>">
                  <img src="<?php echo $article['thumb']; ?>" alt="<?php echo $article['name']; ?>" title="<?php echo $article['name']; ?>" class="img-responsive img_respons" />
              </a>
              <h4><a class="news_txt_h1" href="<?php echo $article['href']; ?>"><?php echo $article['name']; ?></a></h4>
          </div>
          <?php } ?>
          <div class="caption news_txt_top">
              <span><?php echo $article['preview']; ?></span>
          </div>
          <!--<div class="button-group">
            <button onclick="location.href = ('<?php echo $article['href']; ?>');" data-toggle="tooltip" title="<?php echo $text_more; ?>"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo $text_more; ?></span></button>
            <?php if ($article['date']) { ?><button type="button" data-toggle="tooltip" title="<?php echo $article['date']; ?>"><i class="fa fa-clock-o"></i></button><?php } ?>
            <button type="button" data-toggle="tooltip" title="<?php echo $article['viewed']; ?>"><i class="fa fa-eye"></i></button>
          </div>-->
        </div>
      </div>
      <?php } ?>
    </div>
    </div>
</div>
<?php if ($link_to_category) { ?>
<!--<a href="<?php echo $link_to_category; ?>"><?php echo $text_more; ?> <?php echo $heading_title; ?></a>-->
<?php } ?>