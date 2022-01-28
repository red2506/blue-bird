<?php
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

		$EMAIL=$_POST['EMAIL'];
      
 
	
   $sql="delete  from owner_details where EMAIL = '$EMAIL'";
  
   if ($conn->query($sql) === TRUE) {
       
		include("viewcust.php");

} else {
    echo "<script>alert('CUSTOMER DOES NOT EXIST');</script>";
   // echo "<b>CUSTOMER DOES NOT EXIST</b>";
	include("viewcust.php");
}
   
   ?>

