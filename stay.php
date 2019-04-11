<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-blur.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
<!--end of top menu bar-->

<div class="wrapper2">

<article class="about">
  <h2 class="about-title">Where will you stay?</h2>

  <!--MAP-->
<div id="map" style="width:400px;height:400px;">There will be a map</div>

    <script>
      function initMap() {
        var uluru = {lat: 51.437316613737856, lng: 5.476341247558594};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
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
    <a class="button2" href="http://eindhoven.bookingbrabant.nl/eindhoven/en/accommodation/list" onclick="confirm()">Bookings</a>
    <!--script-->
    <script>
function confirm() {
    alert("You will be redirected to the official page!");
}
</script>
<!--scriptEND-->
  </br></br></br>
    <a class="button2" href="https://www.couchsurfing.com/users/sign_in" onclick="confirm()">Couchsurfing</a>
    <!--script-->
    <script>
function confirm() {
    alert("You will be redirected to the official page!");
}
</script>
<!--scriptEND-->
  </br></br></br>
    <a class="button2" href="https://www.airbnb.nl/s/Eindhoven--Nederland" onclick="confirm()">Airbnb</a>
<!--script-->
    <script>
function confirm() {
    alert("You will be redirected to the official page!");
}
</script>
<!--scriptEND-->
  </section>
</article>
</div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
