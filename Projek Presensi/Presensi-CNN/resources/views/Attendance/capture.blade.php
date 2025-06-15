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
  <style>
    video, canvas {
      width: 100%;
      max-width: 500px;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    button {
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }
    button:hover {
      background-color: #218838;
    }
  </style>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="{{ route('siswa.dashboard') }}"><img src="../../assets/images/logodsh.png" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href=".{{ route('siswa.dashboard') }}"><img src="../../assets/images/ypt.png" alt="logo" /></a>
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
            <h3 class="font-weight-bold mb-4 text-center">Presensi</h3>
            <div class="camera-wrapper">
                <div class="d-flex flex-column align-items-center">
                    <video id="video" width="320" height="240" autoplay playsinline ></video>
                    <canvas id="canvas" width="320" height="240" style="display:none;"></canvas>
                    <br>
                    <button id="capture-btn" class="btn btn-primary mt-2">Ambil Foto</button>
                    <p id="result" class="mt-3"></p>
              </div>

              <input type="hidden" id="schedule_id" value="{{ $schedule_id ?? '' }}">

              <script>
                  const video = document.getElementById('video');
                  const canvas = document.getElementById('canvas');
                  const captureBtn = document.getElementById('capture-btn');
                  const resultEl = document.getElementById('result');
                  const scheduleId = document.getElementById('schedule_id').value;

                  console.log("Schedule ID:", scheduleId);  // Debug

                  navigator.mediaDevices.getUserMedia({ video: true })
                      .then(stream => {
                          video.srcObject = stream;
                      })
                      .catch(err => {
                          resultEl.innerText = '❌ Gagal mengakses kamera';
                          console.error(err);
                      });

                  captureBtn.addEventListener('click', () => {
                      if (!scheduleId) {
                          resultEl.innerText = '❌ Gagal: schedule_id tidak tersedia.';
                          return;
                      }

                      const context = canvas.getContext('2d');
                      context.drawImage(video, 0, 0, canvas.width, canvas.height);
                      const dataURL = canvas.toDataURL('image/png');

                      console.log("Kirim presensi dengan:", {
                          image: dataURL.substring(0, 30) + '...', // hanya sebagian
                          schedule_id: scheduleId
                      });

                      fetch("{{ route('attendance.store') }}", {
                          method: 'POST',
                          headers: {
                              'Content-Type': 'application/json',
                              'X-CSRF-TOKEN': '{{ csrf_token() }}',
                          },
                          body: JSON.stringify({
                              image: dataURL,
                              schedule_id: scheduleId
                          })
                      })
                      .then(res => res.json())
                      .then(data => {
                          if (data.status === 'success') {
                              resultEl.innerText = `✅ ${data.student} hadir (Confidence: ${data.confidence})`;

                              if (data.redirect) {
                                  setTimeout(() => {
                                      window.location.href = data.redirect;
                                  }, 1500); // beri jeda 1.5 detik agar pengguna sempat melihat hasil
                              }

                          } else {
                              resultEl.innerText = `❌ ${data.message}`;
                          }

                      })
                      .catch(err => {
                          resultEl.innerText = '❌ Gagal mengirim data ke server';
                          console.error(err);
                      });
                  });
              </script>



          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    
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