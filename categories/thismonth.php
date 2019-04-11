<?php
require_once("../includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/city-of-eindhoven-hi_res.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>
<main>
    <h1 class="categtitle">This month in Eindhoven</h1>
    
    <article class="event">
        <h2 id=square>24 <br>03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">STRP Biennale</a></h1>
          <p class="timeloc">18:00, Klokgebouw, Beukenlaan 10-151</p>
          <p>STRP Biënnale 2017 includes an exhibition with interactive installations and performances.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>

      </article>
    
    <article class="event">
        <h2 id=square>31 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">Children and Their Health</a></h1>
          <p class="timeloc">15:30, Videolab 4.042, Torenallee 20</p>
          <p>Parents will find out about the physical and mental development of the children aged 0-4 years.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    
    <article class="event">
          <h2 id=square>29 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">LinkedIn Photo Shoot</a></h1>
          <p class="timeloc">12:00, TU/e CareerCenter, MetaForum building, floor 1</p>
          <p>A professional photographer will be present to take your new professional photo.</p>
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
    
    <article class="event">
          <h2 id=square>21 <br> 03 <br> 2017</h2>
      <h1 class="title"><a href="<?php echo "../event.php"; ?>">FDA Spring Workshops</a></h1>
          <p class="timeloc">13:00, Flexx_n Dance Academy, Klokgebouw, Beukenlaan 10-151</p>
          <p>On March 21, Flexx_n hosts its first seasonal worshop day.</p>
          <a href="http://www.ticketmaster.com/" class="button">GET TICKETS</a>
    </article>
    
  </main>
</div>
<!--till here-->
<?php include(ROOT_PATH . "includes/footer.php"); ?>
</body>
</html>

