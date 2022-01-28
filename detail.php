<?php

 $Company =  $_POST ['Company'];
 $Model = $_POST ['Model'];
 $Colour =  $_POST ['Colour'];
 $CC = $_POST ['CC'];
 $RC_NO = $_POST [ 'RC_NO'];
 $Insurance = $_POST [ 'Insurance'];




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
$sql = "INSERT INTO `bike_details` (`Company`, `Model`, `Colour`, `CC`, `RC_NO`,`Insurance`) VALUES ('$Company', '$Model', '$Colour', '$CC', '$RC_NO','$Insurance')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registered successfully . You can login now');</script>";
    //echo "<b>Registered successfully</b><br>";
	//echo "<b>You can login now</b>";
			include("login.html");

} else {
    echo "<script>alert('Enter correct RC_NO');</script>";
    //echo "<b>Enter correct RC_NO</b>";
	include("bike_details.html");
}
$conn->close();


?>