<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <link href="./res/bootstrap/css/bootstrap.min.css"  rel="stylesheet">
	<script src="./res/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./res/jquery/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>

    <link rel = "stylesheet" type="text/css" href="./css/main.css">
    
    <title>Login | redLife.ph</title>

</head>

<body>
	<div class="header" style="z-index: 1"> 
		<div class="header-left">
			<img src="./res/img/redLifePhLogo.png" class="red-life-logo" alt="red-life-logo">
			<div class="header-text-left">
				<div class="company-title">philippine red cross cavite chapter</div>
				<div class="system-name">redLife.ph</div>
			</div>
		</div>

	</div>
	
	<div class="content" style="z-index: 0">
		<div class="color-overlay"></div>
		<div class="login-alignment">
			<div class="row">
				<div class="col-sm-7">
					<p class="welcome">Welcome</p>
					<p class="description">You can now manage all your appointment </br> details in one convenient place.</p>  
				</div>
				<div class="col-sm-5">
					<div class="login-box">
						<br><br>
						<form class="login-form" id="login-form">
							<input  class="login-email" type="email" id="email" placeholder="Email Address" required/>
							<input  class="login-password" type="password" id="password" placeholder="Password" required /><br>
							<button class="login-button" id="login-btn">LOGIN</button><br>
							<p class="forgot-password">Forgot password?</p>
						</form>
						<hr style="width:80%; margin-left:10% !important; margin-right:10% !important;"/>
						<p class="register">Don't have an account yet?</p>
						<button class="register-button" onclick="window.location.href='register.php'">REGISTER</button> 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer"> 
		<div class="row">
			<div class="col-md-6">
				<div class="Terms-and-Privacy-Setting">
					<a href ="Terms and Condition.html" class="Terms-and-Privacy-Setting">Terms and Condition | </a>
					<a href ="Privacy Setting.html" class="Terms-and-Privacy-Setting">Privacy Setting</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="footer-info">2021 Philippine Red Cross - redLife.ph</p>
			</div>
		</div>
	</div>
	<script src="./js/login.js" type="module"></script>
</body>
</html>