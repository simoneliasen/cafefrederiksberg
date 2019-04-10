<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Admin-dashboard</title>

  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">

</head>

<body>

  <!--Lav check for om du er logget ind  -->
<?php
include('../session.php');


?>

  <!--Lav Mulighed for at tilføje brugere  -->
  <!--Lav mulighed for at slette brugere  -->

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="about.asp">Google analytics</a></li>
    <li><a href="default.asp">Forside</a></li>
    <li><a href="news.asp">Restaurant</a></li>
    <li><a href="contact.asp">Bar</a></li>
    <li><a href="about.asp">Events</a></li>
    <li><a href="about.asp">Selskaber</a></li>
    <li><a href="about.asp">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Admin-panel <span style="font-weight: 400;">Café Frederiksberg</span></h1>
      <div class="logout">
        <a class="button2 button_logout" href="../logout.php">log ud</a>
      </div>
    </div>






  </div>
</div>

</body>

</html>
