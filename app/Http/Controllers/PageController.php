<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard() {
        return view('pages.dashboard');
    }

    public function dataPetani() {
        return view('pages.data.petani');
    }

    public function dataLahan() {
        return view('pages.data.lahan');
    }

    public function dataTanaman() {
        return view('pages.data.tanaman');
    }

    public function pemupukan() {
        return view('pages.operasional.pemupukan');
    }

    public function panen() {
        return view('pages.operasional.panen');
    }

    public function perawatan() {
        return view('pages.operasional.perawatan');
    }

    public function laporan() {
        return view('pages.laporan');
    }

    public function kalender() {
        return view('pages.kalender');
    }
}