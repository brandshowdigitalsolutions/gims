<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('life-gniot/add.php');
			break;
		case "update": require_once('life-gniot/update.php');
			break;
		case "list": require_once('life-gniot/index.php');
			break;
		case "export": require_once('life-gniot/export.php');
			break;
		default: require_once('life-gniot/index.php');
	}

	require_once('footer.php');
?>