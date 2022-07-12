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
    <link rel="stylesheet" type="text/css" href="../../../css/user/request/track-request.css">
    
	  <script src="../../../res/jquery/jquery-3.6.0.min.js"></script>
	  <script src="../../../res/bootstrap/js/popper.min.js"></script>
    <script src="../../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../res/bootstrap/js/bootstrap.min.js"></script>    
	  <script src="../../../res/icons/icons.js"></script>


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

      img.footer-logo{
        height:30px;
      }

      a img{
        width:40px;
        height:40px;
      }
    </style>
  </head>
  <body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
      <a href="index.php" class="d-flex align-items-center col-md-3 mb-md-0 text-dark text-decoration-none">
        <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
      </a>
    </header>
    <main>
      <div class="container mt-4">
        <div class="return">
          <a href="index.php" class="nav-link px-2 mb-4 link-dark">
            <i class="bi bi-arrow-left" style="font-size: 1rem;"></i>
            Back</a>
        </div>
        <div class="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../../../res/img/request-bg.jpg" class="photo" style="z-index: 0" alt="carousel-image">
              <div class="color-overlay"></div>
              <div class="carousel-caption text-center">
                <h3> We are all in this together. Philippine Red Cross extends its advocacy to help 
                    people in-need for blood products.</h5> <br><br>

                <div class="input-group input-group-lg mb-3">
                    <input type="text" class="form-control rounded-3" name="release_number" placeholder="Enter release number"
                    id="release-number">
                    <button class="btn btn-danger rounded-3 btn-lg" type="button"  id="track-request">Track Request</button>
                </div>
              </div>
            </div>
          </div> 
        </div>
        <div class="card">
          <div class="row card-body">
            <div class="row" id="request-result">
              <h2 class="card-title">Input your release number.</h2>
              <div id="result-area"></div>
          </div>
        </div>  
      </div>
    </main>
    <div class="container pt-5 fixed-bottom">
      <footer class="d-flex flex-wrap justify-content-between align-content-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex">
          <img src="../../../res/img/redLifePhLogo.svg" class="footer-logo" alt="red-life-logo">
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <span class="mb-3 mb-md-0 text-muted align-self-center">&copy; 2022 redLife.ph</span>
        </div>
      </footer>
    </div>
    <script src="../../../js/user/request/track-request.js" type="module"></script>
  </body>
</html>
