<?php

 include('config/constants.php'); 

 

 if(!isset($_SESSION)) 
 { 
     session_start(); 
 }

?>



<header>
      <div class="container-header">
        <div id="branding">
          <img src="assets/sbs new logo.png" class="sbs-logo" alt="">
        </div>

        <nav>
          <ul>
            <li class="<?php if($_SESSION['current']=='index.php'){echo 'current';}?>"><a href="<?php echo ROOT_URL?>index.php">Home</a></li>
            <div class="programmes">
             <li><a href="http://localhost/sbs%20executive%20courses/index.php#info-section">Programmes</a></li> 
             <div class="drop-down">
              <ul class="ul">
                <div class="link1">
                  <li class="<?php if($_SESSION['current']=='individualprogrammes.php'){echo 'current';}?>"><a href="<?php echo ROOT_URL?>individualprogrammes.php">Individual Programme <img class="arrow" src="assets/arrow.png" alt=""></a></li><hr class="hr">
                </div>
                <div class="link2">
                  <li><a href="<?php echo ROOT_URL?>programmesformanagement.php">Programmes for Management <img class="arrow" src="assets/arrow.png" alt=""></a></li><hr class="hr2">
                </div>
              </ul>
            </div>
            </div>
            <li><a href="https://sbs.strathmore.edu/contact/">Contact</a></li>
            <li><a href="https://sbs.strathmore.edu/about-sbs/">About SBS</a></li>
            <li class="<?php if($_SESSION['current']=='login.php'){echo 'current';}?>"><a href="<?php echo ROOT_URL?><?php if(isset($_SESSION['stud_id'])){echo "logout.php";} else{echo "login.php";}?>"><?php if(isset($_SESSION['stud_id'])){echo 'logout';}else{echo 'login';} ?></a></li>
          </ul>
        </nav>

        <?php
        if(isset($_SESSION['name'])){
          echo "<div class='greet'>Welcome ". $_SESSION['name'] . "</div>";
        }
        ?>
        
  
        <div class="social-media clearfix">
          <a href="https://www.facebook.com/sbskenya"><img src="assets/facebook.png" alt=""></a>
          <a href="https://www.instagram.com/sbskenya/"><img src="assets/instagram.png" alt=""></a>
          <a href="https://twitter.com/SBSKenya"><img src="assets/twitter.png" alt=""></a>
          <a href="https://wa.me/+254746091242"><img src="assets/whatsapp.png" alt=""></a>
          <a href="https://www.youtube.com/user/StrathmoreBusiness"><img src="assets/youtube.png" alt=""></a>
          <a href="https://www.linkedin.com/school/strathmore-business-school/"><img src="assets/linkedin.png" alt=""></a>          
        </div>
      </div>
  
</header>