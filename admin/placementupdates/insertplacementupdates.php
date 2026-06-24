<?php
session_start();
require_once('../dbc.php');
require_once('../function.php');

$action = (isset($_GET['action']) && $_GET['action'] != "") ? $_GET['action'] : "";

switch($action)
{
    case "update" : update();
        break;
    case "add" : add();
        break;
    default: header('Location: ../placement-updates.php');
}
function update()
{
    global $conn;
 

$description=$_POST['description'];
$id = $_POST['id'];

if($description==''){
    header('Location: ../placement-updates.php?m=23');  
}else{
        $query = "update tbl_placement_updates  set description='$description' where id='$id'";
  
        if (mysqli_query($conn, $query))
        {
            header('Location: ../placement-updates.php?m=1');
        }else
        {
            header('Location: ../placement-updates.php?m=0');
        }
    }
}
function add()
{
global $conn;
$title=$_POST['title'];

$description=$_POST['description'];

$placementurl=clean_url($title);

if($title==''){
  header('Location: ../placement-updates.php?m=21');  
}elseif($description==''){
    header('Location: ../placement-updates.php?m=23');  
}else{
   
         $query = "insert into tbl_placement_updates(	title,description,updatesurl,addedon,status,deleteflag)values('$title','$description','$placementurl',NOW(),'1','0')";

        if (mysqli_query($conn, $query))
        {
            header('Location: ../placement-updates.php?m=1');
        }else
        {
            header('Location: ../placement-updates.php?m=0');
        }
    }
}
function findexts ($filename)
{
    $filename = strtolower($filename) ;
    $exts = explode(".", $filename);
    $n = count($exts)-1;
    $exts = $exts[$n];

    return $exts;
}

?>