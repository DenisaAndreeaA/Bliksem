<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-blur.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
<!--end of top menu bar-->

<div class="wrapper2">

<article class="about">

  <h2 class="about-title">Contact</h2>
  <div id="map" style="width:400px;height:280px;background:lightblue; margin: 1em;" >There will be a map</div>
    <script>
      function initMap() {
        var uluru = {lat: 51.45149974292565, lng: 5.478765964508057};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8--s2LOi7jy6O_eJgZ0a9rbcufm1CcZY&callback=initMap">
    </script>

    <section>

      <ul>
        <li>Bliksem INC.</li>
        <li>040 227 6927</li>
        <li>info@bliksem.nl</li>
        <li>Rachelsmolen 1, 5612 MA, Eindhoven</li>
      </ul>
   </section>
 </article>

</div>
</br></br></br>
  <!--till here-->
  <?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
