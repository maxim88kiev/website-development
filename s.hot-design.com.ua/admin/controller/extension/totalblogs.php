<?php
class ControllerExtensionTotalBlogs extends Controller {
	public function index() {
		$this->load->language('extension/totalblogs');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_view'] = $this->language->get('text_view');

		$data['user_token'] = $this->session->data['user_token'];

		$this->load->model('extension/blog');

		$data['totalblog'] = $this->model_extension_blog->getTotalTmdBlog();

		$data['viewblog'] = $this->url->link('extension/blog', 'user_token=' . $this->session->data['user_token'], true);

		return $this->load->view('extension/totalblogs', $data);
	}
}
