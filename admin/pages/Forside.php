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

    <?php  include('../session.php'); ?>

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
  <form method="post" name="post" action="php_process/process_announcement_edit.php" enctype="multipart/form-data"  id="announcementform">
    <input class="text_input" type="text" name="announcement">
    </br><br>
    <input type="radio" name="expiration" id="noexpiration" value="male" onclick="myFunction()" >Ingen udløbsdato<br>
    <input type="radio" name="expiration" id="expiration" value="male" onclick="myFunction()" >Vælg udløbsdato
    <br><br>
    <input type="date"  style="display:none" id="date" type="date" placeholder="_" name="date" value="<?php echo date('Y-m-d'); ?>" />
    <br><br>
    <a class="button red" type="reset" href="#">Annuller</a>
    <input class="button green" type="submit" value="Gem">
  </form>
</div>

<!-- Gemmer dato pr. default, viser dato, når der trykks "vælg udløbsdato" -->
    <script>
    function myFunction() {
      var checkBox = document.getElementById("expiration");
      var text = document.getElementById("date");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
      if (checkBox.checked == false){
        text.style.display = "none";
      }
    }
    </script>

    <hr>

    <div class="task_wrapper">
      <h1 class="task_heading">Præsentationsvideo / Billeder</h1>
      <p>Vælg om der skal gøres brug af video eller billeder</p>
      <input type="radio" name="gender" value="male" checked>Video
      <br>
      <input type="radio" name="gender" value="male">Billeder
      <p>Nuværende video: <!-- INDSÆT VIDEO-NAVN --> </p>
      <p>Upload ny</p>
        <form method="post" name="post" action="php_process/process_header_upload.php" enctype="multipart/form-data">
          <input type="file" name="fileToUpload" id="fileToUpload" onchange="preview_image(event)" width='150px' height='150px'>
        <br><br>
        <a class="button red">Annuller</a>
        <input class="button green" type="submit" value="Upload">
      </form>
    </div>

    <hr>

    <div class="task_wrapper">
      <h1 class="task_heading">Katalog & Katalog tekst</h1>
      <p>Opdater et, eller flere felter</p>
      <form method="post" name="post" action="php_process/process_katalog_edit.php" enctype="multipart/form-data"  id="katalogform">

        <p><b>Link</b></p>
      <input class="text_input" type="text" name="link">

        <p><b>Overskrift </b></p>
      <input class="text_input" type="text" name="header">

        <p><b>Underoverskrift</b></p>
      <input class="text_input" type="text" name="subheader">

        <p><b>Tekst</b></p>
      <textarea class="text_input" id="katalogtext" type="text" cols="10" rows="6" name="text"></textarea>
      <br><br>

      <input class="button green" type="submit" value="Gem">
        </form>

    </div>

    <hr>
    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
