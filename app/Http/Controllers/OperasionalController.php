<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class OperasionalController extends Controller
// {
//     public function index()
//     {
//         return view('pages.operasional.index');
//     }

//     public function storePemupukan(Request $r)
//     {
//         // Validasi
//         $r->validate([
//             'kategori' => 'required',
//             'jumlah_kg' => 'required|numeric',
//             'tanggal' => 'required|date'
//         ]);

//         // Simpan
//         Pemupukan::create([
//             'kategori' => $r->kategori,
//             'jumlah_kg' => $r->jumlah_kg,
//             'tanggal' => $r->tanggal
//         ]);

//         return back()->with('success', 'Data pemupukan berhasil disimpan');
//     }

//     public function storePanen(Request $r)
//     {
//         $r->validate([
//             'jumlah_tandan' => 'required|numeric',
//             'berat_kg' => 'required|numeric',
//             'tanggal' => 'required|date'
//         ]);

//         Panen::create($r->all());

//         return back()->with('success', 'Data panen berhasil disimpan');
//     }

//     public function storePerawatan(Request $r)
//     {
//         $r->validate([
//             'jenis' => 'required',
//             'catatan' => 'nullable',
//             'tanggal' => 'required|date'
//         ]);

//         Perawatan::create($r->all());

//         return back()->with('success', 'Data perawatan disimpan');
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operasional;

class OperasionalController extends Controller
{
    public function index()
    {
        $data = Operasional::latest()->get();
        return view('pages.operasional.index', compact('data'));
    }

    public function create()
    {
        $kategori = [
            'Pemeliharaan',
            'Panen',
            'Pemupukan'
        ];

        $petugas = [
            'Budi',
            'Sari',
            'Doni'
        ];

        $lokasi = [
            'Blok A1',
            'Blok B2',
            'Blok C3'
        ];

        return view('pages.operasional.create', compact('kategori', 'petugas', 'lokasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'petugas' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required|date',
            'keterangan' => 'nullable|max:255'
        ]);

        Operasional::create($request->all());

        return redirect()->route('pages.operasional.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Operasional::findOrFail($id);
        $petugas = Petani::all();
        $lahan = Lahan::all();

        return view('operasional.edit', compact('data', 'petugas', 'lahan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'petugas_id' => 'required',
            'lahan_id' => 'required',
            'tanggal' => 'required|date',
        ]);

        $data = Operasional::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('operasional.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        Operasional::destroy($id);

        return redirect()->route('operasional.index')->with('success', 'Data berhasil dihapus');
    }

}