<?php
class ControllerExtensionTotalcomments extends Controller {
	public function index() {
		$this->load->language('extension/totalcomments');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		$data['user_token'] = $this->session->data['user_token'];

		// Total Orders
		$this->load->model('extension/blogcomment');
		
		$data['totalcomment'] = $this->model_extension_blogcomment->getTotalTmdblogcomment();
		
		$data['viewcomment'] = $this->url->link('extension/totalcomments', 'user_token=' . $this->session->data['user_token'], true);

		return $this->load->view('extension/totalcomments', $data);
	}
}
