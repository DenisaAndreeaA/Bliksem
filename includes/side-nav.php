<div class="wrapper">
<div id="side-menu">
  <aside id="calendar">
      <h2 class="categtitle">Calendar</h2>
      
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
      $( function() {
          $( "#datepicker" ).datepicker();
        } );
      </script>
      <p style="font-size: 18px; color: #ffffff; font-weight:bold">Choose a date...</p>
      
      <form action="<?php echo BASE_URL; ?>events.php" method="post">
      <input type="text" id="datepicker">
      <a href="#" style="margin-left: 92px; background-color: #e6ac00; color:#000080; text-align: center; padding: 0.4em; text-decoration: none; font-size: 1.0em;">Search events</a>
      <input type="submit" style="visibility: collapse;" />
    </form>
       
  </aside>

  <aside>
      <h2 class="categtitle">By date</h2>
      <ul class="categlist">
    <li><a href="<?php echo BASE_URL; ?>events.php">All future events</a></li>
    <li><a href="<?php echo BASE_URL; ?>categories/thisweekend.php">This weekend</a></li>
    <li><a href="<?php echo BASE_URL; ?>categories/nextweek.php">Next week</a></li>
    <li><a href="<?php echo BASE_URL; ?>categories/thismonth.php">This month</a></li>

  </ul>

  </aside>
  <aside>
      <h2 class="categtitle">By category</h2>
      <ul class="categlist">
        <li><a href="<?php echo BASE_URL; ?>categories/artculture.php">Art & Culture</a></li>
        <li><a href="<?php echo BASE_URL; ?>categories/nightlife.php">Nightlife</a></li>
        <li><a href="<?php echo BASE_URL; ?>categories/family.php">Family</a></li>
        <li><a href="<?php echo BASE_URL; ?>categories/sports.php">Sports</a></li>
        <li><a href="<?php echo BASE_URL; ?>categories/festivals.php">Concerts & Festivals</a></li>
        <li><a href="<?php echo BASE_URL; ?>categories/lifestyle.php">Lifestyle</a></li>
  </ul>

  </aside>
</div>
