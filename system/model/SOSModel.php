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
			// print_r($articles);
		} else {
			$this->error = true;
		}
	}
	
	public function article($path) {
		// Need to get data from DB
		// then put the data in Article object
		// Return the Article object (or null)
		$stmt = $this->dbconn->prepare(DBQueries::PATH_QUERY);
		$stmt->bindParam(':path', $path);
		
		if($stmt->execute()) {
			$results = $stmt->fetch();
			
			$id, $title, $description,
			$body, $publishStatus, $publishDate, $creationDate,
			$path, $parent, $etag, $lastModified
			
			if(!empty($results)) {
				$menu = $this->getSideMenu();
				$this->output = new Article(
						$results['articleID'],
						$results['article_title'],
						$results['article_description'],
						$results['article_body'],
						$results['article_publish_status'].
						$results['article_publish_date'],
						$results['article_creation_date'],
						$path,
						$results['article_parent'],
						$results['etag'],
						$results['last_modified']);
			}
				
			}
		}
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