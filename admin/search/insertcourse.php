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
    default: header('Location: ../searchcourse.php');
}
function update()
{
    global $conn;

$title=$_POST['title'];
$description=$_POST['description'];
$category=$_POST['category'];
$keywords=$_POST['keywords'];
$link=$_POST['link'];
$id=$_POST['id'];
if($description==''){
    header('Location: ../searchcourse.php?m=23');  
}elseif($category==''){
    header('Location: ../searchcourse.php?m=24');  
}elseif($keywords==''){
    header('Location: ../searchcourse.php?m=25');  
}elseif($link==''){
    header('Location: ../searchcourse.php?m=26');  
}else{
        $query = "update tbl_searchcourse set description='$description',category='$category',keywords='$keywords',link='$link' where id='$id'";
  
        if (mysqli_query($conn, $query))
        {
            header('Location: ../searchcourse.php?m=2');
        }else
        {
            header('Location: ../searchcourse.php?m=0');
        }
    }
}
function add()
{
global $conn;
$title=$_POST['title'];
$description=$_POST['description'];
$category=$_POST['category'];
$keywords=$_POST['keywords'];
$link=$_POST['link'];

if($title==''){
  header('Location: ../searchcourse.php?m=21');  
}elseif($description==''){
    header('Location: ../searchcourse.php?m=23');  
}elseif($category==''){
    header('Location: ../searchcourse.php?m=24');  
}elseif($keywords==''){
    header('Location: ../searchcourse.php?m=25');  
}elseif($link==''){
    header('Location: ../searchcourse.php?m=26');  
}else{
   
         $query = "insert into tbl_searchcourse(title,description,category,	keywords,link,addeddate)values('$title','$description','$category','$keywords','$link',NOW())";

        if (mysqli_query($conn, $query))
        {
            header('Location: ../searchcourse.php?m=1');
        }else
        {
            header('Location: ../searchcourse.php?m=0');
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