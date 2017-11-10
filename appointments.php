	<?php
	include_once("connect.php");
	include("session.php");
	$user = $_SESSION['login_user'];	
	$sql = "SELECT `appoint_id`,`appoint_date`,`appoint_time`,`hospital` from appointments where user_name='$user'";
	$result = mysqli_query($conn,$sql);
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Appointments</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

	<!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materialize/css/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<div class="container">
		<?php include("navbar_in.php"); ?>
		<h5>View Appointments</h5>

		<div>
			<table>
		        <thead>
		          <tr>
		              <th>Date</th>
		              <th>Time</th>
		              <th>Hospital</th>
		          </tr>
		        </thead>

		        <tbody>
		        	<?php 
					while($row = mysqli_fetch_assoc($result)) {
					?>
						<tr>
							<td><?php echo $row["appoint_id"];?></td>
							<td><?php echo $row["appoint_date"];?></td>
							<td><?php echo $row["appoint_time"];?></td>
							<td><?php echo $row["hospital"];?></td>
						</tr>
						<?php } ?> 
		        </tbody>
			</table>
		</div>
	</div>

</body>
</html>