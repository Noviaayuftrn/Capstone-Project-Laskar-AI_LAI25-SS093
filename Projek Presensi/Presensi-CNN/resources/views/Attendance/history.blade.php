<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Presensi</title>
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
    <a class="navbar-brand brand-logo me-5" href="{{ route('guru.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_guru.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('guru.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" /></a>
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
              <!-- <i class="icon-search"></i> -->
            </span>
          </div>
          <!-- <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search"> -->
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
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
              <!-- <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> Private message </p> -->
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <!-- <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted"> 2 days ago </p> -->
            </div>
          </a>
        </div>
      </li>
      <!-- <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="../../assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i> Settings </a>
          <a class="dropdown-item">
            <i class="ti-power-off text-primary"></i> Logout </a>
        </div>
      </li> -->
      <!-- <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="icon-ellipsis"></i>
        </a>
      </li> -->
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
      <a class="nav-link" href="{{ route('guru.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
        </ul>
      </div>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('attendance.guru_index') }}" aria-controls="form-elements">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Buka Presensi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('attendance.history') }}">
        <i class="icon-check menu-icon"></i>
        <span class="menu-title">Catatan Kehadiran</span>
      </a>
    <!-- <li class="nav-item">
      <a class="nav-link" href="laporan.html">
        <i class="icon-clipboard menu-icon"></i>
        <span class="menu-title">Laporan</span>
      </a>
    </li> -->
  
      <!-- <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
        </ul>
      </div>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
        <i class="icon-ban menu-icon"></i>
        <span class="menu-title">Error pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="error">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../../../docs/documentation.html">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="form-group">
              </div>
              <h4 class="mb-3">Catatan Kehadiran</h4>

              <div class="form-group">
                  <label for="jurusanSelect">Jurusan</label>
                  <select class="form-select" id="major_filter" style="color: black !important;">
                      <option value="">Pilih Jurusan</option>
                      @foreach ($majors as $major)
                            <option value="{{ $major->id }}">{{ $major->nama_jurusan ?? $major->name ?? 'Jurusan '.$major->id }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="kelasSelect">Kelas</label>
                  <select class="form-select" id="class_filter" style="color: black !important;">
                      <option value="">Pilih Kelas</option>
                      @foreach ($classes as $class)
                          <option value="{{ $class->id }}">{{ $class->nama_kelas ?? $class->name ?? 'Kelas '.$class->id }}</option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                  <label for="mapelSelect">MataPelajaran</label>
                  <select class="form-select" id="subject_filter" style="color: black !important;">
                      <option value="">Pilih Mata Pelajaran</option>
                      @foreach ($subjects as $subject)
                          <option value="{{ $subject->id }}">{{ $subject->nama_mapel ?? $subject->name ?? 'Mapel '.$subject->id }}</option>
                      @endforeach
                  </select>
              </div>

              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 50%;">Nama Siswa</th>
                    <th style="width: 20%;">Kelas</th>
                    <th style="width: 20%;">Tanggal</th>
                    <th style="width: 40%;">Status Kehadiran</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($attendances as $index => $attendance)
                  <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $attendance->user->nama }}</td>
                    <td>{{ $attendance->schedule->class->nama_kelas ?? '-' }}</td>
                    <td>{{ $attendance->created_at->format('d-m-Y') }}</td>
                    <td>
                        <span class="badge 
                            @if($attendance->status == 'hadir') bg-success
                            @elseif($attendance->status == 'sakit') bg-warning
                            @elseif($attendance->status == 'izin') bg-info
                            @else bg-danger @endif">
                            {{ ucfirst($attendance->status) }}
                        </span>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Tambah Data Guru</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" class="form-control" id="nip" placeholder="NIP">
                      </div>
                      <div class="form-group">
                        <label for="namaguru">Nama Guru</label>
                        <input type="text" class="form-control" id="namaguru" placeholder="Nama">
                      </div>
                      <div class="form-group">
                        <label for="pilihjurusan">Jurusan</label>
                        <select class="form-select" id="pilihjurusan">
                          <option selected disabled>Pilih Jurusan</option>
                          <option style="color: black;">Desain Komunikasi Visual / Multimedia</option>
                          <option style="color: black;">Teknik Ketenagalistrikan</option>
                          <option style="color: black;">Teknik Mesin</option>
                          <option style="color: black;">Teknik Otomotif</option>
                          <option style="color: black;">Teknik Komputer Jaringan</option>        
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pilihkelas">Kelas</label>
                        <select class="form-select" id="pilihkelas">
                          <option selected disabled>Pilih Kelas</option>
                          <option style="color: black;">X</option>
                          <option style="color: black;">XI</option>
                          <option style="color: black;">XII</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pilihmapel">Mata Pelajaran</label>
                        <select class="form-select" id="pilihmapel">
                          <option selected disabled>Pilih Mapel</option>
                          <option style="color: black;">Mapel1</option>
                          <option style="color: black;">Mapel2</option>
                          <option style="color: black;">Mapel3</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Simpan</button>
                      <button class="btn btn-danger" style="color: white;">Kembali</button>
                    </form>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

    {{-- Script untuk dropdown filter --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {

            // Load kelas berdasarkan jurusan
            function loadClasses(majorID) {
                if (majorID) {
                    $.ajax({
                        url: '/get-classes/' + majorID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#class_filter').empty().append('<option value="">Pilih Kelas</option>');
                            $.each(data, function (key, value) {
                                $('#class_filter').append('<option value="' + value.id + '">' + (value.nama_kelas ?? value.name ?? 'Kelas ' + value.id) + '</option>');
                            });
                        }
                    });
                } else {
                    $('#class_filter').empty().append('<option value="">Semua Kelas</option>');
                }
            }

            // Load mata pelajaran berdasarkan jurusan
            function loadSubjects(majorID) {
                if (majorID) {
                    $.ajax({
                        url: '/get-subjects/' + majorID,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('#subject_filter').empty().append('<option value="">Pilih Mata Pelajaran</option>');
                            $.each(data, function (key, value) {
                                $('#subject_filter').append('<option value="' + value.id + '">' + (value.nama_mapel ?? value.name ?? 'Mapel ' + value.id) + '</option>');
                            });
                        }
                    });
                } else {
                    $('#subject_filter').empty().append('<option value="">Semua Mata Pelajaran</option>');
                }
            }

            // Saat jurusan diubah
            $('#major_filter').change(function () {
                var majorID = $(this).val();
                console.log("Jurusan dipilih: ", majorID); // debug
                loadClasses(majorID);
                loadSubjects(majorID);
            });

            // Jika ingin, tambahkan filter ke tabel saat #class_filter atau #subject_filter berubah
        });
    </script>


    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
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
    <script src="{{asset('assets/js/sidebar.js') }}"></script>
  </body>
</html>