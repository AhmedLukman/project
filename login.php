

<?php
  session_start();
  $_SESSION['current'] = 'login.php';
  //Someone cant access login if he/she has laready logged in.

?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

  <!-- HEADER -->
  <?php include('inc/header.php'); ?>
  
  <div class="container3">
    <h2 class="login-head">Login</h2>
    <div>
      <form action="Account/validation.php" method="post">
        <label for="email">Email Address:</label><br><br>
        <input type="email" class="text-area" name="email" id="email">
        <br><br>        
        <label for="password">Password:</label><br><br>
        <input type="password" class="text-area" name="password" id="password">
        <br><br>
        <?php
        
         if(isset($_GET['error'])){
          if($_GET['error']=="emaildoesntexist"){
            echo '<span class="red"> Email does not exist </span> <br><br>'; 
          } else if($_GET['error']=="wrongpass"){
            echo '<span class="red"> Incorrect password </span> <br><br>';
          } else if($_GET['error']=="emptyfields"){
            echo '<span class="red"> Please fill in all fields </span> <br><br>';
          }
        } 
         ?>
        <input class="submit-btn" type="submit" name="submit" value="Login">
      </form>
    </div>
    <br>
    <div class="forgot-pass">
      <a href="">Forgot password?</a>
    </div>
    <div>
      Don't have an account? Sign up <a href="<?php echo ROOT_URL?>signup.php">here</a> 
    </div>
  </div> 
  
  <!-- FOOTER -->
  
</body>
</html>