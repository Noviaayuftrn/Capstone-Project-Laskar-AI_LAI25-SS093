<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\Subject; 
use App\Models\Classes;

class SubjectController extends Controller
{
     public function index() {
        $subjects = Subject::with('major', 'class')->get();
        $majors = \App\Models\Major::all();
        $classes = \App\Models\Classes::all();
        return view('subject.index', compact('subjects', 'majors', 'classes'));
    }

    public function create() {
        $majors = \App\Models\Major::all();
        $classes = \App\Models\Classes::all();
        return view('subject.create', compact('majors', 'classes'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_mapel' => 'required',
            'major_id' => 'required|exists:majors,id',
            'class_id' => 'required|exists:classes,id',
        ]);
        Subject::create($request->only('nama_mapel', 'major_id', 'class_id'));
        return redirect()->route('subject.index')->with('success', 'Mapel ditambahkan');
    }

    public function edit(Subject $subject) {
        $majors = \App\Models\Major::all();
        $classes = \App\Models\Classes::all();
        return view('subject.edit', compact('subject', 'majors', 'classes'));
    }

    public function update(Request $request, Subject $subject) {
        $request->validate([
            'nama_mapel' => 'required',
            'major_id' => 'required|exists:majors,id',
            'class_id' => 'required|exists:classes,id',
        ]);
        $subject->update($request->only('nama_mapel', 'major_id', 'class_id'));
        return redirect()->route('subject.index')->with('success', 'Mapel diupdate');
    }

    public function destroy(Subject $subject) {
        $subject->delete();
        return redirect()->route('subject.index')->with('success', 'Mapel dihapus');
    }

    // filter dropdown untuk tambah mapel
    public function getClassesByMajorSub($major_id)
    {
        $classes = \App\Models\Classes::where('major_id', $major_id)->get();

        return response()->json($classes);
    }

    // filter dropdown untuk index mapel
    public function filterSub(Request $request)
    {
        $query = Subject::with('class', 'major');

        if ($request->major_id) {
            $query->where('major_id', $request->major_id);
        }

        if ($request->class_id) {
            $query->where('class_id', $request->class_id);
        }

        $subjects = $query->get();

        // Return HTML partial (view yang hanya berisi <tbody> tabel)
        return view('subject.partials.subject_table', compact('subjects'))->render();
    }
}
