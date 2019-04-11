<!--Calls head-->
<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-main.jpg); background-color: white; background-repeat: no-repeat;">
  <div id="page-wrap">
  <section id="upper">
        <?php include(ROOT_PATH . "includes/nav.php"); ?>

    <p id="vibrant">FIND YOUR WAY IN </br>THIS VIBRANT CITY</p>

  </section>
<!--slideshow-->
<section class="uphigh-back">
    <article class="uphigh">
      <h2>Upcoming events</h2>

    <div class="mySlides fade">
      <a class="active" href="categories/upcoming.php">
        <img class="uphighpic" src="images/carnaval-upcoming.jpg"
        alt="Carnaval"></a>
      <div class="text">Carnaval Eindhoven</div>
    </div>

    <div class="mySlides fade">
      <a class="active" href="categories/upcoming.php">
      <img class="uphighpic" src="images/kingsday.jpg"
      alt="King's Day"></a>
      <div class="text">King's Day</div>
    </div>

    <div class="mySlides fade">
      <a class="active" href="categories/upcoming.php">
      <img class="uphighpic" src="images/kermis2.jpg"
      alt="Kermis"></a>
      <div class="text">Kermis</div>
    </div>

</article>


<article class="uphigh">

      <h2>Highlights of the year</h2>
      <div class="mySlides2 fade">
        <a class="active" href="categories/highlights.php">
          <img class="uphighpic" src="images/glow.jpg"
          alt="Eindhoven Glow"></a>
        <div class="text">Eindhoven Glow</div>
      </div>

      <div class="mySlides2 fade">
        <a class="active" href="categories/highlights.php">
        <img class="uphighpic" src="images/ddw-highlights2.jpg"
        alt="Dutch Design Week"></a>
        <div class="text">Dutch Design Week</div>
      </div>

      <div class="mySlides2 fade">
        <a class="active" href="categories/highlights.php">
        <img class="uphighpic" src="images/kermis2.jpg"
        alt="Kermis"></a>
        <div class="text">Kermis</div>
      </div>

    </article>
  <section>
</div>
  <!--till here-->
  <?php include(ROOT_PATH . "includes/footer.php"); ?>
<script src="bliksem.js"></script>
</body>
</html>
