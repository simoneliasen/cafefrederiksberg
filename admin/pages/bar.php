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
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Bar<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button2 button_logout" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">
      <h1 class="task_heading">Rediger bar-kortet</h1>
      <p>Tilføj slet og opdater bar-kortet</p>
    </div>
      <hr>
      <div class="task_wrapper">
      <h2 class="task_heading">Øl og Vand</h2>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
      <h2 class="task_heading">Varme Drikke</h2>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
      <h2 class="task_heading">Gin</h2>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
      <h2 class="task_heading">Champagne</h2>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
    </div>

    <hr>

    <div class="task_wrapper">
      <h2 class="task_heading">Rom</h2>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <table>
        <tr>
          <th>Indeks</th>
          <th>Pris</th>
          <th>Navn</th>
          <th>Beskrivelse</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="menu_item_price">49</div></td>
          <td><div class="menu_item_name">Pils</div></td>
          <td><div class="menu_item_description">Forfriskende tubs med 4.5% så du bliver så dejlig bimset</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
    </div>
  <div class="spacer" style="height:200px;"></div>
</div>
</div>

</body>

</html>
