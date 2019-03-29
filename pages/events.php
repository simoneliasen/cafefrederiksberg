<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>

  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

</head>

<body>


<!--Indsætter navigationsbar fra filen includes/navigation.php-->
<?php include '../includes/navigation.php'; ?>

<!-- Indsætter slider  -->
<?php include '../includes/header.php'; ?>



<!--Eksempel m. 3-delt container og overskrift  -->
<div class="bg_dark">
  <div class="container">
    <div class="row">
      <div class="one-half column frede_live_katalog">

        <a href="#">
          <div class="frede_live_katalog_img">

          </div>
        </a>

      </div>

      <div class="one-half column frede_live_katalog_text">

        <div class="frede_live_katalog_text_container">
          <h2>Frede Live</h2>
          <h6>Livemusik og events</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="button" href="#">Se vores Magsin <u>her</u></a>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="events_overskrift">
    <h2>Frede Live</h2>
    <h6>Kommende Events</h6>
  </div>

  <div class="row">
    <div class="eight columns" style=" height: 200px;">
      <div class="kommende_events_date" style="width:20%; height:100%; position: relative; float: left;">
        Dato:
        <br>
        19 - 06 - 2019
      </div>
      <div class="kommende_events_info" style="width:80%; height:100%; float: right; position: relative;">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns" style="height: 200px;">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
    <hr>
  </div>

  <div class="row">
    <div class="eight columns" style=" height: 200px;">
      <div class="kommende_events_date" style="width:20%; height:100%; position: relative; float: left;">
        Dato:
        <br>
        19 - 06 - 2019
      </div>
      <div class="kommende_events_info" style="width:80%; height:100%; float: right; position: relative;">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns" style="height: 200px;">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
    <hr>
  </div>

  <div class="row">
    <div class="eight columns" style=" height: 200px;">
      <div class="kommende_events_date" style="width:20%; height:100%; position: relative; float: left;">
        Dato:
        <br>
        19 - 06 - 2019
      </div>
      <div class="kommende_events_info" style="width:80%; height:100%; float: right; position: relative;">
        <h3>Michael Jackson Live</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
        <a href="#">Læs mere</a>
      </div>
    </div>
    <div class="four columns" style="height: 200px;">
      <img src="../img/katalog.png" alt="Smiley face" height="100%" width="100%">
    </div>
  </div>
</div>

<div class="container">

</div>




<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>



</body>

</html>
