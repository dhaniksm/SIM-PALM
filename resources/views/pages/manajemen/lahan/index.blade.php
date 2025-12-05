@extends('layouts.admin')
@section('title','Manajemen Lahan')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="md:col-span-2">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Daftar Lahan</h2>

            <button onclick="document.getElementById('modalTambahLahan').showModal()"
                class="bg-primary text-white px-3 py-2 rounded">+ Tambah</button>
        </div>

        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Kode</th>
                        <th class="p-3 text-left">Petani</th>
                        <th class="p-3 text-left">Lokasi</th>
                        <th class="p-3 text-left">Luas</th>
                        <th class="p-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lahan as $l)
                    <tr class="border-t hover:bg-gray-50 cursor-pointer"
                        onclick="loadDetailLahan({{ $l->id }})">
                        <td class="p-3">{{ $l->kode_lahan }}</td>
                        <td class="p-3">{{ $l->petani?->nama }}</td>
                        <td class="p-3">{{ $l->lokasi }}</td>
                        <td class="p-3">{{ $l->luas }}</td>
                        <td class="p-3">
                            <a href="{{ route('lahan.edit',$l->id) }}" class="text-primary">Edit</a>
                            <form action="{{ route('lahan.destroy',$l->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button class="text-red-600 ml-3" onclick="return confirm('Hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-3">
                {{ $lahan->links() }}
            </div>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH LAHAN --}}
<dialog id="modalTambahLahan" class="p-0 rounded-lg w-96">
    <form method="POST" action="{{ route('lahan.store') }}" class="p-6">
        @csrf
        <h3 class="text-lg font-semibold mb-4">Tambah Lahan</h3>

        <label class="block">Kode Lahan</label>
        <input name="kode_lahan" class="w-full border rounded p-2 mb-3" required>
        
        <label class="block">Petani</label>
        <select name="petani_id" class="w-full border rounded p-2 mb-3">
            @foreach($petani as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
            @endforeach
        </select>
        
        <label class="block">Lokasi</label>
        <input name="lokasi" class="w-full border rounded p-2 mb-3">

        <label class="block">Luas (ha)</label>
        <input name="luas" class="w-full border rounded p-2 mb-3">

        <div class="flex justify-end mt-4">
            <button type="button" onclick="modalTambahLahan.close()" class="mr-3">Batal</button>
            <button class="bg-primary text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</dialog>
@endsection