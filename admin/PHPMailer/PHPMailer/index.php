<?php
    require_once('PHPMailer_v5.1/class.phpmailer.php'); //library added in download source.
    


if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  $filename = basename($_FILES['uploaded_file']['name']);
  $file_ext = substr($filename, strripos($filename, '.')); // get file name
	$allowed_file_types = array('.doc','.docx','.pdf');	
	if (($allowed_file_types) && ($_FILES["uploaded_file"]["size"] < 900000))  
  {
  $ff=rand();
      $newname = dirname(__FILE__).'/upload/'.$ff.$filename;
      if (!file_exists($newname)) {
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
		
		
		$namess=$_POST['email'];
$sql= mysql_query("INSERT INTO kamdhenu_apply( name,  mobile, email, dob, gender, qualification, position, resume, address, date) 
values( '".$_POST['name']."','".$_POST['mobile']."', '".$_POST['email']."','".$_POST['dob']."',   '".$_POST['gender']."',  '".$_POST['qualification']."',  '".$_POST['position']."', '".$filename."', '".$_POST['address']."', now())")
 or die("error in insertion".mysql_error());
 
if($sql){



$mail             = new PHPMailer();

$body             = "boday test";
$body             = eregi_replace("[\]",'',$body);

//$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)1
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "7827719965test@gmail.com";  // GMAIL username
$mail->Password   = "7827719965";            // GMAIL password

$mail->SetFrom('test@test.com', 'First Last');

$mail->AddReplyTo("test@test.com","First Last");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "pratima@cogdigital.in";
$mail->AddAddress($address, "John Doe");

 $tmp_name = $_FILES['uploaded_file']['tmp_name'];
   $type = $_FILES['uploaded_file']['type'];
   $file_name = $_FILES['uploaded_file']['name'];
   $size = $_FILES['uploaded_file']['size'];

$mail->AddAttachment($tmp_name,$file_name);      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}


echo "It's done! The file has been saved as: ".$newname;
        } else {
           echo "Error: A problem occurred during file upload!";
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
  } else {
     echo "Error: Only .pdf, .doc files under 400Kb are accepted for upload";
  }
} 


?>




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MailFile</title>
</head>

<body>
<!DOCTYPE html>
<html class="html" lang="en-US">
 <head>  
<meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
<meta name="generator" content="2014.2.1.284"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
<meta name="format-detection" content="telephone=no">
  <title>Home</title>
  <!-- CSS -->
<link rel="icon" href="img/favicon.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/style.css"/>

<link href="css/responsive.css" type="text/css" rel="stylesheet">
  <style>
.error {
color: red;
float: left;
font-size: 11px;
margin: 8px 0 0;
width: auto;
text-align: left;
margin-left: 10px;
}
.success {
    color: #00587B;
    text-align: center;
    text-align: center;
    width: 75%;
    float: left;
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 600;
}

form label {
    width: 130px;
    float: left;
    line-height: 32px;
    color: #333;
    margin-bottom: 10px;
    font-size: 13px;
}

</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54131119-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div class="watermark"></div><!--water mark-->
 
 <style>
@media screen and (max-width:780px) {
header{
position: inherit !important;}
}
</style>
 <header>
    <?php 
	include 'menu.php';
	
	?>
    </header>
    
<div class="inner-wrapper" >

<div class="banner-layout" style="background:url(images/career.jpg) no-repeat;">


<div class="banner-wrap">
<h2>Careers</h2>
<p>When building teams, we only look for two kinds of people. Ones who love to win, and the ones who hate to lose.</p>
<div class="liner"></div>


</div><!--banner-wrap-->

</div><!--banner-layout-->


<div class="inner-content-wrap">
<div class="brand-sect">

<div class="brand-left">
<h2>Careers</h2>
<div class="red-strip"></div><!--red-strip-->



<div class="side-sub-heading">
<ul>
<li><a   href="work-culture.php">Work Culture</a></li>
<li><a    href="work-ethics.php" > Work Ethics </a></li>
<li><a   href="openposition.php" > Open Positions </a></li>
<li><a   class="active" href="apply-online.php" > Apply Online </a></li>


</ul>
</div><!--side-sub-heading-->


<h2>Our Brands</h2>
<div class="red-strip"></div><!--red-strip-->



<div class="side-sub-heading">
<ul>
<li><a href="tmt-bars.php">Kamdhenu TMT Bars</a></li>
<li><a href="SS-10000.php">Kamdhenu ss 10000</a></li>
<li><a href="structural-steel.php" >Structural Steel</a></li>
<li><a href="wire-bond.php"  >Kamdhenu Wirebond</a></li>

<li><a href="plywood.php" >Kamdhenu Plywood</a></li>
<li><a href="color-coated-sheets.php" >Color Coated ppgi/ppgl Sheets</a></li>
<li><a href="decorative-paints.php" >Kamdhenu  Paints</a></li>


</ul>
</div><!--side-sub-heading-->


</div><!--brand-left-->





<div class="brand-right">
<div class="bar-line"></div>
<h2>apply <span>online</span></h2>
<div class="bar-line"></div>
<br clear="all" />



<div class="form_area">

<?php echo $output; ?>

<form method="post" enctype="multipart/form-data" action="">
<span class="success"><?php echo $successMessage;?></span>
<br clear="all" />
<label> Name</label><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name" class="input_form">
<span class="error"><?php echo $nameError;?></span>

<br clear="all" />

<label>Mobile</label>
<input oninput="maxLengthCheck(this)" type = "number" maxlength = "10" name="mobile" value="<?php echo $mobile;?>" placeholder="Mobile" class="input_form">
<span class="error"><?php echo $mobileError;?></span>
<br clear="all" />

<label>Email</label>
<input type="email" name="email" value="<?php echo $email;?>" placeholder="Email" class="input_form">
<span class="error"><?php echo $emailError;?></span>
<br clear="all" />

<label>DOB</label>
<input type="date" name="dob" value="<?php echo $dob;?>" placeholder="DOB" class="input_form">
<span class="error"><?php echo $dobError;?></span>
<br clear="all" />


<label>Gender </label>
<select  name="gender"  value="<?php echo $gender;?>">
<option  value="gender">Select your gender</option>
<option value="Male"> Male</option>
<option value="Female"> Female</option>

</select>
<span class="error"><?php echo $genderError;?></span>


<br clear="all" />

<label>Qualification</label>
<input type="text" name="qualification" value="<?php echo $qualification;?>" placeholder="Qualification" class="input_form">
<span class="error"><?php echo $qualificationError;?></span>
<br clear="all" />


<label>Position</label>
<input type="text" name="position" value="<?php echo $position;?>" placeholder="Position" class="input_form">
<span class="error"><?php echo $positionError;?></span>
<br clear="all" />

<label class="lable">Upload Your CV</label>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<input type=file name="uploaded_file" id="uploaded_file"   class="input_form" style="border:none;" required/>
<span class="error"><?php echo $imagefileError;?></span>
<br clear="all" />


<label>Address Details</label>
    
<textarea type="text" name="address" placeholder="Address" class="adress"></textarea>
<span class="error"><?php echo $addressError;?></span>
<br clear="all" />
<br clear="all" />
<label></label>

<input type="submit" value="submit" id="submit" name="submit"  class="button" /><br clear="all" />


</form>
</div>

</div><!--brand-right-->





</div><!--brand-sect--->
</div><!--inner-content-wrap--->


<script>
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>

<br clear="all" />


  
  
  
 

<?php 
include'footer.php';
?>
  
</body>
   
   


</html>