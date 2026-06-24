<?php
require_once('header.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('alumni/add.php');
			break;
		case "update": require_once('alumni/update.php');
			break;
		case "list": require_once('alumni/index.php');
			break;
		case "export": require_once('alumni/export.php');
			break;
		default: require_once('alumni/index.php');
	}

	require_once('footer.php');
?>