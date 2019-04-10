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
// Inkludere database, så input kan sammenlignes med database
include('config.php');
// Starter en Session (Kontrollere om brugeren er brugeren (skal jeg lige have dobbeltcheckeet))
session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST") {

// Sanitizer input fra 'username' og 'password' så vi ikke får MySql injections
$myusername = mysqli_real_escape_string($db,$_POST['username']);
$mypassword = mysqli_real_escape_string($db,$_POST['password']);

// Tager ID fra ADMIN hvor 'username' i input indsættes som username i form (tilsvarende for password)
$sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
// Tager data fra input og tjekker det imod databasene
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      // $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         $myusername = $_SESSION['myusername'];
         // session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         // Hvis overstående var succesfuldt går den til adminpanel.php
         header("location: pages/adminpanel.php"); // Hvis overstående var succesfuldt går den til adminpanel.php
      }else {
        // Hvis ikke succesfuld, viser den error-message
         $error = "Dit indtastede brugernavn eller kodeord er forkert";
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

        <!--Husk mig på denne computer (ingen funktionalitet her endnu) -->
        <div class="huskmig">
          <input type="checkbox" checked="checked" name="remember"> Husk mig på denne computer
        </div>

<!--Viser error-code hvis brugernavn eller kodeord er forkert  -->
    <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
    </div>

    </form>
  </div>

  </div>

</body>

</html>
