<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('campusdrive/add.php');
			break;
		case "update": require_once('campusdrive/update.php');
			break;
		case "list": require_once('campusdrive/index.php');
			break;
		case "export": require_once('campusdrive/export.php');
			break;
		default: require_once('campusdrive/index.php');
	}

	require_once('footer.php');
?>