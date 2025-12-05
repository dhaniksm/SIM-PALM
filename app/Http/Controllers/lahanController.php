<?php   

namespace App\Http\Controllers;
use App\Models\Lahan;
use App\Models\Petani;
class LahanController extends Controller
{
    public function index() {
        $data = Lahan::with('petani')->get();
        return view('lahan.index', compact('data'));
    }

    public function create() {
        $petani = Petani::all();
        return view('lahan.create', compact('petani'));
    }

    public function store(Request $req) {
        Lahan::create($req->all());
        return redirect()->route('lahan.index');
    }

    public function edit($id) {
        $lahan = Lahan::findOrFail($id);
        $petani = Petani::all();
        return view('lahan.edit', compact('lahan','petani'));
    }

    public function update(Request $req, $id) {
        Lahan::findOrFail($id)->update($req->all());
        return redirect()->route('lahan.index');
    }

    public function destroy($id) {
        Lahan::destroy($id);
        return redirect()->route('lahan.index');
    }
}
?>
