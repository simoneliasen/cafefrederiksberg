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
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Mobil navigation  -->
    <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="./../img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="../index.php">
          <img src="./../img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
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
      <a href="events.php">Events</a>
      <a href="selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="tidslinje.php" class="active">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="kontakt.php" id="dropdown">Kontakt</a>
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
        <a href="../index.php"><img src="./../img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>
        <div class="navigationmenu">
        <a href="restaurant.php">Menukort</a>
        <a href="bar.php">Barkort</a>
        <a href="events.php">Events</a>
          <div class="dropdown">
            <a href="selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="selskaber/buffet.php">Buffet</a>
            <a href="selskaber/arrangementer.php">Arrangementer</a>
            <a href="selskaber/selskabsmenu.php">Selskabsmenu</a>
            </div>
          </div>
          <div class="dropdown">
            <a href="tidslinje.php" class="active">Om os<i class="arrowdown"></i></a>
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

<!-- Connect til database  -->
<?php
//Opretter forbindelse manuelt kontra include, da de ellers er duplikeret i main-content
$db = mysqli_connect('localhost','root','','admin');
if(!$db){
  die("Cannot connect to the database" . mysqli_connect_error());
}
mysqli_set_charset($db,"utf8");
?>
<footer class="container">
  <div class="row">
    <!--Kontaktoplysninger -->
    <div class="four columns" style="text-align: center;">
      <h3 class="footer_h3">Kontakt os</h3>
      <div class="footer_element">
        <strong>Adresse</strong><br>
        Hadsundvej 1B<br>9000 Aalborg<br>
      </div>
      <div class="footer_element">
        <strong>Telefon</strong><br>
          <p>+45 98 12 03 83</p>
      </div>
      <div class="footer_element">
        <strong>Telefon til selskaber</strong><br>
        <p>+45 22 42 43 00</p>
      </div>
      <div class="footer_element">
        <strong>E-mail</strong><br>
        <a href="mailto:cafefrederiksberg@gmail.com"><p>cafefrederiksberg@gmail.com</p></a>
      </div>
      <div class="footer_element">
        <strong>E-mail til selskaber</strong><br>
        <a href="mailto:frederiksbergselskaber@gmail.com"><p>frederiksbergselskaber@gmail.com</p></a>
      </div>
    </div>
<!--Åbningstider  -->
    <div class="four columns">
      <h3 class="footer_h3">Åbningstider</h3>
      <div class="footer_element" style="text-align: center;">
        <!--Ugedages åbningstider  -->
        <?php
            $query ="SELECT * FROM aabningstider ORDER BY id ASC LIMIT 7;";
            $results = mysqli_query($db,$query);
            if(!$results){
              die("could not query the database" .mysqli_error());
            }
            while($row = mysqli_fetch_row($results)): ?>
            <p><strong><?= $row[1] ?></strong> <?=$row[2] ?></p>
          <?php endwhile;?>

          <!--Køkkenets åbningstider  -->
          <?php
          $query ="SELECT * FROM aabningstider ORDER BY id DESC LIMIT 1;";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          $row = mysqli_fetch_row($results)?>
        <p><strong>Køkkenet</strong><br><strong><?= $row[1] . '</strong> ' . $row[2] ?>
          <!--luk forbindelse til database-->
          <?php
          mysqli_close($db);
            ?>
      </div>
    </div>
    <!--Links   -->
    <div class="four columns">
      <h3 class="footer_h3">Links</h3>
      <div class="footer_element" style="text-align: center;">
        <a href="http://www.orlando-florida.dk/"><p>Feriehus Florida</p></a>
        <a href="https://www.findsmiley.dk/25727"><p>Kontrol Rapport</p></a>
        <a href="https://www.instagram.com/cafefrederiksberg/"><img src="../img/instagram.png" width="30px" heigth="auto" alt="Genvej til instagram"><p id="instagramtext">Instagram</p></a><br><br>
        <a href="https://www.facebook.com/Fredelive/"><img src="../img/facebook.png" width="30px" heigth="auto" alt="Genvej til facebook"><p id="facebooktext">Facebook</p></a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
