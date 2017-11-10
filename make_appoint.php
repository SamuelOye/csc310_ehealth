
 <?php 
 	include_once("connect.php");
 	include("session.php");
 	$date = $_POST["date"];
 	$time = $_POST["time"];
 	$hospital = $_POST["hospital"];
 	$user = $_SESSION['login_user'];


 	$sql = "INSERT INTO appointments (`user_name`,`appoint_date`,`appoint_time`,`hospital`) values('$user','$date','$time','$hospital')";
 	 mysqli_query($conn,$sql) or die("Could not insert post" . mysqli_error($conn)); 

  ?>