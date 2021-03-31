<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-schet" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
	<?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-schet" class="form-horizontal">
          <ul class="nav nav-tabs" id="language">
            <?php foreach ($languages as $language) { ?>
              <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
            <?php } ?>
          </ul>
		  <div class="tab-content">		  
		    <?php foreach ($languages as $language) { ?>
			  <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
			    <div class="form-group required">
                  <label class="col-sm-3 control-label" for="input-supplier<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_supplier; ?>"><?php echo $entry_supplier; ?></span></label>
                  <div class="col-sm-9">
				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-truck fa-fw"></i></span>
                      <input name="schet_supplier<?php echo $language['language_id']; ?>" type="text" size="20" placeholder="<?php echo $entry_supplier; ?>" value="<?php echo isset(${'schet_supplier' . $language['language_id']}) ? ${'schet_supplier' . $language['language_id']} : ''; ?>" id="input-supplier<?php echo $language['language_id']; ?>" class="form-control" />
				    </div>
					<?php if (${'error_supplier' . $language['language_id']}) { ?>
				      <div class="text-danger"><?php echo ${'error_supplier' . $language['language_id']}; ?></div>
				    <?php } ?>
				  </div>
                </div>
				<div class="form-group required">
                  <label class="col-sm-3 control-label" for="input-director<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_director; ?>"><?php echo $entry_director; ?></span></label>
                  <div class="col-sm-9">
				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                      <input name="schet_director<?php echo $language['language_id']; ?>" type="text" size="20" placeholder="<?php echo $entry_director; ?>" value="<?php echo isset(${'schet_director' . $language['language_id']}) ? ${'schet_director' . $language['language_id']} : ''; ?>" id="input-director<?php echo $language['language_id']; ?>" class="form-control" />
				    </div>
					<?php if (${'error_director' . $language['language_id']}) { ?>
				      <div class="text-danger"><?php echo ${'error_director' . $language['language_id']}; ?></div>
				    <?php } ?>
				  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-3 control-label" for="input-accountant<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_accountant; ?>"><?php echo $entry_accountant; ?></span></label>
                  <div class="col-sm-9">
				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                      <input name="schet_accountant<?php echo $language['language_id']; ?>" type="text" size="20" placeholder="<?php echo $entry_accountant; ?>" value="<?php echo isset(${'schet_accountant' . $language['language_id']}) ? ${'schet_accountant' . $language['language_id']} : ''; ?>" id="input-accountant<?php echo $language['language_id']; ?>" class="form-control" />
				    </div>
				  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-3 control-label" for="input-legal-address<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_legal_address; ?>"><?php echo $entry_legal_address; ?></span></label>
                  <div class="col-sm-9">
				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                      <input name="schet_legal_address<?php echo $language['language_id']; ?>" type="text" size="20" placeholder="<?php echo $entry_legal_address; ?>" value="<?php echo isset(${'schet_legal_address' . $language['language_id']}) ? ${'schet_legal_address' . $language['language_id']} : ''; ?>" id="input-legal-address<?php echo $language['language_id']; ?>" class="form-control" />
				    </div>
				  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-3 control-label" for="input-actual-address<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_actual_address; ?>"><?php echo $entry_actual_address; ?></span></label>
                  <div class="col-sm-9">
				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-home fa-fw"></i></span>
                      <input name="schet_actual_address<?php echo $language['language_id']; ?>" type="text" size="20" placeholder="<?php echo $entry_actual_address; ?>" value="<?php echo isset(${'schet_actual_address' . $language['language_id']}) ? ${'schet_actual_address' . $language['language_id']} : ''; ?>" id="input-actual-address<?php echo $language['language_id']; ?>" class="form-control" />
				    </div>
				  </div>
                </div>
				<div class="form-group required">
                  <label class="col-sm-3 control-label" for="input-bank-supplier<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_bank_supplier; ?>"><?php echo $entry_bank_supplier; ?></span></label>
                  <div class="col-sm-9">
				    <div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-bank fa-fw"></i></span>
                      <input name="schet_bank_supplier<?php echo $language['language_id']; ?>" type="text" size="20" placeholder="<?php echo $entry_bank_supplier; ?>" value="<?php echo isset(${'schet_bank_supplier' . $language['language_id']}) ? ${'schet_bank_supplier' . $language['language_id']} : ''; ?>" id="input-bank-supplier<?php echo $language['language_id']; ?>" class="form-control" />
				    </div>
					<?php if (${'error_bank_supplier' . $language['language_id']}) { ?>
				      <div class="text-danger"><?php echo ${'error_bank_supplier' . $language['language_id']}; ?></div>
				    <?php } ?>
				  </div>
                </div>
				<div class="form-group">
				  <label class="col-sm-3 control-label" for="input-description<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_description; ?>"><?php echo $entry_description; ?></span></label>
				  <div class="col-sm-9">
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
					  <textarea name="schet_description<?php echo $language['language_id']; ?>" cols="80" rows="5" placeholder="<?php echo $entry_description; ?>" id="input-description<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset(${'schet_description' . $language['language_id']}) ? ${'schet_description' . $language['language_id']} : ''; ?></textarea>
				    </div>
				  </div>
			    </div>
				<div class="form-group">
				  <label class="col-sm-3 control-label" for="input-instruction<?php echo $language['language_id']; ?>"><span data-toggle="tooltip" title="<?php echo $help_instruction; ?>"><?php echo $entry_instruction; ?></span></label>
				  <div class="col-sm-9">
					<div class="input-group">
					  <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
					  <textarea name="schet_instruction<?php echo $language['language_id']; ?>" cols="80" rows="5" placeholder="<?php echo $entry_instruction; ?>" id="input-instruction<?php echo $language['language_id']; ?>" class="form-control"><?php echo isset(${'schet_instruction' . $language['language_id']}) ? ${'schet_instruction' . $language['language_id']} : ''; ?></textarea>
				    </div>
				  </div>
			    </div>
			  </div>
            <?php } ?>
		  </div>
		  <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-inn"><?php echo $entry_inn; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-newspaper-o fa-fw"></i></span>
			    <input type="text" name="schet_inn" value="<?php echo $schet_inn; ?>" placeholder="<?php echo $entry_inn; ?>" id="input-inn" class="form-control" />
			  </div>
			  <?php if ($error_inn) { ?>
                <div class="text-danger"><?php echo $error_inn; ?></div>
              <?php } ?>
			</div>
          </div>
		  <div class="form-group">
            <label class="col-sm-3 control-label" for="input-kpp"><?php echo $entry_kpp; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-file-text-o fa-fw"></i></span>
			    <input type="text" name="schet_kpp" value="<?php echo $schet_kpp; ?>" placeholder="<?php echo $entry_kpp; ?>" id="input-kpp" class="form-control" />
			  </div>
			</div>
          </div>
		  <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-account"><?php echo $entry_account; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-credit-card fa-fw"></i></span>
			    <input type="text" name="schet_account" value="<?php echo $schet_account; ?>" placeholder="<?php echo $entry_account; ?>" id="input-account" class="form-control" />
			  </div>
			  <?php if ($error_account) { ?>
                <div class="text-danger"><?php echo $error_account; ?></div>
              <?php } ?>
			</div>
          </div>
		  <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-bik"><?php echo $entry_bik; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-qrcode fa-fw"></i></span>
			    <input type="text" name="schet_bik" value="<?php echo $schet_bik; ?>" placeholder="<?php echo $entry_bik; ?>" id="input-bik" class="form-control" />
			  </div>
			  <?php if ($error_bik) { ?>
                <div class="text-danger"><?php echo $error_bik; ?></div>
              <?php } ?>
			</div>
          </div>
		  <div class="form-group required">
            <label class="col-sm-3 control-label" for="input-corschet"><?php echo $entry_corschet; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
			    <input type="text" name="schet_corschet" value="<?php echo $schet_corschet; ?>" placeholder="<?php echo $entry_corschet; ?>" id="input-corschet" class="form-control" />
			  </div>
			  <?php if ($error_corschet) { ?>
                <div class="text-danger"><?php echo $error_corschet; ?></div>
              <?php } ?>
			</div>
          </div>
		  <div class="form-group">
            <label class="col-sm-3 control-label" for="input-telephone"><?php echo $entry_telephone; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
			    <input type="text" name="schet_telephone" value="<?php echo $schet_telephone; ?>" placeholder="<?php echo $entry_telephone; ?>" id="input-telephone" class="form-control" />
			  </div>
			</div>
          </div>
		  <div class="form-group">
            <label class="col-sm-3 control-label" for="input-mobilephone"><?php echo $entry_mobilephone; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-mobile-phone fa-fw"></i></span>
			    <input type="text" name="schet_mobilephone" value="<?php echo $schet_mobilephone; ?>" placeholder="<?php echo $entry_mobilephone; ?>" id="input-mobilephone" class="form-control" />
			  </div>
			</div>
          </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label"><?php echo $entry_images; ?></label>
			<div class="col-sm-3">
			  <label class="control-label" for="input-image-signature"><?php echo $entry_signature; ?></label>
			  <div style="margin-top:5px;">
			    <a href="" id="image-signature" data-toggle="image" class="img-thumbnail"><img src="<?php echo $thumb_signature; ?>" data-placeholder="<?php echo $placeholder; ?>" /></a>
			    <input type="hidden" name="schet_image_signature" value="<?php echo $schet_image_signature; ?>"  id="input-image-signature" />
			  </div>
			</div>
			<div class="col-sm-3">
			  <label class="control-label" for="input-image-signature-accountant"><?php echo $entry_signature_accountant; ?></label>
			  <div style="margin-top:5px;">
			    <a href="" id="image-signature-accountant" data-toggle="image" class="img-thumbnail"><img src="<?php echo $thumb_signature_accountant; ?>" data-placeholder="<?php echo $placeholder; ?>" /></a>
			    <input type="hidden" name="schet_image_signature_accountant" value="<?php echo $schet_image_signature_accountant; ?>"  id="input-image-signature-accountant" />
			  </div>
			</div>
			<div class="col-sm-3">
			  <label class="control-label" for="input-image-stamp"><?php echo $entry_stamp; ?></label>
			  <div style="margin-top:5px;">
			    <a href="" id="image-stamp" data-toggle="image" class="img-thumbnail"><img src="<?php echo $thumb_stamp; ?>" data-placeholder="<?php echo $placeholder; ?>" /></a>
			    <input type="hidden" name="schet_image_stamp" value="<?php echo $schet_image_stamp; ?>"  id="input-image-stamp" />
			  </div>
			</div>
		  </div>
		  <div class="form-group">
			<label class="col-sm-3 control-label"><?php echo $entry_size_images; ?></label>
			<div class="col-sm-3">
			  <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-arrows-h fa-fw"></i></span>
				<input type="text" name="schet_signature_width" value="<?php echo $schet_signature_width; ?>" placeholder="<?php echo $entry_width; ?>"class="form-control" />
				<span class="input-group-addon"><i class="fa fa-arrows-v fa-fw"></i></span>
				<input type="text" name="schet_signature_height" value="<?php echo $schet_signature_height; ?>" placeholder="<?php echo $entry_height; ?>"class="form-control" />
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-arrows-h fa-fw"></i></span>
				<input type="text" name="schet_signature_accountant_width" value="<?php echo $schet_signature_accountant_width; ?>" placeholder="<?php echo $entry_width; ?>"class="form-control" />
				<span class="input-group-addon"><i class="fa fa-arrows-v fa-fw"></i></span>
				<input type="text" name="schet_signature_accountant_height" value="<?php echo $schet_signature_accountant_height; ?>" placeholder="<?php echo $entry_height; ?>"class="form-control" />
			  </div>
			</div>
			<div class="col-sm-3">
			  <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-arrows-h fa-fw"></i></span>
				<input type="text" name="schet_stamp_width" value="<?php echo $schet_stamp_width; ?>" placeholder="<?php echo $entry_width; ?>"class="form-control" />
				<span class="input-group-addon"><i class="fa fa-arrows-v fa-fw"></i></span>
				<input type="text" name="schet_stamp_height" value="<?php echo $schet_stamp_height; ?>" placeholder="<?php echo $entry_height; ?>"class="form-control" />
			  </div>
			</div>
		  </div>
		  <div class="form-group">
            <label class="col-sm-3 control-label" for="input-total"><span data-toggle="tooltip" title="<?php echo $help_total; ?>"><?php echo $entry_total; ?></span></label>
            <div class="col-sm-9">
			  <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-expand fa-fw"></i></span>
                <input type="text" name="schet_total" value="<?php echo $schet_total; ?>" placeholder="<?php echo $entry_total; ?>" id="input-total" class="form-control" />
              </div>
			</div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="input-order-status"><?php echo $entry_order_status; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw"></i></span>
			    <select name="schet_order_status_id" id="input-order-status" class="form-control">
                  <?php foreach ($order_statuses as $order_status) { ?>
					<?php if ($order_status['order_status_id'] == $schet_order_status_id) { ?>
					<option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
					<?php } else { ?>
					<option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
					<?php } ?>
                  <?php } ?>
                </select>
			  </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="input-geo-zone"><?php echo $entry_geo_zone; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-globe fa-fw"></i></span>
			    <select name="schet_geo_zone_id" id="input-geo-zone" class="form-control">
                  <option value="0"><?php echo $text_all_zones; ?></option>
                  <?php foreach ($geo_zones as $geo_zone) { ?>
					<?php if ($geo_zone['geo_zone_id'] == $schet_geo_zone_id) { ?>
					<option value="<?php echo $geo_zone['geo_zone_id']; ?>" selected="selected"><?php echo $geo_zone['name']; ?></option>
					<?php } else { ?>
					<option value="<?php echo $geo_zone['geo_zone_id']; ?>"><?php echo $geo_zone['name']; ?></option>
					<?php } ?>
                  <?php } ?>
                </select>
			  </div>
            </div>
          </div>
		  <div class="form-group">
            <label class="col-sm-3 control-label" for="input-sort-order"><?php echo $entry_sort_order; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon"><i class="fa fa-sort-numeric-asc fa-fw"></i></span>
			    <input type="text" name="schet_sort_order" value="<?php echo $schet_sort_order; ?>" placeholder="<?php echo $entry_sort_order; ?>" id="input-sort-order" class="form-control" />
              </div>
			</div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="input-status"><?php echo $entry_status; ?></label>
            <div class="col-sm-9">
              <div class="input-group">
				<span class="input-group-addon" id="selector"></span>
			    <select name="schet_status" id="input-status" class="form-control">
                  <?php if ($schet_status) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } ?>
                </select>
			  </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$(document).ready(function() {
	var selectStatus = $('#input-status');
	
	function selectedStatus(){
		if (selectStatus.val() != '0') {
			$('#selector').replaceWith('<span class="input-group-addon alert-success" id="selector"><i class="fa fa-check-circle fa-fw"></i></span>');
		} else {
			$('#selector').replaceWith('<span class="input-group-addon alert-danger" id="selector"><i class="fa fa-power-off fa-fw"></i></span>');
		}
	}	
	selectedStatus();
	
	selectStatus.on('change', function() {
		if (selectStatus.val() != '0') {
			$('#selector').replaceWith('<span class="input-group-addon alert-success" id="selector"><i class="fa fa-check-circle fa-fw"></i></span>');
		} else {
			$('#selector').replaceWith('<span class="input-group-addon alert-danger" id="selector"><i class="fa fa-power-off fa-fw"></i></span>');
		}
	});
});
$('#language a:first').tab('show');
//--></script>
<?php echo $footer; ?>