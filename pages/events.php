<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Live events udgør en stor del af Café Frederiksberg, vi prøver at holde de hyggeligste forsamlinger i Aalborg, kom blandt andet forbi og oplev vores ugentlige torsdags-jam. Alt dette og mere med Frede Live"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
    <a href="/cafefrederiksberg/pages/events.php" class="active nav">Events</a>
    <!--Selskaber dropdown  -->
    <div class="dropdown">
      <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
      <div class="dropdown-content">
      <a href="/cafefrederiksberg/pages/selskaber/buffet.php">Buffet</a>
      <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php">Arrangementer</a>
      <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
      </div>
    </div>
    <!--Om os dropdown  -->
    <div class="dropdown">
      <a href="/cafefrederiksberg/pages/tidslinje.php">Om os<i class="arrowdown"></i></a>
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
  <!--Connects to database  -->
  <?php include '../admin/config.php';?>


  <?php
  // Tager data fra katalog table
  $query ="SELECT * FROM katalog";
  $results = mysqli_query($db,$query);
  if(!$results){
    die("could not query the database" .mysqli_error());
  }

  $row = mysqli_fetch_row($results);
  ?>

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
          <h2>Frede LIVE</h2>
          <h6>Live musik og events</h6>
          <p><?php echo $row[4]; ?></p>
          <a class="button" rel="noopener" aria-label="Se Frede live katalog" href="<?php echo $row[1]; ?>" target="_blank">Se vores Magasin <u>her</u></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  mysqli_close($db);
  ?>

<div class="container">
  <div class="events_overskrift">
<!--Overskrift logo  -->
    <div class="events_overskrift_leftalign">
      <img src="/cafefrederiksberg/img/fredelivelogo.svg" id="eventlogo" width="60rem" height="auto">
    </div>
<!-- Overskrift tekst  -->
    <div class="events_overskrift_rightalign">
      <h2>Frede Live</h2>
      <h6>Kommende Events</h6>
    </div>
  </div>
<!--Facebook page events  -->
  <div id="event_oversigt" class='sk-fb-event' data-embed-id='23826'></div><script src='https://www.sociablekit.com/app/embed/facebook-events/widget.js'></script>
</div>

<div class="bg_dark">
  <div class="container">
    <div class="row">

      <div class="one-half column frede_live_katalog">
        <a href="https://cafefrederiksberg.azurewebsites.net/" target="_blank">
          <div class="klub_frede_img">
          </div>
        </a>
      </div>

      <div class="one-half column frede_live_katalog_text">
        <div class="frede_live_katalog_text_container">
          <h2>Klub Frede</h2>
          <h6>Bliv medlem og spar penge</h6>
          <p>Med et medlemskab i Klub Frede er du garanteret eksklusive tilbud til de mange spændende live koncerter, samt andre begivenheder som Café Frederiksberg har at byde på. Derudover er der også særlige tilbud i baren til alle medlemmer af Klub Frede. </p>
          <a class="button" href="https://cafefrederiksberg.azurewebsites.net/" target="_blank" style="color:#CCB380">BESTIL MEDLEMSKAB</a>
        </div>
      </div>


    </div>
  </div>
</div>

  <div class="container" style="padding-bottom: 2rem;">
    <div class="events_overskrift">
      <h2>Følg os på Facebook</h2>
      <h6>Se de seneste opdateringer direkte fra Facebook</h6>
    </div>
  <!--Facebook widget page evens  -->
<div class='sk-ww-facebook-feed' data-embed-id='23827'></div><script src='https://www.sociablekit.com/app/embed/facebook-feed/widget.js'></script>
<div class="bg_dark">
  <div class="container" style="padding-bottom: 2rem;">
    <div class="events_overskrift">
      <h2>Find os på Instagram</h2>
      <h6>Nyheder og billeder fra Frede</h6>
    </div>
    <script src="https://snapwidget.com/js/snapwidget.js"></script>
    <iframe src="https://snapwidget.com/embed/678509" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
    <div style="font:10px/14px 'Roboto','Helvetica Neue',Arial,Helvetica,sans-serif;font-weight:400;width:100%;text-align:right"><a href="https://snapwidget.com" style="color:#777;text-decoration:none;">SnapWidget · Instagram Widget</a></div>
  </div>
</div>


<?php include '../includes/footer.php'; ?>



</body>

</html>
