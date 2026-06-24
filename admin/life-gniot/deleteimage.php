<?php
session_start();
$role=$_SESSION['role'] ;
$username=$_SESSION['username'];
require_once('../dbc.php');
require_once('../function.php');

$img=$_GET['q'];
$imga=array($img);
print_r($imga);
$id=$_GET['id'];
$sqlquery="select image from tbl_lifegniot where id='$id'";
$result=mysqli_query($conn, $sqlquery);
$rowimmg=mysqli_fetch_array($result);
$eximage=explode(",",$rowimmg['image']);
if(in_array($img,$eximage)){
   // echo "test";
    $diffarray=array_diff($eximage,$imga);
    print_r($diffarray);
    $imimg=implode(",",$diffarray);
    unlink("../../lifegniotimg/".$img);
    $upquery="update tbl_lifegniot set image='$imimg' where id='$id'";
    $resultim=mysqli_query($conn, $upquery);
    echo "Image Successfully Remove";
    
}else{
    echo "Image not Remove";
    
}


//print_r($eximage);
?>