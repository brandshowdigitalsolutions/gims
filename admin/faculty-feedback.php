<?php
require_once('header-2.php');
$option = (isset($_GET['option']) && $_GET['option'] !== "") ? $_GET['option'] : "";
switch($option)
{
case "index": require_once('faculty-feedback/index.php');
			break;				
case "view": require_once('faculty-feedback/list_all.php');
			break;
case "export": require_once('faculty-feedback/export.php');
			break;
default: require_once('faculty-feedback/index.php');
}
require_once('footer.php');
?>


