<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Presensi</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <style>
        .date-wrapper {
        position: relative;
        display: inline-block;
        }

        .date-wrapper input[type="date"] {
        padding-left: 30px; /* untuk ruang ikon */
        }

        .date-wrapper .calendar-icon {
        position: absolute;
        top: 50%;
        left: 8px;
        transform: translateY(-50%);
        pointer-events: none;
        }
    </style>
    </head>
<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo me-5" href="{{ route('guru.dashboard') }}"><img src="{{asset('assets/images/logo_dsh_guru.png') }}" class="me-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('guru.dashboard') }}"><img src="{{asset('assets/images/ypt.png') }}" alt="logo" /></a>
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
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
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
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('guru.dashboard') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
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
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="laporan.html">
                            <i class="icon-clipboard menu-icon"></i>
                            <span class="menu-title">Laporan</span>
                        </a>
                    </li> -->
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                        </div>
                        <div class="col-md-6 grid-margin stretch-card">
                        </div>
                        <h4>Buka Presensi Baru</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">No</th>
                                    <th style="width: 20%;">Mata Pelajaran</th>
                                    <th style="width: 5%;">Kelas</th>
                                    <th style="width: 15%;">Tanggal</th>
                                    <th style="width: 15%;">Jam</th>
                                    <th style="width: 5%;">Status</th>
                                    <th style="width: 5%;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $i => $schedule)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $schedule->subject->nama_mapel }}</td>
                                        <td>{{ $schedule->class->nama_kelas }}</td>
                                        <td>{{ \Carbon\Carbon::parse($schedule->date)->format('d-m-Y') }}</td>
                                        <td>{{ $schedule->jam_mulai }} - {{ $schedule->jam_selesai }}</td>
                                        <td>
                                            @if ($schedule->status == 'open')
                                                <span class="badge bg-success">Dibuka</span>
                                            @else
                                                <span class="badge bg-secondary">Belum Dibuka</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($schedule->status == 'open')
                                                <span class="text-muted">Sedang Aktif</span>
                                            @else
                                                <form action="{{ route('schedule.open') }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">
                                                    <button type="submit" class="btn btn-danger btn-sm">Buka Presensi</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        

                        @if ($errors->any())
                            <div style="color: red;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('schedule.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="hidden" name="major_id" value="{{ $major->id }}">
                                <input type="text" class="form-control" value="{{ $major->nama_jurusan }}" readonly style="color: black;">          
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="hidden" name="class_id" value="{{ $class->id }}">
                                <input type="text" class="form-control" value="{{ $class->nama_kelas }}" readonly style="color: black;">
                            </div>
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input type="hidden" name="sub_id" value="{{ $subject->id }}">
                                <input type="text" class="form-control" value="{{ $subject->nama_mapel }}" readonly style="color: black;">
                            </div>
                            <div class="form-group">
                                <label>Guru Pengajar</label>
                                @if ($teacher && $teacher->user)
                                    <input type="text" class="form-control" value="{{ $teacher->user->nama }}" readonly style="color: black;">
                                @else
                                    <input type="text" class="form-control" value="-" readonly style="color: black;">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="datePicker">Tanggal</label>
                                <div class="input-group">
                                    <input type="date" class="form-control" name="date" style="color: black !important;">
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="startTime">Jam Mulai</label>
                            <div class="input-group">
                                <input type="time" class="form-control" name="jam_mulai" style="color: black !important;">
                            </div>
                            </div>

                            <div class="form-group">
                            <label for="endTime">Jam Selesai</label>
                            <div class="input-group">
                                <input type="time" class="form-control" name="jam_selesai" style="color: black !important;">
                            </div>
                            </div>
                            <!-- <div class="form-group">
                                <label>Status Presensi</label>
                                <select class="form-select" name="status" style="color: black !important;">
                                    <option selected style="color: black !important;">Pilih</option>
                                    <option style="color: black !important;" value="open">Open</option>
                                    <option style="color: black !important;" value="closed">Closed</option>
                                </select>
                            </div> -->
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary me-2" style="width: auto;">Simpan</button>
                                <a href="{{ route('attendance.guru_index') }}" class="btn btn-danger" style="color: white; width: auto;">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    <script>
    // Optional: bisa tambahkan default tanggal hari ini jika ingin
    document.addEventListener("DOMContentLoaded", () => {
        const dateInput = document.getElementById("datePicker");
        if (!dateInput.value) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.value = today;
        }
    });
    </script>
    <script src="{{ asset('assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
</body>
</html>