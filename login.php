<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

	<link rel="icon" href="./res/img/favicon.svg">

    <link href="./res/bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./res/jquery/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="./css/main/login.css">
    
    <title>redLife.ph | Login</title>

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
	<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom">
			<a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<img src="./res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
			</a>
        </header>
    </div>

	<div class="container col-xl-12 col-xxl-10 px-4 py-5">
		<div class="row align-items-center g-lg-5 py-5">
			<div class="col-lg-7 text-center text-lg-start">
				<h1 class="display-4 fw-bold lh-1 mb-3 text-danger">Welcome to redLife.ph!</h1>
				<p class="col-lg-10 fs-4">Manage all your appointment details in one convenient place.</p>
			</div>
			<div class="col-md-10 mx-auto col-lg-5">
				<form class="p-4 p-md-5 form-box rounded-3 shadow-lg bg-body" id="login-form">
					<div class="form-floating mb-3">
						<input type="email" class="form-control form-control-sm" id="email" name="email" autocomplete="off" placeholder="name@example.com" required>
						<label for="email">Email address</label>
					</div>
					<div class="form-floating">
						<input type="password" class="form-control form-control-sm" id="password" name="password" autocomplete="off" placeholder="password" required>
						<label for="password">Password</label>
					</div>

					<div class="error-msg"><span class="text-danger" id="error-message"></span></div>
					<button class="w-100 btn btn-lg btn-danger btn-login" type="submit">Login</button>

					<hr class="mb-4 mt-0">
					<p class="text-muted text-center">Don't have an account yet?</p>
					<button class="w-100 btn btn-lg btn-outline-danger open-register-form" type="button">Register</button>
				</form>
			</div>
		</div>
  	</div>

	<?php
		include_once("./module/components/alert-modal.php");
    ?>

	<script src="./js/login.js" type="module"></script>
</body>
</html>