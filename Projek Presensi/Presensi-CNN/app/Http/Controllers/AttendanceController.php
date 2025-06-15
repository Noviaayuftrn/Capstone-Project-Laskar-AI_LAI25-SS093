<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Major;
use App\Models\Subject;
use App\Models\Classes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    // Halaman untuk siswa melihat jadwal yang dibuka untuk presensi
    public function siswaPresensi()
    {
        $siswa = Auth::user();
        $studentId = $siswa->id;

        $studentData = $siswa->student;
        $classId = $studentData->class_id;
        $majorId = $studentData->major_id;

        $openedSchedules = Schedule::with([
            'subject',
            'class',
            'attendances' => function ($q) use ($studentId) {
                $q->where('user_id', $studentId);
            }
        ])
        ->where('status', 'open')
        ->where('class_id', $classId)
        ->where('major_id', $majorId)
        ->latest('date')
        ->get();

        // ✅ Hanya ambil yang statusnya masih 'alpa'
        $openedSchedule = $openedSchedules->first(function ($schedule) {
            $attendance = $schedule->attendances->first();
            return !$attendance || $attendance->status === 'alpa';
        });

        return view('attendance.presensi_siswa', compact('openedSchedule'));
    }





    // Halaman untuk siswa mengisi presensi
    public function updateSiswa(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'status' => 'in:hadir,sakit,izin'
        ]);

        $user = Auth::user();

        // Validasi role
        if ($user->role !== 'siswa') {
            return response()->json([
                'success' => false,
                'message' => 'Hanya siswa yang diperbolehkan mengisi presensi.'
            ]);
        }

        $schedule = Schedule::findOrFail($request->schedule_id);

        // Batasi waktu pengisian presensi 2 jam sejak dibuka
        $openedAt = $schedule->updated_at;
        if (now()->diffInMinutes($openedAt) > 120) {
            return response()->json([
                'success' => false,
                'message' => 'Waktu pengisian presensi telah habis.'
            ]);
        }

        // Cari entri attendance siswa
        $attendance = Attendance::where('schedule_id', $request->schedule_id)
                        ->where('user_id', $user->id)
                        ->first();

        if (!$attendance) {
            return response()->json([
                'success' => false,
                'message' => 'Presensi belum tersedia untuk Anda.'
            ]);
        }

        // Jika sudah diisi sebelumnya
        if ($attendance->status !== 'alpa') {
            return response()->json([
                'success' => false,
                'message' => 'Presensi sudah diisi sebelumnya.'
            ]);
        }

        // Update status presensi
        $attendance->status = $request->status;
        $attendance->save();

        return response()->json([
            'success' => true,
            'message' => 'Presensi berhasil disimpan.'
        ]);
    }

    public function historySiswa()
    {
        $studentId = Auth::id();

        $attendances = Attendance::with([
            'schedule.subject',
            'schedule.teacher.user'
        ])
        ->where('user_id', $studentId)
        ->latest()
        ->paginate(20);

        return view('siswa.history_siswa', compact('attendances'));
    }


    //Function untuk halaman presensi guru
    //  halaman rekam presensi guru
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:hadir,alpa,sakit,izin'
        ]);

        $attendance = Attendance::findOrFail($id);
        $attendance->status = $request->status;
        $attendance->save();

        return response()->json(['success' => true]);
    }

    // Function untuk halaman history presensi untuk guru
    public function history()
    {
        $user = Auth::user();
        $teacher = $user->teacher;
        // Ambil data presensi terbaru dengan relasi ke user dan jadwal
        $attendances = Attendance::with(['user', 'schedule.class', 'schedule.subject'])
        ->whereHas('schedule', function ($query) use ($teacher) {
            $query->where('teach_id', $teacher->id);
        })
        ->latest()
        ->paginate(30);; // Bisa diganti sesuai kebutuhan

        $majors = Major::all();    
        $subjects = Subject::all();
        $classes = Classes::all();

        return view('attendance.history', compact('attendances', 'majors', 'subjects', 'classes'));
    }
}