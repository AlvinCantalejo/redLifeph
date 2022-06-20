<?php ?>

<div class="container" id="my-header">
    <header class="d-flex bd-highlight align-items-center justify-content-md-between py-3 border-bottom">          
        <a href="index.php" class="me-auto p-2 bd-highlight text-dark text-decoration-none">
        <img src="../../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
        </a>
        <style>
            .profilePhoto{
                width: 40px;
                height: 40px;
                padding: 5px;
            }
            .dropdown-menu{
                margin-right: 250px; 
            }
        </style>
        <div class="p-2 bd-highlight">
        <div class="dropdown">
            <img  src="../../../res/img/loginIcon.png" class="profilePhoto" alt="profile-photo" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../donate/index.php">Home</a></li>
                <li><a class="dropdown-item" href="../donate/profile.php">Manage Profile</a></li>
                <li><a class="dropdown-item" href="../donate/donation-history.php">Donation History</a></li>
                <li><a class="dropdown-item" href="../donate/manage-appointment.php">Manage Appointment</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><strong><span class="profileName" style="margin-left:15px;">Logged in as </span></strong></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
        </div>
        </div>
    </header>
</div>