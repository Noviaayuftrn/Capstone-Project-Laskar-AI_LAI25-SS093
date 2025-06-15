<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function index() {
        $majors = Major::all();
        return view('major.index', compact('majors'));
    }

    public function create() {
        return view('major.create');
    }

    public function store(Request $request) {
        $request->validate(['nama_jurusan' => 'required']);
        Major::create($request->only('nama_jurusan'));
        return redirect()->route('major.index')->with('success', 'Jurusan ditambahkan');
    }

    public function edit(Major $major) {
        return view('major.edit', compact('major'));
    }

    public function update(Request $request, Major $major) {
        $request->validate(['nama_jurusan' => 'required']);
        $major->update($request->only('nama_jurusan'));
        return redirect()->route('major.index')->with('success', 'Jurusan diupdate');
    }

    public function destroy(Major $major) {
        $major->delete();
        return redirect()->route('major.index')->with('success', 'Jurusan dihapus');
    }
}
