<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
	    <button type="button" data-toggle="tooltip" title="<?php echo $text_version; ?> <?php echo $version; ?>" class="btn btn-default"><?php echo $version; ?></button>
	    <button onclick="$('#input-apply').attr('value', '1'); $('#' + $('#content form').attr('id')).submit();" data-toggle="tooltip" title="<?php echo $button_apply; ?>" class="btn btn-success"><i class="fa fa-save"></i></button>
        <button type="submit" form="form-options-category" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-options-category" class="form-horizontal">
		  <input type="hidden" name="options_category_apply" id="input-apply" value="0" />
		  <input type="hidden" name="options_category_status" value="1" />
		  <ul class="nav nav-tabs">
		    <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
		    <li><a href="#tab-view" data-toggle="tab"><?php echo $tab_view; ?></a></li>
			<li><a href="#tab-show" data-toggle="tab"><?php echo $tab_show; ?></a></li>
			<li><a href="#tab-contact" data-toggle="tab"><?php echo $tab_contact; ?></a></li>
	      </ul>
		  <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-autoselect"><?php echo $entry_autoselect; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_autoselect" id="input-autoselect" class="form-control">
					<?php if ($options_category_autoselect) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-show-no-stock"><?php echo $entry_show_no_stock; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_show_no_stock" id="input-show-no-stock" class="form-control">
					<?php if ($options_category_show_no_stock) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-no-stock-disabled"><?php echo $entry_no_stock_disabled; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_no_stock_disabled" id="input-no-stock-disabled" class="form-control">
					<?php if ($options_category_no_stock_disabled) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-datetimepicker"><?php echo $entry_datetimepicker; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_datetimepicker" id="input-datetimepicker" class="form-control">
					<?php if ($options_category_datetimepicker) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-special-mode"><?php echo $entry_special_mode; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_special_mode" id="input-special-mode" class="form-control">
					<?php if ($options_category_special_mode == '3') { ?>
					<option value="3" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="2"><?php echo $text_option_group; ?></option>
					<option value="1"><?php echo $text_option_group_value; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } elseif ($options_category_special_mode == '2') { ?>
					<option value="3"><?php echo $text_enabled; ?></option>
					<option value="2" selected="selected"><?php echo $text_option_group; ?></option>
					<option value="1"><?php echo $text_option_group_value; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } elseif ($options_category_special_mode == '1') { ?>
					<option value="3"><?php echo $text_enabled; ?></option>
					<option value="2"><?php echo $text_option_group; ?></option>
					<option value="1" selected="selected"><?php echo $text_option_group_value; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="3"><?php echo $text_enabled; ?></option>
					<option value="2"><?php echo $text_option_group; ?></option>
					<option value="1"><?php echo $text_option_group_value; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-image-select"><?php echo $entry_image_select; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_image_select" id="input-image-select" class="form-control">
					<?php if ($options_category_image_select) { ?>
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
			<div class="tab-pane" id="tab-view">
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-theme"><?php echo $entry_theme; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_theme" id="input-theme" class="form-control">
					<?php if ($options_category_theme) { ?>
					<option value="1" selected="selected"><?php echo $text_theme_button; ?></option>
					<option value="0"><?php echo $text_no_theme; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_theme_button; ?></option>
					<option value="0" selected="selected"><?php echo $text_no_theme; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-quantity"><?php echo $entry_quantity; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_quantity" id="input-quantity" class="form-control">
					<?php if ($options_category_quantity) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-quantity-product"><?php echo $entry_quantity_product; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_quantity_product" id="input-quantity-product" class="form-control">
					<?php if ($options_category_quantity_product) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			   <div class="form-group">
				<label class="col-sm-3 control-label" for="input-position"><?php echo $entry_position; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_position" id="input-position" class="form-control">
					<?php if ($options_category_position) { ?>
					<option value="1" selected="selected"><?php echo $text_top; ?></option>
					<option value="0"><?php echo $text_bottom; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_top; ?></option>
					<option value="0" selected="selected"><?php echo $text_bottom; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-name-tooltip"><?php echo $entry_name_tooltip; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_name_tooltip" id="input-name-tooltip" class="form-control">
					<?php if ($options_category_name_tooltip) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-image"><?php echo $entry_image; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_image" id="input-image" class="form-control">
					<?php if ($options_category_image) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-image-width"><?php echo $entry_image_size; ?></label>
				<div class="col-sm-9">
				  <div class="row">
					<div class="col-sm-6">
					  <input type="text" name="options_category_image_width" value="<?php echo $options_category_image_width; ?>" placeholder="<?php echo $entry_width; ?>" id="input-image-width" class="form-control" />
					</div>
					<div class="col-sm-6">
					  <input type="text" name="options_category_image_height" value="<?php echo $options_category_image_height; ?>" placeholder="<?php echo $entry_height; ?>" id="input-image-height" class="form-control" />
					</div>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-image-popup"><?php echo $entry_image_popup; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_image_popup" id="input-image-popup" class="form-control">
					<?php if ($options_category_image_popup) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-image-popup-width"><?php echo $entry_image_popup_size; ?></label>
				<div class="col-sm-9">
				  <div class="row">
					<div class="col-sm-6">
					  <input type="text" name="options_category_image_popup_width" value="<?php echo $options_category_image_popup_width; ?>" placeholder="<?php echo $entry_width; ?>" id="input-image-popup-width" class="form-control" />
					</div>
					<div class="col-sm-6">
					  <input type="text" name="options_category_image_popup_height" value="<?php echo $options_category_image_popup_height; ?>" placeholder="<?php echo $entry_height; ?>" id="input-image-popup-height" class="form-control" />
					</div>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-sku"><?php echo $entry_sku; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_sku" id="input-sku" class="form-control">
					<?php if ($options_category_sku) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-show-quantity"><?php echo $entry_show_quantity; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_show_quantity" id="input-show-quantity" class="form-control">
					<?php if ($options_category_show_quantity) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-show-price"><?php echo $entry_show_price; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_show_price" id="input-show-price" class="form-control">
					<?php if ($options_category_show_price) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-points"><?php echo $entry_points; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_points" id="input-points" class="form-control">
					<?php if ($options_category_points) { ?>
					<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
					<option value="0"><?php echo $text_disabled; ?></option>
					<?php } else { ?>
					<option value="1"><?php echo $text_enabled; ?></option>
					<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-weight"><?php echo $entry_weight; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_weight" id="input-weight" class="form-control">
					<?php if ($options_category_weight) { ?>
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
			<div class="tab-pane" id="tab-show">
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-show-mode"><?php echo $entry_show_mode; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_show_mode" id="input-show-mode" class="form-control">
					<?php if ($options_category_show_mode == '2') { ?>
					<option value="2" selected="selected"><?php echo $text_option_product_selected; ?></option>
					<option value="1"><?php echo $text_option_selected; ?></option>
					<option value="0"><?php echo $text_all; ?></option>
					<?php } elseif ($options_category_show_mode == '1') { ?>
					<option value="2"><?php echo $text_option_product_selected; ?></option>
					<option value="1" selected="selected"><?php echo $text_option_selected; ?></option>
					<option value="0"><?php echo $text_all; ?></option>
					<?php } else { ?>
					<option value="2"><?php echo $text_option_product_selected; ?></option>
					<option value="1"><?php echo $text_option_selected; ?></option>
					<option value="0" selected="selected"><?php echo $text_all; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label"><?php echo $entry_options; ?></label>
				<div class="col-sm-9">
				  <div class="well well-sm" style="height: 150px; overflow: auto;">
					<?php if ($options) { ?>
					<?php foreach ($options as $option) { ?>
					<div class="checkbox">
					  <label>
						<?php if (in_array($option['option_id'], $options_category_show)) { ?>
						<input type="checkbox" name="options_category_show[]" value="<?php echo $option['option_id']; ?>" checked="checked" />
						<?php echo $option['name']; ?>
						<?php } else { ?>
						<input type="checkbox" name="options_category_show[]" value="<?php echo $option['option_id']; ?>"/>
						<?php echo $option['name']; ?>
						<?php } ?>
					  </label>
					</div>
					<?php } ?>
					<?php } ?>
				  </div>
				  <a class="btn btn-primary" onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a>
				  <a class="btn btn-primary" onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label" for="input-value-show-mode"><?php echo $entry_value_show_mode; ?></label>
				<div class="col-sm-9">
				  <select name="options_category_value_show_mode" id="input-value-show-mode" class="form-control">
					<?php if ($options_category_value_show_mode == '2') { ?>
					<option value="2" selected="selected"><?php echo $text_option_product_selected; ?></option>
					<option value="1"><?php echo $text_option_selected; ?></option>
					<option value="0"><?php echo $text_all; ?></option>
					<?php } elseif ($options_category_value_show_mode == '1') { ?>
					<option value="2"><?php echo $text_option_product_selected; ?></option>
					<option value="1" selected="selected"><?php echo $text_option_selected; ?></option>
					<option value="0"><?php echo $text_all; ?></option>
					<?php } else { ?>
					<option value="2"><?php echo $text_option_product_selected; ?></option>
					<option value="1"><?php echo $text_option_selected; ?></option>
					<option value="0" selected="selected"><?php echo $text_all; ?></option>
					<?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
				<label class="col-sm-3 control-label"><?php echo $entry_option_values; ?></label>
				<div class="col-sm-9">
				  <div class="well well-sm" style="height: 300px; overflow: auto;">
					<?php if ($options) { ?>
					<?php foreach ($options as $option) { ?>
					<?php if ($option['type'] == 'select' || $option['type'] == 'radio' || $option['type'] == 'checkbox') { ?>
					<div style="margin-bottom: 10px;">
					  <div><strong><?php echo $option['name']; ?></strong></div>
					  <?php foreach ($option['option_values'] as $option_value) { ?>
					  <div class="checkbox">
						<label>
						  <?php if (in_array($option_value['option_value_id'], $options_category_value_show)) { ?>
						  <input type="checkbox" name="options_category_value_show[]" value="<?php echo $option_value['option_value_id']; ?>" checked="checked" />
						  <?php echo $option_value['name']; ?>
						  <?php } else { ?>
						  <input type="checkbox" name="options_category_value_show[]" value="<?php echo $option_value['option_value_id']; ?>"/>
						  <?php echo $option_value['name']; ?>
						  <?php } ?>
						</label>
					  </div>
					<?php } ?>
					</div>
					<?php } ?>
					<?php } ?>
					<?php } ?>
				  </div>
				  <a class="btn btn-primary" onclick="$(this).parent().find(':checkbox').prop('checked', true);"><?php echo $text_select_all; ?></a>
				  <a class="btn btn-primary" onclick="$(this).parent().find(':checkbox').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
				</div>
			  </div>
			</div>
			<div class="tab-pane" id="tab-contact">
			  <div><?php echo $text_contact; ?></div>
			</div>
		  </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>