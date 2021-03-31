<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-seo-tags-generator" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
				<?php foreach ($breadcrumbs as $breadcrumb) { ?>
					<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
				<?php } ?>
      </ul>
    </div>
  </div><!-- /page-header -->
  <div class="container-fluid">
		<?php if ($error_warning) { ?>
			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>
		<?php } ?>
		<?php if (!empty($text_success)) { ?>
			<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> <?php echo $text_success; ?>
			</div>
		<?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h2 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h2>
      </div>



      <!-- Customization.Begin -->
      <div class="panel-body">
				<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-seo-tags-generator" class="form-horizontal">

					<?php if ($show_licence_entry || !$show_work_area) { ?>
						<!-- licence -->
						<div class="form-group" style="margin-bottom: 20px;">
							<label class="col-sm-2 control-label"	for="input-licence"><?php echo $entry_licence; ?>:</label>
							<div class="col-sm-10">
								<input id="input-licence" type="text"	name="seo_tags_generator_licence"	value="<?php echo isset($seo_tags_generator_licence) ? $seo_tags_generator_licence : ''; ?>" class="form-control" />
								<?php if (isset($errors['licence'])) { ?><div class="text-danger"><?php echo $errors['licence']; ?></div><?php } ?>
								<?php if (isset($warning['licence'])) { ?><div class="text-warning"><?php echo $warning['licence']; ?></div><?php } ?>
							</div>
						</div>
					<?php } ?>


					<div id="module-work-area"<?php echo $show_work_area ? '' : 'class="hidden"'; ?> >

						<fieldset class="box">
							<h3 class="box-title"><?php echo $fieldset_setting; ?></h3>

							<!-- module status -->
							<div class="form-group option-selector option-status" style="padding-bottom: 0; <?php echo !$show_licence_entry ? 'padding-top: 0' : ''; ?> ">
								<label class="col-sm-2 control-label" for="input-status-mod"><?php echo $entry_status; ?>:</label>
								<div class="col-sm-2">
									<select name="seo_tags_generator_status" id="input-status-mod" class="form-control">
										<?php if ($seo_tags_generator_status) { ?>
											<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
											<option value="0"><?php echo $text_disabled; ?></option>
										<?php } else { ?>
											<option value="1"><?php echo $text_enabled; ?></option>
											<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border-color: #e1e1e1" />

							<!-- generate mode for category -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_category"><?php echo $entry_generate_mode_category; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_category" id="seo_tags_generator_generate_mode_category" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_category ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border: none;" />

							<!-- generate mode for category : h1 -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_category_h1"><?php echo $entry_generate_mode_category_h1; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_category_h1" id="seo_tags_generator_generate_mode_category_h1" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_category_h1 ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border: none;" />

							<!-- generate mode for category : text -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_category_text"><?php echo $entry_generate_mode_category_text; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_category_text" id="seo_tags_generator_generate_mode_category_text" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_category_text ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border-color: #e1e1e1" />

							<!-- generate mode for product -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_product"><?php echo $entry_generate_mode_product; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_product" id="seo_tags_generator_generate_mode_product" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_product ? 'selected="selected"' : ''; ?>><?php echo $item ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border: none;" />

							<!-- generate mode for product : h1 -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_product_h1"><?php echo $entry_generate_mode_product_h1; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_product_h1" id="seo_tags_generator_generate_mode_product_h1" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_product_h1 ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border: none;" />

							<!-- generate mode for product : text -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_product_text"><?php echo $entry_generate_mode_product_text; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_product_text" id="seo_tags_generator_generate_mode_product_text" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_product_text ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border-color: #e1e1e1" />

							<!-- generate mode for manufacturer -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_manufacturer"><?php echo $entry_generate_mode_manufacturer; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_manufacturer" id="seo_tags_generator_generate_mode_manufacturer" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
											<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_manufacturer ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border: none;" />

							<!-- generate mode for manufacturer : h1 -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_manufacturer_h1"><?php echo $entry_generate_mode_manufacturer_h1; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_manufacturer_h1" id="seo_tags_generator_generate_mode_manufacturer_h1" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_manufacturer_h1 ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border: none;"

							<!-- generate mode for manufacturer : text -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_generate_mode_manufacturer_text"><?php echo $entry_generate_mode_manufacturer_text; ?>:</label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_generate_mode_manufacturer_text" id="seo_tags_generator_generate_mode_manufacturer_text" class="form-control">
										<?php foreach ($a_generate_mode as $key => $item) { ?>
										<option value="<?php echo $key; ?>" <?php echo $key == $seo_tags_generator_generate_mode_manufacturer_text ? 'selected="selected"' : ''; ?>><?php echo $item; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border-color: #e1e1e1" />

							<!-- inheritance -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_inheritance"><?php echo $entry_inheritance; ?>: <span data-toggle="tooltip" title="<?php echo $entry_inheritance_tooltip; ?>"></span></label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_inheritance" id="seo_tags_generator_inheritance" class="form-control">
										<?php if ($seo_tags_generator_inheritance) { ?>
											<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
											<option value="0"><?php echo $text_disabled; ?></option>
										<?php } else { ?>
											<option value="1"><?php echo $text_enabled; ?></option>
											<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<hr style="border-color: #e1e1e1" />

							<!-- declension -->
							<div class="form-group option-selector">
								<label class="col-sm-2 control-label" for="seo_tags_generator_declension"><?php echo $entry_declension; ?>: <span data-toggle="tooltip" title="<?php echo $entry_declension_tooltip; ?>"></span></label>
								<div class="col-sm-3">
									<select name="seo_tags_generator_declension" id="seo_tags_generator_declension" class="form-control">
										<?php if ($seo_tags_generator_declension) { ?>s
											<option value="1" selected="selected"><?php echo $text_enabled; ?></option>
											<option value="0"><?php echo $text_disabled; ?></option>
										<?php } else { ?>
											<option value="1"><?php echo $text_enabled; ?></option>
											<option value="0" selected="selected"><?php echo $text_disabled; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

						</fieldset>



						<!-- FORMULAS . BEGIN -->
						<div class="box">
							<h3 class="box-title"><?php echo $fieldset_formula_common; ?></h3>

							<!-- category.begin
							============================================================================================= -->
							<fieldset class="row formula-row">
								<div class="col-sm-12">
									<h4 class="essence-title"><?php echo $tab_category; ?></h4>
									<ul class="nav nav-tabs" id="language-category">
										<?php foreach ($languages as $language) { ?>
											<li><a href="#language-category<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
										<?php } ?>
									</ul>
									<div class="tab-content">
										<?php foreach ($languages as $language) { ?>
											<div class="tab-pane fade" id="language-category<?php echo $language['language_id']; ?>">

												<!-- title -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-category-formula-title-lang<?php echo $language['language_id']; ?>"><?php echo $entry_category_title; ?>:</label>
													<div class="col-sm-10">
														<input id="input-category-formula-title-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_category_title[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_category_title[$language['language_id']]) ? $seo_tags_generator_category_title[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-category-formula-title-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[count_products]</span>
																	<span class="var">[min_price]</span>
																	<span class="var">[max_price]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item">
																	<span class="var">[shop_name]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['category_title'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['category_title'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- description -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-category-formula-description-lang<?php echo $language['language_id']; ?>"><?php echo $entry_category_description; ?>:</label>
													<div class="col-sm-10">
														<textarea id="input-category-formula-description-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_category_description[<?php echo $language['language_id']; ?>]" class="form-control cursor-tracking" rows="3"><?php echo isset($seo_tags_generator_category_description[$language['language_id']]) ? $seo_tags_generator_category_description[$language['language_id']] : ''; ?></textarea>
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-category-formula-description-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[count_products]</span>
																	<span class="var">[min_price]</span>
																	<span class="var">[max_price]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['category_description'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['category_description'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- keyword -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-category-formula-keyword-lang<?php echo $language['language_id']; ?>"><?php echo $entry_category_keyword; ?>:</label>
													<div class="col-sm-10">
														<input id="input-category-formula-keyword-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_category_keyword[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_category_keyword[$language['language_id']]) ? $seo_tags_generator_category_keyword[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-category-formula-keyword-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['category_keyword'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['category_keyword'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- h1 -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-category-formula-h1-lang<?php echo $language['language_id']; ?>"><?php echo $entry_category_h1; ?>:</label>
													<div class="col-sm-10">
														<input id="input-category-formula-h1-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_category_h1[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_category_h1[$language['language_id']]) ? $seo_tags_generator_category_h1[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-category-formula-h1-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[count_products]</span>
																	<span class="var">[min_price]</span>
																	<span class="var">[max_price]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item">
																	<span class="var">[shop_name]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['category_h1'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['category_h1'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- text -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-category-formula-text-lang<?php echo $language['language_id']; ?>"><?php echo $entry_category_text; ?>:</label>
													<div class="col-sm-10">
														<textarea id="input-category-formula-text-lang<?php echo $language['language_id']; ?>" name="seo_tags_generator_category_text[<?php echo $language['language_id']; ?>]" class="form-control cursor-tracking tinymce"><?php echo isset($seo_tags_generator_category_text[$language['language_id']]) ? $seo_tags_generator_category_text[$language['language_id']] : ''; ?></textarea>
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-category-formula-text-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[original_text]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[count_products]</span>
																	<span class="var">[min_price]</span>
																	<span class="var">[max_price]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['category_text'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['category_text'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

											</div>
										<?php } ?>
									</div>
								</div>
							</fieldset>

							<!-- product.begin
							============================================================================================= -->
							<fieldset class="row formula-row">
								<div class="col-sm-12">
									<h4 class="essence-title"><?php echo $tab_product; ?></h4>
									<ul class="nav nav-tabs" id="language-product">
										<?php foreach ($languages as $language) { ?>
											<li><a href="#language-product<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
										<?php } ?>
									</ul>
									<div class="tab-content">
										<?php foreach ($languages as $language) { ?>
											<div class="tab-pane fade" id="language-product<?php echo $language['language_id']; ?>">

												<!-- title -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-product-formula-title-lang<?php echo $language['language_id']; ?>"><?php echo $entry_product_title; ?>:</label>
													<div class="col-sm-10">
														<input id="input-product-formula-title-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_product_title[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_product_title[$language['language_id']]) ? $seo_tags_generator_product_title[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-product-formula-title-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[product_name]</span>
																	<?php if ($exist_product_h1) { ?><span class="var">[static_product_h1]</span><?php } ?>
																	<span class="var">[model]</span>
																	<?php if ($exist_model_synonym) { ?><?php if ($exist_model_synonym) { ?><span class="var var_mod-synonyms">[model_synonym]</span><?php } ?><?php } ?>
																	<span class="var">[sku]</span>
																	<span class="var">[upc]</span>
																	<span class="var">[ean]</span>
																	<span class="var">[jan]</span>
																	<span class="var">[isbn]</span>
																	<span class="var">[mpn]</span>
																	<span class="var">[manufacturer]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																	<span class="var">[price]</span>
																	<span class="var">[special]</span>
																	<span class="var">[rating]</span>
																	<span class="var">[reviews]</span>
																	<span class="var">[count_sales]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[shop_name]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['product_title'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['product_title'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- description -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-product-formula-description-lang<?php echo $language['language_id']; ?>"><?php echo $entry_product_description; ?>:</label>
													<div class="col-sm-10">
														<textarea id="input-product-formula-description-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_product_description[<?php echo $language['language_id']; ?>]" class="form-control cursor-tracking" rows="3"><?php echo isset($seo_tags_generator_product_description[$language['language_id']]) ? $seo_tags_generator_product_description[$language['language_id']] : ''; ?></textarea>
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-product-formula-description-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[product_name]</span>
																	<?php if ($exist_product_h1) { ?><span class="var">[static_product_h1]</span><?php } ?>
																	<span class="var">[model]</span>
																	<?php if ($exist_model_synonym) { ?><span class="var var_mod-synonyms">[model_synonym]</span><?php } ?>
																	<span class="var">[sku]</span>
																	<span class="var">[upc]</span>
																	<span class="var">[ean]</span>
																	<span class="var">[jan]</span>
																	<span class="var">[isbn]</span>
																	<span class="var">[mpn]</span>
																	<span class="var">[manufacturer]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																	<span class="var">[price]</span>
																	<span class="var">[special]</span>
																	<span class="var">[rating]</span>
																	<span class="var">[reviews]</span>
																	<span class="var">[count_sales]</span>
																</div>
																<div class="vars-item var-attributes-container">
																	<span class="var var-attributes">[attributes]</span>
																	<span class="var var-attribute-index var-attribute-index-1">[attribute index="1"]</span>
																	<span class="var var-attribute-index var-attribute-index-2">[attribute index="2"]</span>
																	<span class="var var-attribute-index var-attribute-index-3">[attribute index="3"]</span>
																	<span class="var var-attribute-index var-attribute-index-4">[attribute index="4"]</span>
																	<span class="var var-attribute-index var-attribute-index-5">[attribute index="5"]</span>
																	<span class="var var-attribute-index var-attribute-index-6">[attribute index="6"]</span>
																	<span class="var var-attribute-index var-attribute-index-7">[attribute index="7"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																	<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['product_description'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['product_description'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- keyword -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-product-formula-keyword-lang<?php echo $language['language_id']; ?>"><?php echo $entry_product_keyword; ?>:</label>
													<div class="col-sm-10">
														<input id="input-product-formula-keyword-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_product_keyword[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_product_keyword[$language['language_id']]) ? $seo_tags_generator_product_keyword[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-product-formula-keyword-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[product_name]</span>
																	<?php if ($exist_product_h1) { ?><span class="var">[static_product_h1]</span><?php } ?>
																	<span class="var">[model]</span>
																	<?php if ($exist_model_synonym) { ?><span class="var var_mod-synonyms">[model_synonym]</span><?php } ?>
																	<span class="var">[sku]</span>
																	<span class="var">[upc]</span>
																	<span class="var">[ean]</span>
																	<span class="var">[jan]</span>
																	<span class="var">[isbn]</span>
																	<span class="var">[mpn]</span>
																	<span class="var">[manufacturer]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																	<span class="var">[category_name_singular_nominative]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['product_keyword'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['product_keyword'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- h1 -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-product-formula-h1-lang<?php echo $language['language_id']; ?>"><?php echo $entry_product_h1; ?>:</label>
													<div class="col-sm-10">
														<input id="input-product-formula-h1-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_product_h1[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_product_h1[$language['language_id']]) ? $seo_tags_generator_product_h1[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-product-formula-h1-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[product_name]</span>
																	<?php if ($exist_product_h1) { ?><span class="var">[static_product_h1]</span><?php } ?>
																	<span class="var">[model]</span>
																	<?php if ($exist_model_synonym) { ?><span class="var var_mod-synonyms">[model_synonym]</span><?php } ?>
																	<span class="var">[sku]</span>
																	<span class="var">[upc]</span>
																	<span class="var">[ean]</span>
																	<span class="var">[jan]</span>
																	<span class="var">[isbn]</span>
																	<span class="var">[mpn]</span>
																	<span class="var">[manufacturer]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																	<span class="var">[price]</span>
																	<span class="var">[special]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																		<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['product_h1'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['product_h1'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- text -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-product-formula-text-lang<?php echo $language['language_id']; ?>"><?php echo $entry_product_text; ?>:</label>
													<div class="col-sm-10">
														<textarea id="input-product-formula-text-lang<?php echo $language['language_id']; ?>" name="seo_tags_generator_product_text[<?php echo $language['language_id']; ?>]" class="form-control cursor-tracking tinymce" ><?php echo isset($seo_tags_generator_product_text[$language['language_id']]) ? $seo_tags_generator_product_text[$language['language_id']] : ''; ?></textarea>
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-product-formula-description-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[original_text]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[product_name]</span>
																	<?php if ($exist_product_h1) { ?><span class="var">[static_product_h1]</span><?php } ?>
																	<span class="var">[model]</span>
																	<?php if ($exist_model_synonym) { ?><span class="var var_mod-synonyms">[model_synonym]</span><?php } ?>
																	<span class="var">[sku]</span>
																	<span class="var">[upc]</span>
																	<span class="var">[ean]</span>
																	<span class="var">[jan]</span>
																	<span class="var">[isbn]</span>
																	<span class="var">[mpn]</span>
																	<span class="var">[manufacturer]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																	<span class="var">[price]</span>
																	<span class="var">[special]</span>
																	<span class="var">[rating]</span>
																	<span class="var">[reviews]</span>
																	<span class="var">[count_sales]</span>
																</div>
																<div class="vars-item var-attributes-container">
																	<span class="var var-attributes">[attributes]</span>
																	<span class="var var-attribute-index var-attribute-index-1">[attribute index="1"]</span>
																	<span class="var var-attribute-index var-attribute-index-2">[attribute index="2"]</span>
																	<span class="var var-attribute-index var-attribute-index-3">[attribute index="3"]</span>
																	<span class="var var-attribute-index var-attribute-index-4">[attribute index="4"]</span>
																	<span class="var var-attribute-index var-attribute-index-5">[attribute index="5"]</span>
																	<span class="var var-attribute-index var-attribute-index-6">[attribute index="6"]</span>
																	<span class="var var-attribute-index var-attribute-index-7">[attribute index="7"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[category_name]</span>
																	<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
																	<?php if ($seo_tags_generator_declension) { ?>
																	<span class="var">[category_name_singular_nominative]</span>
																		<span class="var">[category_name_plural_nominative]</span>
																		<span class="var">[category_name_plural_genitive]</span>
																	<?php } ?>
																</div>
																<div class="vars-item">
																	<span class="var">[category_level]</span>
																	<span class="var">[category_nested]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD]</span>
																	<span class="var">[category_nested sort="1"]</span>
																	<span class="var">[category_nested SORT_FROM_PARENT_TO_CHILD exclude="1"]</span>
																</div>
																<div class="vars-item">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['product_text'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['product_text'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

											</div>
										<?php } ?>
									</div>
								</div>
							</fieldset>

							<!-- manufacturer.begin
							============================================================================================= -->
							<fieldset class="row formula-row">
								<div class="col-sm-12">
									<h4 class="essence-title"><?php echo $tab_manufacturer; ?></h4>
									<ul class="nav nav-tabs" id="language-manufacturer">
										<?php foreach ($languages as $language) { ?>
											<li><a href="#language-manufacturer<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
										<?php } ?>
									</ul>
									<div class="tab-content">
										<?php foreach ($languages as $language) { ?>
											<div class="tab-pane fade" id="language-manufacturer<?php echo $language['language_id']; ?>">

												<!-- title -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-manufacturer-formula-title-lang<?php echo $language['language_id']; ?>"><?php echo $entry_manufacturer_title; ?>:</label>
													<div class="col-sm-10">
														<input id="input-manufacturer-formula-title-lang<?php echo $language['language_id']; ?>" type="text"
																	 name="seo_tags_generator_manufacturer_title[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_manufacturer_title[$language['language_id']]) ? $seo_tags_generator_manufacturer_title[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-manufacturer-formula-title-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[manufacturer_name]</span>
																	<?php if ($exist_manufacturer_h1) { ?><?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?><?php } ?>
																</div>
																<div class="vars-item custom-variables">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['manufacturer_title'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['manufacturer_title'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- description -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-manufacturer-formula-description-lang<?php echo $language['language_id']; ?>"><?php echo $entry_manufacturer_description; ?>:</label>
													<div class="col-sm-10">
														<textarea id="input-manufacturer-formula-description-lang<?php echo $language['language_id']; ?>" type="text" name="seo_tags_generator_manufacturer_description[<?php echo $language['language_id']; ?>]" class="form-control cursor-tracking" rows="3"><?php echo isset($seo_tags_generator_manufacturer_description[$language['language_id']]) ? $seo_tags_generator_manufacturer_description[$language['language_id']] : ''; ?></textarea>
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-manufacturer-formula-description-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[manufacturer_name]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																</div>
																<div class="vars-item custom-variables">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['manufacturer_description'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['manufacturer_description'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- keyword -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-manufacturer-formula-keyword-lang<?php echo $language['language_id']; ?>"><?php echo $entry_manufacturer_keyword; ?>:</label>
													<div class="col-sm-10">
														<input id="input-manufacturer-formula-keyword-lang<?php echo $language['language_id']; ?>" type="text"
																	 name="seo_tags_generator_manufacturer_keyword[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_manufacturer_keyword[$language['language_id']]) ? $seo_tags_generator_manufacturer_keyword[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-manufacturer-formula-keyword-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[manufacturer_name]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['manufacturer_keyword'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['manufacturer_keyword'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- h1 -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-manufacturer-formula-h1-lang<?php echo $language['language_id']; ?>"><?php echo $entry_manufacturer_h1; ?>:</label>
													<div class="col-sm-10">
														<input id="input-manufacturer-formula-h1-lang<?php echo $language['language_id']; ?>" type="text"
																	 name="seo_tags_generator_manufacturer_h1[<?php echo $language['language_id']; ?>]" value="<?php echo isset($seo_tags_generator_manufacturer_h1[$language['language_id']]) ? $seo_tags_generator_manufacturer_h1[$language['language_id']] : ''; ?>" class="form-control cursor-tracking" />
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-manufacturer-formula-h1-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[manufacturer_name]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																</div>
																<div class="vars-item custom-variables">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																	<span class="var">&lt;if&gt;( [page_number] ) [page_number] &lt;/endif&gt;</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['manufacturer_h1'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['manufacturer_h1'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>

												<!-- text -->
												<div class="form-group">
													<label class="col-sm-2 control-label" for="input-manufacturer-formula-text-lang<?php echo $language['language_id']; ?>"><?php echo $entry_manufacturer_text; ?>:</label>
													<div class="col-sm-10">
														<textarea id="input-manufacturer-formula-text-lang<?php echo $language['language_id']; ?>" name="seo_tags_generator_manufacturer_text[<?php echo $language['language_id']; ?>]" class="form-control cursor-tracking tinymce" ><?php echo isset($seo_tags_generator_manufacturer_text[$language['language_id']]) ? $seo_tags_generator_manufacturer_text[$language['language_id']] : ''; ?></textarea>
														<div class="vars-main row">
															<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
															<div class="col-sm-10 vars-container" data-target="#input-manufacturer-formula-h1-lang<?php echo $language['language_id']; ?>">
																<div class="vars-item">
																	<span class="var">[manufacturer_name]</span>
																	<?php if ($exist_manufacturer_h1) { ?><span class="var">[static_manufacturer_h1]</span><?php } ?>
																</div>
																<div class="vars-item custom-variables">
																	<span class="var">[shop_name]</span>
																	<span class="var">[config_telephone]</span>
																</div>
																<div class="vars-item custom-variables">
																	<!-- <span class="var var_custom-variables">[custom]</span> -->
																</div>
															</div>
														</div>
														<?php if (isset($errors['manufacturer_text'][$language['language_id']])) { ?>
															<div class="text-danger"><?php echo $errors['manufacturer_text'][$language['language_id']]; ?></div>
														<?php } ?>
													</div>
												</div>


											</div>
										<?php } ?>
									</div>
								</div>
							</fieldset>
						</div>
						<!-- FORMULAS . END-->

						<!-- ATTRIBUTES . BEGIN -->
						<div class="box">
							<h3 class="box-title"><?php echo $fieldset_attributes_common; ?></h3>
							<fieldset class="row attributes-row">
								<div class="col-sm-12">
									<h4 class="essence-title"><?php echo $attributes_title; ?></h4>
									<div id="attributes-container">
										<?php $attribute_row = 1; ?>
										<?php $attribute_index = 1; ?>
										<?php foreach($seo_tags_generator_attributes as $item) { ?>
										<div class="attribute-row row" id="attribute-row-<?php echo $attribute_row; ?>">
											<div class="col-sm-2">[attribute index="<span class="attribute-index"><?php echo $attribute_index; ?></span>"]</div>
											<div class="col-sm-3">
												<select name="seo_tags_generator_attributes[<?php echo $attribute_row; ?>]" class="attributes-selector form-control <?php echo !$item ? 'is-error' : ''; ?>">
												<option value=""><?php echo $text_attribute_select; ?></option>
												<?php foreach($attributes_exist as $attribute) { ?>
												<option value="<?php echo $attribute['attribute_id']; ?>" <?php echo $item == $attribute['attribute_id'] ? 'selected="selected"' : ''; ?> ><?php echo $attribute['name']; ?></option>
												<?php } ?>
												</select>
											</div>
											<div class="col-sm-2">
												<button class="btn btn-danger btn-sm delete-attribute" type="button" data-target="attribute-row-<?php echo $attribute_row; ?>" data-toggle="tooltip" title="<?php echo $delete_attribute; ?>"><i class="fa fa-minus-circle"></i></button>
											</div>
										</div><!-- /attribute-row -->
										<?php $attribute_row++ ?>
										<?php $attribute_index++ ?>
										<?php } ?>

									</div>
									<?php if (isset($errors['attributes'])) { ?>
									<div class="attributes-error text-danger"><?php echo $errors['attributes']; ?></div>
									<?php } ?>
									<button class="btn btn-success btn-sm add-new-attribute" type="button" data-toggle="tooltip" title="<?php echo $add_attribute; ?>">
										<i class="fa fa-plus-circle"></i>
									</button>
								</div>
							</fieldset>
						</div>
						<!-- ATTRIBUTES . END-->

					</div><!-- /module-work-area-->
        </form>
      </div><!-- /panel-body-->
      <!-- /Customization.End -->


    </div><!-- /panel-default-->

    <div class="copywrite" style="padding: 10px 10px 0 10px; border: 1px dashed #ccc;">
			<p>
				&copy; <?php echo $text_author; ?>: <a href="http://sergetkach.com/link/272" target="_blank">Serge Tkach</a>
				<br/>
				<?php echo $text_author_support; ?>: <a href="mailto:sergetkach.help@gmail.com">sergetkach.help@gmail.com</a>
			</p>
    </div>

  </div><!-- /container-fluid-->
</div><!-- /content-->


<!-- js.begin-->
<script type="text/javascript">
$('#language-category a:first').tab('show');
$('#language-product a:first').tab('show');
$('#language-manufacturer a:first').tab('show');

// init global
var cursorPosition = false;
var lastIdentifier = false;
var hasActiveInput = false;

$('.cursor-tracking').focus(function () {
	cursorPosition = caretPosition($(this));
	lastIdentifier = "#" + $(this).attr('id');
	hasActiveInput = true;
});

//$('.cursor-tracking').focusout(function(){
//	console.log('focus out : ' + $(this).attr('id'));
//	hasActiveInput = false;
//});

$('.cursor-tracking').keydown(function (e) {
	if (hasActiveInput) {
		console.log('keydown():hasActiveInput');
		cursorPosition = caretPosition($(this));
		lastIdentifier = "#" + $(this).attr('id');
		console.log('keyup cursorPosition : ' + cursorPosition);
	}
});

$('.cursor-tracking').change(function (e) {
	lastIdentifier = "#" + $(this).attr('id');
	cursorPosition = caretPosition($(this));
});

$('.var').click(function () {
	var target = $(this).parent('.vars-item').parent('.vars-container').data('target');

	if (lastIdentifier !== target) {
		cursorPosition = false;
	}

	lastIdentifier = target;

	var value = $(target).val();
	var newElement = $(this).html(); newElement = newElement.replace(/&lt;/g, '<',); newElement = newElement.replace(/&gt;/g, '>');
	var partBeforeCursor = value.slice(0, cursorPosition);
	var partAfterCursor = value.slice(cursorPosition, value.length);

	if (cursorPosition === false) {
		if (value.length > 1) {
			var lastChar = value.slice(-1);
			if (lastChar != ' ') {
				value += ' ';
			}
		}
		$(target).val(value + newElement);
	} else {
		if (partBeforeCursor.length > 1) {
			var lastChar = partBeforeCursor.slice(-1);
			if (lastChar != ' ') {
				partBeforeCursor += ' ';
			}
		}
		lastChar = partAfterCursor.slice(0, 1);
		if (lastChar != ' ') {
			partAfterCursor = ' ' + partAfterCursor;
		}
		$(target).val(partBeforeCursor + newElement + partAfterCursor);

		cursorPosition = partBeforeCursor.length + (newElement + ' ').length;
		console.log('cursorPosition after var insert : ' + cursorPosition);
	}
});



/* Caret Position
 --------------------------------------------------------------------------- */
// http://qaru.site/questions/42834/get-cursor-position-in-characters-within-a-text-input-field
function caretPosition(input) {
	var start = input[0].selectionStart,
					end = input[0].selectionEnd,
					diff = end - start;

	if (start >= 0 && start == end) {
		// do cursor position actions, example:
		console.log('Cursor Position: ' + start);
	} else if (start >= 0) {
		// do ranged select actions, example:
		console.log('Cursor Position: ' + start + ' to ' + end + ' (' + diff + ' selected chars)');
	}

	return start;
}



/* Attributes
 -------------------------------------------------------------------------- */
var attributesExist = [];

$.ajax({
	url: 'index.php?route=extension/module/seo_tags_generator/getAttributeList&token=<?php echo $token; ?>',
	type: 'GET',
	dataType: 'json',
	success: function(json) {
		if ('success' === json['status']) {
			attributesExist = json['data'];
		} else {
			console.log('error on attribute selector get attribute list: extension/module/seo_tags_generator/getAttributeList');
		}
	},
	error: function( jqXHR, textStatus, errorThrown ){
		// Error ajax query
		console.log('AJAX query Error: ' + textStatus );
	},
});


var attributeRow = <?php echo $attribute_row; ?>;

$('body').on('click', '.add-new-attribute', function() {
	console.log('.add-new-attribute click()');

	var html = '';

	html += '<div class="attribute-row row" id="attribute-row-' + attributeRow + '">';

	html += '<div class="col-sm-2">';
	html += '[attribute index="<span class="attribute-index"> ... </span>"]';
	html += '</div>';

	html += '<div class="col-sm-3">';
	html += '<select name="seo_tags_generator_attributes[' + attributeRow + ']" class="attributes-selector form-control is-error">';
	html += '<option value=""><?php echo $text_attribute_select; ?></option>';

	for (var key in attributesExist) {
		html += '<option value="' + attributesExist[key]['attribute_id'] + '">' + attributesExist[key]['name'] + '</option>';
	}

	html += '</select>';
	html += '</div>';

	html += '<div class="col-sm-2">';
	html += '<button class="btn btn-danger btn-sm delete-attribute" type="button" data-target="attribute-row-' + attributeRow + '" data-toggle="tooltip" title="<?php echo $delete_attribute; ?>"><i class="fa fa-minus-circle"></i></button>';
	html += '</div>';

	html += '</div><!-- /attribute-row -->';

	$('#attributes-container').append(html);

	attributeRow++;

	setTimeout(function () {
		countAttributeIndex();
		checkViewAttributeVars();
	}, 350);
});


$('body').on('click', '.delete-attribute', function(e) {
	$('#' + $(this).data('target')).remove();

	setTimeout(function () {
		countAttributeIndex();
		checkViewAttributeVars();
	}, 100);

});


function countAttributeIndex() {
	var n = 1;

	$('.attribute-row .attribute-index').each(function() {
		$(this).html(n);
		n++;
	});
}


// check vars

$(function() {
	checkViewAttributeVars();
});

function checkViewAttributeVars() {
	console.log('checkViewAttributeVars() is called');

	var n = 1;
	var existAttributesVars = false;

	$('.var-attribute-index').hide();

	$('.attribute-row .attribute-index').each(function() {
		existAttributesVars = true;

		$('.var-attribute-index-' + n).show();

		console.log('n :' + n);
		n++;
	});

	if (existAttributesVars) {
		$('.var-attributes-container').show();
		$('.var-attributes').show();
	} else {
		$('.var-attributes-container').hide();
		$('.var-attributes').hide();
	}
}


$('body').on('change', '.attributes-selector', function() {
	if ($(this).val() !== '') {
		$(this).removeClass('is-error');
	} else {
		$(this).addClass('is-error');
	}

	$('.attributes-error.text-danger').hide();
});



/* licence tmp
 --------------------------------------------------------------------------- */
$('#get-temp-licence').on('click', function (e) {
	e.preventDefault();

	$('#alert-temp-licence').removeClass('alert-success alert-danger');
	$('#alert-temp-licence').empty();
	$('#get-temp-licence .load-bar').css('display', 'block');

	$.ajax({
		url: 'index.php?route=extension/module/seo_tags_generator/getTempLicence&token=<?php echo $token; ?>',
		dataType: 'json',
		type: "POST",
		//data:{'key': 'value'},
		success: function (json) {
			$("#alert-temp-licence").html(json.answer);
			$("#alert-temp-licence").addClass('alert ' + json.type);
			$('#get-temp-licence .load-bar').css('display', 'none');

			if ('alert-success' == json.type) {
				$("#alert-temp-licence").css('margin-bottom', '0');
				$('#temp-licence-button-container').empty();

				setTimeout(function () {
					$(location).attr('href', '<?php echo HTTPS_SERVER; ?>index.php?route=extension/module/seo_tags_generator&token=<?php echo $token; ?>')
				}, 2000);

			} else {
				$("#alert-temp-licence").css('margin-bottom', '17px');
			}
		}
	});
});

</script>

<script type="text/javascript" src="view/javascript/tinymce/tinymce.min.js"></script>

<script>
/* TinyMCE Editor
 -------------------------------------------------------------------------- */
function strip_tags (input, allowed) { // eslint-disable-line camelcase
  //  discuss at: http://locutus.io/php/strip_tags/
  // original by: Kevin van Zonneveld (http://kvz.io)
  // improved by: Luke Godfrey
  // improved by: Kevin van Zonneveld (http://kvz.io)
  //    input by: Pul
  //    input by: Alex
  //    input by: Marc Palau
  //    input by: Brett Zamir (http://brett-zamir.me)
  //    input by: Bobby Drake
  //    input by: Evertjan Garretsen
  // bugfixed by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: Onno Marsman (https://twitter.com/onnomarsman)
  // bugfixed by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: Eric Nagel
  // bugfixed by: Kevin van Zonneveld (http://kvz.io)
  // bugfixed by: Tomasz Wesolowski
  //  revised by: RafaЕ‚ Kukawski (http://blog.kukawski.pl)
  //   example 1: strip_tags('<p>Kevin</p> <br /><b>van</b> <i>Zonneveld</i>', '<i><b>')
  //   returns 1: 'Kevin <b>van</b> <i>Zonneveld</i>'
  //   example 2: strip_tags('<p>Kevin <img src="someimage.png" onmouseover="someFunction()">van <i>Zonneveld</i></p>', '<p>')
  //   returns 2: '<p>Kevin van Zonneveld</p>'
  //   example 3: strip_tags("<a href='http://kvz.io'>Kevin van Zonneveld</a>", "<a>")
  //   returns 3: "<a href='http://kvz.io'>Kevin van Zonneveld</a>"
  //   example 4: strip_tags('1 < 5 5 > 1')
  //   returns 4: '1 < 5 5 > 1'
  //   example 5: strip_tags('1 <br/> 1')
  //   returns 5: '1  1'
  //   example 6: strip_tags('1 <br/> 1', '<br>')
  //   returns 6: '1 <br/> 1'
  //   example 7: strip_tags('1 <br/> 1', '<br><br/>')
  //   returns 7: '1 <br/> 1'

  // making sure the allowed arg is a string containing only tags in lowercase (<a><b><c>)
  allowed = (((allowed || '') + '').toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('')

  var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi
  var commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi

  return input.replace(commentsAndPhpTags, '').replace(tags, function ($0, $1) {
    return allowed.indexOf('<' + $1.toLowerCase() + '>') > -1 ? $0 : ''
  })
}

tinymce.init({
	selector: '.tinymce',
	skin: 'bootstrap',
	language: 'ru',
	min_height: 450,
	height: 550,
	plugins: [
		'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
		'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
		'save table contextmenu directionality emoticons template paste textcolor colorpicker'
	],
	toolbar: 'bold italic sizeselect fontselect fontsizeselect | hr alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | insertfile undo redo | forecolor backcolor emoticons | code',
	fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",

	paste_remove_styles: true,
	paste_remove_spans: true,
	paste_strip_class_attributes: 'all',
	paste_block_drop: true,

	paste_preprocess : function(pl, o) {
		o.content = strip_tags(o.content, '<p><br><h2><h3><h4><h5><h6><ul><ol><li><strong><b><table><tbody><tr><td><img><iframe>');
	}

});

</script>
<!-- /js.end -->
<?php echo $footer; ?>




