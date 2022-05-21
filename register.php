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

    <link rel="stylesheet" type="text/css" href="./css/main.css">
    
    <title>Registration | redLife.ph</title>

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
					<p class="description">You can now manage all your appointment </br>
						details in one convenient place.</p>  
				</div>
				<div class="col-sm-5">
					<div class="registration-box">
						<br>
						<form class="registration-form" id="registration-form">
							<p class="row1"> 
								<label for="first-name">First Name</label>
								<input class="first-name" type="first-name" id="first-name" name="first_name" required/>
							</p>
							<p class="row2"> 
								<label for="last-name">Last Name</label>
								<input class="last-name" type="last-name" id="last-name" name ="last_name" required/>
							</p>
							<p class="row3"> 
								<label for="birth-date">Date of Birth </label> 
								<input class="birth-date" type="date" id="birth-date" name="birth_date" value="2003-12-31" min="1956-01-01" max="2003-12-31" required/>
							</p>
							<p class="row4"> 
								<label for="gender">Gender</label>
								<select class="gender" name="gender" id="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="others">Prefer not to say</option>
								  </select>
							</p>
							<p class="row5"> 
								<label for="phone-number">Phone Number</label>
								<input class="phone-number" type="text" id="phone-number" name="phone_number" required/>
							</p>
							<p class="row6"> 
								<label for="email">Email Address </label>
								<input class="email" type="email" id="email" name="email" autocomplete="off" required/>
							</p>
							<p class="row7"> 
								<label for="password">Password</label>
								<input class="password" type="password" id="password" name="password" autocomplete="off" required/>
							</p>
							<p class="row8"> 
								<label for="repeat-password">Repeat Password </label>
								<input class="repeat-password" type="password" id="repeat-password" name="repeat_password" autocomplete="off" required/>
							</p>
						</form>
							<div class="registration-button">
								<button class="registration-button" id="btn-register">REGISTER</button><br></div>
								<span class="fst-italic text-danger" id="error-message"></span>
							<hr style="width:80%; margin-left:10% !important; margin-right:10% !important;"/>
							<div class="bottom-form">
								Upon registration you agreed on our<br>
								<a href ="Terms and Condition.html"class="TCandPolicy">Terms and Condition</a> |
								<a href ="Privacy Setting.html" class="TCandPolicy"> Privacy Setting</a>
							</div>
						
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
    <script src="./js/register.js" type="module"></script>
</body>
</html>