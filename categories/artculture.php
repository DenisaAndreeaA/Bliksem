<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
    <h1 class="categtitle">Art & Culture events</h1>

    <article class="event">
        <h2 id=square>25 <br>04 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Space Age Design Expo</a></h1>
          <p class="timeloc">10:00, Emmasingel 31</p>
          <p>Go back to the 60s and 70s with this temporary exhibition focusing on design during the space age.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
</article>
    <article class="event">
        <h2 id=square>24 <br>03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">STRP Biennale</a></h1>
          <p class="timeloc">18:00, Klokgebouw, Beukenlaan 10-151</p>
          <p>STRP Biënnale 2017 includes an exhibition with interactive installations and performances.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

      </article>

      <article class="event">
          <h2 id=square>16 <br>04 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Door Into The Dark</a></h1>
          <p class="timeloc">13:00, MU Artspace, Torenallee 40-06</p>
          <p>Door Into The Dark zooms in on the hybrid visual culture of now and later.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
   
  </main>
</div>
<!--till here-->
<?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
