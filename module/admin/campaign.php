<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">

    <link rel="stylesheet" href="./../../res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" media="screen" href="./../../res/font/font.css" type="text/css"/>
    <link rel = "stylesheet" type="text/css" href="./../../css/admin/campaign.css">
	<script src="./../../res/jquery/jquery-3.6.0.js"></script>
    <script src="./../../res/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="./../../res/icons/icons.js"></script>
    <script src="./../../res/bootstrap/js/popper.min.js"></script>
    <script src="./../../res/bootstrap/js/bootstrap.min.js"></script>
    <title>Admin | Donation Drive</title>

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
            <header class="d-flex bd-highlight align-items-center justify-content-md-between py-3 border-bottom">          
            <a href="./../../module/admin/campaign.php" class="me-auto p-2 bd-highlight text-dark text-decoration-none">
                <img src="./../../res/img/redLifePhLogo.svg" class="red-life-logo" alt="red-life-logo">
            </a>
            <div class="p-2 bd-highlight">
                <span><strong>Admin</strong></span>
                <span class="profileName">Profile Name</span>
                <img  src="./../../res/img/loginIcon.png" class="profilePhoto" alt="profile-photo" >
            </div>
            </header>
        </div>

        <div class="col-md-12 ms-sm-auto col-lg-10 px-md-4">
            <div class="tab-content" id="account">
                <!-- ===================== CAMPAIGN ======================-->
                <div class="tab-pane fade show active"></br>
                    <h1 class="tableTitle">Manage Donation Drives </h1> <br>
                    <div class="row">
                        <div class="col-sm-6 ">
                            <input class="form-control form-control-sm" type="text" id="search" placeholder="Search">
                        </div>

                        <!-- Trigger/Open The Modal -->
                        <div class="col-sm-6">
                            <p class="text-end font-monospace"> <span class = "add-new-item-button">Create New Donation Drive</span>
                                <a href="#account-modal">
                                    <span class="add-new-item-button" data-feather="plus-circle"></span>
                                </a>
                            </p>
                        </div>
                    </div> <br>

                    <div class="table-responsive">
                        <table class="table table-sm" id="donation-drive-table">
                            <thead>
                                <tr>
                                    <td><b>ID</b></td>
                                    <td>
                                        <b>Donation Drive Details</b>
                                    </td>
                                    <td><b>Posted By</b></td>
                                    <td><b>Date Posted</b></td>
                                    <td  style="text-align: center"><b>Pre-registered</br>Participants</b></td>
                                    <td colspan='2' style="text-align: center"><b>Actions</b></td>

                                </tr>
                            </thead>
                            <tbody id="donation-drive-table-body">
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- CREATE NEW CAMPAIGN & UPDATE CAMPAIGN -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div id="donation-drive-modal" class="modal" tabindex="-1">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title"></h4>
                                        <a href=""><button type="button" class="btn-close close-modal"></button></a>
                                    </div>
                                    <form method="post" id="donation-drive-form">
                                        <div class="modal-body">
                                            <div class="container-fluid">
                                                <input type="hidden" name="id" id="id" />
                                                <input type="hidden" name="method" id="method" />
                                                <input type="hidden" name="photo_file" id="photo-file" />
                                                <div class="text-center">
                                                    <img id="drive-photo-view" class="rounded"  >
                                                </div>
                                                
                                                <div class="row align-items-start">   
                                                    <div class="col">
                                                        <label for="event-title">Event Title</label>
                                                        <input type="text" class="form-control" id="event-title" name="event_title" placeholder="Blood Letting Activity 2022" >
                                                    </div>
                                                    <div class="col">
                                                        <label class = "event-photo" for="event-photo">Event Photo</label>
                                                        <input type="file" accept="image/*" class="form-control event-photo" id="event-photo" name ="photo_filename">
                                                    </div>
                                                </div>

                                                <div class="row align-items-start">   
                                                    <div class="col">
                                                        <label for="event-date">Date</label>
                                                        <input type="date" class="form-control" id="event-date" name="event_date">
                                                        <label for="event-location">Location</label>
                                                        <input type="text" class="form-control" id="event-location" name="event_location" placeholder="De La Salle University - Dasma" >
                                                    </div>
                                                    <div class="col">
                                                        <label for="event-details">Details</label>
                                                        <textarea class="form-control" id="event-details" name ="event_details" placeholder="Write a brief description about the event."></textarea>
                                                        <span class="remaining"></span>
                                                    </div>
                                                </div>

                                                <span class="fst-italic text-danger error-message"></span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" id="submit-form" class="btn btn-primary" value="Save">
                                            <a href=""><button type="button" class="btn btn-secondary close-modal">Cancel</button></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PARTICIPANTS TABLE MODAL -->
                    <div class="d-grid gap-2 d-lg-flex justify-content-md-end">
                        <div id="view-participants" class="modal" tabindex="-1">
                            <div class= "modal-dialog modal-fullscreen modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Pre-Registered Participants</h5>
                                        <a href=""><button type="button" class="btn-close close-modal"></button></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                        <td><b>Donor ID</b></td>
                                                        <td><b>Name</b></td>
                                                        <td><b>Eligibility</b></td>
                                                        <td><b>Date of Registration</b></td> 
                                                        <td style="text-align: center"><b>Examination</b></td> 
                                                        </tr>
                                                    </thead>
                                                    <tbody id="participants-table-body">
                                                        <tr></tr>
                                                    </tbody>
                                                </table>
                                            </div>          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CONFIRMATION MODAL -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div id="confirm-modal" class="modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"></h5>
                                        <a href=""><button type="button" class="btn-close close-modal"></button></a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <p id="confirmation-message"></p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" id="confirm" class="btn btn-primary" value="">
                                        <a href=""><button type="button" class="btn btn-secondary close-modal">Cancel</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ALERT MODAL -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <div id="alert-modal" class="modal">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="container-fluid">
                                    <div id="alert">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
    </main>
    <?php
    	include_once("./../../module/components/footer.php");
    ?>
    <script src="./../../js/admin/campaign.js" type="module"></script>
  </body>
</html>
