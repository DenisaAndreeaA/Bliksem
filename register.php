<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db, $_POST['username']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $password2=mysqli_real_escape_string($db, $_POST['password2']);
     if($password==$password2)
     {           //Create User
            $password=md5($password); //hash password
            $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']="You are now logged in";
            $_SESSION['username']=$username;
            logInOut("location:home.php");  //redirect home page
    }
    else
    {
      $_SESSION['message']="The two password do not match";
     }
}
require_once("includes/config.php");
include(ROOT_PATH . "includes/head.php");
?>
<body style="background-image: url(<?php echo BASE_URL; ?>images/eindhoven-blur.jpg);">
        <?php include(ROOT_PATH . "includes/nav.php"); ?>
<!--end of top menu bar-->

</br>
  <article class="about">
    <div class="about-info">
  <div class="logInOut">
      <h1>Register</h1>
  </div>
  <?php
      if(isset($_SESSION['message']))
      {
           echo "<div id='error_msg'>".$_SESSION['message']."</div>";
           unset($_SESSION['message']);
      }
  ?>
    <form method="post" action="register.php">
      <table>
         <tr>
               <td>Username : </td>
               <td><input type="text" name="username" class="textInput"></td>
         </tr>
         <tr>
               <td>Email : </td>
               <td><input type="email" name="email" class="textInput"></td>
         </tr>
          <tr>
               <td>Password : </td>
               <td><input type="password" name="password" class="textInput"></td>
         </tr>
          <tr>
               <td>Repeat password : </td>
               <td><input type="password" name="password2" class="textInput"></td>
         </tr>
          <tr>
               <td></td>
               <td><input type="submit" name="register_btn" class="Register"></td>
         </tr>

    </table>
    </form>
  </div>
  </article>
</body>
</html>
