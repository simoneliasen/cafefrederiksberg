<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Sammensæt din helt egen menu, med forret, hovedret, dessert og natmad til dit selskab hos Café Frederiksberg."/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <!--Standard stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
  <!-- Skeleton stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
  <!-- Normalize stylesheet  -->
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">

</head>

<body>
  <!--Tilføjer mulighed for announcementbar  -->
  <?php include '../../includes/announcement.php'; ?>

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
  <?php include '../../includes/header.php'; ?>
  <!--Connects to database  -->
  <?php include '../../admin/config.php';?>

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

  <div class="container">
    <div class="row selskab_present">
      <div class="one-half column selskab_present_img">
      </div>

      <div class="one-half column">
        <h2>Selskabsmenu</h2>
        <h6>Sammensæt din egen selskabsmenu</h2>
        <p>Vælg mellem en lang række foretter, hovedretter deserter og natmad. Sammensæt selv en lækker menu hvor du får lige præcis det du kunne tænke dig.<br>
        Ring og hør mere eller bestil allrede nu!</p>
        <p>På telefon: (+45) 98 12 03 83</p>
        <p>Eller send en email: frederiksbergselskaber@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="bg_dark">
    <div class="menu_kort_spacer"></div>

    <div class="container">
      <div class="row">
        <div class="menu_kort">

          <!--FORETTER-->
          <h2 class="menu_kort_overskrift">Foretter</h2>
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='forret';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name" style="font-weight:400;"><?= $row[2] ?></div>
              <div class="menu_item_price"><?=$row[4] ?>,-</div>
              <div class="menu_item_description"><?=$row[3] ?></div>
            </div>
        <?php endwhile;?>

          <!--HOVEDRETTER-->
          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Hovedretter</h2>
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='hovedret';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name" style="font-weight:400;"><?= $row[2] ?></div>
              <div class="menu_item_price"><?=$row[4] ?>,-</div>
              <div class="menu_item_description"><?=$row[3] ?></div>
            </div>
        <?php endwhile;?>

          <!--DESSERTER-->
          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Desserter</h2>
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='dessert';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name" style="font-weight:400;"><?= $row[2] ?></div>
              <div class="menu_item_price"><?=$row[4] ?>,-</div>
              <div class="menu_item_description"><?=$row[3] ?></div>
            </div>
        <?php endwhile;?>


          <!--NATMAD-->
          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Natmad</h2>
          <!-- Laver query fra table hvor katergorien er angivet som hovedret  -->
          <?php
          $query ="SELECT * FROM selskabsmenu WHERE category='natmad';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
            <div class="menu_item">
              <div class="menu_item_name" style="font-weight:400;"><?= $row[2] ?></div>
              <div class="menu_item_price"><?=$row[4] ?>,-</div>
              <div class="menu_item_description"><?=$row[3] ?></div>
            </div>
        <?php endwhile;
         mysqli_close($db);?>

          <!--EKSTRA INFO-->
          <p class="menu_allergener" style="margin-top:6rem; text-align: center;">*Gæster kan få oplysninger om allergerner ved at henvende sig til personalet</p>
          <div class="menu_kontrolrapport">
            <p>Se vores kontrolrapport: </p>
            <a href="https://www.findsmiley.dk/25727" target="_blank">
              <img src="img/kontrolrapport.JPEG" width="80px;" border="0">
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php include '../../includes/footer.php'; ?>

</body>
</html>
