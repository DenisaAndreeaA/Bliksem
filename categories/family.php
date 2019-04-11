<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
    <h1 class="categtitle">Family events</h1>
    <article class="event">
        <h2 id=square>31 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Children and Their Health</a></h1>
          <p class="timeloc">15:30, Videolab 4.042, Torenallee 20</p>
          <p>Parents will find out about the physical and mental development of the children aged 0-4 years.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>

      <article class="event">
          <h2 id=square>15 <br> 06 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Internationaal Kerstcircus</a></h1>
          <p class="timeloc">19:00, Parktheater Eindhoven, Theaterpad 1</p>
          <p>For the 46th time, Parktheater Eindhoven organizes the International Circus.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    
      <article class="event">
          <h2 id=square>13 <br> 05 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Circus Renz Berlin</a></h1>
          <p class="timeloc">14:00, Karpendonkse Plas, Sumatralaan</p>
          <p>Come and see the wonders of Circus Renz Berlin!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
</article>
  </main>
</div>
<!--till here-->
    <?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
