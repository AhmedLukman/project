<?php 
  session_start();
  $_SESSION['current'] = 'index.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

    <!-- HEADER -->
    <?php include('inc/header.php'); ?>
    
    <!-- SECTION 1 -->
    <section id="intro">
      <div class="container">
        <h1 class="intro-text">
          ADVANCE YOUR CAREER WITH SBS EXECUTIVE EDUCATION
        </h1>
      </div>
    </section>

    <!-- SECTION 2 -->
    <section id="info-section">
      <div class="container">
        <h2>Executive Education</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis
          pariatur, repellat totam dolor labore reprehenderit quasi?
          Exercitationem nihil quam id ipsam et nam eveniet, molestias quidem
          totam eaque illo aperiam excepturi unde cumque. Sequi officia sunt
          qui. Pariatur quisquam non maxime consequatur vero amet aut. Totam,
          laborum omnis ab eligendi velit sint. Adipisci explicabo optio dolores
          dicta recusandae voluptas, ut et, nisi vero a aliquam quibusdam!
          Ratione fuga vel aut, tempora architecto labore tempore
        </p>
      </div>
    </section>

    <!-- SECTION 3 -->
    <section id="offering-section">
      <div class="container2">
        <h2>Our Offerings</h2>
        <div class="offering-img offering-img-1">
          <div class="floating-btn">
            <h3 class="floating-btn-label">
              <a href="<?php echo ROOT_URL?>individualprogrammes.php"
                >Individual<br />
                Programmes</a
              >
            </h3>
          </div>

          <!-- Text that displays on image hover -->
          <a href="<?php echo ROOT_URL?>individualprogrammes.php">
            <div class="hide">
              Every year, students in thousands stand in queues for collecting
              admission / application forms and then again for submitting the
              admission / application forms. This leads to problems in - managing
              the applications, handle queries, & distribution of forms,
              collection of forms and then short-listing the candidates resulting
              in annoyed parents and students alike. In addition to this
          </div>
          </a>

        </div>
        
        <div class="offering-img offering-img-2">
          <div class="floating-btn">
            <h3 class="floating-btn-label">
              <a href="<?php echo ROOT_URL?>programmesfororganisations.php"
                >Programmes for<br />
                Organisations</a
              >
            </h3>
          </div>
          
          <!-- Text that displays on offering image hover -->
          <a href="programmesfororganisations.html">
            <div class="hide">
              Every year, students in thousands stand in queues for collecting
              admission / application forms and then again for submitting the
              admission / application forms. This leads to problems in - managing
              the applications, handle queries, & distribution of forms,
              collection of forms and then short-listing the candidates resulting
              in annoyed parents and students alike. In addition to this
          </div>
          </a>           

        </div>

        <!-- Container which hides the text on offering image hover -->
        <div class="envelope"></div>

      </div>
    </section>

    <!-- SECTION 4 -->
    <section id="image-section">
      <div class="image-text">
        Develop the agile leader your Organisation <br />
        need to drive successful transformation
      </div>
    </section>

    <!-- SECTION 5 (CAROUSEL) -->
  <?php include('inc/carousel.php'); ?>

  <!-- SECTION 6 (FOOTER) -->
  <?php include('inc/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

