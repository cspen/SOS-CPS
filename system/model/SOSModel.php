<?php
// Reference to file in local directory
require_once 'DBQueries.php';
require_once 'Article.php';

// Reference to ../Settings.php but
// apparently from the public folder
require_once '../system/Settings.php';
require_once '../system/utilities/DBConnection.php';

class SOSModel implements DBQueries, Settings {
	
	public function __construct() {
		$db = new DBConnection();
		$this->dbconn = $db->getConnection();
	}
	
	/**
	 * Fetch the data for the home page
	 * of this web application.
	 */
	public function home() {
		echo '<br>THIS IS THE MODEL HOME<br>';
	}
	
	public function article($path) {
		return new Article();
	}
	
	public function deleteArticle($path) {
		
	}
	
	/**
	 * Update an existing article. If
	 * the article doesn't exist, no
	 * action is taken.
	 */
	public function updateArticle($path, $values) {
		
	}
	
	public function saveArticle($path, $values) {
		
	}
	
	public function category($path) {
		return '<br>THIS IS THE MODEL CATEGORY '.$path.'<br>';
	}
	
	public function deleteCategory() {
		
	}
	
	public function login($email, $password) {
		
	}	
	
	public function sideMenu() {
		
	}
	
	public function editorMenu() {
		
	}
	
	public function changeUserSetting($userID, $setting, $value) {		
	}
	
	private $dbconn;	
}

?>