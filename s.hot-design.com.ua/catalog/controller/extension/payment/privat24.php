<?php
class ControllerExtensionPaymentPrivat24 extends Controller {
	public function index() {
		$this->load->language('extension/payment/privat24');
		$data['button_confirm'] = $this->language->get('button_confirm');
		$data['text_loading'] = $this->language->get('text_loading');
		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		$data['action'] = $this->config->get('payment_privat24_url');
		$curr_code = 'UAH';
		$data['amt'] = $this->currency->format($this->currency->convert($order_info['total'], $order_info['currency_code'], $curr_code), $curr_code, $order_info['currency_value'], false);
		$data['ccy'] = $curr_code;
		$data['merchant'] = $this->config->get('payment_privat24_merchant');
		$data['order'] = $this->session->data['order_id'];
		$data['details'] = $this->language->get('text_order_id') . ' ' .$this->session->data['order_id'] . " (" . html_entity_decode($this->config->get('config_name') . ")", ENT_QUOTES, 'UTF-8');
		$data['return_url'] = $this->url->link('extension/payment/privat24/callback', '', 'SSL');
		$data['server_url'] = '';

		return $this->load->view('extension/payment/privat24', $data);
	}

	public function callback() {
		if (isset($this->request->post['payment']) && isset($this->request->post['signature'])) {
			$signature = sha1(md5(htmlspecialchars_decode($this->request->post['payment'], ENT_QUOTES)  . trim($this->config->get('payment_privat24_password'))));
			$info = explode('&', htmlspecialchars_decode($this->request->post['payment'], ENT_QUOTES));
			foreach ($info as $value) {
				$z = explode('=', $value);
				$data[$z[0]] = $z[1];
			}

			if ($signature == $this->request->post['signature']) {
				$this->load->model('checkout/order');
				$order_info = $this->model_checkout_order->getOrder($data['order']);
				if ($order_info) {
					if ($data["state"] == 'ok' || ($data["state"] == 'test' && $data["ref"] == 'test payment')) {
						$this->model_checkout_order->addOrderHistory($data['order'], $this->config->get('payment_privat24_order_status_id'), '', true);
						$this->response->redirect($this->url->link('checkout/success', '', 'SSL'));
					} else {
						$this->response->redirect($this->url->link('checkout/failure', '', 'SSL'));
					}
				} else {
					$this->response->redirect($this->url->link('checkout/failure', '', 'SSL'));
				}
			} else {
				$this->response->redirect($this->url->link('checkout/failure', '', 'SSL'));
			}
		} else {
			$this->response->redirect($this->url->link('checkout/failure', '', 'SSL'));
		}
	}
}