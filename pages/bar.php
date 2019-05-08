<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vi har noget til enhver smag, billige Fyraftensøl, whiskey, gin, champagne, rom, irish coffee alt hvad hjertet og halsen begærer, skål!"/>
  <link rel="icon" type="image/png" href="img/favicon.ico">

  <!--Side titel  -->
  <title>Café Frederiksberg</title>
  <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="../css/skeleton.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
  <?php
  include '../includes/announcement.php';  ?>

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
    <a href="/cafefrederiksberg/pages/bar.php" class="active nav">Barkort</a>
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
    <!--Om os dropdown  -->
    <div class="dropdown">
      <a href="/cafefrederiksberg/pages/tidslinje.php">Om os<i class="arrowdown"></i></a>
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

      <?php
  include '../includes/header.php';
  // Connects to database
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

  <!-- ØL & VAND -->
  <div class="container">
    <div class="row">

      <div class="six columns">
        <h2 class="bar-title"><?= $category1[1] ?></h2>

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
        <h2 class="bar-title"><?= $category2[1] ?></h2>
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
