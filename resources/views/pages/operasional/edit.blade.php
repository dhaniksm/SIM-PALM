@extends('layouts.admin')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-semibold mb-4">Edit Operasional</h1>

    <form action="{{ route('operasional.update', $data->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Kategori</label>
            <select name="kategori" class="w-full border rounded p-2">
                <option value="Pupuk" {{ $data->kategori == 'Pupuk' ? 'selected' : '' }}>Pemupukan</option>
                <option value="Panen" {{ $data->kategori == 'Panen' ? 'selected' : '' }}>Panen</option>
                <option value="Perawatan" {{ $data->kategori == 'Perawatan' ? 'selected' : '' }}>Perawatan Lahan</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 font-medium">Petani</label>
            <select name="petani_id" class="w-full border rounded p-2">
                @foreach($petani as $p)
                <option value="{{ $p->id }}" {{ $data->petani_id == $p->id ? 'selected' : '' }}>
                    {{ $p->nama }}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1 font-medium">Lahan</label>
            <select name="lahan_id" class="w-full border rounded p-2">
                @foreach($lahan as $l)
                <option value="{{ $l->id }}" {{ $data->lahan_id == $l->id ? 'selected' : '' }}>
                    {{ $l->kode_lahan }}
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block mb-1 font-medium">Tanggal</label>
            <input type="date" name="tanggal" value="{{ $data->tanggal }}" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="block mb-1 font-medium">Keterangan</label>
            <textarea name="keterangan" class="w-full border rounded p-2" rows="3">{{ $data->keterangan }}</textarea>
        </div>

        <button class="bg-primary text-white px-4 py-2 rounded hover:bg-primary-dark transition">
            Update
        </button>

    </form>

</div>
@endsection