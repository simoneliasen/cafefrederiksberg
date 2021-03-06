<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin-dashboard</title>
  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
</head>

<body>

  <!--Logo  -->
  <div class="logo">
    <img src="../../img/logo.svg" id="logo" width="100%">
  </div>

  <!--Navigationsbar  -->
  <div class="nav">
    <ul>
      <li><a href="analytics.php">Google analytics</a></li>
      <li><a href="generelt.php">Generelt</a></li>
      <li><a href="restaurant.php">Menukort</a></li>
      <li><a href="bar.php">Barkort</a></li>
      <li><a href="selskabsmenu.php">Selskabsmenu</a></li>
      <li><a href="buffet.php" class="active">Buffet</a></li>
      <li><a href="kontakt.php">Kontakt</a></li>
      <li id="backtopage"><a href="../backtopage.php" style="color: #CCB380;"> Tilbage til siden </a></li>
    </ul>
  </div>

  <div class="container">
    <div class="content">
      <div class="heading">
        <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
        <h1>Buffet<span style="font-weight: 400;"></span></h1>
        <div class="logout">
          <a class="button red" href="../logout.php">log ud</a>
        </div>
      </div>

      <div class="task_wrapper">
        <h1 class="task_heading">Tilføj ny Buffet</h1>
        <form class="restaurant_form" method="post" name="post" action="php_process/process_menu_add.php" enctype="multipart/form-data">
          <label>Buffet Navn</label>
          <input name="b_name" type="text" placeholder="Angiv Buffetnavn" required maxlength="100" />
          <br><br>
          <label>Buffet Billede</label>
          <input type="file" name="fileToUpload" id="fileToUpload" width='150px' height='150px'>
          <br><br>
          <input class="button red"   type="reset"  value="Fortryd">
          <input class="button green" type="submit" value="Gem">
        </form>
      </div>
      <hr>

      <?php // Tjekker om du er logget ind + opretter forbindelse til database
      include('../session.php');
      ?>


      <?php
      //test
      $query = "SELECT * FROM buffet;";
      $results = mysqli_query($db, $query);
      while ($row = mysqli_fetch_row($results)) :
      ?>
        <p><?= $row[1] ?>
      <?php endwhile;

      // Collect data related to buffets
      $query = "SELECT * FROM buffet;";
      $results = mysqli_query($db, $query);
      if (!$results) {
        die("could not query the database");
      }
      $buffetCounter = 0;

      function buffet($input){
        global $buffetCounter;
        global $db;
        if($input == "overskrift"){
          $query = "SELECT buffetName FROM buffet WHERE id = $buffetCounter;";
          $results = mysqli_query($db, $query);
          $overskrift = $results->fetch_assoc();
          return $overskrift['buffetName'];
          echo "hej";
        }elseif($input == "id"){
          $query = "SELECT id FROM buffet WHERE id = $buffetCounter;";
          $results = mysqli_query($db, $query);
          $id = $results->fetch_assoc();
          return $id['id'];
        }
      }

      // Return amount of of Buffets, so we can create limit to while loop
      $query = "SELECT MAX(id) FROM buffet;";
      $buffetMax = mysqli_fetch_row(mysqli_query($db, $query));
      if (!$results) {
        die("could not query the database");
      }

      $query = "SELECT id FROM buffet;";
      $buffetMax = mysqli_fetch_row(mysqli_query($db, $query));
      if (!$results) {
        die("could not query the database");
      }

      while ($buffetCounter < $buffetMax[0]){
        echo "hej";
      }
      //Hvad er det her?
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
      } else {
        $id = 0;
      }
      //Buffetnumber initialized, prints all buffetsitems and then increments
      //set to 1 as count in db starts at 1

      while ($buffetCounter < $buffetMax[0]) :

        $buffetAdjustForZeroArrays = $buffetCounter+ 1;
        $buffetImageFilePath = glob("../../img/buffet_files/" . 'Buffet' . $buffetAdjustForZeroArrays . ".*");
        ?>

        <!-- Giver os et div med buffetnavn fra db, og en heading med pænt buffetnavn -->
        <div class="task_wrapper" id="category_<?= buffet("overskrift") ?>">
          <h2 class="task_heading"><?= buffet("overskrift") ?></h2>

          <!-- Hvis der trykkes "tilføj"-->
          <h2><?php buffet(1); ?></h2>
          <?php if ($id === buffet("id")) { ?>
            <form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?= $_GET['id'] ?>" enctype="multipart/form-data">
              <label for="menu_item_name_input">Navn på ret</label>
              <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
              <br><br>
              <a class="button red" href="buffet.php?#category_<?= $categories[$buffetNumber][0] ?>">Fortryd</a>
              <input class="button green" type="submit" value="Tilføj">
              <input type="hidden" name="hidden_category" value="<?= $categories[$buffetNumber][1] ?>">
              <input type="hidden" name="category" value="<?= $categories[$buffetNumber][0] ?>">
              <input type="hidden" name="buffetNumber" value="<?= $buffetNumber ?>">
            </form>


          <?php } else { ?>
            <form method="post" name="post" action="buffet.php?id=<?= $categories[$buffetNumber][0] ?>#category_<?= $categories[$buffetNumber][0] ?>" enctype="multipart/form-data">
              <input class="button green" type="submit" value="Tilføj">
            </form>
          <?php } ?>

          <table>
            <tr>
              <th>Indeks</th>
              <th>Navn</th>
            </tr>

            <!-- Print så længe at der er elementer i række med buffetnummer/navn -->
            <?php
              // mysqli_data_seek($results, 0);
              while ($row = mysqli_fetch_row($results)) :
                if ($row[0] == buffet("id")) {
                  if ($id == $row[0]) {
                    ?>

                  <tr>
                    <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?= $id ?>" enctype="multipart/form-data">
                      <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
                      <td><input name="menu_item_name" type="text" value="<?= $row[3] ?>" required maxlength="100" /></td>
                      <input type="hidden" name="hidden_category" value="<?= $categories[$buffetNumber][0] ?>">
                      <input type="hidden" name="buffetNumber" value="<?= $buffetNumber ?>">
                      <td class="table_buttons">
                        <input class="button green" type="submit" value="Gem">
                        <a class="button grey" href="buffet.php#category_<?= $categories[$buffetNumber][0] ?>">Fortryd</a>
                        </input>
                      </td>
                    </form>
                  </tr>

                  <!-- If no button is pressed display elements able to be pressed -->
                <?php } elseif ($id === 0) { ?>
                  <tr>
                    <td>
                      <div class="menu_item_index"><?= $row[0] ?></div>
                    </td>
                    <td>
                      <div class="menu_item_name"><?= $row[3] ?></div>
                    </td>
                    <td class="table_buttons">
                      <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?= $row[0] ?>" enctype="multipart/form-data">
                      <input type="hidden" name="hidden_category" value="<?= $categories[$buffetNumber][0] ?>">
                        <input id="<?= $row[0] ?>" class="button red" type="submit" value="Slet">
                      </form>
                      <a href="buffet.php?id=<?= $row[0] ?>#category_<?= $categories[$buffetNumber][0] ?>">
                        <input class="button grey" type="submit" value="Rediger">
                      </a>
                    </td>
                  </tr>

                  <!--Print resterende elementer for buffet når rediger knap trykkes -->
                <?php } else { ?>
                  <tr>
                    <td>
                      <div class="menu_item_index"><?= $row[0] ?></div>
                    </td>
                    <td>
                      <div class="menu_item_name"><?= $row[3] ?></div>
                    </td>
                    <td class="table_buttons"></td>
                  </tr>
            <?php }
                }
              endwhile; ?>
          </table>
        </div>


        <!-- Visning af billede thumbnails -->
        <div class="task_wrapper" id="billedeupload">
          <h3> Billede til <?php echo (buffet("id")) ?></h3>
          <!-- Sql variabler har fået 2 tilføjet, så de ikke forstyrre andre queries i dette dokument -->
          <?php
            $query2 = "SELECT img FROM buffet WHERE buffetNumber = $buffetCounter + 1 AND img != '' LIMIT 1";
            $results2 = mysqli_query($db, $query2);
            while ($row2 = mysqli_fetch_row($results2)) :
              ?>
            <p><strong>Nuværende billeder:</strong></p>
            <td><img src="<?= $buffetImageFilePath[0]; ?>" id="logo" height="100px"></td>

          <?php
            endwhile;
            ?>
          <table>
            <?php while ($row2 = mysqli_fetch_row($results2)) : ?>
              <tr>
                <td><?= $row2[2] ?></td>
                <td><img src="../../header_slide/<?= $row2[2] ?>" id="logo" height="100px"></td>
              </tr>
            <?php endwhile; ?>
          </table>
          <br><br>

          <!-- Set action to be process_buffet_upload_img.php and write the logic for it -->
          <form method="post" name="post" action="php_process/process_buffet_upload_img.php" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload" width='150px' height='150px'>
            <input type="hidden" name="buffetNumber" id="buffetNumber" value="<?= $buffetNumber ?>">
            <input type="hidden" name="hidden_category" value="<?= $categories[$buffetNumber][0] ?>">
            <input class="button green" type="submit" value="Upload">
          </form>
        </div>

        <hr>
      <?php
        $buffetCounter++;

      endwhile;
      ?>

      <div class="spacer" style="height:200px;"></div>
    </div>
  </div>



</body>

</html>
