<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function welcome()
    {
        return view('pages.welcome');
    }

    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function data()
    {
        return view('pages.data');
    }

    public function operasional()
    {
        return view('pages.operasional');
    }

    public function laporan()
    {
        return view('pages.laporan');
    }

    public function jadwal()
    {
        return view('pages.jadwal');
    }
}
