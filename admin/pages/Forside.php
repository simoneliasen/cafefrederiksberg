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
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|s)no-js(s|$)/,"$1js$2")})(document,window,0);</script>

</head>

<body>

  <?php
  //Opretter forbindelse via config.php, og tjekker om du er logget ind via session.php
  include('../session.php');
  ?>

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="analytics.php">Google analytics</a></li>
    <li><a href="forside.php" class="active">Forside</a></li>
    <li><a href="restaurant.php">Restaurant</a></li>
    <li><a href="bar.php">Bar</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="selskaber.php">Selskaber</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Forside<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button red" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">
      <h1 class="task_heading">Announcement bar</h1>
      <p>Opdater announcement baren med vigtige meddelelser eller gode tilbud.</p>
      <br>
      <input class="text_input" type="text"></input>
      <br><br>
      <input type="radio" value="male">Ingen udløbsdato<br>
      <input type="radio" value="male">Vælg udløbsdato
      <br><br>
      <input class="date_input" type="date" placeholder="_">
      <br><br>
      <a class="button red" href="#">Annuller</a>
      <a class="button green" href="#">Gem</a>
    </div>

    <hr>

    <div class="task_wrapper">
      <h1 class="task_heading">Præsentationsvideo / Billeder</h1>
      <p>Vælg om der skal gøres brug af video eller billeder</p>
      <input type="radio" name="gender" value="male" checked>Video
      <br>
      <input type="radio" name="gender" value="male">Billeder
      <!-- INDHOLD SKAL SELVFØLGELIG ÆNDRE SIG ALT EFTER OM DET ER VIDEO ELLER BILLEDER -->
      <p>Nuværende video: <!-- INDSÆT VIDEO-NAVN --> </p>
      <p>Upload ny</p>
      <input type="file" name="file" id="file" class="inputfile" />
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green" href="#">Gem</a>
    </div>

    <hr>

    <div class="task_wrapper">
      <h1 class="task_heading">Katalog & Katalog tekst</h1>
      <p>Opdatering af event-magasinet</p>
      <p><b>Rediger link</b></p><input class="text_input" type="text"></input>
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green">Gem</a>

      <br><br><br>
      <p><b>Rediger den tilhørende tekst</b></p>
      <textarea></textarea>
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green">Gem</a>




    </div>
    <hr>
    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
