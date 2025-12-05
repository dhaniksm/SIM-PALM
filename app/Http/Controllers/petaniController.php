<?php

namespace App\Http\Controllers;
use App\Models\Petani;
use Illuminate\Http\Request;
class PetaniController extends Controller
{
    public function index() {
        $data = Petani::all();
        return view('petani.index', compact('data'));
    }

    public function create() {
        return view('petani.create');
    }

    public function store(Request $request) {
        Petani::create($request->all());
        return redirect()->route('petani.index');
    }

    public function edit($id) {
        $petani = Petani::findOrFail($id);
        return view('petani.edit', compact('petani'));
    }

    public function update(Request $req, $id) {
        Petani::findOrFail($id)->update($req->all());
        return redirect()->route('petani.index');
    }

    public function destroy($id) {
        Petani::destroy($id);
        return redirect()->route('petani.index');
    }
}
?>