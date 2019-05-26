<?php //Opretter forbindelse via config.php, og tjekker om du er logget ind via session.php
include('../session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin-dashboard</title>
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
</head>
<body>

<!-- Logo  -->
<div class="logo">
  <img src="../../img/logo.svg" id="logo" width="100%">
</div>

<!--Navigationsbar  -->
<div class="nav">
  <ul>
    <li><a href="analytics.php" class="active">Google analytics</a></li>
    <li><a href="generelt.php">Generelt</a></li>
    <li><a href="restaurant.php">Menukort</a></li>
    <li><a href="bar.php">Barkort</a></li>
    <li><a href="selskabsmenu.php">Selskabsmenu</a></li>
    <li><a href="buffet.php">Buffet</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li id="backtopage"><a href="../backtopage.php" style="color: #CCB380;"> Tilbage til siden </a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Analytics<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button2 button_logout" href="../logout.php">log ud</a>
      </div>
    </div>

  </div>
  <div class="spacer" style="height:200px;"></div>
</div>
</div>

</body>
</html>
