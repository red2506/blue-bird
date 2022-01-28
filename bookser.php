<?php
session_start();
 $RC_NO =  $_POST ['RC_NO'];
 $Type_of_service = $_POST ['Type_of_service'];
 $In_date = $_POST['ID'];
 $In_time = $_POST['In_time'];
 $RRC_NO=$_SESSION['RC_NO'];
$res=strtotime("now");
$book=strtotime($In_date);
if($RC_NO===$RRC_NO){
  if($book>$res ){
	
 
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
$sql = "INSERT INTO services (`Type_of_service`, `In_date`, `In_time`,  `RC_NO`) VALUES ('$Type_of_service', '$In_date', '$In_time', '$RC_NO')";
if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
	echo "<script>alert('New Booking successfully.');</script>";
 //echo "New Booking successfully. Your Latest Service ID is: " . $last_id;
 //echo "<b>booking successfull</b>";
			include("home.html");

} else {
	echo "<script>alert('Booking Failed');</script>";
    //echo '<script>alert("Booking Failed")</script>';
	//echo "<b>Booking Failed</b>";
	include("bookser.html");
}
$conn->close();
}
else{
	echo "<script>alert('Select proper date');</script>";
	//echo "<b>Select proper date</b>";
	include("bookser.html");
}
}
else{
	echo "<script>alert('Enter correct RC_NO');</script>";
	//echo "<b>Enter correct RC_NO</b>";
	include("bookser.html");
}	
?>