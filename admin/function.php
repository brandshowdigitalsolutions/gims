<?php

function siteurl(){
	$val='https://www.gims.net.in';
	return $val;
}

function clean_url($text)
{
	$text=strtolower($text);
	$code_entities_match = array(' ','--','&quot;','!','@','#','$','%','^','&','*','(',')','_','+','{','}','|',':','"','<','>',
	'?','[',']','\\',';',"'",',','.','/','*','+','~','`','=');
	$code_entities_replace = array('-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-',
	'-','-','-','-','-','-','-','-','-','-','-','-');
	$text = str_replace($code_entities_match, '-', $text);
	return single_url($text);
}

function single_url($text)
{
	$text=strtolower($text);
	$code_entities_match = array('-','--','---');
	$text = str_replace($code_entities_match, '-', $text);
	return $text;
}



function urlback($text)
{
	$text=strtolower($text);
	$code_entities_match = array(' ','--','&quot;','!','@','#','$','%','^','&','*','(',')','_','+','{','}','|',':','"','<','>',
	'?','[',']','\\',';',"'",',','.','/','*','+','~','`','=');
	$code_entities_replace = array('-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-','-',
	'-','-','-','-','-','-','-','-','-','-','-','-');
	$text = str_replace('-', ' ', $text);
	return $text;
}

function curPageURL()
{
	// use it echo curPageURL();
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
}
function curPageName()
{
	// use it echo "The current page name is ".curPageName();
	 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

function page_link()
{
	$t=curPageURL();
	$page=explode("/",$t);
	//$pagelink= $page[0]."/".$page[1]."/".$page[2]."/".$page[3]."/";
	return $pagelink='https://www.gims.net.in/';
}

function get_page_id($page){
	//echo "select * from tbl_category where category='$page'";
	$pro_d=mysql_query("select * from tbl_category where category='$page'")or die(mysql_error());
	$dtr_g=mysql_fetch_array($pro_d);
	echo $dtr_g[category];
}

?>