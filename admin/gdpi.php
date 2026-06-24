<?php
require_once('header-2.php');
$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
switch($option)
{
case "index": require_once('gdpi/index.php');
			break;				
case "view": require_once('gdpi/list_all.php');
			break;
case "export": require_once('gdpi/export.php');
			break;
default: require_once('gdpi/index.php');
}
require_once('footer.php');
?>


