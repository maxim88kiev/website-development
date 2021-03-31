<div id="orderexcel">
	<button class="btn btn-success" id="orderexcel-excel" data-loading-text="<?php echo $button_loading; ?>">
		<span class="glyphicon glyphicon-file"></span> <?php echo $text_donwload_excel; ?>
	</button>
	<script>
		$(document).delegate('#orderexcel-excel', 'click', function(){
			$.ajax({
				url: 'index.php?route=extension/module/orderexcel/get',
				dataType: 'json',
				data: <?php echo $order_data; ?>,
				beforeSend: function(){
					$('#orderexcel-excel').button('loading');
				},
				success: function(json) {
					if (json['error']) {
						console.log(json['error']);
					} else {
						window.open(json.route);
					}
				},
				complete: function(json) {
					$('#orderexcel-excel').button('reset');
				},
				error: function(xhr, ajaxOptions, thrownError) {
					console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});	
		}); 
	</script>
</div>

