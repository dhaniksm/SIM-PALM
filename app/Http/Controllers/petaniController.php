<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller {
    public function index() {
        $petani = Petani::withCount('lahan')->paginate(12);
        return view('pages.manajemen.petani.index', compact('petani'));
    }

    public function store(Request $r) {
        $r->validate(['nama'=>'required']);
        Petani::create($r->only(['nama','alamat','no_hp']));
        return back()->with('success','Petani ditambahkan');
    }

    public function edit($id){
        $petani = Petani::findOrFail($id);
        return view('pages.manajemen.petani.edit', compact('petani'));
    }

    public function update(Request $r,$id){
        $p = Petani::findOrFail($id);
        $p->update($r->only(['nama','alamat','no_hp']));
        return redirect()->route('petani.index')->with('success','Terupdate');
    }

    public function destroy($id){
        Petani::destroy($id);
        return back()->with('success','Terhapus');
    }

}
?>