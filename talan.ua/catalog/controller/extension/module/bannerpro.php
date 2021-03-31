<?php
class ControllerExtensionModuleBannerpro extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('tool/image');

		$this->document->addStyle('catalog/view/javascript/jquery/owl-carousel/bannerpro-owl.carousel.css');
		$this->document->addStyle('catalog/view/javascript/jquery/owl-carousel/owl.transitions.css');
		$this->document->addScript('catalog/view/javascript/jquery/owl-carousel/bannerpro-owl.carousel.min.js');

		$data['bannerspro'] = array();
    $data['animation'] = $setting['animation'];
    $data['text'] = $setting['text'];
    $data['height'] = $setting['height'];
    $data['width'] = $setting['width'];
    $data['banner_bg'] = $setting['banner-bg'];
    $data['texthover'] = $setting['texthover'];
    $data['navigation'] = $setting['navigation'];
    $data['pagination'] = $setting['pagination'];
    $data['mobile_image'] = (isset($setting['mobile_image'])) ? $setting['mobile_image'] : '';
    $data['hide_text'] = (isset($setting['hide_text'])) ? $setting['hide_text'] : '';
    $data['css_class'] = (isset($setting['css_class'])) ? $setting['css_class'] : '';
    
    $results = array(); 
    // Sort Order for banner
    if(isset($setting['banner_image'][$this->config->get('config_language_id')])){
      $results = $setting['banner_image'][$this->config->get('config_language_id')];
      usort($results, function($a, $b){
        if($a['sort_order'] === $b['sort_order'])
          return 0;  
        return $a['sort_order'] > $b['sort_order'] ? 1 : -1;
      });
    
   
      foreach ($results as $result) {
        if (is_file(DIR_IMAGE . $result['image'])) {
          $data['bannerspro'][] = array(
            'title' => htmlspecialchars_decode($result['banner_image_description'],ENT_QUOTES),
            'link'  => $result['link'],
            'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
          );
        }
      }
      
      if (isset($this->request->get['path']) && isset($setting['categories'])) {
        $parts = explode('_', (string)$this->request->get['path']);
        $category_id = (int)array_pop($parts);    
        if(!in_array($category_id, $setting['categories'])) {
          return false;
        } 
      }
      
      $data['module'] = $module++;

      return $this->load->view('extension/module/bannerpro', $data);
    }
	}
}