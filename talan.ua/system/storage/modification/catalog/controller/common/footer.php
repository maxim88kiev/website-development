<?php
class ControllerCommonFooter extends Controller {
	public function index() {

			// Add New Position For Footer
			$data['footertop'] 	= $this->load->controller('extension/soconfig/content_footertop');
			$data['footer_top1'] 	= $this->load->controller('extension/soconfig/footer_top1');
			$data['footer_block1'] 	= $this->load->controller('extension/soconfig/footer_block1');
			$data['footer_block2'] 	= $this->load->controller('extension/soconfig/footer_block2');
			$data['footer_block3'] 	= $this->load->controller('extension/soconfig/footer_block3');
			$data['footer_block4'] 	= $this->load->controller('extension/soconfig/footer_block4');
			$data['footer_block5'] 	= $this->load->controller('extension/soconfig/footer_block5');
			$data['footer_block6'] 	= $this->load->controller('extension/soconfig/footer_block6');
			$data['footerbottom'] 	= $this->load->controller('extension/soconfig/content_footerbottom');
			$data['footer_layout6'] 	= $this->load->controller('extension/soconfig/footer_layout6');
			$data['footer_layout7'] 	= $this->load->controller('extension/soconfig/footer_layout7');
			$data['footer_layout8'] 	= $this->load->controller('extension/soconfig/footer_layout8');
		
		$this->load->language('common/footer');

		$data['scripts'] = $this->document->getScripts('footer');

		$data['text_information'] = $this->language->get('text_information');
		$data['text_service'] = $this->language->get('text_service');
		$data['text_extra'] = $this->language->get('text_extra');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_return'] = $this->language->get('text_return');
		$data['text_sitemap'] = $this->language->get('text_sitemap');
		$data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$data['text_voucher'] = $this->language->get('text_voucher');
		$data['text_affiliate'] = $this->language->get('text_affiliate');
		$data['text_special'] = $this->language->get('text_special');
		$data['text_account'] = $this->language->get('text_account');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_wishlist'] = $this->language->get('text_wishlist');
		$data['text_newsletter'] = $this->language->get('text_newsletter');

		$data['footer_for_clients'] = $this->language->get('footer_for_clients');
		$data['footer_shipping_payment'] = $this->language->get('footer_shipping_payment');
		$data['footer_technologies'] = $this->language->get('footer_technologies');
		$data['footer_public_agreement'] = $this->language->get('footer_public_agreement');
		$data['footer_corruption_program'] = $this->language->get('footer_corruption_program');
		$data['footer_about_us'] = $this->language->get('footer_about_us');
		$data['footer_annual_report'] = $this->language->get('footer_annual_report');
		$data['footer_warranty_obligations'] = $this->language->get('footer_warranty_obligations');
		$data['footer_support'] = $this->language->get('footer_support');
		$data['footer_adress'] = $this->language->get('footer_adress');
		$data['footer_retail'] = $this->language->get('footer_retail');
		$data['footer_wholesale'] = $this->language->get('footer_wholesale');
		$data['footer_time'] = $this->language->get('footer_time');
		
		$data['text_contact_left'] = $this->language->get('text_contact_left');
		$data['text_ollproduct_left'] = $this->language->get('text_ollproduct_left');
		$data['text_catalog_left'] = $this->language->get('text_catalog_left');
		$data['text_sert_left'] = $this->language->get('text_sert_left');
		$data['text_product_left'] = $this->language->get('text_product_left');
		
		$data['text_romny'] = $this->language->get('text_romny');
		$data['text_kiev'] = $this->language->get('text_kiev');
		$data['text_kharkov'] = $this->language->get('text_kharkov');
		$data['text_dnieper'] = $this->language->get('text_dnieper');
		$data['text_nikolaev'] = $this->language->get('text_nikolaev');
		$data['text_ternopil'] = $this->language->get('text_ternopil');
		
		

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/account', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = 'http://' . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

	
				/***theme's changes***/
				$data['theme'] = $this->config->get('theme_default_directory');
				$data['store_id'] = $this->config->get('config_store_id');
				$data['lang'] = $this->config->get('config_language_id');
				$data['registry'] = $this->registry;
				$store_id = $this->config->get('config_store_id');
				$lang = $this->config->get('config_language_id');
				$data['direction'] = $this->language->get('direction');
				
				/* Array Config  */
				$text_config = array(
					'backtop',
					'copyright',
					'socials_status',
					'imgpayment_status',
					'imgpayment',
					'footerpayment_status',
					'customblock_status',
					'social_fb_status',
					'social_twitter_status',
					'social_custom_status',
					'facebook',
					'twitter',
					'video_code',
					
					'footer_socials',
					'footerpayment',
					'customblock' ,
					'mutiColorTheme' ,
					'themecolor' ,
					'typefooter' 	,
				);
				
				foreach ($text_config as $text ) {
					$data[$text] = $this->soconfig->get_settings($text);
					
				}
				
				/***end theme's changes***/
		

				// Menu Mobile
				$this->load->model('catalog/category');
				$this->load->model('catalog/product');
				$this->load->language('extension/soconfig/mobile');
				$data['objlang'] = $this->language;
				$data['categories'] = array();
				$data['mobile'] = $this->config->get('mobile_general');
				$data['text_account'] = $this->language->get('text_account');
				$data['text_register'] = $this->language->get('text_register');
				$data['text_login'] = $this->language->get('text_login');
				
				$categories = $this->model_catalog_category->getCategories(0);
				
				
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

				$data['language'] = $this->load->controller('common/language');
				$data['currency'] = $this->load->controller('common/currency');
				$data['search'] = $this->load->controller('common/search');
				$data['cart'] = $this->load->controller('common/cart');
				$data['wishlist'] = $this->url->link('account/wishlist', '', true);
				$data['compare'] = $this->url->link('product/compare', '', 'SSL');
				$data['text_compare']  = sprintf($this->language->get('text_compare'),(isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
				$data['logged'] = $this->customer->isLogged();
				$data['account'] = $this->url->link('account/account', '', true);
				$data['register'] = $this->url->link('account/register', '', true);
				$data['login'] = $this->url->link('account/login', '', true);
				
			
			
		return $this->load->view('common/footer', $data);
	}
}
