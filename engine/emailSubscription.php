<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comparision Form Input</title>
</head>
<body>
<?php
$IPAddress		 	 = $_SERVER['REMOTE_ADDR'];
$email			 	 =  $_POST['email'];
$space = "      ";
$myFile = "/Business-Loan-Help/LEAD/Email-subscription.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, "Email Address					:"	 .$email."\r\n");
fwrite($fh, "IP Address of Computer			:"   .$IPAddress."\r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "           END                 \r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "                               \r\n");
fclose($fh);
$to = "uzairiqbal@live.com";
$subject = "Business-Loan-Help/Email-Subscription";
$body	= "This Email is an auto-generated email from www.business-loan-help/emailSubscription
\n\n Email Address				:		$email
\n\n IP Address Of the Computer	:		$IPAddress
\n\n
\n\n  END OF EMAIL
\n\n
\n\n
";
mail($to, $subject, $body);	
echo '<script>alert ("Thank you! We are generating your report . . . !")</script>';
?>
<script>
function redirect(url,seconds)
{
	var ss = seconds * 1000;
	window.setTimeout('window.location="../top-10-small-business-loan-united-states.html"; ',ss);
}
redirect();
</script>
</body>
</html>