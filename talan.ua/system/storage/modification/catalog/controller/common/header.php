<?php

class ControllerCommonHeader extends Controller {
	public function index() {

      $this->load->model('tool/seo_package');
      $this->model_tool_seo_package->metaRobots();
      $this->model_tool_seo_package->checkCanonical();
      $this->model_tool_seo_package->hrefLang();
      $this->model_tool_seo_package->richSnippets();
      
      if (version_compare(VERSION, '2', '>=')) {
        $data['mlseo_meta'] = $this->document->renderSeoMeta();
      } else {
        $this->data['mlseo_meta'] = $this->document->renderSeoMeta();
      }
      
      $seoTitlePrefix = $this->config->get('mlseo_title_prefix');
      $seoTitlePrefix = isset($seoTitlePrefix[$this->config->get('config_store_id').$this->config->get('config_language_id')]) ? $seoTitlePrefix[$this->config->get('config_store_id').$this->config->get('config_language_id')] : '';
      
      $seoTitleSuffix = $this->config->get('mlseo_title_suffix');
      $seoTitleSuffix = isset($seoTitleSuffix[$this->config->get('config_store_id').$this->config->get('config_language_id')]) ? $seoTitleSuffix[$this->config->get('config_store_id').$this->config->get('config_language_id')] : '';

      if (version_compare(VERSION, '2', '<')) {
        if ($this->config->get('mlseo_fix_search')) {
          $this->data['mlseo_fix_search'] = true;
          $this->data['csp_search_url'] = $this->url->link('product/search');
          $this->data['csp_search_url_param'] = $this->url->link('product/search', 'search=%search%');
        }
      }
      
		global $__wr360Path; $__wr360Path = 'catalog';
					if(defined('DIR_APPLICATION')) $__wr360Path = preg_replace('/.*\/([^\/].*)\//is', '$1', DIR_APPLICATION);
					include $__wr360Path.'/controller/extension/module/webrotate360.php';
		
		
		// Analytics

				// Add Source CSS & JS For Header
				$this->document->addStyle('catalog/view/javascript/so_searchpro/css/so_searchpro.css'); 
				
				$this->document->addStyle('catalog/view/javascript/so_megamenu/so_megamenu.css');
				$this->document->addStyle('catalog/view/javascript/so_megamenu/wide-grid.css');
				$this->document->addScript('catalog/view/javascript/so_megamenu/so_megamenu.js'); 
			
		$this->load->model('extension/extension');

					// XD Stickers start
						$this->load->model('setting/setting');
						$xd_stickers = $this->config->get('xd_stickers');
						// var_dump($data['xd_stickers']);
						if ($xd_stickers['status']) {
							$data['xd_stickers'] = array();
							$data['xd_stickers_position'] = $xd_stickers['position'];
							$data['xd_stickers'][] = array(
								'id'			=> 'xd_sticker_sold',
								'bg'			=> $xd_stickers['sold']['bg'],
								'color'			=> $xd_stickers['sold']['color'],
								'status'		=> $xd_stickers['sold']['status'],
							);
							$data['xd_stickers'][] = array(
								'id'			=> 'xd_sticker_sale',
								'bg'			=> $xd_stickers['sale']['bg'],
								'color'			=> $xd_stickers['sale']['color'],
								'status'		=> $xd_stickers['sale']['status'],
							);
							$data['xd_stickers'][] = array(
								'id'			=> 'xd_sticker_bestseller',
								'bg'			=> $xd_stickers['bestseller']['bg'],
								'color'			=> $xd_stickers['bestseller']['color'],
								'status'		=> $xd_stickers['bestseller']['status'],
							);
							$data['xd_stickers'][] = array(
								'id'			=> 'xd_sticker_novelty',
								'bg'			=> $xd_stickers['novelty']['bg'],
								'color'			=> $xd_stickers['novelty']['color'],
								'status'		=> $xd_stickers['novelty']['status'],
							);
							$data['xd_stickers'][] = array(
								'id'			=> 'xd_sticker_last',
								'bg'			=> $xd_stickers['last']['bg'],
								'color'			=> $xd_stickers['last']['color'],
								'status'		=> $xd_stickers['last']['status'],
							);
							$data['xd_stickers'][] = array(
								'id'			=> 'xd_sticker_freeshipping',
								'bg'			=> $xd_stickers['freeshipping']['bg'],
								'color'			=> $xd_stickers['freeshipping']['color'],
								'status'		=> $xd_stickers['freeshipping']['status'],
							);

							// CUSTOM stickers
							$this->load->model('extension/module/xd_stickers');
							$custom_xd_stickers = $this->model_extension_module_xd_stickers->getCustomXDStickers();
							if (!empty($custom_xd_stickers)) {
								foreach ($custom_xd_stickers as $custom_xd_sticker) {
									$custom_sticker_id = 'xd_sticker_' . $custom_xd_sticker['xd_sticker_id'];
									$data['xd_stickers'][] = array(
										'id'			=> $custom_sticker_id,
										'bg'			=> $custom_xd_sticker['bg_color'],
										'color'			=> $custom_xd_sticker['color_color'],
										'status'		=> $custom_xd_sticker['status'],
									);
								}
							}
						}
					// XD Stickers end
				

		$data['analytics'] = array();

		$analytics = $this->model_extension_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get($analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get($analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		
        //$data['title'] = $this->document->getTitle();
        $data['title'] = (isset($seoTitlePrefix) ? $seoTitlePrefix : '') . $this->document->getTitle() . (isset($seoTitleSuffix) ? $seoTitleSuffix : '');
      

		$data['base'] = $server;
$data['robots'] = $this->document->getRobots();
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

    // OCFilter start
    $data['noindex'] = $this->document->isNoindex();
    // OCFilter end
      
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}


			// Add New Position For Header
			$data['content_search'] 	= $this->load->controller('extension/soconfig/content_search');
			$data['content_menu'] 	= $this->load->controller('extension/soconfig/content_menu');
			$data['content_menu1'] 	= $this->load->controller('extension/soconfig/content_menu1');
			$data['content_menu2'] 	= $this->load->controller('extension/soconfig/content_menu2');
			$data['content_topbar'] 	= $this->load->controller('extension/soconfig/content_topbar');
			$data['header_block1'] 	= $this->load->controller('extension/soconfig/header_block1');
			$data['header_block2'] 	= $this->load->controller('extension/soconfig/header_block2');
			$data['text_items'] 	      = $this->language->get('text_items');
			$data['text_shop'] 	          = $this->language->get('text_shop');
			$data['text_shop_cart'] 	  = $this->language->get('text_shop_cart');

			$data['objlang'] = $this->language;
		

			// Add New Position For Header
			$this->load->language('extension/soconfig/soconfig');
			$data['text_contact'] 			= $this->language->get('text_contact');
			$data['text_more'] 	  			= $this->language->get('text_more');
			$data['text_menu'] 	  			= $this->language->get('text_menu');
			$data['text_hotline'] 	  		= $this->language->get('text_hotline');
			
			

		
		$this->load->language('common/header');

		$data['text_home'] = $this->language->get('text_home');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_shopping_cart'] = $this->language->get('text_shopping_cart');
		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));

		$data['text_account'] = $this->language->get('text_account');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_login'] = $this->language->get('text_login');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_transaction'] = $this->language->get('text_transaction');
		$data['text_download'] = $this->language->get('text_download');
		$data['text_logout'] = $this->language->get('text_logout');
		$data['text_checkout'] = $this->language->get('text_checkout');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_all'] = $this->language->get('text_all');
		$data['text_retail_header'] = $this->language->get('text_retail_header');
		$data['text_wholesale_header'] = $this->language->get('text_wholesale_header');
		
		$data['menu_products'] = $this->language->get('menu_products');
		$data['menu_new_items'] = $this->language->get('menu_new_items');
		$data['menu_standart_series'] = $this->language->get('menu_standart_series');
		$data['menu_standart_1'] = $this->language->get('menu_standart_1');
		$data['menu_elite'] = $this->language->get('menu_elite');
		$data['menu_premium'] = $this->language->get('menu_premium');
		$data['menu_outdoor_line'] = $this->language->get('menu_outdoor_line');
		$data['menu_airlight'] = $this->language->get('menu_airlight');
		$data['menu_walker'] = $this->language->get('menu_walker');
		$data['menu_tactical'] = $this->language->get('menu_tactical');
		$data['menu_by_appointment'] = $this->language->get('menu_by_appointment');
		$data['menu_safety_shoes'] = $this->language->get('menu_safety_shoes');
		$data['menu_working_shoes'] = $this->language->get('menu_working_shoes');
		$data['menu_safety'] = $this->language->get('menu_safety');
		$data['menu_military_trekking'] = $this->language->get('menu_military_trekking');
		$data['menu_military_shoes'] = $this->language->get('menu_military_shoes');
		$data['menu_construction_shoes'] = $this->language->get('menu_construction_shoes');
		$data['menu_all_products'] = $this->language->get('menu_all_products');

		$data['menu_top_technologies'] = $this->language->get('menu_top_technologies');
		$data['menu_top_download'] = $this->language->get('menu_top_download');
		$data['menu_top_about_us'] = $this->language->get('menu_top_about_us');
		$data['menu_top_roleofpayment'] = $this->language->get('menu_top_roleofpayment');
		$data['menu_top_contact'] = $this->language->get('menu_top_contact');
		
		$data['text_login_top'] = $this->language->get('text_login_top');
		
		
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

		// Menu

			/***theme's changes***/
			$data['theme'] = $this->config->get('theme_default_directory');
			$data['store_id'] = $this->config->get('config_store_id');
			$data['lang'] = $this->config->get('config_language_id');

			$store_id = $this->config->get('config_store_id');
			$lang = $this->config->get('config_language_id');
			$data['registry'] = $this->registry;
					
			/* Array Config  */
			$text_config = array(
				'preloader',
				'preloader_animation',
				'mutiColorTheme' ,
				'themecolor' ,
				'layouts',
				'typelayout',
				'type_banner',
				'scroll_animation',
				'toppanel_status' 	,
				'toppanel_type' 	,
				'phone_status' 		,
				'welcome_message_status' ,
				'wishlist_status' 	,
				'checkout_status' 	,
				'lang_status' 		,
				'socials_status' 	,
				'contact_number' 	,
				'welcome_message' 	,
				
				'typeheader' 		,
				'layoutstyle' 		,
				'general_bgcolor' 	,
				'pattern' 			,
				'contentbg',
				'content_bg_mode' 	,
				'content_attachment',
				
				'body_status' 		,
				'normal_body' 		,
				'url_body' 			,
				'family_body' 		,
				'selector_body' 	,
				'menu_status' 		,
				'normal_menu' 		,
				'url_menu' 			,
				'family_menu' 		,
				'selector_menu'		,
				'heading_status' 	,
				'normal_heading' 	,
				'url_heading' 		,
				'family_heading'  	,
				'selector_heading'	,
				
				'cssinput_status'	,
				'jsinput_status'	,
				'custom_css' 		,
				'custom_js' 		,
				'cssfile_status'	,
				'jsfile_status' 	,
				'cssfile' 	,
				'jsfile' 	,
			);
			
			foreach ($text_config as $text ) {
				$data[$text] = $this->soconfig->get_settings($text);
			}
			
			/***end theme's changes***/
		
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		
                $this->load->language('product/allproduct');
                $data['categories'][] = array(
                    'name'     => $this->language->get('all_product'),
                    'children' => "",
                    'column'   => 1,
                    'href'     => $this->url->link('product/allproduct')
                );
            
		
		$categories = $this->model_catalog_category->getCategories(0);

				/***blog changes***/
				$data['blog_link_status'] = 1;
				$data['blog_link_url'] = 'index.php?route=simple_blog/article';
				if(isset($this->request->get['route'])) {
					$route = $this->request->get['route'];
				} else {
					$route = 'common/home';
				}

				$route = explode("/", $route);

				if($this->config->get('simple_blog_status')) {
    				$this->load->model('simple_blog/article');

    				$count_blog_categories = $this->model_simple_blog_article->getTotalCategories(0);
                }

				if (isset($count_blog_categories) && $this->config->get('simple_blog_display_category') && $this->config->get('simple_blog_status')) {

					$categories = $this->model_simple_blog_article->getCategories(0);

					foreach ($categories as $category) {
						if ($category['top']) {
							// Level 2
							$children_data = array();

							$children = $this->model_simple_blog_article->getCategories($category['simple_blog_category_id']);

							foreach ($children as $child) {

								$article_total = $this->model_simple_blog_article->getTotalArticles($child['simple_blog_category_id']);
                                if ($child['image']) {
                                    $this->load->model('tool/image');

                                    $image = $this->model_tool_image->resize($child['image'], 205, 130);
                                } else {
                                    $image = false;
                                }

								$children_data[] = array(
                                    'image'  => $image,
								    'external_link' => $child['external_link'],
									'name'  => $child['name'],
									'href'  => $this->url->link('simple_blog/category', 'simple_blog_category_id=' . $category['simple_blog_category_id'] . '_' . $child['simple_blog_category_id'])
								);
							}

							$menu_class = 'simple_blog';

							// Level 1
							$data['categories'][] = array(
								'name'     => $category['name'],
								'external_link' => $category['external_link'],
								'children' => $children_data,
								'menu_class' => $menu_class,
								'column'   => $category['blog_category_column'] ? $category['blog_category_column'] : 1,
								'href'     => $this->url->link('simple_blog/category', 'simple_blog_category_id=' . $category['simple_blog_category_id'])
							);
						}
					}

				}
				$categories = $this->model_catalog_category->getCategories(0);
				/***end blog changes***/
			

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}


				$this->load->language('extension/soconfig/mobile');
				$data['objlang'] = $this->language;
				$data['menu_search'] = $this->url->link('product/search', '', true);
				$data['mobile'] = $this->config->get('mobile_general');
				$data['text_items'] = sprintf($this->language->get('text_itemcount'), $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0));
				if($this->session->data['device']=='mobile'){
					$data['home'] = $this->url->link('mobile/home');
				}else{
					$data['home'] = $this->url->link('common/home');
				}
				if(isset($this->request->get['layoutmobile'])) $data['layoutmobile'] = $this->request->get['layoutmobile'];
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');

		// For page specific css
		if (isset($this->request->get['route'])) {
			if (isset($this->request->get['product_id'])) {
				$class = '-' . $this->request->get['product_id'];
			} elseif (isset($this->request->get['path'])) {
				$class = '-' . $this->request->get['path'];
			} elseif (isset($this->request->get['manufacturer_id'])) {
				$class = '-' . $this->request->get['manufacturer_id'];
			} elseif (isset($this->request->get['information_id'])) {
				$class = '-' . $this->request->get['information_id'];
			} else {
				$class = '';
			}

			$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
		} else {
			$data['class'] = 'common-home';
		}
                    $output = $this->load->view('common/header', $data);
					return addWR360Headers($this, $output, $this->db);
		return $this->load->view('common/header', $data);
	}
}
