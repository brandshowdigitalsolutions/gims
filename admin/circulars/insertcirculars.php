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
    default: header('Location: ../circulars.php');
}
function update()
{
    global $conn;

$title=mysqli_real_escape_string($conn,$_POST['title']);
$newsdate=$_POST['newsdate'];

$targetDir = "../../circulars-pdf/";
$allowTypes = array('pdf');
$newsfile=''; 
$id = $_POST['id'];

if($title==''){
    header('Location: ../circulars.php?m=23');  
}elseif($newsdate==''){
   header('Location: ../circulars.php?m=24');   
}else{
        if(in_array("", $_FILES['files']['name'])){
                
                $query = "update tbl_circulars  set title='$title',date='$newsdate' where id='$id'";
                if(mysqli_query($conn, $query))
                {
                header('Location: ../circulars.php?m=1');
                }else
                {
                    header('Location: ../circulars.php?m=0');
                }
            
        }else{
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
                         header('Location: ../circulars.php?m=9');
                    }
                }else{
                    header('Location: ../circulars.php?m=7');
                }
                $query = "update tbl_circulars  set title='$title',date='$newsdate',download='$newsfile' where id='$id'";
               if(mysqli_query($conn, $query))
                {
                header('Location: ../circulars.php?m=1');
                }else
                {
                    header('Location: ../circulars.php?m=0');
                }
            }
            
            
        }
        
        
    }
}
function add()
{
global $conn;
$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$newsdate=$_POST['newsdate'];
$newsurl=clean_url($title);
$targetDir = "../../circulars-pdf/";
$allowTypes = array('pdf');
$newsfile='';  
if($title==''){
  header('Location: ../circulars.php?m=21');  
}elseif($newsdate==''){
   header('Location: ../circulars.php?m=24');   
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
                     header('Location: ../circulars.php?m=9');
                }
            }else{
                header('Location: ../circulars.php?m=7');
            }
        }
        
    }
    
        $query = "insert into tbl_circulars(title,date,download,circularurl,addedon,status,delete_flag)values('$title','$newsdate','$newsfile','$newsurl',NOW(),'1','0')";
        if (mysqli_query($conn, $query))
        {
            header('Location: ../circulars.php?m=1');
        }else
        {
            header('Location: ../circulars.php?m=0');
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