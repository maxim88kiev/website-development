<?php
class ControllerExtensionModuleOptionsCategory extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/options_category');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$data['version'] = '3.1.1';

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('options_category', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');
			
			if ($this->request->post['options_category_apply']) {
				$this->response->redirect($this->url->link('extension/module/options_category', 'token=' . $this->session->data['token'], true));
			}

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_view'] = $this->language->get('tab_view');
		$data['tab_show'] = $this->language->get('tab_show');
		$data['tab_contact'] = $this->language->get('tab_contact');
		
		$data['entry_autoselect'] = $this->language->get('entry_autoselect');
		$data['entry_show_no_stock'] = $this->language->get('entry_show_no_stock');
		$data['entry_no_stock_disabled'] = $this->language->get('entry_no_stock_disabled');
		$data['entry_datetimepicker'] = $this->language->get('entry_datetimepicker');
		$data['entry_special_mode'] = $this->language->get('entry_special_mode');
		$data['entry_image_select'] = $this->language->get('entry_image_select');
		$data['entry_theme'] = $this->language->get('entry_theme');
		$data['entry_quantity'] = $this->language->get('entry_quantity');
		$data['entry_quantity_product'] = $this->language->get('entry_quantity_product');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_name_tooltip'] = $this->language->get('entry_name_tooltip');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_image_size'] = $this->language->get('entry_image_size');
		$data['entry_image_popup'] = $this->language->get('entry_image_popup');
		$data['entry_image_popup_size'] = $this->language->get('entry_image_popup_size');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_sku'] = $this->language->get('entry_sku');
		$data['entry_show_quantity'] = $this->language->get('entry_show_quantity');
		$data['entry_show_price'] = $this->language->get('entry_show_price');
		$data['entry_points'] = $this->language->get('entry_points');
		$data['entry_weight'] = $this->language->get('entry_weight');
		$data['entry_show_mode'] = $this->language->get('entry_show_mode');
		$data['entry_value_show_mode'] = $this->language->get('entry_value_show_mode');
		$data['entry_options'] = $this->language->get('entry_options');
		$data['entry_option_values'] = $this->language->get('entry_option_values');

		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');
		$data['text_theme_button'] = $this->language->get('text_theme_button');
		$data['text_no_theme'] = $this->language->get('text_no_theme');
		$data['text_top'] = $this->language->get('text_top');
		$data['text_bottom'] = $this->language->get('text_bottom');
		$data['text_option_group'] = $this->language->get('text_option_group');
		$data['text_option_group_value'] = $this->language->get('text_option_group_value');
		$data['text_all'] = $this->language->get('text_all');
		$data['text_option_selected'] = $this->language->get('text_option_selected');
		$data['text_option_product_selected'] = $this->language->get('text_option_product_selected');
		$data['text_contact'] = $this->language->get('text_contact');
		$data['text_version'] = $this->language->get('text_version');
		
		$data['button_apply'] = $this->language->get('button_apply');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/options_category', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/options_category', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);
		
		// General
		if (isset($this->request->post['options_category_autoselect'])) {
			$data['options_category_autoselect'] = $this->request->post['options_category_autoselect'];
		} else {
			$data['options_category_autoselect'] = $this->config->get('options_category_autoselect');
		}
		
		if (isset($this->request->post['options_category_show_no_stock'])) {
			$data['options_category_show_no_stock'] = $this->request->post['options_category_show_no_stock'];
		} else {
			$data['options_category_show_no_stock'] = $this->config->get('options_category_show_no_stock');
		}
		
		if (isset($this->request->post['options_category_no_stock_disabled'])) {
			$data['options_category_no_stock_disabled'] = $this->request->post['options_category_no_stock_disabled'];
		} else {
			$data['options_category_no_stock_disabled'] = $this->config->get('options_category_no_stock_disabled');
		}
		
		if (isset($this->request->post['options_category_datetimepicker'])) {
			$data['options_category_datetimepicker'] = $this->request->post['options_category_datetimepicker'];
		} else {
			$data['options_category_datetimepicker'] = $this->config->get('options_category_datetimepicker');
		}
		
		if (isset($this->request->post['options_category_special_mode'])) {
			$data['options_category_special_mode'] = $this->request->post['options_category_special_mode'];
		} else {
			$data['options_category_special_mode'] = $this->config->get('options_category_special_mode');
		}
		
		if (isset($this->request->post['options_category_image_select'])) {
			$data['options_category_image_select'] = $this->request->post['options_category_image_select'];
		} else {
			$data['options_category_image_select'] = $this->config->get('options_category_image_select');
		}
		
		// View
		if (isset($this->request->post['options_category_theme'])) {
			$data['options_category_theme'] = $this->request->post['options_category_theme'];
		} else {
			$data['options_category_theme'] = $this->config->get('options_category_theme');
		}
		
		if (isset($this->request->post['options_category_quantity'])) {
			$data['options_category_quantity'] = $this->request->post['options_category_quantity'];
		} else {
			$data['options_category_quantity'] = $this->config->get('options_category_quantity');
		}
		
		if (isset($this->request->post['options_category_quantity_product'])) {
			$data['options_category_quantity_product'] = $this->request->post['options_category_quantity_product'];
		} else {
			$data['options_category_quantity_product'] = $this->config->get('options_category_quantity_product');
		}
		
		if (isset($this->request->post['options_category_position'])) {
			$data['options_category_position'] = $this->request->post['options_category_position'];
		} else {
			$data['options_category_position'] = $this->config->get('options_category_position');
		}
		
		if (isset($this->request->post['options_category_name_tooltip'])) {
			$data['options_category_name_tooltip'] = $this->request->post['options_category_name_tooltip'];
		} else {
			$data['options_category_name_tooltip'] = $this->config->get('options_category_name_tooltip');
		}
		
		if (isset($this->request->post['options_category_image'])) {
			$data['options_category_image'] = $this->request->post['options_category_image'];
		} else {
			$data['options_category_image'] = $this->config->get('options_category_image');
		}
		
		if (isset($this->request->post['options_category_image_width'])) {
			$data['options_category_image_width'] = $this->request->post['options_category_image_width'];
		} elseif ($this->config->get('options_category_image_width')) {
			$data['options_category_image_width'] = $this->config->get('options_category_image_width');
		} else {
			$data['options_category_image_width'] = 20;
		}
		
		if (isset($this->request->post['options_category_image_height'])) {
			$data['options_category_image_height'] = $this->request->post['options_category_image_height'];
		} elseif ($this->config->get('options_category_image_height')) {
			$data['options_category_image_height'] = $this->config->get('options_category_image_height');
		} else {
			$data['options_category_image_height'] = 20;
		}
		
		if (isset($this->request->post['options_category_image_popup'])) {
			$data['options_category_image_popup'] = $this->request->post['options_category_image_popup'];
		} else {
			$data['options_category_image_popup'] = $this->config->get('options_category_image_popup');
		}
		
		if (isset($this->request->post['options_category_image_popup_width'])) {
			$data['options_category_image_popup_width'] = $this->request->post['options_category_image_popup_width'];
		} elseif ($this->config->get('options_category_image_popup_width')) {
			$data['options_category_image_popup_width'] = $this->config->get('options_category_image_popup_width');
		} else {
			$data['options_category_image_popup_width'] = 150;
		}
		
		if (isset($this->request->post['options_category_image_popup_height'])) {
			$data['options_category_image_popup_height'] = $this->request->post['options_category_image_popup_height'];
		} elseif ($this->config->get('options_category_image_popup_height')) {
			$data['options_category_image_popup_height'] = $this->config->get('options_category_image_popup_height');
		} else {
			$data['options_category_image_popup_height'] = 150;
		}
		
		if (isset($this->request->post['options_category_sku'])) {
			$data['options_category_sku'] = $this->request->post['options_category_sku'];
		} else {
			$data['options_category_sku'] = $this->config->get('options_category_sku');
		}
		
		if (isset($this->request->post['options_category_show_quantity'])) {
			$data['options_category_show_quantity'] = $this->request->post['options_category_show_quantity'];
		} else {
			$data['options_category_show_quantity'] = $this->config->get('options_category_show_quantity');
		}
		
		if (isset($this->request->post['options_category_show_price'])) {
			$data['options_category_show_price'] = $this->request->post['options_category_show_price'];
		} else {
			$data['options_category_show_price'] = $this->config->get('options_category_show_price');
		}
		
		if (isset($this->request->post['options_category_points'])) {
			$data['options_category_points'] = $this->request->post['options_category_points'];
		} else {
			$data['options_category_points'] = $this->config->get('options_category_points');
		}
		
		if (isset($this->request->post['options_category_weight'])) {
			$data['options_category_weight'] = $this->request->post['options_category_weight'];
		} else {
			$data['options_category_weight'] = $this->config->get('options_category_weight');
		}
		
		// Show
		$data['options'] = array();
		
		$this->load->model('extension/module/options_category');
		$this->load->model('catalog/option');

		$results = $this->model_extension_module_options_category->getOptions();

		foreach ($results as $result) {
			$data['options'][] = array(
				'option_id'     => $result['option_id'],
				'name'          => $result['name'],
				'type'          => $result['type'],
				'option_values' => $this->model_catalog_option->getOptionValues($result['option_id'])
			);
		}
		
		if (isset($this->request->post['options_category_show_mode'])) {
			$data['options_category_show_mode'] = $this->request->post['options_category_show_mode'];
		} else {
			$data['options_category_show_mode'] = $this->config->get('options_category_show_mode');
		}
		
		if (isset($this->request->post['options_category_show'])) {
			$data['options_category_show'] = $this->request->post['options_category_show'];
		} elseif ($this->config->get('options_category_show')) {
			$data['options_category_show'] = $this->config->get('options_category_show');
		} else {
			$data['options_category_show'] = array();
		}
		
		if (isset($this->request->post['options_category_value_show_mode'])) {
			$data['options_category_value_show_mode'] = $this->request->post['options_category_value_show_mode'];
		} else {
			$data['options_category_value_show_mode'] = $this->config->get('options_category_value_show_mode');
		}
		
		if (isset($this->request->post['options_category_value_show'])) {
			$data['options_category_value_show'] = $this->request->post['options_category_value_show'];
		} elseif ($this->config->get('options_category_value_show')) {
			$data['options_category_value_show'] = $this->config->get('options_category_value_show');
		} else {
			$data['options_category_value_show'] = array();
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/options_category', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/options_category')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
	
	public function install() {
		$this->load->model('extension/module/options_category');
		$this->model_extension_module_options_category->createColumns();
	}
}