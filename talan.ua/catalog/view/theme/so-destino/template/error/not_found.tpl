<?php echo $header; ?>
<div class="container">
    <? require('catalog/view/theme/so-destino/template/common/breadcrumb.tpl'); ?>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="bg-page-404 <?php echo $class; ?>">
	
	<h3 class="tehno_title">....!?</h3>
	
	
		<?php echo $content_top; ?>
		
			<div class="about_block">

				<h2><?php echo $heading_title; ?></h2>
				<p><?php echo $text_error; ?></p>
				<a href="<?php echo $continue; ?>" class="btn btn-primary" title="<?php echo $button_continue; ?>"><?php echo $button_continue; ?></a>
			</div>
		
		<?php echo $content_bottom; ?> 
		
		</div>
    <?php echo $column_right; ?></div>
</div>
<?php echo $footer; ?>


<style>

.breadcrumb{
	text-align: center;
}

.tehno_title {
    font-size: 28px;
    color: #fff;
    font-family: "Roboto", sans-serif;
    text-align: center !important;
    padding-bottom: 0px;
    background-color: #538c75;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    max-width: 679px;
    margin: auto;
        margin-top: auto;
    margin-top: 30px;
    line-height: 41px;
}

.about_block {
    border: 1px solid #B7BDD0;
    box-sizing: border-box;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 7px;
    padding: 39px 37px 39px;
    background-color: #fff;
    margin-bottom: 50px;
    color: #000;
    font-family: "Roboto", sans-serif;
    border-top: 10px solid #538c75;
}




</style>