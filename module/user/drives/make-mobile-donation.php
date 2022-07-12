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
	<link rel="stylesheet" type="text/css" href="../../../css/user/drives/make-mobile-donation.css">

    <title>Donate | Schedule Mobile Donation</title>
  </head>
  <body>
  	<header class="d-flex flex-wrap align-items-center justify-content-between py-3 border-bottom">  
      <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
    </header>
    <main>
      <div class="container-fluid">
		<div class="row justify-content-center mt-4">
			<div class="col-sm-12 col-lg-6">
				<div class="return">
					<a href="index.php" class="nav-link px-2 link-dark">
						<i class="bi bi-arrow-left" style="font-size: 1rem;"></i>
						Back</a>
				</div>
				<div class="card pt-4 mb-2 text-center">
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
												<input type="checkbox" class="checkbox" value="feeling unwell"><p>Are you feeling unwell lately?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="weighs less than 50 kgs"><p>Do you weight less than 50 kg?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="have/had serious heart condition"><p>Do you have serious heart condition, or have you ever had a heart attack or stroke?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="engaged in a risk sexual behaviour"><p>In the last 3 months, have you engaged at risk sexual behaviour?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="pregnancy"><p>Are you pregnant, or have been pregnant in the last 9 months?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="taking antibiotics"><p>Are you taking antibiotics?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="have/will have dental work"><p>Have you (or will have) any dental work in a week before your donation?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox" value="had a tattoo"><p>Have you had a tattoo, 11 months before your donation?</p>
												<span class="checkmark"></span>
											</label>
											<label class="container">
												<input type="checkbox" class="checkbox-none" value="none of the following"><p>None of the following</p>
												<span class="checkmark"></span>
											</label>
											
											<em><span id="error-message-eligibility-quiz" class="error-message"></span></em>
										</div>
									</div> 
									<button class="next btn btn-danger btn-lg rounded-3 p-2 col-lg-3 col-sm-4" type="button" name="next">Next Step</button>
								</fieldset>

								<!-- Confirm -->
								<fieldset id="fs-confirm">
									<div class="form-card">
										<h2 class="fs-title text-center">Confirm your Registration</h2><hr>
										<div class="row align-items-center">
											<div class="col-lg-5">
												<div class="card text-center">
													<i class="card-img-top bi bi-calendar-check" style="font-size: 5rem; color: red;"></i>
												</div>
											</div>
											<div class="col-lg-7">
												<div class="card-body">
													<h5 class="card-title" id="card-event-title"></h5>
													<p class="card-text" id="donor-event-location"></p>
													<p class="card-text" id="card-date-time"></p>
												</div>
											</div>	
										</div>
									</div>
									<button class="previous btn btn-outline-danger btn-lg rounded-3 p-2 m-2 col-lg-3 col-sm-4" type="button" name="previous">Previous</button>
									<button class="btn btn-danger btn-lg rounded-3 p-2 col-lg-3 col-sm-4" type="button" id="confirm-appointment">Confirm</button>
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
								<p><i id="modal-icon" class=" bi bi-check2-circle" style="font-size: 4rem; color: green"></i></p>
								<p id="modal-message" style="color: black;"><b>Thank you!</b> <br>Your appointment schedule is successful.<br> Please expect an email shortly.</p></br>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	  </div>
    </main>
    <?php
    	include_once("../../components/simple-footer.php");
	?>
    <script src="../../../js/user/drives/make-mobile-donation.js" type="module"></script>
</body>
</html>
