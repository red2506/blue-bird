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

  
 $res=mysqli_query($conn,"call viewbills")or die (mysqli_error($conn));;
 ?>
 <html>
<head>
     <title>Bike service</title>
	 <link rel="stylesheet" type="text/css" href="css/style13.css">
</head>
<body>
    <header>
	    <div class="">
		 
		   <div class="logo">
		         <a href="adminhome.html">  <img src="logo.jpeg" align="right"></a>
		     </div>
			
        </div><br><br><br><br>
		 </div>
		 <head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
	background:rgba(255,255,255,0.5);
    width: 100%;
}

td, th {
    border: 1px solid #000000;
	border-width:2px;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #FFFFFF;
}
</style>
<table>
  <tr>
    <th>RC_NO</th>
    <th>Bill_no</th>
    <th>Part_cost</th>
    <th>Service_cost</th>
    <th>tax</th>
    <th>Insurance_claimed</th>
    <th>total_cost</th>
    <th>Payment_mode</th>
  </tr>
  <?php while($bill= mysqli_fetch_object($res)) {?>
 
   <tr>
    
    
	<th><?php echo $bill->RC_NO ?></th>
	<th><?php echo $bill->Bill_No ?></th>
	<th><?php echo $bill->Part_cost ?></th>
	<th><?php echo $bill->Service_cost ?></th>
    <th><?php echo $bill->Tax ?></th>
    <th><?php echo $bill->Insurance ?></th>
    <th><?php echo $bill->Total_cost ?></th>
    <th><?php echo $bill->Payment_mode ?></th>
  </tr>
  <?php } ?>
</table>   
  
 