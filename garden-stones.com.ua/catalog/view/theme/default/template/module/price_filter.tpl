<?php if (!empty($settings)) { ?>
<style>
  .ui-widget-header {
    <?php echo !empty($settings['price_filter_active_background']) ? 'background: ' . $settings['price_filter_active_background'] . ' !important;' : ''; ?>
  }
  .ui-widget-content {
    <?php echo !empty($settings['price_filter_line_background']) ? 'background: ' . $settings['price_filter_line_background'] . ' !important;' : ''; ?>
  <?php echo !empty($settings['price_filter_line_border']) ? 'border: 1px solid ' . $settings['price_filter_line_border'] . ' !important;' : ''; ?>
  }
  .ui-state-default {
    <?php echo !empty($settings['price_filter_handle_background']) ? 'background: ' . $settings['price_filter_handle_background'] . ' !important;' : ''; ?>
  <?php echo !empty($settings['price_filter_handle_border']) ? 'border: 1px solid ' . $settings['price_filter_handle_border'] . ' !important;' : ''; ?>
  }
  .ui-corner-all {
  <?php
  if(!empty($settings['price_filter_handle_type']) && $settings['price_filter_handle_type'] != 0) {
    echo ($settings['price_filter_handle_type'] == 1) ? 'border-radius: 7px !important;' : 'border-radius: 0px !important;';
  }
  ?>
  }
  .price-container input {
    display: inline-block;
    width: 40%;
  }
</style>
<?php } ?>
<div class="price_block">
  <div class="price_block_title"><?php echo $heading_title; ?></div>
  <div class="price_block_cont">
    <form class="price-container box-content">
      <div class="price-slider-container">
        <div class="price-slider"></div>
      </div>
      <div class="price_block_input">
        <?php if ($cur_symbol_side == 'left') { ?><span><?php echo $currency_symbol; ?></span><?php } ?>
        <input type="text" class="form-control price-min" name="price_min" value="<?php echo $lower_limit; ?>" maxlength="<?php echo strlen($upper_limit); ?>" size="5" />
        <?php if ($cur_symbol_side == 'right') { ?><!--<span><?php echo $currency_symbol; ?></span>--><?php } ?>
        <!--<span>&#8211;</span>-->
        <?php if ($cur_symbol_side == 'left') { ?><span><?php echo $currency_symbol; ?></span><?php } ?>
        <input type="text" class="form-control price-max" name="price_max" value="<?php echo $upper_limit; ?>" maxlength="<?php echo strlen($upper_limit); ?>" size="5" />
        <?php if ($cur_symbol_side == 'right') { ?><!--<span><?php echo $currency_symbol; ?></span>--><?php } ?>
      </div>
    </form>
  </div>
  <!--<div class="price_block_but">
    <button type="button" class="btn btn-primary reset-button" onclick="Price_Filter.reset();"><?php echo $reset_button; ?></button>
  </div>-->
</div>



<script type="text/javascript"><!--
  Price_Filter.min = Price_Filter.min || <?php echo $price_min; ?>;
  Price_Filter.max = Price_Filter.max || <?php echo $price_max; ?>;
  Price_Filter.lower_value = Price_Filter.lower_value || <?php echo $lower_limit; ?>;
  Price_Filter.higher_value = Price_Filter.higher_value || <?php echo $upper_limit; ?>;
  Price_Filter.base_url = Price_Filter.base_url || "<?php echo $base_url; ?>";
  Price_Filter.current_path = Price_Filter.current_path || "<?php echo isset($current_path) ? $current_path : ''; ?>";
  Price_Filter.selectors = Price_Filter.selectors || { "container" : "<?php echo !empty($settings['price_filter_container_selector']) ? $settings['price_filter_container_selector'] : '#content .row:nth-last-of-type(2)'; ?>", "paginator" : "<?php echo !empty($settings['price_filter_paginator_selector']) ? $settings['price_filter_paginator_selector'] : '#content .row:nth-last-of-type(1)'; ?>" };
  Price_Filter.empty_message = Price_Filter.empty_message || "<?php echo $empty_message; ?>";

  (function ($) {
    if (!Price_Filter.is_initialized) {
      Price_Filter.is_initialized = true;
      Price_Filter.init();
    }
  })(jQuery);
//--></script>