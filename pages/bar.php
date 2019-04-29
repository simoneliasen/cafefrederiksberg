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
  include '../includes/announcement.php';
  include '../includes/navigation.php';
  include '../includes/header.php';
  ?>

  <?php
  $connection = mysqli_connect('localhost', 'root', '', 'admin');
  if(!$connection){
    die("Cannot connect to the database".mysqli_connect_error());
  }

  $query ="SELECT * FROM barmenu";
  $results = mysqli_query($connection,$query);
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
