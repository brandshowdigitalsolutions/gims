<?php
session_start();
require_once "dbc.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$check = mysqli_query($conn,"select * from user_signup where email = '$username' and mobile = '$password'") or die(mysqli_error($conn,"databse fail"));
	$row1=mysqli_fetch_array($check);
	$role=$row1['role'];

if(mysqli_num_rows($check) > 0)
{
	$row = mysqli_fetch_assoc($check);

	

	$_SESSION['username'] = $username;
	$_SESSION['sid'] = session_id();
	$_SESSION['role'] = $role;
	

	header("Location: dashboard.php");
}
else
{
	header("Location: index.php?m=0");
}
?>