<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- External Links -->
    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
	  <link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="./css/user/request/track-request.css">
    
	  <script src="./res/jquery/jquery-3.6.0.min.js"></script>
	  <script src="./res/bootstrap/js/popper.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>    
	  <script src="./res/icons/icons.js"></script>


    <title>Request | redLife.ph</title>

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
        </header>
      </div>

      <div class="container mt-4 mb-4">
        <div class="return">
            <a href="request.php" class="nav-link px-2 mb-4 link-dark">
                <i class="bi bi-arrow-left" style="font-size: 1rem;"></i>
                Return to Request Home Page</a>
        </div>
        <div class="bg-image">
            <div class="d-flex flex-wrap align-content-center" style="background-color: rgba(0, 0, 0, 0.4); height: 70vh;">
            <div class="container px-5 text-white">
                <div class="text-center">
                    <h3> We are all in this together. Philippine Red Cross extends its advocacy to help 
                        people in-need for blood products.</h5> <br><br>

                    <div class="input-group input-group-lg mb-3">
                        <input type="text" class="form-control rounded-3" placeholder="Enter release number">
                        <button class="btn btn-danger rounded-3 btn-lg" type="button" name="track_request" id="track-request">Track Request</button>
                    </div>
                </div>
            </div>
            </div>
        </div> <br>
        <div class="card">
            <div class="row card-body">
                <div class="row">
                    <h5 class="card-title">Blood Request Information</h5>
                    <div class="col-6">
                        <label for="donor-id">Tracking Number:</label>
                        <input style="border: none; background-color: white;" type="text" id="tracking-number" name="tracking_number" placeholder="ABC123" disabled><br>
                    </div>
                </div>
                <div class="col-6">
                    <label for="donor-id">Date of Request:</label> &nbsp;
                    <input style="border: none; background-color: white;" type="text" id="request-status" name="request_status" placeholder="Display Status" disabled><br>

                    <label for="donor-id">Requested Blood Type:</label> &nbsp;
                    <input style="border: none; background-color: white;" type="text" id="request-status" name="request_status" placeholder="Blood Type" disabled><br>

                    <label for="donor-id">Request Status:</label> &nbsp;
                    <input style="border: none; background-color: white;" type="text" id="request-status" name="request_status" placeholder="Display Status" disabled>
                </div>
            </div>
        </div>  
      </div>


      



    </main>
    <?php
    	include_once("./module/components/footer.php");
    ?>
    <script src="./js/user/request/index.js" type="module"></script>
  </body>
</html>
