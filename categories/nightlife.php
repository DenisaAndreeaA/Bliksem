<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
    <h1 class="categtitle">Nightlife events</h1>
    <article class="event">
          <h2 id=square>05 <br> 05 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Encore On Tour: Eindhoven</a></h1>
          <p class="timeloc">23:00, De Effenaar, Dommelstraat 2</p>
          <p>We bring Encore Vibes from Amsterdam to your city with the Encore Tour!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

      </article>

      <article class="event">
          <h2 id=square>30 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Super Silent Disco</a></h1>
          <p class="timeloc">21:00, Gaslab, Den Dolech 2</p>
          <p>It’s party-time! Where? At ‘The Sound of Silence’, our own silent disco!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    
    <article class="event">
          <h2 id=square>31 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Singlefeestje</a></h1>
          <p class="timeloc">23:00, De Effenaar, Dommelstraat 2</p>
          <p>Pick your favorite singles from the containers and take them to the DJ!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    
    </article>

  </main>
</div>
<!--till here-->
  <?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
