

  <div class="announcementwrapper">



  <script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>

  <!--Sætter margin: 0 hvis announcementbar ikke er present og 20 hvis den er (så de ikke overlapper)  -->
  <script>
  var $nav = $('.navigationbar');
  $(document).scroll(function() {
      $nav.css({top: $(this).scrollTop() > 20? 0:35});
  });
  </script>



    <div class="announcement">
    <p style="text-align: center; font-size: 1.1rem; padding: 6px 0; margin:0;">


    <?php
    //Opretter forbindelse via config.php, og tjekker om du er logget ind via session.php
    $connection = mysqli_connect('localhost','root','','admin');

    if(!$connection){
      die("Cannot connect to the database" . mysqli_connect_error());
    }

    $query ="SELECT * FROM announcements";
    $results = mysqli_query($connection,$query);
    if(!$results){
      die("could not query the database" .mysqli_error());
    }

    // Announcement besked fra database announcement besked (indsat fra adminpanel)
    $row = mysqli_fetch_row($results);
    echo  $row[1];
    ?>


</p>
</div>



<?php
// Tager datoen fra databasen og sammenligner med dags dato
 $date = new DateTime($row[2]);
 $now = new DateTime();

 if($date < $now) {
   echo '<style>
   .announcementwrapper {
     display: none;
   }

   </style>';
 }
?>



</div>
