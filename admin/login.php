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
// includes config.php and checks if user is logged in
include('config.php');
session_start();

// Processes form data when form is submitted via POST-method
if($_SERVER["REQUEST_METHOD"] == "POST") {

// Sets input to variable and escapes charachters (as ASCII, NUL\n, \r, \, ', ",)
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);

// Retrieves ID from table, where data corresponds,retrieves as number of corresponding rows
$sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
$result = mysqli_query($db,$sql);
$count = mysqli_num_rows($result);

// check result count, store session if there is only 1 result else throw error
if($count == 1) {
  $_SESSION['login_user'] = $myusername;
    header("location: pages/adminpanel.php");
 }else {
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

    <!--Form  -->
    <div class="formcenter">
      <form action="" method="post">
        <div class="brugernavn">
          <label for="username"><b>Brugernavn</b></label>
          <input type="text" placeholder="Indsæt Brugernavn" name="username" required>
        </div>
        <div class="kodeord">
          <label for="password"><b>Kodeord</b></label>
          <input type="password" placeholder="Indsæt Kodeord" name="password" required>
        </div>
        <button type="submit" id="loginknap">Login</button>

<!--Viser error-code hvis brugernavn eller kodeord er forkert  -->
    <div style = "font-size:16px; color:#cc0000; margin-top:16px"><?php echo isset($error) ? $error: ''; ?></div>

    </div>

    </form>
  </div>

  </div>

</body>

</html>
