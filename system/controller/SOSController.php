<?php
// require_once('../system/classes/interfaces/Settings.php');

class SOSController implements Settings {
	
	public function __construct($model, $view) {
		$this->model = $model;
		$this->view = $view;
	}
	
	public function test() {
		
	}
	
	// Called during program execution
	public function process_request() {
		$path = str_replace(Settings::APP_URL, "", $_SERVER['REQUEST_URI']);
		$tail = substr($_SERVER['REQUEST_URI'], -1);
		
		if(empty($path)) { // Home Page			
			try {
				$this->model->home();
				$this->view->setTemplate(SOSView::HOME);
			} catch(Exception $e) {
				// Need to develop error handling
			}
		} else if($tail === "/") { // Category - List of Articles			
			if($_SERVER['REQUEST_METHOD'] === 'PUT') {
				$this->view->headerOnly('405 Method Not Allowed');
			}		
			
			try {
				$this->model->topic($path);
				$this->view->setTemplate(SOSView::TOPIC);
			} catch(Exception $e) {
				// Error
			}			
		} else { // Article
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
				try {
					$this->model->article($path);
					$this->view->setTemplate(SOSView::ARTICLE);					
				} catch(Exception $e) {
					// Error
				}
			}
		}
	}
	
	/**
	 * 
	 */
	private function token() {
		
	}
	
	private $model;
	private $view;	
}
?>