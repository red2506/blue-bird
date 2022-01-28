<?php

 $FIRST_NAME =  $_POST ['FIRST_NAME'];
 $LAST_NAME = $_POST ['LAST_NAME'];
 $RC_NO =  $_POST ['RC_NO'];
 $ADDRESS = $_POST ['ADDRESS'];
 $PH_NO = $_POST [ 'PH_NO'];
 $EMAIL = $_POST [ 'EMAIL'];
 $PASS = $_POST [ 'PASS'];
 $REPASS = $_POST [ 'REPASS'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bike-service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if ($PASS === $REPASS){
$sql = "INSERT INTO `owner_details` (FIRST_NAME,LAST_NAME,RC_NO,ADDRESS,PH_NO,EMAIL,PASSWORD) VALUES ('$FIRST_NAME', '$LAST_NAME', '$RC_NO', '$ADDRESS', '$PH_NO','$EMAIL','$PASS')";
if ($conn->query($sql) === TRUE) {
       
		include("bike_details.html");

} else {
    echo "<b>User already exist</b>";
	include("register.html");
}
}
else{
    echo "<b>password doesnot match</b>: ";
	include("register.html");
}

$conn->close();
?>




