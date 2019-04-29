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
    <li><a href="bar.php">Bar</a></li>
    <li><a href="selskaber.php" class="active">Selskaber</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="hjælp.php">Hjælp</a></li>
  </ul>
</div>

<div class="container">
  <div class="content">
    <div class="heading">
      <!-- DYNAMISK, overskriften skal ændre sig så den passer til menu-punktet -->
      <h1>Selskaber<span style="font-weight: 400;"></span></h1>
      <div class="logout">
        <a class="button red" href="../logout.php">log ud</a>
      </div>
    </div>

    <div class="task_wrapper">
      <h1 class="task_heading">Selskaber - buffet, arrrangementer & selskabsmenuen</h1>
      <p>Tilføj slet og rediger <b>buffet, arrangementer og selskabsmenuen</b></p>
    </div>
    <hr>

    <div class="task_wrapper">
      <h1 class="task_heading">Buffet</h1>
      <a class="button green" href="#">Tilføj Buffet</a>
    </div>
    <hr>
    <div class="task_wrapper">
      <h2 class="task_heading">Buffet 1</h2>
      <p><u>Rediger buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>menupunkt</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <br>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p><u>Rediger prisen for buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>beskrivelse</th>
          <th>pris</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">299</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">399</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">329</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">429</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p>Nuværende billede: <!-- INDSÆT VIDEO-NAVN --> </p>
      <p>Upload nyt</p>
      <input type="file" name="file" id="file" class="inputfile" />
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green" href="#">Upload</a>

    </div>
    <hr>
    <div class="task_wrapper">
      <h2 class="task_heading">Buffet 2</h2>
      <p><u>Rediger buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>menupunkt</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <br>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p><u>Rediger prisen for buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>beskrivelse</th>
          <th>pris</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">299</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">399</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">329</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">429</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p>Nuværende billede: <!-- INDSÆT VIDEO-NAVN --> </p>
      <p>Upload nyt</p>
      <input type="file" name="file" id="file" class="inputfile" />
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green" href="#">Upload</a>

    </div>
    <hr>
    <div class="task_wrapper">
      <h2 class="task_heading">Buffet 3</h2>
      <p><u>Rediger buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>menupunkt</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <br>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p><u>Rediger prisen for buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>beskrivelse</th>
          <th>pris</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">299</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">399</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">329</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">429</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p>Nuværende billede: <!-- INDSÆT VIDEO-NAVN --> </p>
      <p>Upload nyt</p>
      <input type="file" name="file" id="file" class="inputfile" />
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green" href="#">Upload</a>

    </div>
    <hr>
    <div class="task_wrapper">
      <h2 class="task_heading">Buffet 4</h2>
      <p><u>Rediger buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>menupunkt</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">fissefilet med det hele</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <br>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p><u>Rediger prisen for buffeten</u></p>
      <table>
        <tr>
          <th>indeks</th>
          <th>beskrivelse</th>
          <th>pris</th>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">299</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 4 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">399</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - min. 20 personer</div></td>
          <td><div class="menu_item_price">329</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
        <tr>
          <td><div class="menu_item_index">1</div></td>
          <td><div class="">For 5 timer - under 20 personer</div></td>
          <td><div class="menu_item_price">429</div></td>
          <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
        </tr>
      </table>
      <a class="button green" href="#">Tilføj</a>
      <br><br>
      <p>Nuværende billede: <!-- INDSÆT VIDEO-NAVN --> </p>
      <p>Upload nyt</p>
      <input type="file" name="file" id="file" class="inputfile" />
      <br><br>
      <a class="button red">Annuller</a>
      <a class="button green" href="#">Upload</a>

    </div>
    <hr>
      <div class="task_wrapper">
        <h1 class="task_heading">Arrangementer</h1>
        <a class="button green" href="#">Tilføj arrangement-type</a>
      </div>
      <hr>
      <div class="task_wrapper">
        <h2 class="task_heading">Barnedåb</h2>
        <p><b>Rediger teksten</b></p>
        <textarea></textarea>
        <br>
        <a class="button red">Annuller</a>
        <a class="button green">Gem</a>
        <br><br>
        <p>Nuværende billede: <!-- INDSÆT VIDEO-NAVN --> </p>
        <p>Upload nyt</p>
        <input type="file" name="file" id="file" class="inputfile" />
        <br><br>
        <a class="button red">Annuller</a>
        <a class="button green" href="#">Upload</a>

      </div>
      <hr>



      <!-- NY SEKTION -->

      <div class="task_wrapper">
        <h1 class="task_heading">Selskabsmenu</h1>
      </div>
      <div class="task_wrapper">
        <h2 class="task_heading">Forret</h2>
        <table>
          <tr>
            <th>Indeks</th>
            <th>Navn</th>
            <th>Beskrivelse</th>
          </tr>
          <tr>
            <td><div class="menu_item_index">1</div></td>
            <td><div class="menu_item_name">Kyllingenuggets</div></td>
            <td><div class="menu_item_description">serveres m. pommes frites</div></td>
            <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
          </tr>
          <tr>
            <td><div class="menu_item_index">1</div></td>
            <td><div class="menu_item_name">Kyllingenuggets</div></td>
            <td><div class="menu_item_description">serveres m. pommes frites</div></td>
            <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
          </tr>
          <tr>
            <td><div class="menu_item_index">1</div></td>
            <td><div class="menu_item_name">Kyllingenuggets</div></td>
            <td><div class="menu_item_description">serveres m. pommes frites</div></td>
            <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
          </tr>
          <tr>
            <td><div class="menu_item_index">1</div></td>
            <td><div class="menu_item_name">Kyllingenuggets</div></td>
            <td><div class="menu_item_description">serveres m. pommes frites</div></td>
            <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
          </tr>
        </table>
        <a class="button green" href="#">Tilføj</a>
      </div>
        <hr>

        <div class="task_wrapper">
          <h2 class="task_heading">Hovedret</h2>
          <table>
            <tr>
              <th>Indeks</th>
              <th>Navn</th>
              <th>Beskrivelse</th>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
          </table>
          <a class="button green" href="#">Tilføj</a>
        </div>
        <hr>

        <div class="task_wrapper">
          <h2 class="task_heading">Dessert</h2>
          <table>
            <tr>
              <th>Indeks</th>
              <th>Navn</th>
              <th>Beskrivelse</th>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
          </table>
          <a class="button green" href="#">Tilføj</a>
        </div>
        <hr>

        <div class="task_wrapper">
          <h2 class="task_heading">Natmad</h2>
          <table>
            <tr>
              <th>Indeks</th>
              <th>Navn</th>
              <th>Beskrivelse</th>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
            <tr>
              <td><div class="menu_item_index">1</div></td>
              <td><div class="menu_item_name">Kyllingenuggets</div></td>
              <td><div class="menu_item_description">serveres m. pommes frites</div></td>
              <td class="table_buttons"><div class="menu_item_button"><a class="button grey" href="#">Rediger</a><a class="button red" href="#">slet</a></div></td>
            </tr>
          </table>
          <a class="button green" href="#">Tilføj</a>
        </div>
        <hr>

    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
