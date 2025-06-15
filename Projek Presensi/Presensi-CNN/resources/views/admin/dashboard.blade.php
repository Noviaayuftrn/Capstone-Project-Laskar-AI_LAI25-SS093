<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
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
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_admin.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            </span>
          </div>
        </div>
      </li>
    </ul>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
            </div>
          </a>
        </div>
      </li>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
          <a class="dropdown-item">
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
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('teacher.index') }}" aria-controls="form-elements">
        <i class="icon-briefcase menu-icon"></i>
        <span class="menu-title">Guru</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student.index') }}">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Siswa</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('major.index') }}">
        <i class="ti-layout menu-icon"></i>
        <span class="menu-title">Jurusan</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('class.index') }}">
        <i class="ti-blackboard menu-icon"></i>
        <span class="menu-title">Kelas</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
    </li>  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('subject.index') }}">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Mata Pelajaran</span>
          <!-- <i class="menu-arrow"></i> -->
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
                    <h3 class="font-weight-bold">Selamat Datang, Admin</h3>
                  </div>
                  <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">
                      <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-wrap gap-3 justify-content-start">
              <div class="card card-tale" style="width: 150px; height: 150px;">
                <div class="card-body text-center">
                  <p class="mb-4" style="font-size: 16px;">Total Guru</p>
                  <p class="fs-30 mb-2">{{ $totalGuru }}</p>
                </div>
              </div>
            
              <div class="card card-dark-blue" style="width: 150px; height: 150px;">
                <div class="card-body text-center">
                  <p class="mb-4" style="font-size: 16px;">Total Siswa</p>
                  <p class="fs-30 mb-2">{{ $totalSiswa }}</p>
                </div>
              </div>
            
              <div class="card card-light-blue" style="width: 150px; height: 150px;">
                <div class="card-body text-center">
                  <p class="mb-4" style="font-size: 16px;">Total Mapel</p>
                  <p class="fs-30 mb-2">{{ $totalMapel }}</p>
                </div>
              </div>
            </div>
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
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>


