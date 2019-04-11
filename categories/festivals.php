<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>

    <h1 class="categtitle">Concerts & Festivals</h1>

      <article class="event">
          <h2 id=square>16 <br> 06 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">We Are Electric Weekender 2017</a></h1>
          <p class="timeloc">12:00, E3 Strand, Buivensedreef 10</p>
          <p>Three days and nights of thrilling live shows and the finest electronic music. Don't miss it!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

      </article>

      <article class="event">
          <h2 id=square>12 <br> 05 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Fischer-Z</a></h1>
          <p class="timeloc">20:00, De Effenaar, Dommelstraat 2</p>
          <p>Legendary 80s art pop group 'Fischer-Z' is returning to Effenaar after a sold-out show in 2016!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    <article class="event">
        <h2 id=square>21 <br> 05 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Napalm Death + Brujeria + Power Trip</a></h1>
          <p class="timeloc">21:00, De Effenaar, Dommelstraat 2</p>
          <p>Come and see 3 legends of the metal stage: Napalm Death,Brujeria and Power Trip!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

  </article>
  </main>
  </div>

  <?php include(ROOT_PATH . "includes/footer.php"); ?>
  </body>
  </html>
