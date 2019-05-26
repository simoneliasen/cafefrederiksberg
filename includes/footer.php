<!-- Connect til database  -->
<?php
//Opretter forbindelse manelt kontra include, da de ellers er duplikeret i main-content
$db = mysqli_connect('localhost','root','','admin');
if(!$db){
  die("Cannot connect to the database" . mysqli_connect_error());
}
mysqli_set_charset($db,"utf8");
?>
<footer class="container">
  <div class="row">
    <!--Kontaktoplysninger -->
    <div class="four columns" style="text-align: center;">
      <h3 class="footer_h3">Kontakt os</h3>
      <div class="footer_element">
        <strong>Adresse</strong><br>
        Hadsundvej 1B<br>9000 Aalborg<br>
      </div>
      <div class="footer_element">
        <strong>Telefon</strong><br>
          <p>+45 98 12 03 83</p>
      </div>
      <div class="footer_element">
        <strong>Telefon til selskaber</strong><br>
        <p>+45 22 42 43 00</p>
      </div>
      <div class="footer_element">
        <strong>E-mail</strong><br>
        <a href="mailto:cafefrederiksberg@gmail.com"><p>cafefrederiksberg@gmail.com</p></a>
      </div>
      <div class="footer_element">
        <strong>E-mail til selskaber</strong><br>
        <a href="mailto:frederiksbergselskaber@gmail.com"><p>frederiksbergselskaber@gmail.com</p></a>
      </div>
    </div>
<!--Åbningstider  -->
    <div class="four columns">
      <h3 class="footer_h3">Åbningstider</h3>
      <div class="footer_element" style="text-align: center;">
        <!--Ugedages åbningstider  -->
        <?php
            $query ="SELECT * FROM aabningstider ORDER BY id ASC LIMIT 7;";
            $results = mysqli_query($db,$query);
            if(!$results){
              die("could not query the database" .mysqli_error());
            }
            while($row = mysqli_fetch_row($results)): ?>
            <p><strong><?= $row[1] ?></strong> <?=$row[2] ?></p>
          <?php endwhile;?>

          <!--Køkkenets åbningstider  -->
          <?php
          $query ="SELECT * FROM aabningstider ORDER BY id DESC LIMIT 1;";
          $results = mysqli_query($db,$query);
          if(!$results){
            die("could not query the database" .mysqli_error());
          }
          $row = mysqli_fetch_row($results)?>
        <p><strong>Køkkenet</strong><br><strong><?= $row[1] . '</strong> ' . $row[2] ?>
          <!--luk forbindelse til database-->
          <?php
          mysqli_close($db);
            ?>
      </div>
    </div>
    <!--Links   -->
    <div class="four columns">
      <h3 class="footer_h3">Links</h3>
      <div class="footer_element" style="text-align: center;">
        <a href="http://www.orlando-florida.dk/"><p>Feriehus Florida</p></a>
        <a href="https://www.findsmiley.dk/25727"><p>Kontrol Rapport</p></a>
        <a href="https://www.instagram.com/cafefrederiksberg/"><img src="./img/instagram.png" width="30px" heigth="auto" alt="Genvej til instagram"><p id="instagramtext">Instagram</p></a><br><br>
        <a href="https://www.facebook.com/Fredelive/"><img src="./img/facebook.png" width="30px" heigth="auto" alt="Genvej til facebook"><p id="facebooktext">Facebook</p></a>
      </div>
    </div>
  </div>
</div>
