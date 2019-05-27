<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Café Frederiksberg sørger både for barnedåb, konfirmation, bryllup, kaffebord, Julefrokost og nytårsaften, altsammen i nogle af aalborgs hyggeligste lokaler"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>
<body>

  <!-- Mobil navigation  -->
    <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="./../../img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="./index.php">
          <img src="./../../img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
        </a>
    </div>
    </div>

    <?php // Tilføjer mulighed for announcementbar
    include '../../includes/announcement.php'; ?>

  <!--Sidebar mobil  -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="./index.php">Forside</a>
      <a href="./pages/restaurant.php">Menukort</a>
      <a href="./pages/bar.php">Barkort</a>
      <a href="./pages/events.php">Events</a>
      <a href="./pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="./pages/selskaber/arrangementer.php" class="active" id="dropdown">Arrangementer</a>
      <a href="./pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="./pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/kontakt.php" id="dropdown">Kontakt</a>
    </div>
  <script>
  // vis sidebar ved klik på hamburgermenu
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
        <a href="./index.php"><img src="./../../img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>
        <div class="navigationmenu">
        <a href="./pages/restaurant.php">Menukort</a>
        <a href="./pages/bar.php">Barkort</a>
        <a href="./pages/events.php">Events</a>
          <div class="dropdown">
            <a href="./pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="./pages/selskaber/buffet.php">Buffet</a>
            <a href="./pages/selskaber/arrangementer.php" class="active">Arrangementer</a>
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
    // Tilføj sort baggrund onscroll
    var $nav = $('.navigationbar');
    $(document).scroll(function() {
        $nav.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
    });
    // Tilføj sort baggrund til dropdown items
    var $dropdown = $('.dropdown-content');
    $(document).scroll(function() {
        $dropdown.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
    });
    </script>

  <!-- Indsætter video/billede slider-->
  <?php include '../../includes/header.php'; ?>

<div class="wrapper">
  <div class="bg_dark">
  <div class="container">
    <h2 class="arrheader">Arrangementer på Cafe Frederiksberg</h2>
    <p style="font-size: 20px">
Hos Café Frederiksberg tilbyder vi en lang række arrangementer. Ring til os, og så kan du få et skræddersyet tilbud. Nedenunder ses nogle af de mest almindelige arrangementer
    </p>
</div>
</div>
  <div class="container arrangementer">
    <div class="arrangementer_wrapper">
      <h2 style="margin-bottom: 1rem;"> Barnedåb </h2>
      <div class="row">

        <div class="one-half column">
          <img src="img/Barnedåb.jpg" width="400rem" height="auto">
        </div>

        <div class="one-half column">
          <p style="width: 500px;">
            Er I lige blevet mor og far, har I nok rigeligt at tænke på, og derfor kan I lade os stå for barnedåben, hvilket vi her hos Café Frederiksberg har stor erfaring med. Vi kan tilbyde dig en pakkeløsning, hvor du kun skal tænkte på at nyde festen.
          </p>
          <br>
          <h6>Ring på tlf: (+45) 22 42 43 00</h6>
            <h6>frederiksbergselskaber@gmail.com</h6>
        </div>

      </div>
    </div>
  </div>
</div>

<div class="bg_dark">
  <div class="container arrangementer">
    <div class="arrangementer_wrapper">
      <h2 style="margin-bottom: 1rem;"> Konfirmation </h2>
      <div class="row">
        <div class="one-half column">
          <p style="width: 500px;">
            Vi har gennem mange år holdt konformationer med stor succes. Har du en søn eller datter der ønsker et brag af en fest med god mad, flotte omgivelser og samtidig til en god pris, så ring og hør hvordan vi kan realisere din fest.
          </p>
          <br>
      <h6>Ring på tlf: (+45) 22 42 43 00</h6>
      <h6>frederiksbergselskaber@gmail.com</h6>
        </div>
        <div class="one-half column">
          <img src="img/Konfirmation.jpg" width="400rem" height="auto">
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="wrapper">
    <div class="container arrangementer">
      <div class="arrangementer_wrapper">
        <h2 style="margin-bottom: 1rem;"> Bryllup </h2>
        <div class="row">
          <div class="one-half column">
            <img src="img/Bryllup.jpg" width="400rem" height="auto">
          </div>
              <div class="one-half column">
                <p style="width: 500px;">
                  Drømmer I om et romantisk bryllup, hvor der er tænkt på alle detaljer, og hvor I kan slappe af og nyde festen sammen med jeres gæster, så er Café Frederiksberg en godt valg. Vi har gennem årene været med til at lægge rammerne på en masse forskellige bryllupper, og er derfor sikre på at vi kan lave en fest efter en hver smag.
                </p>
                <br>
                <h6>Ring på tlf: (+45) 22 42 43 00</h6>
                <h6>frederiksbergselskaber@gmail.com</h6>
              </div>
        </div>
      </div>
    </div>
</div>

<div class="bg_dark">
  <div class="container arrangementer">
    <div class="arrangementer_wrapper">
      <h2 style="margin-bottom: 1rem;"> Kaffebord </h2>
      <div class="row">
        <div class="one-half column">
          <p style="width: 500px;">
              En mindesammenkomst efter en bisættelse eller begravelse, er en god mulighed for at mødes efter ceremonien og dele tanker og minder i en afslappet atmosfære. Café Frederiksberg tilbyder forskellige muligheder for kaffeborde
          </p>
          <br>
        <h6>Ring på tlf: (+45) 22 42 43 00</h6>
        <h6>frederiksbergselskaber@gmail.com</h6>
        </div>

        <div class="one-half column">
          <img src="img/Kaffebord.jpg" width="400rem" height="auto">

        </div>
      </div>
    </div>
  </div>
</div>

<div class="wrapper">
    <div class="container arrangementer">
      <div class="arrangementer_wrapper">
        <h2 style="margin-bottom: 1rem;"> Julefrokost </h2>
        <div class="row">
          <div class="one-half column">
            <img src="img/Julefrokost.jpg" width="400rem" height="auto">
          </div>

          <div class="one-half column">
            <p style="width: 500px;">
              Når julen nærmer sig Vi tilbyder julefrokostmenu til firmaer og selskaber i vore hyggekige lokaler. Vi har lokaler til store såvel som små selskaber. Vi har sammensat en lækker Julebuffet, og du kan vælge buffet alene og købe drikke ved siden af, eller købe en samlet pakke. valget er dit.
            </p>
            <br>
          <h6>Ring på tlf: (+45) 22 42 43 00</h6>
          <h6>frederiksbergselskaber@gmail.com</h6>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="bg_dark">
  <div class="container arrangementer">
    <div class="arrangementer_wrapper">
      <h2 style="margin-bottom: 1rem;"> Nytårsaften </h2>
      <div class="row">

        <div class="one-half column">
          <p style="width: 500px;">
            Hvert år holder vi et brag af en fest når det bliver nytårstid. Kom til en komplet aften hvor der er sørget for alt. Oplev en kæmpe fest med en luksus nytårsmenu, fri bar, champagne og kransekage og meget mere.
          </p>
          <br>
        <h6>Ring på tlf: (+45) 22 42 43 00</h6>
        <h6>frederiksbergselskaber@gmail.com</h6>
        </div>

        <div class="one-half column">
          <img src="img/nytaarsaften.jpg" width="400rem" height="auto">
        </div>

      </div>
    </div>
  </div>
</div>

<!--Indrag footer fra filen includes/footer.php-->
<?php include '../../includes/footer.php'; ?>

</body>
</html>
