<?php
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['login_btn']))
{
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $password=md5($password); 
    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result=mysqli_query($db,$sql);
    if(mysqli_num_rows($result)==1)  {
        $_SESSION['message']="You are now Loggged In";
        $_SESSION['username']=$username;
        logInOut("location:home.php");
    }
   else{
        $_SESSION['message']="Username and Password combiation incorrect";
    }
}

?>
<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-blur.jpg);">
      <?php include(ROOT_PATH . "includes/nav.php"); ?>

  <div class="wrapper2">
  <article class="about">
    <div class="logInOut">
        <h1>Login</h1>
    <div>
    <?php
        if(isset($_SESSION['message']))
        {
             echo "<div id='error_msg'>".$_SESSION['message']."</div>";
             unset($_SESSION['message']);
        }
    ?>
    <form method="post" action="login.php">
      <table>
         <tr>
               <td>Username : </td>
               <td><input type="text" name="username" class="textInput" required></td>
         </tr>
          <tr>
               <td>Password : </td>
               <td><input type="password" name="password" class="textInput" required></td>
         </tr>
          <tr>
               <td></td>
               <td><input type="submit" name="login_btn" class="Log In"></td>
         </tr>
     </table>
    </form>
    <h3>Don't have a login yet? <a href="register.php">Register</a></h3>

</article>
</div>
</body>
</html>
