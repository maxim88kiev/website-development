<?php echo $header; ?>

<div class="breadcrumbs">
  <div class="container">
      <div class="current-name">
        <?php
        $last = count($breadcrumbs);
        $i = 0;
         foreach ($breadcrumbs as $breadcrumb => $crumbInfo) : 
          $i++;
        ?>
          <?php if ($i==$last) : ?>
            <?php echo $crumbInfo['text']; ?>
          <?php  endif;  ?>
        <?php endforeach; ?>
      </div>
      <? require('catalog/view/theme/so-destino/template/common/breadcrumb.tpl'); ?>
    </div>
</div>










<div class="con-bg">
	<div class="container content-main">
	  <div class="<?php echo ($column_left || $column_right ? 'row' : ''); ?>">
		  <?php echo $column_left; ?>
		<?php if ($column_left && $column_right) { ?>
		<?php $class = 'col-sm-6'; ?>
		<?php } elseif ($column_left || $column_right) { ?>
		<?php $class = 'col-sm-9'; ?>
		<?php } else { ?>
		<?php $class = ''; ?>
		<?php } ?>
		<div id="content" class="<?php echo $class; ?>">
			<h1 style="display: none;"><?= $heading_title; ?></h1>
			<!-- в link можно передавать ссылки на картинки и т.п., которые не увидит пользователь -->
			<!--<link itemprop="image" href="https://www.laserhouse.com.ua/images/laser.jpg">-->
			<!-- указываем дату публикации -->
			<!--<meta itemprop="datePublished" content="2019-06-18">-->
			<!-- в meta можно передавать скрытое текстовое значение, которое не будет отображаться пользователю -->
			<!-- указываем дату обновления материала -->
			<!--<meta itemprop="dateModified" content="2019-07-15">-->
			<div class="<?php echo ($column_left || $column_right ? '' : 'container'); ?>">
				
				<?php echo $content_top; ?>
				<div><?php echo $description; ?></div>

			</div>
			<?php echo $content_bottom; ?>
		</div>
		<?php echo $column_right; ?>
	  </div>
	</div>
</div>
<?php echo $footer; ?>
