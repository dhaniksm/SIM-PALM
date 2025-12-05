@extends('layouts.admin')
@section('title','Manajemen Petani')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    {{-- TABEL PETANI --}}
    <div class="md:col-span-2">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Daftar Petani</h2>
            <button onclick="document.getElementById('modalTambahPetani').showModal()" class="bg-primary text-white px-3 py-2 rounded">
                + Tambah
            </button>
        </div>

        <div class="bg-white rounded shadow overflow-hidden">
            <table class="w-full text-sm">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="p-3 text-left">Nama</th>
                        <th class="p-3 text-left">Alamat</th>
                        <th class="p-3 text-left">No HP</th>
                        <th class="p-3 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($petani as $p)
                    <tr class="border-t hover:bg-gray-50 cursor-pointer"
                        onclick="loadDetailPetani({{ $p->id }})">
                        <td class="p-3">{{ $p->nama }}</td>
                        <td class="p-3">{{ $p->alamat }}</td>
                        <td class="p-3">{{ $p->no_hp }}</td>
                        <td class="p-3">
                            <a href="{{ route('petani.edit', $p->id) }}" class="text-primary">Edit</a>
                            <form action="{{ route('petani.destroy',$p->id) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button class="text-red-600 ml-3" onclick="return confirm('Hapus data?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-3">
                {{ $petani->links() }}
            </div>
        </div>
    </div>
</div>


{{-- MODAL TAMBAH --}}
<dialog id="modalTambahPetani" class="p-0 rounded-lg w-96">
    <form method="POST" action="{{ route('petani.store') }}" class="p-6">
        @csrf
        <h3 class="text-lg font-semibold mb-4">Tambah Petani</h3>

        <label class="block">Nama</label>
        <input name="nama" class="w-full border rounded p-2 mb-3" required>
        
        <label class="block">Alamat</label>
        <textarea name="alamat" class="w-full border rounded p-2 mb-3"></textarea>

        <label class="block">No HP</label>
        <input name="no_hp" class="w-full border rounded p-2 mb-3">


        <div class="flex justify-end mt-4">
            <button type="button" onclick="modalTambahPetani.close()" class="mr-3">Batal</button>
            <button class="bg-primary text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</dialog>
@endsection