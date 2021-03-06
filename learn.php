<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="./res/img/favicon.svg">

    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	  <link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>
    <link rel = "stylesheet" type="text/css" href="./css/main/learn.css">
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>

    <title>redLife.ph | Learn</title>

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
    <header class="navbar navbar-expand-lg navbar-dark fixed-top bg-light shadow py-3">
      <nav class="container-xl bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <a href="index.php" class="text-decoration-none">
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
              <a class="nav-link  text-dark" href="request.php">Request</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="drives.php">Mobile Donation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active link-danger" aria-current="page" href="learn.php">Learn</a>
            </li>
          </ul><br>
          <form class="d-flex justify-content-center" role="search">
            <button type="button" class="btn btn-danger me-2 open-login-form">Login</button>
            <button type="button" class="btn btn-outline-danger open-register-form">Register</button>
          </form>
        </div>
      </nav>
    </header>
    <main>
      <div class="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./res/img/learn-bg.png" class="photo" style="z-index: 0" alt="carousel-image">
            <div class="color-overlay"></div>
            <div class="carousel-caption text-start">
              <div class="col-lg-12 text-center">
              <h6>Learn about</h6>
              <h1>blood donation</h1>
              <h5 class="m-2">Discover how blood donation works. You can browse here tips and guidelines of donation 
                process. All the important things about blood donation process is available here. </h5>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-12"> 
            <div class="container p-3" id="eligibility"><br><br>
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
                      <strong>Pregnancy/Breastfeeding:</strong>
                    </span> 
                    Persons who are pregnant are not eligible to donate. Wait 6 weeks after giving birth.
                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Dental:</strong>
                    </span>
                    Acceptable after dental procedures as long as there is no infection present. Wait until finishing antibiotics for a dental infection. Wait for 3 days after having oral surgery.                  </p>
                 
                </div>

                <div class="col-md-6 ">

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Surgery:</strong>
                    </span>
                    It is not necessarily surgery but the underlying condition that precipitated the surgery that requires evaluation before donation. Evaluation is on a case by case basis. You should discuss your particular situation with the health historian at the time of donation.                  </p>
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
                    Acceptable as long as the instruments used were single-use equipment and disposable (which means both the gun and the earring cassette were disposable). Wait 3 months if a piercing was performed using a reusable gun or any reusable instrument.                  </p>

                  <p class="pt-2">
                    <span class="text-danger">
                      <strong>Alcohol:</strong>
                    </span>
                    You cannot give blood if you are under the influence of alcohol. You must not consume alcohol on the day of donation.</p>

                  
                </div>
              </div>
            </div>

            <div class="container-fluid"><br><br>
              <div class="row align-items-md-stretch">
                <h2 class="pb-5 display-6 fw-bold text-center" style="color:#9e1e18">Process of Blood Donation</h2><br><br>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img" data-bs-toggle="modal" data-bs-target="#picture-1-modal" type="button">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="./res/img/001.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 1</h5>
                      <h4>Registration</h4><hr>
                      <p class="p-2">Fill-out donor history questionnare. Make sure that all information included are valid and true.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img" data-bs-toggle="modal" data-bs-target="#picture-2-modal" type="button">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="./res/img/002.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 2</h5>
                      <h4>Blood Typing / Hemoglobin Testing</h4><hr>
                      <p class="p-2">Undergo initial interview and know your blood type and hemoglobin status</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img" data-bs-toggle="modal" data-bs-target="#picture-3-modal" type="button">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="./res/img/003.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 3</h5>
                      <h4>Physical Examination</h4><hr>
                      <p class="p-2">A mini-physical exam is performed by the doctor to check your general appearance, heart, and lungs.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img" data-bs-toggle="modal" data-bs-target="#picture-4-modal" type="button">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="./res/img/004.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 4</h5>
                      <h4>Blood Extraction</h4><hr>
                      <p class="p-2">A 450ml of blood is drawn from a vein in your arm for about 5-10 minutes. Stay calm and relax your arms.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-5">
                  <div class="h-100 bg-white rounded shadow">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="200" role="img" data-bs-toggle="modal" data-bs-target="#picture-5-modal" type="button">
                      <rect width="100%" height="100%" fill="#a83232"/>
                      <image xlink:href="./res/img/005.jpg" height="100%" width="100%"/>
                    </svg>
                    <div class="p-3 text-dark">
                      <h5 class="text-danger">STEP 5</h5>
                      <h4>Recovery Period</h4><hr>
                      <p class="p-2">After extraction, remain at rest for about 10-15 minutes and have something to eat and drink until your body is adjusted to change in volume.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div class="container mb-5 p-5 bg-light" id="remiders"><br><br>
              <h2 class="pb-2 display-6 fw-bold text-center" style="color:#9e1e18">Reminders Before, During and After Blood Donation</h2><br><br>
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

      <!-- PICTURE-1 MODAL -->
      <div id="picture-1-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="./res/img/001.jpg" width="100%"/>
            </div>
          </div>
        </div>
      </div>

      <!-- PICTURE-2 MODAL -->
      <div id="picture-2-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="./res/img/002.jpg" width="100%"/>
            </div>
          </div>
        </div>
      </div>

      <!-- PICTURE-3 MODAL -->
      <div id="picture-3-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="./res/img/003.jpg" width="100%"/>
            </div>
          </div>
        </div>
      </div>

      <!-- PICTURE-4 MODAL -->
      <div id="picture-4-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="./res/img/004.jpg" width="100%"/>
            </div>
          </div>
        </div>
      </div>

      <!-- PICTURE-4 MODAL -->
      <div id="picture-5-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body mb-0 p-0">
              <img src="./res/img/005.jpg" width="100%"/>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
    	include_once("./module/components/main-footer.php");
    ?>
    <script src="./js/learn.js" type="module"></script>
  </body>
</html>
