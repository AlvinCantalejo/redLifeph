<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- External Links -->
    <link rel="stylesheet" href="../../../res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	<link rel="stylesheet" media="screen" href="../../../res/font/font.css" type="text/css"/>
	<link rel="stylesheet" href="../../../res/external/css/rome.css">
	<link rel="stylesheet" href="../../../res/external/css/owl.carousel.min.css">
    
	<script src="../../../res/jquery/jquery-3.6.0.min.js"></script>
	<script src="../../../res/bootstrap/js/popper.min.js"></script>
    <script src="../../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../res/bootstrap/js/bootstrap.min.js"></script>    
	<script src="../../../res/external/js/rome.js"></script>
	<script src="../../../res/external/js/owl.carousel.min.js"></script>
	<script src="../../../res/icons/icons.js"></script>


	<!-- Local CSS-->
	<link rel="stylesheet" type="text/css" href="../../../css/user/donate/donation-history.css">

    <title>Donate | Donation History</title>
  </head>
  <body>
    <main>
      <div class="container-fluid">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
          <a href="index.php" class="d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none">
            <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="home-nav"><a href="../../../module/user/index.php" class="nav-link px-2 link-dark">Home</a></li>
            <li class="donate-nav"><a href="../../../module/user/donate/index.php" class="nav-link px-2 link-dark"><strong>Donate</strong></a></li>
            <li class="request-nav"><a href="../../../module/user/request/index.php" class="nav-link px-2 link-dark">Request</a></li>
            <li class="drives-nav"><a href="../../../module/user/drives/index.php" class="nav-link px-2 link-dark">Drives</a></li>
            <li class="learn-nav"><a href="../../../module/user/learn/index.php" class="nav-link px-2 link-dark">Learn</a></li>
          </ul>

          <div class="col-md-3 text-end">
            <div class="p-2 bd-highlight">
              <div class="dropdown text-end">
                <span class="profileName">Profile Name</span>
                <img  src="../../../res/img/loginIcon.png" class="profilePhoto dropdown-toggle" alt="profile-photo"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="../donate/index.php">Home</a></li>
                  <li><a class="dropdown-item" href="../donate/profile.php">Manage Profile</a></li>
                  <li><a class="dropdown-item" href="../donate/donation-history.php">Donation History</a></li>
                  <li><a class="dropdown-item" href="../donate/manage-appointment.php">Manage Appointment</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </header>
      </div>

    <div class="container">
        <div class="row">
            <main><br><br>
                <h2 style="color:red;">Donation History</h2> </br>

                <div class="table-responsive">
                    <table class="table" id="donation-history-table">
                        <thead style="background-color: #e22626;; color: white;">
                            <tr>
                                <td><b>Donor ID</b></td>
                                <td><b>Date</b></td>
                                <td><b>Time</b></td>
                                <td><b>Location</b></td>
                                <td style="text-align: center"><b>Actions</b></td>
                            </tr>
                        </thead>
                        <tbody role="rowgroup" id="donation-history-table-body">
                            <tr role="row">
                                <td>James</td>
                                <td role="cell">Matman</td>
                                <td role="cell">Chief Sandwich Eater</td>
                                <td role="cell">Lettuce Green</td>
                                <td role="cell">Trek</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- CONFIRMATION MODAL -->
                <div id="confirm-modal" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Cancel Appointment</h4>
                                <a href="index.php"><button type="button" class="btn-close"></button></a>
                            </div>
                            <div class="modal-body text-center">
                                <p><i class="bi bi-calendar2-x" style="font-size: 4rem; color: red"></i></p>
                                <p style="color: black;"><b>Thank you!</b> <br>Your appointment schedule is successful.<br> Please expect an email shortly.</p></br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ALERT MODAL -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <div id="alert-modal" class="modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="container-fluid">
                                <div id="alert">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
    	include_once("../../components/footer.php");
    ?>
    <script src="../../../js/user/donate/donation-history.js" type="module"></script>
</body>
</html>
