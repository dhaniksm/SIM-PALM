<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operasional;
use App\Models\Petani;
use App\Models\Lahan;

class OperasionalController extends Controller
{
    public function index()
    {
        $data = Operasional::latest()->get();
        return view('pages.operasional.index', compact('data'));
    }

    public function create()
    {
        $kategori = ['Pemeliharaan', 'Panen', 'Pemupukan'];
        $petani = Petani::all();
        $lahan = Lahan::all();

        return view('pages.operasional.create', compact('kategori', 'petani', 'lahan'));
    }

    public function store(Request $request)
    {
        Operasional::create($request->all());

        return redirect()->route('operasional.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = Operasional::findOrFail($id);
        $petani = Petani::all();
        $lahan = Lahan::all();

        return view('pages.operasional.edit', compact('data', 'petani', 'lahan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'petani_id' => 'required',
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