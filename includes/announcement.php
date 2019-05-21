
<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>

<?php
//Opretter forbindelse manuelt kontra include, da de ellers er duplikeret i main-content
$db = mysqli_connect('mysql4.unoeuro.com','korius_dk','qbj23ezn','korius_dk_db');
if(!$db){
  die("Cannot connect to the database" . mysqli_connect_error());
}
mysqli_set_charset($db,"utf8");

$query ="SELECT * FROM announcements";
$results = mysqli_query($db,$query);
if(!$results){
  die("could not query the database" .mysqli_error());
}

// Konventere queery ind til array
  $row = mysqli_fetch_row($results);
 $date = new DateTime($row[2]); //Indtastede dato i database
 $now = new DateTime(); //dags dato

 if($date > $now) { //hvis dags dato er mindre end afsatte tid til announcementbar ?>

   <div class="announcementwrapper">

     <script>
     // Ændre top-placement til 35, og ændre den til 0 hvis der scrolles 35 px(desktop)
       var $nav = $('.navigationbar');
       $(document).scroll(function() {
         $nav.css({top: $(this).scrollTop() > 35? 0:35});
       });
     </script>

     <div class="announcement">
       <p style="text-align: center; font-size: 1.1rem; font-weight: 700; padding: 6px 0; margin:0;"> <?php echo  $row[1]; ?> </p>
     </div>
   </div>

<?php } else { //hvis dags dato er højere end afsatte tid til announcementbar ?>

<script>
// Sætter top-placement til 0, hvis der ikke er en nyhedsbjælke
  var $nav = $('.navigationbar');
  $(document).scroll(function() {
    $nav.css({top: $(this).scrollTop() > 0? 0:0});
  });
</script>

<?php
}; mysqli_close($db);
?>
