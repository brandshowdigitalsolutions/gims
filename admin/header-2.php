<?php
session_start();
include('dbc.php');
$username=$_SESSION['username'];
if(!isset($_SESSION['username']))
{
    header('Location: index-login.php?m=1');
}

if(isset($_GET['logout']))
{
    session_destroy();
    header('Location: index-login.php?m=2');
}
$getid = mysqli_query($conn,"select * from  tbl_adminusers where email='$username'");
$getuserId=mysqli_fetch_array($getid);
$assign=$getuserId['role'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>GIMS - PGDM Institute | Admin Panel</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    <link rel="icon" href="../../img/favicon.png" type="image/x-icon">
    <!-- start: CSS -->
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  
  <script src="plugins/ckeditor/ckeditor.js"></script>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->

   <script>
	
  function isNumberKey(evt, obj) {
 
            var charCode = (evt.which) ? evt.which : event.keyCode
            var value = obj.value;
            var dotcontains = value.indexOf(".") != -1;
            if (dotcontains)
                if (charCode == 46) return false;
            if (charCode == 46) return true;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
       </script>


</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><img src="img/gniot.png"></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> <?php echo $_SESSION['username']; ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            
                            <li><a href="dashboard-admin.php?logout"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                   <li><a href="dashboard.php"><i class="icon-bar-chart"></i><span class="hidden-tablet">Dashboard</span></a></li>
                    
                         <?php
                    if($assign=='Super Admin')
                    {?>
                    
                    <li><a href="gniot-alumni.php"><i class="icon-picture"></i><span class="hidden-tablet">Alumni</span></a></li>
                    <li><a href="latest-news.php"><i class="icon-picture"></i><span class="hidden-tablet">Latest News</span></a></li>
                    <li><a href="placement-updates.php"><i class="icon-picture"></i><span class="hidden-tablet">Placement Upates</span></a></li>
                    <li><a href="circulars.php"><i class="icon-picture"></i><span class="hidden-tablet">Circulars</span></a></li>
                    <li><a href="campusdrive.php"><i class="icon-picture"></i><span class="hidden-tablet">Campus Drive</span></a></li>
                    <li><a href="searchcourse.php"><i class="icon-picture"></i><span class="hidden-tablet">Search Course</span></a></li>
                    <li><a href="life-gniot.php"><i class="icon-picture"></i><span class="hidden-tablet">Life@Gniot</span></a></li>
                    <li><a href="career.php"><i class="icon-picture"></i><span class="hidden-tablet">Career</span></a></li>
                    <li><a href="contact.php"><i class="icon-picture"></i><span class="hidden-tablet">Contact</span></a></li>
                    <li><a href="student-feedback.php"><i class="icon-picture"></i><span class="hidden-tablet">Student Feedback</span></a></li>
                    <li><a href="faculty-feedback.php"><i class="icon-picture"></i><span class="hidden-tablet">Faculty Feedback</span></a></li>
                    <li><a href="parent-feedback.php"><i class="icon-picture"></i><span class="hidden-tablet">Parent Feedback</span></a></li>
                    <?php }
                    else
                    {?>
                    <li>
                        <a href="gdpi.php"><i class="icon-picture"></i><span class="hidden-tablet">GDPI</span></a></li>
                    <li>
                        <a href="alumni.php"><i class="icon-picture"></i><span class="hidden-tablet">Alumni</span></a></li>
                     <?php }?>
                   
       
                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>