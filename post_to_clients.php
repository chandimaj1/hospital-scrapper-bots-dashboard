<?php

    $specialty = $_POST["specialty"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $ip = $_POST["ip"];
    $logincountry = $_POST["logincountry"];

include 'db.php';

function send_message($specialty,$firstname,$lastname,$email,$phone,$address,$country,$ip,$logincountry){

$subject = "RemoteICU: New hospital client registration";

$body = "
<html>
<head>
<title>RemoteICU: New hospital client</title>
</head>
<body>
<p>Contact information</p>
<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Country</th>
</tr>
<tr>
<td>$firstname</td>
<td>$lastname</td>
<td>$email</td>
<td>$phone</td>
<td>$address</td>
<td>$country</td>
</tr>
</table>
<hr>
<p>Registration information</p>
<table border='1'>
<tr>
<th>Specialty</th>
<th>IP Address</th>
<th>Logged Country</th>
</tr>
<tr>
<td>$specialty</td>
<td>$ip</td>
<td>$logincountry</td>
</tr>
</table>
</body>
</html>
";

$to .= '<srabinowitz@remoteicu.com>,<bgoldstein@remoteicu.com>,<jtrubnick@remoteicu.com>,<newnonusdoctor@gmail.com>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <remoteicu@donotreply.com>' . "\r\n";
$headers .= 'Bcc: <shamalk@gmail.com>,<chandimadilhan@gmail.com>' . "\r\n";


mail($to,$subject,$body,$headers);

    echo 'Your information has been sent. Thank you. Expect a reply within 24 hours in most cases. Should you not receive a reply or telephone call, please send an email to info@remoteicu.com';

}

//Record submit attempts
function record_submit_attempts($ip){
    include 'db.php';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO registration_limit (ip, attempt) VALUES('$ip',1) ON DUPLICATE KEY UPDATE attempt=(attempt + 1)";
    
    if ($conn->query($sql) === TRUE) {
        return "success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO clients (specialty,firstname,lastname,email,phone,address,country,ip,logincountry) VALUES ('$specialty','$firstname','$lastname','$email','$phone','$address','$country','$ip','$logincountry')";

    if ($conn->query($sql) === TRUE) {
        $x = record_submit_attempts($ip);
        send_message($specialty,$firstname,$lastname,$email,$phone,$address,$country,$ip,$logincountry);
        echo "New record created successfully. attemp submit:$x";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();
?>