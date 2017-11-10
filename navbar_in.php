<!-- Script for populating Hospital select box -->

<?php 
	include_once("connect.php");	
	$sql = "SELECT name from hospitals";
	$result = mysqli_query($conn,$sql);	

 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Dropdown Structure -->
	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="profile.php">Edit Profile</a></li>
	  <li><a href="appointments.php">View Appointments</a></li>
	  <li class="divider"></li>
	  <li><a href="#confirm">Logout</a></li>
	</ul>
	
	<nav>
		<div class="nav-wrapper white" >
	      <a href="#" class="brand-logo" class="center-align">e-health</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a class="dropdown-button" href="#" data-activates="dropdown1">My Profile<i class="material-icons right">arrow_drop_down</i></a></li>
	        <li><a href="#appoint">Make Appointment</a></li>
	        <li><a href="blog.php">Blog</a></li>
	        <li><a href="#about">About</a></li>
	      </ul>
	    </div>
	</nav>

	<div id="appoint" class="modal" style="padding:0px;">
	    <div class="modal-content">
	    	<div class="center-align container">
	          	<h2 class="header">Make Appointment</h2>
	          	<img class="responsive-img" src="assets/img/client_user.png">

	          	<form class="col s12" action="make_appoint.php" method="post">	             
	              	<h5>Date And Time</h5>
	              	<br>
	            	<div class="row">
	              		<div class="col s6">
	              			<label for="date">Date of Appointment</label>
	              			<input name="date" id="date" type="text" class="datepicker" required>
	              		</div>              

		            	<div class="col s6">
		              		<label for="time">Time of Appointment</label>
		                	<input name="time" id="time" type="text" class="timepicker" required>				
		            	</div>
	            	</div>

	            	<div>
	            		<h5>Hospital</h5>
	            		<div class="input-field">
	            			<select name="hospital" id="">
	            				<option value="" disabled selected>Choose your hospital</option>
	            				<?php 
	            					while($row = mysqli_fetch_assoc($result)) {
	            					?>
										<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
										<?php } ?>         
	            			</select>
	            		</div>
	            		
	            	</div>         
	            	<button  class="btn waves-effect  teal lighten-2" type="submit"><i class="material-icons left">send</i> Send</button>
	          </form> 	          
	        </div>
	    </div>
  	</div>
	
	<div id="confirm" class="modal" style="padding:0px;">
  	<div class="modal-content">
  		<div class="center-align container">
  	      	<h4 class="header">Confirm</h4>	
  	      	<p>Are you sure you want to Logout</p>
  	      	<div class="row">
  	      		<div class="col s6">
  	      			<a class="btn waves-effect" href="logout.php">Yes</a>
  	      		</div>
  	      		<div class="col s6">
  	      			<a class="btn waves-effect" onclick=" $('#confirm').modal('close');">No</a>
  	      		</div>
  	      	</div>          	
  	    </div>
  	</div>
  </div>
</body>

<script>
  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date, 
  });

   $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
</script>

</html>

