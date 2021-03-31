<?php
class ControllerExtensionModuleOrderExcel extends Controller {

	private $error = array();
	private $version = '3.2.0';

	public function index() {

		$this->load->language('extension/module/orderexcel');

		$this->document->setTitle($this->language->get('page_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {

			$this->model_setting_setting->editSetting('orderexcel', $this->request->post);
			$this->clearDir();

			$data['success'] = $this->language->get('text_success');
		}

		if (isset($this->request->post['orderexcel_status'])) {
			$data['orderexcel_status'] = $this->request->post['orderexcel_status'];
		} else {
			$data['orderexcel_status'] = $this->config->get('orderexcel_status');
		}

		// Настройки
		$result = $this->model_setting_setting->getSetting('orderexcel');

		if (!empty($result['orderexcel_setting'])) {
			$data['setting'] = $result['orderexcel_setting'];
		} else {
			$data['setting'] = array();
		}

		if (!empty($result['orderexcel_meta'])) {
			$data['meta'] = $result['orderexcel_meta'];
		} else {
			$data['meta'] = array();
		}

		if (!empty($result['orderexcel_contact'])) {
			$data['contact'] = $result['orderexcel_contact'];
		} else {
			$data['contact'] = array();
		}

		// Column
		if (!empty($result['orderexcel_column'])) {
			$data['column'] = $result['orderexcel_column'];
		} else {
			$data['column'] = array();
		}

		if (!empty($result['orderexcel_email'])) {
			$data['email'] = $result['orderexcel_email'];
		} else {
			$data['email'] = array();
		}

		if (!empty($result['orderexcel_note'])) {
			$data['note'] = $result['orderexcel_note'];
		} else {
			$data['note'] = '';
		}

		if (!empty($result['orderexcel_style'])) {
			$data['style'] = $result['orderexcel_style'];
		} else {
			$data['style'] = array();
		}

		if (!empty($result['orderexcel_customer_group_id'])) {
			$data['customer_group_id'] = $result['orderexcel_customer_group_id'];
		} else {
			$data['customer_group_id'] = 0;
		}

		$this->load->model('customer/customer_group');
		$user_groups = $this->model_customer_customer_group->getCustomerGroups();
		$data['customer_groups'] = array_merge(array("0" => array(
			'customer_group_id' => 0,
			'name' =>	$this->language->get('text_no')
		)), $user_groups);

		// Product data
		$data['column_select'] = array(
			'order_id' 		=> $this->language->get('entry_column_order_id'),
			'product_id' 	=> $this->language->get('entry_column_product_id'),
			'link' 				=> $this->language->get('entry_column_link'),
			'name' 				=> $this->language->get('entry_column_name'),
			'description' => $this->language->get('entry_column_description'),
			'tag' 				=> $this->language->get('entry_column_tag'),
			'weight' 			=> $this->language->get('entry_column_weight'),
			'image' 			=> $this->language->get('entry_column_image'),
			'model' 			=> $this->language->get('entry_column_model'),
			'sku' 				=> $this->language->get('entry_column_sku'),
			'quantity' 		=> $this->language->get('entry_column_quantity'),
			'price' 			=> $this->language->get('entry_column_price'),
			'total' 			=> $this->language->get('entry_column_total')
		);

		// Attr
		$this->load->model('catalog/attribute');
		$attrs = $this->model_catalog_attribute->getAttributes();
		foreach($attrs as $attr){
			$attribute_id = $attr['attribute_id'];
			$data['column_select'][$attribute_id] = $attr['attribute_group'].' > '.$attr['name'];
		}

		if (!file_exists(DIR_SYSTEM.'library/PHPExcel.php')) {
			$data['warning'] = $this->language->get('error_phpexcel');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/orderexcel', 'token=' . $this->session->data['token'], true)
		);

		$data['version'] = sprintf($this->language->get('version'), $this->version);
		$data['about_module'] = $this->language->get('about_module');

		$data['alfabet'] 		= array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
		$data['fonts'] 			= array('Times New Roman', 'Courier New', 'Comic Sans MS');
		$data['horizontal'] = array('general', 'left', 'right', 'justify', 'center');
		$data['vertical'] 	= array('top', 'bottom', 'center', 'distributed');

		$data['heading_title'] = $this->language->get('heading_title');

		// Text
		$data['text_extension'] = $this->language->get('text_extension');
		$data['text_success'] = $this->language->get('text_success');
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_choose'] = $this->language->get('text_choose');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_enabled'] = $this->language->get('text_enabled');

		// Tabs
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_meta'] = $this->language->get('tab_meta');
		$data['tab_data'] = $this->language->get('tab_data');
		$data['tab_note'] = $this->language->get('tab_note');
		$data['tab_contact'] = $this->language->get('tab_contact');
		$data['tab_style'] = $this->language->get('tab_style');
		$data['tab_about'] = $this->language->get('tab_about');
		$data['tab_email'] = $this->language->get('tab_email');

		// Help
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_column'] = $this->language->get('entry_column');
		$data['entry_sheet'] = $this->language->get('entry_sheet');
		$data['entry_note'] = $this->language->get('entry_note');
		$data['entry_title'] = $this->language->get('entry_title');
		$data['entry_author'] = $this->language->get('entry_author');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_column_select'] = $this->language->get('entry_column_select');
		$data['entry_keyword'] = $this->language->get('entry_keyword');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_union'] = $this->language->get('entry_union');
		$data['entry_option'] = $this->language->get('entry_option');
		$data['entry_alltotal'] = $this->language->get('entry_alltotal');
		$data['entry_contact'] = $this->language->get('entry_contact');
		$data['entry_support'] = $this->language->get('entry_support');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');

		$data['entry_contact_cell_start'] = $this->language->get('entry_contact_cell_start');
		$data['entry_contact_cell_finish'] = $this->language->get('entry_contact_cell_finish');
		$data['entry_contact_logo'] = $this->language->get('entry_contact_logo');
		$data['entry_contact_telephone'] = $this->language->get('entry_contact_telephone');
		$data['entry_contact_market_name'] = $this->language->get('entry_contact_market_name');
		$data['entry_contact_email'] = $this->language->get('entry_contact_email');
		$data['entry_contact_address'] = $this->language->get('entry_contact_address');
		$data['entry_contact_work'] = $this->language->get('entry_contact_work');

		$data['entry_font_family'] = $this->language->get('entry_font_family');
		$data['entry_font_size'] = $this->language->get('entry_font_size');
		$data['entry_font_bold'] = $this->language->get('entry_font_bold');
		$data['entry_font_italic'] = $this->language->get('entry_font_italic');
		$data['entry_font_color'] = $this->language->get('entry_font_color');
		$data['entry_font_fill'] = $this->language->get('entry_font_fill');

		$data['entry_cell_horizontal'] = $this->language->get('entry_cell_horizontal');
		$data['entry_cell_vertical'] = $this->language->get('entry_cell_vertical');
		$data['entry_cell_fill'] = $this->language->get('entry_cell_fill');
		$data['entry_cell_height'] = $this->language->get('entry_cell_height');

		$data['entry_header'] = $this->language->get('entry_header');
		$data['entry_cell'] = $this->language->get('entry_cell');
		$data['entry_support'] = $this->language->get('entry_support');

		$data['entry_email_status'] = $this->language->get('entry_email_status');
		$data['entry_email_to'] = $this->language->get('entry_email_to');

		$data['help_header'] = $this->language->get('help_header');
		$data['help_note'] = $this->language->get('help_note');
		$data['help_alltotal'] = $this->language->get('help_alltotal');
		$data['help_union'] = $this->language->get('help_union');
		$data['help_contact'] = $this->language->get('help_contact');
		$data['help_option'] = $this->language->get('help_option');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['error_permission'] = $this->language->get('error_permission');
		$data['error_limit'] = $this->language->get('error_limit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['action'] = $this->url->link('extension/module/orderexcel', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/orderexcel', $data));
	}

	protected function validate() {

		if (!$this->user->hasPermission('modify', 'extension/module/orderexcel')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	private function clearDir(){

		array_map('unlink', array_filter( (array) glob(DIR_IMAGE."catalog/orderexcel/*.xlsx")));

	}

}