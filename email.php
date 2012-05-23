<html>
<head></head>
<body>
<?php
require("PHPMailer_v2.0.4/class.phpmailer.php");

$mtxtname = $_POST["txtName"];
$mtxtemail = $_POST["txtEmail"];
$message = $_POST["txtMessage"];

$mail = new PHPMailer(); 
$mail->IsSMTP(); // send via SMTP
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "burkesmtp@gmail.com"; // SMTP username
$mail->Password = "1qa2ws3e"; // SMTP password
$webmaster_email = "noreply@nickhessphotography.com"; //Reply to this email ID
$email="hessn89@yahoo.com"; // Recipients email ID
//$email="birk5437@gmail.com";
//$name="thisisatestname"; // Recipient's name
$mail->From = $webmaster_email;
$mail->FromName = "Webmaster";
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Webmaster");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("/var/tmp/file.tar.gz"); // attachment
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg"); // attachment
$mail->IsHTML(false); // send as HTML
$mail->Subject = "Message from your website";
$mail->Body = "Email: " . $mtxtemail . "\nName: " . $mtxtname . "\r\nMessage: " . $message; //HTML Body
//$mail->AltBody = $message; //Text Body
if(!$mail->Send())
{
echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
echo "Message has been sent";
}
header( 'Location: contact.html' ) ;
?>
</body>
</html>
