<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Major;

class ClassController extends Controller
{
    public function index() {
        $classes = Classes::with('major')->get();
        return view('class.index', compact('classes'));
    }

    public function create() {
        $majors = Major::all();
        return view('class.create', compact('majors'));
    }

    public function store(Request $request) {
        $request->validate([
            'nama_kelas' => 'required',
            'major_id' => 'required|exists:majors,id',
        ]);
        Classes::create($request->only('nama_kelas', 'major_id'));
        return redirect()->route('class.index')->with('success', 'Kelas ditambahkan');
    }

    public function edit(Classes $class) {
        $majors = Major::all();
        return view('class.edit', compact('class', 'majors'));
    }

    public function update(Request $request, Classes $class) {
        $request->validate([
            'nama_kelas' => 'required',
            'major_id' => 'required|exists:majors,id',
        ]);
        $class->update($request->only('nama_kelas', 'major_id'));
        return redirect()->route('class.index')->with('success', 'Kelas diupdate');
    }

    public function destroy(Classes $class) {
        $class->delete();
        return redirect()->route('class.index')->with('success', 'Kelas dihapus');
    }
       
}
