<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('career/add.php');
			break;
		case "update": require_once('career/update.php');
			break;
		case "list": require_once('career/index.php');
			break;
		case "export": require_once('career/export.php');
			break;
		default: require_once('career/index.php');
	}

	require_once('footer.php');
?>