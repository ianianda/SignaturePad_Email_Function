?>
<HTML>
<body>
MAIL SETTING for Iseries<br>
Define a real name of your mail Server<br>
<center>
SMTP = cloud1.drcomputers.biz </center>
<br>
Define a real name of your mail Server<br>
<center>
smtp_port = 597</center>
<br>
Define an any address you want<br>
<center>
sendmail_from = cma-sc@bvcomputers.ca</center><br>
</body>
 
<?php
// Using the ini_set()
ini_set("SMTP", "cloud1.drcomputers.biz");
ini_set("sendmail_from", "cma-sc@bvcomputers.ca");
//ini_set("smtp_port", "597");

// The message
$message = [usr_login]. ", something to say";

// Send
$headers = "From: cma-sc@bvcomputers.ca\r\n";
$headers .= "Reply-To: cma-sc@bvcomputers.ca\r\n";
$headers .= "Return-Path: cma-sc@bvcomputers.ca\r\n";

mail('cma-sc@bvcomputers.ca', 'Timesheet Feedback', $message, $headers);

echo "Check your email now....<BR>";
?>
</HTML>
<?php