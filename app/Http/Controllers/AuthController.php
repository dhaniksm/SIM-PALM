<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // TAMPILKAN HALAMAN LOGIN
    public function showLogin()
    {
        return view('pages.login');
    }

    // PROSES LOGIN
    public function loginProcess(Request $request)
    {
        // VALIDASI
        $request->validate(
            [
                'username' => 'required|string',
                'password' => 'required|string|min:4',
            ],
            [
                'username.required' => 'Username wajib diisi.',
                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password minimal 4 karakter.',
            ]
        );

        // CEK USER
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'username' => 'Username atau password salah.',
            ]);
        }

        // LOGIN USER
        Auth::login($user);

        // REDIRECT KE DASHBOARD
        return redirect()->route('dashboard');
    }

    // LOGOUT
    public function logout(Request $request)
    {
        Auth::logout();

        // INVALSIDATE SESSION
        $request->session()->invalidate();

        // REGENERATE TOKEN
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'Berhasil logout.');
    }
}
