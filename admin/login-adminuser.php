<?php
session_start();
require_once "dbc.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = md5(mysqli_real_escape_string($conn, $_POST['password']));

$check = mysqli_query($conn,"select * from tbl_adminusers where email = '$username' and password = '$password'") or die(mysqli_error($conn,'database fail'));
	$row1=mysqli_fetch_array($check);
	$role=$row1['role'];

if(mysqli_num_rows($check) > 0)
{
	$row = mysqli_fetch_assoc($check);

	

	$_SESSION['username'] = $username;
	$_SESSION['sid'] = session_id();
	$_SESSION['role'] = $role;
	

	header("Location: dashboard-admin.php");
}
else
{
	header("Location: index-login.php?m=0");
}
?>