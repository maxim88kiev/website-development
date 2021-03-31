<?php

class ControllerExtensionPaymentSchet extends Controller
{
	private $error = array();

	public function index()
	{
		$this->load->language('extension/payment/schet');
		$this->document->setTitle($this->language->get('heading_title'));

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$this->load->model('setting/setting');
			$this->model_setting_setting->editSetting('schet', $this->request->post);
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->redirect($this->url->link('extension/payment/schet/license', 'token=' . $this->session->data['token'] . '&type=payment', true));
		}
		
		$this->language_info = array('heading_title', 'text_edit', 'text_enabled', 'text_disabled', 'text_all_zones', 'entry_director', 'entry_accountant', 'entry_legal_address', 'entry_actual_address', 'entry_bank_supplier', 'entry_description', 'entry_instruction', 'entry_inn', 'entry_kpp', 'entry_account', 'entry_bik', 'entry_corschet', 'entry_telephone', 'entry_mobilephone', 'entry_images', 'entry_signature', 'entry_stamp', 'entry_size_images', 'entry_width', 'entry_height', 'entry_total', 'entry_order_status', 'entry_geo_zone', 'entry_status', 'entry_sort_order', 'help_supplier', 'help_director', 'help_accountant', 'help_legal_address', 'help_actual_address', 'help_bank_supplier', 'help_description', 'help_instruction', 'help_total', 'button_save', 'button_cancel', 'entry_supplier', 'entry_signature_accountant');
		$language = array('heading_title', 'text_edit', 'text_enabled', 'text_disabled', 'text_all_zones', 'entry_director', 'entry_accountant', 'entry_legal_address', 'entry_actual_address', 'entry_bank_supplier', 'entry_description', 'entry_instruction', 'entry_inn', 'entry_kpp', 'entry_account', 'entry_bik', 'entry_corschet', 'entry_telephone', 'entry_mobilephone', 'entry_images', 'entry_signature', 'entry_stamp', 'entry_size_images', 'entry_width', 'entry_height', 'entry_total', 'entry_order_status', 'entry_geo_zone', 'entry_status', 'entry_sort_order', 'help_supplier', 'help_director', 'help_accountant', 'help_legal_address', 'help_actual_address', 'help_bank_supplier', 'help_description', 'help_instruction', 'help_total', 'button_save', 'button_cancel', 'entry_supplier', 'entry_signature_accountant');

		foreach ($language as $value) {
			$data[$value] = $this->language->get($value);
		}

		$data['error_warning'] = '';
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		}

		$data['success'] = '';
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		}

		$data['error_inn'] = '';
		if (isset($this->error['inn'])) {
			$data['error_inn'] = $this->error['inn'];
		}

		$data['error_account'] = '';
		if (isset($this->error['account'])) {
			$data['error_account'] = $this->error['account'];
		}

		$data['error_bik'] = '';
		if (isset($this->error['bik'])) {
			$data['error_bik'] = $this->error['bik'];
		}

		$data['error_corschet'] = '';
		if (isset($this->error['corschet'])) {
			$data['error_corschet'] = $this->error['corschet'];
		}
		
		$this->load->model('localisation/language');
		$languages = $this->model_localisation_language->getLanguages();

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_payment'), 'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('heading_title'), 'href' => $this->url->link('extension/payment/schet', 'token=' . $this->session->data['token'], true));
		$data['action'] = $this->url->link('extension/payment/schet', 'token=' . $this->session->data['token'], true);
		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true);

		foreach ($languages as $language) {
			$data['error_supplier' . $language['language_id']] = '';
			if (isset($this->error['supplier' . $language['language_id']])) {
				$data['error_supplier' . $language['language_id']] = $this->error['supplier' . $language['language_id']];
			}

			$data['error_director' . $language['language_id']] = '';
			if (isset($this->error['director' . $language['language_id']])) {
				$data['error_director' . $language['language_id']] = $this->error['director' . $language['language_id']];
			}

			$data['error_bank_supplier' . $language['language_id']] = '';
			if (isset($this->error['bank_supplier' . $language['language_id']])) {
				$data['error_bank_supplier' . $language['language_id']] = $this->error['bank_supplier' . $language['language_id']];
			}

			$data['schet_supplier' . $language['language_id']] = $this->config->get('schet_supplier' . $language['language_id']);
			$data['schet_director' . $language['language_id']] = $this->config->get('schet_director' . $language['language_id']);
			$data['schet_accountant' . $language['language_id']] = $this->config->get('schet_accountant' . $language['language_id']);
			$data['schet_legal_address' . $language['language_id']] = $this->config->get('schet_legal_address' . $language['language_id']);
			$data['schet_actual_address' . $language['language_id']] = $this->config->get('schet_actual_address' . $language['language_id']);
			$data['schet_bank_supplier' . $language['language_id']] = $this->config->get('schet_bank_supplier' . $language['language_id']);
			$data['schet_description' . $language['language_id']] = $this->config->get('schet_description' . $language['language_id']);
			$data['schet_instruction' . $language['language_id']] = $this->config->get('schet_instruction' . $language['language_id']);

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$data['schet_supplier' . $language['language_id']] = $this->request->post['schet_supplier' . $language['language_id']];
				$data['schet_director' . $language['language_id']] = $this->request->post['schet_director' . $language['language_id']];
				$data['schet_accountant' . $language['language_id']] = $this->request->post['schet_accountant' . $language['language_id']];
				$data['schet_legal_address' . $language['language_id']] = $this->request->post['schet_legal_address' . $language['language_id']];
				$data['schet_actual_address' . $language['language_id']] = $this->request->post['schet_actual_address' . $language['language_id']];
				$data['schet_bank_supplier' . $language['language_id']] = $this->request->post['schet_bank_supplier' . $language['language_id']];
				$data['schet_description' . $language['language_id']] = $this->request->post['schet_description' . $language['language_id']];
				$data['schet_instruction' . $language['language_id']] = $this->request->post['schet_instruction' . $language['language_id']];
			}
		}

		$data['schet_inn'] = $this->config->get('schet_inn');
		$data['schet_kpp'] = $this->config->get('schet_kpp');
		$data['schet_account'] = $this->config->get('schet_account');
		$data['schet_bik'] = $this->config->get('schet_bik');
		$data['schet_corschet'] = $this->config->get('schet_corschet');
		$data['schet_telephone'] = $this->config->get('schet_telephone');
		$data['schet_mobilephone'] = isset($this->request->post['schet_mobilephone']) ? $this->request->post['schet_mobilephone'] : '';
		$data['schet_mobilephone'] = $this->config->get('schet_mobilephone');
		$data['schet_image_signature'] = $this->config->get('schet_image_signature');
		$data['schet_image_signature_accountant'] = $this->config->get('schet_image_signature_accountant');
		$data['schet_image_stamp'] = $this->config->get('schet_image_stamp');
		$data['schet_signature_width'] = $this->config->get('schet_signature_width');
		$data['schet_signature_height'] = $this->config->get('schet_signature_height');
		$data['schet_signature_accountant_width'] = $this->config->get('schet_signature_accountant_width');
		$data['schet_signature_accountant_height'] = $this->config->get('schet_signature_accountant_height');
		$data['schet_stamp_width'] = $this->config->get('schet_stamp_width');
		$data['schet_stamp_height'] = $this->config->get('schet_stamp_height');
		$data['schet_total'] = $this->config->get('schet_total');
		$data['languages'] = $languages;
		$data['schet_order_status_id'] = $this->config->get('schet_order_status_id');
		$this->load->model('localisation/order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		$data['schet_geo_zone_id'] = $this->config->get('schet_geo_zone_id');
		$this->load->model('localisation/geo_zone');
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		$data['schet_sort_order'] = $this->config->get('schet_sort_order');

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data['schet_inn'] = $this->request->post['schet_inn'];
			$data['schet_kpp'] = $this->request->post['schet_kpp'];
			$data['schet_account'] = $this->request->post['schet_account'];
			$data['schet_bik'] = $this->request->post['schet_bik'];
			$data['schet_corschet'] = $this->request->post['schet_corschet'];
			$data['schet_telephone'] = $this->request->post['schet_telephone'];
			$data['schet_image_signature'] = $this->request->post['schet_image_signature'];
			$data['schet_image_signature_accountant'] = $this->request->post['schet_image_signature_accountant'];
			$data['schet_image_stamp'] = $this->request->post['schet_image_stamp'];
			$data['schet_signature_width'] = $this->request->post['schet_signature_width'];
			$data['schet_signature_height'] = $this->request->post['schet_signature_height'];
			$data['schet_signature_accountant_width'] = $this->request->post['schet_signature_accountant_width'];
			$data['schet_signature_accountant_height'] = $this->request->post['schet_signature_accountant_height'];
			$data['schet_stamp_width'] = $this->request->post['schet_stamp_width'];
			$data['schet_stamp_height'] = $this->request->post['schet_stamp_height'];
			$data['schet_total'] = $this->request->post['schet_total'];
			$data['schet_order_status_id'] = $this->request->post['schet_order_status_id'];
			$data['schet_geo_zone_id'] = $this->request->post['schet_geo_zone_id'];
			$data['schet_sort_order'] = $this->request->post['schet_sort_order'];
			$data['schet_status'] = $this->request->post['schet_status'];
		}

		$data['schet_status'] = $this->config->get('schet_status');
		$this->load->model('tool/image');

		$data['thumb_signature'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		if (! empty($this->config->get('schet_image_signature'))) {
			$data['thumb_signature'] = $this->model_tool_image->resize($this->config->get('schet_image_signature'), 100, 100);
		}

		$data['thumb_signature_accountant'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		if (! empty($this->config->get('schet_image_signature_accountant'))) {
			$data['thumb_signature_accountant'] = $this->model_tool_image->resize($this->config->get('schet_image_signature_accountant'), 100, 100);
		}

		$data['thumb_stamp'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		if (! empty($this->config->get('schet_image_stamp'))) {
			$data['thumb_stamp'] = $this->model_tool_image->resize($this->config->get('schet_image_stamp'), 100, 100);
		}
		
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/schet', $data));
	}

	public function license()
	{
		$this->load->language('extension/payment/schet');
		$this->document->setTitle($this->language->get('heading_license'));
		$this->load->model('setting/setting');
		$this->session->data['success'] = $this->language->get('text_success_license');
		$this->response->redirect($this->url->link('extension/payment/schet', 'token=' . $this->session->data['token'], true));
		$this->language_info = array('heading_license', 'text_license_activate', 'text_license_info', 'text_secret_key', 'text_clipboard', 'entry_activation_secret_key', 'entry_secret_key', 'entry_order_id', 'entry_product_license_code', 'entry_license_key', 'tab_info', 'tab_license', 'button_save', 'button_cancel');
		$language = array('heading_license', 'text_license_activate', 'text_license_info', 'text_secret_key', 'text_clipboard', 'entry_activation_secret_key', 'entry_secret_key', 'entry_order_id', 'entry_product_license_code', 'entry_license_key', 'tab_info', 'tab_license', 'button_save', 'button_cancel');
		$data[$language] = $this->language->get($language);
		$data_domain = array('salt' => 'customer_domain_activated_license', 'code' => 'PAY-SCH-OC-License-FOR-Activated', 'domain' => $_SERVER['HTTP_HOST']);
		$data_domain = array('salt' => 'customer_domain_activated_license', 'code' => 'PAY-SCH-OC-License-FOR-Activated', 'domain' => 'www.' . $_SERVER['HTTP_HOST']);
		$str_domain = $_SERVER['HTTP_HOST'];
		$data['secret_key'] = strtoupper(sha1(hash('md5', $str_domain)));

		$data['token'] = $this->session->data['token'];
		$data['error_warning'] = $this->error['warning'];
		$data['error_warning'] = '';
		$data['error_license'] = $this->session->data['error_license'];
		unset($this->session->data['error_license']);
		$data['error_license'] = '';
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_home'), 'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('text_payment'), 'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true));
		$data['breadcrumbs'][] = array('text' => $this->language->get('heading_license'), 'href' => $this->url->link('extension/payment/schet/license', 'token=' . $this->session->data['token'], true));
		$data['action'] = $this->url->link('extension/payment/schet/license', 'token=' . $this->session->data['token'], true);
		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true);
		$license_data = array('schet_license_order_id', 'schet_license_product_code', 'schet_license_secret_key', 'schet_license_key');
		$license_value = array('schet_license_order_id', 'schet_license_product_code', 'schet_license_secret_key', 'schet_license_key');
		$data[$license_value] = $this->request->post[$license_value];
		$data[$license_value] = $this->config->get($license_value);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/schet_license', $data));
	}

	protected function validateLicense()
	{
		if (!$this->user->hasPermission('modify', 'extension/payment/schet')) {
			$this->error['warning'] = $this->language->get('error_schet');
		}

		return !$this->error;
	}

	protected function validate()
	{
		if (!$this->user->hasPermission('modify', 'extension/payment/schet')) {
			$this->error['warning'] = $this->language->get('error_permission');
			$this->load->model('localisation/language');
			$languages = $this->model_localisation_language->getLanguages();

			$this->error['supplier' . $language['language_id']] = $this->language->get('error_supplier');
			$this->error['director' . $language['language_id']] = $this->language->get('error_director');
			$this->error['bank_supplier' . $language['language_id']] = $this->language->get('error_bank_supplier');
			$this->error['inn'] = $this->language->get('error_inn');
			$this->error['account'] = $this->language->get('error_account');
			$this->error['bik'] = $this->language->get('error_bik');
		} else {
			$this->error['corschet'] = $this->language->get('error_corschet');

			if (!isset($this->error['warning'])) {
			}

		}

		$this->error['warning'] = $this->language;
		return !$this->error;
	}

	public function uninstall()
	{
		$this->load->model('setting/setting');
		$this->model_setting_setting->deleteSetting('schet_license');
		$this->model_setting_setting->deleteSetting('payment_schet');
	}
}
