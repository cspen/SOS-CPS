<?php

class Page {
	
	public function __construct() {
		
	}

	public function setTitle($title) {
		$this->title = $title;
	}
	
	public function setDescription($description) {
		$this->description = $description;
	}
	
	public function setContent($content) {
		$this->content = $content;
	}
	
	public function setNavigationMenu($menu) {
		$this->menu = $menu;
	}
	
	public function setFeature($feature) {
		$this->feature = $feature;
	}
	
	public function setFooter($footer) {
		$this->footer = $footer;
	}
	
	private $title;			// Page title
	private $description;	// Page description (meta tag)
	private $content;		// Page content
	private $menu;			// Site menu
	private $feature;		// Page feature
	private $footer;		// Page footer
}

?>