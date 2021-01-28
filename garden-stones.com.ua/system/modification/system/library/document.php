<?php
class Document {
	private $title;
	private $description;
	private $keywords;

  // OCFilter start
  private $noindex = false;
  // OCFilter end
      
	private $links = array();
	private $styles = array();
	private $scripts = array();

				private $ogmetas = array();
                


  // OCFilter start
  public function setNoindex($state = false) {
  	$this->noindex = $state;
  }

	public function isNoindex() {
		return $this->noindex;
	}
  // OCFilter end
      

				private $tc_og;
				public function setTc_og($data){$this->tc_og = $data;}
				public function getTc_og(){return $this->tc_og;}
			
	public function setTitle($title) {
		$this->title = $title;
	}

	public function getTitle() {
		return $this->title;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setKeywords($keywords) {
		$this->keywords = $keywords;
	}

	public function getKeywords() {
		return $this->keywords;
	}

	public function addLink($href, $rel) {
		$this->links[$href] = array(
			'href' => $href,
			'rel'  => $rel
		);
	}


  // OCFilter canonical fix start
	public function deleteLink($rel) {
    foreach ($this->links as $href => $link) {
      if ($link['rel'] == $rel) {
      	unset($this->links[$href]);
      }
    }
	}
  // OCFilter canonical fix end
      
	public function getLinks() {
		return $this->links;
	}


				public function addOGMeta($meta_name, $content) {
		            $this->ogmetas[] = array(
		        	'meta_name'  => $meta_name,
	        		'content'   => $content
	            	);
            	}
				public function getOGMeta() {
            		return $this->ogmetas;
            	}
                
	public function addStyle($href, $rel = 'stylesheet', $media = 'screen') {
		$this->styles[$href] = array(
			'href'  => $href,
			'rel'   => $rel,
			'media' => $media
		);
	}

	public function getStyles() {
		return $this->styles;
	}

	public function addScript($script) {
		$this->scripts[md5($script)] = $script;
	}

	public function getScripts() {
		return $this->scripts;
	}
}