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
    default: header('Location: ../campusdrive.php');
}
function update()
{
    global $conn;
$title=mysqli_real_escape_string($conn,$_POST['title']);
$package=mysqli_real_escape_string($conn,$_POST['package']);
$campus=mysqli_real_escape_string($conn,$_POST['campus']);
$newsdate=$_POST['newsdate'];
$time=mysqli_real_escape_string($conn,$_POST['time']);
$newsurl=clean_url($title);
$targetDir = "../../campusdrive/";
$allowTypes = array('jpg','jpeg','JPG','JPEG','png','PNG','gif','GIF');
$newsfile='';
$id = $_POST['id'];

if($title==''){
  header('Location: ../campusdrive.php?m=21');  
}elseif($newsdate==''){
   header('Location: ../campusdrive.php?m=24');   
}elseif($campus==''){
   header('Location: ../campusdrive.php?m=26');   
}else{
    if(!empty($_FILES['files']['name'])){
        
            $fileName = time()."-".basename($_FILES['files']['name']);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath)){
                    // Image db insert sql
                    $newsfile = $fileName;
                }else{
                     header('Location: ../campusdrive.php?m=9');
                }
            }else{
                header('Location: ../campusdrive.php?m=7');
            }
    }
    if(!empty($newsfile)){
         $query = "update tbl_campusdrive  set title='$title',image='$newsfile',date='$newsdate',time='$time',package='$package',campus='$campus' where id='$id'";
    }else{
        $query = "update tbl_campusdrive  set title='$title',date='$newsdate',time='$time',package='$package',campus='$campus' where id='$id'";
    }
        if (mysqli_query($conn, $query))
        {
            header('Location: ../campusdrive.php?m=2');
        }else
        {
            header('Location: ../campusdrive.php?m=0');
        }
    }
}
function add()
{
global $conn;
$title=mysqli_real_escape_string($conn,$_POST['title']);
$package=mysqli_real_escape_string($conn,$_POST['package']);
$campus=mysqli_real_escape_string($conn,$_POST['campus']);
$newsdate=$_POST['newsdate'];
$time=mysqli_real_escape_string($conn,$_POST['time']);
$newsurl=clean_url($title);
$targetDir = "../../campusdrive/";
$allowTypes = array('jpg','jpeg','JPG','JPEG','png','PNG','gif','GIF');
$newsfile='';  
if($title==''){
  header('Location: ../campusdrive.php?m=21');  
}elseif($newsdate==''){
   header('Location: ../campusdrive.php?m=24');   
}elseif($campus==''){
   header('Location: ../campusdrive.php?m=26');   
}else{
    if(!empty($_FILES['files']['name'])){
        
            // File upload path
            $fileName = time()."-".basename($_FILES['files']['name']);
            
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"], $targetFilePath)){
                    // Image db insert sql
                  $newsfile = $fileName;
                    
                }else{
                     header('Location: ../campusdrive.php?m=9');
                }
            }else{
                header('Location: ../campusdrive.php?m=7');
            }
      
        
    }
    
        $query = "insert into tbl_campusdrive(title,image,date,time,package,campus,campusurl,addedon,status,deleteflag)values('$title','$newsfile','$newsdate','$time','$package','$campus','$newsurl',NOW(),'1','0')";
        if (mysqli_query($conn, $query))
        {
            header('Location: ../campusdrive.php?m=1');
        }else
        {
            header('Location: ../campusdrive.php?m=0');
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