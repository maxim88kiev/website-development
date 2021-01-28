<?php echo $header; 
$options_calc = true;
$img_owl_carousel = 0;
?>
<div class="container">

    <ul class="breadcrumb category_breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) {
if($breadcrumb["text"] == '<i class="fa fa-home"></i>'){
        $breadcrumb['text'] = $text_breadcrumbs;
        }
        ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
    </ul>

    <div class="product_block"><?php echo $column_left; ?>
        <?php if ($column_left && $column_right) { ?>
        <?php $class = 'col-sm-6'; ?>
        <?php } elseif ($column_left || $column_right) { ?>
        <?php $class = 'col-sm-9'; ?>
        <?php } else { ?>
        <?php $class = 'col-sm-12'; ?>
        <?php } ?>
        <div id="content" class=""><?php echo $content_top; ?>
            <div class="product_block_cont">

                <div class="product_category_title">
                    <?php
              if (!empty($category_title)) {
                echo $category_title;
                }
          ?>
                </div>
                <div class="product_block_cont_line1"></div>
                <div class="product_block_cont_line2"></div>
                <div class="product_block_cont_line3"></div>
                <div class="product_block_cont_oll">

                    <div class="product_block_cont_img">
                        <?php if ($thumb || $images) { ?>
                        <ul class="thumbnails product_block_thumb">
                            <?php if ($thumb) { ?>
                            <li><a class="product_block_thumb_a" href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>"><img src="image/<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
                            <?php } ?>
                            <?php if ($images) { ?>
                            
							<div id="additional-carousel" class="owl-carousel">
                                <?php 
								$img_owl_carousel = count($images);
								foreach ($images as $image) { ?>
                                <div class="item text-center">
                                    <li class="image-additional">
                                        <a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>">
                                            <img class="slider_img_size" src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" />
                                        </a>
                                    </li>
                                </div>
                                <?php } ?>
                            </div>
							
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>

                    <div class="product_block_cont_price">

                        <div class="product_block_cont_price_exist"><?php echo $stock; ?></div>
                        <h1 class="product_block_cont_price_title"><?php echo $heading_title; ?></h1>

                        <div class="product_block_cont_price_opt">
                            <div class="product_block_cont_price_opt_1"><?php

							$price_kg_value = 0;
							
									foreach ($options as $option_kg) {
										if ($option_kg['type'] == 'image') {
											foreach ($option_kg['product_option_value'] as $option_value_kg) {
												$price_kg_value = $option_value_kg['name'];
											}
										}
									}
							
							if($options){
								if($options[0]["product_option_value"][0]["name"] != 0){
                                    echo $text_price_kg .", в мешке " . $price_kg_value . " кг";
                                }else{
									echo $text_price_one;
								}
							}else{
                                    echo $text_price_one;
                            }
								
                                ?>
                            </div>
                            <div class="product_block_cont_price_opt_2"><?php echo $text_wholesale; ?></div>
                        </div>

                        <?php if ($price) { ?>
                        <ul class="list-unstyled">
                            <?php if (!$special) { ?>
                            <li>
                                <h2><?php
							if($options){
								if($options[0]["product_option_value"][0]["name"] != 0){
									echo $price;
                                }else{
									echo str_replace("кг", "шт", $price);
									$options_calc = false;
								}
							}else{
                                echo str_replace("кг", "шт", $price);
								$options_calc = false;
                            }

?></h2>
                            </li>
                            <?php } else { ?>
                            <li><span class="product_block_cont_price_1"><?php 

							if($options){
								if($options[0]["product_option_value"][0]["name"] != 0){
									echo $price;
                                }else{
									echo str_replace("кг", "шт", $price);
								}
							}else{
                                echo str_replace("кг", "шт", $price);
                            }

							?></span></li>
                            <li>
                                <h2 class="product_block_cont_price_2"><?php 
								
								if($options){
								if($options[0]["product_option_value"][0]["name"] != 0){
									echo $special;
                                }else{
									echo str_replace("кг", "шт", $special);
								}
							}else{
                                echo str_replace("кг", "шт", $special);
                            }
								
								?></h2>
                            </li>
                            <?php } ?>
                            <?php if ($tax) { ?>
                            <li><?php echo $text_tax; ?> <?php echo $tax; ?></li>
                            <?php } ?>
                            <?php if ($points) { ?>
                            <li><?php echo $text_points; ?> <?php echo $points; ?></li>
                            <?php } ?>
                            <?php if ($discounts) { ?>
                            <li>
                                <hr>
                            </li>
                            <?php foreach ($discounts as $discount) { ?>
                            <li><?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?></li>
                            <?php } ?>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <div id="product">
                            <?php if ($recurrings) { ?>
                            <hr>
                            <h3><?php echo $text_payment_recurring ?></h3>
                            <div class="form-group required">
                                <select name="recurring_id" class="form-control">
                                    <option value=""><?php echo $text_select; ?></option>
                                    <?php foreach ($recurrings as $recurring) { ?>
                                    <option value="<?php echo $recurring['recurring_id'] ?>"><?php echo $recurring['name'] ?></option>
                                    <?php } ?>
                                </select>
                                <div class="help-block" id="recurring-description"></div>
                            </div>
                            <?php } ?>
                            <div class="form-group product_block_cont_price_form">
                                <!--<label class="control-label" for="input-quantity"><?php echo $entry_qty; ?></label>
                                <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control" />-->
                                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                                <br />
                                <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="product_block_cont_price_but"><?php echo $button_cart; ?></button>
                            </div>

							<?php 
							
							if($options){
							
								if($options[0]["product_option_value"][0]["name"] != 0){ ?>
								
									<div class="product_block_cont_price_txt_1">(<?php echo $text_bag; ?>)</div>
								
								<?php } 
							}

							?>
                            <?php if ($options) { $var_options = []; ?>
                            <div class="product_block_cont_price_txt_2"><?php echo $text_show_wholesale; ?></div>
                            <!--<hr>
                            <h3><?php echo $text_option; ?></h3>-->
                            <?php foreach ($options as $option) { ?>
                            <?php if ($option['type'] == 'checkbox') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?> bulk_prices">
                                <!--<label class="control-label"><?php echo $option['name']; ?></label>-->
                                <div id="input-option<?php echo $option['product_option_id']; ?>" class="option_block_style">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                    <div class="checkbox">
                                        <label>
                                            <input class="input_hidden" type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" checked/>
                                            <?php
                                            echo $option_value['name']; ?>
                                            <?php if ($option_value['price']) { ?>
                                            (<?php echo $option_value['price']; ?>)
                                            <?php } ?>
                                        </label>
                                    </div>
                                    <?php array_push($var_options, $option_value); ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>


                            <?php if ($option['type'] == 'radio') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label"><?php echo $option['name']; ?></label>
                                <div id="input-option<?php echo $option['product_option_id']; ?>">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                                            <?php echo $option_value['name']; ?>&nbsp;
                                            <span class="option_price_new">
                            <?php foreach ($var_options as $var_option) {
                              if ($option_value['name'] === $var_option['name']) {
                                echo $var_option['price'];
                              }
                            } ?>
                      </span>
                                            <?php if ($option_value['price']) { ?>
                                            <div class="option_price"><?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?></div>
                                            <?php } ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>



                            <?php if ($option['type'] == 'select') {
                $select_options = []; ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?> select_options">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control">
                                    <option value=""><?php echo $text_select; ?></option>
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                    <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                                        <?php if ($option_value['price']) { ?>
                                        <?php echo $option_value['price_prefix']; ?>
                                        <?php echo $option_value['price']; ?>
                                        <?php } ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                <?php array_push($select_options, $option_value); ?>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'image') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?> image_option">
                                <label class="control-label"><?php echo $option['name']; ?></label>
                                <div id="input-option<?php echo $option['product_option_id']; ?>">
                                    <?php foreach ($option['product_option_value'] as $option_value) { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" checked />
                                            <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" />
                                            <?php
                                            echo $option_value['name']; ?>
                                            <?php if ($option_value['price']) { ?>
                                            (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                                            <?php } ?>
                                        </label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'text') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'textarea') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <textarea name="option[<?php echo $option['product_option_id']; ?>]" rows="5" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control"><?php echo $option['value']; ?></textarea>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'file') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label"><?php echo $option['name']; ?></label>
                                <button type="button" id="button-upload<?php echo $option['product_option_id']; ?>" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-default btn-block"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
                                <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" id="input-option<?php echo $option['product_option_id']; ?>" />
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'date') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <div class="input-group date">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                  </span></div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'datetime') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <div class="input-group datetime">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
                            </div>
                            <?php } ?>
                            <?php if ($option['type'] == 'time') { ?>
                            <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                                <div class="input-group time">
                                    <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                                    <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
                            </div>
                            <?php } ?>
                            <?php } ?>
                            <?php } ?>





                            <?php if ($minimum > 1) { ?>
                            <!--<div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>-->
                            <?php } ?>
                        </div>
                        <!--<?php if ($review_status) { ?>
                        <div class="rating">
                          <p>
                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <?php if ($rating < $i) { ?>
                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <?php } else { ?>
                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                            <?php } ?>
                            <?php } ?>
                            <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a></p>
                          <hr>
                          <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
                          <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                        </div>
                        <?php } ?>-->
                    </div>

                </div>

                <?php if($options_calc){ ?>
                <div class="product_block_calculator">

                    <div class="nav_block_cont_line1"></div>
                    <div class="nav_block_cont_line2"></div>
                    <div class="nav_block_cont_line3"></div>


                    <div class="calculator_block_title">Сколько материала мне нужно, чтобы засыпать мой участок?</div>
                    <div class="calculator_block">
                        <div class="calculator_block_form">
                            
                            <div class="calculator_block_form--image">
                                <img src="/image/calc_img.png" alt="calculator image">
                            </div>
                            
                            <form onsubmit="return calculator(this);" class="calculator_form">
                                <div class="calculator_block_plot_length">
                                    <span class="calculator_block_descrip">Высота</br>засыпки</span>
                                    <input type="text" name="plot_length" value="" class="calculator_field">
                                    <span class="calculator_block_descrip-size">см</span>
                                </div>
                                <div class="calculator_block_plot_width">
                                    <span class="calculator_block_descrip">Ширина</br>участка</span>
                                    <input type="text" name="plot_width" value="" class="calculator_field">
                                    <span class="calculator_block_descrip-size">м</span>
                                </div>
                                <div class="calculator_block_backfill_height">
                                    <span class="calculator_block_descrip">Длина</br>участка</span>
                                    <input type="text" name="backfill_height" value="" class="calculator_field">
                                    <span class="calculator_block_descrip-size">м</span>
                                </div>
                                <div class="calculator_bottom">
                                    <input type="submit" value="Рассчитать" name="" class="form_group_butt_bt calculator_bt">
                                    <div id="calculator_result">
                                            <span class="calculator_block_result-descrip">Вам необходимо: </span>
                                            <input type="text" value="" class="calculator_result_number calculator_field" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="calculator_block_right">
                            <p class="calculator_block_right--top">Рекомендуем засыпать камень глубиной в 2 слоя, чтоб не было видно подложки (геотекстиль)</p>
                            <p class="calculator_block_right--bot"><span>Например:</span> если вы выбрали гальку размером 7-15мм, то минимальным слоем будет 2 см, а рекомендуемый
                                слой -  3 см.</p>
                        </div>

                    </div>

                    <script type="text/javascript">
                        function calculator(param){
                            let calculator_result = $('.calculator_result_txt');
                            calculator_result.hide();
                            let plot_width = param.plot_width.value;
                            let plot_length = param.plot_length.value;
                            let backfill_height = param.backfill_height.value;
                            let result_calc = plot_width * plot_length * backfill_height/100 * 1500;
                            $('.calculator_result_number').attr("value", result_calc + " кг");
                            // param.plot_width.value = "";
                            // param.plot_length.value = "";
                            // param.backfill_height.value = "";
                            calculator_result.show("slow");
                            return false;
                        }
                    </script>




                </div>
<?php } ?>

                <ul class="nav nav-tabs nav_block">
                    <!--<li class="nav_block_li"><a href="#tab-specifications" data-toggle="tab">Характеристики</a></li>-->
                    <?php if ($attribute_groups) { ?>
                    <li class="nav_block_li"><a href="#tab-specification" data-toggle="tab"><?php echo $tab_attribute; ?></a></li>
                    <?php } ?>
                    <li class="nav_block_li active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>
                    <!--<li class="nav_block_li"><a href="#tab-calculator" data-toggle="tab">Калькулятор</a></li>-->
                    <?php if ($review_status) { ?>
                    <li class="nav_block_li"><a href="#tab-review" data-toggle="tab"><?php echo $tab_review; ?></a></li>
                    <?php } ?>
                </ul>
                <div class="tab-content nav_block_content">
                    <!--<div class="tab-pane " id="tab-specifications">
                      <div class="nav_block_cont_line1"></div>
                      <div class="nav_block_cont_line2"></div>
                      <div class="nav_block_cont_line3"></div>
                      <?php
                        if(!empty($description_2)){
                          echo $description_2;
                        } ?>
                    </div>-->
                    <div class="tab-pane active" id="tab-description">

                        <div class="nav_block_cont_line1"></div>
                        <div class="nav_block_cont_line2"></div>
                        <div class="nav_block_cont_line3"></div>

                        <?php echo $description; ?>
                    </div>
                    <?php if ($attribute_groups) { ?>
                    <div class="tab-pane" id="tab-specification">
                        <div class="nav_block_cont_line1"></div>
                        <div class="nav_block_cont_line2"></div>
                        <div class="nav_block_cont_line3"></div>
                        <h2 class="specification_title"><?php echo $text_specification; ?></h2>
                        <?php foreach ($attribute_groups as $attribute_group) { ?>
                        <div class="tabl_content">
                            <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                            <div class="tabl_content_block">
                                <div><?php echo $attribute['name']; ?></div>
                                <div><?php echo $attribute['text']; ?></div>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                    </div>

                    <?php } ?>
                    <?php if ($review_status) { ?>
                    <div class="tab-pane form_block_tab" id="tab-review">

                        <div class="nav_block_cont_line1"></div>
                        <div class="nav_block_cont_line2"></div>
                        <div class="nav_block_cont_line3"></div>
                        <h2 class="form_block_tab_title"><?php echo $text_write; ?></h2>
                        <form class="form-horizontal form_block_tab_review" id="form-review">

                            <?php if ($review_guest) { ?>


                            <div class="form_block">

                                <!--<div class="form_group_block">
                                  <div class="form_group_block_txt"><?php echo $text_advantages; ?></div>
                                  <div class="form_group_block_input"><input type="text" name="advantages" value="" id="input-advantages" class="form-control" /></div>
                                </div>
                                <div class="form_group_block">
                                  <div class="form_group_block_txt"><?php echo $text_disadvantages; ?></div>
                                  <div class="form_group_block_input"><input type="text" name="disadvantages" value="" id="input-disadvantages" class="form-control" /></div>
                                </div>-->
                                <div class="form_group_block">
                                    <div class="form_group_block_txt"><?php echo $entry_review; ?></div>
                                    <div class="form_group_block_input"><textarea name="text" rows="5" id="input-review" class="form-control"></textarea></div>
                                </div>
                                <div class="form_group_element">
                                    <div class="form_group_element_block">
                                        <div class="form_group_block_txt"><?php echo $entry_name; ?></div>
                                        <div class="form_group_element_input"><input type="text" name="name" value="" id="input-name" class="form-control" /></div>
                                    </div>
                                    <div class="form_group_element_block">
                                        <div class="form_group_block_txt">Ваш e-mail</div>
                                        <div class="form_group_element_input"><input type="text" name="email" value="" id="input-email" class="form-control" /></div>
                                    </div>
                                </div>
                                <div class="form_group_butt">
                                    <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="form_group_butt_bt">
                                        <?php echo $button_continue; ?>
                                    </button>
                                </div>
                                <div class="form_group_bottom_txt"><?php echo $text_important; ?>
                                    <a href="#">нашими правилами</a></div>

                                <input class="form_block_radio" type="radio" name="rating" value="5" checked/>

                            </div>



                            <?php } else { ?>
                            <?php echo $text_login; ?>
                            <?php } ?>
                        </form>





                        <!--<form class="form-horizontal" id="form-review">
                          <h2><?php echo $text_write; ?></h2>


                          <?php if ($review_guest) { ?>
                          <div class="form-group required">
                            <div class="col-sm-12">
                              <label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
                              <input type="text" name="name" value="" id="input-name" class="form-control" />
                            </div>
                          </div>

                          <div class="form-group required">
                            <div class="col-sm-12">
                              <label class="control-label" for="input-review"><?php echo $entry_review; ?></label>
                              <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                              <div class="help-block"><?php echo $text_note; ?></div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-sm-12">
                              <label class="control-label"><?php echo $entry_rating; ?></label>
                              &nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
                              <input type="radio" name="rating" value="1" />
                              &nbsp;
                              <input type="radio" name="rating" value="2" />
                              &nbsp;
                              <input type="radio" name="rating" value="3" />
                              &nbsp;
                              <input type="radio" name="rating" value="4" />
                              &nbsp;
                              <input type="radio" name="rating" value="5" checked/>
                              &nbsp;<?php echo $entry_good; ?></div>
                          </div>

                          <?php if ($site_key) { ?>
                          <div class="form-group">
                            <div class="col-sm-12">
                              <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                            </div>
                          </div>

                          <?php } ?>
                          <div class="buttons clearfix">
                            <div class="pull-right">
                              <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><?php echo $button_continue; ?></button>
                            </div>
                          </div>

                          <?php } else { ?>
                          <?php echo $text_login; ?>
                          <?php } ?>
                        </form>-->


                    </div>
                    <?php } ?>
                </div>

                <div class="review_block">
                    <div class="review_block_title" name="review_block_title" id="review_block_title"><?php echo $text_product_reviews; ?></div>
                    <div class="nav_block_cont_line1"></div>
                    <div class="nav_block_cont_line2"></div>
                    <div class="nav_block_cont_line3"></div>
                    <div id="review"></div>
                </div>

            </div>

            <?php if ($products) { ?>

            <h3 class="recommend_block_title"><?php echo $text_related; ?></h3>
            <div class="news_block_title_line1"></div>
            <div class="news_block_title_line2"></div>
            <div class="news_block_title_line3"></div>
            <div class="new-items_block">
                <?php foreach ($products as $product) { ?>
                <div class="new-items_block_product">
                    <a class="new-items_block_product_img" href="<?php echo $product['href']; ?>">
                        <img src="/image/<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" />
                    </a>
                    <h4 class="new-items_block_product_title"><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                    <?php if ($product['price']) { ?>
                    <p class="new-items_block_product_price">
                        <?php if (!$product['special']) { ?>
                        <?php echo $product['price']; ?>
                        <?php } else { ?>
                        <span class="new-items_block_product_price-old"><?php echo $product['price']; ?></span>
                        <span class="new-items_block_product_price-new"><?php echo $product['special']; ?></span>
                        <?php } ?>
                    </p>
                    <?php } ?>

                    <!--<button class="new-items_block_product_but" type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');">
                      <?php echo $button_cart; ?>
                    </button>-->
                    <a class="product_but_href" href="<?php echo $product['href']; ?>">
                        <button class="new-items_block_product_but" type="button">
                            <?php echo $button_cart; ?>
                        </button>
                    </a>

                </div>
                <?php } ?>
            </div>







            <!--<h3><?php echo $text_related; ?></h3>
            <div class="row">
              <?php $i = 0; ?>
              <?php foreach ($products as $product) { ?>
              <?php if ($column_left && $column_right) { ?>
              <?php $class = 'col-lg-6 col-md-6 col-sm-12 col-xs-12'; ?>
              <?php } elseif ($column_left || $column_right) { ?>
              <?php $class = 'col-lg-4 col-md-4 col-sm-6 col-xs-12'; ?>
              <?php } else { ?>
              <?php $class = 'col-lg-3 col-md-3 col-sm-6 col-xs-12'; ?>
              <?php } ?>
              <div class="<?php echo $class; ?>">
                <div class="product-thumb transition">
                  <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
                  <div class="caption">
                    <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                    <p><?php echo $product['description']; ?></p>


                    <?php if ($product['rating']) { ?>
                    <div class="rating">
                      <?php for ($i = 1; $i <= 5; $i++) { ?>
                      <?php if ($product['rating'] < $i) { ?>
                      <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                      <?php } else { ?>
                      <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                      <?php } ?>
                      <?php } ?>
                    </div>
                    <?php } ?>
                    <?php if ($product['price']) { ?>
                    <p class="price">
                      <?php if (!$product['special']) { ?>
                      <?php echo $product['price']; ?>
                      <?php } else { ?>
                      <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
                      <?php } ?>
                      <?php if ($product['tax']) { ?>
                      <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                      <?php } ?>
                    </p>
                    <?php } ?>
                  </div>
                  <div class="button-group">
                    <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span> <i class="fa fa-shopping-cart"></i></button>
                    <button type="button" data-toggle="tooltip" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-heart"></i></button>
                    <button type="button" data-toggle="tooltip" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              <?php if (($column_left && $column_right) && ($i % 2 == 0)) { ?>
              <div class="clearfix visible-md visible-sm"></div>
              <?php } elseif (($column_left || $column_right) && ($i % 3 == 0)) { ?>
              <div class="clearfix visible-md"></div>
              <?php } elseif ($i % 4 == 0) { ?>
              <div class="clearfix visible-md"></div>
              <?php } ?>
              <?php $i++; ?>
              <?php } ?>
            </div>-->
            <?php } ?>


            <?php if ($tags) { ?>
            <p><?php echo $text_tags; ?>
                <?php for ($i = 0; $i < count($tags); $i++) { ?>
                <?php if ($i < (count($tags) - 1)) { ?>
                <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
                <?php } else { ?>
                <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
                <?php } ?>
                <?php } ?>
            </p>
            <?php } ?>
            <?php echo $content_bottom; ?></div>
        <?php echo $column_right; ?>
    </div>



    <!--<div class="row"><?php echo $column_left; ?>
      <?php if ($column_left && $column_right) { ?>
      <?php $class = 'col-sm-6'; ?>
      <?php } elseif ($column_left || $column_right) { ?>
      <?php $class = 'col-sm-9'; ?>
      <?php } else { ?>
      <?php $class = 'col-sm-12'; ?>
      <?php } ?>
      <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
        <div class="row">
          <div class="product_category_title"><?php echo $category_title; ?></div>
          <div class="category_block_title_line1"></div>
          <div class="category_block_title_line2"></div>
          <div class="category_block_title_line3"></div>

          <?php if ($column_left && $column_right) { ?>
          <?php $class = 'col-sm-6'; ?>
          <?php } elseif ($column_left || $column_right) { ?>
          <?php $class = 'col-sm-6'; ?>
          <?php } else { ?>
          <?php $class = 'col-sm-8'; ?>
          <?php } ?>
          <div class="">
            <?php if ($thumb || $images) { ?>
            <ul class="thumbnails">
              <?php if ($thumb) { ?>
              <li><a class="thumbnail" href="<?php echo $popup; ?>" title="<?php echo $heading_title; ?>"><img src="<?php echo $thumb; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
              <?php } ?>
              <?php if ($images) { ?>
  <div id="additional-carousel" class="owl-carousel">
              <?php foreach ($images as $image) { ?>
  <div class="item text-center">
              <li class="image-additional"><a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $heading_title; ?>"> <img src="<?php echo $image['thumb']; ?>" title="<?php echo $heading_title; ?>" alt="<?php echo $heading_title; ?>" /></a></li>
  </div>
              <?php } ?>
  </div>
              <?php } ?>
            </ul>
            <?php } ?>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo $tab_description; ?></a></li>
              <?php if ($attribute_groups) { ?>
              <li><a href="#tab-specification" data-toggle="tab"><?php echo $tab_attribute; ?></a></li>
              <?php } ?>
              <?php if ($review_status) { ?>
              <li><a href="#tab-review" data-toggle="tab"><?php echo $tab_review; ?></a></li>
              <?php } ?>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-description"><?php echo $description; ?></div>
              <?php if ($attribute_groups) { ?>
              <div class="tab-pane" id="tab-specification">
                <table class="table table-bordered">
                  <?php foreach ($attribute_groups as $attribute_group) { ?>
                  <thead>
                  <tr>
                    <td colspan="2"><strong><?php echo $attribute_group['name']; ?></strong></td>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($attribute_group['attribute'] as $attribute) { ?>
                  <tr>
                    <td><?php echo $attribute['name']; ?></td>
                    <td><?php echo $attribute['text']; ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
              <?php } ?>
              <?php if ($review_status) { ?>
              <div class="tab-pane" id="tab-review">
                <form class="form-horizontal" id="form-review">
                  <div id="review"></div>
                  <h2><?php echo $text_write; ?></h2>
                  <?php if ($review_guest) { ?>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label class="control-label" for="input-name"><?php echo $entry_name; ?></label>
                      <input type="text" name="name" value="" id="input-name" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label class="control-label" for="input-review"><?php echo $entry_review; ?></label>
                      <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                      <div class="help-block"><?php echo $text_note; ?></div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label class="control-label"><?php echo $entry_rating; ?></label>
                      &nbsp;&nbsp;&nbsp; <?php echo $entry_bad; ?>&nbsp;
                      <input type="radio" name="rating" value="1" />
                      &nbsp;
                      <input type="radio" name="rating" value="2" />
                      &nbsp;
                      <input type="radio" name="rating" value="3" />
                      &nbsp;
                      <input type="radio" name="rating" value="4" />
                      &nbsp;
                      <input type="radio" name="rating" value="5" />
                      &nbsp;<?php echo $entry_good; ?></div>
                  </div>
                  <?php if ($site_key) { ?>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>"></div>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="buttons clearfix">
                    <div class="pull-right">
                      <button type="button" id="button-review" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary"><?php echo $button_continue; ?></button>
                    </div>
                  </div>
                  <?php } else { ?>
                  <?php echo $text_login; ?>
                  <?php } ?>
                </form>
              </div>
              <?php } ?>
            </div>
          </div>
          <?php if ($column_left && $column_right) { ?>
          <?php $class = 'col-sm-6'; ?>
          <?php } elseif ($column_left || $column_right) { ?>
          <?php $class = 'col-sm-6'; ?>
          <?php } else { ?>
          <?php $class = 'col-sm-4'; ?>
          <?php } ?>
          <div class="<?php echo $class; ?>">
            <div class="btn-group">
              <button type="button" data-toggle="tooltip" class="btn btn-default" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product_id; ?>');"><i class="fa fa-heart"></i></button>
              <button type="button" data-toggle="tooltip" class="btn btn-default" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product_id; ?>');"><i class="fa fa-exchange"></i></button>
            </div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="list-unstyled">
              <?php if ($manufacturer) { ?>
              <li><?php echo $text_manufacturer; ?> <a href="<?php echo $manufacturers; ?>"><?php echo $manufacturer; ?></a></li>
              <?php } ?>
              <li><?php echo $text_model; ?> <?php echo $model; ?></li>
              <?php if ($reward) { ?>
              <li><?php echo $text_reward; ?> <?php echo $reward; ?></li>
              <?php } ?>
              <li><?php echo $text_stock; ?> <?php echo $stock; ?></li>
            </ul>
            <?php if ($price) { ?>
            <ul class="list-unstyled">
              <?php if (!$special) { ?>
              <li>
                <h2><?php echo $price; ?></h2>
              </li>
              <?php } else { ?>
              <li><span style="text-decoration: line-through;"><?php echo $price; ?></span></li>
              <li>
                <h2><?php echo $special; ?></h2>
              </li>
              <?php } ?>
              <?php if ($tax) { ?>
              <li><?php echo $text_tax; ?> <?php echo $tax; ?></li>
              <?php } ?>
              <?php if ($points) { ?>
              <li><?php echo $text_points; ?> <?php echo $points; ?></li>
              <?php } ?>
              <?php if ($discounts) { ?>
              <li>
                <hr>
              </li>
              <?php foreach ($discounts as $discount) { ?>
              <li><?php echo $discount['quantity']; ?><?php echo $text_discount; ?><?php echo $discount['price']; ?></li>
              <?php } ?>
              <?php } ?>
            </ul>
            <?php } ?>
            <div id="product">
              <?php if ($options) { ?>
              <hr>
              <h3><?php echo $text_option; ?></h3>
              <?php foreach ($options as $option) { ?>
              <?php if ($option['type'] == 'select') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                <select name="option[<?php echo $option['product_option_id']; ?>]" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control">
                  <option value=""><?php echo $text_select; ?></option>
                  <?php foreach ($option['product_option_value'] as $option_value) { ?>
                  <option value="<?php echo $option_value['product_option_value_id']; ?>"><?php echo $option_value['name']; ?>
                    <?php if ($option_value['price']) { ?>
                    (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                    <?php } ?>
                  </option>
                  <?php } ?>
                </select>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'radio') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label"><?php echo $option['name']; ?></label>
                <div id="input-option<?php echo $option['product_option_id']; ?>">
                  <?php foreach ($option['product_option_value'] as $option_value) { ?>
                  <div class="radio">
                    <label>
                      <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                      <?php echo $option_value['name']; ?>
                      <?php if ($option_value['price']) { ?>
                      (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                      <?php } ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'checkbox') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label"><?php echo $option['name']; ?></label>
                <div id="input-option<?php echo $option['product_option_id']; ?>">
                  <?php foreach ($option['product_option_value'] as $option_value) { ?>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="option[<?php echo $option['product_option_id']; ?>][]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                      <?php echo $option_value['name']; ?>
                      <?php if ($option_value['price']) { ?>
                      (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                      <?php } ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'image') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label"><?php echo $option['name']; ?></label>
                <div id="input-option<?php echo $option['product_option_id']; ?>">
                  <?php foreach ($option['product_option_value'] as $option_value) { ?>
                  <div class="radio">
                    <label>
                      <input type="radio" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option_value['product_option_value_id']; ?>" />
                      <img src="<?php echo $option_value['image']; ?>" alt="<?php echo $option_value['name'] . ($option_value['price'] ? ' ' . $option_value['price_prefix'] . $option_value['price'] : ''); ?>" class="img-thumbnail" /> <?php echo $option_value['name']; ?>
                      <?php if ($option_value['price']) { ?>
                      (<?php echo $option_value['price_prefix']; ?><?php echo $option_value['price']; ?>)
                      <?php } ?>
                    </label>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'text') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'textarea') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                <textarea name="option[<?php echo $option['product_option_id']; ?>]" rows="5" placeholder="<?php echo $option['name']; ?>" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control"><?php echo $option['value']; ?></textarea>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'file') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label"><?php echo $option['name']; ?></label>
                <button type="button" id="button-upload<?php echo $option['product_option_id']; ?>" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-default btn-block"><i class="fa fa-upload"></i> <?php echo $button_upload; ?></button>
                <input type="hidden" name="option[<?php echo $option['product_option_id']; ?>]" value="" id="input-option<?php echo $option['product_option_id']; ?>" />
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'date') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                <div class="input-group date">
                  <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                  <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                  </span></div>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'datetime') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                <div class="input-group datetime">
                  <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
              </div>
              <?php } ?>
              <?php if ($option['type'] == 'time') { ?>
              <div class="form-group<?php echo ($option['required'] ? ' required' : ''); ?>">
                <label class="control-label" for="input-option<?php echo $option['product_option_id']; ?>"><?php echo $option['name']; ?></label>
                <div class="input-group time">
                  <input type="text" name="option[<?php echo $option['product_option_id']; ?>]" value="<?php echo $option['value']; ?>" data-date-format="HH:mm" id="input-option<?php echo $option['product_option_id']; ?>" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                  </span></div>
              </div>
              <?php } ?>
              <?php } ?>
              <?php } ?>
              <?php if ($recurrings) { ?>
              <hr>
              <h3><?php echo $text_payment_recurring ?></h3>
              <div class="form-group required">
                <select name="recurring_id" class="form-control">
                  <option value=""><?php echo $text_select; ?></option>
                  <?php foreach ($recurrings as $recurring) { ?>
                  <option value="<?php echo $recurring['recurring_id'] ?>"><?php echo $recurring['name'] ?></option>
                  <?php } ?>
                </select>
                <div class="help-block" id="recurring-description"></div>
              </div>
              <?php } ?>
              <div class="form-group">
                <label class="control-label" for="input-quantity"><?php echo $entry_qty; ?></label>
                <input type="text" name="quantity" value="<?php echo $minimum; ?>" size="2" id="input-quantity" class="form-control" />
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>" />
                <br />
                <button type="button" id="button-cart" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary btn-lg btn-block"><?php echo $button_cart; ?></button>
              </div>
              <?php if ($minimum > 1) { ?>
              <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo $text_minimum; ?></div>
              <?php } ?>
            </div>
            <?php if ($review_status) { ?>
            <div class="rating">
              <p>
                <?php for ($i = 1; $i <= 5; $i++) { ?>
                <?php if ($rating < $i) { ?>
                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } else { ?>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                <?php } ?>
                <?php } ?>
                <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $reviews; ?></a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo $text_write; ?></a></p>
              <hr>
              <div class="addthis_toolbox addthis_default_style"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
              <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php if ($products) { ?>
        <h3><?php echo $text_related; ?></h3>
        <div class="row">
          <?php $i = 0; ?>
          <?php foreach ($products as $product) { ?>
          <?php if ($column_left && $column_right) { ?>
          <?php $class = 'col-lg-6 col-md-6 col-sm-12 col-xs-12'; ?>
          <?php } elseif ($column_left || $column_right) { ?>
          <?php $class = 'col-lg-4 col-md-4 col-sm-6 col-xs-12'; ?>
          <?php } else { ?>
          <?php $class = 'col-lg-3 col-md-3 col-sm-6 col-xs-12'; ?>
          <?php } ?>
          <div class="<?php echo $class; ?>">
            <div class="product-thumb transition">
              <div class="image"><a href="<?php echo $product['href']; ?>"><img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h4>
                <p><?php echo $product['description']; ?></p>
                <?php if ($product['rating']) { ?>
                <div class="rating">
                  <?php for ($i = 1; $i <= 5; $i++) { ?>
                  <?php if ($product['rating'] < $i) { ?>
                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                  <?php } else { ?>
                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                  <?php } ?>
                  <?php } ?>
                </div>
                <?php } ?>
                <?php if ($product['price']) { ?>
                <p class="price">
                  <?php if (!$product['special']) { ?>
                  <?php echo $product['price']; ?>
                  <?php } else { ?>
                  <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
                  <?php } ?>
                  <?php if ($product['tax']) { ?>
                  <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                  <?php } ?>
                </p>
                <?php } ?>
              </div>
              <div class="button-group">
                <button type="button" onclick="cart.add('<?php echo $product['product_id']; ?>', '<?php echo $product['minimum']; ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo $button_cart; ?></span> <i class="fa fa-shopping-cart"></i></button>
                <button type="button" data-toggle="tooltip" title="<?php echo $button_wishlist; ?>" onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="<?php echo $button_compare; ?>" onclick="compare.add('<?php echo $product['product_id']; ?>');"><i class="fa fa-exchange"></i></button>
              </div>
            </div>
          </div>
          <?php if (($column_left && $column_right) && ($i % 2 == 0)) { ?>
          <div class="clearfix visible-md visible-sm"></div>
          <?php } elseif (($column_left || $column_right) && ($i % 3 == 0)) { ?>
          <div class="clearfix visible-md"></div>
          <?php } elseif ($i % 4 == 0) { ?>
          <div class="clearfix visible-md"></div>
          <?php } ?>
          <?php $i++; ?>
          <?php } ?>
        </div>
        <?php } ?>
        <?php if ($tags) { ?>
        <p><?php echo $text_tags; ?>
          <?php for ($i = 0; $i < count($tags); $i++) { ?>
          <?php if ($i < (count($tags) - 1)) { ?>
          <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>,
          <?php } else { ?>
          <a href="<?php echo $tags[$i]['href']; ?>"><?php echo $tags[$i]['tag']; ?></a>
          <?php } ?>
          <?php } ?>
        </p>
        <?php } ?>
        <?php echo $content_bottom; ?></div>
      <?php echo $column_right; ?>
    </div>-->


</div>



<script>
$(document).ready(function() {

	var product_exist = $('.product_block_cont_price_exist')[0].innerText;

	if(product_exist == "Предзаказ"){
		$('.product_block_cont_price_but').addClass('product_preorder');
	}
	
});
</script>

<script type="text/javascript"><!--
    $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
        $.ajax({
            url: 'index.php?route=product/product/getRecurringDescription',
            type: 'post',
            data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
            dataType: 'json',
            beforeSend: function() {
                $('#recurring-description').html('');
            },
            success: function(json) {
                $('.alert, .text-danger').remove();

                if (json['success']) {
                    $('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //--></script>
<script type="text/javascript"><!--
    $('#button-cart').on('click', function() {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                $('#button-cart').button('loading');
            },
            complete: function() {
                $('#button-cart').button('reset');
            },
            success: function(json) {
                $('.alert, .text-danger').remove();
                $('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = $('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    $('.text-danger').parent().addClass('has-error');
                }

                if (json['success']) {
                    $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                    $('#cart > button').html('<i class="fa fa-shopping-cart"></i> ' + json['total']);

                    $('html, body').animate({ scrollTop: 0 }, 'slow');

                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            }
        });
    });
    //--></script>
<script type="text/javascript"><!--
    $('.date').datetimepicker({
        pickTime: false
    });

    $('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
    });

    $('.time').datetimepicker({
        pickDate: false
    });

    $('button[id^=\'button-upload\']').on('click', function() {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');

        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }

        timer = setInterval(function() {
            if ($('#form-upload input[name=\'file\']').val() != '') {
                clearInterval(timer);

                $.ajax({
                    url: 'index.php?route=tool/upload',
                    type: 'post',
                    dataType: 'json',
                    data: new FormData($('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(node).button('loading');
                    },
                    complete: function() {
                        $(node).button('reset');
                    },
                    success: function(json) {
                        $('.text-danger').remove();

                        if (json['error']) {
                            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            $(node).parent().find('input').attr('value', json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //--></script>
<script type="text/javascript"><!--
    $('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        $('#review').fadeOut('slow');

        $('#review').load(this.href);

        $('#review').fadeIn('slow');
    });

    $('#review').load('index.php?route=product/product/review&product_id=<?php echo $product_id; ?>');

    $('#button-review').on('click', function() {
        $.ajax({
            url: 'index.php?route=product/product/write&product_id=<?php echo $product_id; ?>',
            type: 'post',
            dataType: 'json',
            data: $("#form-review").serialize(),
            beforeSend: function() {
                $('#button-review').button('loading');
            },
            complete: function() {
                $('#button-review').button('reset');
            },
            success: function(json) {
                $('.alert-success, .alert-danger').remove();

                if (json['error']) {
                    $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                }

                if (json['success']) {
                    $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                    $('input[name=\'name\']').val('');
                    $('textarea[name=\'text\']').val('');
                    $('input[name=\'rating\']:checked').prop('checked', false);
                }
            }
        });
    });

    $(document).ready(function() {
		//change in kilograms per piece
		let elements = document.querySelectorAll('div.option_block_style > div.checkbox > label');
		   elements.forEach(element => {
			   let text_repl = 'шт';
			   let text_index = element.innerText.indexOf(text_repl);
			   if(text_index !== -1){
				   element.innerText = element.innerText.replace(/кг/i, text_repl);
			   }
			   element.innerText
		   });
		
        $('.thumbnails').magnificPopup({
            type:'image',
            delegate: 'a',
            gallery: {
                enabled:true
            }
        });
    });
    //--></script>

<script type="text/javascript"><!--
	var img_owl_carousel = <?php echo $img_owl_carousel ?>;
	var items_carousel_pc = 5;
	var items_carousel_mob = 2;
	if(img_owl_carousel < 5){
		items_carousel_pc = img_owl_carousel;
		if(img_owl_carousel === 1){
			tems_carousel_mob = 1;
		}else{
			tems_carousel_mob = 2;
		}
	}
	$('#additional-carousel').owlCarousel({
        autoPlay: false,
        navigation: true,
        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
        responsive:{
            0:{
                items:items_carousel_mob,
                loop:true,
                autoplay:false
            },
            768:{
                items:items_carousel_pc,
                loop:true,
                autoplay:false
            }
        },
        pagination: false
    });
	
    //--></script>
<style type="text/css">
	.slider_img_size{
		max-width: 95.5px !important;
		max-height: 95.5px;
		border-radius: 10px;
	}
    #additional-carousel{
        overflow: hidden;
    }
    #additional-carousel .owl-wrapper-outer{
        border-radius: 0;
        border:none;
        margin-left: 20px;
        box-shadow: none;
    }
    #additional-carousel .image-additional{
        width: 100%;
        max-width: 100%;
        margin: 0;
    }
</style>

<?php echo $footer; ?>