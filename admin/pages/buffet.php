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
  // Tjekker om du er logget ind + opretter forbindelse til database
  include('../session.php');

  $query ="SELECT * FROM buffet;";
  $results = mysqli_query($db,$query);
  if(!$results){
    die("could not query the database" .mysqli_error());
  }

    $category1 = array("Buffet1", "Buffet 1");
    $category2 = array("Buffet2", "Buffet 2");
    $category3 = array("Buffet3", "Buffet 3");
    $category4 = array("Buffet4", "Buffet 4");
    $category5 = array("BuffetUSA", "USA Buffet");
    $category6 = array("BuffetItaly", "Italiensk Buffet");
    $category7 = array("BuffetOekologi", "Økologisk Buffet");
    $category8 = array("BuffetJul", "Julefrokost");

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
    <li><a href="bar.php">Bar</a></li>
    <li><a href="selskabsmenu.php">Selskabsmenu</a></li>
    <li><a href="buffet.php" class="active">Buffet</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
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
      <h1 class="task_heading">Rediger Buffet</h1>
      <p>Tilføj slet og opdater Buffeter</p>
    </div>
    <hr>

<!--BUFFET 1  -->
    <div class="task_wrapper" id="category_<?= $category1[0] ?>">
    <h2 class="task_heading"><?= $category1[1]; ?></h2>

    <?php if($id === $category1[0]){ ?>

    <form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
      <label for="menu_item_name_input">Navn på ret</label>
      <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
      <br><br>
      <a class="button red" href="buffet.php?#category_<?=$category1[0]?>">Fortryd</a>
      <input class="button green" type="submit" value="Tilføj">
      <input type="hidden" name="hidden_category" value="<?= $category1[0] ?>">
    </form>

    <?php }else{ ?>

    <form method="post" name="post" action="buffet.php?id=<?= $category1[0] ?>#category_<?=$category1[0]?>" enctype="multipart/form-data">
      <input class="button green" type="submit" value="Tilføj">
    </form>

    <?php } ?>

    <table>
      <tr>
        <th>Indeks</th>
        <th>Navn</th>
      </tr>

      <?php
      mysqli_data_seek($results, 0);
      while($row = mysqli_fetch_row($results)):
        // Ændret fra 1 til 2 (Gjorde at man kunne se database (kategorier))
        if($row[2] == $category1[0]){
          if($id == $row[0]){
      ?>

      <tr>
        <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
          <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
          <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
          <input type="hidden" name="hidden_category" value="<?= $category1[0] ?>">
          <td class="table_buttons">
            <input class="button green" type="submit" value="Gem">
            <a class="button grey" href="buffet.php#category_<?=$category1[0]?>">Fortryd</a>
            </input>
          </td>
        </form>
      </tr>

      <?php }elseif($id === 0){ ?>
      <tr>
        <td><div class="menu_item_index"><?= $row[0] ?></div></td>
        <td><div class="menu_item_name"><?= $row[1] ?></div></td>
        <td class="table_buttons">
          <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
            <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
          </form>
          <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category1[0]?>">
            <input class="button grey" type="submit" value="Rediger">
          </a>
        </td>
      </tr>

      <?php }else{ ?>
      <tr>
        <td><div class="menu_item_index"><?= $row[0] ?></div></td>
        <td><div class="menu_item_name"><?= $row[1] ?></div></td>
        <td class="table_buttons"></td>
      </tr>
      <?php } } endwhile; ?>
    </table>
  </div>

  <hr>

<!--BUFFET 2 -->
  <div class="task_wrapper" id="category_<?= $category2[0] ?>">
  <h2 class="task_heading"><?= $category2[1]; ?></h2>

  <?php if($id === $category2[0]){ ?>

  <form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
    <label for="menu_item_name_input">Navn på drikkevare</label>
    <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
    <br><br>
    <a class="button red" href="buffet.php?#category_<?=$category2[0]?>">Fortryd</a>
    <input class="button green" type="submit" value="Tilføj">
    <input type="hidden" name="hidden_category" value="<?= $category2[0] ?>">
  </form>

  <?php }else{ ?>

  <form method="post" name="post" action="buffet.php?id=<?= $category2[0] ?>#category_<?=$category2[0]?>" enctype="multipart/form-data">
    <input class="button green" type="submit" value="Tilføj">
  </form>

  <?php } ?>

  <table>
    <tr>
      <th>Indeks</th>
      <th>Navn</th>
    </tr>

    <?php
    mysqli_data_seek($results, 0);
    while($row = mysqli_fetch_row($results)):
      if($row[2] == $category2[0]){
        if($id == $row[0]){
    ?>

    <tr>
      <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
        <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
        <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
        <input type="hidden" name="hidden_category" value="<?= $category2[0] ?>">
        <td class="table_buttons">
          <input class="button green" type="submit" value="Gem">
          <a class="button grey" href="buffet.php#category_<?=$category2[0]?>">Fortryd</a>
          </input>
        </td>
      </form>
    </tr>

    <?php }elseif($id === 0){ ?>

    <tr>
      <td><div class="menu_item_index"><?= $row[0] ?></div></td>
      <td><div class="menu_item_name"><?= $row[1] ?></div></td>
      <td class="table_buttons">
        <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
          <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
        </form>
        <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category2[0]?>">
          <input class="button grey" type="submit" value="Rediger">
        </a>
      </td>
    </tr>

    <?php }else{ ?>

    <tr>
      <td><div class="menu_item_index"><?= $row[0] ?></div></td>
      <td><div class="menu_item_name"><?= $row[1] ?></div></td>
      <td class="table_buttons"></td>
    </tr>

    <?php } } endwhile; ?>

  </table>
</div>
<hr>

<!--BUFFET 3  -->
<div class="task_wrapper" id="category_<?= $category3[0] ?>">
<h2 class="task_heading"><?= $category3[1]; ?></h2>

<?php if($id === $category3[0]){ ?>

<form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
  <label for="menu_item_name_input">Navn på drikkevare</label>
  <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
  <br><br>
  <a class="button red" href="buffet.php?#category_<?=$category3[0]?>">Fortryd</a>
  <input class="button green" type="submit" value="Tilføj">
  <input type="hidden" name="hidden_category" value="<?= $category3[0] ?>">
</form>

<?php }else{ ?>

<form method="post" name="post" action="buffet.php?id=<?= $category3[0] ?>#category_<?=$category3[0]?>" enctype="multipart/form-data">
  <input class="button green" type="submit" value="Tilføj">
</form>

<?php } ?>

<table>
  <tr>
    <th>Indeks</th>
    <th>Navn</th>
  </tr>

  <?php
  mysqli_data_seek($results, 0);
  while($row = mysqli_fetch_row($results)):
    if($row[2] == $category3[0]){
      if($id == $row[0]){
  ?>

  <tr>
    <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
      <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
      <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
      <input type="hidden" name="hidden_category" value="<?= $category3[0] ?>">
      <td class="table_buttons">
        <input class="button green" type="submit" value="Gem">
        <a class="button grey" href="buffet.php#category_<?=$category3[0]?>">Fortryd</a>
        </input>
      </td>
    </form>
  </tr>

  <?php }elseif($id === 0){ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons">
      <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
        <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
      </form>
      <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category3[0]?>">
        <input class="button grey" type="submit" value="Rediger">
      </a>
    </td>
  </tr>

  <?php }else{ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons"></td>
  </tr>

  <?php } } endwhile; ?>

</table>
</div>
<hr>

<!--BUFFET 4  -->
<div class="task_wrapper" id="category_<?= $category4[0] ?>">
<h2 class="task_heading"><?= $category4[1]; ?></h2>

<?php if($id === $category4[0]){ ?>

<form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
  <label for="menu_item_name_input">Navn på drikkevare</label>
  <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
  <br><br>
  <a class="button red" href="buffet.php?#category_<?=$category4[0]?>">Fortryd</a>
  <input class="button green" type="submit" value="Tilføj">
  <input type="hidden" name="hidden_category" value="<?= $category4[0] ?>">
</form>

<?php }else{ ?>

<form method="post" name="post" action="buffet.php?id=<?= $category4[0] ?>#category_<?=$category4[0]?>" enctype="multipart/form-data">
  <input class="button green" type="submit" value="Tilføj">
</form>

<?php } ?>

<table>
  <tr>
    <th>Indeks</th>
    <th>Navn</th>
  </tr>

  <?php
  mysqli_data_seek($results, 0);
  while($row = mysqli_fetch_row($results)):
    if($row[2] == $category4[0]){
      if($id == $row[0]){
  ?>

  <tr>
    <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
      <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
      <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
      <input type="hidden" name="hidden_category" value="<?= $category4[0] ?>">
      <td class="table_buttons">
        <input class="button green" type="submit" value="Gem">
        <a class="button grey" href="buffet.php#category_<?=$category4[0]?>">Fortryd</a>
        </input>
      </td>
    </form>
  </tr>

  <?php }elseif($id === 0){ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons">
      <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
        <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
      </form>
      <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category4[0]?>">
        <input class="button grey" type="submit" value="Rediger">
      </a>
    </td>
  </tr>

  <?php }else{ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <!-- Ændret fra 1 til 2  -->
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons"></td>
  </tr>

  <?php } } endwhile; ?>

</table>
</div>

<!-- USA BUFFET  -->
  <div class="task_wrapper" id="category_<?= $category5[0] ?>">
  <h2 class="task_heading"><?= $category5[1]; ?></h2>

  <?php if($id === $category5[0]){ ?>

  <form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
    <label for="menu_item_name_input">Navn på ret</label>
    <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
    <br><br>
    <a class="button red" href="buffet.php?#category_<?=$category5[0]?>">Fortryd</a>
    <input class="button green" type="submit" value="Tilføj">
    <input type="hidden" name="hidden_category" value="<?= $category5[0] ?>">
  </form>

  <?php }else{ ?>

  <form method="post" name="post" action="buffet.php?id=<?= $category5[0] ?>#category_<?=$category5[0]?>" enctype="multipart/form-data">
    <input class="button green" type="submit" value="Tilføj">
  </form>

  <?php } ?>

  <table>
    <tr>
      <th>Indeks</th>
      <th>Navn</th>
    </tr>

    <?php
    mysqli_data_seek($results, 0);
    while($row = mysqli_fetch_row($results)):
      // Ændret fra 1 til 2 (Gjorde at man kunne se database (kategorier))
      if($row[2] == $category5[0]){
        if($id == $row[0]){
    ?>

    <tr>
      <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
        <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
        <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
        <input type="hidden" name="hidden_category" value="<?= $category5[0] ?>">
        <td class="table_buttons">
          <input class="button green" type="submit" value="Gem">
          <a class="button grey" href="buffet.php#category_<?=$category5[0]?>">Fortryd</a>
          </input>
        </td>
      </form>
    </tr>

    <?php }elseif($id === 0){ ?>
    <tr>
      <td><div class="menu_item_index"><?= $row[0] ?></div></td>
      <td><div class="menu_item_name"><?= $row[1] ?></div></td>
      <td class="table_buttons">
        <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
          <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
        </form>
        <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category5[0]?>">
          <input class="button grey" type="submit" value="Rediger">
        </a>
      </td>
    </tr>

    <?php }else{ ?>

    <tr>
      <td><div class="menu_item_index"><?= $row[0] ?></div></td>
      <td><div class="menu_item_name"><?= $row[1] ?></div></td>
      <td class="table_buttons"></td>
    </tr>

    <?php } } endwhile; ?>

  </table>
</div>
<hr>

<!--BUFFET ITALIENSK -->
<div class="task_wrapper" id="category_<?= $category6[0] ?>">
<h2 class="task_heading"><?= $category6[1]; ?></h2>

<?php if($id === $category6[0]){ ?>

<form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
  <label for="menu_item_name_input">Navn på ret</label>
  <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
  <br><br>
  <a class="button red" href="buffet.php?#category_<?=$category6[0]?>">Fortryd</a>
  <input class="button green" type="submit" value="Tilføj">
  <input type="hidden" name="hidden_category" value="<?= $category6[0] ?>">
</form>

<?php }else{ ?>

<form method="post" name="post" action="buffet.php?id=<?= $category6[0] ?>#category_<?=$category6[0]?>" enctype="multipart/form-data">
  <input class="button green" type="submit" value="Tilføj">
</form>

<?php } ?>

<table>
  <tr>
    <th>Indeks</th>
    <th>Navn</th>
  </tr>

  <?php
  mysqli_data_seek($results, 0);
  while($row = mysqli_fetch_row($results)):
    // Ændret fra 1 til 2 (Gjorde at man kunne se database (kategorier))
    if($row[2] == $category6[0]){
      if($id == $row[0]){
  ?>

  <tr>
    <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
      <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
      <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
      <input type="hidden" name="hidden_category" value="<?= $category6[0] ?>">
      <td class="table_buttons">
        <input class="button green" type="submit" value="Gem">
        <a class="button grey" href="buffet.php#category_<?=$category6[0]?>">Fortryd</a>
        </input>
      </td>
    </form>
  </tr>

  <?php }elseif($id === 0){ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons">
      <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
        <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
      </form>
      <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category6[0]?>">
        <input class="button grey" type="submit" value="Rediger">
      </a>
    </td>
  </tr>

  <?php }else{ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons"></td>
  </tr>

  <?php } } endwhile; ?>

</table>
</div>
<hr>

<!--BUFFET ØKOLOGISK  -->
<div class="task_wrapper" id="category_<?= $category7[0] ?>">
<h2 class="task_heading"><?= $category7[1]; ?></h2>

<?php if($id === $category7[0]){ ?>

<form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
  <label for="menu_item_name_input">Navn på ret</label>
  <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
  <br><br>
  <a class="button red" href="buffet.php?#category_<?=$category7[0]?>">Fortryd</a>
  <input class="button green" type="submit" value="Tilføj">
  <input type="hidden" name="hidden_category" value="<?= $category7[0] ?>">
</form>

<?php }else{ ?>

<form method="post" name="post" action="buffet.php?id=<?= $category7[0] ?>#category_<?=$category7[0]?>" enctype="multipart/form-data">
  <input class="button green" type="submit" value="Tilføj">
</form>

<?php } ?>

<table>
  <tr>
    <th>Indeks</th>
    <th>Navn</th>
  </tr>

  <?php
  mysqli_data_seek($results, 0);
  while($row = mysqli_fetch_row($results)):
    // Ændret fra 1 til 2 (Gjorde at man kunne se database (kategorier))
    if($row[2] == $category7[0]){
      if($id == $row[0]){
  ?>

  <tr>
    <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
      <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
      <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
      <input type="hidden" name="hidden_category" value="<?= $category7[0] ?>">
      <td class="table_buttons">
        <input class="button green" type="submit" value="Gem">
        <a class="button grey" href="buffet.php#category_<?=$category7[0]?>">Fortryd</a>
        </input>
      </td>
    </form>
  </tr>

  <?php }elseif($id === 0){ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons">
      <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
        <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
      </form>
      <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category7[0]?>">
        <input class="button grey" type="submit" value="Rediger">
      </a>
    </td>
  </tr>

  <?php }else{ ?>

  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons"></td>
  </tr>

  <?php } } endwhile; ?>

</table>
</div>
<hr>

<!--BUFFET JULEFROKOST  -->
<div class="task_wrapper" id="category_<?= $category8[0] ?>">
<h2 class="task_heading"><?= $category8[1]; ?></h2>

<?php if($id === $category8[0]){ ?>

<form class="restaurant_form" method="post" name="post" action="php_process/process_buffet_input.php?id=<?=$_GET['id']?>" enctype="multipart/form-data">
  <label for="menu_item_name_input">Navn på ret</label>
  <input name="menu_item_name" type="text" placeholder="Angiv navn" required maxlength="100" />
  <br><br>
  <a class="button red" href="buffet.php?#category_<?=$category8[0]?>">Fortryd</a>
  <input class="button green" type="submit" value="Tilføj">
  <input type="hidden" name="hidden_category" value="<?= $category8[0] ?>">
</form>

<?php }else{ ?>

<form method="post" name="post" action="buffet.php?id=<?= $category8[0] ?>#category_<?=$category8[0]?>" enctype="multipart/form-data">
  <input class="button green" type="submit" value="Tilføj">
</form>

<?php } ?>

<table>
  <tr>
    <th>Indeks</th>
    <th>Navn</th>
  </tr>

  <?php
  mysqli_data_seek($results, 0);
  while($row = mysqli_fetch_row($results)):
    // Ændret fra 1 til 2 (Gjorde at man kunne se database (kategorier))
    if($row[2] == $category8[0]){
      if($id == $row[0]){
  ?>

  <tr>
    <form method="post" name="post" action="php_process/process_buffet_edit.php?id=<?=$id?>" enctype="multipart/form-data">
      <td><input name="menu_item_index" type="text" value="<?= $row[0] ?>" required maxlength="10" /></td>
      <td><input name="menu_item_name" type="text" value="<?= $row[1] ?>" required maxlength="100" /></td>
      <input type="hidden" name="hidden_category" value="<?= $category8[0] ?>">
      <td class="table_buttons">
        <input class="button green" type="submit" value="Gem">
        <a class="button grey" href="buffet.php#category_<?=$category8[0]?>">Fortryd</a>
        </input>
      </td>
    </form>
  </tr>

  <?php }elseif($id === 0){ ?>
  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons">
      <form class="table_buttons" method="post" name="post" action="php_process/process_buffet_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
        <input id="<?=$row[0]?>" class="button red" type="submit" value="Slet">
      </form>
      <a href="buffet.php?id=<?=$row[0]?>#category_<?=$category8[0]?>">
        <input class="button grey" type="submit" value="Rediger">
      </a>
    </td>
  </tr>

  <?php }else{ ?>
  <tr>
    <td><div class="menu_item_index"><?= $row[0] ?></div></td>
    <td><div class="menu_item_name"><?= $row[1] ?></div></td>
    <td class="table_buttons"></td>
  </tr>
  <?php } } endwhile; ?>
</table>
</div>

<hr>

    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
