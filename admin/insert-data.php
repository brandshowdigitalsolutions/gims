<?php
session_start();
include('dbc.php');

$regid=$_SESSION['regid'];
$roll_no=$_SESSION['roll_no'];
$name=$_SESSION['name'];
$mobile=$_SESSION['mobile'];
$email=$_SESSION['email'];
$per_address=$_SESSION['per_address'];
$class=$_SESSION['class'];
$passing_year=$_SESSION['passing_year'];
$type=$_SESSION['type'];
$org_name=$_SESSION['org_name'];
$org_address=$_SESSION['org_address'];
$org_phone=$_SESSION['org_phone'];
$designation=$_SESSION['designation'];
    
$otp=$_POST['otp'];
       
  $check="select * from user_signup where otp='$otp'";
  $ckk=mysqli_query($conn,$check);
  
if(mysqli_num_rows($ckk) == 0)
{
echo "<script type='text/javascript'>alert('Invalid Otp');
window.location='otp.php';
</script>";
    
}
else
{
$query="update user_signup set name='$name',roll_no='$roll_no',regid='$regid',mobile='$mobile',email='$email',per_address='$per_address',class='$class',passing_year='$passing_year',type='$type',org_name='$org_name',org_address='$org_address',org_phone='$org_phone',designation='$designation' where otp='$otp'";
    
    
    
    
if(mysqli_query($conn,$query))
{
date_default_timezone_set('Asia/Calcutta');
 require_once('PHPMailer/PHPMailer_v5.1/class.phpmailer.php'); //library added in download source.

            $mail= new PHPMailer();

// message
            $body='
<html>
<head>
<title>ALUMNI REGISTRATION FORM</title>

</head>
<body>
<br /><br />
<table border="1" bordercolor="#FFFFFF">
<tr>
<td> ID</td> <td> '.$regid.' </td>
</tr>
<tr>
<td> Roll No</td> <td> '.$roll_no.' </td>
</tr>
<tr>
<td> Name</td> <td> '.$name.' </td>
</tr>
<tr>
<td> Mobile No.</td> <td> '.$mobile.' </td>
</tr>
<tr>
<td> E-mail</td> <td> '.$email.' </td>
</tr>
<tr>
<td> Per address</td> <td> '.$per_address.' </td>
</tr>
<tr>
<td> Class</td> <td> '.$class.' </td>
</tr>
<tr>
<td> Passing year</td> <td> '.$passing_year.' </td>
</tr>
<tr>
<td> Org Type</td> <td> '.$type.' </td>
</tr>
<tr>
<td> Org name</td> <td> '.$org_name.' </td>
</tr>
<tr>
<td> Org address</td> <td> '.$org_phone.' </td>
</tr>
<tr>
<td> Org phone</td> <td> '.$org_address.' </td>
</tr>
<tr>
<td> Designation</td> <td> '.$designation.' </td>
</tr>
</table>
</body>
</html>
';
            $body= eregi_replace("[\]",'',$body);

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

            $mail->SetFrom($email);

            $mail->AddReplyTo($email);

            $mail->Subject    = "ALUMNI REGISTRATION FORM";

            $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

            $mail->MsgHTML($body);



             //$address = "shilpee@cogdigital.in";
            $address = "deanacademic@gniot.net.in";
            $address11 = "director@gniot.net.in";
            $mail->AddAddress($address);
            $mail->AddAddress($address11);




//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment



            if(!$mail->Send()) {
                echo "Mail not sent!";
            } else {

                $mail2= new PHPMailer();

// message
                $body2='
<html>
<head>
<title>Thank you for contacting us.</title>
</head>
<body>
Dear  '.$name.',
<br/><br/>
Thank you for contacting with us.
<br/><br/>
Regards ,
<br/><br/>
Shilpee
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

                $mail2->SetFrom('gniot@gniot.net.in', 'GNIOT');

                $mail2->AddReplyTo('gniot@gniot.net.in', 'GNIOT');

                $mail2->Subject    = "Thank you for contacting us";

                $mail2->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

                $mail2->MsgHTML($body2);

                $address2 = $email;
                $mail2->AddAddress($address2);
                $mail2->Send();
                $msg="<center>Thank you for contacting us.We will get back to you soon.</center>";
            
          }
        }
        
}

?>

<p><?php echo $error;?></p>
<p><?php echo $msg;?></p>

<script type="text/javascript">
      window.setTimeout(function() {location.href ='https://www.gniotgroup.edu.in/admin';}, 1000);
        </script>