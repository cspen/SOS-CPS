<?php

class SOSView implements Settings {
	
	public function __construct() {
		$this->template = $this::HOME; // Default
	}
	
	/**
	 * Send the response to the client.
	 */
	public function output() {
		
	}	
	
	public function setPageTemplate($template) {
		$this->template = $template;
	}
	
	public function setPageContent($content) {
		$this->content = $content;
	}
	
	public function setPageNavigationMenu($menu) {
		$this->menu = $menu;
	}
	
	public function setPageFeature($feature) {
		$this->feature = $feature;
	}
	
	public function setPageFooter($footer) {
		$this->footer = $footer;
	}
		
	private $template;		// The template for the page
	private $content;		// Page content
	private $menu;			// Site menu
	private $feature;		// Page feature
	private $footer;		// Page footer
	
	const HOME = "Template/home_template.php";
}

?>