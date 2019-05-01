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
  <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|s)no-js(s|$)/,"$1js$2")})(document,window,0);</script>

</head>

<body>

    <?php
    //Opretter forbindelse til databaser og ser om bruger er logget ind
    include('../session.php');
    ?>

<div class="logo">
  <img src="/cafefrederiksberg/img/logo.svg" id="logo" width="100%">
</div>

<div class="nav">
  <ul>
    <li><a href="analytics.php">Google analytics</a></li>
    <li><a href="generelt.php" class="active">Generelt</a></li>
    <li><a href="restaurant.php">Restaurant</a></li>
    <li><a href="bar.php">Bar</a></li>
    <li><a href="selskabsmenu.php">Selskabsmenu</a></li>
    <li><a href="buffet.php">Buffet</a></li>
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

<!-- Indsætter nuværende nyhedsbjælke som placeholders for tekstbokse -->
<?php
    $query ="SELECT * FROM announcements";
    $results = mysqli_query($db,$query);
    if(!$results){
      die("could not query the database" .mysqli_error());
    }
    $row = mysqli_fetch_row($results);
?>
<div class="task_wrapper" >
  <h1 class="task_heading">Nyhedsbjælke</h1>
  <p>Opdater Nyhedsbjælken med vigtige meddelelser eller gode tilbud.</p>
  <br>
  <form method="post" name="post" action="php_process/process_announcement_edit.php" enctype="multipart/form-data"  id="announcementform" style="width: 60%;">
    <input class="text_input" type="text" name="announcement" value="<?=$row[1]?>">
    </br><br>
    <input type="radio" name="expiration" id="noexpiration" value="male" onclick="myFunction()" >Ingen udløbsdato<br>
    <input type="radio" name="expiration" id="expiration" value="male" onclick="myFunction()" >Vælg udløbsdato
    <br><br>
    <input type="date"  style="display:none" id="date" type="date" ="_" name="date" value="<?php echo date('Y-m-d'); ?>" />
    <br><br>
    <a class="button red" type="reset" href="#">Annuller</a>
    <input class="button green" type="submit" value="Gem">
  </form>
</div>

<!-- Gemmer dato pr. default, viser dato, når der trykks "vælg udløbsdato" -->
    <script>
    function myFunction() {
      var checkBox = document.getElementById("expiration");
      var text = document.getElementById("date");
      if (checkBox.checked == true){
        text.style.display = "block";
      } else {
         text.style.display = "none";
      }
      if (checkBox.checked == false){
        text.style.display = "none";
      }
    }
    </script>

    <hr>

    <div class="task_wrapper" id="præsentationsvideo">
      <h1 class="task_heading">Præsentationsvideo / Billeder</h1>
      <p><strong>Vælg om der skal køre en video eller en serie af billeder på starten af siden</strong></p>
      <?php
      $query ="SELECT type FROM header WHERE id='1'";
      $results = mysqli_query($db, $query);
      $header_choice = mysqli_fetch_assoc($results);

      if($header_choice['type'] == "video_choice"){
        $uploadType = "Upload ny video";
        $query = "SELECT filename FROM header WHERE type ='video';";
        $results = mysqli_query($db, $query);
        $row_filename = mysqli_fetch_assoc($results);
      ?>
      <form method="post" name="post" action="php_process/process_header_choice.php" enctype="multipart/form-data">
        <input type="radio" onchange='this.form.submit();' name="type" value="video_choice" checked>Video
        <br>
        <input type="radio" onchange='this.form.submit();' name="type" value="billede_choice">Billeder
      </form>

      <p><strong>Nuværende video:</strong> <?= $row_filename['filename'] ?> </p>
      <video autoplay muted loop src="../../video/<?= $row_filename['filename'] ?>" height="100px"></video>

    <?php }elseif($header_choice['type'] == "billede_choice"){
      $uploadType = "upload nye billeder";
      $query ="SELECT * FROM header WHERE type = 'billede'";
      $results = mysqli_query($db,$query);
      ?>

      <form method="post" name="post" action="php_process/process_header_choice.php" enctype="multipart/form-data">
        <input type="radio" onchange='this.form.submit();' name="type" value="video_choice">Video
        <br>
        <input type="radio" onchange='this.form.submit();' name="type" value="billede_choice" checked>Billeder
      </form>

      <p><strong>Nuværende billeder:</strong></p>


      <table>
        <tr>
          <th>navn</th>
          <th>billede</th>
          <th>slet</th>
        </tr>
        <?php while($row = mysqli_fetch_row($results)):?>
        <tr>
          <td><?= $row[2] ?></td>
          <td><img src="../../header_slide/<?= $row[2] ?>" id="logo" height="100px"></td>
          <td>
            <form method="post" name="post" action="php_process/process_header_delete.php?id=<?=$row[0]?>" enctype="multipart/form-data">
              <input class="button red" type="submit" value="slet">
            </form>
          </td>
        </tr>
        <?php endwhile; }else{ echo "der er sket en fejl, der er hverken valgt billede eller video";}; ?>
      </table>
      <br><br>
      <p><strong><?=$uploadType ?>:</strong></p>
      <form method="post" name="post" action="php_process/process_header_upload.php" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" width='150px' height='150px'>
        <input class="button green" type="submit" value="Upload">
      </form>
    </div>

    <hr>

<!-- Indsætter nuværende katalog elementer som placeholders for tekstbokse -->
<?php
    $query ="SELECT * FROM katalog WHERE id='1'";
    $results = mysqli_query($db, $query);
    if(!$results){
      die("could not query the database" .mysqli_error());
    }
    $row = mysqli_fetch_row($results);
?>

    <div class="task_wrapper">
      <h1 class="task_heading">Katalog & Katalog tekst</h1>
      <p>Opdater et, eller flere felter</p>
      <form method="post" name="post" action="php_process/process_katalog_edit.php" enctype="multipart/form-data"  id="katalogform" style="width: 60%;">

        <p><b>Link</b></p>
      <input class="text_input" type="text" name="link" value="<?php  echo $row[1]; ?>">

        <p><b>Overskrift </b></p>
      <input class="text_input" type="text" name="header" value="<?php  echo $row[2]; ?>">

        <p><b>Underoverskrift</b></p>
      <input class="text_input" type="text" name="subheader" value="<?php  echo $row[3]; ?>">

        <p><b>Tekst</b></p>
      <textarea class="text_input" id="katalogtext" type="text" cols="10" rows="6" name="text"><?php  echo $row[4]; ?></textarea>
      <br><br>

      <input class="button green" type="submit" value="Gem">
        </form>

    </div>

    <hr>
    <div class="spacer" style="height:200px;"></div>
  </div>
</div>

</body>

</html>
