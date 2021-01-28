<?php
class ControllerExtensionDashmenu extends Controller {
	public function index() {
		$this->load->language('extension/dashmenu');

		$data['text_dash'] = $this->language->get('text_dash');
		$data['text_blog'] = $this->language->get('text_blog');
		$data['text_cate'] = $this->language->get('text_cate');
		$data['text_comm'] = $this->language->get('text_comm');
		$data['text_sett'] = $this->language->get('text_sett');
		$data['text_addmodule'] = $this->language->get('text_addmodule');

		$data['user_token'] = $this->session->data['user_token'];
		
		$data['tmdblogsetting'] = $this->url->link('extension/tmdblogsetting', 'user_token=' . $this->session->data['user_token'], true);
		$data['blogcategory'] = $this->url->link('extension/tmdblogcategory', 'user_token=' . $this->session->data['user_token'], true);
		$data['dashboard'] = $this->url->link('extension/blogdashboard', 'user_token=' . $this->session->data['user_token'], true);
		$data['blog'] = $this->url->link('extension/blog', 'user_token=' . $this->session->data['user_token'], true);
		$data['comment'] = $this->url->link('extension/blogcomment', 'user_token=' . $this->session->data['user_token'], true);
		$data['addmodule'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true);
		$data['dashboard_menu']=false;
		$data['blogs_menu']=false;
		$data['category_menu']=false;
		$data['comment_menu']=false;
		$data['setting_menu']=false;				
		$data['module_menu']=false;				
		if(isset($this->request->get['route']) && $this->request->get['route']=='extension/blogdashboard')
		{
		 $data['dashboard_menu']=true;
		}
		
		if(!isset($this->request->get['route']))
		{
		 $data['dashboard_menu']=true;
		}
		
		if(isset($this->request->get['route']) && $this->request->get['route']=='extension/blog')
		{
		$data['blogs_menu']=true;
		}
		
		if(isset($this->request->get['route']) && $this->request->get['route']=='extension/tmdblogcategory'){
		$data['category_menu']=true;
		}
		if(isset($this->request->get['route']) && $this->request->get['route']=='extension/blogcomment'){
		$data['comment_menu']=true;
		}
		if(isset($this->request->get['route']) && $this->request->get['route']=='extension/tmdblogsetting'){
		$data['setting_menu']=true;
		}
		if(isset($this->request->get['route']) && $this->request->get['route']=='extension/module'){
		$data['module_menu']=true;
		}
		
		return $this->load->view('extension/dashmenu', $data);
	}
}
