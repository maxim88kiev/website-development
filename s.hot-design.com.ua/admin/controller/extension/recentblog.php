<?php
class ControllerExtensionRecentblog extends Controller {
	public function index() {
		$this->load->language('extension/recentblog');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_no_results'] = $this->language->get('text_no_results');
		
		$data['column_sr_no']  = $this->language->get('column_sr_no');
		$data['column_post']   = $this->language->get('column_post');
		$data['column_author'] = $this->language->get('column_author');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_action'] = $this->language->get('column_action');
		$data['button_view']   = $this->language->get('button_view');
		$data['column_totalcoment']   = $this->language->get('column_totalcoment');

		$data['user_token'] = $this->session->data['user_token'];

		
		$url='';
		$this->load->model('extension/blog');
		$data['recentblogs'] = array();
		
		
		$results = $this->model_extension_blog->getRecentBlogs();
		
		foreach ($results as $result) {
			
			$total=$this->model_extension_blog->gettotalcomment($result['blog_id']);
			
			$data['recentblogs'][] = array(				
			'blog_id' => $result['blogid'],
			'name'   => $result['name'],
			'author' => $result['cusname'],
			'total'  => $total,
			'status' => $result['status'],
			'href' => $this->url->link('extension/blog', 'user_token=' . $this->session->data['user_token'] . '&blog_id=' . $result['blog_id'] . $url, true),
		);
		}

		return $this->load->view('extension/recentblog', $data);
	}
}
