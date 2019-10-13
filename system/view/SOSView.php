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
		
	}
	
	public function setPageContent($content) {
		
	}
	
	public function setPageNavigationMenu($menu) {
		
	}
	
	public function setPageFeature($feature) {
		
	}
	
	public function setPageFooter($footer) {
		
	}
		
	private $template;		// The template for the page
	
	const HOME = "Template/home_template.php";
}

?>