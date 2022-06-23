<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	  <link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>
    <link rel = "stylesheet" type="text/css" href="./css/main/request.css">
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- External Links
    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	  <link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="./css/main/request.css">
    
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
	  <script src="./res/bootstrap/js/popper.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>    
	  <script src="./res/icons/icons.js"></script> -->

    <title>redLife.ph | Request</title>

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
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-light shadow py-3">
        <div class="container-fluid">
          <a href="index.php" class="d-flex align-items-center text-decoration-none">
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
                <a class="nav-link active link-danger" aria-current="page" href="request.php">Request</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="drives.php">Mobile Donation Drive</a>
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
        </div>
      </nav>
    </header>
    <main>

      <div class="bg-image">
        <div class="mask d-flex flex-wrap align-content-center pt-5" style="background-color: rgba(0, 0, 0, 0.4); height: 85vh;">
          <div class="container px-3 py-5 text-white">
            <div class=" col-lg-8 pt-5 text-center text-lg-start">
              <h6>Request</h6>
              <h1>Blood</h1>
              <h5 class="m-2"> We are all in this together. Philippine Red Cross extends its advocacy to help 
                people in-need for blood products.</h5>
              <a class="track btn btn-danger btn-lg mt-3" href="./track-request.php" role="button">Track Request</a>
            </div>
          </div>
        </div>
      </div>
      <br><br>

      <div class="container"><br><br>
        <div class="row">
          <h2 class="pb-5 text-center" style="color:#9e1e18">Steps in Requesting Blood Products</h2><br>
          <div class="col-md-7"> 
            <div class="mb-5"><hr><br>
              <h5>STEP 1</h5>
              <h2 class="text-danger">Contact Us</h2>
              <p>Notify the hospital's laboratory staff to contact us as we need 
                important details about the patient and the blood to be requested. 
                <br><br> NOTE: If blood product is not available to the branch you have contacted, 
                blood service personnel will provide you contact details of the different branch.</p>
            </div>
            <div class="mb-5"><hr><br>
              <h5>STEP 2</h5>
              <h2 class="text-danger">Track Your Request</h2>
              <p>Once request is successful, the blood service will provide you the release number of your request. 
                To follow-up your request, you can track it using your release number here in our website or by 
                clicking this, <a href="#"><i>Track Request.</i></a></p>
            </div>
            <div class="mb-5"><hr><br>
              <h5>STEP 3</h5>
              <h2 class="text-danger">Blood Claiming</h2>
              <p>Notify the hospital's laboratory staff to contact us as we need 
                important details about the patient and the blood to be requested. 
                If blood product is not available to the branch you have contacted, 
                blood service personnel will provide you contact details of the different branch.</p>
            </div>
          </div>

          <div class="col-md-5">
            <div class="position-sticky" style="top: 8rem;">
              <div class="h-100 bg-light border rounded-3 shadow contact-details">
                
                <h3>Reach out to Us!</h3><br>

                <div class="col d-flex align-items-start">
                  <div class="icon-square text-dark flex-shrink-0 me-3">
                    <i class="bi bi-geo-alt-fill" style="font-size: 1.5rem;"></i>
                  </div>
                  <div>
                    <h5>Location</h5>
                    <p>Philippine Red Cross Dasmarinas Branch Multipurpose Hall, 
                      Ground Floor, Amada Building, Emilio-Aguinaldo Highway, Zone IV,
                      Dasmarinas City, Cavite</p>
                  </div>
                </div>

                <div class="col d-flex align-items-start mt-3">
                  <div class="icon-square text-dark flex-shrink-0 me-3">
                    <i class="bi bi-telephone-fill" style="font-size: 1.5rem;"></i>
                  </div>
                  <div>
                    <h5>Contact Number</h5>
                    <p>Telephone: (046) 402-6267<br> Mobile: 0926-685-9594</p>
                  </div>
                </div>

                <div class="col d-flex align-items-start mt-3">
                  <div class="icon-square text-dark flex-shrink-0 me-3">
                    <i class="bi bi-envelope-check-fill" style="font-size: 1.5rem;"></i>
                  </div>
                  <div>
                    <h5>Email</h5>
                    <p>cavite.donorrecruitment@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <br><br>
        <div class="container bg-light px-3 py-3" id="hanging-icons"><br><br>
          <h2 class="pb-2 text-center text-danger">Protocols in Requesting a Blood Product</h2><br><br>
          <div class="row g-4 py-5 border-top row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
              <div class="icon-square text-dark flex-shrink-0 me-3">
                <i class="bi bi-check2-circle" style="font-size: 2rem;"></i>
              </div>
              <div>
                <h4>Mode of Transaction</h4>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div class="icon-square text-dark flex-shrink-0 me-3">
                <i class="bi bi-journal-check"  style="font-size: 2rem;"></i>
              </div>
              <div>
                <h4>Verified Requirements</h4>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div class="icon-square text-dark flex-shrink-0 me-3">
                <i class="bi bi-calendar2-check"  style="font-size: 2rem;"></i>
              </div>
              <div>
                <h4>Delivery</h4>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
              </div>
            </div>
          </div>
        </div>
        

        <div class="align-items-center container py-5 banner">
          <div class="row rounded-3 p-3 bg-danger align-items-center">
            <div class="col-lg-8 col-sm-12">
              <h3 class="text-white fw-bold m-0">Know when your blood request is available</h3>
            </div>
            <div class="col-lg-4 col-sm-12">
              <button class="btn btn-light btn-lg text-danger" onclick="window.location.href ='track-request.php'" type="button">Track Request Here!</button>
            </div>
          </div>
        </div>
      </div> 
    </main>
    <?php
    	include_once("./module/components/footer.php");
    ?>
    <script src="./js/request.js" type="module"></script>
  </body>
</html>
