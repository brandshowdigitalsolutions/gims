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
    default: header('Location: ../life-gniot.php');
}
function update()
{
    global $conn;
$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$location=$_POST['loc'];
$newsdate=$_POST['newsdate'];
$newsurl=clean_url($title);
$targetDir = "../../lifegniotimg/";
$allowTypes = array('jpg','jpeg','JPG','JPEG','png','PNG','gif','GIF','webp','Webp','WEBP');
$newsfile='';
$id = $_POST['id'];

if($title==''){
  header('Location: ../life-gniot.php?m=21');  
}elseif($location==''){
   header('Location: ../life-gniot.php?m=25');   
}elseif($newsdate==''){
   header('Location: ../life-gniot.php?m=24');   
}elseif($description==''){
   header('Location: ../life-gniot.php?m=26');   
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
                             header('Location: ../lifegniotimg.php?m=9');
                        }
                    }else{
                        header('Location: ../lifegniotimg.php?m=7');
                    }
                }
                
            }
        
         $exne=explode(',',$newsfile);
         $expop=array_pop($exne);
        $sqlimg=mysqli_query($conn,"select image from tbl_lifegniot where id='$id'");
        $fetaimg=mysqli_fetch_array($sqlimg);
        $feex=explode(',',$fetaimg['image']);
        $armer=array_merge($exne,$feex);
        //print_r($armer);
        $newimgs=implode(',',$armer);
        //echo $newimgs;
    if(!empty($newsfile)){
         $query = "update tbl_lifegniot  set title='$title',location='$location',image='$newimgs',date='$newsdate' where id='$id'";
    }else{
        $query = "update tbl_lifegniot  set title='$title',location='$location',description='$description',date='$newsdate' where id='$id'";
    }
        if (mysqli_query($conn, $query))
        {
            header('Location: ../life-gniot.php?m=2');
        }else
        {
            header('Location: ../life-gniot.php?m=0');
        }
    }
}
function add()
{
global $conn;
$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);

$newsdate=$_POST['newsdate'];
$location=$_POST['loc'];

$newsurl=clean_url($title);
$targetDir = "../../lifegniotimg/";
$allowTypes = array('jpg','jpeg','JPG','JPEG','png','PNG','gif','GIF','webp');
$newsfile='';  
if($title==''){
  header('Location: ../life-gniot.php?m=21');  
}elseif($newsdate==''){
   header('Location: ../life-gniot.php?m=24');   
}elseif($location==''){
   header('Location: ../life-gniot.php?m=25');   
}elseif($description==''){
   header('Location: ../life-gniot.php?m=26');   
}else{
    $sqlquery="select * from tbl_lifegniot where title='$title'";
        $result=mysqli_query($conn, $sqlquery);
        $rowcount=mysqli_num_rows($result);
        if($rowcount=='0'){
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
                             header('Location: ../lifegniotimg.php?m=9');
                        }
                    }else{
                        header('Location: ../lifegniotimg.php?m=7');
                    }
                }
                
            }
        
            $query = "insert into tbl_lifegniot(title,location,description,image,date,lifeurl,addedon,status,deleteflag)values('$title','$location','$description','$newsfile','$newsdate','$newsurl',NOW(),'1','0')";
            if (mysqli_query($conn, $query))
            {
                header('Location: ../life-gniot.php?m=1');
            }else
            {
                header('Location: ../life-gniot.php?m=0');
            }
        }else{
            header('Location: ../life-gniot.php?m=13');
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