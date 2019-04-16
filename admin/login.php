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
// Inkludere config.php der opretter forbindelse til MySql database
include('config.php');
// Starter en Session (checks if the user is already logged in)
session_start();

// Processes form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {

// Sætter input fra form til variabel ($mypassword(input) = password(database))
// Escapes characters that could make an SQL injections (as ASCII, NUL\n, \r, \, ', ",)
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);

// Retrieves ID from admin where username = $myusername(input) & password =$mypassword(input)
$sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
//retrieves data from database
$result = mysqli_query($db,$sql);
// Retrieves the number of rows with username and password
$count = mysqli_num_rows($result);

// if 1 row with both username and password exists, store session variable and go to adminpanel.php
if($count == 1) {
// Stores data in session variable
  $_SESSION['login_user'] = $myusername;
// Redirects user to adminpanel.php if logged in sucessfull
    header("location: pages/adminpanel.php");
 }else {
// Error code if wrong username/password
    $error = "Det indtastede brugernavn eller kodeord var forkert";
 }
}
 ?>

  <!--Tilbage til forsiden  -->
  <div class="loginbacktoindex">
    <a href="/cafefrederiksberg/index.php" id="backtofrontpage">
      <p>Tilbage til Forsiden </p>
    </a>
  </div>

  <!-- Container til indhold på siden -->
  <div class="container loginpage">

    <!--Logo  -->
    <div class="logologin">
      <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="500rem" height="auto">
    </div>

    <!--Centrere Form  -->
    <div class="formcenter">
      <!--Form  -->
      <form action="" method="post">

        <!--Brugernavn  -->
        <div class="brugernavn">
          <label for="username"><b>Brugernavn</b></label>
          <input type="text" placeholder="Indsæt Brugernavn" name="username" required>
        </div>

      <!-- Kodeord -->
        <div class="kodeord">
          <label for="password"><b>Kodeord</b></label>
          <input type="password" placeholder="Indsæt Kodeord" name="password" required>
        </div>

        <!--Login knap  -->
        <button type="submit" id="loginknap">Login</button>

<!--Viser error-code hvis brugernavn eller kodeord er forkert  -->
    <div style = "font-size:16px; color:#cc0000; margin-top:16px"><?php echo isset($error) ? $error: ''; ?></div>

    </div>

    </form>
  </div>

  </div>

</body>

</html>
