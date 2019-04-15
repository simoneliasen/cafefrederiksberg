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

  <!--Lav check for om du er registreret som admin (eller moderator)  -->

  <!--Lav Mulighed for at tilføje brugere  -->
  <!--Lav mulighed for at slette brugere  -->

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
        <a class="button2 button_logout" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">
      <h1 class="task_heading">Præsentationsvideo / Billeder</h1>
      <p>Vælg om der skal gøres brug af video eller billeder</p>
      <input type="radio" name="gender" value="male" checked>Video
      <input type="radio" name="gender" value="male">Billeder
      <!-- INDHOLD SKAL SELVFØLGELIG ÆNDRE SIG ALT EFTER OM DET ER VIDEO ELLER BILLEDER -->
      <p>Nuværende video: <!-- INDSÆT VIDEO-NAVN --> </p><img src="noget">
      <p>Upload ny</p>
      <button>Vælg Video</button>
      <a class="button" href="#">Upload</a>
    </div>
    <hr>
    <div class="task_wrapper">
      <h1 class="task_heading">Katalog & Katalog tekst</h1>
      <p>Opdater event-magasinet</p>
      <p>Rediger link</p><input type="text"></input>
      <br><br>
      <button>submit</button>
      <a class="button2">Annuller</a>
      <br><br><br>
      <p>Rediger den tilhørende tekst</p>
      <textarea rows="10" cols="50"></textarea>
      <br><br>
      <button>submit</button>
      <a class="button2">Annuller</a>


    </div>
    <hr>
    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
