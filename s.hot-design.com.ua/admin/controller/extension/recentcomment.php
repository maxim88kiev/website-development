<?php
class ControllerExtensionRecentcomment extends Controller {
	public function index() {
		$this->load->language('extension/recentcomment');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['column_sr_no'] = $this->language->get('column_sr_no');
		$data['column_post'] = $this->language->get('column_post');
		$data['column_author'] = $this->language->get('column_author');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_action'] = $this->language->get('column_action');
		$data['button_edit'] = $this->language->get('button_edit');

		$data['user_token'] = $this->session->data['user_token'];

		$data['activities'] = array();

		$this->load->model('report/activity');

		$results = $this->model_report_activity->getActivities();

		foreach ($results as $result) {
			$comment = vsprintf($this->language->get('text_' . $result['key']), unserialize($result['data']));

			$find = array(
				'customer_id=',
				'order_id=',
				'affiliate_id=',
				'return_id='
			);

			$replace = array(
				$this->url->link('customer/customer/edit', 'user_token=' . $this->session->data['user_token'] . '&customer_id=', true),
				$this->url->link('sale/order/info', 'user_token=' . $this->session->data['user_token'] . '&order_id=', true),
				$this->url->link('marketing/affiliate/edit', 'user_token=' . $this->session->data['user_token'] . '&affiliate_id=', true),
				$this->url->link('sale/return/edit', 'user_token=' . $this->session->data['user_token'] . '&return_id=', true)
			);

			$data['activities'][] = array(
				'comment'    => str_replace($find, $replace, $comment),
				'date_added' => date($this->language->get('datetime_format'), strtotime($result['date_added']))
			);
		}

		return $this->load->view('extension/recentcomment', $data);
	}
}
