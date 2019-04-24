<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Side titel  -->
  <title>Admin-dashboard</title>

  <link rel="stylesheet" type="text/css" href="../css/admin.css">
  <link rel="stylesheet" type="text/css" href="../css/normalize.css">
  <!-- Includer Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">

</head>

<body>

  <?php
  //Opretter forbindelse via config.php, og tjekker om du er logget ind via session.php
  include('../session.php');

  $connection = mysqli_connect('localhost', 'root', '', 'admin');

  if(!$connection){
    die("Cannot connect to the database".mysqli_connect_error());
  }

  $query ="SELECT * FROM barmenu;";
  $results = mysqli_query($connection,$query);

  if(!$results){
    die("could not query the database" .mysqli_error());
  }

  $category1 = array("ol_vand", "øl & vand");
  $category2 = array("varme_drikke", "varme drikke");
  $category3 = 'gin';
  $category4 = 'champagne';
  $category5 = 'rom';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }else{
    $id = 0;
  }

  ?>

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="analytics.php">Google analytics</a></li>
    <li><a href="forside.php">Forside</a></li>
    <li><a href="restaurant.php">Restaurant</a></li>
    <li><a href="bar.php" class="active">Bar</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="selskaber.php">Selskaber</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <h1>Bar<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button red" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">
      <h1 class="task_heading">Rediger bar-kortet</h1>
      <p>Tilføj slet og opdater bar-kortet</p>
    </div>
      <hr>

      <div class="task_wrapper">
      <h2 class="task_heading"><?= $category1[1]; ?></h2>

      <?php
      if($id === $category1[0]){
      ?>

        <form class="restaurant_form" method="post" name="post" action="php_process/process_barmenu_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">

          <label for="menu_item_name_input">Navn på drikkevare</label>
          <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
          <br><br>

          <label for="menu_item_name_input">Beskrivelse (valgfri)</label>
          <input name="menu_item_description" type="text" placeholder="Angiv en beskrivelse" maxlength="170" />
          <br><br>

          <label for="menu_item_name_input">Pris</label>
          <input name="menu_item_price"type="text" placeholder="Angiv pris" required maxlength="10" />
          <br><br>

          <a class="button red" href="bar.php">Fortryd</a>
          <input class="button green" type="submit" value="Tilføj">

        </form>
      <?php }else{ ?>
        <form method="post" name="post" action="bar.php?id=<?= $category1[0] ?>" enctype="multipart/form-data">
          <input class="button green" type="submit" value="Tilføj">
        </form>
      <?php } ?>

        <table>
          <tr>
            <th>Indeks</th>
            <th>Pris</th>
            <th>Navn</th>
            <th>Beskrivelse</th>
          </tr>
        <?php

        mysqli_data_seek($results, 0);
        while($row = mysqli_fetch_row($results)):
          if($row[1] == $category1[0]){
            if($id == $row[0]){
              ?>
              <tr id="bar_table">
                <form method="post" name="post" action="php_process/process_barmenu_edit.php?id=<?=$id?>" enctype="multipart/form-data">
                  <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
                  <td class="menu_item_price"><input name="menu_item_price" type="text" value="<?= $row[4] ?>" required maxlength="10" /></td>
                  <td><input name="menu_item_name" type="text" value="<?= $row[2] ?>" required maxlength="100" /></td>
                  <td><input name="menu_item_description" type="text" value="<?= $row[3] ?>" maxlength="170" /></td>
                  <td class="table_buttons">
                    <input class="button green" type="submit" value="Gem">
                    <a class="button grey" href="barmenu.php">Fortryd</a>
                    </input>
                  </td>
                </form>
              </tr>

              <?php
          }else{
        ?>
        <tr>
          <td><div class="menu_item_index"><?= $row[0] ?></div></td>
          <td><div class="menu_item_price"><?= $row[4] ?></div></td>
          <td><div class="menu_item_name"><?= $row[2] ?></div></td>
          <td><div class="menu_item_description"><?= $row[3] ?></div></td>
          <td class="table_buttons">
            <form class="table_buttons" method="post" name="post" action="php_process/process_barmenu_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
            <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
            </form>

            <a href="bar.php?id=<?=$row[0]?>">
              <input class="button grey" type="submit" value="Rediger">
            </a>
          </td>
        </tr>
      <?php

      }
    } endwhile ?>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
      <h2 class="task_heading"><?= $category2[1] ?></h2>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>
        <?php
        mysqli_data_seek($results, 0);
        while($row = mysqli_fetch_row($results)):
          if($row[1] == $category2[0]){
        ?>
        <tr>
          <td><div class="menu_item_index"><?= $row[0] ?></div></td>
          <td><div class="menu_item_price"><?= $row[4] ?></div></td>
          <td><div class="menu_item_name"><?= $row[2] ?></div></td>
          <td><div class="menu_item_description"><?= $row[3] ?></div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button red" href="#">slet</a><a class="button grey" href="#">Rediger</a></div></td>
        </tr>
        <?php }endwhile ?>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
    <h2 class="task_heading"><?= $category3; ?></h2>
    <a class="button green" href="#">Tilføj</a>
    <br><br>
    <table>
      <tr>
        <th>Indeks</th>
        <th>Pris</th>
        <th>Navn</th>
        <th>Beskrivelse</th>
      </tr>
      <?php
      mysqli_data_seek($results, 0);
      while($row = mysqli_fetch_row($results)):
        if($row[1] == $category3){
      ?>
      <tr>
        <td><div class="menu_item_index"><?= $row[0] ?></div></td>
        <td><div class="menu_item_price"><?= $row[4] ?></div></td>
        <td><div class="menu_item_name"><?= $row[2] ?></div></td>
        <td><div class="menu_item_description"><?= $row[3] ?></div></td>
        <td class="table_buttons"><div class="menu_item_button"><a class="button red" href="#">slet</a><a class="button grey" href="#">Rediger</a></div></td>
      </tr>
      <?php } endwhile ?>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
    <h2 class="task_heading"><?= $category4; ?></h2>
    <a class="button green" href="#">Tilføj</a>
    <br><br>
    <table>
      <tr>
        <th>Indeks</th>
        <th>Pris</th>
        <th>Navn</th>
        <th>Beskrivelse</th>
      </tr>
      <?php
      mysqli_data_seek($results, 0);
      while($row = mysqli_fetch_row($results)):
        if($row[1] == $category4){
      ?>
      <tr>
        <td><div class="menu_item_index"><?= $row[0] ?></div></td>
        <td><div class="menu_item_price"><?= $row[4] ?></div></td>
        <td><div class="menu_item_name"><?= $row[2] ?></div></td>
        <td><div class="menu_item_description"><?= $row[3] ?></div></td>
        <td class="table_buttons"><div class="menu_item_button"><a class="button red" href="#">slet</a><a class="button grey" href="#">Rediger</a></div></td>
      </tr>
      <?php } endwhile ?>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
    <h2 class="task_heading"><?= $category5; ?></h2>
    <a class="button green" href="#">Tilføj</a>
    <br><br>
    <table>
      <tr>
        <th>Indeks</th>
        <th>Pris</th>
        <th>Navn</th>
        <th>Beskrivelse</th>
      </tr>
      <?php
      mysqli_data_seek($results, 0);
      while($row = mysqli_fetch_row($results)):
        if($row[1] == $category5){
      ?>
      <tr>
        <td><div class="menu_item_index"><?= $row[0] ?></div></td>
        <td><div class="menu_item_price"><?= $row[4] ?></div></td>
        <td><div class="menu_item_name"><?= $row[2] ?></div></td>
        <td><div class="menu_item_description"><?= $row[3] ?></div></td>
        <td class="table_buttons"><div class="menu_item_button"><a class="button red" href="#">slet</a><a class="button grey" href="#">Rediger</a></div></td>
      </tr>
      <?php } endwhile ?>
      </table>
    </div>

  <div class="spacer" style="height:200px;"></div>
</div>
</div>

</body>

</html>
