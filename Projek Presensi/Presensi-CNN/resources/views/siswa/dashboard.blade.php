<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Guru</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- <div class="row p-0 m-0 proBanner" id="proBanner"> -->
        <!-- <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
            <div>
              <div class="d-flex align-items-center justify-content-between"> -->
                <!-- <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p> -->
                <!-- <a href="https://www.bootstrapdash.com/product/skydash-admin-template" target="_blank" class="btn me-2 buy-now-btn border-0">Buy Now</a> -->
              </div>
            </div>
            <!-- <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/skydash-admin-template/"><i class="ti-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="ti-close text-white"></i>
              </button>
            </div> -->
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="{{ route('siswa.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_siswa.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('siswa.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <!-- <span class="input-group-text" id="search"> -->
              <!-- <i class="icon-search"></i> -->
            </span>
          </div>
          <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
        </div>
      </li>
    </ul>
    <!-- <ul class="navbar-nav navbar-nav-right"> -->
      <!-- <li class="nav-item dropdown"> -->
        <!-- <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown"> -->
          <!-- <i class="icon-bell mx-0"></i> -->
          <!-- <span class="count"></span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <!-- <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p> -->
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <!-- <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Just now </p> -->
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Private message </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p>
            </div>
          </a>
        </div>
      </li>
      <!-- <li class="nav-item nav-profile dropdown"> -->
        <!-- <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown"> -->
          <!-- <img src="assets/images/faces/face28.jpg" alt="profile" /> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <!-- <i class="ti-settings text-primary"></i> Settings </a> -->
          <a class="dropdown-item">
            <!-- <i class="ti-power-off text-primary"></i> Logout </a> -->
        </div>
      </li>
      <li class="nav-item dropdown d-none d-lg-flex">
        <a class="nav-link dropdown-toggle" href="#" id="logoutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Logout
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="logoutDropdown">
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('siswa.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li> 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student.attendance') }}">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Presensi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student..history') }}">
        <i class="icon-check menu-icon"></i>
        <span class="menu-title">Riwayat Absen</span>
      </a>
    </li>
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  </div>
                  <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                      <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <!-- <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> -->
                          <!-- <i class="mdi mdi-calendar"></i> Today (10 Jan 2021) </button> -->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                          <!-- <a class="dropdown-item" href="#">January - March</a>
                          <a class="dropdown-item" href="#">March - June</a>
                          <a class="dropdown-item" href="#">June - August</a>
                          <a class="dropdown-item" href="#">August - November</a> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="font-weight-bold mb-4">Selamat Datang, Siswa</h3>
            <div class="row">
              <div class="d-flex flex-wrap gap-3 justify-content-start">
                <div class="card card-tale" style="width: 150px; height: 150px;">
                  <div class="card-body text-center">
                    <p class="mb-4" style="font-size: 16px;">Total Guru</p>
                    <p class="fs-30 mb-2">{{ $totalAlpa }}</p>
                  </div>
                </div>
              
                <div class="card card-dark-blue" style="width: 150px; height: 150px;">
                  <div class="card-body text-center">
                    <p class="mb-4" style="font-size: 16px;">Total Siswa</p>
                    <p class="fs-30 mb-2">{{ $totalSakit }}</p>
                  </div>
                </div>
              
                <div class="card card-light-blue" style="width: 150px; height: 150px;">
                  <div class="card-body text-center">
                    <p class="mb-4" style="font-size: 16px;">Total Mapel</p>
                    <p class="fs-30 mb-2">{{ $totalIzin }}</p>
                  </div>
                </div>
              </div>
            </div>
          <!-- partial:partials/_footer.html -->
  <footer class="text-center py-3 mt-5">
    <div class="d-flex justify-content-center">
      <!-- <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2025. All rights reserved.</span> -->
    </div>
  </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>

