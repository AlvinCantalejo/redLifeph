<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

	  <link rel="stylesheet" media="screen" href="../../../res/font/font.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="../../../css/user/learn/index.css">
    
	  <script src="../../../res/jquery/jquery-3.6.0.min.js"></script>
    <script src="../../../res/icons/icons.js"></script>
    <script src="../../../res/bootstrap/js/popper.min.js"></script>
    <script src="../../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../res/bootstrap/js/bootstrap.min.js"></script>

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
            <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li class="home-nav"><a href="../../../module/user/index.php" class="nav-link px-2 link-dark">Home</a></li>
            <li class="donate-nav"><a href="../../../module/user/donate/index.php" class="nav-link px-2 link-dark">Donate</a></li>
            <li class="request-nav"><a href="../../../module/user/request/index.php" class="nav-link px-2 link-dark">Request</a></li>
            <li class="drives-nav"><a href="../../../module/user/drives/index.php" class="nav-link px-2 link-dark">Drives</a></li>
            <li class="learn-nav"><a href="../../../module/user/learn/index.php" class="nav-link px-2 link-dark"><strong>Learn</strong></a></li>
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
                  <li><a class="dropdown-item"  href="../../../logout.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </header>
      </div>

      <div class="bg-image">
        <div class="mask d-flex flex-wrap align-items-center" style="background-color: rgba(0, 0, 0, 0.7); height: 85vh;">
          <div class="container text-white">
            <div class="text-center">
              <h6>Learn about</h6>
              <h1>blood donation</h1>
              <h5 class="m-2">Discover how blood donation works. You can browse here tips and guidelines of donation 
                process. All the important things about blood donation process is available here. </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="container"><br><br>
        <div class="row">
          <div class="col-md-12"> 

            <div class="container p-3"><br><br>
              <div class="row align-items-center">
                <h2 class="display-6 fw-bold text-center" style="color:#9e1e18">Who can donate blood?</h2>
                <p class="text-center text-dark">There are some basic requirements one  need to fulfill in order to become a blood donor. Below are some basic eligibility guidelines:</p><hr><br><br><br>

                <div class="col-md-6">
                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Age:</strong>
                    </span> 
                    Between 16-65 years old (16-17 years old with parent's written consent, 60-65 years old must be a regular donor)
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Weight:</strong>
                    </span>
                    At least 50kgs or 110 pounds
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Health:</strong>
                    </span>
                    Must be in good health at the time of donation. You cannot donate if you have cold, flu, sore throat, cold sore, stomach bug or any other infection.
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Medication:</strong>
                    </span>
                    At least 50kgs or 110 pounds
                  </p> 

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Pregnancy/Breastfeeding:</strong>
                    </span> 
                    Between 16-65 years old (16-17 years old with parent's written consent, 60-65 years old must be a regular donor)
                  </p>
                </div>

                <div class="col-md-6 ">
                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Tattoo:</strong>
                    </span>
                    If you have recently had a tattoo, you cannot donate for 6 months from the date of procedure.
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Piercing:</strong>
                    </span>
                    Must be in good health at the time of donation. You cannot donate if you have cold, flu, sore throat, cold sore, stomach bug or any other infection.
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Alcohol:</strong>
                    </span>
                    If you have recently had a tattoo, you cannot donate for 6 months from the date of procedure.
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Dental:</strong>
                    </span>
                    If you have recently had a tattoo, you cannot donate for 6 months from the date of procedure.
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Surgery:</strong>
                    </span>
                    If you have recently had a tattoo, you cannot donate for 6 months from the date of procedure.
                  </p>
                </div>
              </div>
            </div>

            <div class="container-fluid p-2"><br><br>
              <div class="row align-items-md-stretch">
                <h2 class="mb-5 display-6 fw-bold text-center" style="color:#9e1e18">Process of Blood Donation</h2><br><br>

                <div class="col-md-3 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="../../../res/img/002.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 1</h5>
                      <h4>Registration and Blood Typing / Hemoglobin Testing</h4><hr>
                      <p class="p-2">Fill-out Donor History Questionnare, undergo initial interview and know your blood type and hemoglobin status</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="../../../res/img/003.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 2</h5>
                      <h4>Physical Examination</h4><hr>
                      <p class="p-2">A mini-physical exam is performed by the doctor to check your general appearance, heart, and lungs.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="../../../res/img/004.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 3</h5>
                      <h4>Blood Extraction</h4><hr>
                      <p class="p-2">A 450ml of blood is drawn from a vein in your arm for about 5-10 minutes. After extraction, remain at rest for about 10-15 minutes and have something to eat and drink until your body is adjusted to change in volume.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="../../../res/img/005.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 4</h5>
                      <h4>Recovery Period</h4><hr>
                      <p class="p-2">After extraction, remain at rest for about 10-15 minutes and have something to eat and drink until your body is adjusted to change in volume.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container bg-light " id="reminders"><br><br>
              <h2 class="mb-5 display-6 fw-bold text-center" style="color:#9e1e18">Reminders Before,During and After Blood Donation</h2><br><br>
              <div class="row g-4 py-5 border-top row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                  <div class="icon-square text-dark flex-shrink-0 me-3">
                    <i class="bi bi-hourglass-top mt-0" style="font-size: 2rem;"></i>
                  </div>
                  <div>
                    <h4>Before Donation</h4>
                    <ul>
                      <li class="pb-2">Have enough rest and a minimum of 5 hours quality sleep</li>
                      <li class="pb-2">Eat a healthy meal</li>
                      <li class="pb-2">No alcohol intake within 24 hours prior to blood donation</li>
                      <li class="pb-2">Put on loose and comfortable clothing, avoid tight sleeves</li>
                    </ul>
    
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <div class="icon-square text-dark flex-shrink-0 me-3">
                    <i class="bi bi-hourglass-split"  style="font-size: 2rem;"></i>
                  </div>
                  <div>
                    <h4>During Donation</h4>
                    <ul>
                      <li class="pb-2">Let the Red Cross staff know if you have a preffered arm</li>
                      <li class="pb-2">Relax, listen to music, talk to order donors or read during the donation process</li>
                      <li class="pb-2">Rest and don't move your arm so that the blood will flow continuously</li>
                    </ul>
                  </div>
                </div>
                <div class="col d-flex align-items-start">
                  <div class="icon-square text-dark flex-shrink-0 me-3">
                    <i class="bi bi-hourglass-bottom"  style="font-size: 2rem;"></i>
                  </div>
                  <div>
                    <h4>After Donation</h4>
                    <ul>
                      <li class="pb-2">Drink plenty of fluids like water, juice or sterilized milk</li>
                      <li class="pb-2">For any discomfort like dizziness, lie down and elevate lower legs until you feel better. Call the attention of Red Cross staff so that proper action can be taken</li>
                      <li class="pb-2">Do not leave the site unless allowed by the Red Cross staff</li>
                      <li class="pb-2">Keep the strip bandage on for the next several hours</li>
                      <li class="pb-2">If bleeding does not stop, apply pressure on the extrated site for 1-3 minutes</li>
                      <li class="pb-2">Resume normal activities but avoid strenuous activities (basketball or joggin) within 24 hours</li>
                    </ul>
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
    <script src="../../../js/user/learn/index.js" type="module"></script>
  </body>
</html>
