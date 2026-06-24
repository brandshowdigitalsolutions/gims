<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('placement/add.php');
			break;
		case "update": require_once('placement/update.php');
			break;
		case "list": require_once('placement/index.php');
			break;
		case "export": require_once('placement/export.php');
			break;
		default: require_once('placement/index.php');
	}

	require_once('footer.php');
?>