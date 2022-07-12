<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./res/img/favicon.svg">

    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	  <link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>
    <link rel = "stylesheet" type="text/css" href="./css/main/drives.css">
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>redLife.ph | Mobile Blood Donation</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header class="navbar navbar-expand-lg navbar-dark fixed-top bg-light shadow py-3">
      <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <a href="index.php" class="text-decoration-none">
          <img src="./res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list" style="font-size: 2rem;"></i>
        </button> 

        <div class="collapse navbar-collapse text-center" id="navbarCollapse">
          <ul class="navbar-nav m-auto"><hr>
            <li class="nav-item">
              <a class="nav-link text-dark" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="donate.php">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="request.php">Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-danger" aria-current="page" href="drives.php">Mobile Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="learn.php">Learn</a>
            </li>
          </ul><br>
          <form class="d-flex justify-content-center" role="search">
            <button type="button" class="btn btn-danger me-2 open-login-form">Login</button>
            <button type="button" class="btn btn-outline-danger open-register-form">Register</button>
          </form>
        </div>
      </nav>
    </header>
    <main>
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./res/img/mobile-drive-bg.jpg" class="photo" style="z-index: 0" alt="carousel-image">
            <div class="color-overlay"></div>
            <div class="carousel-caption text-start">
              <div class="col-lg-12 text-center">
              <h6>Mobile</h6>
              <h1>Blood Donation</h1>
              <h5 class="m-2">Join our blood letting activities near your place. Check regularly for our announcements and updates.</h5>
            </div>
          </div>
        </div> 
      </div>
      <br>
      
      <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id ="drives-container">
            
          </div>
        </div>
      </div>

      <!-- OPENING DONATION DRIVE MODAL -->
      <div id="donation-drive-modal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Mobile Blood Donation</h4>
              <a href="index.php"><button type="button" class="btn-close"></button></a>
            </div>
            <div class="modal-body">
              <p id="drive-information">
                  <span id="drive-title"></span><br>
                  <span id="drive-location"></span><br>
                  <span id="drive-schedule"></span>
                  <span id="drive-details"></span>
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-danger close-modal">Cancel</button>
              <input type="button" id="register" class="btn btn-danger" value="Register">
            </div>
          </div>
        </div>
      </div>

    </main>
    <?php
    	include_once("./module/components/main-footer.php");
    ?>
    <script src="./js/drives.js" type="module"></script>
  </body>
</html>
