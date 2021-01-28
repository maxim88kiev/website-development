<div class="news_block">
  <div class="news_block_title"><?php echo $heading_title; ?></div>
    <div class="news_block_title_line1"></div>
    <div class="news_block_title_line2"></div>
    <div class="news_block_title_line3"></div>
  <div class="news_block_body">
  <?php
  foreach ($all_news as $news) { ?>
	<div class="news_block_one">
        <a class="news_block_one_view" href="<?php echo $news['view']; ?>">
            <img class="news_block_one_img" src="/image/<?php echo $news['image']; ?>" alt="<?php echo $news['title']; ?>">
        </a>
          <a class="news_block_one_a" href="<?php echo $news['view']; ?>"><?php echo $news['title']; ?></a>
          <p class="news_block_one_span"><?php echo $news['date_added']; ?></p>
          <p class="news_block_one_desc"><?php echo $news['description']; ?></p>
        <a class="news_block_one_but" href="<?php echo $news['view']; ?>">
            <div class="news_block_one_button">подробнее<span>&#187;</span></div>
        </a>
	</div>
  <?php  } ?>
  </div>
</div>