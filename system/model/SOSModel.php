<?php

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

	}
	
	public function article($path) {
		
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
	
	public function category($path) {
		
	}
	
	public function deleteCategory() {
		
	}
	
	public function validate_login($email, $password) {
		
	}
	
	private $dbconn;	
}

?>