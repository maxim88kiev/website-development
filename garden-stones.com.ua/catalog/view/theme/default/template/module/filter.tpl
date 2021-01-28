<div class="filter_block">
  <!--<div class="panel-heading"><?php echo $heading_title; ?></div>-->

  <div class="filter_block_group">
    <?php

     foreach ($filter_groups as $filter_group) { ?>
    <div class="filter_block_group_txt"><?php echo $filter_group['name']; ?></div>
    <div class="filter_block_group_check">
      <div id="filter-group<?php echo $filter_group['filter_group_id']; ?>">
        <?php foreach ($filter_group['filter'] as $filter) { ?>
        <div class="checkbox filter_block_group_lab">
            <?php if (in_array($filter['filter_id'], $filter_category)) { ?>
            <input type="checkbox" name="filter[]" value="<?php echo $filter['filter_id']; ?>" checked="checked" />
            <label class="form-check-label" for=""><?php echo $filter['name']; ?></label>
            <?php } else { ?>
            <input type="checkbox" name="filter[]" value="<?php echo $filter['filter_id']; ?>" />
            <label class="form-check-label" for=""><?php echo $filter['name']; ?></label>
            <?php } ?>
        </div>
        <?php } ?>
      </div>
    </div>
    <?php } ?>
  </div>

  <div class="filter_block_group_but">
    <button type="button" id="button-filter" class="filter_block_group_button"><?php echo $button_filter; ?></button>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	filter = [];

	$('input[name^=\'filter\']:checked').each(function(element) {
		filter.push(this.value);
	});

	location = '<?php echo $action; ?>&filter=' + filter.join(',');
});
//--></script>
