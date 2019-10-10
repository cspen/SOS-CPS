<?php

class SOSView implements Settings {
	
	public function __construct() {
		$this->template = $this::HOME; // Default
	}
	
	public function output($template, $Content) {
		
	}
	
	
	
	private $template;		// The template for the page
	
	private const HOME = "Template/home_template.php";
}

?>