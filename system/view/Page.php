<?php

class Page {
	
	public function __construct() {
		$args = func_get_args();
		
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
	
	public function getTemplate() {
		return $this->template;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getDescription() {
		return $this->description;
	}
	
	public function getContent() {
		return $this->content;
	}
	
	public function getMenu() {
		return $this->menu;
	}
	
	public function getFeature() {
		return $this->feature;
	}
	
	public function getFooter() {
		return $this->footer;
	}
	
	private $template;		// The template for the page
	private $title;			// Page title
	private $description;	// Page description (meta tag)
	private $content;		// Page content
	private $menu;			// Site menu
	private $feature;		// Page feature
	private $footer;		// Page footer
}

?>