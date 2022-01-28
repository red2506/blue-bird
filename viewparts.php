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

  
 $res=mysqli_query($conn,"call viewparts")or die (mysqli_error($conn));;
 ?>
 <html>
<head>
     <title>Bike service</title>
	 <link rel="stylesheet" type="text/css" href="css/style15.css">
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
    <th>Bill_no</th>
    <th>PART_NAME</th>
    <th>PART_NO</th>
    <th>RC_NO</th>
    <th>PARTS_COST</th>
    
   
  </tr>
  <?php while($viewc= mysqli_fetch_object($res)) {?>
 
   <tr>
    <th><?php echo $viewc->Bill_No ?></th>
    <th><?php echo $viewc->Part_Name ?></th>
    <th><?php echo $viewc->Part_No ?></th>
    <th><?php echo $viewc->RC_NO ?></th>
    <th><?php echo $viewc->Part_cost ?></th>
   
    
  </tr>
  <?php } ?>
</table>   
  