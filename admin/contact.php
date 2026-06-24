<?php
require_once('header-2.php');
$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
switch($option)
{
case "index": require_once('contact/index.php');
			break;				
case "view": require_once('contact/list_all.php');
			break;
case "export": require_once('contact/export.php');
			break;
default: require_once('contact/index.php');
}
require_once('footer.php');
?>


