<?php

class SOSView implements Settings {
	
	public function __construct() {
		$this->template = $this::HOME; // Default
	}
	
	private $template;		// The template for the page
}

?>