<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

	  <link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="./css/main/donate.css">
    
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/icons/icons.js"></script>
    <script src="./res/bootstrap/js/popper.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>

    <title>Donate | redLife.ph</title>

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
    <main>
      <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
          <a href="index.php" class="d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none">
          <img src="./res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-dark home-nav">Home</a></li>
            <li><a href="donate.php" class="nav-link px-2 link-dark donate-nav"><strong>Donate</strong></a></li>
            <li><a href="request.php" class="nav-link px-2 link-dark request-nav">Request</a></li>
            <li><a href="drives.php" class="nav-link px-2 link-dark drives-nav">Drives</a></li>
            <li><a href="learn.php" class="nav-link px-2 link-dark learn-nav">Learn</a></li>
          </ul>

          <div class="col-md-3 text-end">
          <button type="button" class="btn btn-danger me-2 open-login-form">Login</button>
          <button type="button" class="btn btn-outline-danger open-register-form">Register</button>
          </div>
        </header>
      </div>

      <div class="bg-image">
        <div class="mask d-flex flex-wrap align-content-center" style="background-color: rgba(0, 0, 0, 0.4); height: 85vh;">
          <div class="container px-5 py-5 text-white">
            <div class=" col-lg-8 text-center text-lg-start">
              <h6>Give</h6>
              <h1>Blood</h1>
              <h5 class="m-2"> One blood donation can help 3 people.
                  Your initiative can save lives.
                  Donate now!</h5>
              <a class="book btn btn-danger btn-lg m-2 col-4 mt-3" href="./module/user/donate/make-appointment.php" role="button">Book Appointment</a>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="container">
        <div class="row text-center my-3 px-5">
        <h2 class="pb-2 text-center text-danger">What can I give?</h2><br>
        <p>Your whole blood donation is consist of three important components.</p><br><br><br>
          <div class="col-lg-3"> </div>
          <div class="col-lg-2">
            <img src="./res/img/donateLogo.png" class="logo" alt="blood-logo"><br><br>
            <h5>Red Blood Cells</h5>
          </div>
          <div class="col-lg-2">
            <img src="./res/img/donateLogo.png" class="logo" alt="plasma-logo"><br><br>
            <h5>Plasma</h5>
          </div>
          <div class="col-lg-2">
            <img src="./res/img/donateLogo.png" class="logo" alt="plateles-logo"><br><br>
            <h5>Platelets</h5>
          </div>
          <div class="col-lg-3"> </div>
        </div>
      </div>
      <br><br>

      <div class="container bg-light px-5 py-5" id="hanging-icons"><br><br>
        <h2 class="pb-2 text-center  text-danger">How do I donate?</h2><br><br>
        <div class="row g-4 py-5 border-top row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <i class="bi bi-check2-circle" style="font-size: 2rem;"></i>
            </div>
            <div>
              <h4>Eligibility Check</h4>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <p><a class="btn btn-outline-danger" href="#">Learn More &raquo;</a></p>

            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <i class="bi bi-calendar2-check"  style="font-size: 2rem;"></i>
            </div>
            <div>
              <h4>Book an Appointment</h4>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <p><a class="btn btn-outline-danger" href="#">Learn More &raquo;</a></p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-dark flex-shrink-0 me-3">
              <i class="bi bi-journal-check"  style="font-size: 2rem;"></i>
            </div>
            <div>
              <h4>Prepare Yourself</h4>
              <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              <p><a class="btn btn-outline-danger" href="#">Learn More &raquo;</a></p>
            </div>
          </div>
        </div>
      </div>

      <div class="align-items-center container py-5 banner">
        <div class="row rounded-3 p-3 bg-danger align-items-center">
          <div class="col-lg-8 col-sm-12">
            <h3 class="text-white fw-bold m-0">Are you ready to start saving lives?</h3>
          </div>
          <div class="col-lg-4 col-sm-12">
            <button class="btn btn-light btn-lg text-danger" type="button">Book Appointment Now!</button>
          </div>
        </div>
      </div>

    </main>
    <?php
    	include_once("./module/components/footer.php");
    ?>
    <script src="./js/donate.js" type="module"></script>
  </body>
</html>