<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('search/add.php');
			break;
		case "update": require_once('search/update.php');
			break;
		case "list": require_once('search/index.php');
			break;
		case "export": require_once('search/export.php');
			break;
		default: require_once('search/index.php');
	}

	require_once('footer.php');
?>