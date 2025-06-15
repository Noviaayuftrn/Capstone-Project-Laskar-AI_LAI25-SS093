<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Classes;
use App\Models\Major;

class StudentController extends Controller
{
   public function index()
    {
        $students = Student::with(['user', 'class', 'major'])->get();
        $majors = \App\Models\Major::all();
        $classes = \App\Models\Classes::all();
        return view('student.index', compact('students', 'majors', 'classes'));
    }

    public function create()
    {
        $classes = \App\Models\Classes::all();
        $majors = \App\Models\Major::all();
        return view('student.create', compact('classes', 'majors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'class_id' => 'required|exists:classes,id',
            'major_id' => 'required|exists:majors,id',
            'nisn' => 'required|numeric|unique:students',
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        // Buat label unik dari nama
        $labelBase = strtolower(str_replace(' ', '_', $request->nama));
        $label = $labelBase;
        $counter = 1;
        while (Student::where('label', $label)->exists()) {
            $label = $labelBase . '_' . $counter++;
        }

        Student::create([
            'user_id' => $user->id,
            'class_id' => $request->class_id,
            'major_id' => $request->major_id,
            'nisn' => $request->nisn,
            'label' => $label,
        ]);

        return redirect()->route('student.index')->with('success', 'Data siswa berhasil ditambahkan');
    }

    public function edit(Student $student)
    {
        $classes = \App\Models\Classes::all();
        $majors = \App\Models\Major::all();
        $student->load('user');
        return view('student.edit', compact('student', 'classes', 'majors'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username,' . $student->user_id,
            'class_id' => 'required|exists:classes,id',
            'major_id' => 'required|exists:majors,id',
            'nisn' => 'required|numeric|unique:students,nisn,' . $student->id,
        ]);

        $student->user->update([
            'nama' => $request->nama,
            'username' => $request->username,
        ]);

        $student->update([
            'class_id' => $request->class_id,
            'major_id' => $request->major_id,
            'nisn' => $request->nisn,
        ]);

        return redirect()->route('student.index')->with('success', 'Data siswa berhasil diperbarui');
    }

    public function destroy(Student $student)
    {
        $student->user->delete(); // akan otomatis menghapus student karena foreign key cascade
        return redirect()->route('student.index')->with('success', 'Data siswa berhasil dihapus');
    } 

    // filter dropdown create student
    public function getClassesByMajorstudent($major_id)
    {
        $classes = \App\Models\Classes::where('major_id', $major_id)->get();

        return response()->json($classes);
    }

    // filter dropdown untuk index student
    public function filterstudent(Request $request)
    {
        $query = Student::with('user', 'class', 'major');

        if ($request->major_id) {
            $query->where('major_id', $request->major_id);
        }

        if ($request->class_id) {
            $query->where('class_id', $request->class_id);
        }

        $students = $query->get();

        // Return HTML partial (view yang hanya berisi <tbody> tabel)
        return view('student.partials.student_table', compact('students'))->render();
    }
}

