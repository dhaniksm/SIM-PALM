@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Edit Lahan</h1>

    <form action="{{ route('lahan.update', $lahan->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Kode Lahan</label>
            <input type="text" name="kode_lahan" value="{{ old('kode_lahan', $lahan->kode_lahan) }}"
                   class="mt-1 w-full border rounded p-2">
        </div>

        <div>
            <label class="block font-medium">Petani</label>
            <select name="petani_id" class="w-full border rounded p-2 mb-3">
            @foreach($petani as $p)
            <option value="{{ old('petani_id', $lahan->petani_id) }}">{{ $p->nama }}</option>
            @endforeach
        </select>
        </div>

        <div>
            <label class="block font-medium">Lokasi</label>
            <input type="text" name="lokasi" value="{{ old('lokasi', $lahan->lokasi) }}"
                   class="mt-1 w-full border rounded p-2">
        </div>

        <div>
            <label class="block font-medium">Luas (ha)</label>
            <input type="number" name="luas" value="{{ old('luas', $lahan->luas) }}"
                   class="mt-1 w-full border rounded p-2">
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('lahan.index') }}" class="px-4 py-2 bg-gray-200 rounded">Batal</a>
            <button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection