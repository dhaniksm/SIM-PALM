<?php

namespace App\Http\Controllers;

use App\Models\Tanaman;
use Illuminate\Http\Request;
use App\Models\Lahan;

class TanamanController extends Controller
{
    public function index()
    {
        $tanaman = Tanaman::paginate(10);
        $lahan = Lahan::all();
        return view('pages.manajemen.tanaman.index', compact('tanaman', 'lahan'));
    }

    public function store(Request $request)
    {
        Tanaman::create($request->all());

        return redirect()->route('tanaman.index')->with('success', 'Tanaman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $tanaman = Tanaman::findOrFail($id);
        $lahan = Lahan::all();
        return view('pages.manajemen.tanaman.edit', compact('tanaman', 'lahan'));
    }

    public function update(Request $request, $id)
    {
        $tanaman = Tanaman::findOrFail($id);
        $tanaman->update($request->all());

        return redirect()->route('tanaman.index')->with('success', 'Data tanaman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        Tanaman::findOrFail($id)->delete();

        return redirect()->route('tanaman.index')->with('success', 'Data tanaman berhasil dihapus.');
    }
}