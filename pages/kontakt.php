<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Kontakt os via telefon eller mail, vi er altid klar til at tage imod bestilling eller andre henvendelser, vi glæder os til at høre fra dig!"/>
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

    <!-- Tilføjer sort baggrund onscroll -->
    <script>
    var nav = document.querySelector('.navigationbar');
        var dropdown = document.querySelector('.dropdown-content');
        document.onscroll = function() {
            nav.style.background = dropdown.style.background = document.querySelector('html').scrollTop > 20 ? "rgba(0, 0, 0, 0.4)" : "transparent";
        }
    </script>

  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../includes/header.php'; ?>
  <!--Connects to database  -->
  <?php include '../admin/config.php';?>


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

<div class="bg_dark">
  <div class="container opening_info">
<br>
    <div class="container" style="text-align: center;">
      <p><i>Vi træffes bedst på telefon kl. <strong>10.00-11.30</strong>, kl. <strong>14.30-16.30</strong> samt efter kl. <strong>20.30</strong></i></p>
    </div>

    <div class="row opening_information">

      <div class="six columns">



        <h2 class="opening_headline">Åbningstider</h2>

        <!--Vis første 7 entries i sql-table (ugedages åbningstider)  -->
        <?php
            $query ="SELECT * FROM aabningstider ORDER BY id ASC LIMIT 7;";
            $results = mysqli_query($db,$query);
            if(!$results){
              die("could not query the database" .mysqli_error());
            }
            while($row = mysqli_fetch_row($results)): ?>
            <div class="opening_time_day">
              <div class="opening_day"><?= $row[1] ?></div>
              <div class="opening_time"><?= $row[2] ?></div>
            </div>
          <?php endwhile;?>

    </div>
  <div class="six columns">
    <h2 class="opening_headline">Kontaktinformationer</h2>
    <div class="opening_time_day">
      <div class="opening_day_party">
        Adresse
      </div>
      <div class="opening_time_right">
        Hadsundvej 1B
      </div>
    </div>
    <div class="opening_time_day">
      <div class="opening_day_party">
        By
      </div>
      <div class="opening_time_right">
        9000 Aalborg, Danmark
      </div>
    </div>
    <div class="opening_time_day">
      <div class="opening_day_party">
        Telefon
      </div>
      <div class="opening_time_right">
        (+45) 98 12 03 83
      </div>
    </div>
    <div class="opening_time_day">
      <div class="opening_day_party">
        E-mail
      </div>
      <div class="opening_time_right">
        cafefrederiksberg@gmail.com
      </div>
    </div>
  </div>
</div>

<!--Printer sidste værdi i aabningstider table (Køkkens åbningstider)  -->
<?php
$query ="SELECT * FROM aabningstider ORDER BY id DESC LIMIT 1;";
$results = mysqli_query($db,$query);
if(!$results){
  die("could not query the database" .mysqli_error());
}
$row = mysqli_fetch_row($results)
?>

<div class="row kitchen_and_party">
  <div class="six columns">
    <h2 class="opening_headline">Køkken</h2>
    <div class="contact_info_party">
      <div class="opening_day"><?= $row[1];?></div>
      <div class="opening_time"><?= $row[2];?></div>
    </div>
  </div>

<?php mysqli_close($db);?>
  <div class="six columns">
    <h2 class="opening_headline">Vedrørende fest</h2>
    <div class="contact_info_party">
      <div class="opening_day_party">
        Telefon
      </div>
      <div class="opening_time_right">
        (+45) 22 42 43 00
      </div>
    </div>
    <div class="contact_info_party">
      <div class="opening_day_party">
        E-mail
      </div>
      <div class="opening_time_right">
        Frederiksbergselskaber@gmail.com
      </div>
    </div>
  </div>
</div>
</div>

</div>

<!--Google maps  -->
<div class="mapouter">
<div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" title="google maps location" src="https://maps.google.com/maps?q=Caf%C3%A9%20Frederiksberg%20Aalborg&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
    marginwidth="0"></iframe><a href="https://www.emojilib.com"></a></div>
</div>

<!--Indrag footer fra filen includes/footer.php-->
<?php include '../includes/footer.php'; ?>

</body>
</html>
