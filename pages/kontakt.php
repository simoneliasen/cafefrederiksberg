<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Kontakt os via telefon eller mail, vi er altid klar til at tage imod bestilling eller andre henvendelser, vi glæder os til at høre fra dig!"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Mobil navigation -->
    <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="./../img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="./index.php">
          <img src="./../img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
        </a>
    </div>
    </div>

    <?php // Tilføjer mulighed for announcementbar
    include '../includes/announcement.php'; ?>

  <!--Sidebar mobil  -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="./index.php">Forside</a>
      <a href="./pages/restaurant.php">Menukort</a>
      <a href="./pages/bar.php">Barkort</a>
      <a href="./pages/events.php">Events</a>
      <a href="./pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="./pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="./pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="./pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/kontakt.php" class="active" id="dropdown">Kontakt</a>
    </div>
  <script>
  // vis sidebar ved tryk på hamburger menu
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0px";
  }
  </script>

  <!--Desktop navigation  -->
    <div class="navigationbar">
      <nav class="container">
      <div class="logo">
        <a href="./index.php"><img src="./../img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>
        <div class="navigationmenu">
        <a href="./pages/restaurant.php">Menukort</a>
        <a href="./pages/bar.php">Barkort</a>
        <a href="./pages/events.php">Events</a>
          <div class="dropdown">
            <a href="./pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="./pages/selskaber/buffet.php">Buffet</a>
            <a href="./pages/selskaber/arrangementer.php">Arrangementer</a>
            <a href="./pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="./pages/tidslinje.php">Om os<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="./pages/kontakt.php" class="active">Kontakt</a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <script>
    // Tilføjer sort baggrund onscroll
    var $nav = $('.navigationbar');
    $(document).scroll(function() {
        $nav.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
    });
    // Sort baggrund til dropdown items
    var $dropdown = $('.dropdown-content');
    $(document).scroll(function() {
        $dropdown.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
    });
    </script>

<?php
  // Indsætter video/billede slider
  include '../includes/header.php';
  // Opretter forbindelse til database
  include '../admin/config.php';
?>

<div class="bg_dark">
  <div class="container opening_info">
    <br>
    <div class="container traeffetidspunkt">
      <p style="text-align: center; font-size: 18px; margin-bottom: 3rem;"><i>Vi træffes bedst på telefon kl. <strong>10.00-11.30</strong>, kl. <strong>14.30-16.30</strong> samt efter kl. <strong>20.30</strong></i></p>
    </div>

    <div class="row opening_information">
      <div class="six columns">
        <h2 class="opening_headline">Åbningstider</h2>
        <!--Vis første 7 entries i sql-table (ugedages åbningstider)  -->
        <?php
          $query ="SELECT * FROM aabningstider ORDER BY id ASC LIMIT 8;";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <div class="opening_time_day">
            <div class="opening_day"><?= $row[1] ?></div>
            <div class="opening_time"><?= $row[2] ?></div>
          </div>
        <?php endwhile;?>
      </div>

      <div class="six columns">
        <h2 class="opening_headline">Kontakt</h2>

        <div class="opening_day">Adresse</div>
        <div class="opening_time">Hadsundvej 1B</div>

        <div class="opening_day">By</div>
        <div class="opening_time">Aalborg</div>

        <div class="opening_day">Telefon</div>
        <div class="opening_time">(+45) 98 12 03 83</div>

        <div class="opening_day">E-mail</div>
        <div class="opening_time">cafefrederiksberg@gmail.com</div>

        <h2 class="opening_headline">Vedrørende fest</h2>

        <div class="opening_day">Telefon</div>
        <div class="opening_time">(+45) 22 42 43 00</div>

        <div class="opening_day">E-mail</div>
        <div class="opening_time">Frederiksbergselskaber@gmail.com</div>
      </div>
    </div>
  </div>


  <br><br><br>
  <div class="container socialemedier">
    <h2> Følg os på Sociale medier </h2>
    <p><i>Hvis du vil have de seneste nyheder, leveret lige til mobilen. Så vær sikker på at du følger os på Facebook og Instagram</i></p>

    <div class="row">
      <div class="one-half column facebook">
        <h5>Facebook</h5>
        <a href="https://www.facebook.com/Fredelive/"><img src="./img/facebook.png"></a>
      </div>
      <div class="one-half column instagram">
        <h5>Instagram</h5>
        <a href="https://www.instagram.com/cafefrederiksberg/"><img src="./img/instagram.png"></a>
      </div>
    </div>
  </div>
  <br>
</div>

<!--Google maps  -->
<div class="mapouter">
  <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" title="google maps location" src="https://maps.google.com/maps?q=Caf%C3%A9%20Frederiksberg%20Aalborg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
    marginwidth="0"></iframe><a href="https://www.emojilib.com"></a>
  </div>
</div>

</body>
</html>
