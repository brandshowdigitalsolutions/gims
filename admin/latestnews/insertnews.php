<?php
session_start();
require_once('../dbc.php');
require_once('../function.php');
date_default_timezone_set("Asia/Kolkata");
$currentTime = date( 'Y-m-d H:i:s', time () );
$action = (isset($_GET['action']) && $_GET['action'] != "") ? $_GET['action'] : "";

switch($action)
{
    case "update" : update();
        break;
    case "add" : add();
        break;
    default: header('Location: ../latest-news.php');
}
function update()
{
    global $conn;
 
$sdescription=$_POST['sdescription'];
$description=$_POST['description'];
$newsdate=$_POST['newsdate'];
$location=$_POST['loc'];
$targetDir = "../../latestnews/";
$allowTypes = array('jpg','png','jpeg','gif','webp','Webp','WEBP');
$newsfile=''; 
$id = $_POST['id'];

if($sdescription==''){
    header('Location: ../latest-news.php?m=22');  
}elseif($description==''){
    header('Location: ../latest-news.php?m=23');  
}elseif($newsdate==''){
   header('Location: ../latest-news.php?m=24');   
}elseif($location==''){
   header('Location: ../latest-news.php?m=25');   
}else{
    if(!empty($_FILES['files']['name'])){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = time()."-".basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $newsfile .= $fileName.",";
                }else{
                     header('Location: ../latest-news.php?m=9');
                }
            }else{
                header('Location: ../latest-news.php?m=7');
            }
        }
        
    }
    if(!empty($newsfile)){
         $query = "update tbl_latest_news  set sdescription='$sdescription',description='$description',location='$location',date='$newsdate',images='$newsfile' where id='$id'";
    }else{
        $query = "update tbl_latest_news  set sdescription='$sdescription',description='$description',location='$location',date='$newsdate' where id='$id'";
    }
        if (mysqli_query($conn, $query))
        {
            header('Location: ../latest-news.php?m=1');
        }else
        {
            header('Location: ../latest-news.php?m=0');
        }
    }
}
function add()
{
global $conn;
$title=$_POST['title'];
$sdescription=$_POST['sdescription'];
$description=$_POST['description'];
$newsdate=$_POST['newsdate'];
$location=$_POST['loc'];
$newsurl=clean_url($title);
$targetDir = "../../latestnews/";
$allowTypes = array('jpg','png','jpeg','gif','webp','Webp','WEBP');
$newsfile='';  
$query1 = "select * from tbl_latest_news where title='$title'";
$qu=mysqli_query($conn, $query1);
$numqu=mysqli_num_rows($qu);
if($title==''){
  header('Location: ../latest-news.php?m=21');  
}elseif($numqu<>0){
   header('Location: ../latest-news.php?m=26');   
}elseif($sdescription==''){
    header('Location: ../latest-news.php?m=22');  
}elseif($description==''){
    header('Location: ../latest-news.php?m=23');  
}elseif($location==''){
    header('Location: ../latest-news.php?m=25');  
}elseif($newsdate==''){
   header('Location: ../latest-news.php?m=24');   
}else{
    if(!empty($_FILES['files']['name'])){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = time()."-".basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $newsfile .= $fileName.",";
                }else{
                     header('Location: ../latest-news.php?m=9');
                }
            }else{
                header('Location: ../latest-news.php?m=7');
            }
        }
        
    }
    
         $query = "insert into tbl_latest_news(	title,sdescription,description,location,date,images,newsurl,addedon,status,deleteflag)values('$title','$sdescription','$description','$location','$newsdate','$newsfile','$newsurl','$currentTime','1','0')";

        if (mysqli_query($conn, $query))
        {
            header('Location: ../latest-news.php?m=1');
        }else
        {
            header('Location: ../latest-news.php?m=0');
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