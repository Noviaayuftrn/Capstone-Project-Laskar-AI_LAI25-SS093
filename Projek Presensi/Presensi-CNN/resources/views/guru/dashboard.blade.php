<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Guru</title>
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <style>
        #attendance-chart-container {
            display: none; /* Sembunyikan container grafik per kelas secara default */
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <a class="navbar-brand brand-logo me-5" href="{{ route('guru.dashboard') }}"><img src="assets/images/logo_dsh_guru.png" class="me-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('guru.dashboard') }}"><img src="assets/images/ypt.png" alt="logo" /></a>
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
                <ul class="navbar-nav navbar-nav-right">
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
                        <a class="nav-link" href="{{ route('attendance.guru_index') }}">
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
                        <a class="nav-link" href="pages/forms/laporan.html">
                            <i class="icon-clipboard menu-icon"></i>
                            <span class="menu-title">Laporan</span>
                        </a>
                    </li> -->
                </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Pratinjau kehadiran seluruh kelas</h3>
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
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Grafik Kehadiran Seluruh Kelas</p>
                                    </div>
                                    <p class="text-muted">Grafik ini menampilkan tren kehadiran siswa dari seluruh kelas (X, XI, XII) dari waktu ke waktu.</p>
                                    <p class="text-muted text-center mb-1">Tahun 2025</p>
                                    <div id="attendance-chart-all-legend" class="chartjs-legend mt-4 mb-2"></div>
                                    <canvas id="attendance-chart-all" height="100"></canvas>
                                    <hr class="my-4">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title">Grafik kehadiran per kelas</p>
                                    </div>
                                    <p class="text-muted">Pilih kelas dan skala waktu untuk melihat grafik kehadiran.</p>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="kelasSelect" class="form-label" style="color: black;">Pilih Kelas</label>
                                            <select id="kelasSelect" class="form-select" style="color: black !important;">
                                                <option value="" style="color: black !important;">-- Pilih Kelas --</option>
                                                <option value="kelasX" style="color: black !important;">Kelas X</option>
                                                <option value="kelasXI" style="color: black !important;">Kelas XI</option>
                                                <option value="kelasXII" style="color: black !important;">Kelas XII</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="skalaSelect" class="form-label" style="color: black !important;">Skala Waktu</label>
                                            <select id="skalaSelect" class="form-select" style="color: black !important;">
                                                <option value="mingguan" style="color: black !important;">Per Minggu</option>
                                                <option value="bulanan" style="color: black !important;">Per Bulan</option>
                                                <option value="semester" style="color: black !important;">Per Semester</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="attendance-chart-container">
                                        <p class="text-muted text-center mb-1" id="chart-year">Tahun 2025</p>
                                        <div id="attendance-chart-legend" class="chartjs-legend mt-4 mb-2"></div>
                                        <canvas id="attendance-chart" height="100"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                <footer class="text-center py-3 mt-5">
                    <div class="d-flex justify-content-center">
                    </div>
                </footer>
                </div>
            </div>
        </div>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="assets/js/dataTables.select.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('attendance-chart');
        const ctxAll = document.getElementById('attendance-chart-all');
        const attendanceChartContainer = document.getElementById('attendance-chart-container');
        const skalaSelect = document.getElementById('skalaSelect');
        const kelasSelect = document.getElementById('kelasSelect');

        let chart;
        let chartAll;

        function generateDummyData(scale, kelas = 'semua') {
            let labels = [];
            let data = [];

            if (scale === 'mingguan') {
                labels = ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'];
                if (kelas === 'kelasX') data = [78, 82, 85, 80];
                else if (kelas === 'kelasXI') data = [82, 88, 92, 86];
                else if (kelas === 'kelasXII') data = [85, 90, 88, 93];
                else if (kelas === 'semua') data = [81, 86, 88.33, 86.33]; // Rata-rata
            } else if (scale === 'bulanan') {
                labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Juli', 'Agst', 'Sep','Okt', 'Nov', 'Des'];
                if (kelas === 'kelasX') data = [75, 78, 80, 82, 85, 76, 79, 81, 83, 77, 86, 80];
                else if (kelas === 'kelasXI') data = [80, 83, 85, 87, 90, 81, 84, 86, 88, 82, 91, 85];
                else if (kelas === 'kelasXII') data = [83, 86, 88, 90, 92, 84, 87, 89, 91, 85, 93, 88];
                else if (kelas === 'semua') data = [79.33, 82.33, 84.33, 86.33, 89, 80.33, 83.33, 85.33, 87.33, 81.33, 90, 84.33]; // Rata-rata
            } else if (scale === 'semester') {
                labels = ['Semester 1', 'Semester 2'];
                if (kelas === 'kelasX') data = [80, 83];
                else if (kelas === 'kelasXI') data = [86, 89];
                else if (kelas === 'kelasXII') data = [89, 91];
                else if (kelas === 'semua') data = [85, 87.67]; // Rata-rata
            }
            return { labels: labels, data: data };
        }

        function renderChart(scale = 'mingguan', kelas = 'kelasX') {
            const dummy = generateDummyData(scale, kelas);

            if (chart) chart.destroy(); // destroy previous chart

            chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: dummy.labels,
                    datasets: [{
                        label: `Kehadiran Kelas ${kelas}`,
                        data: dummy.data,
                        fill: true,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        }

        function renderChartAll(scale = 'mingguan') {
            const dataX = generateDummyData(scale, 'kelasX');
            const dataXI = generateDummyData(scale, 'kelasXI');
            const dataXII = generateDummyData(scale, 'kelasXII');
            const labels = generateDummyData(scale, 'semua').labels;

            if (chartAll) chartAll.destroy();

            chartAll = new Chart(ctxAll, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Kelas X',
                            data: dataX.data,
                            fill: false,
                            borderColor: 'rgba(255, 99, 132, 1)',
                            tension: 0.4
                        },
                        {
                            label: 'Kelas XI',
                            data: dataXI.data,
                            fill: false,
                            borderColor: 'rgba(75, 192, 192, 1)',
                            tension: 0.4
                        },
                        {
                            label: 'Kelas XII',
                            data: dataXII.data,
                            fill: false,
                            borderColor: 'rgba(255, 206, 86, 1)',
                            tension: 0.4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        }

        // dropdown events
        kelasSelect.addEventListener('change', function () {
            const selectedKelas = this.value;
            if (selectedKelas) {
                attendanceChartContainer.style.display = 'block';
                skalaSelect.disabled = false;
                const selectedScale = skalaSelect.value;
                renderChart(selectedScale, selectedKelas);
            } else {
                attendanceChartContainer.style.display = 'none';
                skalaSelect.disabled = true;
                if (chart) chart.destroy();
            }
        });

        skalaSelect.addEventListener('change', function () {
            const selectedScale = this.value;
            const selectedKelas = kelasSelect.value;
            if (selectedKelas) {
                renderChart(selectedScale, selectedKelas);
            }
        });

        // Initial render for the "Semua Kelas" chart
        renderChartAll('mingguan');
    </script>
</body>
</html>