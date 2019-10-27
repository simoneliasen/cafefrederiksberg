<?php
   // Starter en session
   session_start();
// Finder og går ind i database
   include('config.php');
// Checker om brugeren er logget ind
   $user_check = $_SESSION['login_user'];
// Ser om indtastede login stemmer overens med brugernavn/password i database
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
// Konventere data til array
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
//  Hvis brugeren ikke er logget ind, så redirect til login.php
   if(!isset($_SESSION['login_user'])){
      header("location:../login.php");
      die();
   }
?>
