<!DOCTYPE html>
<html>
<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Edit Profile</title>

	<!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materialize/css/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<?php include("navbar_in.php"); ?>
	<div class="container">
		<h3>Edit Profile</h3>
			<form action="edit_profile.php" method="post">
				<h5>Name:</h5>
				<div class="row">
					<div class=" input-field col s6">
						<input id="firstname" name="first_name" type="text" class="validate" required>
						<label for="firstname">Firstname</label>
					</div>

					<div class=" input-field col s6">
						<input id="lastname" name="last_name" type="text" class="validate" required>
						<label for="lastname">Lastname</label>
					</div>
				</div>

				<h5>Security:</h5>
				<div class="row">
					<div class="input-field col s6">
					  <input id="password" name="password" type="password" class="validate" required=>
					  <label >Password</label>
					</div>

					<div class="input-field col s6">
					  <input id="confirmpass" name="confirmpass" type="password" class="validate" required>
					  <label for="confirmpass">Confirm Password</label>
					</div>
				</div>

				<h5>Mail: </h5>
				<div class="row">
				  <div class="input-field col s5" disabled>
				    <input id="email" type="email" name="email" class="validate" required>
				    <label for="email">Email</label>
				  </div>
				</div>

<!-- 				 <h5>Gender:</h5>
		          <div class="row">
		            <div class="col s4">
		              <input class="with-gap" name="gender" type="radio" value="Male" checked>
		              <label for="Male">Male</label>
		            </div>

		            <div class="col s4">
		              <input class="with-gap" name="gender" type="radio" value="Female">
		              <label for="Female">Female</label>
		            </div>
		          </div>
		          <div > -->
		          	<button class="btn waves-effect  teal lighten-2" type="submit"><i class="material-icons left">save</i>Save</button>
		          	<a class="btn waves-effect  " href="hompage.php"><i class="material-icons left">cancel</i>Cancel</a>
		          </div>
		          		
			</form>	
	</div>
	
	<br>
	<?php include("footer.html"); ?>
	<script src="materialize/code.jquery.com/jquery-2.1.4.min.js"></script>
	  <script src="materialize/dist/js/materialize.js"></script>
	  <script src="materialize/js/init.js"></script>

</body>
</html>