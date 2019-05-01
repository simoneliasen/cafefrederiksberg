<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Oplev Café Frederiksbergs historie igennem denne tidslinje, og opdag historier udfalde sig på tværs af den nuværende og tidlgiere generationer"/>
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
    <a href="/cafefrederiksberg/pages/restaurant.php">Restaurant</a>
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
      <a href="/cafefrederiksberg/pages/tidslinje.php" class="active nav">Om os</a>
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


  <h2 style="text-align: center; padding: 4.5rem 0 2rem 0">Tidslinje</h2>


<div class="bg_dark">
  <div class="container">

    <div class="middleline"></div>
    <div class="row">

      <div class="five columns">
        <div class="timeline_line timeline_line_left"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">1900</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img"></div>
        </div>
      </div>

      <div class="two columns" style="height: 300px;">
        <!-- <div class="middleline"></div> -->
      </div>

      <div class="five columns">
        <div class="timeline_line timeline_line_right"></div>
        <div class="timeline_spacer"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">1900</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img"></div>
        </div>
      </div>

    </div>
    <div class="row">

      <div class="five columns">
        <div class="timeline_line timeline_line_left"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">1950</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img"></div>
        </div>
      </div>

      <div class="two columns" style="height: 200px;"  >
      </div>

      <div class="five columns">
        <div class="timeline_line timeline_line_right"></div>
        <div class="timeline_spacer"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">1900</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img"></div>
        </div>
      </div>
    </div>
  </div>

</div>













<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>


</body>

</html>
