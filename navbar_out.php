<!-- PHP script for handling the login and registration -->

<?php
   include("connect.php");
   $error="";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT user_name FROM users WHERE user_name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: hompage.php");
      }else {
         $error = "Your Login Name or Password is invalid";

      }
   }
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav>
	    <div class="nav-wrapper white" >
	      <a href="#" class="brand-logo" class="center-align">e-health</a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="#modal2">Login</a></li>
	        <li><a href="#modal1">Register</a></li>
	        <li><a href="#about">About</a></li>
	      </ul>
	      <div class="center-align"><label style="color:red;"><?php echo $error;?></label></div>

	    </div>
	
	</nav>


	<!-- Modals for Login and Register -->

	 <!-- Login Modal Box -->
  <div id="modal2" class="modal" style="padding:0px;">
    <div class="modal-content">
      <div class="center-align container">
          <h2 class="header">Login</h2>
          <img class="responsive-img" src="assets/img/client_user.png">

          <div><?php echo $error; ?></div>
        <div class="row">
          <form class="col s12" action="" method="POST">
             
            <!-- <div class="row"> -->

               <div class="input-field">
                <input name="username" type="text" class="validate" required>
                <label for="last_name">Username</label>
              </div>

              <div class="input-field">
                <input name="password" type="password" class="validate" required>
                <label for="password">Password</label>
              <!-- </div> -->
            </div>         
            <button class="btn waves-effect  teal lighten-2" type="submit" name="action" >LOGIN</button>
          </form> 
        </div>
          
        </div>
    </div>
  </div>
        

  <!-- Modal Structure -->
    <div id="modal1" class="modal " style="padding:0px; min-height: 600px;">
      <div class="modal-content">
        <div class="container">
           <h2 class="header center-align">Register</h2>

            <!-- Form for Register -->
            <form action="validate.php" method="POST">
               <img class="responsive-img" src="assets/img/client_user.png">
               <h5>Name:</h5>
              <div class="row">
                 <div class="input-field col s6">
                  <input name="first_name" type="text" class="validate" required>
                  <label for="first_name">First Name</label>
                </div>

                <div class="input-field col s6">
                  <input name="last_name" type="text" class="validate" required>
                  <label for="last_name">Last Name</label>
                </div>
              </div>
  
              <h5>Log Information:</h5>
              <div class="row">
                
                <div class="input-field col s6">
                  <input name="username" type="text" class="validate" required>
                  <label>Username</label>
                </div>


                <div class="input-field col s6">
                  <input name="password" type="password" class="validate" required>
                  <label >Password</label>
                </div>
              </div>
              
              <h5>Mail: </h5>
              <div class="row">
                <div class="input-field col s5">
                  <input id="email" type="email" name="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>

              <h5>Gender:</h5>
              <div class="row">
                <div class="col s4">
                  <input name="gender" type="radio" value="Male">
                  <label for="Male">Male</label>
                </div>

                <div class="col s4">
                  <input name="gender" type="radio" value="Female">
                  <label for="Female">Female</label>
                </div>
              </div>
              <button class="btn waves-effect  teal lighten-2" type="submit" name="action">REGISTER</button>
           
            </form>
        </div>         
      </div>
    </div>

</body>

 <script type="text/javascript"> 
    $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    }
    );
  </script>
</html>

