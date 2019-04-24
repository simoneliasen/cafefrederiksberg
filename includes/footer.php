
<?php

$connection = mysqli_connect('localhost','root','','admin');
if(!$connection){
  die("Cannot connect to the database" . mysqli_connect_error());
}
?>

<footer class="container">
  <div class="row">

    <div class="four columns" style="text-align: center;">
      <h3 class="footer_h3">Kontakt os</h3>
      <div class="footer_element">
        <strong>Adresse:</strong><br>
        Hadsundvej 1B<br>9000 Aalborg<br>Danmark
          Adresse:
      </div>

      <div class="footer_element">
        <strong>Telefon:</strong><br>
          <p>(+45) 98 12 03 83</p>
      </div>

      <div class="footer_element">
        <strong>Telefon selskaber:</strong><br>
        <p>(+45) 22 42 43 00</p>
      </div>

      <div class="footer_element">
        <strong>Email:</strong><br>
        <a href="mailto:cafefrederiksberg@gmail.com"><p>cafefrederiksberg@gmail.com</p></a>
      </div>

      <div class="footer_element">
        <strong>Email selskaber:</strong><br>
        <a href="mailto:frederiksbergselskaber@gmail.com"><p>frederiksbergselskaber@gmail.com</p></a>
      </div>

    </div>







    <div class="four columns">
      <h3 class="footer_h3">Åbningstider</h3>
      <div class="footer_element" style="text-align: center;">
        <?php

            $query ="SELECT * FROM aabningstider";
            $results = mysqli_query($connection,$query);
            if(!$results){
              die("could not query the database" .mysqli_error());
            }

            while($row = mysqli_fetch_row($results)): ?>

            <p><strong><?= $row[1] ?></strong> <?=$row[2] ?></p>


          <?php endwhile;
          mysqli_close($connection);
          ?>



        <p>Køkkenet har åbent <br><strong>12.00 - 14.00</strong> & <strong>17.00 - 20.00</strong>
      </div>
    </div>





    <div class="four columns">
      <h3 class="footer_h3">Links</h3>
      <div class="footer_element" style="text-align: center;">
        <a href="http://www.orlando-florida.dk/"><p>Feriehus Florida</p></a>
        <a href="https://www.findsmiley.dk/25727"><p>Kontrol Rapport</p></a>
        <a href="https://www.instagram.com/cafefrederiksberg/"><img src="/cafefrederiksberg/img/instagram.png" width="30px" heigth="auto" alt="Genvej til instagram"><p id="instagramtext">Instagram</p></a><br><br>
        <a href="https://www.facebook.com/Fredelive/"><img src="/cafefrederiksberg/img/facebook.png" width="30px" heigth="auto" alt="Genvej til facebook"><p id="facebooktext">Facebook</p></a>
      </div>

    </div>
  </div>
</div>
