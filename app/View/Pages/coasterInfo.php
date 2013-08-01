<?php
	require_once "db.php";
	require_once "coasterModel.php";
	require_once "coasterView.php";
	
	$model = new coasterModel(MY_DSN, MY_USER, MY_PASS);
	$view = new coasterView();
	$view->showHeader("Rollercoaster Database");
	$view->showCoasterDetails($model->getCoasterDetails($_GET["id"]));
	$view->showFooter();
	
?>