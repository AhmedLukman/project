<?php 
  session_start();
  $_SESSION['current'] = 'individualprogrammes.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />

    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>

    <!-- HEADER -->
    <?php include('inc/header.php') ?>

    <!-- SECTION 1 -->
    <section id="intro_ip">
      <div class="container">
        <h1 class="intro-text-2">
          We Will Challenge You,<br />Encourage You,<br />And Inspire You
        </h1>
      </div>
    </section>

    <!-- SECTION 2 -->
    <section>
      <div class="container">
        <h2>Individual Programmes</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, atque
          vero? Delectus quo ipsam tenetur dignissimos pariatur modi itaque!
          Repudiandae soluta ab ad dolores minima quidem vel tempore facere?
          Dolores? Atque quibusdam perspiciatis praesentium recusandae obcaecati
          neque natus impedit aperiam corrupti officiis quo pariatur qui minus,
          ipsa illo. Ipsum expedita blanditiis dolorum laudantium soluta,
          laboriosam neque facilis vel cumque mollitia. Neque, eos odit
          quibusdam, voluptates veritatis, ratione perspiciatis pariatur optio
          assumenda iure quos excepturi aperiam itaque quae! Quam illum amet
          qui, ipsam fugiat laudantium, nemo sit consequatur repudiandae
          mollitia blanditiis. Atque, obcaecati, non accusamus earum
          voluptatibus quidem doloribus, maxime perferendis eligendi aliquam
          optio laborum cupiditate! Error ipsum distinctio temporibus culpa,
          repellendus eveniet minus dicta. Harum iste facere eius perspiciatis
          itaque! Repellat hic nobis excepturi dolorem odit molestias, aut
          necessitatibus corporis beatae obcaecati illum numquam error
          recusandae magnam officia provident, labore deserunt ut eos neque
          ipsum? Magni nobis id dolorum fugit.
        </p>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellendus
          ipsa soluta amet accusantium dolor ipsam eaque molestiae, dolorum ab
          sit nobis perspiciatis, ullam neque voluptas necessitatibus inventore
          veritatis similique molestias. Eos, tempora rem eum consequuntur
          dignissimos distinctio odit optio blanditiis quibusdam, maxime veniam!
          In minus alias necessitatibus odit dicta aliquam error iure
          praesentium fugit, placeat dolore eum illum quam minima. Fuga tenetur
          facilis impedit labore, eos id consectetur quam, eveniet suscipit
          nihil esse nostrum asperiores cupiditate non sequi molestiae neque
          enim! Dolorum animi sequi molestiae illum eius tenetur, sit iste.
          Aliquam, explicabo, magnam excepturi doloremque voluptatum
          necessitatibus sequi nostrum voluptas, saepe quis reprehenderit?
          Soluta magnam amet itaque obcaecati quos error officiis ipsa pariatur
          aspernatur accusantium. Quisquam doloremque ex quo aperiam? Ipsam,
          accusantium fugit odio perferendis, debitis repellendus voluptas
          placeat quidem cum error harum culpa! Omnis dolores excepturi cum
          mollitia ipsa porro. Quia corrupti quisquam omnis ea optio ullam,
          dolore saepe.
        </p>
      </div>
    </section>
    <br><br>

    <!-- SECTION 3(CAROUSEL) -->
    <?php include('inc/carousel.php') ?>

    <section>
      <div class="container">
        <h2>Individual Programmes List</h2>
        <h3>Comprehensive Leadership Programmes</h3>
        <div class="links">
          <ul>
            <li><a href="<?php echo ROOT_URL?>pmd.php">Programme for management development</a></li>
            <li><a href="">Lorem, ipsum dolor.</a></li>
            <li><a href="">Lorem, ipsum dolor.</a></li>
            <li><a href="">Lorem, ipsum dolor.</a></li>
          </ul>
        </div>
        <h3>Corporate Governance Programme</h3>
        <div class="links">
          <ul>
            <li><a href="">Lorem, ipsum dolor.</a></li>
            <li><a href="">Lorem, ipsum dolor.</a></li>
            <li><a href="">Lorem, ipsum dolor.</a></li>
            <li><a href="">Lorem, ipsum dolor.</a></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- SECTION 4 (FOOTER) -->
    <?php include('inc/footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
