@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Edit Tanaman</h1>

    <form action="{{ route('tanaman.update', $tanaman->id) }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
        @csrf
        @method('PUT')
        
        <div>
            <label class="block">Lahan</label>
            <select name="lahan_id" class="w-full border rounded p-2 mb-3">
                @foreach($lahan as $l)
                <option value="{{ old('lahan_id', $tanaman->lahan_id) }}">{{ $l->kode_lahan }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label class="block font-medium">Jenis Tanaman</label>
            <input type="text" name="nama_tanaman" value="{{ old('jenis', $tanaman->jenis) }}"
                   class="mt-1 w-full border rounded p-2">
        </div>

        <div>
            <label class="block">Jumlah</label>
            <input type="number" name="jumlah" value="{{ old('jumlah', $tanaman->jumlah) }}" 
                   class="w-full border rounded p-2 mb-3">
        </div>

        <div class="flex justify-end gap-2">
            <a href="{{ route('tanaman.index') }}" class="px-4 py-2 bg-gray-200 rounded">Batal</a>
            <button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
        </div>
    </form>
</div>
@endsection