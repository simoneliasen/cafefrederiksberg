<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vi har noget til enhver smag, billige Fyraftensøl, whiskey, gin, champagne, rom, irish coffee alt hvad hjertet og halsen begærer, skål!"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Poppins" rel="stylesheet">
</head>
<body>

  <!-- Mobil navigation -->
    <div class="container">
    <div class="mobilenav">
      <span onclick="openNav()"><img src="./../img/hamburger.svg" id="hamburger" width="21px" height="auto"></span>
        <a href="./index.php">
          <img src="./../img/logo.svg" id="fredelogo" alt="Café frederiksberg logo" width="150rem" color="white" height="auto">
        </a>
    </div>
    </div>

    <?php // Tilføjer mulighed for announcementbar
    include '../includes/announcement.php'; ?>

  <!--Sidebar mobil  -->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="./index.php">Forside</a>
      <a href="./pages/restaurant.php">Menukort</a>
      <a href="./pages/bar.php" class="active">Barkort</a>
      <a href="./pages/events.php">Events</a>
      <a href="./pages/selskaber.php">Selskaber<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/selskaber/buffet.php" id="dropdown">Buffet</a>
      <a href="./pages/selskaber/arrangementer.php" id="dropdown">Arrangementer</a>
      <a href="./pages/selskaber/selskabsmenu.php" id="dropdown">Selskabsmenu</a>
      <a href="./pages/tidslinje.php">Om os<i class="arrowdown" width="2px"></i></a>
      <a href="./pages/kontakt.php" id="dropdown">Kontakt</a>
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
        <a href="./index.php"><img src="./../img/logo.svg" id="logo" alt="Café frederiksberg logo" width="150rem" height="auto"></a>
      </div>
        <div class="navigationmenu">
        <a href="./pages/restaurant.php">Menukort</a>
        <a href="./pages/bar.php" class="active">Barkort</a>
        <a href="./pages/events.php">Events</a>
          <div class="dropdown">
            <a href="./pages/selskaber.php">Selskaber<i class="arrowdown"></i></a>
            <div class="dropdown-content">
            <a href="./pages/selskaber/buffet.php">Buffet</a>
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
    // Tilføj sort baggrund ved scroll
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

<?php
  // Indsætter video/billede slider
  include '../includes/header.php';
  // Opretter forbindelse til database
  include '../admin/config.php';

  $query ="SELECT * FROM barmenu";
  $results = mysqli_query($db,$query);
  if(!$results){
    die("could not query the database" .mysqli_error());
  }

  $category1 = array('ol_vand','øl & vand');
  $category2 = array('varme_drikke','varme drikke');
  $category3 = 'gin';
  $category4 = 'champagne';
  $category5 = 'rom';
  ?>

  <!-- ØL -->
  <div class="container">
    <div class="row">

     <div class="six columns">
       <div class="bar-title">
         <h2>ØL</h2>
         <!-- <p>VI SERVERE ALLE DE BEDSTE ØL FRA HELE VERDENEN</p> -->
       </div>

        <?php while($row = mysqli_fetch_row($results)):
          if($row[1] == $category1[0]){ ?>
       <div class="bar-item">
          <div class="bar-item-name"><?= $row[2] ?></div>
          <div class="bar-item-price"><?= $row[4] ?>,-</div>
          <div class="bar-item-description"><?= $row[3] ?></div>
        </div>
      <?php }endwhile;?>

      </div>

      <div class="six columns">
        <div class="bar-title">
          <h2>VIN</h2>
          <!-- <p>OM DET ER HVID, RØD ELLER FRANSK <br>SÅ HAR VI NOK NOGET TIL DIN SMAG</p> -->
        </div>
        <?php
        mysqli_data_seek($results, 0);
        while($row = mysqli_fetch_row($results)):
          if($row[1] == $category2[0]){
        ?>
       <div class="bar-item">
          <div class="bar-item-name"><?= $row[2] ?></div>
          <div class="bar-item-price"><?= $row[4] ?>,-</div>
          <div class="bar-item-description"><?= $row[3] ?></div>
        </div>
        <?php }endwhile;?>
     </div>
    </div>
  </div>

<div class="bg_dark">
  <div class="container">
    <div class="bar-title">
      <h2>GIN</h2>
      <p>Aalborgs bedste Ginkort med over 40 lækre gins <br>Prisen er for 2 cl</p>
    </div>

    <div class="row">
      <?php
        /* For at kunne "fetch_row", skal pointeren i sql sættes til at starte ved 0 */
        mysqli_data_seek($results, 0);
        /* counter tæller til 3. Hvis counter = 3, skal der indsættes nyt row */
        /* På denne måde, er der lige mange drinks i hver column på hjemmesiden */
        $counter = 0;
        while($row = mysqli_fetch_row($results)):
          /* hvis $row[1] = den rigtige kategori (her: GIN), skal dataen indsættes */
          if($row[1]==$category3){
            /* Counter++ ligger 1 til counter hver gang et element passer med kategorien GIN */
            $counter++;
      ?>
      <div class="one-third column">
        <div class="bar-item">
          <div class="bar-item-name"><?= $row[2] ?></div>
          <div class="bar-item-price"><?= $row[4] ?>,-</div>
        </div>
      </div>

      <?php
        /* hvis counter = 3, skal der indættes nyt row */
        if($counter == 3){
          $counter = 0;
      ?>
      </div>
      <div class="row">
      <?php
        }
      } endwhile;
      ?>
    </div>
  </div>
</div>


<div class="container">
  <div class="bar-title">
    <h2>CHAMPAGNE</h2>
    <p>Champagne - Cava - Mousserende</p>
  </div>

  <div class="row">
    <?php
      /* For at kunne "fetch_row", skal pointeren i sql sættes til at starte ved 0 */
      mysqli_data_seek($results, 0);
      /* counter tæller til 3. Hvis counter = 3, skal der indsættes nyt row */
      /* På denne måde, er der lige mange drinks i hver column på hjemmesiden */
      $counter = 0;
      while($row = mysqli_fetch_row($results)):
        /* hvis $row[1] = den rigtige kategori (her: GIN), skal dataen indsættes */
        if($row[1]==$category4){
          /* Counter++ ligger 1 til counter hver gang et element passer med kategorien GIN */
          $counter++;
    ?>
    <div class="one-half column">
      <div class="bar-item">
        <div class="bar-item-name"><?= $row[2] ?></div>
        <div class="bar-item-price">pr. fl. <?= $row[4] ?>,-</div>
        <div class="bar-item-description"><?= $row[3] ?></div>
      </div>
    </div>

    <?php
      /* hvis counter = 3, skal der indættes nyt row */
      if($counter == 2){
        $counter = 0;
    ?>
    </div>
    <div class="row">
    <?php
      }
    } endwhile;
    ?>
  </div>
</div>

<!-- ROM -->
<div class="bg_dark">
  <div class="container">
    <div class="bar-title">
      <h2>ROM</h2>
      <p>Over 40 lækre rom - spørg bare, vi får løbende!<br>Prisen er for 2 cl</p>
    </div>

    <div class="row">
      <?php
        /* For at kunne "fetch_row", skal pointeren i sql sættes til at starte ved 0 */
        mysqli_data_seek($results, 0);
        /* counter tæller til 3. Hvis counter = 3, skal der indsættes nyt row */
        /* På denne måde, er der lige mange drinks i hver column på hjemmesiden */
        $counter = 0;
        while($row = mysqli_fetch_row($results)):
          /* hvis $row[1] = den rigtige kategori (her: GIN), skal dataen indsættes */
          if($row[1]==$category5){
            /* Counter++ ligger 1 til counter hver gang et element passer med kategorien GIN */
            $counter++;
      ?>
      <div class="one-third column">
        <div class="bar-item">
          <div class="bar-item-name"><?= $row[2] ?></div>
          <div class="bar-item-price"><?= $row[4] ?>,-</div>
        </div>
      </div>

      <?php
        /* hvis counter = 3, skal der indættes nyt row */
        if($counter == 3){
          $counter = 0;
      ?>
      </div>
      <div class="row">
      <?php
        }
      } endwhile;
      ?>
    </div>
  </div>
</div>


  <!--Indrag footer fra filen includes/footer.php-->
  <?php include '../includes/footer.php'; ?>

</body>

</html>
