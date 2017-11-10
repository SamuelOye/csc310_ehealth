<?php
   session_start();
   unset($_SESSION["login_user"]);
  
   header('Refresh: 2; URL = index.php');
?>