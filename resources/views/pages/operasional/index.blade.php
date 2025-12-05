@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-xl font-semibold mb-4">Daftar Data Operasional</h2>
    
    @if(session('success'))
    <div class="mb-3 p-2 bg-green-100 border border-green-300 text-green-700 rounded">
        {{ session('success') }}
    </div>
    @endif
    
    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">Kategori</th>
                <th class="p-2 border">Petani</th>
                <th class="p-2 border">Lokasi</th>
                <th class="p-2 border">Tanggal</th>
                <th class="p-2 border">Keterangan</th>
                <th class="border p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td class="p-2 border">{{ $row->kategori }}</td>
                <td class="p-2 border">{{ $row->petani }}</td>
                <td class="p-2 border">{{ $row->lokasi }}</td>
                <td class="p-2 border">{{ $row->tanggal }}</td>
                <td class="p-2 border">{{ $row->keterangan }}</td>
                <td class="border p-2">
                    <div class="flex gap-2">
                        <a href="{{ route('operasional.edit', $row->id) }}"
                        class="text-primary font-semibold">Edit</a>
                        
                        <form action="{{ route('operasional.destroy', $row->id) }}" method="POST"
                        onsubmit="return confirm('Hapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600 font-semibold">Delete</button>
                    </form>
                </div>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>

<a href="operasional/create"
    class="mt-6 inline-block px-6 py-3 bg-primary text-white rounded-md">
    Tambah
</a>

</div>
@endsection