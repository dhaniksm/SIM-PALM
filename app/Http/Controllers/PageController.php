<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function login() {
        return view('pages.login');
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