<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <link rel="stylesheet" href="../../res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	  <link rel="stylesheet" media="screen" href="../../res/font/font.css" type="text/css"/>
    <link rel = "stylesheet" type="text/css" href="../../css/user/index.css">
	  <script src="../../res/jquery/jquery-3.6.0.min.js"></script>
    <script src="../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Welcome | redLife.ph</title>

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
            <img src="../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="home-nav"><a href="../../module/user/index.php" class="nav-link px-2 link-dark"><strong>Home</strong></a></li>
            <li class="donate-nav"><a href="../../module/user/donate/index.php" class="nav-link px-2 link-dark">Donate</a></li>
            <li class="request-nav"><a href="../../module/user/request/index.php" class="nav-link px-2 link-dark">Request</a></li>
            <li class="drives-nav"><a href="../../module/user/drives/index.php" class="nav-link px-2 link-dark">Drives</a></li>
            <li class="learn-nav"><a href="../../module/user/learn/index.php" class="nav-link px-2 link-dark">Learn</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <div class="p-2 bd-highlight">
              <div class="dropdown text-end">
                <span class="profileName">Profile Name</span>
                <img  src="../../res/img/loginIcon.png" class="profilePhoto dropdown-toggle" alt="profile-photo"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="donate/index.php">Home</a></li>
                  <li><a class="dropdown-item" href="donate/profile.php">Manage Profile</a></li>
                  <li><a class="dropdown-item" href="donate/donation-history.php">Donation History</a></li>
                  <li><a class="dropdown-item" href="donate/manage-appointment.php">Manage Appointment</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </header>
      </div>

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="../../res/img/donorpage-background.jpeg" class="carousel-image-1" style="z-index: 0" alt="carousel-image">
		        <div class="color-overlay"></div>

            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Every donation saves three lives!</h1>
                <p>Manage your appointments in one convenient place.</p>
                <p><a class="btn btn-lg btn-danger" href="register.php" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="../../res/img/bg2.jpg" class="carousel-image-1" style="z-index: 0" alt="carousel-image">
            <div class="color-overlay"></div>

            <div class="container">
              <div class="carousel-caption">
                <h1>Don't be afraid. Be a Hero.</h1>
                <p>Check out the benefits of blood donation.</p>
                <p><a class="btn btn-lg btn-danger" href="../../module/user/learn/index.php">Learn more</a></p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="../../res/img/bg3.jpg" class="carousel-image-1" style="z-index: 0" alt="carousel-image">
		        <div class="color-overlay"></div>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Blood donation drives.</h1>
                <p>Join our blood letting activies in your convinuent place.</p>
                <p><a class="btn btn-lg btn-danger" href="../../module/user/drives/index.php">Browse Donation Drives</a></p>
              </div>
            </div>
          </div>
          
        </div> 
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

      <div class="container buttons">
        <div class="row">
          <div class="col-lg-3">
            <img src="../../res/img/donateLogo.png" class="logo" alt="donate-logo" id="btn-donate" name="btn-donate"><br><br>
            <p>Book your blood donation appointent now</p>
            <p><a class="btn btn-outline-danger" href="../../module/user/donate/index.php">Donate &raquo;</a></p>
            
          </div>
          <div class="col-lg-3">
            <img src="../../res/img/requestLogo.png" class="logo" alt="request-logo" id="btn-request" name="btn-request"><br><br>
            <p>Schedule request for blood products</p>
            <p><a class="btn btn-outline-danger" href="../../module/user/request/index.php">Request &raquo;</a></p>
            
          </div>
          <div class="col-lg-3">
            <img src="../../res/img/campaignLogo.png" class="logo" alt="campaign-logo" id="btn-campaign" name="btn-campaign"><br><br>
            <p>Browse blood donation campaign near you</p>
            <p><a class="btn btn-outline-danger" href="../../module/user/campaign/index.php">Campaign &raquo;</a></p>
       
          </div>
          <div class="col-lg-3">
            <img src="../../res/img/learnLogo.png" class="logo" alt="learn-logo" id="btn-learn" name="btn-learn"><br><br>
            <p>Discover how blood donation works</p>
            <p><a class="btn btn-outline-danger" href="../../module/user/learn/index.php">Learn &raquo;</a></p>
          </div>
        </div>
      </div>
	  </br> </br>
    </main>
    <?php
    	include_once("../../module/components/footer.php");
    ?>
    <script src="../../js/user/index.js" type="module"></script>
  </body>
</html>
