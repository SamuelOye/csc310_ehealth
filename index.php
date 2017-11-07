<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"/> -->
  <title>E-health</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materialize/css/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>



<body>
    
  <div class="slider fullscreen">
      <ul class="slides">
        <li>
          <img src="assets/img/pexels-photo-461428.jpeg"> <!-- random image -->
          <div class="caption center-align">
            <h3 class="center">Welcome to Premium E-Health</h3>
            <h5 class="light grey-text text-lighten-3">We always keep you healthy</h5>      
          </div>
        </li>
        <li>
          <img src="assets/img/diabetes-blood-sugar-diabetic-medicine-46173.jpeg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Read Healthy</h3>
            <h5 class="dark grey-text text-lighten-3">Check out our Blog</h5>
          </div>
        </li>
        <li>
          <img src="assets/img/pexels-photo-127873.jpeg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Need A Doctor</h3>
            <h5 class="light grey-text text-lighten-3">Make appointments with Doctors from world class hospitals</h5>
          </div>
        </li>
        <li>
          <img src="assets/img/pexels-photo-247685.png"> <!-- random image -->
          <div class="caption center-align">
            <h3>Want to know more</h3>
            <h5 class="light grey-text text-lighten-3">Read About us</h5>
          </div>
        </li>
      </ul>
    </div>

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

        