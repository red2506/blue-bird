<?php


 $Part_Name = $_POST ['Part_Name'];
 $RC_NO = $_POST [ 'RC_NO'];
 $Part_cost = $_POST [ 'Part_cost'];
 $Part_No = $_POST [ 'Part_No'];
 $Bill_No = $_POST [ 'Bill_No'];




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
$sql = "INSERT INTO `parts` (`Part_Name`, `Part_No`,`Part_cost`, `RC_NO`,`Bill_No`) VALUES ('$Part_Name','$Part_No', '$Part_cost', '$RC_NO','$Bill_No')";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('PART LIST UPDATED');</script>";
    //echo "<b>PART LIST UPDATED</b>";
	
			include("insertparts.html");

} else {
    echo "<script>alert('ERROR IN UPDATING');</script>";
    //echo "<b>ERROR IN UPDATING</b>";
	include("insertparts.html");
}
$conn->close();


?>