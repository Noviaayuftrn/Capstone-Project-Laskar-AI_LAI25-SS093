<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Classes;
use App\Models\Major;
use App\Models\Subject;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('user', 'class', 'major', 'subject')->get();
        $majors = Major::all();
        $classes = Classes::all();
        $subjects = Subject::all();
        return view('teacher.index', compact('teachers', 'majors', 'classes', 'subjects'));
    }

    public function create()
    {
        $classes = Classes::all();
        $majors = Major::all();
        $subjects = Subject::all();
        return view('teacher.create', compact('classes', 'majors', 'subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'nip' => 'required|numeric|unique:teachers',
            'class_id' => 'required|exists:classes,id',
            'major_id' => 'required|exists:majors,id',
            'sub_id' => 'required|exists:subjects,id', 
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'guru',
        ]);

        Teacher::create([
            'user_id' => $user->id,
            'nip' => $request->nip,
            'class_id' => $request->class_id,
            'major_id' => $request->major_id,
            'sub_id' => $request->sub_id,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Data guru berhasil ditambahkan');
    }

    public function edit(Teacher $teacher)
    {
        $teacher->load('user');
        $classes = Classes::all();
        $majors = Major::all();
        $subjects = Subject::all();
        return view('teacher.edit', compact('teacher', 'classes', 'majors', 'subjects'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users,username,' . $teacher->user_id,
            'nip' => 'required|numeric|unique:teachers,nip,' . $teacher->id,
            'class_id' => 'required|exists:classes,id',
            'major_id' => 'required|exists:majors,id',
            'sub_id' => 'required|exists:subjects,id',
        ]);

        $teacher->user->update([
            'nama' => $request->nama,
            'username' => $request->username,
        ]);

        $teacher->update([
            'nip' => $request->nip,
            'class_id' => $request->class_id,
            'major_id' => $request->major_id,
            'sub_id' => $request->sub_id,
        ]);

        return redirect()->route('teacher.index')->with('success', 'Data guru berhasil diperbarui');
    }

    public function show(Teacher $teacher)
    {
        $teacher->load('user', 'class', 'major', 'subject');
        $classes = Classes::all();
        $majors = Major::all();
        $subjects = Subject::all();
        return view('teacher.show', compact('teacher', 'majors', 'subjects', 'classes'));
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->user->delete();
        return redirect()->route('teacher.index')->with('success', 'Data guru berhasil dihapus');
    }

    // filter dropdown untuk tambah guru
    public function getClassesByMajor($major_id)
    {
        $classes = \App\Models\Classes::where('major_id', $major_id)->get();

        return response()->json($classes);
    }

    public function getSubjectsByMajorClass($major_id)
    {
        $subjects = \App\Models\Subject::where('major_id', $major_id)->get();
        return response()->json($subjects);
    }

    // filter dropdown untuk index guru
    public function filter(Request $request)
    {
        $query = Teacher::with('user', 'class', 'major');

        if ($request->major_id) {
            $query->where('major_id', $request->major_id);
        }

        if ($request->class_id) {
            $query->where('class_id', $request->class_id);
        }

        $teachers = $query->get();

        // Return HTML partial (view yang hanya berisi <tbody> tabel)
        return view('teacher.partials.teacher_table', compact('teachers'))->render();
    }
}

