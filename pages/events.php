<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Live events udgør en stor del af Café Frederiksberg, vi prøver at holde de hyggeligste forsamlinger i Aalborg, kom blandt andet forbi og oplev vores ugentlige torsdags-jam. Alt dette og mere med Frede Live"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>

  <!-- Mobil navigation -->
    <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="../img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="../index.php">
          <img src="../img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
        </a>
    </div>
    </div>

    <?php // Tilføjer mulighed for announcementbar
    include '../includes/announcement.php'; ?>

  <!--Sidebar mobil  -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="../index.php">Forside</a>
      <a href="restaurant.php">Menukort</a>
      <a href="bar.php">Barkort</a>
      <a href="events.php" class="active">Events</a>
      <a href="selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="kontakt.php" id="dropdown">Kontakt</a>
    </div>
  <script>
  // Vis sidebar onclick
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
        <a href="../index.php"><img src="../img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>
        <div class="navigationmenu">
        <a href="restaurant.php">Menukort</a>
        <a href="bar.php">Barkort</a>
        <a href="events.php" class="active">Events</a>
          <div class="dropdown">
            <a href="selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="selskaber/buffet.php">Buffet</a>
            <a href="selskaber/arrangementer.php">Arrangementer</a>
            <a href="selskaber/selskabsmenu.php">Selskabsmenu</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="tidslinje.php">Om os<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="kontakt.php">Kontakt</a>
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
      <img src="../img/fredelivelogo.svg" id="eventlogo" width="60rem" height="auto">
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
        <a href="https:/...azurewebsites.net/" target="_blank">
          <div class="klub_frede_img">
          </div>
        </a>
      </div>

      <div class="one-half column frede_live_katalog_text">
        <div class="frede_live_katalog_text_container">
          <h2>Klub Frede</h2>
          <h6>Bliv medlem og spar penge</h6>
          <p>Med et medlemskab i Klub Frede er du garanteret eksklusive tilbud til de mange spændende live koncerter, samt andre begivenheder som Café Frederiksberg har at byde på. Derudover er der også særlige tilbud i baren til alle medlemmer af Klub Frede. </p>
          <a class="button" href="https:/...azurewebsites.net/" target="_blank" style="color:#CCB380">BESTIL MEDLEMSKAB</a>
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
