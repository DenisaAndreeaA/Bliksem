<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>

<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-blur.jpg);">

      <?php include(ROOT_PATH . "includes/nav.php"); ?>
      <?php include(ROOT_PATH . "includes/side-nav.php"); ?>

<main>

   <div class="about-info">
    <div class="logInOut">
        <h1>Extremely cool page</h1>
        <h4>Only for people who sign up</h4>
    </div>
      <?php
          if(isset($_SESSION['message']))
          {
               echo "<div id='error_msg'>".$_SESSION['message']."</div>";
               unset($_SESSION['message']);
          }
      ?>

    <div>
        <h4>Welcome <?php echo $_SESSION['username']; ?></h4>
    </div>

    <a href="logout.php">Log Out</a>
  </div>

</main>

</body>
</html>
