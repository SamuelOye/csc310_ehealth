<?php
include_once('connect.php');
include("session.php");
$firstname = mysqli_real_escape_string($conn,$_POST["first_name"]);
$lastname = mysqli_real_escape_string($conn,$_POST["last_name"]);

$password = mysqli_real_escape_string($conn,$_POST["password"]);

$email = mysqli_real_escape_string($conn,$_POST["email"]);

$user = $_SESSION['login_user'];

$sql = "UPDATE users SET first_name='$firstname',last_name='$lastname',password='$password',email='$email' where user_name='$user'";

echo $user;


if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
 // header("Location: hompage.php");
 ?>