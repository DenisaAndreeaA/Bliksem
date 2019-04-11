<header><!--top menu bar-->
<div id="logo-container">
<a id="bliksem" href="<?php echo BASE_URL; ?>index.php">BLIKSE</a>
<a id="logo-link" href="<?php echo BASE_URL; ?>index.php"><img id="logo" src="<?php echo BASE_URL; ?>images/logo.gif" alt="Bliksem Logo"></a>
</div>
<div class="topnav">
  <div class="dropdown">
    <a href="<?php echo BASE_URL; ?>about.php">ABOUT</a>
    <div class="dropdown-content">
      <a href="<?php echo BASE_URL; ?>stay.php">Stay</a>
      <a href="<?php echo BASE_URL; ?>venues.php">Venues</a>
      <a href="<?php echo BASE_URL; ?>about.php">History</a>
    </div>
  </div>
  <div class="dropdown">
    <a href="<?php echo BASE_URL; ?>events.php">EVENT FINDER</a>
    <div class="dropdown-content">
      <a href="<?php echo BASE_URL; ?>categories/artculture.php">Art & Culture</a>
      <a href="<?php echo BASE_URL; ?>categories/festivals.php">Concerts & Festivals</a>
      <a href="<?php echo BASE_URL; ?>categories/family.php">Family events</a>
      <a href="<?php echo BASE_URL; ?>categories/lifestyle.php">Lifestyle</a>
      <a href="<?php echo BASE_URL; ?>categories/nightlife.php">Nightlife</a>
      <a href="<?php echo BASE_URL; ?>categories/sports.php">Sports events</a>
    </div>
  </div>
  <div class="dropdown">
    <a href="<?php echo BASE_URL; ?>contact.php">CONTACT</a></div>
  <div class="dropdown">
    <a href="<?php echo BASE_URL; ?>login.php">LOG IN</a></div>
  <div class="dropdown">
    <form action="events.php" method="post">
    <input type="search" name="search" placeholder="Search.."></div>
    <input type="submit" style="visibility: collapse;" />
  </form>
</div>  </header><!--end of top menu bar-->
