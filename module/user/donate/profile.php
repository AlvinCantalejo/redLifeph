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
	<link rel="stylesheet" type="text/css" href="../../../css/user/donate/profile.css">

    <title>Donate | Manage Profile</title>
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


    <div class="container col-xl-12 col-xxl-10 px-4 py-4">
        <div class="row">
            <main>
                <div class="col-lg-8 mx-auto">
                    <h2 style="color:red;">Manage Profile</h2> </br>
                    <form class="p-4 form-box rounded-3 shadow-lg bg-body" id="registration-form"><br>
                        <div class="upper-info row mb-3">
                            <div class="col-lg-6 col-sm-12">
                                <label for="donor-id"><b>Donor Id:</b></label> &nbsp;
                                <input style="border: none; background-color: white;" type="text" id="donor-id" name="donor_id" placeholder="Donor ID" disabled>
                                <button class="mt-2 w-20 btn btn-sm btn-outline-danger btn-register"data-bs-toggle="modal" data-bs-target="#donor-card-modal" type="button">View Donor Card &raquo;</button>
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
                                <select id="gender" class="form-select">
                                    <option selected disabled>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Prefer not to say</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="phone-number">Phone Number</label>
                                <input class="form-control" type="text" id="phone-number" name="phone_number" placeholder="0912-345-6789" required>
                            </div>
                        </div>

                        <div class="error-msg"><span class="text-danger" id="error-message"></span></div>
                        <button class="w-20 btn btn-md btn-outline-danger" data-bs-toggle="modal" data-bs-target="#change-password-modal" type="button">Change Password &raquo;</button>
                    </form>     

                    <div class="text-center mt-4">
                        <button class="w-20 btn btn-lg btn-danger btn-register" type="submit">Save Update</button>
                    </div>
                </div>
            </main>
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
                        <div class="container-fluid">
                            <div class="card m-3">
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-center">BLOOD DONATION CARD</h5>
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 text-end">
                                            <i class="card-img-top bi bi-person-square" style="font-size: 5rem;"></i>
                                        </div>
                                        <div class="col-lg-9 text-start">
                                            <div class="row">
                                                <h6 class="card-title donor-id" style="border: none; color:red; background-color: white;"> Display Donor ID</h6>
                                                <div class="col-12 mb-0">
                                                    <label for="donor-id"><b>Donor Id:</b></label> &nbsp;
                                                    <input style="border: none; background-color: white;" type="text" id="donor-id" name="donor_id" placeholder="Donor ID" disabled>
                                                </div>
                                                <div class="col-12 mb-0">
                                                    <label for="donor-name"><b>Donor:</b></label> &nbsp;
                                                    <input style="border: none; background-color: white;" type="text" id="donor-name" name="donor_name" placeholder="Donor Name" disabled>
                                                </div>
                                                <div class="col-12 mb-0">
                                                    <label for="donor-name"><b>Gender:</b></label> &nbsp;
                                                    <input style="border: none; background-color: white;" type="text" id="donor-gender" name="donor_gender" placeholder="Gender" disabled>
                                                </div>
                                                <div class="col-12 mb-0">
                                                    <label for="donor-name"><b>Type:</b></label> &nbsp;
                                                    <input style="border: none; background-color: white;" type="text" id="blood-type" name="blood_type" placeholder="Blood Type" disabled>
                                                </div>
                                            </div>

                                        </div>	
                                    </div>

                                    <br><p class="card-text text-center">With supporting text below as a natural lead-in to additional content.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href=""><button type="button" class="btn btn-secondary close-modal">Cancel</button></a>
                        <input type="button" id="confirm" class="btn btn-danger" value="Confirm">
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
                        <input type="button" id="confirm" class="btn btn-danger" value="Confirm">
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
    </div>
    <?php
    	include_once("../../components/footer.php");
    ?>
    <script src="../../../js/user/donate/profile.js" type="module"></script>
</body>
</html>
