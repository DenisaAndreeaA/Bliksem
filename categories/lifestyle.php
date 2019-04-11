<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
    <h1 class="categtitle">Lifestyle events</h1>
    <article class="event">
          <h2 id=square>28 <br> 05 <br> 2015</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Workshop Herbal Liqueur</a></h1>
          <p class="timeloc">15:00, Bleekweg 1A</p>
          <p>Come and see how Herbal Liqueur is made!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

      </article>

      <article class="event">
          <h2 id=square>11 <br> 06 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Expatica's</a></h1>
          <p class="timeloc">17:00, Vestdijk 27</p>
          <p>Eager to experience Dutch culture, make connections, or solve immigration and tax issues? Visit Expatica's!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    
    <article class="event">
          <h2 id=square>29 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">LinkedIn Photo Shoot</a></h1>
          <p class="timeloc">12:00, TU/e CareerCenter, MetaForum building, floor 1</p>
          <p>A professional photographer will be present to take your new professional photo.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
</article>

  </main>
</div>
<!--till here-->
  <?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
