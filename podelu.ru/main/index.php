<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Main");
?>

<div class="container main-banner-wrapper">
	<div class="main-banner">
		<div class="section-title-white">
			PODELU - это команда, которая это команда, которая это команда, которая 
		</div>
		<div class="section-sub-title-white">
			Наша миссия - помогать предпринимателям в решении важных задач для бизнеса
		</div>
	</div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-24">

            </div>
        </div>
        <div class="row">
            <div class="col-md-24">
                <div class="section-title title-margin-main">
                    мы анализируем тарифы всех основных банков для предпринимателей 
                </div>
            </div>
 		</div>
		<div class="row row-bank">
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/sber_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/ros_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/gaz_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/sov_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/otp_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/tin_bnk.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/vtb_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/sel_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/pochta_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/prom_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/modul_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/del_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/loko_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/otk_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/raif_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/ros_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/sv_bank.png">
	        </div>
	        <div class="col-md-4 col-sm-6 col-xs-12">
	        	<img src="../local/templates/podelu/assets/image/bank/mosc_bank.png">
	        </div>
    	</div>
    	<div class="col-md-24 btn-container">
            <div class="section-btn">
				<a href="#" class="btn">Посмотреть еще</a>
            </div>
        </div>
    </div>
    <div class="container">
	    <div class="row block-news">
	        <div class="col-md-24">
	            <div class="section-title">
	                Новости и статьи 
	            </div>
	        </div>
	 	
		 	<div class="col-md-24">
				<a href="#" class="nav-mobile-show-all-category">Все новости</a>
				<div class="nav-tabs-wrapper-container js-category-container">
					<div class="nav-tabs-wrapper">
						<div class="header-nav-tabs">Выберите категорию</div>
				    	<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#all">Все</a></li>
							<li><a data-toggle="tab" href="#finance">Личные финансы</a></li>
							<li><a data-toggle="tab" href="#pravo">Право</a></li>
							<li><a data-toggle="tab" href="#credit">Кредит</a></li>
							<li><a data-toggle="tab" href="#compare">Сравнения</a></li>
							<li><a data-toggle="tab" href="#sovet">Советы</a></li>
							<li><a data-toggle="tab" href="#analitic">Бытовая аналитика</a></li>
					  	</ul>
					</div>
				</div>

			  	<div class="tab-content">
				    <div id="all" class="tab-pane fade in active">
			      		<?$APPLICATION->IncludeComponent(
							"bitrix:news.list", 
							"article-list", 
							array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "Y",
								"AJAX_MODE" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "Y",
								"CACHE_TIME" => "36000000",
								"CACHE_TYPE" => "A",
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "Y",
								"DISPLAY_DATE" => "Y",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(
									0 => "ID",
									1 => "CODE",
									2 => "XML_ID",
									3 => "NAME",
									4 => "TAGS",
									5 => "SORT",
									6 => "PREVIEW_TEXT",
									7 => "PREVIEW_PICTURE",
									8 => "DETAIL_TEXT",
									9 => "DETAIL_PICTURE",
									10 => "DATE_ACTIVE_FROM",
									11 => "ACTIVE_FROM",
									12 => "DATE_ACTIVE_TO",
									13 => "ACTIVE_TO",
									14 => "SHOW_COUNTER",
									15 => "SHOW_COUNTER_START",
									16 => "IBLOCK_TYPE_ID",
									17 => "IBLOCK_ID",
									18 => "IBLOCK_CODE",
									19 => "IBLOCK_NAME",
									20 => "IBLOCK_EXTERNAL_ID",
									21 => "DATE_CREATE",
									22 => "CREATED_BY",
									23 => "CREATED_USER_NAME",
									24 => "TIMESTAMP_X",
									25 => "MODIFIED_BY",
									26 => "USER_NAME",
									27 => "",
								),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "7",
								"IBLOCK_TYPE" => "SITE",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "20",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_TITLE" => "Новости",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"PROPERTY_CODE" => array(
									0 => "PROPERTY_DESCRIPTION",
									1 => "PROPERTY_HEADER",
									2 => "",
								),
								"SET_BROWSER_TITLE" => "Y",
								"SET_LAST_MODIFIED" => "N",
								"SET_META_DESCRIPTION" => "Y",
								"SET_META_KEYWORDS" => "Y",
								"SET_STATUS_404" => "N",
								"SET_TITLE" => "Y",
								"SHOW_404" => "N",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_BY2" => "SORT",
								"SORT_ORDER1" => "DESC",
								"SORT_ORDER2" => "ASC",
								"STRICT_SECTION_CHECK" => "N",
								"COMPONENT_TEMPLATE" => "article-list"
							),
							false
						);?>
				    </div>
				    <div id="finance" class="tab-pane fade">
				      	<h3>Menu 1</h3>
				      	<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				    </div>
				    <div id="pravo" class="tab-pane fade">
				      	<h3>Menu 2</h3>
				      	<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
				    </div>
				    <div id="credit" class="tab-pane fade">
			      		<h3>Menu 3</h3>
				      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    <div id="compare" class="tab-pane fade">
			      		<h3>Menu 3</h3>
				      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>    
				    <div id="sovet" class="tab-pane fade">
			      		<h3>Menu 3</h3>
				      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>
				    <div id="analitic" class="tab-pane fade">
			      		<h3>Menu 3</h3>
				      	<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				    </div>   
			  	</div>    
			</div>
        </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>