<?php
   include('connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];

   $query = "SELECT user_name from users where user_name = '$user_check'";
   
 $result = mysqli_query($conn,$query);
   // echo $result;
 $row = mysqli_fetch_array($result);
 // echo $row;
   
   $login_session = $row['user_name'];
   // echo $login_session;
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>