<!DOCTYPE html>
<html dir="<?php echo $direction; ?>" lang="<?php echo $lang; ?>">
<head>
<meta charset="UTF-8" />
<title><?php echo $title; ?></title>
<base href="<?php echo $base; ?>" />
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<style>
.schet-box{font-family:'Arial',sans-serif;}
.info-schet{margin-top:5px;font-size:8px;}
.table-example td{font-size:10px;border:1px solid #222 !important;padding:4px !important;}
.table-products{font-size:10px;border:2px solid #222;margin-bottom:5px !important;}
.table-products td{border:1px solid #222 !important;padding:4px !important;}
.info-blank{margin-top:5px;font-size:8px;}
.info-blanks{margin-top:15px;font-size:8px;}
.table-schet-data{border-top:2px solid #222;font-size:10px;}
.table-schet-data td{padding:4px 0 0 0 !important;border:0 !important;}
.buyer td{padding-top:15px !important;}
.table-schet-total td{padding:4px 0 0 0 !important;border:0 !important;font-size:10px;}
.text-items{font-size:11px;}
.text-totals{font-size:11px;border-bottom:2px solid #222;padding-bottom:30px;margin-bottom:40px;}
.text-director{margin:10px 0;font-size:11px;}
.text-director span{margin:0 10px;text-decoration:underline;}
</style>
<script type="text/javascript"><!--
function print1()
{if (confirm ('<?php echo $text_confirm; ?>'))
 window.print()
 else
 history.go(-1)
}
//--></script>
</head>
<body>
<div class="container schet-box">
  <div class="row">
    <div class="alert alert-info info-schet"><?php echo $text_info_schet; ?></div>

	<h3 class="text-center"><?php echo $text_schet_title; ?></h3>
	<table class="table table-schet-data">
	  <tr>
	    <td class="text-left" width="20%"><b><?php echo $text_supplier; ?></b></td>
		<td class="text-left" width="80%"><?php echo $schet_supplier; ?></td>
	  </tr>
	  <tr>
	    <td class="text-left" width="20%"></td>
		<td class="text-left" width="80%"><?php echo 'ЄДРПОУ 32304111, тел. 0442894252, 0442897594'; ?></td>
	  </tr>
	  <tr>
	    <td class="text-left" width="20%"></td>
		<td class="text-left" width="80%"><?php echo 'ЕВАN 713052990000026003046211079'; ?></td>
	  </tr>
	  <tr>
	    <td class="text-left" width="20%"></td>
		<td class="text-left" width="80%"><?php echo 'ІПН 323041126505, номер свідоцтва 100003234'; ?></td>
	  </tr>
	  <tr>
	    <td class="text-left" width="20%"></td>
		<td class="text-left" width="80%"><?php echo 'Є платником податку на прибуток на загальних підставах.'; ?></td>
	  </tr>
	  <tr>
	    <td class="text-left" width="20%"></td>
		<td class="text-left" width="80%"><?php echo 'Адреса 01033, м.Київ, вул.Саксаганського, буд.77'; ?></td>
	  </tr>
	  
	  <tr class="buyer">
	    <td class="text-left" width="20%"><b><?php echo $text_buyer; ?></b></td>
		<td class="text-left" width="80%"><?php echo $buyer; ?></td>
	  </tr>
	  <tr>
	    <td class="text-left" width="20%"><b><?php echo 'Умова продажу'; ?></b></td>
		<td class="text-left" width="80%"><?php echo 'Безготівковий розрахунок'; ?></td>
	  </tr>
	</table>
	<table class="table table-bordered table-products">
	  <thead>
		<tr>
		  <td class="text-center" width="1%">№</td>
		  <td class="text-left" width="59%"><?php echo $column_name; ?></td>
		  <td class="text-right" width="5%"><nobr><?php echo $column_quantities; ?></nobr></td>
		  <td class="text-center" width="5%"><?php echo $column_class; ?></td>
		  <td class="text-right" width="15%"><?php echo $column_price; ?></td>
		  <td class="text-right" width="15%"><?php echo $column_total; ?></td>
		</tr>
	  </thead>
	  <tbody>
		<?php $product_row = 1; ?>
		<?php foreach ($products as $product) { ?>
		  <tr>
			<td class="text-center"><?php echo $product_row; ?></td>
			<td class="text-left"><?php echo $product['name']; ?>
			  <?php foreach ($product['option'] as $option) { ?>
			  <br />
			  &nbsp;<small> - <?php echo $option['name']; ?>: <?php echo $option['value']; ?></small>
			  <?php } ?>
			</td>
			<td class="text-right"><?php echo $product['quantity']; ?></td>
			<td class="text-center"><?php echo $text_class; ?></td>
			<td class="text-right"><nobr><?php echo $product['price']; ?></nobr></td>
			<td class="text-right"><nobr><?php echo $product['total']; ?></nobr></td>
		  </tr>
		  <?php $product_row++; ?>
		<?php } ?>
		<?php foreach ($vouchers as $voucher) { ?>
		  <tr>
			<td class="text-left"></td>
			<td class="text-left"><?php echo $voucher['description']; ?></td>
			<td class="text-left"></td>
			<td class="text-right">1</td>
			<td class="text-right"><nobr><?php echo $voucher['amount']; ?></nobr></td>
			<td class="text-right"><nobr><?php echo $voucher['amount']; ?></nobr></td>
		  </tr>
		<?php } ?>
	  </tbody>
	</table>
	<table class="table table-schet-total">
	  <?php foreach ($totals as $total) { ?>
		<tr>
		  <td class="text-right" width="85%"><?php echo $total['title']; ?>:</td>
		  <td class="text-right" width="15%"><nobr><strong><?php echo $total['text']; ?></strong></nobr></td>
		</tr>
	  <?php } ?>
	</table>
	<div class="text-left text-items"><?php echo $items; ?></div>
	<div class="text-left text-items"><strong><?php echo $amount; ?></strong></div>
<!--	
<div class="pull-left text-director"><?php echo $text_director; ?><?php if ($schet_image_signature) { ?><span><img src="<?php echo $schet_image_signature; ?>" /></span><?php } ?><span><?php echo $schet_director; ?></span></div>
//-->
	<?php if ($schet_image_stamp) { ?>
	  <div class="pull-left" style="margin-top:-40px; margin-left:40px;"><img src="<?php echo $schet_image_stamp; ?>" /></div>
	<?php } ?>
<!--<?php if ($schet_accountant) { ?> -->
	  <div class="pull-right text-director"><?php echo $text_accountant; ?><?php if ($schet_image_signature_accountant) { ?><span><img src="<?php echo $schet_image_signature_accountant; ?>" /></span><?php } ?><span><?php echo $schet_accountant; ?></span></div>
<!--<?php } ?>-->
  </div>
</div>
<script type="text/javascript"><!--
print1()
//--></script>
</body>
</html>
