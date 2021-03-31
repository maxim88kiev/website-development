<?php echo $header; ?>

<?php
/*CHECK COOKIE LISTINGTYPE*/	
if(isset($_COOKIE["listingType"])) $listingType = $_COOKIE["listingType"];
else $listingType = 'grid';
?>
<div class="container page-category">
	<div class="row">
		<?php echo $column_left; ?>
		<div id="content" class="col-sm-12 page-category">
			<div class="sidebar-overlay "></div>
			<div class="products-category">
				<?php if ($thumb): ?>
				<div class="form-group category-info">
					<img src="<?php echo $thumb; ?>" alt="<?php echo $heading_title; ?>" title="<?php echo $heading_title; ?>" class="media-object" />
				</div>
				<?php endif; ?>
				
				<?php if($mobile['category_more'] ):?>
					<a class="heading_title btn-collapse" role="button" data-toggle="collapse" href="#collapseCategory"> <?php //echo $objlang->get('text_morecategory'); ?><?php echo $heading_title; ?> </a>
				<?php endif;?>
				
				<div id="collapseCategory" class="product-catalog__mode <?php echo ($mobile['category_more']) ? 'collapse' : ''?>">
					<div class="form-group">
					<?php echo $description; ?>
					</div>
					<?php if ($categories) { ?>
					<div class="refine-search form-group">
						<h3 class="title-category"><?php echo $text_refine; ?></h3>
						<ul class="row refine-search__list">
						<?php foreach ($categories as $category) {
							?>
							<li class="col-xs-6">
								<a href="<?php echo $category['href']; ?>" class="thumbnail"><img src="<?php echo $category['thumb']; ?>" alt="<?php echo $category['name']; ?>" /> </a>
								<a href="<?php echo $category['href']; ?>"><?php echo $category['name']; ?></a>
							</li>
						<?php } ?>
						</ul>

					</div>
					<?php } ?>
				</div>
				
				
				<!--// Begin Select Category Simple -->
				<?php if ($products) { ?>
				<!-- Filters -->
				<div class="product-filter filters-panel clearfix product_filter">
					<div class="col-xs-4 view-mode sort_view">
						<div class="view-mode">
							<div class="list-view">
								<button class="but_large grid <?php if($listingType =='grid') { echo 'active'; } ?>"   title="<?php echo $button_grid; ?>"><!--<i class="fa fa-th-large"></i>--></button>
								<button class="but_bars list <?php if($listingType =='list') { echo 'active'; } ?>"   title="<?php echo $button_list; ?>"><!--<i class="fa fa-bars"></i>--></button>
							</div>
						</div>
					</div>
					<!--<div class="col-xs-4 ">
						<?php //if(!empty($column_left)):?>
						<a class="btn btn-primary open-sidebar" href="javascript:void(0)"><i class="fa fa-filter"></i> Refine </a>
						<?php //endif;?>
					</div>-->
					<div class="short-by-show col-xs-8 sort_show">
					
						<div class="form-group short-by sort_block">
						<!--<div  class="sort_text">Сортировать:</div>-->
							<i class="fa fa-sort-amount-asc" ></i>
							<select id="input-sort" class="form-control" onchange="location = this.value;">
							  <?php foreach ($sorts as $sorts2) { ?>
							  <?php if ($sorts2['value'] == $sort . '-' . $order) { ?>
							  <option value="<?php echo $sorts2['href']; ?>" selected="selected"><?php echo $sorts2['text']; ?></option>
							  <?php } else { ?>
							  <option value="<?php echo $sorts2['href']; ?>"><?php echo $sorts2['text']; ?></option>
							  <?php } ?>
							  <?php } ?>
							</select>
						</div>

					</div>
					
					<?php echo $content_top; ?>
				
				</div>
				<!-- //end Filters -->
				
				<!--Changed Listings-->
				<?php 
					if (file_exists(DIR_TEMPLATE. 'so-mobile/template/soconfig/listing.php')) include(DIR_TEMPLATE.'so-mobile/template/soconfig/listing.php');
					else echo 'Not found';
				?>
				<!--// End Changed listings-->
				
				<!-- Filters -->
				<div class="product-filter text-center clearfix filters-panel">
					<!--<div class="short-by-show text-center">
						<div class="form-group" style="margin:0px"><?php echo $results; ?></div>
					</div>-->
					<?php if (!empty($pagination)){?>
						<div class="box-pagination "><?php echo $pagination; ?></div>
					<?php }?>
				</div>
				<!-- //end Filters -->

				<?php } ?>
				
					
				<?php if (!$products) { ?>
					<div class="form-group">
						<h4><?php echo $text_empty; ?></h4>
						<div class="buttons">
							<div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
						</div>
					</div>
				<?php } ?>
				<!--End content-->
			
				<script type="text/javascript"><!--
				 $('.view-mode .list-view button').bind("click", function() {
					if ($(this).is(".active")) {return false;}
					$.cookie('listingType', $(this).is(".grid") ? 'grid' : 'list', { path: '/' });
					location.reload();
				});
				//-->
				</script> 
			
			<?php //echo $content_bottom; ?>
			</div>
		</div>
	  
    </div>
</div>
<?php echo $footer; ?>


<style>

.bar-nav ~ .content {
    margin-top: 50px;
}

.heading_title{
	text-align: center;
	display: block;
}

.heading_title:active, .heading_title:focus, .heading_title:hover{
    color: #000;
}

.ocf-offcanvas .ocfilter-mobile-handle {
    top: 259px;
}

.ocf-offcanvas .ocfilter-mobile-handle button{
    background-color: #4f7c68;
	border: 1px solid #4f7c68;
	padding: 2px 5px;
	border-radius: 4px;
}

.product_filter{
	border: 1px solid #4f7c68;
	padding: 6px;
}

.sort_block{
	
}

#content, .sort_show, .sort_view{
	padding: 0;
}

.sort_block{
	margin-bottom: 0px;
}

.but_large.active{
	background-repeat: no-repeat;
	background-position: center;
	background-image: url("/image/catalog/talan_img/th_large.png");
	height: 22px;
	width: 28px;
	border: none;
}

.but_large{
	background-repeat: no-repeat;
	background-position: center;
	background-image: url("/image/catalog/talan_img/th_large_hov.png");
	height: 22px;
	width: 28px;
	border: none;
}

.but_bars{
	background-repeat: no-repeat;
	background-position: center;
	background-image: url("/image/catalog/talan_img/fa_bars.png");
	height: 22px;
	width: 27px;
	border: none;
	margin-left: 6px;
}

.but_bars.active{
	background-repeat: no-repeat;
	background-position: center;
	background-image: url("/image/catalog/talan_img/fa_bars_green.png");
	height: 22px;
	width: 27px;
	border: none;
	margin-left: 6px;
}





</style>

