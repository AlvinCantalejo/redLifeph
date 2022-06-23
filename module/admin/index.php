<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="stylesheet" href="../../res/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <link rel="stylesheet" media="screen" href="../../res/font/font.css" type="text/css"/>
    <script src="../../res/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   
    <!-- Custom styles for this template -->
    <link rel = "stylesheet" type="text/css" href="../../css/admin/index.css">

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
    <header class="navbar navbar-expand-lg navbar-dark sticky-top p-0 shadow">
      <nav class="container-fluid bd-gutter flex-wrap flex-lg-nowrap" aria-label="Main navigation">
        <button class="navbar-toggler d-md-none collapsed p-2" type="button"data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle docs navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php" class="p-3 ">
          <img src="../../res/img/logo.svg" class="red-life-logo" alt="red-life-logo">
        </a>
        <button class="navbar-toggler profile d-flex order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasProfile" aria-controls="offcanvasProfile" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bi bi-person-circle" style="font-size: 1.5rem;"></i>
        </button>
      </nav>
    </header>

    <!-- PROFILE OFFCANVAS -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasProfile">
      <div class="offcanvas-header">
        <div class="row">
          <div class="text-end">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <h3 class="offcanvas-title mt-3">Administrator</h3>
          <p class="text-dark" id="email">administrator123@gmail.com</p>
        </div>
      </div>
      <hr class="m-0">
      <div class="offcanvas-body">
        <ul class="list-unstyled px-2">
          <li>
            <a class="text-decoration-none fs-5 " href="#">
              <i class="bi bi-check2-circle" style="font-size: 1.5rem;"></i>
              Profile</a>
          </li>
        </ul>
      </div>
      <hr class="m-0">
      <div class="offcanvas-footer p-3">
        <ul class="list-unstyled px-2">          
          <li>
            <a class="text-decoration-none fs-5 " href="#">
              <i class="bi bi-box-arrow-in-left" style="font-size: 1.5rem;"></i>
              Logout</a>
          </li>
        </ul>
      </div>
    </div>

    <div class="container-fluid">
        <!-- SIDEBAR OFFCANVAS -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-light mt-3 sidebar collapse" tabindex="-1" id="offcanvasSidebar">
          <div class="position-sticky pt-5">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <i class="bi bi-check2-circle" style="font-size: 1.5rem;"></i>
                  Manage Donations
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-check2-circle" style="font-size: 1.5rem;"></i>
                  Manage Requests
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="bi bi-check2-circle" style="font-size: 1.5rem;"></i>
                  Manage Drives
                </a>
              </li>
            </ul>
          </div>
        </nav>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
              </button>
            </div>
          </div>
        </div>
      </main>
    </div>



       <script src="../../js/admin/index.js"></script>

  </body>
</html>
