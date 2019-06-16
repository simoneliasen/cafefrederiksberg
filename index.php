<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Café Frederiksberg har eksisteret siden år 1900, og er det ældste værtshus på samme beliggenhed i Aalborg. Vi byder dog også velkommen i vores restaurant, til selskaber eller til vores events!"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>
<body>

<!-- Mobil navigation -->
  <div class="container">
  <div class="mobilenav">
    <span onclick="openNav()"><img src="./img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
      <a href="./index.php">
        <img src="./img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
      </a>
  </div>
  </div>

  <?php // Tilføjer mulighed for announcementbar
  include 'includes/announcement.php'; ?>

<!--Sidebar mobil  -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="./index.php" class="active">Forside</a>
    <a href="./pages/restaurant.php">Menukort</a>
    <a href="./pages/bar.php">Barkort</a>
    <a href="./pages/events.php">Events</a>
    <a href="./pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
    <a href="./pages/selskaber/buffet.php" id="dropdown">Buffet</a>
    <a href="./pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
    <a href="./pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
    <a href="./pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
    <a href="./pages/kontakt.php" id="dropdown">Kontakt</a>
  </div>
  <script>
  // Viser sidebar ved click på hamburgermenu
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0px";
  }
  </script>

<!--Desktop navigation -->
  <div class="navigationbar">
    <nav class="container">
      <div class="logo">
        <a href="./index.php"><img src="./img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
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
            <a href="./pages/kontakt.php">Kontakt</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <script>
  // Sort baggrund onscroll
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
  include 'includes/header.php';
  // Opretter forbindelse til databasen
   include 'admin/config.php';?>

  <div class="bg_dark intro_historie">
    <div class="container">
      <div class="row">

        <!--Café frederiksberg kort historie  -->
        <div class="six columns">
          <h2>Café Frederiksberg</h2>
          <h6>Siden år 1900</h6>
          <p>Café Frederiksberg har budt gæster velkommen siden 1900, og er dermed Aalborgs ældste værtshus på samme beliggenhed – men også Aalborgs største værtshus. Nu om dage er det navnet FREDE, som gæsterne ynder at bruge. Derfor har Café Frederiksbergs musikmagasin også fået navnet FREDE LIVE.</p>
          <a class="button" href="pages/tidslinje.php">Læs hele historien <u>her</u></a>
        </div>
        <!--Billede af butiksfront  -->
        <div class="six columns butikfront">
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <!--Restaurant genvej  -->
      <div class="three columns indholdsoversigt">
        <a href="pages/restaurant.php">
          <img src="img/inholdsoversigtrestaurant.png" alt="Genvej til restaurant indhold">
          <h5>Restaurant</h5>
          <p>Se vores menukort og bestil take away</p>
        </a>
      </div>
      <!--Bar genvej  -->
      <div class="three columns indholdsoversigt">
        <a href="pages/bar.php">
          <img src="img/inholdsoversigtbar.png"  alt="Genvej til bar indhold">
          <h5>Bar</h5>
          <p>Se vores store barkort med Aalborgs største Gin udvalg</p>
        </a>
      </div>
      <!--Events genvej  -->
      <div class="three columns indholdsoversigt">
        <a href="pages/events.php">
          <img src="img/inholdsoversigtevents.png"  alt="Genvej til events indhold">
          <h5>Events</h5>
          <p>Se vores mange live events på Klub Frede</p>
        </a>
      </div>
      <!--Selskaber genvej  -->
      <div class="three columns indholdsoversigt">
        <a href="pages/selskaber.php">
          <img src="img/inholdsoversigtselskaber.png"  alt="Genvej til selskaber indhold">
          <h5>Selskaber</h5>
          <p>Se vores mange muligheder for selskaber</p>
        </a>
      </div>

    </div>
  </div>

  <?php //Henter data fra katalog tabel
  $query ="SELECT * FROM katalog";
  $results = mysqli_query($db, $query);
  if (!$results) {
      die("could not query the database" .mysqli_error());
  }
  $row = mysqli_fetch_row($results);
  ?>

  <div class="bg_dark">
    <div class="container">
      <div class="row">

        <!--Frede live katalog-billede  -->
        <div class="one-half column frede_live_katalog">
          <div class="frede_live_katalog_img_container">
            <a rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[2]; ?>" target="_blank">
              <div class="frede_live_katalog_img" style="background-image: url('img/<?= $row[1]; ?>');"></div>
            </a>
          </div>
        </div>

        <!--Katalog overskrift + underoverskrift + tekst + link   -->
        <div class="one-half column frede_live_katalog_text">
          <div class="frede_live_katalog_text_container">
            <h2><?php echo $row[3]; ?></h2>
            <h6><?php echo $row[4]; ?></h6>
            <p><?php echo $row[5]; ?></p>
            <a class="button" rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[2]; ?>" target="_blank">Se vores Magasin <u>her</u></a>
            <a style="border: 1px solid #CCB380; border-bottom: 3px solid #CCB380" class="button" rel="noopener" aria-label="Se Frede live katalog" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Bestil billetter</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php //lukker forbindelse til database
  mysqli_close($db);
  ?>

  <!--Events -->
  <div class="container">
    <div class="events_overskrift">
        <!--Frede live logo  -->
      <div class="events_overskrift_leftalign">
        <img src="./img/fredelivelogo.svg" id="eventlogo" width="60rem" height="auto" alt="Frede live logo til events">
      </div>
      <!--Frede live - kommende events overskrift  -->
      <div class="events_overskrift_rightalign">
        <h2>Frede Live</h2>
        <h6>Kommende Events</h6>
      </div>
    </div>
    <!--Facebook widget som viser events  -->
    <div id="event_oversigt" class='sk-fb-event' data-embed-id='23826'></div>
    <script src='https://www.sociablekit.com/app/embed/facebook-events/widget.js'></script>
  </div>
  <!--Knap til alle events  -->
  <div class="row alleeventsforside">
    <a class="button" href="pages/events.php#event_oversigt">Se alle kommende events <u>her</u></a>
  </div>

  <!--Google maps  -->
  <div class="mapouter">
    <div class="gmap_canvas">
      <iframe width="100%" height="100%" id="gmap_canvas" title="google maps location" src="https://maps.google.com/maps?q=Caf%C3%A9%20Frederiksberg%20Aalborg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
  </div>

  <?php //Inkludere footer
  include 'includes/footer.php'; ?>

</body>
</html>
