<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
     <h1 class="categtitle">Next week in Eindhoven</h1>
    
    <article class="event">
          <h2 id=square>09 <br> 04 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">PSV Eindhoven - Willem II</a></h1>
          <p class="timeloc">16:45, Philips Stadion, Frederiklaan 10A</p>
          <p>PSV Eindhoven and Willem II are fighting again for a place in EREDIVISIE. Who is your favourite?</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

      </article>
  </main>
</div>
<!--till here-->
<?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
