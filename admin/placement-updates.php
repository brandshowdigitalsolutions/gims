<?php
require_once('header-2.php');

	$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
	switch($option)
	{
		case "add": require_once('placementupdates/add.php');
			break;
		case "update": require_once('placementupdates/update.php');
			break;
		case "list": require_once('placementupdates/index.php');
			break;
		case "export": require_once('placementupdates/export.php');
			break;
		default: require_once('placementupdates/index.php');
	}

	require_once('footer.php');
?>