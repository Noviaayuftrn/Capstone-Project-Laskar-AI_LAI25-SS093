<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Periksa peran pengguna
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard'); // Dashboard Admin
            } elseif ($user->role === 'guru') {
                return redirect()->route('guru.dashboard'); // Dashboard Guru
            } elseif ($user->role === 'siswa') {
                return redirect()->route('siswa.dashboard'); // Dashboard Siswa
            }

            // Jika login gagal
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }


    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function siswaDashboard()
    {
        return view('siswa.dashboard');
    }
}
