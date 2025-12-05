<?php   

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lahan;
use App\Models\Petani;

class LahanController extends Controller
{
    public function index() {
        $lahan = Lahan::with('petani')->paginate(10);
        $petani = Petani::all();
        return view('pages.manajemen.lahan.index', compact('lahan', 'petani'));
    }

    public function store(Request $req) {
        Lahan::create($req->all());
        return redirect()->route('lahan.index');
    }

    public function edit($id) {
        $lahan = Lahan::findOrFail($id);
        $petani = Petani::all();
        return view('pages.manajemen.lahan.edit', compact('lahan','petani'));
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