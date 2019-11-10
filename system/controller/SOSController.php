<?php
require_once('../system/Settings.php');

class SOSController implements Settings {
	
	public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function process_request() {
		$path = str_replace(Settings::APP_URL, "", $_SERVER['REQUEST_URI']);
		$tail = substr($_SERVER['REQUEST_URI'], -1);
		
		if(empty($path)) { // Home Page	
			echo '<br>HOME<br>';
			try {
				$this->model->home();
				// $this->view->setTemplate(SOSView::HOME);
			} catch(Exception $e) {
				// Need to develop error handling
			}
		} else if($tail === "/") { // Category - List of Articles	
			echo '<br>Controller 2<br>';
			if($_SERVER['REQUEST_METHOD'] === 'PUT') {
				$this->view->headerOnly('405 Method Not Allowed');
			}		
			
			try {
				$this->model->category($path);
				// $this->view->setTemplate(SOSView::TOPIC);
			} catch(Exception $e) {
				// Error
			}			
		} else { // Article
			echo '<br>ARTICLE</br>';
			if(strcmp($path, Settings::ADMIN_LOGIN_PAGE) == 0) {
				// Login page - shows login form
				$this->token();
				$this->model->login($_SESSION['token']);
				$this->view->setTemplate(SOSView::ADMIN_LOGIN);
			} else if(strcmp($path, Settings::SYS_OPS) == 0) {
				// Admin operation - Create, Update, Delete
				$this->system_operation($tail);
				exit;
			} else {
				// Show the article
				try {
					$this->model->article($path);
					// $this->view->setTemplate(SOSView::ARTICLE);					
				} catch(Exception $e) {
					// Error
				}
			}
		}
	}
		
	/**
	 * Set session token for form validation
	 * to prevent CSFR attack.
	 */
	private function token() {
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
		if (empty($_SESSION['token'])) { 
			$_SESSION['token'] = bin2hex(random_bytes(32));
		}
	}
	
	/**
	 * Prevent CSRF attack by verifying the token
	 * sent with the form. The token is created
	 * when the form is created and the token value
	 * is stored in the session variable.
	 */
	private function verify_token() {
		if (!empty($_POST['token']) && !empty($_SESSION['token'])) {
			if (hash_equals($_SESSION['token'], $_POST['token'])) {
				return true;
			}
		}
		return false;
	}
	
	private $model;
	private $view;	
}
?>