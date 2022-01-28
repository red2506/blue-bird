<?php

 $service_id =  $_POST ['Service_id'];
 $Service_cost = $_POST ['Service_cost'];
 $Out_date	 =  $_POST ['OD'];
 $out_time = $_POST ['out_time'];
 $Bill_No = $_POST ['Bill_No'];
 
 
 $res=strtotime("now");
$book=strtotime($Out_date);
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
//
//$sql = "INSERT INTO `services` (`Service_id`, `Bill_No`) VALUES ('$service_id','$Bill_No')";
//
$sql = "UPDATE services SET   Out_date = '$Out_date', out_time = '$out_time',Bill_No = '$Bill_No' , Service_cost = '$Service_cost' where service_id = '$service_id'";

//if ($conn->query($sql) === TRUE) {
//	echo "Record updated successfully";
//}

if ($conn->query($sql) === TRUE) {
    echo "<b>SERVICE TABLE UPDATED</b>";
	
			include("insertser.html");

} else {
    echo "<b>ERROR IN UPDATING</b>";
	include("insertser.html");
}
$conn->close();
}
else{
	echo "Select proper date";
	include("insertser.html");
}

?>