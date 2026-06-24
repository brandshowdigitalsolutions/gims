<?php
session_start();
require_once('../dbc.php');

$action = (isset($_GET['action']) && $_GET['action'] != "") ? $_GET['action'] : "";

switch($action)
{
    case "update" : update();
        break;
    default: header('Location: ../alumni.php');
}
function update()
{
    global $conn;
$regidddd=$_POST['regidddd'];
$roll_no=$_POST['roll_no'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$per_address=$_POST['per_address'];
$class=$_POST['class'];
$passing_year=$_POST['passing_year'];
$type=$_POST['type'];
$org_name=$_POST['org_name'];
$org_address=$_POST['org_address'];
$org_phone=$_POST['org_phone'];
$designation=$_POST['designation'];
$id = $_POST['id'];


    $submit_date= date("Y-m-d");
   
    
        $query ="update user_signup set name='$name',roll_no='$roll_no',regid='$regidddd',mobile='$mobile',email='$email',per_address='$per_address',class='$class',passing_year='$passing_year',type='$type',org_name='$org_name',org_address='$org_address',org_phone='$org_phone',designation='$designation',created='$submit_date' where id = '".$id."'";

        if (mysqli_query($conn, $query))
        {
            header('Location: ../alumni.php?m=2');
        } else
        {
            header('Location: ../alumni.php?option=update&id='.$albumid .'&m=3');
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