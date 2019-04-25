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

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="analytics.php">Google analytics</a></li>
    <li><a href="forside.php">Forside</a></li>
    <li><a href="restaurant.php">Restaurant</a></li>
    <li><a href="bar.php">Bar</a></li>
    <li><a href="events.php">Events</a></li>
    <li><a href="selskaber.php">Selskaber</a></li>
    <li><a href="kontakt.php" class="active">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Kontakt<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button red" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">
      <h1 class="task_heading">Åbningstider</h1>

      <?php
      include('../session.php');

      $query ="SELECT * FROM aabningstider;";
      $results = mysqli_query($db,$query);
      if(!$results){
        die("could not query the database" .mysqli_error());
      }
      ?>

      <table>
        <p><b>Redigér Åbningstider</b></p>
        <tr>
          <th>Indeks</th>
          <th>Ugedag</th>
          <th>Åbningstider</th>
        </tr>

        <?php
        while($row = mysqli_fetch_row($results)):
        if(isset($_GET['id'])){
          $id = $_GET['id'];
            if($id == $row[0]){
              ?>

              <tr id="itm<?= $row[0] ?>">
                <form method="post" name="post" action="php_process/process_aabningstider_edit.php?id=<?=$id?>" enctype="multipart/form-data">
                  <td><input name="id" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
                  <td><input name="date" type="text" value="<?= $row[1] ?>" required maxlength="10" /></td>
                  <td><input name="timeframe" type="text" value="<?= $row[2] ?>" required maxlength="100" /></td>

                  <td class="table_buttons">
                    <input class="button green" type="submit" value="Gem">
                    <a class="button grey" href="kontakt.php#kontakt_table">Fortryd</a>
                    </input>
                  </td>
                </form>

              <?php
            }else{ ?>
              <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td class="table_buttons">
              </tr>
          <?php  }

        }else{ ?>
          <tr id="kontakt_table">
            <td><?= $row[0] ?></td>
            <td><?= $row[1] ?></td>
            <td><?= $row[2] ?></td>
            <td class="table_buttons">
              <form class="table_buttons" method="post" name="post" action="php_process/process_aabningstider_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
              <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
              </form>

              <a href="kontakt.php?id=<?=$row[0]?>#itm<?= $row[0] ?>">
                <input class="button grey" type="submit" value="Rediger">
              </a>
            </td>
          </tr>

        <?php } endwhile; mysqli_close($db); ?>
        </table>


      </div>





  </div>
  <div class="spacer" style="height:200px;"></div>
</div>
</div>

</body>
</html>
