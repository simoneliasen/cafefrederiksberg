<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Gode Buffeter inklusiv fri øl, vin og vand, vi god mad til gode priser, kom forbi og oplev en af vores interessante buffeter"/>
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
      <a href="/cafefrederiksberg/pages/selskaber.php">Selskaber</a>
      <div class="dropdown-content">
      <a href="/cafefrederiksberg/pages/selskaber/buffet.php" class="active nav">Buffet</a>
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
  <?php include '../../includes/header.php'; ?>
  <!--Connects to database  -->
  <?php include '../../admin/config.php';?>

<div class="wrapper buffet-menu">
  <!--Indhold centreret i wrapper-->
  <div class="container buffet_info_menu">
    <div class="buffet_infooverskrift">
      <h2>Café Frederiksberg har et udvalg af lækre buffeter</h2>
    </div>
    <div class="row buffet_infotekst">
      <div class="six columns">
        <p>Når du holder fest, kan det godt løbe løbsk inden regningen kommer - bare ikke hos os!</p>
        <p>Vi hylder nemlig princippet om at man kender udgifterne på forhånd. Selvfølgelig serverer vi da gerne drinks og spiritus, men kun efter forudgående aftale, så du selv ved hvad du har sagt ja til. og uanset hvor mange øl Onkel Hans kan drikke, bliver regningen den samme.</p>
      </div>
      <div class="six columns">
        <p>Vore selskabslokaer er hele tiden booket op, og det skyldes ikke mindst, at kunderne kender prisen på forhånd, og at den samtidig er overkommelig. Vi har byens bedste og mest konkurrencedygtige priser på en færdigpakket fest, og det er uanset om Tante Oda holder 70 års.</p>
      </div>
    </div>
    <div class="row buffet_allegener_smiley">
      <P style="margin-bottom: 0.2rem;">Vi er stolte over at kunne fremvise 5 elite smileys <a href="https://www.findsmiley.dk/25727" target="_blank"><img src="img/kontrolrapport.JPEG" width="100" border="0"></a></p>
      <p id="allergy">Allegiker/vegetar menu kan bestilles mod tillæg i prisen</p>
    </div>
  </div>
  <hr>
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

<!-- Buffet 1 -->
<div id="Buffet_1">
<div class="bg_dark">
  <div class="container buffet_1">
    <div class="row buffet_odd">
        <div class="six columns">
            <h2>Buffet 1</h2>
          <?php
          $query ="SELECT * FROM buffet WHERE category='Buffet1';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <ul>
            <li> <?= $row[1] ?> </li>
          </ul>
          <?php endwhile;?>
          <div class="buffet_price_overskrift">
            <h2>Priser</h2>
            <p>inkl. fri øl, vin og vand</p>
          </div>
          <?php
          $query ="SELECT * FROM buffetpriser WHERE category='Buffet1';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <div class="buffet_price">
            <div class="buffet_price_info">
              <?= $row[1] ?>
            </div>
            <div class="buffet_price_price">
              <?= $row[2] ?>,-
            </div>
          </div>
          <?php endwhile;?>
        </div>
      <div class="six columns">
        <div class="buffet_placeholder_img_right"></div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Buffet 2 -->
<div id="Buffet_2">
<div class="container buffet_2">
  <div class="row buffet_even">
    <div class="six columns">
      <div class="buffet_placeholder_img_left"></div>
    </div>
    <div class="six columns">
      <h2>Buffet 2</h2>
      <?php
      $query ="SELECT * FROM buffet WHERE category='Buffet2';";
      $results = mysqli_query($db,$query);
      if(!$results){
        die("could not query the database" .mysqli_error());
      }
      while($row = mysqli_fetch_row($results)): ?>
      <ul>
        <li> <?= $row[1] ?> </li>
      </ul>
      <?php endwhile;?>
      <div class="buffet_price_overskrift">
        <h2>Priser</h2>
        <p>inkl. fri øl, vin og vand</p>
      </div>
      <?php
      $query ="SELECT * FROM buffetpriser WHERE category='Buffet2';";
      $results = mysqli_query($db,$query);
      if(!$results){
        die("could not query the database" .mysqli_error());
      }
      while($row = mysqli_fetch_row($results)): ?>
      <div class="buffet_price">
        <div class="buffet_price_info">
          <?= $row[1] ?>
        </div>
        <div class="buffet_price_price">
          <?= $row[2] ?>,-
        </div>
      </div>
      <?php endwhile;?>
    </div>
  </div>
</div>
</div>

<!-- Buffet 3 -->
<div id="Buffet_3">
<div class="bg_dark">
  <div class="container buffet_3">
    <div class="row buffet_odd">
        <div class="six columns">
          <h2>Buffet 3</h2>
          <?php
          $query ="SELECT * FROM buffet WHERE category='Buffet3';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <ul>
            <li> <?= $row[1] ?> </li>
          </ul>
          <?php endwhile;?>
          <div class="buffet_price_overskrift">
            <h2>Priser</h2>
            <p>inkl. fri øl, vin og vand</p>
          </div>
          <?php
          $query ="SELECT * FROM buffetpriser WHERE category='Buffet3';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <div class="buffet_price">
            <div class="buffet_price_info">
              <?= $row[1] ?>
            </div>
            <div class="buffet_price_price">
              <?= $row[2] ?>,-
            </div>
          </div>
          <?php endwhile;?>
        </div>
      <div class="six columns">
        <div class="buffet_placeholder_img_right"></div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Buffet 4 -->
<div id="Buffet_4">
<div class="container buffet_4">
  <div class="row buffet_even">
        <div class="six columns">
          <div class="buffet_placeholder_img_left"></div>
        </div>
      <div class="six columns">
        <h2>Buffet 4</h2>
        <?php
        $query ="SELECT * FROM buffet WHERE category='Buffet4';";
        $results = mysqli_query($db,$query);
        if(!$results){
          die("could not query the database" .mysqli_error());
        }
        while($row = mysqli_fetch_row($results)): ?>
        <ul>
          <li> <?= $row[1] ?> </li>
        </ul>
        <?php endwhile;?>
        <div class="buffet_price_overskrift">
          <h2>Priser</h2>
          <p>inkl. fri øl, vin og vand</p>
        </div>
        <?php
        $query ="SELECT * FROM buffetpriser WHERE category='Buffet3';";
        $results = mysqli_query($db,$query);
        if(!$results){
          die("could not query the database" .mysqli_error());
        }
        while($row = mysqli_fetch_row($results)): ?>
        <div class="buffet_price">
          <div class="buffet_price_info">
            <?= $row[1] ?>
          </div>
          <div class="buffet_price_price">
            <?= $row[2] ?>,-
          </div>
        </div>
        <?php endwhile;?>
      </div>
  </div>
</div>
</div>

<!-- USA buffet -->
<div id="USA_buffet">
<div class="bg_dark">
  <div class="container USA_buffet">
    <div class="row buffet_odd">
        <div class="six columns">
          <h2>USA buffet</h2>
          <?php
          $query ="SELECT * FROM buffet WHERE category='BuffetUSA';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <ul>
            <li> <?= $row[1] ?> </li>
          </ul>
          <?php endwhile;?>
          <div class="buffet_price_overskrift">
            <h2>Priser</h2>
            <p>inkl. fri øl, vin og vand</p>
          </div>
          <?php
          $query ="SELECT * FROM buffetpriser WHERE category='Buffet4';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <div class="buffet_price">
            <div class="buffet_price_info">
              <?= $row[1] ?>
            </div>
            <div class="buffet_price_price">
              <?= $row[2] ?>,-
            </div>
          </div>
          <?php endwhile;?>
          <!--
              Per ekstra time af fri øl, vin og vand pr. person
              Kun 50 ,-
           -->
        </div>
      <div class="six columns">
        <div class="buffet_placeholder_img_right"></div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Italiensk buffet -->
<div id="Italiensk_buffet">
<div class="container Italiensk_buffet">
  <div class="row buffet_even">
        <div class="six columns">
          <div class="buffet_placeholder_img_left"></div>
        </div>
      <div class="six columns">
        <h2>Italiensk buffet</h2>
        <?php
        $query ="SELECT * FROM buffet WHERE category='BuffetItaly';";
        $results = mysqli_query($db,$query);
        if(!$results){
          die("could not query the database" .mysqli_error());
        }
        while($row = mysqli_fetch_row($results)): ?>
        <ul>
          <li> <?= $row[1] ?> </li>
        </ul>
        <?php endwhile;?>
        <div class="buffet_price_overskrift">
          <h2>Priser</h2>
          <p>inkl. fri øl, vin og vand</p>
        </div>
        <?php
        $query ="SELECT * FROM buffetpriser WHERE category='BuffetItaly';";
        $results = mysqli_query($db,$query);
        if(!$results){
          die("could not query the database" .mysqli_error());
        }
        while($row = mysqli_fetch_row($results)): ?>
        <div class="buffet_price">
          <div class="buffet_price_info">
            <?= $row[1] ?>
          </div>
          <div class="buffet_price_price">
            <?= $row[2] ?>,-
          </div>
        </div>
        <?php endwhile;?>
      </div>
  </div>
</div>
</div>

<!-- Øko buffet -->
<div id="Øko_buffet">
<div class="bg_dark">
  <div class="container buffet_1">
    <div class="row buffet_odd">
        <div class="six columns">
          <h2>Øko buffet</h2>
          <?php
          $query ="SELECT * FROM buffet WHERE category='BuffetOekologi';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <ul>
            <li> <?= $row[1] ?> </li>
          </ul>
          <?php endwhile;?>
          <div class="buffet_price_overskrift">
            <h2>Priser</h2>
            <p>inkl. fri øl, vin og vand</p>
          </div>
          <?php
          $query ="SELECT * FROM buffetpriser WHERE category='BuffetOekologi';";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          while($row = mysqli_fetch_row($results)): ?>
          <div class="buffet_price">
            <div class="buffet_price_info">
              <?= $row[1] ?>
            </div>
            <div class="buffet_price_price">
              <?= $row[2] ?>,-
            </div>
          </div>
          <?php endwhile;?>
          <!-- Per ekstra time af fri øl, vin og vand pr. person, Kun 50 ,-   -->
        </div>
      <div class="six columns">
        <div class="buffet_placeholder_img_right"></div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Italiensk buffet -->
<div id="BuffetJul">
<div class="container BuffetJul">
  <div class="row buffet_even">
        <div class="six columns">
          <div class="buffet_placeholder_img_left"></div>
        </div>
      <div class="six columns">
        <h2>Jule-Buffet</h2>
        <?php
        $query ="SELECT * FROM buffet WHERE category='BuffetJul';";
        $results = mysqli_query($db,$query);
        if(!$results){
          die("could not query the database" .mysqli_error());
        }
        while($row = mysqli_fetch_row($results)): ?>
        <ul>
          <li> <?= $row[1] ?> </li>
        </ul>
        <?php endwhile;?>
        <div class="buffet_price_overskrift">
          <h2>Priser</h2>
          <p>inkl. fri øl, vin og vand</p>
        </div>
        <?php
        $query ="SELECT * FROM buffetpriser WHERE category='BuffetJul';";
        $results = mysqli_query($db,$query);
        if(!$results){
          die("could not query the database" .mysqli_error());
        }
        while($row = mysqli_fetch_row($results)): ?>
        <div class="buffet_price">
          <div class="buffet_price_info">
            <?= $row[1] ?>
          </div>
          <div class="buffet_price_price">
            <?= $row[2] ?>,-
          </div>
        </div>
        <?php endwhile;?>
      </div>
  </div>
</div>
</div>


</div>
<?php mysqli_close($db);?>
<?php include '../../includes/footer.php'; ?>
</body>
</html>
