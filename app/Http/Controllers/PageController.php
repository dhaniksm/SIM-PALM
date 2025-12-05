<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function index() {
        return view('pages.manajemen.index');
    }

    public function jadwal()
    {
        return view('pages.jadwal');
    }
}
