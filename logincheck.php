<?php
session_start();
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

		$myusername=$_POST['myusername'];
        $mypassword=$_POST['mypassword'];
 if($myusername != NULL && $mypassword != NULL)
 {
	
   $sql="select * from owner_details where RC_NO = '$myusername' and PASSWORD= '$mypassword' ";
   $query=mysqli_query($conn,$sql) or die (mysqli_error($conn));
   
   $res=mysqli_fetch_row($query);
   $_SESSION['RC_NO'] =$_POST['myusername'];
   if($res)
   {
	include("home.html");
	
   }
   else
   {
    echo "<script>alert('The entered username or password is incorrect');</script>";
    //echo'You entered username or password is incorrect';
	include("login.html");
   }
 }
 

?>