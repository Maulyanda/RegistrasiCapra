<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>">
  <!-- <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>"> -->
  <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/5/56/Lambang_IPDN.png">
  <title>
    SPCP• Home
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets/css/blk-design-system.css?v=1.0.0'); ?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets/demo/demo.css'); ?>" rel="stylesheet" />
</head>

<body class="landing-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
          <span>SPCP</span> <?php echo date('Y'); ?>
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
                SPCP•
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item p-0">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header">
      <img src="<?php echo base_url('assets/img/blob.png'); ?>" class="path">
      <img src="<?php echo base_url('assets/img/path2.png'); ?>" class="path2">
      <img src="<?php echo base_url('assets/img/triunghiuri.png'); ?>" class="shapes triangle">
      <img src="<?php echo base_url('assets/img/waves.png'); ?>" class="shapes wave">
      <img src="<?php echo base_url('assets/img/patrat.png'); ?>" class="shapes squares">
      <img src="<?php echo base_url('assets/img/cercuri.png'); ?>" class="shapes circle">
      <div class="content-center">
        <div class="row row-grid justify-content-between align-items-center text-left">
          <div class="col-lg-6 col-md-6">
            <h1 class="text-white">Welcome
              <br/>
            </h1>
            <p class="text-white mb-3">Calon Praja Institut Pemerintahan Dalam Negeri</p>
            <div class="btn-wrapper mb-3">
              <a href="login" class="btn btn-success btn-link btn-sm">Registrasi Ulang CAPRA <?php echo date('Y'); ?>
              <i class="tim-icons icon-minimal-right"></i></a>
            </div>
            <div class="btn-wrapper">
              <div class="button-container">
                <button href="javascript:void(0)" class="btn btn-icon btn-simple btn-round btn-neutral">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="javascript:void(0)" class="btn btn-icon btn-simple btn-round btn-neutral">
                  <i class="fab fa-youtube"></i>
                </button>
                <button href="javascript:void(0)" class="btn btn-icon btn-simple btn-round btn-neutral">
                  <i class="fab fa-facebook"></i>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png" alt="Circle image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-switch.js'); ?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url('assets/js/plugins/chartjs.min.js'); ?>"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?php echo base_url('assets/js/plugins/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js'); ?>" type="text/javascript"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('assets/demo/demo.js'); ?>"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/js/blk-design-system.min.js?v=1.0.0'); ?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initLandingPageChart();
    });
  </script>
</body>

</html>
