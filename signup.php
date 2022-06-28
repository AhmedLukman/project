<?php
  session_start();
  $_SESSION['current'] = 'login.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
  
  <?php include('inc/header.php');?>
    
    <div class="cont bg-cont">
      <div class="padding">
        <h2>Create your account</h2>
        <form action="Account/registration.php" method="post">

          <label for="fname">First name*</label> <br /><br />
          <input type="text" name="fname" id="fname" required class="text-area" value="<?php echo isset($_SESSION['fname']) ? $_SESSION['fname'] : ''?>"/>

          <br><br><br>

          <label for="lname">Last name*</label> <br /><br />
          <input type="text" name="lname" id="lname" required class="text-area" value="<?php echo isset($_SESSION['lname']) ? $_SESSION['lname'] : ''?>" />

          <br /><br /><br />

          <label for="email">Email address*</label><br /><br />
          <input
            type="email"
            name="email"
            id="email"
            required
            class="text-area"
            value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''?>"
          />
          <span class="red"><?php if(isset($_GET['error']) && $_GET['error']=="emailregistered"){echo "Email already registered";} ?></span>
          <br /><br /><br />

          <label for="dob">DOB*</label>
          <input type="date" class="text-area dob-area" name="dob" id="dob" required>

          <br /><br /><br />

          <label for="pass">Password*</label><br /><br />
          <input
            type="password"
            name="password"
            id="pass"
            required
            class="text-area"
            value="<?php echo isset($_SESSION['pass']) ? $_SESSION['pass'] : ''?>"
          />

          <br /><br /><br />

          <label for="cpass">Confirm password*</label><br /><br />
          <input
            type="password"
            name="cpassword"
            id="cpass"
            required
            class="text-area"
            value="<?php echo isset($_SESSION['cpass']) ? $_SESSION['cpass'] : ''?>"
          />
          <span class="red"><?php if(isset($_GET['error']) && $_GET['error']=="invalidcpass"){echo "Passwords don't match";} ?></span>
          <br /><br /><br /><br />

          <div class="inner-container-signup">
            <input
              name="submit"
              type="submit"
              value="Create an account"
              class="create-account-btn"
            />
          </div>

        </form>
      </div>
    </div>
    
  <!-- FOOTER -->
  <?php include('inc/footer.php'); ?>

  </body>
</html>
