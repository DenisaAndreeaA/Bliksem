<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
    <h1 class="categtitle">This weekend in Eindhoven</h1>
    
     <article class="event">
        <h2 id=square>31 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Children and Their Health</a></h1>
          <p class="timeloc">15:30, Videolab 4.042, Torenallee 20</p>
          <p>Parents will find out about the physical and mental development of the children aged 0-4 years.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    
    <article class="event">
          <h2 id=square>31 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Singlefeestje</a></h1>
          <p class="timeloc">23:00, De Effenaar, Dommelstraat 2</p>
          <p>Pick your favorite singles from the containers and take them to the DJ!</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    
    </article>
    
    <article class="event">

        <h2 id=square>31 <br> 03 <br> 2017</h2>
    <h1 class="title"><a href="<?php echo BASE_URL; ?>event.php">WE ALL Love 80's 90's 00's</a></h1>
        <p class="timeloc">22:00, De Effenaar, Dommelstraat 2</p>
        <p>Proudly presented by Radio 10, with the greatest hits of all time.</p>
        <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

    </article>
  </main>
</div>
<!--till here-->
<?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>
