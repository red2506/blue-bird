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

  $RC_NO=$_SESSION['RC_NO'];
 $res=mysqli_query($conn,"select * from owner_details where RC_NO='$RC_NO'")or die (mysqli_error($conn));;
 ?>
 <html>
<head>
     <title>Bike service</title>
	 <link rel="stylesheet" type="text/css" href="css/style551.css">
</head>
<body>
    <header>
	    <div class="">
		 
		   <div class="logo">
		         <a href="home.html">  <img src="logo.jpeg" align="right"></a>
		     </div>
			
        </div><br><br><br><br>
		 </div>
		 <head>
<style>
form{
	background:#ffffff82;
  width:300px;
  border-radius:10px;
  margin: 0 auto 0 auto;
  padding:23px 0px 40px 0px;
  border: #ffffff82 ;
  color:LightGray;
  
 
  
}

</style>
<form>
 
  <?php while($bill= mysqli_fetch_object($res)) {?>
 
   <label><b>First Name :</b></label> 
   <?php echo $bill->FIRST_NAME ?><br><br></br>
   <label><b>Last Name :</b></label> 
   <?php echo $bill->LAST_NAME ?><br><br></br>
   <label><b>RC_NO :</b></label> 
   <?php echo $bill->RC_NO ?><br><br></br>
   <label><b>Address :</b></label>
   <?php echo $bill->ADDRESS ?><br><br></br>
   <label><b>Phone Number :</b></label>
   <?php echo $bill->PH_NO ?><br><br></br>
   <label><b>Email Id :</b></label>
   <?php echo $bill->EMAIL ?><br><br></br>
   <label><b>Password :</b></label>
   <?php echo $bill->PASSWORD?><br><br></br>
 
  <?php } ?>
</table>   
  
 