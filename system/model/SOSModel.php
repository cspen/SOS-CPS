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
		$stmt = $this->dbconn->prepare(DBQueries::HOME_QUERY);
		if($stmt->execute()) {
			$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
			
			$articles = array();
			foreach($results as $r) {
				$articles[] = str_replace("-", " ", $r['article_path']);
			}
			
			$art =  new Article(
					Settings::SITE_TITLE,
					Settings::HOME_PAGE_DESCRIPTION,
					Settings::HOME_PAGE_TITLE,
					$articles,
					"Topics Menu",
					$this->getSideMenu());
		} else {
			$this->error = true;
		}
	}
	
	public function article($path) {
		// Need to get data from DB
		// then put the data in Article object
		// Return the Article object (or null)
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