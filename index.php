<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Café Frederiksberg har eksisteret siden år 1900, og er det ældste værtshus på samme beliggenhed i Aalborg. Vi byder dog også velkommen i vores restaurant, til selskaber eller til vores events!"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>

  <!--Stylesheets  -->
  <link rel="stylesheet" type="text/css" href="css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include 'includes/announcement.php'; ?>

<!--Navigations-bar  -->
  <!--Henter Jquery Script via CDN  -->
  <script
    src="https://code.jquery.com/jquery-1.12.4.js"
    integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
    crossorigin="anonymous"></script>
  <!--main navigationsbar  -->
  <div class="navigationbar">
  <!--Container der centrere content i navigationsmenu  -->
    <nav class="container">
  <!--Logo  -->
  <div class="logo">
    <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
  </div>
  <!-- Menu  -->
  <div class="navigationmenu">
  <a href="/cafefrederiksberg/pages/restaurant.php">Restaurant Menu</a>
  <a href="/cafefrederiksberg/pages/bar.php">Bar</a>
  <a href="/cafefrederiksberg/pages/events.php">Events</a>
  <!--Selskaber dropdown  -->
  <div class="dropdown">
    <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber</a>
    <div class="dropdown-content">
    <a href="/cafefrederiksberg/pages/selskaber/buffet.php">Buffet</a>
    <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php">Arrangementer</a>
    <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
    </div>
  </div>
  <!--Om os dropdown  -->
  <div class="dropdown">
    <a href="/cafefrederiksberg/pages/tidslinje.php">Om os</a>
    <div class="dropdown-content">
    <a href="/cafefrederiksberg/pages/kontakt.php">Kontakt</a>
    </div>
  </div>
  </div>
  </nav>
  </div>
  <!-- Jquery Script that changes the color of the header on scroll (+opacity)  -->
  <script>
  var $nav = $('.navigationbar');
  $(document).scroll(function() {
      $nav.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
  });
  // Does the same as above, just for The dropdown menu
  var $dropdown = $('.dropdown-content');
  $(document).scroll(function() {
      $dropdown.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
  });
  </script>

  <!--Videoslider -->
  <?php include 'includes/header.php'; ?>

  <!--Connects to database  -->
  <?php include 'admin/config.php';?>


  <!--Online bestilling  -->

  <div class="container">
    <div class="bestil_online">
      <h2 class="bestil_online_overskrift">Bestil Online</h2>

      <div class="bestil_online_knapper">
        <a class="button" href="https://cafefrederiksberg.azurewebsites.net/">Bord</a>
        <a class="button" href="https://cafefrederiksberg.azurewebsites.net/">Billetter</a>
        <a class="button" href="https://cafefrederiksberg.azurewebsites.net/">Take Away</a>
      </div>

    </div>
  </div>


  <!-- introHistorie -->
  <div class="wrapper introHistorie">
    <!--Indhold centreret i wrapper-->
    <div class="container introHistorie">

      <!--Intro-tekst  -->
      <div class="six columns introHistorie">
        <h2 id="introhistoriecaféfrederiksbergheading"> Café Frederiksberg </h2>
        <h4 id="introhistoriecaféfrederiksbergsubheading"> Siden år 1900</h4>
        <p id="introhistoriecaféfrederiksbergtext">
Café Frederiksberg har budt gæster velkommen siden 1900. Café Frederiksberg har eksisteret siden 1900, og er dermed Aalborgs ældste værtshus på samme beliggenhed – men også Aalborgs største værtshus. Et værtshus der fra første åbningsdag for 119 år siden, og har kun haft 3 forskellige ejere gange gennem alle årene. Kært barn har mange navne, og Café Frederiksberg blev før i tiden kaldt for “Bergen” eller “Berg” – nu om dage er det mest navnet “Frede” som gæsterne ynder at burge, og derfor har Café Frederiksbergs musikmagasin også fået navnet FREDE LIVE.
        </p>
        <!--se Café frederiksbergs tidlinje knap  -->
        <a class="button introhistorie" href="pages/tidslinje.php">Se hele Café Frederikbergs historie <u>her</u></a>
      </div>
      <!--Billede af butiksfront  -->
      <div class="six columns">
        <img src="img/Butikfront.png" alt="billede af butikfront" id="butikfront">
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="three columns indholdsoversigt">
        <a href="pages/restaurant.php">
          <img src="img/inholdsoversigtrestaurant.png" width="175px" height="auto" alt="Genvej til restaurant indhold">
          <h5>Restaurant</h5>
          <p>Se vores menukort og bestil take-away</p>
        </a>
      </div>

      <div class="three columns indholdsoversigt">
        <a href="pages/bar.php">
          <img src="img/inholdsoversigtbar.png" width="175px" height="auto" alt="Genvej til bar indhold">
          <h5>Bar</h5>
          <p>Se vores store bar-kort med Aalborgs største Gin udvalg</p>
        </a>
      </div>

      <div class="three columns indholdsoversigt">
        <a href="pages/events.php">
          <img src="img/inholdsoversigtevents.png" width="175px" height="auto" alt="Genvej til events indhold">
          <h5>Events</h5>
          <p>Se vores mange live-events på Klub Frede</p>
        </a>
      </div>

      <div class="three columns indholdsoversigt">
        <a href="pages/selskaber.php">
          <img src="img/inholdsoversigtselskaber.png" width="175px" height="auto" alt="Genvej til selskaber indhold">
          <h5>Selskaber</h5>
          <p>Se vores mange muligheder for selskaber</p>
        </a>
      </div>

    </div>
  </div>

  <?php
  $query ="SELECT * FROM katalog";
  $results = mysqli_query($db,$query);
  if(!$results){
    die("could not query the database" .mysqli_error());
  }
  $row = mysqli_fetch_row($results);
?>
  <!-- Katalog  -->
  <div class="bg_dark">
    <div class="container">
      <div class="row">
        <div class="one-half column frede_live_katalog">
          <a rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[1]; ?>" target="_blank">
            <div class="frede_live_katalog_img">
            </div>
          </a>
        </div>
        <div class="one-half column frede_live_katalog_text">
          <div class="frede_live_katalog_text_container">
            <h2><?php echo $row[2]; ?></h2>
            <h6><?php echo $row[3]; ?></h6>
            <p><?php echo $row[4]; ?></p>
            <a class="button" rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[1]; ?>" target="_blank">Se vores Magasin <u>her</u></a>
            <a style="color: #CCB380;" class="button" rel="noopener" aria-label="Se Frede live katalog" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Bestil biletter</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  mysqli_close($db);
  ?>

  <!--Events: Facebook implementering  -->
  <div class="container">
    <div class="events_overskrift">
<!--Overskrift logo  -->
      <div class="events_overskrift_leftalign">
    <img src="/cafefrederiksberg/img/fredelivelogo.svg" id="eventlogo" width="60rem" height="auto" alt="Frede live logo til events">
    </div>
<!-- Overskrift tekst  -->
      <div class="events_overskrift_rightalign">
      <h2>Frede Live</h2>
      <h6>Kommende Events</h6>
    </div>
<!--Facebook widget  -->
    </div>
    <div class='sk-fb-event' data-embed-id='23329'>
    </div><script src='https://www.sociablekit.com/app/embed/facebook-events/widget.js'></script>
  </div>


<!--Knap til alle events  -->
<div class="row alleeventsforside">
  <a class="button alleeventsforside" href="pages/events.php#event_oversigt">Se alle kommende events <u>her</u></a>
</div>

  <!--Google maps  -->
    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" title="google maps location" src="https://maps.google.com/maps?q=Caf%C3%A9%20Frederiksberg%20Aalborg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
          marginwidth="0"></iframe></div>
  </div>

  <!--Inddrager footer fra "includes/footer.php"-->
  <?php include 'includes/footer.php'; ?>


</body>

</html>
