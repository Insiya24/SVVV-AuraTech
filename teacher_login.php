<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Teacher Login Screen</title>
  <!-- Favicon -->
  <link href="admin/dashboard/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="admin/dashboard/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="admin/dashboard/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="Admin/dashboard/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&display=swap');
    html {
      scroll-behavior: smooth;
    }
    .new-font{font-family: 'IBM Plex Sans JP', sans-serif;}
    #about{
      padding:5% 6% 5%;
    }
    #about img{
      width: 30%;
      margin: 7%;
    }
    #about .col-lg-4 .card{
      padding: 10% 3%;
      cursor: pointer;
      transition: 0.5s ease;
      box-shadow: 5px 5px 15px -5px rgba(0, 0, 0, 0.1);
      margin: 5px 0;
    }
    #about .col-lg-4 .card:hover{
      background-color: #D6E4E5;
    }
    #contact i{
      font-size: 40px;
      border-radius: 100px;
      margin: 0 7px;
      cursor: pointer;
      transition: 0.5 ease;
    }
    #contact i:hover{
      opacity: 0.8;
    }
  </style>
</head>

<body>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="" href="#">
          <img style="width: 45%; height:45;" src="Admin/dashboard/assets/img/theme/kou-logo.png"  alt="...">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6">
                <a href="#">
                <img style="width: 45%; height:45;" src="Admin/dashboard/assets/img/theme/kou-logo.png"  alt="...">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a style="color: #343A40;" class="nav-link nav-link-icon" href="#">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text new-font">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a style="color: #343A40;" href="#about" class="nav-link nav-link-icon" href="#">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text new-font">About Us</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#contact" style="color: #343A40;" class="nav-link nav-link-icon" href="#">
                <i class="fas fa-address-book"></i>
                <span class="nav-link-inner--text new-font">Contact</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header py-7 py-lg-8" style="background-color: #D6E4E5;">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 style="font-size:30px ;color:#54B435;" class="new-font">Welcome!</h1>
              <h3 style="color: #343A40;" class="new-font">Teacher Login Screen <i class="fas fa-info-circle"></i></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
          <div class="card-body px-lg-5 py-lg-5">
                  <?php if(isset($_SESSION['t_message'])): ?>
                      <div class="alert" style="color: red; text-align:center;">
                          <?php echo '<p class="new-font"><i class="fas fa-exclamation-circle"></i> '.$_SESSION['t_message'].'</p>';
                              unset($_SESSION['t_message']);
                          ?>
                      </div>
                  <?php endif ?>
                <form action="process/teacher_login.php" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input name="teacher-number" class="form-control" placeholder="Teacher Number" type="text" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input name="teacher-password" class="form-control" placeholder="Password" type="password" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="teacher-login-btn" class="btn btn-success my-4"><i class="fas fa-sign-in-alt"></i> Teacher Login</button>
                </div>
                <a class="new-font" href="admin_login.php?admin-login" style="font-size:15px ;">Sign in as Admin?</a><br>
                <a class="new-font" href="commission_login.php?commission-login" style="font-size:15px ;">Sign in as Commission?</a><br>
                <a class="new-font" href="index.php?student-login" style="font-size:15px ;">Sign in as Student?</a><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="about">
      <center>
        <h1 style="font-size:30px ;color:#54B435;" class="new-font mb-6">What You Can Do <i class="fas fa-question-circle"></i></h1>
      </center>
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <center>
              <img src="./img/done.png" alt="">
              <h3 class="new-font"><i style="color:#7743DB ;" class="ni ni-planet"></i> Internship 1 Application</h3>
              <h4 class="new-font">Track Internship 1</h4>
            </center>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <center>
              <img src="./img/yes.png" alt="">
              <h3 class="new-font"><i style="color:#7743DB ;" class="ni ni-planet"></i> Internship 2 Application</h3>
              <h4 class="new-font">Track Internship 2</h4>
            </center>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <center>
              <img src="./img/success.png" alt="">
              <h3 class="new-font"><i style="color:#7743DB ;" class="ni ni-planet"></i> IME Application</h3>
             
