<?php
session_start();
include('dbc.php');

global $conn;

if(isset($_POST['Submit']))
{
$regid=$_POST['regid'];
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

$_SESSION['regid']=$regid; 
$_SESSION['roll_no']=$roll_no; 
$_SESSION['name']=$name; 
$_SESSION['mobile']=$mobile; 
$_SESSION['email']=$email; 
$_SESSION['per_address']=$per_address; 
$_SESSION['class']=$class; 
$_SESSION['passing_year']=$passing_year; 
$_SESSION['type']=$type; 
$_SESSION['org_name']=$org_name; 
$_SESSION['org_address']=$org_address; 
$_SESSION['org_phone']=$org_phone; 
$_SESSION['designation']=$designation; 


$otp= mysqli_real_escape_string($conn, $_POST['otp']); 



$check = mysqli_query($conn,"select * from user_signup where otp = '$otp'") or die(mysqli_error());

if(mysqli_num_rows($check) > 0)
{
echo "<script type='text/javascript'>alert('OTP already exists.');
window.location='alumni-registration.php';
</script>";  
    
}
else
{
 $query="insert into  user_signup(otp) values('$otp')";   

mysqli_query($conn,$query);

date_default_timezone_set('Asia/Calcutta');
 require_once('PHPMailer/PHPMailer_v5.1/class.phpmailer.php'); //library added in download source.


                $mail2= new PHPMailer();

// message
                $body2='
<html>
<head>
<title>Thank you for contacting us.</title>
</head>
<body>
Dear user,
<br/><br/>
Your one time password(OTP) is mensioned below.
<br/><br/>
'.$otp.'
<br/><br/>
This OTP is to be used for submittting the feedback form at GNIOT.
Please dont share this with any one. 

<br/><br/>
Thank you
<br/><br/>
GNIOT
</body>
</html>
';
                $body2= eregi_replace("[\]",'',$body2);

//$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
                $mail2->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)1
                // 1 = errors and messages
                // 2 = messages only
                $mail2->SMTPAuth   = true;                  // enable SMTP authentication
                $mail2->SMTPSecure = "tls";                 // sets the prefix to the servier
                $mail2->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
                $mail2->Port       = 587;                   // set the SMTP port for the GMAIL server
                $mail2->Username   = "7827719965test@gmail.com";  // GMAIL username
                $mail2->Password   = "7827719965";            // GMAIL password

                $mail2->SetFrom('deanacademic@gniot.net.in', 'GNIOT');

                $mail2->AddReplyTo('deanacademic@gniot.net.in', 'GNIOT');

                $mail2->Subject    = "OTP";

                $mail2->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

                $mail2->MsgHTML($body2);

                $address2 = $email;
                $mail2->AddAddress($address2);
                $mail2->Send();
              echo "<script type='text/javascript'>alert('Please check your mail.');
window.location='otp.php';
</script>";
             
                
                

            
          
        
        
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>GNIOT | Login</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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
	
			<style type="text/css">
			body { background: url(img/bg-login.jpg) !important; }
		</style>

<?php
$m = (isset($_GET['m']) && $_GET['m'] !== "") ? $_GET['m'] : "";
if($m == "0")
{
	$message = "Username or password is incorrect.";
}
else if($m == "1")
{
	$message = "Session expired. Please login.";
}
else if($m == "2")
{
	$message = "Logout Successfully.";
}
else
{
	$message = "";
}
?>

</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<p style="color:#f00; text-align: center;"><?php echo $message; ?></p>
					<div class="icons">
						<a href="https://www.gniotgroup.edu.in/"><i class="halflings-icon home"></i></a>
					</div>
					<h2>OTP</h2>
					<form class="form-horizontal" name="frmlogin" action="insert-data.php" method="post" >
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="otp" id="otp" type="text" placeholder="OTP"/>
							</div>
							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary" name="Submit">Submit</button>
								
								
							</div>
							<div class="clearfix"></div>
					</form>
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-content">
				<ul class="list-inline item-details">
					<li><a href="http://themifycloud.com">Admin templates</a></li>
					<li><a href="http://themescloud.org">Bootstrap themes</a></li>
				</ul>
			</div>
		</div>
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->

</body>
</html>
