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
            <label class="block mb-1">Petugas</label>
            <select name="petugas" class="w-full border rounded p-2">
                @foreach($petugas as $p)
                <option value="{{ $p }}">{{ $p }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Lokasi</label>
            <select name="lokasi" class="w-full border rounded p-2">
                @foreach($lokasi as $l)
                <option value="{{ $l }}">{{ $l }}</option>
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