<?php
// Acquire necessary files
require_once('../system/Model/SOSModel.php');
require_once('../system/Controller/SOSController.php');
require_once('../system/View/SOSView.php');

// Set custom error handling
// set_error_handler();

// Set up CMCV architecture
$model = new SOSModel();
$view = new SOSView();
$controller = new SOSController($model, $view);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
} else if (isset($_POST['action']) && !empty($_POST['action'])) {
	$controller->{$_POST['action']}();
} else {
	$controller->process_request();
}

$view->showPage();
?>