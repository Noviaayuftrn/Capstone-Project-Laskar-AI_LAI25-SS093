<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use App\Models\Classes;
use App\Models\Major;
use App\Models\Subject;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Student;

class ScheduleController extends Controller
{
    // Halaman untuk guru melihat jadwal yang dibuka untuk presensi
    public function guruIndex()
    {
        $teacherId = Auth::user()->teacher->id;
        $schedules = Schedule::with(['class', 'subject', 'attendances.user.student'])
                        ->where('teach_id', $teacherId)
                        ->orderByDesc('date')
                        ->get(); 
    
        $openedSchedule = Schedule::with(['subject', 'class', 'attendances.user.student'])
            ->where('teach_id', $teacherId)
            ->where('status', 'open')
            ->orderByDesc('date')
            ->first();

        $majors = Major::all();    
        $subjects = Subject::all();
        $classes = Classes::all();

        return view('attendance.guru_index', compact('schedules', 'openedSchedule', 'majors', 'subjects', 'classes'));
    }

    // Halaman untuk guru membuat jadwal presensi
    // public function create()
    // {
    //     $classes = Classes::all();
    //     $majors = Major::all();
    //     $subjects = Subject::all();
    //     $schedules = Schedule::all();
    //     $teachers = \App\Models\Teacher::all();
        
    //     return view('schedule.create', compact('classes', 'majors', 'subjects', 'teachers', 'schedules'));
    // }


    public function create()
    {
        $user = Auth::user();
        $teacher = $user->teacher;

        $class = $teacher?->class;
        $major = $teacher?->major;
        $subject = $teacher?->subject;

        $schedules = Schedule::with(['subject', 'class'])
                        ->where('teach_id', $teacher->id)
                        ->latest('date')
                        ->get();

        return view('schedule.create', compact('class', 'major', 'subject', 'teacher', 'schedules'));
    }



    // Proses penyimpanan jadwal presensi
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'major_id' => 'required',
            'sub_id' => 'required',
            'date' => 'required|date',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
        ]);

        Schedule::create([
            'class_id' => $request->class_id,
            'major_id' => $request->major_id,
            'sub_id' => $request->sub_id,
            'teach_id' => Auth::user()->teacher->id,
            'date' => $request->date,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'status' => 'closed'
        ]);

        return redirect()->route('attendance.guru_index')->with('success', 'Jadwal berhasil dibuat!');
    }

    // Proses pembukaan jadwal presensi
    public function openSchedule(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
        ]);
        $schedule = Schedule::with(['class.students'])->findOrFail($request->schedule_id);
        $schedule->status = 'open';
        $schedule->save();

        // Ambil semua siswa di kelas dan jurusan sesuai schedule
        $students = User::where('role', 'siswa')
            ->whereHas('student', function($query) use ($schedule) {
                $query->where('class_id', $schedule->class_id)
                    ->where('major_id', $schedule->major_id);
            })->get();
            
        // Tambahkan entri presensi untuk setiap siswa jika belum ada
        foreach ($students as $student) {
            Attendance::firstOrCreate([
                'schedule_id' => $schedule->id,
                'user_id' => $student->id,
            ], [
                'status' => 'alpa', // default status saat dibuka
            ]);
        }

        return redirect()->route('attendance.guru_index')->with('success', 'Presensi berhasil dibuka!');
    }

    public function getSubjects($majorId)
    {
        $subjects = Subject::where('major_id', $majorId)->get();
        return response()->json($subjects);
    }

    public function getClassesByMajorSc($major_id)
    {
        $classes = Classes::where('major_id', $major_id)->get();
        return response()->json($classes);
    }

}

