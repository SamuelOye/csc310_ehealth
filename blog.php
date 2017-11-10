<?php include("session.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  	<meta name="viewport" content="width=device-width, initial-scale=1"/>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="materialize/css/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<?php if(!isset($_SESSION['login_user'])){
      include("navbar_out.php");
   }
   		else
   			{include("navbar_in.php");}
    ?>
	<div class="center-align container">
		<h1>Blog is Coming Soon!</h1>
	</div>
</body>
</html>