<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // tampilkan form login
    public function showLogin()
    {
        // kalau sudah login, jangan bisa buka login lagi
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('auth.login');
    }

    // proses kirim form login
    public function loginProcess(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        // ambil hanya email & password
        $credentials = $request->only('email', 'password');

        // coba login
        if (Auth::attempt($credentials)) {
            // regenerate session untuk keamanan
            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        // kalau gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
