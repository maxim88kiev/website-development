<h2><?php echo $text_instruction; ?></h2>
<div class="well well-sm">
  <p><?php echo $description; ?></p>
</div>
<div class="buttons">
  <div class="pull-right">
    <a href="<?php echo $print; ?>" class="btn btn-danger" target="_blank"><?php echo $button_print; ?></a>
	<a id="button-confirm" class="btn btn-primary"><?php echo $button_confirm; ?></a>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-confirm').on('click', function() {
	$.ajax({ 
		type: 'get',
		url: 'index.php?route=extension/payment/schet/confirm',
		cache: false,
		beforeSend: function() {
			$('#button-confirm').button('loading');
		},
		complete: function() {
			$('#button-confirm').button('reset');
		},		
		success: function() {
			location = '<?php echo $continue; ?>';
		}		
	});
});
//--></script> 
