<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function login() {
        return view('pages.login');
    }

    public function processLogin(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah'
        ]);
    }

    public function dashboard() {
        return view('pages.dashboard');
    }

    public function data() {
        return view('pages.data');
    }

    public function operasional() {
        return view('pages.operasional.index');
    }

    public function laporan() {
        return view('pages.laporan');
    }

    public function jadwal() {
        return view('pages.jadwal');
    }
}