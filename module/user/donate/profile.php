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
	<link rel="stylesheet" type="text/css" href="../../../css/user/donate/profile.css">

    <title>Donate | Manage Profile</title>
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
              <span class="profileName"></span>
              <p class="mb-2 email-address"></p>
            </div>  
            <hr>
            <a class="dropdown-item px-0" href="index.php">Home</a>
            <a class="dropdown-item px-0" href="manage-appointment.php">Manage Appoinment</a>
            <a class="dropdown-item px-0" href="donation-history.php">Donation History</a>
            <a class="dropdown-item px-0" href="profile.php">Manage Profile</a>
            <li class="m-0"><hr class="dropdown-divider my-3"></li>
            <li class="m-0"><a class="dropdown-item" href="../../../logout.php">Logout</a></li>
          </div>
        </div>
      </div>
    </header>
    <main>
    <div class="container col-xl-12 col-xxl-10 px-4 py-4">
        <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 style="color:red;">Manage Profile</h2> </br>
                    <form class="p-4 form-box rounded-3 shadow-lg bg-body" id="profile-form"><br>
                        <div class="upper-info row mb-3">
                            <div class="col-lg-6 col-sm-12">
                            <input  type="hidden" id="id"><br>
                                <label for="donor-ID"><b>Donor ID:</b></label> &nbsp;
                                <input style="border: none; background-color: white;" type="text" id="donor-ID" readonly><br>
                                <button class="mt-2 w-20 btn btn-sm btn-outline-danger" id="btn-view-donor-card" type="button">View Donor Card &raquo;</button>
                            </div>
                        </div>

                        <hr class="mb-4 mt-4">

                        <h5 class="text-muted">Personal Information</h5><br>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First name" required>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label for="birth-date">Date of Birth </label> 
                                <input class="form-control" type="date" id="birth-date" name="birth_date" value="2003-12-31" min="1956-01-01" max="2003-12-31" required/>	
                            </div>
                            
                            <div class="col mb-3">
                                <label for="gender">Gender </label> 
                                <select id="gender" class="form-select" name="gender">
                                    <option selected hidden>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="phone-number">Phone Number</label>
                                <input class="form-control" type="text" id="phone-number" name="phone_number" placeholder="0912-345-6789" required>
                            </div>
                        </div>

                        <div class="error-msg"><span class="text-danger" id="error-message"></span></div>
                        <button class="w-20 btn btn-md btn-outline-danger" id="btn-open-password-modal">Change Password &raquo;</button>
                    </form>     

                    <div class="text-center mt-4">
                        <button class="w-20 btn btn-lg btn-danger" id="btn-update-profile" type="submit">Save Update</button>
                    </div>
                </div>
        </div>

        <!-- VIEW DONOR CARD MODAL -->
        <div id="donor-card-modal" class="modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Donor Card</h5>
                        <a href=""><button type="button" class="btn-close close-modal"></button></a>
                    </div>
                    <div class="modal-body">
                        <div class="card m-3">
                            <div class="card-body align-items-center text-center">
                                <div class="row">
                                    <h5 class="card-title mb-2">BLOOD DONATION CARD</h5>
                                    <span class="fw-bold" style="background-color:transparent; border:none; font-size:100px; color:red" id="blood-type"></span>
                                    <div>
                                        <div class="col">
                                            <input class="fw-bold fs-4" style="background-color:transparent; border:none; text-align: center;" type="text" id="donor-id" readonly/>
                                        </div>
                                        <div class="col">
                                            <input class="text-uppercase" style="background-color:transparent; border:none; text-align: center;" type="text" id="donor-name" readonly/>
                                        </div>
                                        <div class="col">
                                            <input style="background-color:transparent; border:none; text-align: center;" type="text" id="donor-gender" readonly/>
                                        </div>
                                    </div>
                                </div>

                                <br><p class="card-text text-center">Thank you for participating in this noble act. Together, let's save lives!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CHANGE PASSWORD MODAL -->
        <div id="change-password-modal" class="modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Change Password</h5>
                        <a href=""><button type="button" class="btn-close close-modal"></button></a>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form method="post" id="password-reset-form">
                                
                                <div class="row mb-3">     
                                    <label for="new-password" class="col-sm-4 col-form-label-sm">New Password: </label> 
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="new-password" name="new_password" autocomplete="off" placeholder="Enter new password" required>                                                        </div>
                                </div>

                                <div class="row">
                                    <label for="confirm-password" class="col-sm-4 col-form-label-sm">Confirm Password: </label> 
                                    <div class="col-sm-8">
                                        <input type="password" class="form-control" id="confirm-password" name="confirm_password" autocomplete="off" placeholder="Confirm new password"required>
                                    </div>
                                </div>
                                <div class="error-msg"><span class="text-danger" id="error-message"></span></div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href=""><button type="button" class="btn btn-secondary close-modal">Cancel</button></a>
                        <input type="button" id="confirm-reset" class="btn btn-danger" value="Confirm">
                    </div>
                </div>
            </div>
        </div>

        <!-- ALERT MODAL -->
        <?php include_once("../../components/alert-modal.php"); ?>
    </div>
    <?php
    	include_once("../../components/simple-footer.php");
    ?>
    <script src="../../../js/user/donate/profile.js" type="module"></script>
</body>
</html>
