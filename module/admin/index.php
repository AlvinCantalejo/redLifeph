<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">

        <link rel="stylesheet" href="../../res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" media="screen" href="../../res/font/font.css" type="text/css"/>
        <link rel = "stylesheet" type="text/css" href="../../css/admin/index.css">
        <script src="../../res/jquery/jquery-3.6.0.min.js"></script>
        <script src="../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
        <title>Administrator | redLife.ph</title>

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
                    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <img src="../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
                    </a>

                    <div class="p-2 bd-highlight">
                        <span><strong>Admin</strong></span>
                        <span class="profileName">Profile Name</span>
                        <img  src="../../res/img/loginIcon.png" class="profilePhoto" alt="profile-photo" >
                    </div>
                </header>
            </div>


            <div class="container buttons">
                <div class="row">
                    <div class="col-lg-3">
                        <img src="../../res/img/donateLogo.png" class="logo" alt="donate-logo" id="btn-donate" name="btn-donate"><br><br>
                        <p>Book your blood donation appointment now</p>
                        <p><a class="btn btn-outline-danger" href="./module/user/donate/index.php">Donate &raquo;</a></p>
                    </div>

                    <div class="col-lg-3">
                        <img src="../../res/img/requestLogo.png" class="logo" alt="request-logo" id="btn-request" name="btn-request"><br><br>
                        <p>Schedule request for blood products</p>
                        <p><a class="btn btn-outline-danger" href="./module/user/request/index.php">Request &raquo;</a></p>
                    </div>

                    <div class="col-lg-3">
                        <img src="../../res/img/campaignLogo.png" class="logo" alt="campaign-logo" id="btn-campaign" name="btn-campaign"><br><br>
                        <p>Browse blood donation campaign near you</p>
                        <p><a class="btn btn-outline-danger" href="./module/user/campaign/index.php">Campaign &raquo;</a></p>
                    </div>
                </div>
            </div></br> </br>
        </main>

        <?php
            include_once(__DIR__ ."/../../module/components/footer.php");
        ?>
        <script src="../../js/index.js" type="module"></script>
    </body>
</html>
