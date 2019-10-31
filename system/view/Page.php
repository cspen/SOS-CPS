<?php

class Page {
	
	public function __construct() {
		$args = func_get_args();
		$num = func_num_args();
		if (method_exists($this,$f='__construct'.$num)) {
			call_user_func_array(array($this,$f),$args);
		}		
	}
	
	function __construct5($title, $description, $content,
			$menu, $feature) {
		$this->title;
		$this->description;
		$this->content;
		$this->menu;
		$this->feature;
	}
	
	function __construct6($title, $description, $content,
			$menu, $feature, $footer) {
		$this->title;
		$this->description;
		$this->content;
		$this->menu;
		$this->feature;
		$this->footer;
	}
	
	function __construct7($template, $title, $description, $content,
			$menu, $feature, $footer) {
		$this->template;
		$this->title;
		$this->description;
		$this->content;
		$this->menu;
		$this->feature;
		$this->footer;
	}	
	
// Setters
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
	
// Getters
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
	
	// The template for the page
	private $template = "templates/home_template.php";		
	
	private $title;			// Page title
	private $description;	// Page description (meta tag)
	private $content;		// Page content
	private $menu;			// Site menu
	private $feature;		// Page feature
	
	// Page footer
	private $footer = "templates/default_footer_template.php";		
}

?>