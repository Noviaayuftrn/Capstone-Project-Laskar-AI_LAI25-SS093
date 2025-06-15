<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardAdminController extends Controller
{
    public function index() : View
    {
        $totalGuru = 10;
        $totalSiswa = 120;
        $totalMapel = 8;

        return view('admin.dashboard', compact('totalGuru', 'totalSiswa', 'totalMapel'));
    }

    public function dashboardGuru() : View
    {
        return view('guru.dashboard');
    }

    public function dashboardSiswa() : View
    {
        $totalAlpa = 10; // Ganti dengan logika untuk menghitung total guru
        $totalSakit = 120; // Ganti dengan logika untuk menghitung total siswa
        $totalIzin = 8; // Ganti dengan logika untuk menghitung total mata pelajaran

        return view('siswa.dashboard', compact('totalAlpa', 'totalSakit', 'totalIzin'));
    }
}
