<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css"  rossorigin="anonymous">
	<link rel="stylesheet" media="screen" href="./res/font/font.css" type="text/css"/>

    <link rel = "stylesheet" type="text/css" href="./css/main.css">
    
    <title>Welcome | redLife.ph</title>

</head>
<body>
    <div class="header" id="myHeader" style="z-index: 1"> 
		<div class="header-left">
			<img src="./res/img/redLifePhLogo.png" class="redLifePhLogo" alt="redLifePhLogo">
			<div class="header-text-left">
				<div class="PRCCompany">philippine red cross cavite chapter</div>
				<div class="redLifePhName">redLife.ph</div>
			</div>
		</div>

		<section id ="signedOut">
			<div class="header-right">
				<img src="./res/img/loginIcon.png" class="loginIcon" alt="loginIcon">
				<div class="LoginLink">
					<a href ="login.php" class="LoginPage">Login</a>
				</div>
			</div>
		</section>
		
		<section id="signedIn" hidden="true"> 
			<div class="header-right">
				<img src="" class="loginIcon" alt="profile-picture">
				<div class="LoginLink">
					<a class="LoginPage">Profile Name</a>
				</div>
			</div>
		</section>
	</div>
	
	<div class="content" style="z-index: 0">
		<div class="color-overlay"></div>
		<div class="row">
			<div class="welcomeHeadTitle">Every donation saves 3 lives!</div>
		</div>
		<div class="logo-alignment">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-2">
					<img src="./res/img/donateLogo.png" class="logo" alt="donateLogo" onclick="window.location.href='login.php'"><br>
					<div class="buttonTitle">Donate</div>
					<div class="buttonSubtitle">Make appointment now!</div>
				</div>

				<div class="col-md-2">
					<img src="./res/img/requestLogo.png" class="logo" alt="requestLogo"><br>
					<div class="buttonTitle">Request</div>
					<div class="buttonSubtitle">Schedule request for blood products</div>
				</div>

				<div class="col-md-2">
					<img src="./res/img/campaignLogo.png" class="logo" alt="campaignLogo"><br>
					<div class="buttonTitle">Campaign</div>
					<div class="buttonSubtitle">Browse blood donation campaign near you</div>
				</div>

				<div class="col-md-2">
					<img src="./res/img/learnLogo.png" class="logo" alt="learnLogo"><br>
					<div class="buttonTitle">Learn</div>
					<div class="buttonSubtitle">Discover how blood donation works</div>
				</div>
				<div class="col-md-2"></div>
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
    <script></script>
</body>
</html>