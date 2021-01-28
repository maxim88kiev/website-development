<?php
class ControllerExtensionTotalblogcategory extends Controller {
		public function index() {
		$this->load->language('extension/totalblogcategory');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		$data['user_token'] = $this->session->data['user_token'];

		// Total Orders
		$this->load->model('extension/tmdblogcategory');
		
		$data['totalblogcategory'] = $this->model_extension_tmdblogcategory->getTotalTmdblogcategories();

		$data['viewtmdblogcategory'] = $this->url->link('extension/tmdblogcategory', 'user_token=' . $this->session->data['user_token'], true);

		return $this->load->view('extension/totalblogcategory', $data);
	}
}
