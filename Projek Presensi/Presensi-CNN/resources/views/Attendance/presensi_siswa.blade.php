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
    <a class="navbar-brand brand-logo me-5" href="{{ route('siswa.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_siswa.png') }}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('siswa.dashboard') }} "><img src="{{asset('assets/images/ypt.png') }}" alt="logo" /></a>
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
      <a class="nav-link" href="{{ route('siswa.dashboard') }}">
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
      <a class="nav-link" href="{{ route('student.attendance') }}" aria-controls="form-elements">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Presensi</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('student..history') }}">
        <i class="icon-check menu-icon"></i>
        <span class="menu-title">Riwayat Absen</span>
      </a>
  </ul>
</nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <h3 class="font-weight-bold mb-4">Presensi</h3>
            @if($openedSchedule)
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10%;">No</th>
                    <th style="width: 50%;">Mata Pelajaran</th>
                    <th style="width: 40%;">Status Kehadiran</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $attendance = $openedSchedule->attendances->first();
                  @endphp

                  @if(!$attendance || $attendance->status == 'alpa')
                    <tr>
                      <td>1</td>
                      <td>{{ $openedSchedule->subject->nama_mapel ?? '-' }}</td>
                      <td>
                        <button class="btn btn-success btn-sm btn-custom" onclick="window.location.href='{{ route('presensi.capture', ['id' => $openedSchedule->id]) }}'">Hadir</button>
                        <button class="btn btn-warning btn-sm btn-custom btn-presensi" data-status="sakit" data-schedule="{{ $openedSchedule->id }}">Sakit</button>
                        <button class="btn btn-primary btn-sm btn-custom btn-presensi" data-status="izin" data-schedule="{{ $openedSchedule->id }}">Izin</button>
                      </td>
                    </tr>
                  @else
                    <tr>
                      <td colspan="3" class="text-center">Presensi sudah diisi ({{ $attendance->status }}).</td>
                    </tr>
                  @endif
                </tbody>
              </table>
            @else
              <p class="text-center mt-4">Tidak ada jadwal presensi terbuka saat ini.</p>
            @endif
          </div>
        </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const presensiButtons = document.querySelectorAll('.btn-presensi');

            presensiButtons.forEach(button => {
            button.addEventListener('click', function () {
                const status = this.getAttribute('data-status');
                const scheduleId = this.getAttribute('data-schedule');

                fetch('{{ route("student.attendance.update") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    status: status,  // 'sakit' atau 'izin'
                    schedule_id: scheduleId
                })
                })
                .then(response => response.json())
                .then(data => {
                if (data.success) {
                    alert(data.message || 'Presensi berhasil!');
                    location.reload(); // reload halaman agar status ter-update
                } else {
                    alert(data.message || 'Presensi gagal.');
                }
                })
                .catch(error => {
                console.error('Error:', error);
                alert('Terjadi kesalahan saat mengirim presensi.');
                });
            });
            });
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