<?php
// require_once('../Settings.php');

class SOSView implements Settings {
	
	public function __construct() {
		// Defaults
		$this->template = $this::HOME;
		$this->content = "Default content";
		$this->menu = "Default Menu";
		$this->feature = "Default feature";
		$this->footer = $this::DEFAULT_PAGE_FOOTER;
	}
	
	/**
	 * Send the response to the client.
	 */
	public function output() {		
		$pageTitle = "*Page Title*";
		$description = "Page Description";
		$contentTitle = $pageTitle;
		$contentBody = "Content Body";
		$sideMenuTitle = "SIDE MENU TITLE";
		$sideMenu = null;
		
		// Load default page css
		require_once("styles/template.php");
		
		// Load page footer
		require_once($this->footer);
		
		// Load page template
		require_once($this->template);
		
		// Display the page
		echo $html;
	}
	
	public function setArticle($article) {
		$this->article = $article;
	}
	
	/**
	 * Set all of the attributes for a page
	 * (title, content, etc.) via a Page
	 * object.
	 * 
	 * @param Object $page attributes of a page
	 */
	public function setPage($page) {
		
	}
	
	public function getPage() {
		return $this->page;
	}
	
	public function signin($token) {
		SOSView::ADMIN_LOGIN;
	}
		
	private $article;
	
	// Default view settings
	const HOME = "templates/home_template.php";
	const DEFAULT_PAGE_CONTENT = "";
	const DEFAULT_PAGE_MENU = "";
	const DEFAULT_PAGE_FEATURE = "";
	const DEFAULT_PAGE_FOOTER = "templates/default_footer_template.php";
}

?>