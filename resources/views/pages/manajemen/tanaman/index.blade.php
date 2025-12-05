@extends('layouts.admin')
@section('title','Manajemen Tanaman')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="md:col-span-2">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Daftar Tanaman</h2>

            <button onclick="document.getElementById('modalTambahTanaman').showModal()"
                class="bg-primary text-white px-3 py-2 rounded">+ Tambah</button>
        </div>

        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Lahan</th>
                        <th class="p-3 text-left">Jenis</th>
                        <th class="p-3 text-left">Jumlah</th>
                        <th class="p-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tanaman as $t)
                    <tr class="border-t hover:bg-gray-50 cursor-pointer"
                        onclick="loadDetailTanaman({{ $t->id }})">
                        <td class="p-3">{{ $t->lahan_id }}</td>
                        <td class="p-3">{{ $t->jenis }}</td>
                        <td class="p-3">{{ $t->jumlah }}</td>
                        <td class="p-3">
                            <a href="{{ route('tanaman.edit',$t->id) }}" class="text-primary">Edit</a>
                            <form action="{{ route('tanaman.destroy',$t->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button class="text-red-600 ml-3" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-3">
                {{ $tanaman->links() }}
            </div>
        </div>
    </div>
</div>

{{-- MODAL TAMBAH TANAMAN --}}
<dialog id="modalTambahTanaman" class="p-0 rounded-lg w-96">
    <form method="POST" action="{{ route('tanaman.store') }}" class="p-6">
        @csrf
        <h3 class="text-lg font-semibold mb-4">Tambah Tanaman</h3>
        
        <label class="block">Lahan</label>
        <select name="lahan_id" class="w-full border rounded p-2 mb-3">
            @foreach($lahan as $l)
                <option value="{{ $l->id }}">{{ $l->kode_lahan }}</option>
            @endforeach
        </select>

        <label class="block">Jenis</label>
        <input name="jenis" class="w-full border rounded p-2 mb-3" required>

        <label class="block">Jumlah</label>
        <input name="jumlah" type="number" class="w-full border rounded p-2 mb-3">

        <div class="flex justify-end mt-4">
            <button type="button" onclick="modalTambahTanaman.close()" class="mr-3">Batal</button>
            <button class="bg-primary text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</dialog>
@endsection