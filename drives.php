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
    <link rel="stylesheet" type="text/css" href="./css/main/drives.css">
    
	<script src="./res/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/icons/icons.js"></script>
    <script src="./res/bootstrap/js/popper.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>

    <title>redLife.ph | Mobile Blood Donation Drives</title>

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
            <li><a href="donate.php" class="nav-link px-2 link-dark donate-nav">Donate</a></li>
            <li><a href="request.php" class="nav-link px-2 link-dark request-nav">Request</a></li>
            <li><a href="drives.php" class="nav-link px-2 link-dark drives-nav"><strong>Drives</strong></a></li>
            <li><a href="learn.php" class="nav-link px-2 link-dark learn-nav">Learn</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <button type="button" class="btn btn-danger me-2 open-login-form">Login</button>
            <button type="button" class="btn btn-outline-danger open-register-form">Register</button>
          </div>
        </header>
      </div>

      <div class="bg-image">
        <div class="mask d-flex flex-wrap align-content-center" style="background-color: rgba(0, 0, 0, 0.7); height: 85vh;">
          <div class="container text-white">
            <div class="text-center">
              <h6>Mobile</h6>
              <h1>Blood Donation</h1>
              <h5 class="m-2">Join our bloob letting activies in your convinient place. Check our for our announcements and updates.</h5>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      
      <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="500" role="img">
                    <rect width="100%" height="100%" fill="#a83232"/>
                    <image xlink:href="./res/img/mobile-blood-donation.png" x="0" y="0" height="100%" width="100%"/>
                </svg>

                <div class="card-body">
                  <p class="card-text text-dark">
                    <span id="drive-title" name="drive_title">The District Dasmariñas Bloodletting Activity</span><br>
                    <span id="drive-location" name="drive_location">District Dasmariñas, Activity Center</span><br>
                    <span id="drive-schedule" name="drive_schedule">June 12, 2022 | 10AM - 4PM</span>
                  </p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#donation-drive-modal" type="button" id="opening-donation-drive-modal" name="opening_donation_drive_modal">Join Now &raquo;</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="500" role="img">
                    <rect width="100%" height="100%" fill="#a83232"/>
                    <image xlink:href="./res/img/mobile-blood-donation.jpg" x="0" y="0" height="100%" width="100%"/>
                </svg>
                <div class="card-body">
                  <p class="card-text text-dark">
                    <span id="drive-title" name="drive_title">The District Dasmariñas Bloodletting Activity</span><br>
                    <span id="drive-location" name="drive_location">District Dasmariñas, Activity Center</span><br>
                    <span id="drive-schedule" name="drive_schedule">May 22, 2022 | 10AM - 4PM</span>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-success" disabled>Done</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col">
              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="500" role="img">
                    <rect width="100%" height="100%" fill="#a83232"/>
                    <image xlink:href="./res/img/mobile-blood-donation-3.jpg" x="0" y="0" height="100%" width="100%"/>
                </svg>
                <div class="card-body">
                  <p class="card-text text-dark">
                    <span id="drive-title" name="drive_title">Barangay Bloodletting Activity</span><br>
                    <span id="drive-location" name="drive_location">Congressional Rd. Brgy. Burol 2, Dasmariñas City</span><br>
                    <span id="drive-schedule" name="drive_schedule">December 20, 2021 | 9AM - 3PM</span>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-success" disabled>Done</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
              <p>
                  <span id="drive-title" name="drive_title">The District Dasmariñas Bloodletting Activity</span><br>
                  <span id="drive-location" name="drive_location">District Dasmariñas, Activity Center</span><br>
                  <span id="drive-schedule" name="drive_schedule">May 22, 2022 | 10AM - 4PM</span>
              </p>
            </div>
            <div class="modal-footer">
              <a href=""><button type="button" class="btn btn-outline-danger close-modal">Cancel</button></a>
              <a href="./module/user/drives/make-mobile-donation.php"><input type="button" id="going" class="btn btn-danger" value="Going"></a>
            </div>
          </div>
        </div>
      </div>

    </main>
    <?php
    	include_once("./module/components/footer.php");
    ?>
    <script src="./js/drives.js" type="module"></script>
  </body>
</html>