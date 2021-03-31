<?php
class ControllerCommonFooter extends Controller {
	public function index() {
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

		return $this->load->view('common/footer', $data);
	}
}
