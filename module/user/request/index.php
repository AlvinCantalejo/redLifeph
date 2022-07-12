<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./../../../res/img/favicon.svg">

    <link rel="stylesheet" href="../../../res/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

	  <link rel="stylesheet" media="screen" href="../../../res/font/font.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../../css/user/request/index.css">
    
	  <script src="../../../res/jquery/jquery-3.6.0.min.js"></script>
    <!-- <script src="../../../res/icons/icons.js"></script> -->
    <!-- <script src="../../../res/bootstrap/js/popper.min.js"></script> -->
    <script src="../../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../../../res/bootstrap/js/bootstrap.min.js"></script> -->
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
    <header class="container-fluid navbar navbar-expand-lg navbar-dark fixed-top bg-light shadow py-3 ">
      <nav class="container-xl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">

        <a href="index.php" class="text-decoration-none">
          <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
        </a>        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-list" style="font-size: 2rem;"></i>
        </button>
 
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav"><hr>
            <li class="nav-item">
              <a class="nav-link text-dark" href="./../donate/index.php">Donate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-danger" aria-current="page" href="./../request/index.php">Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="./../drives/index.php">Mobile Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="./../learn/index.php">Learn</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-dark text-uppercase fw-bold profileName dropdown-toggle"
                 data-bs-toggle="dropdown" 
                 data-bs-target="#profiledropdown"
                 aria-expanded="true">
                 Profile Name
              </a>
              <ul class="dropdown-menu dropdown-menu-end text-small shadow px-4 py-3">
                <li class="m-0"><a class="dropdown-item" href="../donate/manage-appointment.php">Manage Appointment</a></li>
                <li class="m-0"><a class="dropdown-item" href="../donate/donation-history.php">Donation History</a></li>
                <li class="m-0"><a class="dropdown-item" href="../donate/profile.php">Manage Profile</a></li>
                <li class="m-0"><hr class="dropdown-divider my-3"></li>
                <li class="m-0"><a class="dropdown-item" href="../../../logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../../../res/img/request-bg.jpg" class="photo" style="z-index: 0" alt="carousel-image">
            <div class="color-overlay"></div>
            <div class="carousel-caption text-start">
              <div class="col-lg-12 text-center">
              <h6>Request</h6>
              <h1>Blood</h1>
              <h5 class="m-2"> We are all in this together. Philippine Red Cross extends its advocacy to help 
                people in-need for blood products.</h5>
              <a class="track btn btn-danger btn-lg mt-3" href="./track-request.php" role="button">Track Request</a>
            </div>
          </div>
        </div> 
      </div>
      <br>
      <div class="container">
        <div class="row">
          <h2 class="py-5 px-4 display-6 fw-bold text-center" style="color:#9e1e18">Steps in Requesting Blood Products</h2><br>
          <div class="col-md-7"> 
            <div class="mb-5"><hr><br>
              <h5>STEP 1</h5>
              <h2 class="text-danger">Contact Us</h2>
              <p>Notify the hospital's laboratory staff to contact us as we need 
                important details about the patient and the blood to be requested. 
                <br><br> NOTE: If blood product is not available to the branch you have contacted, 
                blood service personnel may refer you to the other branches.</p>
            </div>
            <div class="mb-5"><hr><br>
              <h5>STEP 2</h5>
              <h2 class="text-danger">Track Your Request</h2>
              <p>Once request is successful, the blood service will provide you the <strong> release number </strong> of your request. 
                To follow-up your request, you can track it using your release number here in our website or by 
                clicking this, <a href="track-request.php"><i>Track Request.</i></a></p>
            </div>
            <div class="mb-5"><hr><br>
              <h5>STEP 3</h5>
              <h2 class="text-danger">Blood Claiming</h2>
              <p>If the blood products are available and ready to be claimed, we will contact you or your laboratory 
                to claim the requested blood product. <br><br>NOTE: You may claim the blood product strictly within 6 hours only 
                upon availability. <strong> Failure to claim within the given time will forfiet the request. </strong>
              </p>
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
        <div class="container bg-light px-5 py-3"><br><br>
          <h2 class="pb-2 display-6 fw-bold text-center" style="color:#9e1e18">Protocols in Requesting Blood Products</h2><br><br>
          <div class="row g-4 py-5 border-top row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
              <div class="icon-square text-dark flex-shrink-0 me-3">
                <i class="bi bi-check2-circle" style="font-size: 2rem;"></i>
              </div>
              <div>
                <h4>Mode of Transaction</h4>
                <p>Philippine Red Cross strictly implements only laboratory-to-laboratory transactions when requesting blood products. Check our contact details and reach out to us.</p>
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div class="icon-square text-dark flex-shrink-0 me-3">
                <i class="bi bi-journal-check"  style="font-size: 2rem;"></i>
              </div>
              <div>
                <h4>Verified Requirements</h4>
                <p>Blood center requires important documents such as the original blood request form from the hospital as well as claimant's ID and ice pack (blood product storage).</p>
              </div>
            </div>
            <div class="col d-flex align-items-start">
              <div class="icon-square text-dark flex-shrink-0 me-3">
                <i class="bi bi-calendar2-check"  style="font-size: 2rem;"></i>
              </div>
              <div>
                <h4>Delivery</h4>
                <p>Upon claiming, the blood products shall be transported within 1 hour only. Make sure that the blood product is safe and not being shaked during travel.</p>
              </div>
            </div>
          </div>
        </div>
        

        <div class="align-items-center container py-5 banner">
          <div class="row rounded-3 p-3 bg-danger align-items-center">
            <div class="col-lg-8 col-sm-12">
              <h3 class="text-white fw-bold m-0">Know your blood request status</h3>
            </div>
            <div class="col-lg-4 col-sm-12 banner-button">
              <button class="btn btn-light btn-lg text-danger btn2-track" onclick="window.location.href ='track-request.php'" type="button">Track Request Here!</button>
            </div>
          </div>
        </div>
      </div> 
    </main>
    <?php
    	include_once("../../components/auth-footer.php");
    ?>
    <script src="../../../js/user/request/index.js" type="module"></script>
  </body>
</html>
