<?php

class SOSView implements Settings {
	
	public function __construct() {
		$this->template = $this::HOME; // Default
	}
	
	/**
	 * 
	 * @param String $template reference to local constant
	 * @param String $Content the content of the page
	 * @param String $navMenu navigation menu
	 * @param String $feature special featured content
	 * @param String $footer page footer
	 */
	public function output($template, $Content, $navMenu, $feature, $footer) {
		
	}
	
	
	
	
	private $template;		// The template for the page
	
	private const HOME = "Template/home_template.php";
}

?>