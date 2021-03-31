<?php // FOR NETBEANS + CentOS ?>
<div class="alert alert-info">
  <?php echo $tab_seo_tags_generator_info; ?>
</div>

<!-- ATTRIBUTES . BEGIN -->
<fieldset class="row attributes-row" style="margin-top: 20px;">
	<div class="col-sm-12">
		<h4 class="essence-title"><?php echo $attributes_title_specific; ?></h4>
		<p><?php echo $attributes_subtitle_specific; ?></p>
		<div id="attributes-container">
			<?php $attribute_row = 1; ?>
			<?php $attribute_index = 1; ?>
			<?php foreach($stg_specific['setting']['attributes'] as $item) { ?>
			<div class="attribute-row row" id="attribute-row-<?php echo $attribute_row; ?>">
				<div class="col-sm-2">[attribute index="<span class="attribute-index"><?php echo $attribute_index; ?></span>"]</div>
				<div class="col-sm-3">
					<select name="stg_specific[setting][attributes][<?php echo $attribute_row; ?>]" class="attributes-selector form-control <?php echo !$item ? 'is-error' : ''; ?>">
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
		<?php if ($GLOBALS['stg_error_attributes']) { ?>
		<div class="attributes-error text-danger"><?php echo $GLOBALS['stg_error_attributes']; ?></div>
		<?php } ?>
		<button class="btn btn-success btn-sm add-new-attribute" type="button" data-toggle="tooltip" title="<?php echo $add_attribute; ?>">
			<i class="fa fa-plus-circle"></i>
		</button>
	</div>
</fieldset>
<!-- ATTRIBUTES . END-->



<!-- category . begin -->
<fieldset class="row">
	<div class="col-sm-12">
		<div class="category-stg-box">
			<h4><?php echo $tab_category; ?></h4>
			<ul class="nav nav-tabs" id="language-stg-category">
				<?php foreach ($languages as $language) { ?>
				<li><a href="#language-stg-category<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
				<?php } ?>
			</ul>
			<div class="tab-content">
				<?php foreach ($languages as $language) { ?>
				<div class="tab-pane fade" id="language-stg-category<?php echo $language['language_id']; ?>">

					<!-- title -->
					<div class="form-group">
						<label class="col-sm-2 control-label" for="formulas-category-title<?php echo $language['language_id']; ?>"><?php echo $entry_category_title; ?>:</label>
						<div class="col-sm-10">
							<input id="formulas-category-title<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][category][title]" value="<?php echo isset($stg_specific['formulas'][$language['language_id']]['category']['title']) ? $stg_specific['formulas'][$language['language_id']]['category']['title'] : ''; ?>" class="form-control cursor-tracking" />
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-category-title<?php echo $language['language_id']; ?>">
									<div class="vars-item">
										<span class="var">[category_name]</span>
										<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
										<?php if($seo_tags_generator_declension) { ?>
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
						<label class="col-sm-2 control-label" for="formulas-category-description<?php echo $language['language_id']; ?>"><?php echo $entry_category_description; ?>:</label>
						<div class="col-sm-10">
							<textarea id="formulas-category-description<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][category][description]" class="form-control cursor-tracking" rows="3"><?php echo isset($stg_specific['formulas'][$language['language_id']]['category']['description']) ? $stg_specific['formulas'][$language['language_id']]['category']['description'] : ''; ?></textarea>
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-category-description<?php echo $language['language_id']; ?>">
									<div class="vars-item">
										<span class="var">[category_name]</span>
										<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
										<?php if($seo_tags_generator_declension) { ?>
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
						<label class="col-sm-2 control-label" for="formulas-category-keyword<?php echo $language['language_id']; ?>"><?php echo $entry_category_keyword; ?>:</label>
						<div class="col-sm-10">
							<input id="formulas-category-keyword<?php echo $language['language_id']; ?>"
								type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][category][keyword]" value="<?php echo isset($stg_specific['formulas'][$language['language_id']]['category']['keyword']) ? $stg_specific['formulas'][$language['language_id']]['category']['keyword'] : ''; ?>" class="form-control cursor-tracking" />
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-category-keyword<?php echo $language['language_id']; ?>">
									<div class="vars-item">
										<span class="var">[category_name]</span>
										<?php if ($exist_category_h1) { ?><span class="var">[static_category_h1]</span><?php } ?>
										<?php if($seo_tags_generator_declension) { ?>
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
						<label class="col-sm-2 control-label" for="formulas-category-h1<?php echo $language['language_id']; ?>"><?php echo $entry_category_h1; ?>:</label>
						<div class="col-sm-10">
							<input id="formulas-category-h1<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][category][h1]" value="<?php echo isset($stg_specific['formulas'][$language['language_id']]['category']['h1']) ? $stg_specific['formulas'][$language['language_id']]['category']['h1'] : ''; ?>" class="form-control cursor-tracking" />
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-category-h1<?php echo $language['language_id']; ?>">
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
						<label class="col-sm-2 control-label" for="formulas-category-text<?php echo $language['language_id']; ?>"><?php echo $entry_category_text; ?>:</label>
						<div class="col-sm-10">
							<textarea id="formulas-category-text<?php echo $language['language_id']; ?>" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][category][text]" class="form-control cursor-tracking tinymce"><?php echo isset($stg_specific['formulas'][$language['language_id']]['category']['text']) ? $stg_specific['formulas'][$language['language_id']]['category']['text'] : ''; ?></textarea>
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-category-text<?php echo $language['language_id']; ?>">
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
	</div>
</fieldset>
<!-- category . end -->

<!-- product . begin -->
<fieldset class="row">
	<div class="col-sm-12">
		<div class="category-stg-box">
			<h4><?php echo $tab_product; ?></h4>
			<ul class="nav nav-tabs" id="language-stg-product">
				<?php foreach ($languages as $language) { ?>
				<li><a href="#language-stg-product<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
				<?php } ?>
			</ul>
			<div class="tab-content">
				<?php foreach ($languages as $language) { ?>
				<div class="tab-pane fade" id="language-stg-product<?php echo $language['language_id']; ?>">

					<!-- title -->
					<div class="form-group">
						<label class="col-sm-2 control-label" for="formulas-product-title<?php echo $language['language_id']; ?>"><?php echo $entry_product_title; ?>:</label>
						<div class="col-sm-10">
							<input id="formulas-product-title<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][product][title]" value="<?php echo isset($stg_specific['formulas'][$language['language_id']]['product']['title']) ? $stg_specific['formulas'][$language['language_id']]['product']['title'] : ''; ?>" class="form-control cursor-tracking" />
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-product-title<?php echo $language['language_id']; ?>">
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
										<span class="var">[manufacturer_h1]</span>
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
						<label class="col-sm-2 control-label" for="formulas-product-description<?php echo $language['language_id']; ?>"><?php echo $entry_product_description; ?>:</label>
						<div class="col-sm-10">
							<textarea id="formulas-product-description<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][product][description]" class="form-control cursor-tracking" rows="3"><?php echo isset($stg_specific['formulas'][$language['language_id']]['product']['description']) ? $stg_specific['formulas'][$language['language_id']]['product']['description'] : ''; ?></textarea>
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-product-description<?php echo $language['language_id']; ?>">
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
										<span class="var">[manufacturer_h1]</span>
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
										<?php if($seo_tags_generator_declension) { ?>
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
						<label class="col-sm-2 control-label" for="formulas-product-keyword<?php echo $language['language_id']; ?>"><?php echo $entry_product_keyword; ?>:</label>
						<div class="col-sm-10">
							<input id="formulas-product-keyword<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][product][keyword]" value="<?php echo isset($stg_specific['formulas'][$language['language_id']]['product']['keyword']) ? $stg_specific['formulas'][$language['language_id']]['product']['keyword'] : ''; ?>" class="form-control cursor-tracking" />
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-product-keyword<?php echo $language['language_id']; ?>">
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
										<span class="var">[manufacturer_h1]</span>
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
						<label class="col-sm-2 control-label" for="formulas-product-h1<?php echo $language['language_id']; ?>"><?php echo $entry_product_h1; ?>:</label>
						<div class="col-sm-10">
							<input id="formulas-product-h1<?php echo $language['language_id']; ?>" type="text" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][product][h1]" value="<?php echo isset($stg_specific['formulas'][$language['language_id']]['product']['h1']) ? $stg_specific['formulas'][$language['language_id']]['product']['h1'] : ''; ?>" class="form-control cursor-tracking" />
							<div class="vars-main row">
								<div class="col-sm-2"><?php echo $text_available_vars; ?>: </div>
								<div class="col-sm-10 vars-container" data-target="#formulas-product-h1<?php echo $language['language_id']; ?>">
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
										<span class="var">[manufacturer_h1]</span>
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
						<label class="col-sm-2 control-label" for="formulas-product-text<?php echo $language['language_id']; ?>"><?php echo $entry_product_text; ?>:</label>
						<div class="col-sm-10">
							<textarea id="formulas-product-text<?php echo $language['language_id']; ?>" name="stg_specific[formulas][<?php echo $language['language_id']; ?>][product][text]" class="form-control cursor-tracking tinymce" ><?php echo isset($stg_specific['formulas'][$language['language_id']]['product']['text']) ? $stg_specific['formulas'][$language['language_id']]['product']['text'] : ''; ?></textarea>
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
										<span class="var">[manufacturer_h1]</span>
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
	</div>
</fieldset>
<!-- /product . end -->


<div class="row">
  <div class="col-sm-12">
    <div class="category-stg-box">
      <h4><?php echo $tab_category_setting; ?></h4>

      <!-- setting inheritance -->
      <div class="form-group">
        <label class="col-sm-2 control-label"><?php echo $entry_category_setting_inheritance; ?>:</label>
        <div class="col-sm-10">
          <label style="margin-right: 10px;"><input type="radio" name="stg_specific[setting][inheritance]" value="1" class="" <?php echo $stg_specific['setting']['inheritance'] ? 'checked="checked"' : ''; ?> /> <?php echo $text_inheritance_yes; ?></label>
          <label><input type="radio" name="stg_specific[setting][inheritance]" value="0" class="" <?php echo isset($stg_specific['setting']['inheritance']) && !$stg_specific['setting']['inheritance'] ? 'checked="checked"' : ''; ?> /> <?php echo $text_inheritance_no; ?></label>
        </div>
      </div>

      <!-- setting inheritance copy -->
      <div class="form-group">
        <label class="col-sm-2 control-label"><?php echo $entry_category_setting_inheritance_copy; ?>:</label>
        <div class="col-sm-10 radio">
          <label style="margin-right: 10px;" class="checkbox-inline"><input type="checkbox" name="stg_specific[setting][inheritance_copy]" value="1" class="" /> <?php echo $text_inheritance_copy_yes; ?></label>
          <?php if ( isset($stg_specific['setting']['inheritance_copy']) ) { ?>
          <p class="text-warning">
            <?php echo $text_inheritance_copy_warning; ?>
          </p>
          <?php } ?>
        </div>
      </div>

      <!-- setting copy to others -->
      <div class="form-group">
        <label class="col-sm-2 control-label"><?php echo $entry_category_setting_copy_to_others; ?>:</label>
        <div class="col-sm-10 radio">
          <label style="margin-right: 10px;" class="checkbox-inline"><input id="copy-to-others" type="checkbox" name="stg_specific[setting][copy_to_others]" value="1" class="" /> <?php echo $text_copy_to_others_yes; ?></label>
          <?php if ( isset($stg_specific['setting']['copy_to_others']) ) { ?>
          <p class="text-warning">
            <?php echo $text_copy_to_others_warning; ?>
          </p>
          <?php } ?>
        </div>
      </div>

      <!-- category select from ocStore -->
      <div class="form-group" id="categoy-selector_container">
        <label class="col-sm-2 control-label" for="input-category"><?php echo $entry_categories; ?></label>
        <div class="col-sm-10">
          <div class="categories-selector">
            <?php echo $categories_list; ?>
          </div>
          <a onclick="$(this).parent().find(':checkbox:not(:disabled)').prop('checked', true);"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox:not(:disabled)').prop('checked', false);"><?php echo $text_unselect_all; ?></a>
        </div>
      </div>

    </div>
  </div>
</div>


<script>
$('#language-stg-category a:first').tab('show');
$('#language-stg-product a:first').tab('show');

// init global
var cursorPosition  = false;
var lastIdentifier = false;
var hasActiveInput = false;

$('.cursor-tracking').focus(function(){
	cursorPosition = caretPosition($(this));
	lastIdentifier = "#" + $(this).attr('id');
	hasActiveInput = true;
});

//	$('.cursor-tracking').focusout(function(){
//		console.log('focus out : ' + $(this).attr('id'));
//		hasActiveInput = false;
//	});

$('.cursor-tracking').keydown(function(e) {
	if (hasActiveInput) {
		console.log('keydown():hasActiveInput');
		cursorPosition = caretPosition($(this));
		lastIdentifier = "#" + $(this).attr('id');
		console.log('keyup cursorPosition : ' + cursorPosition);
	}
});

$('.cursor-tracking').change(function(e) {
	lastIdentifier = "#" + $(this).attr('id');
	cursorPosition = caretPosition($(this));
});

$('.var').click(function(){
	var target = $(this).parent('.vars-item').parent('.vars-container').data('target');

	if (lastIdentifier !== target) {
		cursorPosition = false;
	}

	lastIdentifier      = target;

	var value            = $(target).val();
	var newElement       = $(this).html(); newElement = newElement.replace(/&lt;/g, '<',); newElement = newElement.replace(/&gt;/g, '>');
	var partBeforeCursor = value.slice(0, cursorPosition);
	var partAfterCursor  = value.slice(cursorPosition, value.length);

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
		$(target).val(partBeforeCursor  + newElement + partAfterCursor);

		cursorPosition = partBeforeCursor.length + (newElement + ' ')	.length;
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
	html += '<select name="stg_specific[setting][attributes][' + attributeRow + ']" class="attributes-selector form-control is-error">';
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


/* Category
 -------------------------------------------------------------------------- */
$(function() {
	if ($('#copy-to-others').is(':checked')) {
		$('#categoy-selector_container').show(200);
	} else {
		$('#categoy-selector_container').hide(200);
	}
});

$('#copy-to-others').click(function(){
	if ($('#copy-to-others').is(':checked')) {
		$('#categoy-selector_container').show(200);
	} else {
		$('#categoy-selector_container').hide(200);
	}
});

// Category Tree
$('.categories-selector .has-children').each(function() {
	$(this).children('ul').hide();
});

$('.categories-selector .toggle-item').each(function() {
	$(this).click(function(){
		if($(this).hasClass('closed')) {
			$(this).html('-');
			$(this).removeClass('closed');
			$(this).parent('.has-children').children('ul').show(100);
		} else {
			$(this).html('+');
			$(this).addClass('closed');
			$(this).parent('.has-children').children('ul').hide(100);
		}
	});
});

$('body').on('click', '.categories-selector .all-subcategories-selector', function(e){
  if('notchecked' == $(this).attr('data-status')) {
    $(this).attr('data-status', 'checked');

		if(!$(this).prev('label').children('input').hasClass('_inactive')) {
			$(this).prev('label').children('input').prop('checked', true);
		}
    $(this).prev('label').parent('.has-children').find(':checkbox:not(:disabled)').prop('checked', true);
    $(this).prev('label').parent('.has-children').find(':checkbox:not(:disabled)').trigger('change');
    $(this).prev('label').parent('.has-children').find('.all-subcategories-selector').attr('data-status', 'checked');
  } else {
		if(!$(this).prev('label').children('input').hasClass('_inactive')) {
			$(this).attr('data-status', 'notchecked');
		}
    $(this).prev('label').children('input').prop('checked', false);
    $(this).prev('label').parent('.has-children').find(':checkbox:not(:disabled)').prop('checked', false);
    $(this).prev('label').parent('.has-children').find(':checkbox:not(:disabled)').trigger('change');
    $(this).prev('label').parent('.has-children').find('.all-subcategories-selector').attr('data-status', 'notchecked');
  }
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




