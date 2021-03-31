<?php
class ControllerProductManufacturer extends Controller {
	public function index() {
		$this->load->language('product/manufacturer');

		$this->load->model('catalog/manufacturer');

		$this->load->model('tool/image');
$data['mobile'] = $this->config->get('mobile_general');

		$this->document->setTitle($this->language->get('heading_title'));

			if (
			isset($this->request->get['page']) ||
			isset($this->request->get['limit']) ||
			isset($this->request->get['order'])
			) {
				$this->document->setRobots('noindex,follow');
			}
			
			

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_index'] = $this->language->get('text_index');
		$data['text_empty'] = $this->language->get('text_empty');

		$data['button_continue'] = $this->language->get('button_continue');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_brand'),
			'href' => $this->url->link('product/manufacturer')
		);

		$data['categories'] = array();

		$results = $this->model_catalog_manufacturer->getManufacturers();

		foreach ($results as $result) {
			if (is_numeric(utf8_substr($result['name'], 0, 1))) {
				$key = '0 - 9';
			} else {
				$key = utf8_substr(utf8_strtoupper($result['name']), 0, 1);
			}

			if (!isset($data['categories'][$key])) {
				$data['categories'][$key]['name'] = $key;
			}

			$data['categories'][$key]['manufacturer'][] = array(
				'name' => $result['name'],
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
			);
		}

		$data['continue'] = $this->url->link('common/home');

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');
        
        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $this->data));
          }
        }
      }
      

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('product/manufacturer_list', $data));
	}

	public function info() {
		$this->load->language('product/manufacturer');

		$this->load->model('catalog/manufacturer');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');
$data['mobile'] = $this->config->get('mobile_general');

		if (isset($this->request->get['manufacturer_id'])) {
			$manufacturer_id = (int)$this->request->get['manufacturer_id'];
		} else {
			$manufacturer_id = 0;
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'p.sort_order';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = (int)$this->config->get($this->config->get('config_theme') . '_product_limit');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_brand'),
			'href' => $this->url->link('product/manufacturer')
		);

		$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($manufacturer_id);

		if ($manufacturer_info) {
			
      if ($this->config->get('mlseo_enabled')) {
        $this->document->setTitle((!empty($manufacturer_info['meta_title']) ? $manufacturer_info['meta_title'] : $manufacturer_info['name']));

			if (
			isset($this->request->get['page']) ||
			isset($this->request->get['limit']) ||
			isset($this->request->get['order'])
			) {
				$this->document->setRobots('noindex,follow');
			}
			
			
        
        if (!empty($manufacturer_info['meta_keyword'])) {
          $this->document->setKeywords($manufacturer_info['meta_keyword']);
        }
        
        if (!empty($manufacturer_info['meta_description'])) {
          $this->document->setDescription($manufacturer_info['meta_description']);
        }
      } else {
        $this->document->setTitle($manufacturer_info['name']);

			if (
			isset($this->request->get['page']) ||
			isset($this->request->get['limit']) ||
			isset($this->request->get['order'])
			) {
				$this->document->setRobots('noindex,follow');
			}
			
			
      }
      

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $manufacturer_info['name'],
				'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
			);

			$data['heading_title'] = !empty($manufacturer_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $manufacturer_info['seo_h1'] : $manufacturer_info['name'];
        
        if (version_compare(VERSION, '2', '>=')) {
          $data['seo_h1'] = !empty($manufacturer_info['seo_h1']) ? $manufacturer_info['seo_h1'] : '';
          $data['seo_h2'] = !empty($manufacturer_info['seo_h2']) ? $manufacturer_info['seo_h2'] : '';
          $data['seo_h3'] = !empty($manufacturer_info['seo_h3']) ? $manufacturer_info['seo_h3'] : '';
          $data['description'] = !empty($manufacturer_info['description']) ? html_entity_decode($manufacturer_info['description'], ENT_QUOTES, 'UTF-8') : '';
        } else {
          $this->data['seo_h1'] = !empty($manufacturer_info['seo_h1']) ? $manufacturer_info['seo_h1'] : '';
          $this->data['seo_h2'] = !empty($manufacturer_info['seo_h2']) ? $manufacturer_info['seo_h2'] : '';
          $this->data['seo_h3'] = !empty($manufacturer_info['seo_h3']) ? $manufacturer_info['seo_h3'] : '';
          $this->data['description'] = !empty($manufacturer_info['description']) ? html_entity_decode($manufacturer_info['description'], ENT_QUOTES, 'UTF-8') : '';
        }
      

			$data['text_empty'] = $this->language->get('text_empty');
			$data['text_quantity'] = $this->language->get('text_quantity');
			$data['text_manufacturer'] = $this->language->get('text_manufacturer');
			$data['text_model'] = $this->language->get('text_model');
$data['text_no_price'] = sprintf($this->language->get('text_no_price'), $this->url->link('information/contact'));
			$data['text_price'] = $this->language->get('text_price');
			$data['text_tax'] = $this->language->get('text_tax');
			$data['text_points'] = $this->language->get('text_points');
			$data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
			$data['text_sort'] = $this->language->get('text_sort');
			$data['text_limit'] = $this->language->get('text_limit');

			$data['button_cart'] = $this->language->get('button_cart');
			$data['button_wishlist'] = $this->language->get('button_wishlist');
			$data['button_compare'] = $this->language->get('button_compare');
			$data['button_continue'] = $this->language->get('button_continue');
			$data['button_list'] = $this->language->get('button_list');
			$data['button_grid'] = $this->language->get('button_grid');

			$data['compare'] = $this->url->link('product/compare');

			$data['products'] = array();

			$filter_data = array(
				'filter_manufacturer_id' => $manufacturer_id,
				'sort'                   => $sort,
				'order'                  => $order,
				'start'                  => ($page - 1) * $limit,
				'limit'                  => $limit
			);

			$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

			$results = $this->model_catalog_product->getProducts($filter_data);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get($this->config->get('config_theme') . '_image_product_width'), $this->config->get($this->config->get('config_theme') . '_image_product_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}


                 /***theme's changes***/
                $data['store_id'] = $this->config->get('config_store_id');
				$store_id = $this->config->get('config_store_id');
                $data['lang'] = $this->config->get('config_language_id');
				$lang = $this->config->get('config_language_id');
				$data['theme'] = $this->config->get('theme_default_directory');
				$data['registry'] = $this->registry;
				$data['our_url'] = $this->registry->get('url');
				$this->load->model('soconfig/general');
				
                /* PAGE PRODUCT */
				$text_config = array(
					'product_catalog_mode',
					'other_catalog_column_lg',
					'other_catalog_column_md',
					'other_catalog_column_sm',
					'other_catalog_column_xs',
					'secondimg',
					'rating_status',
					'lstdescription_status',
					'sale_status',
					'new_status',
					'days',
					'quick_status',
					'discount_status',
					'countdown_status',
					'sale_text',
					'new_text',
					'quick_view_text',
					'scroll_animation',
				);
				
				foreach ($text_config as $text ) {
					$data[$text] = $this->soconfig->get_settings($text);
				}
		
				
				//Language Variables
				$this->load->language('extension/soconfig/soconfig');
				$data['lang_todaysdeal'] = $this->language->get('lang_todaysdeal');
				$data["view_details"]  	= $this->language->get('view_details');
				$data['countdown_title_day'] 	= $this->language->get('countdown_title_day');
				$data['countdown_title_hour'] 	= $this->language->get('countdown_title_hour');
				$data['countdown_title_minute'] = $this->language->get('countdown_title_minute');
				$data['countdown_title_second'] = $this->language->get('countdown_title_second');
                /***end theme's changes***/
            

				if ((float)$result['special']) {
                    $discount = '-'.round((($result['price'] - $result['special'])/$result['price'])*100, 0).'%';
                } else {
                    $discount = false;
                }
			   

					// XD Stickers start
						$this->load->model('setting/setting');
						$xd_stickers = $this->config->get('xd_stickers');
						$current_language_id = $this->config->get('config_language_id');
						$product_xd_stickers = array();
						if ($xd_stickers['status']) {
							if ($xd_stickers['sold']['status'] == '1') {
								if ($result['quantity'] <= 0) {
									$product_xd_stickers[] = array(
										'id'			=> 'xd_sticker_sold',
										'text'			=> $xd_stickers['sold']['text'][$current_language_id]
									);
								}
							}
							if ($xd_stickers['sale']['status'] == '1') {
								if ((float)$result['special']) {
									$product_xd_stickers[] = array(
										'id'			=> 'xd_sticker_sale',
										'text'			=> $xd_stickers['sale']['text'][$current_language_id]
									);
								}
							}
							if ($xd_stickers['bestseller']['status'] == '1') {
								$bestsellers = $this->model_catalog_product->getBestSellerProducts((int)$xd_stickers['bestseller']['property']);
								foreach ($bestsellers as $bestseller) {
									if ($bestseller['product_id'] == $result['product_id']) {
										$product_xd_stickers[] = array(
											'id'			=> 'xd_sticker_bestseller',
											'text'			=> $xd_stickers['bestseller']['text'][$current_language_id]
										);
									}
								}
							}
							if ($xd_stickers['novelty']['status'] == '1') {
								if ((strtotime($result['date_added']) + intval($xd_stickers['novelty']['property']) * 24 * 3600) > time()) {
									$product_xd_stickers[] = array(
										'id'			=> 'xd_sticker_novelty',
										'text'			=> $xd_stickers['novelty']['text'][$current_language_id]
									);
								}
							}
							if ($xd_stickers['last']['status'] == '1') {
								if ($result['quantity'] <= intval($xd_stickers['last']['property']) && $result['quantity'] > 0) {
									$product_xd_stickers[] = array(
										'id'			=> 'xd_sticker_last',
										'text'			=> $xd_stickers['last']['text'][$current_language_id]
									);
								}
							}
							if ($xd_stickers['freeshipping']['status'] == '1') {
								if ((float)$result['special'] >= intval($xd_stickers['freeshipping']['property'])) {
									$product_xd_stickers[] = array(
										'id'			=> 'xd_sticker_freeshipping',
										'text'			=> $xd_stickers['freeshipping']['text'][$current_language_id]
									);
								} else if ((float)$result['price'] >= intval($xd_stickers['freeshipping']['property'])) {
									$product_xd_stickers[] = array(
										'id'			=> 'xd_sticker_freeshipping',
										'text'			=> $xd_stickers['freeshipping']['text'][$current_language_id]
									);
								}
							}

							// CUSTOM stickers
							$this->load->model('extension/module/xd_stickers');
							$custom_xd_stickers_id = $this->model_extension_module_xd_stickers->getCustomXDStickersProduct($result['product_id']);
							if (!empty($custom_xd_stickers_id)) {
								foreach ($custom_xd_stickers_id as $custom_xd_sticker_id) {
									$custom_xd_sticker = $this->model_extension_module_xd_stickers->getCustomXDSticker($custom_xd_sticker_id['xd_sticker_id']);
									$custom_xd_sticker_text = json_decode($custom_xd_sticker['text'], true);
									// var_dump($custom_xd_sticker);
									if ($custom_xd_sticker['status'] == '1') {
										$custom_sticker_class = 'xd_sticker_' . $custom_xd_sticker_id['xd_sticker_id'];
										$product_xd_stickers[] = array(
											'id'			=> $custom_sticker_class,
											'text'			=> $custom_xd_sticker_text[$current_language_id]
										);
									}
								}
							}
						}
					// XD Stickers end
				
				$data['products'][] = array(

					'product_xd_stickers'  => $product_xd_stickers,
				
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,

				'special_end_date'  => $this->model_soconfig_general->getDateEnd($result['product_id']),
				'date_available'  => $result['date_available'],
				'discount'  => $discount,
			   
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'manufacturer_id=' . $result['manufacturer_id'] . '&product_id=' . $result['product_id'])
				);
			}

			$url = '';

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . '&sort=p.model&order=DESC' . $url)
			);

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get($this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] .  $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html

      if ($page > 1 AND $this->config->get('mlseo_pagination_canonical')) {
         $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id']), 'canonical');
      }
      
			if ($page == 1) {
			    $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'], true), 'canonical');
			} elseif ($page == 2) {
			    $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'], true), 'prev');
			} else {
			    $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url . '&page='. ($page - 1), true), 'prev');
			}

			if ($limit && ceil($product_total / $limit) > $page) {
			    $this->document->addLink($this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url . '&page='. ($page + 1), true), 'next');
			}

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home');

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');
        
        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $this->data));
          }
        }
      }
      

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/manufacturer_info', $data));
		} else {
			$url = '';

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/manufacturer/info', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			if (
			isset($this->request->get['page']) ||
			isset($this->request->get['limit']) ||
			isset($this->request->get['order'])
			) {
				$this->document->setRobots('noindex,follow');
			}
			
			

			$data['heading_title'] = $this->language->get('text_error');

			$data['text_error'] = $this->language->get('text_error');

			$data['button_continue'] = $this->language->get('button_continue');

			$data['continue'] = $this->url->link('common/home');

      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');
        
        if ($this->config->get('mlseo_microdata')) {
          if (version_compare(VERSION, '2', '>=')) {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $data));
          } else {
            $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'manufacturer', $this->data));
          }
        }
      }
      

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['header'] = $this->load->controller('common/header');
			$data['footer'] = $this->load->controller('common/footer');
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
