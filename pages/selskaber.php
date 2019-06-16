<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Café Frederiksberg sørger både for en god buffet, en skræddersyet menu til dit selskab, udlejning af lokaler, eller blot nogle hyggelige rammer til dit selskab her i Aalborg"/>
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
      <a href="./pages/selskaber.php" class="active">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="./pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="./pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="./pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/kontakt.php" id="dropdown">Kontakt</a>
    </div>
  <script>
  // vis sidebar onclick
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
            <a href="./pages/selskaber.php" class="active">Selskaber<i class="arrowdown"></i></a>
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
    // Tilføjer sort baggrund onscroll
    var $nav = $('.navigationbar');
    $(document).scroll(function() {
        $nav.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
    });
    // Tilføjer sort baggrund til dropdown items
    var $dropdown = $('.dropdown-content');
    $(document).scroll(function() {
        $dropdown.css({background: $(this).scrollTop() > 20? "rgba(0, 0, 0, 0.4)":"transparent"});
    });
    </script>

  <?php // Indsætter video/billede slider
  include '../includes/header.php'; ?>

<div class="bg_dark selskaber_intro">
  <div class="container">
    <div class="row">

      <div class="six columns selskaber_img">
      </div>

      <div class="six columns">
        <h2>Selskaber hos Café Frederiksberg</h2>
        <h6>Vi byder på lokaler til selskaber, arrangementer og lækre buffeter!</h6>
        Café Frederiksberg står til rådighed ved alle lejlighder, om det er formelle omstændigheder.
        Eller det er en samling af gamle bekendte, så skal vi nok levere om det så enten drejer sig om mad, drikkelse eller blot nogle lækre omgivelser.

        Et udsnit af arrangementerne vi har stået får før, kan du se under vores side "arrangementer",
        derudover tilbyder vi også en række buffeter og selskabsmenuer, som også kan udforskes.

        <p style="font-size: 1.2rem;"><strong> Se vores udvalg her </strong></p>
          <a class="button" href="pages/selskaber/buffet.php">Buffet</a><br>
          <a class="button" href="pages/selskaber/arrangementer.php">Arrangementer</a><br>
          <a class="button" href="pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
          <p><i> Eller kontakt os på telefon eller mail for at høre mere.</i> </p>
          <p> <strong>Telefon:</strong> +45 22 42 43 00 </p>
          <p> <strong>Mail:</strong> frederiksbergselskaber@gmail.com </p>
      </div>

    </div>
  </div>
</div>

<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>

</body>
</html>
