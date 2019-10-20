<?php
// require_once('../Settings.php');

class SOSView implements Settings {
	
	public function __construct() {
		// Defaults
		$this->template = $this::HOME;
		$this->content = 0;
		$this->menu = 0;
		$this->feature = 0;
		$this->footer = $this::DEFAULT_PAGE_FOOTER;
	}
	
	/**
	 * Send the response to the client.
	 */
	public function output() {		
		$pageTitle = "Page Title";
		$description = "Page Description";
		$contentTitle = "Content Title";
		$contentBody = "Content Body";
		$sideMenuTitle = "SIDE MENU TITLE";
		$sideMenu = null;
		
		// Load page footer
		require_once($this->footer);
		
		// Load page template
		require_once($this->template);
		
		// Display the page
		echo $html;
	}	
	
	public function setPageTemplate($template) {
		$this->template = $template;
	}
	
	public function setPageTitle($title) {
		$this->title = $title;
	}
	
	public function setPageDescription($description) {
		$this->description = $description;
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
	private $title;			// Page title
	private $description;	// Page description (meta tag)
	private $content;		// Page content
	private $menu;			// Site menu
	private $feature;		// Page feature
	private $footer;		// Page footer
	
	// Default view settings
	const HOME = "templates/home_template.php";
	const DEFAULT_PAGE_CONTENT = "";
	const DEFAULT_PAGE_MENU = "";
	const DEFAULT_PAGE_FEATURE = "";
	const DEFAULT_PAGE_FOOTER = "templates/default_footer_template.php";
}

?>