<?php echo $header; ?>
<?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-module" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
    <?php if (isset($warning)) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <?php if (isset($success)) { ?>
    <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">

			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
				<li><a href="#tab-meta" data-toggle="tab"><?php echo $tab_meta; ?></a></li>
				<li><a href="#tab-contact" data-toggle="tab"><?php echo $tab_contact; ?></a></li>
				<li><a href="#tab-data" data-toggle="tab"><?php echo $tab_data; ?></a></li>
				<li><a href="#tab-note" data-toggle="tab"><?php echo $tab_note; ?></a></li>
				<li><a href="#tab-style" data-toggle="tab"><?php echo $tab_style; ?></a></li>
				<li><a href="#tab-email" data-toggle="tab"><?php echo $tab_email; ?></a></li>
				<li><a href="#tab-about" data-toggle="tab"><?php echo $tab_about; ?></a></li>
			</ul>

			<div class="tab-content">
				<div class="tab-pane active" id="tab-general">

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
						<div class="col-sm-3">
							<select name="orderexcel_status" id="input-status" class="form-control">
								<?php if ($orderexcel_status) { ?>
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
						<label class="col-sm-2 control-label" for="input-contact"><span data-toggle="tooltip" data-container="#tab-content" title="" data-original-title="<?php echo $help_contact; ?>"><?php echo $entry_contact; ?></span></label>
						<div class="col-sm-3">
							<select name="orderexcel_setting[contact]" class="form-control">
								<option value="0" <?php if (isset($setting['contact']) and $setting['contact'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
								<option value="1" <?php if (isset($setting['contact']) and $setting['contact'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-header"><span data-toggle="tooltip" data-container="#tab-content" title="" data-original-title="<?php echo $help_header; ?>"><?php echo $entry_header; ?></span></label>
						<div class="col-sm-3">
							<select name="orderexcel_setting[header]" class="form-control">
								<option value="0" <?php if (isset($setting['header']) and $setting['header'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
								<option value="1" <?php if (isset($setting['header']) and $setting['header'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-alltotal"><span data-toggle="tooltip" data-container="#tab-content" title="" data-original-title="<?php echo $help_alltotal; ?>"><?php echo $entry_alltotal; ?></span></label>
						<div class="col-sm-3">
							<select name="orderexcel_setting[alltotal]" class="form-control">
								<option value="0" <?php if (isset($setting['alltotal']) and $setting['alltotal'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
								<option value="1" <?php if (isset($setting['alltotal']) and $setting['alltotal'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-note"><span data-toggle="tooltip" data-container="#tab-content" title="" data-original-title="<?php echo $help_note; ?>"><?php echo $entry_note; ?></span></label>
						<div class="col-sm-3">
							<select name="orderexcel_setting[note]" class="form-control">
								<option value="0" <?php if (isset($setting['note']) and $setting['note'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
								<option value="1" <?php if (isset($setting['note']) and $setting['note'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-union"><span data-toggle="tooltip" data-container="#tab-content" title="" data-original-title="<?php echo $help_union; ?>"><?php echo $entry_union; ?></span></label>
						<div class="col-sm-3">
							<select name="orderexcel_setting[union]" class="form-control">
								<option value="0" <?php if (isset($setting['union']) and $setting['union'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
								<option value="1" <?php if (isset($setting['union']) and $setting['union'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-option"><span data-toggle="tooltip" data-container="#tab-content" title="" data-original-title="<?php echo $help_option; ?>"><?php echo $entry_option; ?></span></label>
						<div class="col-sm-3">
							<select name="orderexcel_setting[option]" class="form-control">
								<option value="0" <?php if (isset($setting['option']) and $setting['option'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
								<option value="1" <?php if (isset($setting['option']) and $setting['option'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label"><?php echo $entry_customer_group; ?></label>
						<div class="col-sm-3">
							<select name="orderexcel_customer_group_id" class="form-control">
								<?php foreach($customer_groups as $group){ ?>
									<option value="<?php echo $group['customer_group_id']; ?>" <?php if ($group['customer_group_id'] == $customer_group_id) { echo 'selected="selected"'; } ?>"><?php echo $group['name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

				</div>

				<div class="tab-pane" id="tab-meta">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-sheet"><?php echo $entry_sheet; ?></label>
						<div class="col-sm-10">
							<input type="text" name="orderexcel_meta[sheet]" value="<?php if (isset($meta['sheet'])) { echo $meta['sheet']; } ?>" placeholder="<?php echo $entry_sheet; ?>" id="input-sheet" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-title"><?php echo $entry_title; ?></label>
						<div class="col-sm-10">
							<input type="text" name="orderexcel_meta[title]" value="<?php if (isset($meta['title'])) { echo $meta['title']; } ?>" placeholder="<?php echo $entry_title; ?>" id="input-title" class="form-control" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-author"><?php echo $entry_author; ?></label>
						<div class="col-sm-10">
							<input type="text" name="orderexcel_meta[author]" value="<?php if (isset($meta['author'])) { echo $meta['author']; } ?>" placeholder="<?php echo $entry_author; ?>" id="input-author" class="form-control" />
						</div>
					</div>
				</div>

				<div class="tab-pane" id="tab-contact">

					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-2">
							<?php echo $entry_status; ?>
						</div>
						<div class="col-sm-2">
							<?php echo $entry_contact_cell_start; ?>
						</div>
						<div class="col-sm-2">
							<?php echo $entry_contact_cell_finish; ?>
						</div>
						<div class="col-sm-2">
							<?php echo $entry_width; ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_contact_logo; ?>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[logo][status]" class="form-control">
								<option value="1" <?php if (isset($contact['logo']['status']) and $contact['logo']['status'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($contact['logo']['status']) and $contact['logo']['status'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[logo][cell_start]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['logo']['cell_start'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[logo][cell_finish]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['logo']['cell_finish'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_contact[logo][width]" value="<?php if (isset($contact['logo']['width'])) { echo $contact['logo']['width']; } ?>" placeholder="150" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_contact_telephone; ?>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[telephone][status]" class="form-control">
								<option value="1" <?php if (isset($contact['telephone']['status']) and $contact['telephone']['status'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($contact['telephone']['status']) and $contact['telephone']['status'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[telephone][cell_start]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['telephone']['cell_start'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[telephone][cell_finish]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['telephone']['cell_finish'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_contact[telephone][width]" value="<?php if (isset($contact['telephone']['width'])) { echo $contact['telephone']['width']; } ?>" placeholder="150" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_contact_market_name; ?>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[market_name][status]" class="form-control">
								<option value="1" <?php if (isset($contact['market_name']['status']) and $contact['market_name']['status'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($contact['market_name']['status']) and $contact['market_name']['status'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[market_name][cell_start]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['market_name']['cell_start'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[market_name][cell_finish]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['market_name']['cell_finish'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_contact[market_name][width]" value="<?php if (isset($contact['market_name']['width'])) { echo $contact['market_name']['width']; } ?>" placeholder="150" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_contact_email; ?>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[email][status]" class="form-control">
								<option value="1" <?php if (isset($contact['email']['status']) and $contact['email']['status'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($contact['email']['status']) and $contact['email']['status'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[email][cell_start]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['email']['cell_start'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[email][cell_finish]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['email']['cell_finish'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_contact[email][width]" value="<?php if (isset($contact['email']['width'])) { echo $contact['email']['width']; } ?>" placeholder="150" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_contact_address; ?>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[address][status]" class="form-control">
								<option value="1" <?php if (isset($contact['address']['status']) and $contact['address']['status'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($contact['address']['status']) and $contact['address']['status'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[address][cell_start]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['address']['cell_start'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[address][cell_finish]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['address']['cell_finish'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_contact[address][width]" value="<?php if (isset($contact['address']['width'])) { echo $contact['address']['width']; } ?>" placeholder="150" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_contact_work; ?>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[work][status]" class="form-control">
								<option value="1" <?php if (isset($contact['work']['status']) and $contact['work']['status'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($contact['work']['status']) and $contact['work']['status'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[work][cell_start]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['work']['cell_start'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<select name="orderexcel_contact[work][cell_finish]" class="form-control">
								<option value="0" selected><?php echo $text_choose; ?></option>
								<?php foreach($alfabet as $alfa){ ?>
									<?php if ($contact['work']['cell_finish'] == $alfa) { ?>
										<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
									<?php } else { ?>
										<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_contact[work][width]" value="<?php if (isset($contact['work']['width'])) { echo $contact['work']['width']; } ?>" placeholder="150" class="form-control" />
						</div>
					</div>

				</div>

				<div class="tab-pane" id="tab-data">

					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-2 text-center"><b><?php echo $entry_column_select; ?></b></div>
						<div class="col-sm-2 text-center"><b><?php echo $entry_width; ?></b></div>
						<div class="col-sm-2 text-center"><b><?php echo $entry_column; ?></b></div>
						<div class="col-sm-2 text-center"><b><?php echo $entry_keyword; ?></b></div>
					</div>

					<div id="columns">

					<?php $column_id = 0; ?>

					<?php foreach($column as $key => $item) { ?>

						<?php $column_id = $key; ?>

						<div class="form-group" id="column-<?php echo $key; ?>">
							<div class="col-sm-2">
								<select name="orderexcel_column[<?php echo $key; ?>][name]" class="form-control column-name">
									<?php foreach($column_select as $c_key => $name) { ?>
										<?php if ($item['name'] == $c_key) { ?>
											<option value="<?php echo $c_key; ?>" selected="selected"><?php echo $name; ?></option>
										<?php } else { ?>
											<option value="<?php echo $c_key; ?>"><?php echo $name; ?></option>
										<?php } ?>
									<?php } ?>
								</select>
							</div>
							<div class="col-sm-2">
								<input type="text" name="orderexcel_column[<?php echo $key; ?>][title]" value="<?php if (isset($item['title'])) { echo $item['title']; } ?>" class="form-control column-title" />
							</div>
							<div class="col-sm-2">
								<input type="text" name="orderexcel_column[<?php echo $key; ?>][width]" value="<?php if (isset($item['width'])) { echo $item['width']; } ?>" placeholder="150" class="form-control" />
							</div>
							<div class="col-sm-2">
								<select name="orderexcel_column[<?php echo $key; ?>][column]" class="form-control">
									<option value="0" selected><?php echo $text_choose; ?></option>
									<?php foreach($alfabet as $alfa){ ?>
										<?php if ($item['column'] == $alfa) { ?>
											<option value="<?php echo $alfa; ?>" selected="selected"><?php echo $alfa; ?></option>
										<?php } else { ?>
											<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
										<?php } ?>
									<?php } ?>
								</select>
							</div>
							<div class="col-sm-3">
								<input type="text" name="orderexcel_column[<?php echo $key; ?>][keyword]" value="<?php if (isset($item['keyword'])) { echo $item['keyword']; } ?>" placeholder="sun, cloud" class="form-control" />
							</div>
							<div class="col-sm-1">
								<button type="button" class="btn btn-danger" onclick="$('#column-<?php echo $key; ?>').remove();"><i class="fa fa-minus"></i></button>
							</div>
						</div>

					<?php } ?>

					</div>
					
					<div class="form-group">
						<div class="col-sm-11"></div>
						<div class="col-sm-1">
							<button type="button" class="btn btn-success" onclick="addColumn();"><i class="fa fa-plus"></i></button>
						</div>
					</div>

					<script>

						var columnid = <?php echo $column_id + 1; ?>

						function addColumn(){

							let html = `
								<div class="form-group" id="column-${columnid}">
									<div class="col-sm-2">
										<select name="orderexcel_column[${columnid}][name]" class="form-control column-name">
											<?php foreach($column_select as $c_key => $name) { ?>
												<option value="<?php echo $c_key; ?>"><?php echo $name; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-2">
										<input type="text" name="orderexcel_column[${columnid}][title]" class="form-control column-title" />
									</div>
									<div class="col-sm-2">
										<input type="text" name="orderexcel_column[${columnid}][width]" placeholder="150" class="form-control" />
									</div>
									<div class="col-sm-2">
										<select name="orderexcel_column[${columnid}][column]" class="form-control">
											<option value="0" selected><?php echo $text_choose; ?></option>
											<?php foreach($alfabet as $alfa){ ?>
												<option value="<?php echo $alfa; ?>"><?php echo $alfa; ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="col-sm-3">
										<input type="text" name="orderexcel_column[${columnid}][keyword]" placeholder="sun, cloud" class="form-control" />
									</div>
									<div class="col-sm-1">
										<button type="button" class="btn btn-danger" onclick="$('#column-${columnid}').remove();"><i class="fa fa-minus"></i></button>
									</div>
								</div>
							`;

							$('#columns').append(html)

							columnid++;

						}

						$(document).delegate('.column-name', 'change', function(){
							$(this).parents('.form-group').find('.column-title').val(this.selectedOptions[0].text);
						});

					</script>

				</div>

				<div class="tab-pane" id="tab-note">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-note"><?php echo $entry_note; ?></label>
						<div class="col-sm-10">
							<textarea name="orderexcel_note" placeholder="<?php echo $entry_note; ?>" id="input-note" class="form-control" /><?php echo $note; ?></textarea>
						</div>
					</div>
				</div>

				<div class="tab-pane" id="tab-style">

					<div class="form-group">
						<div class="col-sm-2"></div>
						<div class="col-sm-3">
							<?php echo $entry_contact; ?>
						</div>
						<div class="col-sm-3">
							<?php echo $entry_header; ?>
						</div>
						<div class="col-sm-3">
							<?php echo $entry_cell; ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_font_family; ?>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[contact][family]" class="form-control">
								<?php foreach($fonts as $name){ ?>
									<?php if ($style['contact']['family'] == $name) { ?>
										<option value="<?php echo $name; ?>" selected="selected"><?php echo $name; ?></option>
									<?php } else { ?>
										<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[header][family]" class="form-control">
								<?php foreach($fonts as $name){ ?>
									<?php if ($style['header']['family'] == $name) { ?>
										<option value="<?php echo $name; ?>" selected="selected"><?php echo $name; ?></option>
									<?php } else { ?>
										<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[cell][family]" class="form-control">
								<?php foreach($fonts as $name){ ?>
									<?php if ($style['cell']['family'] == $name) { ?>
										<option value="<?php echo $name; ?>" selected="selected"><?php echo $name; ?></option>
									<?php } else { ?>
										<option value="<?php echo $name; ?>"><?php echo $name; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_font_size; ?>
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[contact][size]" value="<?php if ( isset($style['contact']['size']) ) { echo $style['contact']['size']; } ?>" placeholder="10" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[header][size]" value="<?php if ( isset($style['header']['size']) ) { echo $style['header']['size']; } ?>" placeholder="10" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[cell][size]" value="<?php if ( isset($style['cell']['size']) ) { echo $style['cell']['size']; } ?>" placeholder="10" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_font_bold; ?>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[contact][bold]" class="form-control">
								<option value="1" <?php if (isset($style['contact']['bold']) and $style['contact']['bold'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($style['contact']['bold']) and $style['contact']['bold'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[header][bold]" class="form-control">
								<option value="1" <?php if (isset($style['header']['bold']) and $style['header']['bold'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($style['header']['bold']) and $style['header']['bold'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[cell][bold]" class="form-control">
								<option value="1" <?php if (isset($style['cell']['bold']) and $style['cell']['bold'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($style['cell']['bold']) and $style['cell']['bold'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_font_italic; ?>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[contact][italic]" class="form-control">
								<option value="1" <?php if (isset($style['cell']['italic']) and $style['cell']['italic'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($style['cell']['italic']) and $style['cell']['italic'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[header][italic]" class="form-control">
								<option value="1" <?php if (isset($style['cell']['italic']) and $style['cell']['italic'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($style['cell']['italic']) and $style['cell']['italic'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[cell][italic]" class="form-control">
								<option value="1" <?php if (isset($style['cell']['italic']) and $style['cell']['italic'] == '1') { echo 'selected="selected"'; } ?> ><?php echo $text_enabled; ?></option>
								<option value="0" <?php if (isset($style['cell']['italic']) and $style['cell']['italic'] == '0') { echo 'selected="selected"'; } ?> ><?php echo $text_disabled; ?></option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_font_color; ?>
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[contact][color]" value="<?php if ( isset($style['contact']['color']) ) { echo $style['contact']['color']; } ?>" placeholder="#000000" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[header][color]" value="<?php if (isset($style['contact']['color']) ) { echo $style['header']['color']; } ?>" placeholder="#000000" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[cell][color]" value="<?php if (isset($style['contact']['color']) ) { echo $style['cell']['color']; } ?>" placeholder="#000000" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_cell_horizontal; ?>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[contact][horizontal]" class="form-control">
								<?php foreach($horizontal as $item){ ?>
									<?php if ($style['contact']['horizontal'] == $item) { ?>
										<option value="<?php echo $item; ?>" selected="selected"><?php echo $item; ?></option>
									<?php } else { ?>
										<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[header][horizontal]" class="form-control">
								<?php foreach($horizontal as $item){ ?>
									<?php if ($style['header']['horizontal'] == $item) { ?>
										<option value="<?php echo $item; ?>" selected="selected"><?php echo $item; ?></option>
									<?php } else { ?>
										<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[cell][horizontal]" class="form-control">
								<?php foreach($horizontal as $item){ ?>
									<?php if ($style['cell']['horizontal'] == $item) { ?>
										<option value="<?php echo $item; ?>" selected="selected"><?php echo $item; ?></option>
									<?php } else { ?>
										<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_cell_vertical; ?>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[contact][vertical]" class="form-control">
								<?php foreach($vertical as $item){ ?>
									<?php if ($style['contact']['vertical'] == $item) { ?>
										<option value="<?php echo $item; ?>" selected="selected"><?php echo $item; ?></option>
									<?php } else { ?>
										<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[header][vertical]" class="form-control">
								<?php foreach($vertical as $item){ ?>
									<?php if ($style['header']['vertical'] == $item) { ?>
										<option value="<?php echo $item; ?>" selected="selected"><?php echo $item; ?></option>
									<?php } else { ?>
										<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
						<div class="col-sm-3">
							<select name="orderexcel_style[cell][vertical]" class="form-control">
								<?php foreach($vertical as $item){ ?>
									<?php if ($style['cell']['vertical'] == $item) { ?>
										<option value="<?php echo $item; ?>" selected="selected"><?php echo $item; ?></option>
									<?php } else { ?>
										<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
									<?php } ?>
								<?php } ?>
							</select>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_cell_fill; ?>
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[contact][fill]" value="<?php if (isset($style['contact']['fill']) ) { echo $style['contact']['fill']; } ?>" placeholder="#000000" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[header][fill]" value="<?php if (isset($style['contact']['fill']) ) { echo $style['header']['fill']; } ?>" placeholder="#000000" class="form-control" />
						</div>
						<div class="col-sm-2">
							<input type="text" name="orderexcel_style[cell][fill]" value="<?php if (isset($style['contact']['fill']) ) { echo $style['cell']['fill']; } ?>" placeholder="#000000" class="form-control" />
						</div>
						<div class="col-sm-1">
							<input type="text" name="orderexcel_style[cell][fill_keyword]" value="<?php if (isset($style['contact']['fill_keyword']) ) { echo $style['cell']['fill_keyword']; } ?>" placeholder="#000000" class="form-control" />
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-2 control-label">
							<?php echo $entry_cell_height; ?>
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[contact][height]" value="<?php if (isset($style['contact']['height']) ) { echo $style['contact']['height']; } ?>" placeholder="10" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[header][height]" value="<?php if (isset($style['contact']['height']) ) { echo $style['header']['height']; } ?>" placeholder="10" class="form-control" />
						</div>
						<div class="col-sm-3">
							<input type="text" name="orderexcel_style[cell][height]" value="<?php if (isset($style['contact']['height']) ) { echo $style['cell']['height']; } ?>" placeholder="10" class="form-control" />
						</div>
					</div>

				</div>

				<div class="tab-pane" id="tab-email">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-email-status"><?php echo $entry_email_status; ?></label>
						<div class="col-sm-3">
							<select name="orderexcel_email[status]" id="input-email-status" class="form-control">
								<?php if ($email['status']) { ?>
								<option value="0"><?php echo $text_disabled; ?></option>
								<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
								<?php } else { ?>
								<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
								<option value="1"><?php echo $text_enabled; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="input-email-to"><?php echo $entry_email_to; ?></label>
						<div class="col-sm-10">
							<input type="text" name="orderexcel_email[to]" value="<?php if (isset($email['to'])) { echo $email['to']; } ?>" placeholder="<?php echo $entry_email_to; ?>" id="input-email-to" class="form-control" />
						</div>
					</div>
				</div>

				<div class="tab-pane" id="tab-about">
					<p><?php echo $version; ?></p>
					<p><?php echo $about_module; ?></p>

					<div class="panel panel-default">
					  <div class="panel-heading"><?php echo $entry_support; ?></div>
					  <div class="panel-body">
					    <script src="https://yastatic.net/q/forms-frontend-ext/_/embed.js"></script><iframe src="https://forms.yandex.ru/u/5d2c8cbd6b6a500283b57573/?iframe=1" frameborder="0" name="ya-form-5d2c8cbd6b6a500283b57573" width="650"></iframe>
					  </div>
					</div>

				</div>
			</div>

			</form>
      </div>
    </div>


  </div>
</div>
<?php echo $footer; ?>
