<?php

class SOSModel implements DBQueries, Settings {
	
	public function __construct() {
		$db = new DBConnection();
		$this->dbconn = $db->getConnection();
		$this->error = false;
	}
	
	/**
	 * Fetch the data for the home page
	 * of this web application.
	 */
	public function home() {

	}
	
	
	
}


?>