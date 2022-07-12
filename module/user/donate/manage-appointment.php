<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./../../../res/img/favicon.svg">

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
	<link rel="stylesheet" type="text/css" href="../../../css/user/donate/manage-appointment.css">

    <title>Donate | Manage Appointment</title>
  </head>
  <body>
    <header class="d-flex flex-wrap align-items-center justify-content-between py-3 border-bottom">  
      <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
      <div class="dropdown">
        <button class="d-flex order-3 p-2 profile me-4" 
                type="button" 
                data-bs-toggle="dropdown" 
                data-bs-target="#profiledropdown" 
                aria-controls="profiledropdown" 
                aria-expanded="false">
          <i class="bi bi-person-circle" style="font-size: 1.5rem;"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end text-small shadow profile-dropdown" aria-labelledby="profiledropdown">
          <div class="px-4 py-3">
            <div class="mb-4">
              <span class="profileName">Profile Name</span>
              <p class="mb-2 email-address">hanniellevalle@gmail.com</p>
            </div>  
            <hr>
            <a class="dropdown-item px-0" href="index.php">Home</a>
            <a class="dropdown-item px-0" href="manage-appointment.php">Manage Appointment</a>
            <a class="dropdown-item px-0" href="donation-history.php">Donation History</a>
            <a class="dropdown-item px-0" href="profile.php">Manage Profile</a>
            <hr>
            <a class="px-0 py-3" href="#">Logout</a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="container">
        <div class="row">
            <main><br><br>
                <h2 style="color:red;">Manage Appointment </h2> </br>

                <div class="table-responsive">
                    <table class="table" id="appointment-table">
                        <thead style="background-color: #e22626;; color: white;">
                            <tr>
                                <td><b>ID</b></td>
                                <td><b>Appointment Details</b></td>
                                <td  style="text-align: center"><b>Reschedule</b></td>
                                <td  style="text-align: center"><b>Cancel</b></td>
                            </tr>
                        </thead>
                        <tbody role="rowgroup" id="appointment-table-body">
                            
                        </tbody>
                    </table>
                </div>

                <!-- CONFIRMATION MODAL -->
                <div id="confirm-modal" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Cancel Appointment</h4>
                                <a href="manage-appointment.php"><button type="button" class="btn-close"></button></a>
                            </div>
                            <div class="modal-body text-center">
                                <p><i class="bi bi-calendar2-x" style="font-size: 4rem; color: red"></i></p>
                                <p style="color: black;" id="confirmation-message"><b>Thank you!</b> <br>Your appointment schedule is successful.<br> Please expect an email shortly.</p></br>
                            </div>
                            <div class="modal-footer" style='text-align: center;'>
                                <button type="button" class="btn btn-sm btn-warning" id="confirm"></button>
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
    	include_once("../../components/simple-footer.php");
    ?>
    <script src="../../../js/user/donate/manage-appointment.js" type="module"></script>
</body>
</html>
