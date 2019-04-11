<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
  <h1 class="categtitle">Upcoming events</h1>
  <article class="event">

      <h2 id=square>19 <br> 05 <br> 2017</h2>
  <h1 class="title"><a href="<?php echo BASE_URL; ?>event.php">Nachtcollege Eindhoven</a></h1>
      <p class="timeloc">22:00, De Effenaar, Dommelstraat 2</p>
      <a class="event_pic" href="nachtcollege.html"><img src="<?php echo BASE_URL; ?>images/nachtcollege.jpg" alt="Nachtcollege"></a>
      <p>We will bring you the best house and techno artists and our amazing laser and visual show!</p>
      <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

  </article>

  <article class="event">

      <h2 id=square>26 <br> 04 <br> 2017</h2>
  <h1 class="title"><a href="<?php echo BASE_URL; ?>event.php">Royal Dutch Eindhoven 2017</a></h1>
      <p class="timeloc">19:00, Stadhuisplein</p>
      <a class="event_pic" href="royal.html"><img src="<?php echo BASE_URL; ?>images/royal.jpg" alt="Royal Dutch"></a>
      <p>Eindhoven is ready for a new King Day one-day festival. Get ready for a whole new city festival!</p>
      <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

  </article>

    <article class="event">

        <h2 id=square>31 <br> 03 <br> 2017</h2>
    <h1 class="title"><a href="<?php echo BASE_URL; ?>event.php">WE ALL Love 80's 90's 00's</a></h1>
        <p class="timeloc">22:00, De Effenaar, Dommelstraat 2</p>
        <a class="event_pic" href="wealllove.html"><img src="<?php echo BASE_URL; ?>images/wealllove80s.jpg" alt="We all love"></a>
        <p>Proudly presented by Radio 10, with the greatest hits of all time.</p>
        <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

    </article>

</main>
</div>
<!--till here-->
  <?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
