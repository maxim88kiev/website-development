<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
	<div class="page-header">
		<div class="container-fluid">
			<div class="pull-right">
				<button type="submit" form="form-buyoneclick" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
				<a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
			</div>
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
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#tab_settings"><?php echo $text_tab_settings; ?></a></li>
			<li><a data-toggle="tab" href="#tab_sold"><?php echo $text_tab_sold; ?></a></li>
			<li><a data-toggle="tab" href="#tab_sale"><?php echo $text_tab_sale; ?></a></li>
			<li><a data-toggle="tab" href="#tab_bestseller"><?php echo $text_tab_bestseller; ?></a></li>
			<li><a data-toggle="tab" href="#tab_novelty"><?php echo $text_tab_novelty; ?></a></li>
			<li><a data-toggle="tab" href="#tab_last"><?php echo $text_tab_last; ?></a></li>
			<li><a data-toggle="tab" href="#tab_freeshipping"><?php echo $text_tab_freeshipping; ?></a></li>
			<li><a data-toggle="tab" href="#tab_custom"><?php echo $text_tab_custom; ?></a></li>
		</ul>
		<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-html" class="form-horizontal">
			<div class="tab-content">
				<div class="tab-pane active" id="tab_settings">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_settings_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_position"><?php echo $entry_topstickers_position; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_position" id="topstickers_position" class="form-control">
										<?php if ($topstickers_position) { ?>
											<option value="1" selected="selected"><?php echo $text_topright; ?></option>
											<option value="0"><?php echo $text_topleft; ?></option>
										<?php } else { ?>
											<option value="1"><?php echo $text_topright; ?></option>
											<option value="0" selected="selected"><?php echo $text_topleft; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_status"><?php echo $entry_topstickers_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_status" id="topstickers_status" class="form-control">
										<?php if ($topstickers_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_sold">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_sold_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_sold_text"><?php echo $entry_sold_text; ?></label>
								<div class="col-sm-8">
									<?php foreach ($languages as $language) { ?>
										<div class="input-group pull-left">
											<span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
											<input type="text" name="topstickers_sold_text[<?php echo $language['language_id']; ?>]" value="<?php echo isset($topstickers_sold_text[$language['language_id']]) ? $topstickers_sold_text[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_sold_text; ?>" class="form-control" />
										</div>
									<?php } ?>
									<!-- <input type="text" name="topstickers_sold_text" value="<?php echo $topstickers_sold_text; ?>" placeholder="<?php echo $topstickers_sold_text; ?>" id="topstickers_sold_text" class="form-control"> -->
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_sold_bg; ?>"><?php echo $entry_sold_bg; ?></label>
								<div class="col-sm-8 color_input">
									<div class="input-group">
										<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $topstickers_sold_bg?>;"></i></span>
										<input type="text" value="<?php echo $topstickers_sold_bg; ?>" id="topstickers_sold_bg" class="form-control col-xs-8" name="topstickers_sold_bg" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_sold_status"><?php echo $entry_sold_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_sold_status" id="topstickers_sold_status" class="form-control">
										<?php if ($topstickers_sold_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_sale">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_sale_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_sale_text"><?php echo $entry_sale_text; ?></label>
								<div class="col-sm-8">
									<?php foreach ($languages as $language) { ?>
										<div class="input-group pull-left">
											<span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
											<input type="text" name="topstickers_sale_text[<?php echo $language['language_id']; ?>]" value="<?php echo isset($topstickers_sale_text[$language['language_id']]) ? $topstickers_sale_text[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_sale_text; ?>" class="form-control" />
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_sale_bg; ?>"><?php echo $entry_sale_bg; ?></label>
								<div class="col-sm-8 color_input">
									<div class="input-group">
										<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $topstickers_sale_bg?>;"></i></span>
										<input type="text" value="<?php echo $topstickers_sale_bg; ?>" id="topstickers_sale_bg" class="form-control col-xs-8" name="topstickers_sale_bg" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_sale_status"><?php echo $entry_sale_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_sale_status" id="topstickers_sale_status" class="form-control">
										<?php if ($topstickers_sale_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_bestseller">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_bestseller_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_bestseller_text"><?php echo $entry_bestseller_text; ?></label>
								<div class="col-sm-8">
									<?php foreach ($languages as $language) { ?>
										<div class="input-group pull-left">
											<span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
											<input type="text" name="topstickers_bestseller_text[<?php echo $language['language_id']; ?>]" value="<?php echo isset($topstickers_bestseller_text[$language['language_id']]) ? $topstickers_bestseller_text[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_bestseller_text; ?>" class="form-control" />
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_bestseller_bg; ?>"><?php echo $entry_bestseller_bg; ?></label>
								<div class="col-sm-8 color_input">
									<div class="input-group">
										<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $topstickers_bestseller_bg?>;"></i></span>
										<input type="text" value="<?php echo $topstickers_bestseller_bg; ?>" id="topstickers_bestseller_bg" class="form-control col-xs-8" name="topstickers_bestseller_bg" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_bestseller_numbers; ?>"><?php echo $entry_bestseller_numbers; ?></label>
								<div class="col-sm-8">
									<input type="text" value="<?php echo $topstickers_bestseller_numbers; ?>" id="topstickers_bestseller_numbers" class="form-control" name="topstickers_bestseller_numbers" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_bestseller_status"><?php echo $entry_bestseller_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_bestseller_status" id="topstickers_bestseller_status" class="form-control">
										<?php if ($topstickers_bestseller_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_novelty">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_novelty_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_novelty_text"><?php echo $entry_novelty_text; ?></label>
								<div class="col-sm-8">
									<?php foreach ($languages as $language) { ?>
										<div class="input-group pull-left">
											<span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
											<input type="text" name="topstickers_novelty_text[<?php echo $language['language_id']; ?>]" value="<?php echo isset($topstickers_novelty_text[$language['language_id']]) ? $topstickers_novelty_text[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_novelty_text; ?>" class="form-control" />
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_novelty_bg; ?>"><?php echo $entry_novelty_bg; ?></label>
								<div class="col-sm-8 color_input">
									<div class="input-group">
										<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $topstickers_novelty_bg?>;"></i></span>
										<input type="text" value="<?php echo $topstickers_novelty_bg; ?>" id="topstickers_novelty_bg" class="form-control col-xs-8" name="topstickers_novelty_bg" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_novelty_days; ?>"><?php echo $entry_novelty_days; ?></label>
								<div class="col-sm-8">
									<input type="text" value="<?php echo $topstickers_novelty_days; ?>" id="topstickers_novelty_days" class="form-control col-sm-8" name="topstickers_novelty_days" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_novelty_status"><?php echo $entry_novelty_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_novelty_status" id="topstickers_novelty_status" class="form-control">
										<?php if ($topstickers_novelty_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_last">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_last_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_last_text"><?php echo $entry_last_text; ?></label>
								<div class="col-sm-8">
									<?php foreach ($languages as $language) { ?>
										<div class="input-group pull-left">
											<span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
											<input type="text" name="topstickers_last_text[<?php echo $language['language_id']; ?>]" value="<?php echo isset($topstickers_last_text[$language['language_id']]) ? $topstickers_last_text[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_last_text; ?>" class="form-control" />
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_last_bg; ?>"><?php echo $entry_last_bg; ?></label>
								<div class="col-sm-8 color_input">
									<div class="input-group">
										<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $topstickers_last_bg?>;"></i></span>
										<input type="text" value="<?php echo $topstickers_last_bg; ?>" id="topstickers_last_bg" class="form-control col-xs-8" name="topstickers_last_bg" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_last_numbers; ?>"><?php echo $entry_last_numbers; ?></label>
								<div class="col-sm-8">
									<input type="text" value="<?php echo $topstickers_last_numbers; ?>" id="topstickers_last_numbers" class="form-control" name="topstickers_last_numbers" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_last_status"><?php echo $entry_last_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_last_status" id="topstickers_last_status" class="form-control">
										<?php if ($topstickers_last_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_freeshipping">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_freeshipping_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_freeshipping_text"><?php echo $entry_freeshipping_text; ?></label>
								<div class="col-sm-8">
									<?php foreach ($languages as $language) { ?>
										<div class="input-group pull-left">
											<span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
											<input type="text" name="topstickers_freeshipping_text[<?php echo $language['language_id']; ?>]" value="<?php echo isset($topstickers_freeshipping_text[$language['language_id']]) ? $topstickers_freeshipping_text[$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_freeshipping_text; ?>" class="form-control" />
										</div>
									<?php } ?>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_freeshipping_bg; ?>"><?php echo $entry_freeshipping_bg; ?></label>
								<div class="col-sm-8 color_input">
									<div class="input-group">
										<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $topstickers_freeshipping_bg?>;"></i></span>
										<input type="text" value="<?php echo $topstickers_freeshipping_bg; ?>" id="topstickers_freeshipping_bg" class="form-control col-xs-8" name="topstickers_freeshipping_bg" />
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_freeshipping_price; ?>"><?php echo $entry_freeshipping_price; ?></label>
								<div class="col-sm-8">
									<input type="text" value="<?php echo $topstickers_freeshipping_price; ?>" id="topstickers_freeshipping_price" class="form-control" name="topstickers_freeshipping_price" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label" for="topstickers_freeshipping_status"><?php echo $entry_freeshipping_status; ?></label>
								<div class="col-sm-8">
									<select name="topstickers_freeshipping_status" id="topstickers_freeshipping_status" class="form-control">
										<?php if ($topstickers_freeshipping_status) { ?>
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
					</div>
				</div>
				<div class="tab-pane" id="tab_custom">
					<div class="lead well well-sm text-info">
						<strong><?php echo $text_tab_custom_title; ?></strong>
					</div>
					<div class="form-group">
						<div class="col-sm-12">

								<table id="topstickers_custom" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<td class="text-left" style="width: 20%;"><?php echo $entry_custom_topstickers_title; ?></td>
											<td class="text-left" style="width: 30%;"><?php echo $entry_custom_topstickers_text; ?></td>
											<td class="text-left" style="width: 25%;"><?php echo $entry_custom_topstickers_bg; ?></td>
											<td class="text-right" style="width: 20%;"><?php echo $entry_custom_topstickers_status; ?></td>
											<td style="width: 4%;"></td>
										</tr>
									</thead>
									<tbody>
										<?php $custom_topsticker_row = 0; ?>
										<?php foreach ($custom_topstickers as $custom_topsticker) { ?>
											<tr id="custom_topsticker-row<?php echo $custom_topsticker_row; ?>">
												<td class="hidden"><input type="hidden" name="custom_topsticker[<?php echo $custom_topsticker_row; ?>][topsticker_id]" value="<?php echo $custom_topsticker['topsticker_id']; ?>" class="hidden" /></td>
												<td class="text-left" style="width: 20%;">
													<input type="text" name="custom_topsticker[<?php echo $custom_topsticker_row; ?>][name]" value="<?php echo $custom_topsticker['name']; ?>" placeholder="<?php echo $entry_custom_topstickers_title; ?>" class="form-control" />
												</td>
												<td class="text-left" style="width: 30%;">
													<?php foreach ($languages as $language) { ?>
														<div class="input-group pull-left"><span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> </span>
															<input type="text" name="custom_topsticker[<?php echo $custom_topsticker_row; ?>][text][<?php echo $language['language_id']; ?>]" value="<?php echo isset($custom_topsticker['text'][$language['language_id']]) ? $custom_topsticker['text'][$language['language_id']] : ''; ?>" placeholder="<?php echo $entry_custom_topstickers_text; ?>" class="form-control" />
														</div>
														<?php  /*if (isset($error_banner_image[$image_row][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $error_banner_image[$image_row][$language['language_id']]; ?></div>
														<?php } */ ?>
													<?php } ?>
												</td>
												<td class="text-left" style="width: 25%;">
													<div class="col-sm-8 color_input">
														<div class="input-group">
															<span class="input-group-addon" style="border-bottom-right-radius:0; border-top-right-radius:0; padding: 4px 8px;"><i class="fa fa-circle fa-2x fa-fw" aria-hidden="true" style="color:<?php echo $custom_topsticker['bg_color']; ?>;"></i></span>
															<input type="text" value="<?php echo $custom_topsticker['bg_color']; ?>" class="form-control col-xs-8" name="custom_topsticker[<?php echo $custom_topsticker_row; ?>][bg_color]" />
														</div>
													</div>
												</td>
												<td class="text-right" style="width: 20%;">
													<select name="custom_topsticker[<?php echo $custom_topsticker_row; ?>][status]" class="form-control">
														<?php if ($custom_topsticker['status']) { ?>
															<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
															<option value="0"><?php echo $text_disabled; ?></option>
														<?php } else { ?>
															<option value="1"><?php echo $text_enabled; ?></option>
															<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
														<?php } ?>
													</select>
												</td>
												<td class="text-right" style="width: 5%;">
													<button type="button" onclick="$('#custom_topsticker-row<?php echo $custom_topsticker_row; ?>, .tooltip').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger">
														<i class="fa fa-minus-circle"></i>
													</button>
												</td>
											</tr>
										<?php $custom_topsticker_row++; ?>
										<?php } ?>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="4"></td>
											<td class="text-right">
												<button type="button" onclick="addCustomTopsticker();" data-toggle="tooltip" title="<?php echo $button_custom_topsticker_add; ?>" class="btn btn-primary">
													<i class="fa fa-plus-circle"></i>
												</button>
											</td>
										</tr>
									</tfoot>
								</table>

						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {

	  $('.color_input input').ColorPicker({
	    onChange: function (hsb, hex, rgb, el) {
	      $(el).val("#" +hex);
	      $(el).parent().find('.fa').css("color", "#" + hex);
		  // console.log(hex);
	    },
	    onShow: function (colpkr) {
	      $(colpkr).show();
	      return false;
	    },
	    onHide: function (colpkr) {
	      $(colpkr).hide();
	      return false;
	    }
	  });
	});
</script>
<script type="text/javascript"><!--
	var custom_topsticker_row = <?php echo $custom_topsticker_row; ?>;

	function addCustomTopsticker() {
		// console.log($('#topstickers_custom tbody tr:last td.hidden > input').val());
		var last_topsticker_id = parseInt($('#topstickers_custom tbody tr:last td.hidden > input').val()) + 1;
		html  = '<tr id="custom_topsticker-row' + custom_topsticker_row + '">';
		html += '  <td class="hidden"><input type="hidden" name="custom_topsticker[' + custom_topsticker_row + '][topsticker_id]" value="' + last_topsticker_id + '" class="hidden" /></td>';
		html += '  <td class="text-left" style="width: 20%;"><input type="text" name="custom_topsticker[' + custom_topsticker_row + '][name]" value="" placeholder="<?php echo $entry_custom_topstickers_title; ?>" class="form-control" /></td>';
		html += '  <td class="text-left" style="width: 30%;">';
		<?php foreach ($languages as $language) { ?>
		html += '    <div class="input-group pull-left">';
		html += '      <span class="input-group-addon"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /></span><input type="text" name="custom_topsticker[' + custom_topsticker_row + '][text][<?php echo $language['language_id']; ?>]" value="" placeholder="<?php echo $entry_custom_topstickers_text; ?>" class="form-control" />';
		html += '    </div>';
		<?php } ?>
		html += '  </td>';
		html += '  <td class="text-left" style="width: 25%;"><input type="text" name="custom_topsticker[' + custom_topsticker_row + '][bg_color]" value="" placeholder="<?php echo $entry_custom_topstickers_bg; ?>" class="form-control" /></td>';
		html += '  <td class="text-right" style="width: 20%;"><input type="text" name="custom_topsticker[' + custom_topsticker_row + '][status]" value="" placeholder="<?php echo $entry_custom_topstickers_status; ?>" class="form-control" /></td>';
		html += '  <td class="text-right" style="width: 5%;"><button type="button" onclick="$(\'#custom_topsticker-row' + custom_topsticker_row  + '\').remove();" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
		html += '</tr>';

		$('#topstickers_custom tbody').append(html);

		custom_topsticker_row++;
	}
//--></script>
<?php echo $footer; ?>