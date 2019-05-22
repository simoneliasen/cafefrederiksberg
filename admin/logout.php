<?php session_start();
// Ødelægger den nuværende session og redirecter til login.php
   if(session_destroy()) {
      header("Location: login.php");
   }
?>
