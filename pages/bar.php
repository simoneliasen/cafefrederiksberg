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

  $category1 = 'ol_vand';
  $category2 = 'varme drikke';
  $category3 = 'gin';
  $category4 = 'champagne';
  $category5 = 'rom';
  ?>

  <!-- ØL & VAND -->
  <div class="container">
    <div class="row">

      <div class="six columns">
        <h2 class="bar-title"><?= $category1 ?></h2>

        <?php while($row = mysqli_fetch_row($results)):
          if($row[1] == $category1){ ?>
        <div class="bar-item">
          <div class="bar-item-name"><?= $row[2] ?>,-</div>
          <div class="bar-item-price"><?= $row[4] ?>,-</div>
          <div class="bar-item-description"><?= $row[3] ?>,-</div>
        </div>
      <?php }endwhile;?>

      </div>

      <div class="six columns">
        <h2 class="bar-title">VARME DRIKKE</h2>
        <?php while($row = mysqli_fetch_row($results)):
          if($row[1] == $category2){ ?>

        <div class="bar-item">
          <div class="bar-item-name"></div>
          <div class="bar-item-price">  </div>
          <div class="bar-item-description"></div>
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
              /* Counter++ ligger 1 til counter hvergang et element passer med kategorien GIN */
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

  <!-- CHAMPAGNE BEGINS -->
  <div class="container">
    <div class="bar-title">
      <h2>CHAMPAGNE</h2>
      <p>Champagne - Cava - Mousserende</p>
    </div>

      <div class="row">
        <!-- SECTION START: 1 -->
        <div class="six columns">
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Champagne Barons de Rothschild
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              850,-
            </div>
            <div class="bar-item-description">
              Udsøgt finesse. Fin, livlig, delikat, kompleks og alligevel harmonisk.
              En fryd for sanserne.
            </div>
          </div>
          <!-- Item ends -->
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Moet & Chandon Imperial Brut
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              650,-
            </div>
            <div class="bar-item-description">
              En af verdens mest kendte champagner. Blød velafafbalancerede stil.
            </div>
          </div>
          <!-- Item ends -->
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Champagne Barons de Rothschild Extra Brut
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              800,-
            </div>
            <div class="bar-item-description">
              Cuvée der fryder enhver vinelsker, som er på udkig efter renhed og modenhed.
            </div>
          </div>
          <!-- Item ends -->
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Charles Mignon 1. Cru Brut
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              425,- <br>
            </div>
            <div class="bar-item-description">
              Smagen er fokuseret med sprød grøn frugt og fornemmelsen af sommer.
            </div>
          </div>
          <!-- Item ends -->
        </div>
        <!-- SECTION END: 2 -->

        <!-- SECTION STARTS: 2 -->
        <div class="six columns">
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Charles Mignon Rosé 1. Cru Brut
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              450,-
            </div>
            <div class="bar-item-description">
              En herlig frisk rosé Champagne hvor alle druer fra marker, der er klassificeret som 1'er Cru.
            </div>
          </div>
          <!-- Item ends -->
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Mont Marcal Cava Rosada Brut
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              165,-
            </div>
            <div class="bar-item-description">
              Rosé Cava fra mesteren hos Mont Marcal. Intens, liflig og perfekt til at skabe god stemning.
            </div>
          </div>
          <!-- Item ends -->
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Castelblanc Cava Brut
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              165,-
            </div>
            <div class="bar-item-description">
              En forrygende flot Cava med en lækker og lang eftersmag. Et oplagt alternativ til Champagne.
            </div>
          </div>
          <!-- Item ends -->
          <!-- Item starts -->
          <div class="bar-item">
            <div class="bar-item-name">
              Cantessa di Castiglione Asti Spumante DOCG
            </div>
            <div class="bar-item-price">
              Pr. fl. <br>
              150,-
            </div>
            <div class="bar-item-description">
              Sødmefuld og frisk Asti, der byder på noter af honning og citrusfrugter.
            </div>
          </div>
          <!-- Item ends -->
        </div>
        <!-- SECTION ENDS: 2 -->
      </div>
      <!-- row ends -->
  </div>


  <!-- ROM -->
  <div class="bg_dark">
    <div class="container">
      <div class="bar-title">
        <h2>ROM</h2>
        <p>Over 40 lækre rom - spørg bare, vi får løbende!<br>Prisen er for 2 cl</p>
      </div>

        <!-- row begins-->
        <div class="row">
          <!-- SECTION STARTS: 1-->
          <div class="one-third column">
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Havanna 3 Especial
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Havanna 7 Års
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Havanna Maestros
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Zacapa 15 Års
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Zacapa 23 Års
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Zacapa 25 Års
              </div>
              <div class="bar-item-price">
                50,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Matusalem Platino
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Matusalem 15 Års
              </div>
              <div class="bar-item-price">
                30,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                El Dorado 8 Års
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                El Dorado 15 Års
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Kraken
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Chamarel V.S.O.P
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Skotlander Rum V
              </div>
              <div class="bar-item-price">
                65,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Skotlander White
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
          </div>
          <!-- SECTION ENDS: 1 -->


          <!-- SECTION STARTS: 2 -->
          <div class="one-third column">
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Real McCoy 3 Års
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Real McCoy 5 Års
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Real McCoy 12 Års
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Ocumare Blanco
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Ocumare Anejo
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Bacardi Carta Negra
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Bacardi Blanco
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Bacardi Citrus
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Bacardi Razz
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Bacardi Pineapple
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Morgan Spiced
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Morgan Blanco
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Don Papa 7 Års
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Don Papa 10 Års
              </div>
              <div class="bar-item-price">
                30,-
              </div>
            </div>
            <!-- Item ends -->
          </div>
          <!-- SECTION END: 2 -->

          <!-- SECTION STARTS: 3 -->
          <div class="one-third column">
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Puntacana Esplendido
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Quorhum 30 Anni
              </div>
              <div class="bar-item-price">
                45,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Unhiq XO
              </div>
              <div class="bar-item-price">
                50,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Puntacana XOX
              </div>
              <div class="bar-item-price">
                50,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Santiago Anejo
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Santiago 12 Års
              </div>
              <div class="bar-item-price">
                30,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Cubay Carta Blanca
              </div>
              <div class="bar-item-price">
                20,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Cubay Anejo
              </div>
              <div class="bar-item-price">
                25,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Ron Cubay 10 Års
              </div>
              <div class="bar-item-price">
                30,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Alfred's Trail Rum Sauterne Cask
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Alfred's Trail Rum Port Finish
              </div>
              <div class="bar-item-price">
                35,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Fiji Rum South Pacific 10 Års
              </div>
              <div class="bar-item-price">
                40,-
              </div>
            </div>
            <!-- Item ends -->
            <!-- Item starts -->
            <div class="bar-item">
              <div class="bar-item-name">
                Caribean Blended 2004 11 Års
              </div>
              <div class="bar-item-price">
                50,-
              </div>
            </div>
            <!-- Item ends -->
          </div>
          <!-- SECTION END: 3 -->
        </div>
    </div>
  </div>


  <!--Indrag footer fra filen includes/footer.php-->
  <?php include '../includes/footer.php';
    mysqli_close($connection);
  ?>

</body>

</html>
