@extends('layouts.admin')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Input Data Operasional</h2>

    <form action="{{ route('operasional.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">Kategori</label>
            <select name="kategori" class="w-full border rounded p-2">
                @foreach($kategori as $item)
                <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Petani</label>
            <select name="petani" class="w-full border p-2 rounded">
                @foreach($petani as $p)
                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Lokasi</label>
            <select name="lokasi" class="w-full border p-2 rounded">
                @foreach($lahan as $l)
                <option value="{{ $l->id }}">{{ $l->kode_lahan }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Tanggal</label>
            <input type="date" name="tanggal" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Keterangan</label>
            <textarea name="keterangan" class="w-full border rounded p-2"></textarea>
        </div>

        <button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
    </form>
</div>
@endsection