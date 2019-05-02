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
    <a href="/cafefrederiksberg/pages/restaurant.php">Menukort</a>
    <a href="/cafefrederiksberg/pages/bar.php">Barkort</a>
    <a href="/cafefrederiksberg/pages/events.php">Events</a>
    <!--Selskaber dropdown  -->
    <div class="dropdown">
      <a href="/cafefrederiksberg/pages/selskaber.php" class="active nav">Selskaber</a>
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

  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../includes/header.php'; ?>

<div class="selskaber_wrapper">
    <div class="row">
      <div class="container arrangementer">

        <div class="one-half column">
          <img src="img/buffet_placeholder.png.jpg" width="370rem" height="auto">
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
              <p> Eller kontakt os på telefon eller mail for at høre mere. </p>
              <p> <strong>Telefon:</strong> 23603949 </p>
              <p> <strong>Mail:</strong> Cafefrede@live.dk </p>
        </div>

      </div>
    </div>
</div>

<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>

</body>
</html>
