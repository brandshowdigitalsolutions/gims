<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('latestnews/add.php');
			break;
		case "update": require_once('latestnews/update.php');
			break;
		case "list": require_once('latestnews/index.php');
			break;
		case "export": require_once('latestnews/export.php');
			break;
		default: require_once('latestnews/index.php');
	}

	require_once('footer.php');
?>