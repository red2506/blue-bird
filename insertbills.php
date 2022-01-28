<?php


 $Bill_No = $_POST ['Bill_No'];
 $Tax = $_POST [ 'Tax'];
 $Insurance = $_POST [ 'Insurance'];
 $Total_cost = $_POST [ 'Total_cost'];
 $Payment_mode = $_POST [ 'Payment_mode'];




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
$sql = "update bill set  Tax = '$Tax', Insurance = '$Insurance',Total_cost = '$Total_cost' , Payment_mode = '$Payment_mode' where Bill_No = '$Bill_No'";
if ($conn->query($sql) === TRUE) {
    echo "<b>BILL TABLE UPDATED</b>";
	
			include("insertbills.html");

} else {
    echo "<b>ERROR IN UPDATING</b>";
	include("insertbills.html");
}
$conn->close();


?>