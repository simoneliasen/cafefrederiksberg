<?php
   session_start();

   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'Du er nu logget ud, du vil blive sendt tilbage til forsiden';
   header('Refresh: 2; URL = login.php');
?>