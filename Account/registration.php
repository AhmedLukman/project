<?php 


session_start();
require('db.php');
// header('location: index.php');
  /*After reg go to specified course*/
 

  if(isset($_POST['submit'])){

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $dob = date('y-m-d',strtotime($_POST['dob']));
    $pass = mysqli_real_escape_string($conn, $_POST['password']);
    $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
  
    $hashedPassword = password_hash($pass, PASSWORD_BCRYPT);

        //This depicts the persistence of the value of the input after form has been manipulated
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
    
    //Check if email exists
    $query = "SELECT * FROM student WHERE stud_email = '$email'";
    $query_run = mysqli_query($conn, $query);
    $num = mysqli_num_rows($query_run);
    if($num == 1){//If Email taken
      header('location: http://localhost/sbs%20executive%20courses/signup.php?error=emailregistered');
      exit();
    } 

    if($pass !== $cpass){ //Check If Passwords are not alike
      header('location: http://localhost/sbs%20executive%20courses/signup.php?error=invalidcpass');
      exit();
    }
 
    //Actual registration
    $reg = "INSERT INTO student(stud_fname,stud_lname,stud_email,DOB,stud_pass) VALUES ('$fname','$lname','$email','$dob','$hashedPassword')";
    $query_run2 = mysqli_query($conn, $reg);
    if($query_run2){//Reg Success
      //Unsets the session values 
      // if(isset($_SESSION['fname'])){unset($_SESSION['fname']);}
      // if(isset($_SESSION['lname'])){unset($_SESSION['lname']);}
      // if(isset($_SESSION['email'])){unset($_SESSION['email']);}
      // if(isset($_SESSION['pass'])){unset($_SESSION['pass']);}
      // if(isset($_SESSION['cpass'])){unset($_SESSION['cpass']);}

        header('location: http://localhost/sbs%20executive%20courses/login.php?error=none');
       
      exit();
      } else{
        echo  'Registration failed';
        exit();
    }
      
                
  } else{//Sends user back to signup if he didnt reach this page via submit i.e they altered URL
    header('location: http://localhost/sbs%20executive%20courses/signup.php');
    exit();
  }
  

  


    // $fname = $_POST['fname'];
    // $lname = $_POST['lname'];
    // $email = $_POST['email'];
    // $dob = date('y-m-d',strtotime($_POST['dob']));
    // $pass = $_POST['password'];
    // $cpass = $_POST['cpassword'];
  
    // $_SESSION['fname'] = $fname;
    // $_SESSION['lname'] = $lname;
    // $_SESSION['email'] = $email;
    // $_SESSION['pass'] = $pass;
    // $_SESSION['cpass'] = $cpass;
  
    // $query = "SELECT * FROM student WHERE stud_email = '$email'";
    // $query_run = mysqli_query($conn, $query);
  
    // $num = mysqli_num_rows($query_run);
  
    // $reg = "INSERT INTO student(stud_fname,stud_lname,stud_email,DOB,stud_pass) VALUES ('$fname','$lname','$email','$dob','$pass')";
    // mysqli_query($conn, $reg);
    // echo 'Registration Successful!';
    
    // if(isset($_SESSION['fname'])){unset($_SESSION['fname']);}
    // if(isset($_SESSION['lname'])){unset($_SESSION['lname']);}
    // if(isset($_SESSION['email'])){unset($_SESSION['email']);}
    // if(isset($_SESSION['pass'])){unset($_SESSION['pass']);}
    // if(isset($_SESSION['cpass'])){unset($_SESSION['cpass']);}
    

  


 



 



?>

<?php 
/*
require('db.php');
// header('location: index.php');

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
  /*After reg go to specified course


  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $dob = date('y-m-d',strtotime($_POST['dob']));
  $pass = $_POST['password'];
  $cpass = $_POST['cpassword'];

  $_SESSION['fname'] = $fname;
  $_SESSION['lname'] = $lname;
  $_SESSION['email'] = $email;
  $_SESSION['pass'] = $pass;
  $_SESSION['cpass'] = $cpass;

  $query = "SELECT * FROM student WHERE stud_email = '$email'";
  $query_run = mysqli_query($conn, $query);

  $num = mysqli_num_rows($query_run);

  // if(isset($_POST['submit'])){

  // }
  if(isset($_SESSION['email_msg'])){ unset($_SESSION['email_msg']); } //this is the issue!

  if($pass === $cpass){ //If passwords are alike good
    if(isset($_SESSION['pass_msg'])){ unset($_SESSION['pass_msg']); }
    if($num == 1){//BAD
      $_SESSION['email_msg'] = 'Email is already registered with';
      header('location: http://localhost/sbs%20executive%20courses/signup.php');
      
    } else{

    $reg = "INSERT INTO student(stud_fname,stud_lname,stud_email,DOB,stud_pass) VALUES ('$fname','$lname','$email','$dob','$pass')";
    mysqli_query($conn, $reg);
    echo 'Registration Successful!';
    
    // if(isset($_SESSION['email_msg'])){unset($_SESSION['email_msg']);}

    if(isset($_SESSION['fname'])){unset($_SESSION['fname']);}
    if(isset($_SESSION['lname'])){unset($_SESSION['lname']);}
    if(isset($_SESSION['email'])){unset($_SESSION['email']);}
    if(isset($_SESSION['pass'])){unset($_SESSION['pass']);}
    if(isset($_SESSION['cpass'])){unset($_SESSION['cpass']);}

    }
  }else{ //If passwords are not alike bad
    $_SESSION['pass_msg'] = 'Password do not match';
    if(isset($_SESSION['email_msg'])){ unset($_SESSION['email_msg']); }

    header('location: http://localhost/sbs%20executive%20courses/signup.php');
    
  }

  
*/
    

  ?>



  
 



