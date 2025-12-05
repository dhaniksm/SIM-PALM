<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operasional;
use App\Models\Petani;
use App\Models\Lahan;


class LaporanController extends Controller
{
    public function laporan()
    {
        return view('pages.laporan.index');
    }

    public function panen(Request $req) {
        $mulai = $req->start ?? now()->startOfMonth()->toDateString();
        $akhir = $req->end ?? now()->endOfMonth()->toDateString();

        $data = Operasional::with(['petani','lahan'])
            ->where('kategori', 'panen')
            ->whereBetween('tanggal', [$mulai, $akhir])
            ->get();

        return view('pages.laporan.panen', compact('data', 'mulai', 'akhir'));
    }

    public function pemupukan(Request $req) {
        $mulai = $req->start ?? now()->startOfMonth()->toDateString();
        $akhir = $req->end ?? now()->endOfMonth()->toDateString();

        $data = Operasional::with(['petani','lahan'])
            ->where('kategori', 'pemupukan')
            ->whereBetween('tanggal', [$mulai, $akhir])
            ->get();

        return view('pages.laporan.pemupukan', compact('data', 'mulai', 'akhir'));
    }

    public function perawatan(Request $req) {
        $mulai = $req->start ?? now()->startOfMonth()->toDateString();
        $akhir = $req->end ?? now()->endOfMonth()->toDateString();

        $data = Operasional::with(['petani','lahan'])
            ->where('kategori', 'perawatan')
            ->whereBetween('tanggal', [$mulai, $akhir])
            ->get();

        return view('pages.laporan.perawatan', compact('data', 'mulai', 'akhir'));
    }
}

