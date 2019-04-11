<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
  <h1 class="categtitle">Highlighted events</h1>

  <article class="event">

      <h2 id=square>06 <br> 05 <br> 2017</h2>
  <h1 class="title"><a href="<?php echo BASE_URL; ?>event.php">Blackout: Black Sun Empire, State of Mind, Annix+Prolix</a></h1>
      <p class="timeloc">22:00, De Effenaar, Dommelstraat 2</p>
      <a class="event_pic" href="blackout.html"><img src="<?php echo BASE_URL; ?>images/blackout.jpg" alt="Blackout"></a>
      <p>Ready for another edition of Blackout? It's gonna be massive!</p>
      <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

  </article>

  <article class="event">

        <h2 id=square>16 <br> 06 <br> 2017</h2>
    <h1 class="title"><a href="<?php echo BASE_URL; ?>event.php">We Are Electric Weekender 2017</a></h1>
        <p class="timeloc">12:00, E3 Strand, Buivensedreef 10</p>
        <a class="event_pic" href="wae.html"><img src="<?php echo BASE_URL; ?>images/wae.png" alt="We Are Electric Weekender"></a>
        <p>Three days and nights of thrilling live shows and the finest electronic music. Don't miss it!</p>
        <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

    </article>

    <article class="event">

        <h2 id=square>03 <br> 06 <br> 2017</h2>
    <h1 class="title"><a href="event.html">The Flying Dutch 2017</a></h1>
        <p class="timeloc">12:00, E3 Strand, Buivensedreef 10</p>
        <a class="event_pic" href="flyingdutch.html"><img src="../images/flyingdutch.png" alt="The Flying Dutch"></a>
        <p>Are you ready for the third edition of The Flying Dutch?</p>
        <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

    </article>

</main>
</div>
  <?php include(ROOT_PATH . "includes/footer.php"); ?>

</body>
</html>
