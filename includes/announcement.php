<script
  src="https://code.jquery.com/jquery-1.12.4.js"
  integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>

  <!-- Disable .promotionheader (headeren har top:0 istedet for top: 35 som ved announcement) ved fravalg af announcementbar -->
  <!--Sætter margin: 0 hvis announcementbar ikke er present og 20 hvis den er (så de ikke overlapper)  -->
  <div class="promotionheader">
  <script>
  var $nav = $('.navigationbar');
  $(document).scroll(function() {
      $nav.css({top: $(this).scrollTop() > 20? 0:35});
  });
  </script>
  </div>


<div class="announcement">
  <p style="text-align: center; font-size: 1.1rem; padding: 6px 0; margin:0;">STEGT FLÆSK OG FISSE 2050 kr!</p>
</div>
