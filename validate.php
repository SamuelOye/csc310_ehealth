<?php
include_once('connect.php');
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];

$username = $_POST["username"];
$password = $_POST["password"];

$email = $_POST["email"];
$gender = $_POST["gender"];

$sql = "INSERT INTO users values('$username','$firstname','$lastname','$password','$email','$gender')";

 mysqli_query($conn,$sql) or die("Could not insert post" . mysqli_error($conn)); 

 header("Location: hompage.php");
 ?>