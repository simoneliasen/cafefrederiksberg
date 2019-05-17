<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Café Frederiksberg sørger både for en god buffet, en skræddersyet menu til dit selskab, udlejning af lokaler, eller blot nogle hyggelige rammer til dit selskab her i Aalborg"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include '../includes/announcement.php'; ?>

  <!-- Hamburger menu + logo  -->
    <div class="container">
    <div class="mobilenav" style="z-index: 100"> <!-- Latterlig z-index pga. widget der har latterligt z-index -->
      <span onclick="openNav()"><img src="img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="/cafefrederiksberg/index.php">
          <img src="/cafefrederiksberg/img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
        </a>
    </div>
    </div>

  <!--Sidebar mobil  -->
    <div id="mySidenav" class="sidenav" style="z-index: 101">  <!-- Latterlig z-index pga. widget der har latterligt z-index -->
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="/cafefrederiksberg/index.php">Forside</a>
      <a href="/cafefrederiksberg/pages/restaurant.php">Menukort</a>
      <a href="/cafefrederiksberg/pages/bar.php">Barkort</a>
      <a href="/cafefrederiksberg/pages/events.php">Events</a>
      <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="/cafefrederiksberg/pages/selskaber/buffet.php" style="background-color: #1E1D20; ">Buffet</a>
      <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php" style="background-color: #1E1D20; ">Arrangementer</a>
      <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php" style="background-color: #1E1D20; ">Selskabsmenu</a>
      <a href="/cafefrederiksberg/pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="/cafefrederiksberg/pages/kontakt.php" style="background-color: #1E1D20; ">Kontakt</a>
    </div>

  <!-- Script til at vise sidebar, onclick -->
  <script>
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
        <a href="/cafefrederiksberg/index.php"><img src="/cafefrederiksberg/img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>

        <div class="navigationmenu">
        <a href="/cafefrederiksberg/pages/restaurant.php">Menukort</a>
        <a href="/cafefrederiksberg/pages/bar.php">Barkort</a>
        <a href="/cafefrederiksberg/pages/events.php">Events</a>
  <!--Selskaber dropdown  -->
          <div class="dropdown">
            <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="/cafefrederiksberg/pages/selskaber/buffet.php">Buffet</a>
            <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php">Arrangementer</a>
            <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
            </div>
          </div>
  <!-- Om os dropdown  -->
          <div class="dropdown">
            <a href="/cafefrederiksberg/pages/tidslinje.php">Om os<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="/cafefrederiksberg/pages/kontakt.php">Kontakt</a>
            </div>
          </div>
        </div>
      </nav>
    </div>

    <!--Henter Jquery Script via CDN  -->
    <script
      src="https://code.jquery.com/jquery-1.12.4.js"
      integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
      crossorigin="anonymous">
      </script>

    <!-- Tilføjer sort baggrund onscroll -->
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

  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../includes/header.php'; ?>

  <!--Online bestilling  -->
  <div class="container">
    <div class="bestil_online">
      <h2 class="bestil_online_overskrift">Bestil Online</h2>
      <div class="bestil_online_knapper">
        <a class="button" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Bord</a>
        <a class="button" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Billetter</a>
        <a class="button" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">Take Away</a>
      </div>
    </div>
  </div>

<div class="selskaber_wrapper">
    <div class="row">
      <div class="container arrangementer">

        <div class="one-half column">
          <img src="img/selskaber.jpg" width="370rem" height="auto">
        </div>
        <div class="one-half column">
          <span class="selskab_text_title"> Vi byder på lokaler til selskaber, arrangementer og lækre buffeter!</span><br>
          <p style="width: 400px; margin-top: 1rem;">
            Café Frederiksberg står til rådighed ved alle lejlighder, om det er formelle omstændigheder.
            Eller det er en samling af gamle bekendte, så skal vi nok levere om det så enten drejer sig om mad, drikkelse eller blot nogle lækre omgivelser.

            Et udsnit af arrangementerne vi har stået får før, kan du se under vores side "arrangementer",
            derudover tilbyder vi også en række buffeter og selskabsmenuer, som også kan udforskes.

          <p style="font-size: 1.2rem;"><strong> Se vores udvalg her </strong></p>
              <a class="button" href="pages/selskaber/buffet.php">Buffet</a>
              <a class="button" href="pages/selskaber/arrangementer.php">Arrangementer</a>
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
