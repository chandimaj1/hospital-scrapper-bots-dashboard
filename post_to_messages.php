<?php


$subject = $_POST["subject"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$msg = $_POST["message"];

$body = "
<html>
<head>
<title>New message from remoteicu.com</title>
</head>
<body>
<hr>
<h4>Subject : $subject</h4>
<hr>
<p>Contact information</p>
<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone</th>
</tr>
<tr>
<td>$firstname</td>
<td>$lastname</td>
<td>$email</td>
<td>$phone</td>
</tr>
</table>
<hr>
<h4>Message</h4>
<p>$msg</p>
</body>
</html>
";
$to .= '<info@remoteicu.com>,<newnonusdoctor@gmail.com>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <remoteicu@donotreply.com>' . "\r\n";
$headers .= 'Bcc: <shamalk@gmail.com>,<chandimadilhan@gmail.com>' . "\r\n";


mail($to,$subject,$body,$headers);

    echo 'Your information has been sent. Thank you. Expect a reply within 24 hours in most cases. Should you not receive a reply or telephone call, please send an email to info@remoteicu.com';

?>