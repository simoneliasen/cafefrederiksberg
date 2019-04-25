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
  <!--Inddrager navigationsbar fra "includes/navigation.php"-->
  <?php include '../../includes/navigation.php'; ?>
  <!--Slider (behøver ikke container, da den skal have 100% bredde) -->
  <?php include '../../includes/header.php'; ?>

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
          <h2 class="menu_kort_overskrift">Foretter</h2>

          <div class="menu_item" style="margin-top: 2rem;">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description">En beskrivende text til retten</div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">hovedretter</h2>

          <div class="menu_item" style="margin-top: 2rem;">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description">En beskrivende text til retten</div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Desserter</h2>

          <div class="menu_item" style="margin-top: 2rem;">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description">En beskrivende text til retten</div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <h2 class="menu_kort_overskrift" style="margin-top: 6rem;">Natmad</h2>

          <div class="menu_item" style="margin-top: 2rem;">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description">En beskrivende text til retten</div>
          </div>

          <div class="menu_item">
            <div class="menu_item_name">Rejecocktail</div>
            <div class="menu_item_price">45,-</div>
            <div class="menu_item_description"></div>
          </div>

          <p class="menu_allergener" style="margin-top:6rem; text-align: center;">*Gæster kan få oplysninger om allergerner ved at henvende sig til personalet</p>
          <div class="menu_kontrolrapport">
            <p>Se vores kontrolrapport: </p>
            <a href="https://www.findsmiley.dk/25727" target="_blank">
              <img src="img/kontrolrapport.jpeg" width="80px;" border="0">
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>




    <?php
    include '../../includes/footer.php'; ?>
</body>

</html>
