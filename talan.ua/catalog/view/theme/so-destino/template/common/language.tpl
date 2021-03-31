<?php if (count($languages) > 1) { ?>
<div class="btn-group languages-block">
<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-language">
  <div class="btn-group">
    <button class="btn btn-link dropdown-toggle lang-btn" data-toggle="dropdown">
    <?php foreach ($languages as $language) { ?>
    <?php if ($language['code'] == $code) { ?>
	<span class="hidden-xs lang-txt">
		<img src="/image/catalog/talan_img/img_planet.svg" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>" height="16">
		<?php echo $language['name']; ?></span>
    <?php } ?>
    <?php } ?>
    <i class="fa fa-caret-down"></i></button>
    <ul class="dropdown-menu dropdown-lang">
      <?php foreach ($languages as $language) { ?>
	  <button class="btn btn-link btn-block language-select" type="button" name="<?php echo $language['code']; ?>"><?php echo $language['name']; ?></button>
      <?php } ?>
    </ul>
  </div>
  <input type="hidden" name="code" value="" />
  <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
</form>
</div>
<?php } ?>
