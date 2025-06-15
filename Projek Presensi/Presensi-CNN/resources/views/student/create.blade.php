<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Siswa</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}" >
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
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
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
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
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
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
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data Siswa</h4>

                    @if ($errors->any())
                        <div style="color:red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{ route('student.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label>Nama Siswa</label>
                          <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                          <label>NISN</label>
                          <input type="text" class="form-control" name="nisn" placeholder="NISN" value="{{ old('nisn') }}">
                        </div>
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
                        </div>      
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('nisn') }}">
                        </div>                  

                        <div class="form-group">
                            <label for="jurusanSelect">Jurusan</label>
                            <select class="form-select" id="major_id" name="major_id" style="color: black !important;">
                                <option value="">Pilih Jurusan</option>
                                @foreach ($majors as $major)
                                      <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : '' }}>
                                          {{ $major->nama_jurusan ?? $major->name ?? 'Jurusan '.$major->id }}
                                      </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelasSelect">Kelas</label>
                            <select class="form-select" id="class_id" name="class_id" style="color: black !important;">
                                <option value="">Pilih Kelas</option>
                                @foreach ($classes as $class)
                                    <option value="">Pilih Kelas</option>
                                    {{-- akan diisi oleh AJAX --}}
                                @endforeach
                            </select>
                        </div>

                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <a href="{{ route('student.index') }}" class="btn btn-danger" style="color: white;">Kembali</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Script filter -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#major_id').change(function() {
                var majorID = $(this).val();
                if (majorID) {
                    $.ajax({
                        url: '/get-classes/' + majorID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('#class_id').empty();
                            $('#class_id').append('<option value="">Pilih Kelas</option>');
                            $.each(data, function(key, value) {
                                $('#class_id').append('<option value="' + value.id + '">' + (value.nama_kelas ?? value.name ?? 'Kelas ' + value.id) + '</option>');
                            });
                        }
                    });
                } else {
                    $('#class_id').empty();
                    $('#class_id').append('<option value="">Pilih Kelas</option>');
                }
            });
        });
    </script>

    <script src="{{asset('assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{asset('assets/vendors/select2/select2.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{asset('assets/js/template.js') }}"></script>
    <script src="{{asset('assets/js/settings.js') }}"></script>
    <script src="{{asset('assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/file-upload.js') }}"></script>
    <script src="{{asset('assets/js/typeahead.js') }}"></script>
    <script src="{{asset('assets/js/select2.js') }}"></script>
    <!-- End custom js for this page-->
  </body>
</html>