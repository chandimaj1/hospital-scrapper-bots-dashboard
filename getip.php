<?php

//Get MAX Attempts for the IP
function get_attempts($ip){

    include 'db.php';
    $conn = mysqli_connect("$servername","$username","$password","$dbname") or die ("could not connect database");

    $sql="SELECT attempt FROM registration_limit WHERE ip='$ip'";

     $result = $conn->query($sql);
    $value = mysqli_fetch_object($result);
    $conn->close();
    
    $attempt = $value->attempt;
    return $attempt;
    
}


//Update Login Records Database
function update_login_db($ip,$country,$city,$referer){

    include 'db.php';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO logins (ip,country,city,referer) VALUES ('$ip','$country','$city','$referer')";

    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


//Get login infromation
function getLocationInfoByIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $httpReferer = @$_SERVER['HTTP_REFERER'];
    $ip = 'unidentified';
    
    $result  = array('country'=>'unidentified', 'city'=>'unidentified', 'ip'=>'unidentified','referer'=>'unidentified','attempts'=>0);
    
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $result['ip']=$ip;
    $result['referer']=$httpReferer;
    $ip_data = @json_decode
(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['country'] = $ip_data->geoplugin_countryCode;
        $result['city'] = $ip_data->geoplugin_city;
    }

    
$ip = $result['ip'];
$country = $result['country'];
$city = $result['city'];
$referer = $result['referer'];
    
    update_login_db($ip,$country,$city,$referer);
    
    $attempts = get_attempts($ip);
    $result['attempts'] = $attempts;
    
    return $result;
}


?>