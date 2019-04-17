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

$query ="SELECT * FROM menu";
$results = mysqli_query($connection,$query);

if(!$results){
  die("could not query the database" .mysqli_error());
}

?>

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="analytics.php">Google analytics</a></li>
    <li><a href="forside.php">Forside</a></li>
    <li><a href="restaurant.php" class="active">Restaurant</a></li>
    <li><a href="bar.php">Bar</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="selskaber.php">Selskaber</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Forside<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button red" href="../logout.php">log ud</a>
      </div>
    </div>



    <div class="task_wrapper">
      <h1 class="task_heading">Rediger menu-kortet</h1>

      <p><b>Tilføj ret til menuen</b></p>
      <form method="post" name="post" action="php_process/process_menu_input.php" enctype="multipart/form-data">

        <label for="menu_item_name_input">Navn på ret</label>
        <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
        <br><br>


        <label for="menu_item_name_input">Beskrivelse (valgfri)</label>
        <input name="menu_item_description" type="text" placeholder="Angiv en beskrivelse" maxlength="170" />
        <br><br>

        <label for="menu_item_name_input">Pris</label>
        <input name="menu_item_price"type="text" placeholder="Angiv pris" required maxlength="10" />
        <br><br>

        <input class="button red" type="reset" value="Fortryd">
        <input class="button green" type="submit" value="Tilføj">


      </form>

      <hr>

      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>

        <?php
        $id =$_GET['id'];

        while($row = mysqli_fetch_row($results)):
          if($id == $row[0]){

        ?>

        <tr id="itm<?= $row[0] ?>">
          <form method="post" name="post" action="php_process/process_menu_edit.php?id=<?=$id?>" enctype="multipart/form-data">

          <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>

          <td class="menu_item_price"><input name="menu_item_price" type="text" value="<?= $row[3] ?>" required maxlength="10" /></td>

          <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>

          <td><input name="menu_item_description" type="text" value="<?= $row[2] ?>" maxlength="170" /></td>

          <td class="table_buttons">

            <input class="button green" type="submit" value="Gem">

            <a href="restaurant.php">
              <input id="<?=$row[0]?>" class="button grey" type="reset" value="Fortryd">
            </a>

          </td>
        </form>
      <?php }else{ ?>

        <tr>
          <td><?= $row[0] ?></td>
          <td><?= $row[3] ?></td>
          <td><?= $row[1] ?></td>
          <td><?= $row[2] ?></td>
          <td class="table_buttons">

            <a href="restaurant.php?id=<?=$row[0]?>#itm<?= $row[0] ?>">
              <input class="button grey" type="submit" value="Rediger">
            </a>

            <form class="table_buttons" method="post" name="post" action="php_process/process_menu_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
              <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
            </form>

          </td>
        </tr>
      <?php } endwhile; mysqli_close($connection); ?>
      </table>


    </div>
    <div style="width:100px; margin:auto; padding-top: 2rem;">
      <a class="button grey" href="restaurant.php">Tilbage</a>
    </div>
    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
