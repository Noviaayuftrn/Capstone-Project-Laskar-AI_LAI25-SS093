<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;


// Redirect berdasarkan peran setelah login
Route::get('/', function () {
    if (Auth::check()) { // Periksa apakah pengguna sudah login
        $user = Auth::user(); // Ambil data pengguna yang login
        if ($user->role === 'admin') {
            return redirect()->route('dashboard'); // Arahkan ke dashboard admin
        } elseif ($user->role === 'guru') {
            return redirect()->route('guru.dashboard'); // Arahkan ke dashboard intern
        } elseif ($user->role === 'siswa') {
            return redirect()->route('siswa.dashboard'); // Arahkan ke dashboard siswa
        }
    }
    return redirect()->route('login'); // Jika tidak login, arahkan ke halaman login
});

// Routes untuk login dan logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// -----------------------------------------------------------------------------------------//
// Route untuk halaman dashboard Admin
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('admin.dashboard');

    Route::resource('student', StudentController::class);
    Route::get('/get-classesstudent/{major_id}', [StudentController::class, 'getClassesByMajorstudent'])->name('student.getClassesByMajorstudent');
    Route::get('/filter-students', [StudentController::class, 'filterstudent'])->name('student.filterstudent');

    Route::resource('teacher', TeacherController::class);
    Route::get('/get-classes/{major_id}', [TeacherController::class, 'getClassesByMajor'])->name('teacher.getClassesByMajor');
    Route::get('/get-subjects/{major_id}', [TeacherController::class, 'getSubjectsByMajorClass'])->name('teacher.getClassesByMajorClass');
    Route::get('/filter-teachers', [TeacherController::class, 'filter'])->name('teacher.filter');

    Route::resource('major', MajorController::class);
    Route::resource('class', ClassController::class);

    Route::resource('subject', SubjectController::class);
    Route::get('/get-classes/{major_id}', [SubjectController::class, 'getClassesByMajorSub'])->name('subject.getClassesByMajorSub');
    Route::get('/filter-subjects', [SubjectController::class, 'filterSub'])->name('subject.filterSub');
});


// -----------------------------------------------------------------------------------------//
// Route untuk halaman dashboard Guru
Route::middleware(['auth', RoleMiddleware::class . ':guru'])->group(function () {
    Route::get('/dashboard-guru', [DashboardAdminController::class, 'dashboardGuru'])->name('guru.dashboard');
    Route::get('/guru/schedule', [ScheduleController::class, 'guruIndex'])->name('attendance.guru_index');
    Route::get('/get-subjects/{major}', [ScheduleController::class, 'getSubjects'])->name('schedule.getSubjects');
    Route::get('/get-classes/{major}', [ScheduleController::class, 'getClassesByMajorSc'])->name('schedule.getClassesByMajorSc');
    Route::post('/guru/schedule/open', [ScheduleController::class, 'openSchedule'])->name('schedule.open');

    // Menampilkan form tambah schedule
    Route::get('/guru/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');

    // Menyimpan data schedule baru
    Route::post('/guru/schedule', [ScheduleController::class, 'store'])->name('schedule.store');
    // Route::get('/guru/schedule/index', [ScheduleController::class, 'guruIndex'])->name('schedule.index');

    Route::post('/guru/attendance/update-status/{id}', [AttendanceController::class, 'updateStatus'])->name('updateStatus');
    Route::get('/guru/attendance/history', [AttendanceController::class, 'history'])->name('attendance.history');
});

// -----------------------------------------------------------------------------------------//
// Route untuk halaman dashboard Siswa
Route::middleware(['auth', RoleMiddleware::class . ':siswa'])->group(function () {
    Route::get('/dashboard-siswa', [DashboardAdminController::class, 'dashboardSiswa'])->name('siswa.dashboard');
    Route::get('/presensi-siswa', [AttendanceController::class, 'siswaPresensi'])->name('student.attendance');
    Route::post('/presensi-siswa/update', [AttendanceController::class, 'updateSiswa'])->name('student.attendance.update');
    // Halaman kamera presensi
    Route::get('/presensi/capture/{id?}', [ApiController::class, 'index'])->name('presensi.capture');
    Route::post('/attendance/store', [ApiController::class, 'store'])->name('attendance.store');
    // Endpoint menerima base64 image dari kamera
    Route::post('/presensi/store', [ApiController::class, 'store'])->name('presensi.store');
    // melihat history presensi siswa
    Route::get('/siswa/history', [AttendanceController::class, 'historySiswa'])->name('student..history');
});