@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Edit Data Petani</h1>

    <form action="{{ route('petani.update', $petani->id) }}" method="POST"
          class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Nama Petani</label>
            <input type="text" name="nama" value="{{ old('nama', $petani->nama) }}"
                   class="mt-1 w-full border rounded p-2">
        </div>

        <div>
            <label class="block font-medium">Alamat</label>
            <textarea name="alamat" class="mt-1 w-full border rounded p-2">{{ old('alamat', $petani->alamat) }}</textarea>
        </div>

        <div>
            <label class="block font-medium">Nomor HP</label>
            <input type="text" name="no_telp" value="{{ old('no_hp', $petani->no_hp) }}"
                   class="mt-1 w-full border rounded p-2">
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('petani.index') }}" class="px-4 py-2 bg-gray-200 rounded">Batal</a>
            <button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection