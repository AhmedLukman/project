<?php 

session_start();

require('db.php');

  if(isset($_POST['submit'])){

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    if(empty($email) || empty($pass)){
      header('location:http://localhost/sbs%20executive%20courses/login.php?error=emptyfields'); 
      exit(); 
    }


    //Check if email and password are similar i.e. user entered correct email and pass  
    $query = "SELECT * FROM student WHERE stud_email = '$email'";
    $query_run = mysqli_query($conn, $query);
    $num = mysqli_num_rows($query_run);

    $row = mysqli_fetch_assoc($query_run);

    if($num == 1){//Email exists

      $pwdHashed = $row['stud_pass'];
      if(password_verify($pass, $pwdHashed)){//Works fine
        $_SESSION['stud_id'] = $row['stud_id'];
        $_SESSION['name'] = $row['stud_fname'];
        header('location:http://localhost/sbs%20executive%20courses/index.php');
        exit(); 
      } else{
        header('location:http://localhost/sbs%20executive%20courses/login.php?error=wrongpass'); 
        exit();
      }

    } else{
      header('location: http://localhost/sbs%20executive%20courses/login.php?error=emaildoesntexist');
      exit();
    }

  }else{//Sends user back to signup if he didnt reach this page via submit i.e they altered URL
    header('location: http://localhost/sbs%20executive%20courses/login.php');
    exit();
  }

?>
