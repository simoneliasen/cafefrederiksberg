<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Oplev Café Frederiksbergs historie igennem denne tidslinje, og opdag historier udfalde sig på tværs af den nuværende og tidlgiere generationer"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>
<body>

  <!-- Mobil navigation  -->
    <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="/cafefrederiksberg/img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="/cafefrederiksberg/index.php">
          <img src="/cafefrederiksberg/img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
        </a>
    </div>
    </div>

    <?php // Tilføjer mulighed for announcementbar
    include 'includes/announcement.php'; ?>

  <!--Sidebar mobil  -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="/cafefrederiksberg/index.php">Forside</a>
      <a href="/cafefrederiksberg/pages/restaurant.php">Menukort</a>
      <a href="/cafefrederiksberg/pages/bar.php">Barkort</a>
      <a href="/cafefrederiksberg/pages/events.php">Events</a>
      <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="/cafefrederiksberg/pages/selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="/cafefrederiksberg/pages/tidslinje.php" class="active">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="/cafefrederiksberg/pages/kontakt.php" id="dropdown">Kontakt</a>
    </div>
  <script>
  // viser sidebar ved klik på hamburgermenu
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
          <div class="dropdown">
            <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="/cafefrederiksberg/pages/selskaber/buffet.php">Buffet</a>
            <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php">Arrangementer</a>
            <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="/cafefrederiksberg/pages/tidslinje.php" class="active">Om os<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="/cafefrederiksberg/pages/kontakt.php">Kontakt</a>
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
          <div class="timeline_img1"></div>
        </div>
      </div>

      <div class="two columns tidslinje" style="height: 300px;">
        <!-- <div class="middleline"></div> -->
      </div>

      <div class="five columns">
        <div class="timeline_line timeline_line_right"></div>
        <div class="timeline_spacer"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">1925</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img2"></div>
        </div>
      </div>

    </div>
    <div class="row last">

      <div class="five columns">
        <div class="timeline_line timeline_line_left"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">1936</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img3"></div>
        </div>
      </div>

      <div class="two columns tidslinje" style="height: 200px;"  >
      </div>

      <div class="five columns">
        <div class="timeline_line timeline_line_right"></div>
        <div class="timeline_spacer"></div>
        <div class="timeline_item">
          <h2 style="margin-bottom: 1rem;">2019</h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
          <div class="timeline_img4"></div>
        </div>
      </div>
    </div>
  </div>

</div>

<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>

</body>
</html>
