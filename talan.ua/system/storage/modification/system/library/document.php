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

			private $robots;
			
		public function setRobots($value) {
			$this->robots = $value;
		}
	
		public function getRobots() {
			return $this->robots;
		}
	
			


        private $seo_meta = '';

        public function addSeoMeta($html) {
          $this->seo_meta .= $html;
        }
        
        public function renderSeoMeta() {
          return $this->seo_meta;
        }
      

  // OCFilter start
  public function setNoindex($state = false) {
  	$this->noindex = $state;
  }

	public function isNoindex() {
		return $this->noindex;
	}
  // OCFilter end
      
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
		$this->links[$href.$rel] = array(
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

	public function addScript($href, $postion = 'header') {
		$this->scripts[$postion][$href] = $href;
	}

	public function getScripts($postion = 'header') {
		if (isset($this->scripts[$postion])) {
			return $this->scripts[$postion];
		} else {
			return array();
		}
	}
}