<?php 
	// Enter the MySQL Host Address 
$dbhost = 'localhost'; 
// Enter the MySQL Username 
$dbuser = 'root'; 
// Enter the MySQL Password 
$dbpass = ''; 
// Enter the MySQL Database Name 
$dbname = 'soteria'; 

// Establish the MySQL Connection 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql' . mysqli_connect_error()); 

// Select the MySQL Database so that you can retrieve and store values in it 
mysqli_select_db($conn,$dbname); 
 ?>