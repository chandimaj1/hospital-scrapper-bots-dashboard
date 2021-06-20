<?php

include 'db.php';
$conn = mysqli_connect("$servername","$username","$password","$dbname") or die ("could not connect database");

 $sql="SELECT * FROM logins WHERE timestamp >= DATE(NOW()) - INTERVAL 7 DAY";
 
 $result = $conn->query($sql);

$table_data="";

while($row = $result->fetch_assoc()) {
	  	$table_data.= ("<tr>");
	  		$table_data.= "<td>".$row['id']."</td>";
	  		$table_data.= "<td>".$row['ip']."</td>";
	  		$table_data.= "<td>".$row['country']."</td>";
	  		$table_data.= "<td>".$row['city']."</td>";
	  		$table_data.= "<td>".$row['referer']."</td>";
	  		$table_data.= "<td>".$row['timestamp']."</td>";
	  	$table_data.= "</tr>";
}



$subject = "RemoteICU: Weekly Login Report";

$to = "info@remoteicu.com";

$message = "
<html>
<head>
<title>RemoteICU: Weekly Login Report</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<hr>
<h4>Subject : $subject</h4>
<hr>
<table border='1'>
<tr>
<th>id</th>
<th>ip</th>
<th>country</th>
<th>city</th>
<th>referer</th>
<th>timestamp</th>
</tr>
$table_data
</table>
<hr>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <site@remoteicu.com>' . "\r\n";
$headers .= 'Bcc: <shamalk@gmail.com>' . "\r\n";

mail($to,$subject,$message,$headers);


?>