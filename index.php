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
  <?php include 'includes/announcement.php'; ?>
  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include 'includes/navigation.php'; ?>

  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include 'includes/header.php'; ?>

  <!--Online bestilling  -->
  <div class="wrapper onlineBestilling">
    <div class="container onlineBestilling">
      <div class="row onlineBestilling">
        <!-- Bestil online tekst  -->
        <div class="six columns bestilonline">
          <div class="Bestil_onlineindex">
            <h2 id="bestilonlineheader">Bestil Online</h2>
          </div>
        </div>
        <div class="six columns bestilonline knapper">
            <!-- Bestil bord online knap  -->
          <a class="button button-primary bestil bord" href="pages/booking.php">Bord</a>
        <!-- Bestil Biletter online knap  -->
          <a class="button button-primary bestil biletter" href="pages/booking.php">Billetter</a>
        <!-- Bestil Take-away online knap  -->
          <a class="button button-primary bestil take-away" href="pages/booking.php">Take Away</a>
        </div>

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
        <p id="introhistoriecaféfrederiksbergtext"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis neque in nunc varius fringilla.
          Morbi bibendum nunc ut posuere tempor. Donec sit amet elementum purus. Maecenas eleifend nec dolor vitae condimentum.
          Proin vel mauris sagittis. Donec sit amet elementum purus.  ProinProinProin vel mauoin vel mauris Donec sit amet  Donec sit amet elementum purus. Maecenas eleifend nec dolor vitae condimentum.
          Proin vel mauris sagittis Donec sit amet elementum purus. Maecenas eleifendimentum.
          sit amet elementum purus. Maecenas eleifend nec dolor vitae condimentum.
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

  <!-- Wrapper til indholdsoversigt -->
  <div class="wrapper indholdsoversigt">
    <!--Indhold centreret i wrapper-->
    <div class="container indholdsoversigt">
      <!-- opretter række, som elementer let kan placeres i-->
      <div class="row indholdsoversigt">

        <!--Restaurant Genvej  -->
        <div class="three columns indholdsoversigt">
          <img src="img/inholdsoversigtrestaurant.png" alt="Genvej til restaurant indhold">
          <h2>Restaurant</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
        </div>
        <!--Bar Genvej  -->
        <div class="three columns indholdsoversigt">
          <img src="img/inholdsoversigtbar.png" alt="Genvej til bar indhold">
          <h2>Bar</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
        </div>
        <!--Events Genvej  -->
        <div class="three columns indholdsoversigt">
          <img src="img/inholdsoversigtevents.png" alt="Genvej til events indhold">
          <h2>Events</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
        </div>
        <!--Selskaber Genvej  -->
        <div class="three columns indholdsoversigt">
          <img src="img/inholdsoversigtselskaber.png" alt="Genvej til selskaber indhold">
          <h2>Selskaber</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt </p>
        </div>

      </div>
    </div>
  </div>



  <!-- Katalog (Kopi af Katalog under Events)  -->
  <div class="bg_dark">
    <div class="container">

      <div class="row">
        <!-- Billede af katalog  -->
        <div class="one-half column frede_live_katalog">
          <a rel="noopener" aria-label="Se Frede live katalog" href="https://publizr.com/citygraphic/fredelivemusikmagasin-nr10-2019web?html=true&fbclid=IwAR0FNrTprOacjXPfp2C0WAxVmpEGbFYg4KkYu3W5MllwcCIZcFgvHJA7ss8#/0/" target="_blank">
            <div class="frede_live_katalog_img">
            </div>
          </a>
        </div>
        <!--Tekst til katalog  -->
        <div class="one-half column frede_live_katalog_text">
          <!--Appetizer tekst til katalog  -->
          <div class="frede_live_katalog_text_container">
            <h2>Frede Live</h2>
            <h6>Livemusik og events</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <!-- Link til katalog  -->
          <a class="button" rel="noopener" aria-label="Se Frede live katalog" href="https://publizr.com/citygraphic/fredelivemusikmagasin-nr10-2019web?html=true&fbclid=IwAR0FNrTprOacjXPfp2C0WAxVmpEGbFYg4KkYu3W5MllwcCIZcFgvHJA7ss8#/0/" target="_blank">Se vores Magasin <u>her</u></a>
          </div>
        </div>

      </div>
    </div>
  </div>

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
    <div class='sk-fb-event' data-embed-id='22281'></div>
    <script src='https://www.sociablekit.com/app/embed/facebook-events/widget.js'></script>
  </div>


<!--Knap til alle events  -->
<div class="row alleeventsforside">
  <a class="button alleeventsforside" href="pages/events.php">Se alle kommende events <u>her</u></a>
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
