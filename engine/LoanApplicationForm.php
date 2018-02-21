<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comparision Form Input</title>
</head>
<body>
<?php
$IPAddress		 	 = $_SERVER['REMOTE_ADDR'];
$yearInBusiness 	 =  $_POST['yearInBusiness'];
$avgDeposit			 = $_POST['avgDeposit'];
$businessName		 = $_POST['businessName'];
$phoneNumber		 = $_POST['phoneNumber'];
$emailAddress		 = $_POST['emailAddress'];
$amountRequired		 = $_POST['amountRequired'];
$space = "      ";
$myFile = "/Business-Loan-Help/LEAD/LEAD.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, "Business Name				:"   .$businessName."\r\n");
fwrite($fh, "Business Phone				:"   .$phoneNumber."\r\n");
fwrite($fh, "Business Email				:"   .$emailAddress."\r\n");
fwrite($fh, "Years In Business			:"   .$yearInBusiness."\r\n");
fwrite($fh, "Avg. Monthly Deposits			:"	 .$avgDeposit."\r\n");
fwrite($fh, "Amount Required				:"	 .$amountRequired."\r\n");
fwrite($fh, "IP Address of Computer			:"   .$IPAddress."\r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "           END                 \r\n");
fwrite($fh, "                               \r\n");
fwrite($fh, "                               \r\n");
fclose($fh);
$to = "uzairiqbal@live.com";
$subject = "Business-Loan-Help/Loan Application";
$body	= "This Email is an auto-generated email from www.business-loan-help/loanApplication
\n\n Business name				:		$businessName
\n\n Business phone				:		$phoneNumber
\n\n Business email				:		$emailAddress
\n\n Years In Business 	   		:		$yearInBusiness
\n\n Avg. Monthly Deposits		:		$avgDeposit
\n\n Amount Required			:		$amountRequired
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