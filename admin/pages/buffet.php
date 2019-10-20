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
  <?php include('../session.php'); ?>
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
        <form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_add.php" enctype="multipart/form-data">
          <label>Buffet Navn</label>
          <input name="b_name" type="text" placeholder="Angiv Buffetnavn" required maxlength="100" />
          <br><br>
          <label>Buffet Billede</label>
          <input type="file" name="fileToUpload" id="fileToUpload" width='150px' height='150px' required>
          <br><br>
          <input class="button red"   type="reset"  value="Fortryd">
          <input class="button green" type="submit" value="Gem">
        </form>
      </div>
      <hr>
      <div class="task_wrapper">
    <?php

      $buffetCounter = 1;

      function buffetOverskrift(){
        global $buffetCounter;
        global $db;
        $query = "SELECT buffetName FROM buffet WHERE id = $buffetCounter;";
        $results = mysqli_query($db, $query);
        $overskrift = $results->fetch_assoc();
        return $overskrift['buffetName'];
      }


      function buffetImageChecker($index){

        $files = glob('../../img/buffet_files/*');
        $path = '../../img/buffet_files/' ;
        $fileName = '../../img/buffet_files/Buffet' . $index . '.';

        if(file_exists($fileName . 'jpg' ) or file_exists($fileName . 'jpeg') or file_exists($fileName . 'png')){
          return true;
        }
      }


      //finder max for buffeter
      $query = "SELECT MAX(id) FROM buffet;";
      $buffetMax = mysqli_fetch_row(mysqli_query($db, $query));

      //tjekker om der er forbindelse til databasen
      // if (!$results) {
      //   die("could not query the database");
      // }

      //checker om php har registreret et ID (hvis brugeren har klikket rediger)
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
      } else {
        $id = 0;
      }

      while($buffetCounter <= $buffetMax[0]) :
        ?>
        <table>
        <h2 class="task_heading" id="section_<?= $buffetCounter ?>"><?=buffetOverskrift()?></h2>

        <?php
          $query = "SELECT * FROM buffetItems WHERE buffetNumber = $buffetCounter";
          $results = mysqli_query($db, $query);
          while ($row = mysqli_fetch_row($results)) :
            if($id != $row[0]):
            ?>
            <!-- Table for content der ikke er valgt-->
            <tr>
              <td><div class="menu_item_index"><?= $row[1] ?></div></td>
              <td><div class="menu_item_name"><?= $row[2] ?></div></td>

              <td class="table_buttons">
                <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?= $row[0] ?>" enctype="multipart/form-data">
                <input type="hidden" name="hidden_section" value="<?= $row[1] ?>">
                  <input id="<?= $row[0] ?>" class="button red" type="submit" value="Slet">
                </form>
                <a href="buffet.php?id=<?= $row[0] ?>#section_<?= $row[1] ?>">
                  <input class="button grey" type="submit" value="Rediger">
                </a>
              </td>
            </tr>
            <?php
            endif;
            if($id == $row[0]):
              ?>
              <tr>
                <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?= $id ?>" enctype="multipart/form-data">
                  <td><input name="menu_item_index" type="text" value="<?= $row[1] ?>" required maxlength="10" /></td>
                  <td><input name="menu_item_name" type="text" value="<?= $row[2] ?>" required maxlength="100" /></td>
                  <input type="hidden" name="hidden_section" value="<?= $row[1] ?>">
                  <input type="hidden" name="buffetNumber" value="<?= $buffetCounter ?>">
                  <td class="table_buttons">
                    <input class="button green" type="submit" value="Gem">
                    <a class="button grey" href="buffet.php#section_<?= $row[1] ?>">Fortryd</a>
                    </input>
                  </td>
                </form>
              </tr>
              <?php
            endif;
          endwhile;

          ?>

          <?php
          $query = "SELECT buffetNumber FROM buffetpriser WHERE buffetNumber = $buffetCounter";
          $priserChecker = mysqli_query($db, $query);
          if (mysqli_num_rows($priserChecker)!==0) :
            ?>
            <tr>
              <form method="post" name="post" action="php_process/process_buffetItem_add.php?id=<?= $buffetCounter ?>" enctype="multipart/form-data">
                <td><div class="menu_item_index">+</td>
                <td>
                  <input name="buffetItem_add" type="text" placeholder="Tilføj til Buffet" required maxlength="100" />
                </td>
                <td class="table_buttons">
                  <input type="hidden" name="hidden_section" value="<?= $row[1] ?>">
                  <input id="<?= $row[0] ?>" class="button green" type="submit" value="Tilføj">
                </td>
              </form>
            </tr>
            </table>
            <p><b>Priser:</b></p>
            <table>
            <?php
            $query = "SELECT * FROM buffetpriser WHERE buffetNumber = $buffetCounter";
            $results = mysqli_query($db, $query);
            while ($row = mysqli_fetch_row($results)) :

              ?>

                <tr>
                  <td><div class="menu_item_index"><?= $row[1] ?></div></td>
                  <td><div class="menu_item_name"><?= $row[2] ?></div></td>
                  <td><div class="menu_item_name"><?= $row[3] ?></div></td>

                  <td class="table_buttons">
                    <form class="table_buttons" method="post" name="post" action="php_process/process_buffetPrice_delete.php?id=<?= $row[0] ?>" enctype="multipart/form-data">
                    <input type="hidden" name="hidden_section" value="<?= $row[1] ?>">
                      <input id="<?= $row[0] ?>" class="button red" type="submit" value="Slet">
                    </form>
                  </td>
                </tr>


              <?php
            endwhile;
            ?>
            <tr>
              <form method="post" name="post" action="php_process/process_buffetPrice_add.php?id=<?= $buffetCounter ?>" enctype="multipart/form-data">
                <td><div class="menu_item_index">+</td>
                <td><input name="buffetDesc_add" type="text" placeholder="Tilføj beskrivelse" required maxlength="100" /></td>
                <td><input name="buffetPrice_add" type="text" placeholder="Tilføj pris" required maxlength="100" /></td>
                <td class="table_buttons">
                  <input type="hidden" name="hidden_section" value="<?= $row[1] ?>">
                  <input id="<?= $row[0] ?>" class="button green" type="submit" value="Tilføj">
                </td>
              </form>
            </tr>
          </table>
          <?php
          endif;
          if(buffetImageChecker($buffetCounter)) : ?>

          <div id="billedeupload">
            <?php

              $buffetImageFilePath = glob("../../img/buffet_files/" . 'Buffet' . $buffetCounter . ".*");
            ?>
            <p><strong>Buffet billede:</strong></p>
            <img src="<?= $buffetImageFilePath[0]; ?>" id="logo" height="100px">
            <br><br>

            <!-- Set action to be process_buffet_upload_img.php and write the logic for it -->
            <form method="post" name="post" action="php_process/process_buffet_upload_img.php" enctype="multipart/form-data">
              <input type="file" name="fileToUpload" id="fileToUpload" width='150px' height='150px'>
              <input type="hidden" name="buffetNumber" id="buffetNumber" value="<?= $buffetCounter ?>">
              <input type="hidden" name="hidden_section" value="<?= $row[0] ?>">
              <input class="button green" type="submit" value="Upload">
            </form>
            <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_deletebuffet.php?id=<?= $buffetCounter ?>" enctype="multipart/form-data" style ="float:right;">
              <input id="<?= $buffetCounter ?>" class="button red" type="submit" value="SLET BUFFET">
            </form>
          </div>

        <hr>
        <br><br><br>
        <?php
        endif;
        $buffetCounter++;
      endwhile;

    ?>

    </div>
    <div class="spacer" style="height: 0px;"></div>
  </div>

<style>
  hr {
    height: 1px;
  }
  </style>
</body>

</html>
