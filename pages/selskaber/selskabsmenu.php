<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Sammensæt din helt egen menu, med forret, hovedret, dessert og natmad til dit selskab hos Café Frederiksberg."/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>
<body>

  <?php // Tilføjer mulighed for announcementbar
  include '../../includes/announcement.php'; ?>

  <!-- Mobil navigation -->
    <div class="container">
    <div class="mobilenav" style="z-index: 100"> <!-- Latterlig z-index pga. widget der har latterligt z-index -->
      <span onclick="openNav()"><img src="/cafefrederiksberg/img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
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
      <a href="/cafefrederiksberg/pages/selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="/cafefrederiksberg/pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php" class="active" id="dropdown">Selskabsmenu</a>
      <a href="/cafefrederiksberg/pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="/cafefrederiksberg/pages/kontakt.php" id="dropdown">Kontakt</a>
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
            <a href="/cafefrederiksberg/pages/selskaber/selskabsmenu.php" class="active">Selskabsmenu</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="/cafefrederiksberg/pages/tidslinje.php">Om os<i class="arrowdown"></i></a>
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

    <?php
    // Indsætter video/billede slider
    include '../../includes/header.php';
    // Opretter forbindelse til database
    include '../../admin/config.php';
    ?>
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
