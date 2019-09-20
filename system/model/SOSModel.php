<?php

class SOSModel implements DBQueries, Settings {
	
	public function __construct() {
		$db = new DBConnection();
		$this->dbconn = $db->getConnection();
		$this->error = false;
	}
	
}


?>