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


<script>
function validationfac()
{
    	if( document.getElementById("regid").value=="")
{
     alert( "Please enter your id!" );
     document.getElementById("regid").focus() ;
     return false;
    
} 
	if( document.getElementById("roll_no").value=="")
{
     alert( "Please enter your roll no!" );
     document.getElementById("roll_no").focus() ;
     return false;
    
} 
var name= document.getElementById("name").value;
var pattern=  /^[A-Za-z ]{1,50}$/; 
if (!pattern.test(name))
{ 
alert("Please enter your name!");
document.getElementById("name").focus() ;
return false;
}
var phone= document.getElementById("phone").value;
var pattern= /^\d{10}$/;
if (!pattern.test(phone))
{ 
alert("Please enter your 10 digit mobile number!");
document.getElementById("phone").focus() ;
return false;
}
var email= document.getElementById("email").value;
   var pattern= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if (!pattern.test(email))
{
     alert( "Please provide your valid e-mail address!" );
     document.getElementById("email").focus() ;
     return false
 }
 
 if( document.getElementById("per_address").value=="")
{ 
alert("Please enter your permanent address!");
document.getElementById("per_address").focus() ;
return false;
}
	if( document.getElementById("class").value=="")
{
     alert( "Please enter your class!" );
     document.getElementById("class").focus() ;
     return false;
    
} 
	
if( document.getElementById("passing_year").value=="")
{
     alert( "Please enter your passing year!" );
     document.getElementById("passing_year").focus() ;
     return false;
    
} 	
	
if( document.getElementById("type").value=="")
{
     alert( "Please enter your org type!" );
     document.getElementById("type").focus() ;
     return false;
    
} 	

if( document.getElementById("org_name").value=="")
{
     alert( "Please enter your org name!" );
     document.getElementById("org_name").focus() ;
     return false;
    
} 	

if( document.getElementById("org_address").value=="")
{
     alert( "Please enter your org address!" );
     document.getElementById("org_address").focus() ;
     return false;
    
} 	

if( document.getElementById("org_phone").value=="")
{
     alert( "Please enter your org phone!" );
     document.getElementById("org_phone").focus() ;
     return false;
    
} 	

if( document.getElementById("designation").value=="")
{
     alert( "Please enter your designation!" );
     document.getElementById("designation").focus() ;
     return false;
    
} 	
	
	
	
	
	 
}
</script>

<script>
	
 function onlyAlphabets(evt) {
        var charCode;
        if (window.event)
            charCode = window.event.keyCode;  //for IE
        else
            charCode = evt.which;  //for firefox
        if (charCode == 32) //for &lt;space&gt; symbol
            return true;
        if (charCode > 31 && charCode < 65) //for characters before 'A' in ASCII Table
            return false;
        if (charCode > 90 && charCode < 97) //for characters between 'Z' and 'a' in ASCII Table
            return false;
        if (charCode > 122) //for characters beyond 'z' in ASCII Table
            return false;
        return true;
    }

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




<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<p style="color:#f00; text-align: center;"><?php echo $message; ?></p>
					<div class="icons">
						<a href="https://www.gniotgroup.edu.in/"><i class="halflings-icon home"></i></a>
					</div>
					<h2>Sign up to your account</h2>
					<form class="form-horizontal" name="frmlogin" action="otp.php" method="post" onsubmit="return validationfac()">
						<fieldset>
							
							<div class="input-prepend" title="ID">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="regid" id="regid" type="text" placeholder="ID"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Roll No">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="roll_no" id="roll_no" type="text" placeholder="Roll No"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="name" id="name" type="text" placeholder="Name"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="mobile" id="phone" type="text" placeholder="Mobile"onkeypress="return isNumberKey(event,this)" maxlength="10"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="email" id="email" type="text" placeholder="email"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="per_address" id="per_address" type="text" placeholder="Per address"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="class" id="class" type="text" placeholder="Class"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="passing_year" id="passing_year" type="text" placeholder="Passing year"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="type" id="type" type="text" placeholder="Org Type"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="org_name" id="org_name" type="text" placeholder="Org name"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="org_address" id="org_address" type="text" placeholder="Org address"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="org_phone" id="org_phone" type="text" placeholder="Org phone" onkeypress="return isNumberKey(event,this)" maxlength="10"/>
							</div>
									<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="designation" id="designation" type="text" placeholder="Designation"/>
							</div>
							
<input type="hidden" name="otp" id="otp" value="<?php echo $randnum = rand(11111,99999);?>" />
							<div class="clearfix"></div>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary" name="Submit">submit</button>
								
									
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
