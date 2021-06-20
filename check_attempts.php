<?php
$ip = $_POST['ip'];

include 'db.php';
$conn = mysqli_connect("$servername","$username","$password","$dbname") or die ("could not connect database");

 $sql="SELECT attempts FROM registration_limit WHERE ip='$ip'";
 
 $result = $conn->query($sql);

?>