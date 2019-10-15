<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Gode Buffeter inklusiv fri øl, vin og vand, vi god mad til gode priser, kom forbi og oplev en af vores interessante buffeter" />
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Poppins&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Mobil navigation -->
  <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="./../../img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
      <a href="./index.php">
        <img src="./../../img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
      </a>
    </div>
  </div>

  <?php // Tilføjer mulighed for announcementbar
  include '../../includes/announcement.php'; ?>

  <!--Sidebar mobil  -->
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="./index.php">Forside</a>
    <a href="./pages/restaurant.php">Menukort</a>
    <a href="./pages/bar.php">Barkort</a>
    <a href="./pages/events.php">Events</a>
    <a href="./pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
    <a href="./pages/selskaber/buffet.php" class="active" id="dropdown">Buffet</a>
    <a href="./pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
    <a href="./pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
    <a href="./pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
    <a href="./pages/kontakt.php" id="dropdown">Kontakt</a>
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
        <a href="./index.php"><img src="./../../img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>
      <div class="navigationmenu">
        <a href="./pages/restaurant.php">Menukort</a>
        <a href="./pages/bar.php">Barkort</a>
        <a href="./pages/events.php">Events</a>
        <div class="dropdown">
          <a href="./pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
          <div class="dropdown-content">
            <a href="./pages/selskaber/buffet.php" class="active">Buffet</a>
            <a href="./pages/selskaber/arrangementer.php">Arrangementer</a>
            <a href="./pages/selskaber/selskabsmenu.php">Selskabsmenu</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="./pages/tidslinje.php">Om os<i class="arrowdown"></i></a>
          <div class="dropdown-content">
            <a href="./pages/kontakt.php">Kontakt</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <script>
    // Tilføjer sort baggrund onscroll
    var $nav = $('.navigationbar');
    $(document).scroll(function() {
      $nav.css({
        background: $(this).scrollTop() > 20 ? "rgba(0, 0, 0, 0.4)" : "transparent"
      });
    });
    // Tilføjer sort baggrund til dropdown items
    var $dropdown = $('.dropdown-content');
    $(document).scroll(function() {
      $dropdown.css({
        background: $(this).scrollTop() > 20 ? "rgba(0, 0, 0, 0.4)" : "transparent"
      });
    });
  </script>

  <?php
  // Indsætter video/billede slider
  include '../../includes/header.php';
  // Opretter forbindelse til database
  include '../../admin/config.php';
  ?>

  <div class="wrapper buffet-menu">
    <!--Indhold centreret i wrapper-->
    <div class="container buffet_info_menu">
      <div class="buffet_infooverskrift">
        <h2>Café Frederiksberg har et udvalg af lækre buffeter</h2>
      </div>
      <div class="row buffet_infotekst">
        <div class="six columns">
          <p>Når du holder fest, kan det godt løbe løbsk inden regningen kommer - bare ikke hos os!</p>
          <p>Vi hylder nemlig princippet om, at man kender udgifterne på forhånd. Vi serverer selvfølgelig gerne drinks og spiritus, men kun efter forudgående aftale, så du selv ved hvad du har sagt ja til. Uanset hvor mange øl Onkel Hans kan drikke, bliver regningen den samme.</p>
        </div>
        <div class="six columns">
          <p>Vores selskabslokaler er hele tiden booket op og det skyldes ikke mindst, at kunderne kender prisen på forhånd, og at den samtidig er overkommelig. Vi har byens bedste og mest konkurrencedygtige priser på en færdigpakket fest, og det er uanset om Tante Oda holder 70 års.</p>
        </div>
      </div>
      <div class="row buffet_allegener_smiley">
        <P style="margin-bottom: 0.2rem;">Vi er stolte over at kunne fremvise 5 elite smileys <a href="https://www.findsmiley.dk/25727" target="_blank"><img src="img/kontrolrapport.JPEG" width="100" border="0"></a></p>
        <p id="allergy">Allegiker/vegetar menu kan bestilles mod tillæg i prisen</p>
      </div>
    </div>
    <hr>

    <?php
    // return amount of buffetnumbers
    $query = "SELECT MAX(buffetNumber) FROM buffet;";
    $buffetMax = mysqli_fetch_row(mysqli_query($db, $query));
    if (!$results) {
      die("could not query the database");
    }

    // Returns buffetitems that has specified Buffetcounter. (initializes with 1)
    $buffetCounter = 1;
    function buffetPicker()
    {
      global $buffetCounter;
      global $db;
      $query = "SELECT * FROM buffet WHERE buffetNumber = $buffetCounter;";
      $results = mysqli_query($db, $query);
      return $results;
    }

    //Get BuffetOverskrift related to buffetCounter
    function buffetOverskrift()
    {
      global $buffetCounter;
      global $db;
      $query = "SELECT buffetName FROM buffet WHERE buffetNumber = $buffetCounter LIMIT 1;";
      $results = mysqli_query($db, $query);
      $overskrift = $results->fetch_assoc();
      return $overskrift['buffetName'];
    }
?>

<!-- Add while loop to make links corresponding with buffetOverskrift -->
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <div class="menulinje-buffet">
            <ul>
              <li><a href="pages/selskaber/buffet.php#Buffet_1">Buffet 1</a></li>
              <li><a href="pages/selskaber/buffet.php#Buffet_2">Buffet 2</a></li>
              <li><a href="pages/selskaber/buffet.php#Buffet_3">Buffet 3</a></li>
              <li><a href="pages/selskaber/buffet.php#Buffet_4">Buffet 4</a></li>
              <li><a href="pages/selskaber/buffet.php#USA_buffet">USA buffet</a></li>
              <li><a href="pages/selskaber/buffet.php#Italiensk_buffet">Italiensk Buffet</a></li>
              <li><a href="pages/selskaber/buffet.php#Øko_buffet">Øko buffet</a></li>
              <li><a href="pages/selskaber/buffet.php#BuffetJul">Jule Buffet</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<!-- Make above section a a while loop -->
    
<?php
    //While loop prints buffetinfo changing order every row 
    while ($buffetCounter <= $buffetMax[0]) :
      $imgFloatDirection = ($buffetCounter % 2 == 0) ? 'float: right;' : 'float: left;';
      $menuFloatDirection = ($buffetCounter % 2 == 0) ? 'float: left;' : 'float: right;';
      $rowColor = ($buffetCounter % 2 == 0) ? '' : 'background-color: #1E1D20';
      ?>

      <div class="wrapper" style="<?php echo ($rowColor) ?>">
        <div class="container">
          <div class="row buffet_even">
            <div class="six columns" style="<?php echo ($menuFloatDirection) ?>">
              <h2><?= buffetOverskrift() ?></h2>
              <ul>
                <?php
                  $row_result = buffetPicker();
                  while ($row = mysqli_fetch_row($row_result)) :
                    ?>
                  <li class="buffet_list"><?= $row[3] ?></li>
                <?php endwhile; ?>
              </ul>
            </div>
            <div class="six columns">
              <img src="img/buffet_files/Buffet<?php echo($buffetCounter)?>.jpg" style="<?php echo ($imgFloatDirection); ?>" width="400px" height="500px""> 
            </div>
          </div>
        </div>
      </div>
      
    <?php
      $buffetCounter++;
    endwhile;
    mysqli_close($db);
    include '../../includes/footer.php';
    ?>

</body>
</html>