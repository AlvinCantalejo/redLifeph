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
	<link rel="stylesheet" type="text/css" href="../../../css/user/drives/make-mobile-donation.css">

    <title>Donate | Schedule Mobile Donation</title>
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


      <div class="container-fluid">
		<div class="row justify-content-center mt-0">
			<div class="col-sm-12 col-lg-6 text-center">
				<div class="card pt-4 mt-3 mb-3">
					<h1><strong>Mobile Blood Donation Drive</strong></h1>
					<p>Fill all form field to go to next step</p>
					<div class="row">
						<div class="col-md-12 mx-0">
							<form id="msform">
								<!-- progressbar -->
								<ul id="progressbar">
									<li class="active" id="check"><strong>Eligibility Check</strong></li>
									<li id="confirm"><strong>Confirm</strong></li>
								</ul> 

								<!-- Check Eligibility-->
								<fieldset id="fs-eligibility-quiz">
									<div class="form-card">
										<!-- <h2 class="fs-title text-center">Eligibility Check</h2> -->
										<div class="fs-info">To protect the receipients and donors of this blood donation, we ask questions before you can donate.</div><br>
										<div class="fs-info">Answer a few quick questions to find out if you're eligible for blood donation.</div> <br>
										<div>
											<label class="container">
												<input type="checkbox" id="check-1"><p>Are you feeling unwell lately?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-2"><p>Do you weight less than 50 kg?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-3"><p>Do you have serious heart condition, or have you ever had a heart attack or stroke?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-4"><p>In the last 3 months, have you engaged in at risk sexual behaviour?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-5"><p>Are you pregnant, or have been pregnant in the last 9 months?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-6"><p>Are you taking antibiotics?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-7"><p>Have you (or will have) any dental work in a week before your donation?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-8"><p>Have you had a tattoo, 11 months before your donation?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" id="check-9"><p>None of the following</p>
												<span class="checkmark"></span>
											</label>

											<em><span id="error-message-eligibility-quiz" class="error-message"></span></em>
										</div>
									</div> 
									<button class="next btn btn-danger btn-lg rounded-3 p-2 col-lg-3 col-sm-4" type="button" name="next">Next Step</button>
								</fieldset>

								<!-- Confirm -->
								<fieldset>
									<div class="form-card">
										<h2 class="fs-title text-center">Confirm Schedule</h2><hr>
										<div class="row align-items-center">
											<div class="col-lg-5">
												<div class="card text-center">
													<i class="card-img-top bi bi-calendar-event" style="font-size: 5rem; color: red;"></i>
													<div class="card-body">
														<p class="card-text">Display Date and Time</p>
													</div>
												</div>
											</div>
											<div class="col-lg-7">
												<div class="card-body">
													<h5 class="card-title">Display Mobile Donation Title</h5>
													<p class="card-text">Display Mobile Donation Address</p>
												</div>
											</div>	
										</div>
									</div>
									<button class="previous btn btn-outline-danger btn-lg rounded-3 p-2 m-2 col-lg-3 col-sm-4" type="button" name="previous">Previous</button>
									<button class="btn btn-danger btn-lg rounded-3 p-2 col-lg-3 col-sm-4" data-bs-toggle="modal" data-bs-target="#confirm-modal" type="button" id="confirm-appointment" name="confirm_appointment">Confirm</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>

                <!-- CONFIRMATION MODAL -->
                <div id="confirm-modal" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Successful!</h4>
                                <a href="index.php"><button type="button" class="btn-close"></button></a>
                            </div>
                            <div class="modal-body text-center">
                                <p><i class="bi bi-check2-circle" style="font-size: 4rem; color: green"></i></p>
                                <p style="color: black;"><b>Thank you!</b> <br>Your mobile blood donation is confirmed successful.<br> Please expect an email shortly.</p></br>
                            </div>
                        </div>
                    </div>
                </div>
				
			</div>
		</div>
	  </div>
    </main>
    <?php
    	include_once("../../components/footer.php");
    ?>
    <script src="../../../js/user/drives/make-mobile-donation.js" type="module"></script>
</body>
</html>
