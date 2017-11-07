<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>E-health</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materialize/css/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>



<body>
	 <?php include("navbar_out.php"); ?>
  
  <!-- Slider --> 

  <div><label style="color: red;text-align: center;"></label></div>        
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="assets/img/pexels-photo-461428.jpeg"> 
        <div class="caption center-align">
          <h3>Welcome to Premium E-Health</h3>
          <h5 class="light grey-text text-lighten-3">We always keep you healthy</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/pexels-photo-204686.jpeg"> 
        <div class="caption left-align">
          <h3>Align you with fruits for healthy living </h3>
          <h5 class="light grey-text text-lighten-3">A balanced Diet</h5>
        </div>
      </li>

      <li>
        <img src="assets/img/pexels-photo-127873.jpeg">
        <div class="caption right-align">
          <h3>We would never keep you waiting</h3>
          <h5 class="light grey-text text-lighten-3">You are our patient</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/diabetes-blood-sugar-diabetic-medicine-46173.jpeg"> 
        <div class="caption center-align">
          <h3>Health check in sync</h3>
          <h5 class="light grey-text text-lighten-3">Also update you with your health results.</h5>
        </div>
      </li>
    </ul>
  </div> 

<!-- Content grid-->
<div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>About Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>

          <div class="center-align">
         <div class="row">
        <div class="col s6 offset-s3"  >
          <div  class="center-align" class="card" >
            <div class="card-content" class="center-align">
              <div class="video-container" >
        <iframe padding="20px" width="70" height="40" src="'Imagine...'.mp4" frameborder="0" allowfullscreen ></iframe>
      </div>
              
              <span class="card-title">Health for Everyone</span>
            </div>  
            <div class="card-content">
              <p>Global Health Care For everyone everywhere in the Globe</p>
            </div>
            <div class="card-action">
              <a href="#"><!--link--></a>
            </div>
          </div>
        </div>
      </div>
       </div>     
   
          
   <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">What more can you ask for ?</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/img/pexels-photo-247685.png" style="height: 1000px" alt="Unsplashed background img 3"></div>
  </div>    

  <!-- footer -->          
    <?php include("footer.html"); ?>   

<!-- Modal Trigger -->
 

  <script src="materialize/code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="materialize/dist/js/materialize.js"></script>
  <script src="materialize/js/init.js"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
    $('ul.tabs').tabs();
  });

  $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });
          
  </script>
  
  <script type="text/javascript">
   $(document).ready(function()
   {
      $('.slider').slider();
    });
        // Pause slider
  $('.slider').slider('pause');
  // Start slider
  $('.slider').slider('start');
  // Next slide
  $('.slider').slider('next');
  // Previous slide
  $('.slider').slider('prev');
  $('.slider'){height=600;};
  
</script>
 

  <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
 
</body>
</html>

        