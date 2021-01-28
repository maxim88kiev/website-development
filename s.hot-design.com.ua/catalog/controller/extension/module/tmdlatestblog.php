<?php

class ControllerExtensionModuleTmdLatestblog extends Controller {

	public function index($setting) {

		$this->load->language('extension/module/tmdlatestblog');



		$data['heading_title'] = $this->language->get('heading_title');

		

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');



		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');



		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');



	

		$data['text_tax'] = $this->language->get('text_tax');



		$data['button_cart'] = $this->language->get('button_cart');

		$data['button_wishlist'] = $this->language->get('button_wishlist');

		$data['button_compare'] = $this->language->get('button_compare');



		$this->load->model('extension/blog');



		$this->load->model('tool/image');

		$data['latestblogs'] = array();

		$filter_data = array(	

			'sort'  => 'a.date_added',

			'order' => 'DESC',

			'start' => 0,

			'limit' => $setting['limit']

		);

		$results = $this->model_extension_blog->getBlogs($filter_data);
		//print_r($results); die();
		
			foreach ($results as $result) {

			//$viewd = ;
				if ($result['image']) {

					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);

				} else {

					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);

				}

				$comments = $this->model_extension_blog->Updatecomment($result['blog_id']);

				$data['latestblogs'][] = array(			

					'blog_id'  => $result['blog_id'],
					'thumb'    => $image,
					'name'     => $result['name'],
					'viewed'   => $result['viewed'],
					'date_added'  => date($this->language->get('fulldate_format_added'), strtotime($result['date_modified'])),
					'comment'     => $comments,
					'description' => utf8_substr(strip_tags(html_entity_decode($result[
					'description'], ENT_QUOTES, 'UTF-8')), 0, 75).'...'. '<a 	href="'. $this->url->link('extension/blog', 'blog_id=' . $result['blog_id']) .'">Read more</a>',
					'href'        => $this->url->link('extension/blog', 'blog_id=' . $result['blog_id']),
			
				);
	
			}
			
			return $this->load->view('extension/module/tmdlatestblog', $data);
			

		

	}

}
