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
    <link rel = "stylesheet" type="text/css" href="./css/main/donate.css">
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>redLife.ph | Donate</title>

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
      <nav class="container-xl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
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
              <a class="nav-link active link-danger" aria-current="page" href="donate.php">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="request.php">Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="drives.php">Mobile Donation</a>
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
            <img src="./res/img/donate-bg.jpeg" class="photo" style="z-index: 0" alt="carousel-image">
            <div class="color-overlay"></div>
            <div class="carousel-caption text-start">
              <div class="col-lg-12 text-center">
                <h6>Give</h6>
                <h1>Blood</h1>
                <h5 class="m-2"> One blood donation can help 3 people.
                    Your initiative can save lives.
                    Donate now!</h5>
                <a class="book btn btn-danger btn-lg mt-3" href="login.php" role="button">Book Appointment</a>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <br>
      <div class="container components">
        <div class="row my-3 mx-3 text-center">
          <h2 class="pb-2 display-6 fw-bold text-center" style="color:#9e1e18">What can I give?</h2><br>
          <p>Philippine Red Cross Cavite Chapter - Dasmariñas Branch only caters whole blood extraction. Thus, your whole blood donation is consist of three important components.</p><br><br><br>
          <div class="col-lg-4">
            <img src="./res/img/red-blood-cells.svg" class="logo" alt="blood-logo"><br><br>
            <h3 class="fw-normal">Red Blood Cells</h3>
            <p>Red blood cells (RBCs), or erythrocytes, give blood its distinctive color. Produced in our bone marrow, they carry oxygen from our lungs to the rest of our bodies and take carbon dioxide back to our lungs to be exhaled. There are about one billion red blood cells in two to three drops of blood.</p>

          </div>
          <div class="col-lg-4">
            <img src="./res/img/plasma.svg" class="logo" alt="plasma-logo"><br><br>
            <h3 class="fw-normal">Plasma</h3>
            <p>Plasma is the liquid portion of blood; our red and white blood cells and platelets are suspended in plasma as they move throughout our bodies.</p>

          </div>
          <div class="col-lg-4">
            <img src="./res/img/platelets.svg" class="logo" alt="platelets-logo"><br><br>
            <h3 class="fw-normal">Platelets</h3>
            <p>Platelets, or thrombocytes, are small, colorless cell fragments in our blood whose main function is to stick to the lining of blood vessels and help stop or prevent bleeding. Platelets are made in our bone marrow.</p>
          </div>
        </div>
      </div>
      <br><br>

      <div class="container bg-light p-5"><br><br>
        <h2 class="pb-2 display-6 fw-bold text-center" style="color:#9e1e18">How do I donate?</h2><br><br>
        <div class="row g-4 py-5 border-top row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <i class="bi bi-check2-circle" style="font-size: 2rem;"></i>
            </div>
            <div>
              <h4>Eligibility Check</h4>
              <p>Check if you have the minimum health requirements to donate blood.</p>
              <p><a class="btn btn-outline-danger" href="learn.php#eligibility">Learn More &raquo;</a></p>

            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <i class="bi bi-calendar2-check"  style="font-size: 2rem;"></i>
            </div>
            <div>
              <h4>Book an Appointment</h4>
              <p>Start your noble act by booking your blood donation appointment.</p>
              <p><a class="btn btn-outline-danger" href="login.php">Book Now! &raquo;</a></p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <i class="bi bi-journal-check"  style="font-size: 2rem;"></i>
            </div>
            <div>
              <h4>Prepare Yourself</h4>
              <p>Learn what are do's and dont's before blood donation. </p>
              <p><a class="btn btn-outline-danger" href="learn.php#reminders">Learn More &raquo;</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="align-items-center container py-5 banner">
        <div class="row rounded-3 p-3 bg-danger align-items-center">
          <div class="col-lg-8 col-sm-12">
            <h3 class="text-white fw-bold m-0">Are you ready to start saving lives?</h3>
          </div>
          <div class="col-lg-4 col-sm-12 banner-button">
            <button class="btn btn-light btn-lg text-danger btn2-book" onclick="window.location.href = './login.php'">Book Appointment Now!</button>
          </div>
        </div>
      </div>
    </main>
    <?php
    	include_once("./module/components/main-footer.php");
    ?>
    <script src="./js/donate.js" type="module"></script>
  </body>
</html>
