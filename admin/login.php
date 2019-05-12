<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Side titel  -->
  <title>Admin</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Admin stylesheet  -->
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <!-- Inkludere Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>

<?php
// Opretter forbindelse til database
include('config.php');
session_start();

// Benytter POST-metoden, når formen sendes/submites
if($_SERVER["REQUEST_METHOD"] == "POST") {

// Omdanner input til variabler og fjerner "farlige karaktere", som kan bruges til SQL injections(ASCII, NUL\n, \r, \, ', ",)
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);

// Retrieves ID from table, where data corresponds,retrieves as number of corresponding rows
$sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);

// check result count, store session if there is only 1 result else throw error
if($count == 1) {
  $_SESSION['login_user'] = $myusername;
    header("location: pages/generelt.php");
 }else {
    $error = "Det indtastede brugernavn eller kodeord var forkert";
 }
}
 ?>

  <!-- Container til indhold på siden -->
  <div class="container loginpage">
    <!--Logo  -->
    <div class="logologin">
      <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="500rem" height="auto">
    </div>
    <!--Form  -->
    <div class="formcenter">
      <form action="" method="post">
        <div class="brugernavn">
          <label for="username"><b>Brugernavn</b></label>
          <input type="text" style="width:11rem; text-align: center;" placeholder="Indsæt Brugernavn" name="username" required>
        </div>
        <div class="kodeord">
          <label for="password"><b>Kodeord</b></label>
          <input type="password" style="width:11rem; text-align: center;" placeholder="Indsæt Kodeord" name="password" required>
        </div>
        <br>
        <button><a href="/cafefrederiksberg/index.php" style="text-decoration:none;">Tilbage</a></button>
        <button type="submit" id="loginknap"  style="color:#CCB380; border-color:#CCB380; margin-left: 1rem;">Login</button>
<!--Viser error-code hvis brugernavn eller kodeord er forkert  -->
    <div style = "font-size:16px; color:#cc0000; margin-top:16px"><?php echo isset($error) ? $error: ''; ?></div>
    </div>
    </form>
  </div>
  </div>
</body>
</html>
