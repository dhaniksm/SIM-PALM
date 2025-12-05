@extends('layouts.admin')

@section('content')
<div class="p-8">
    <h1 class="text-xl font-bold">Laporan Pemupukan</h1>

    <table class="w-full mt-6 border">
        <thead class="bg-primary text-white">
            <tr>
                <th class="p-2 border">Tanggal</th>
                <th class="p-2 border">Petani</th>
                <th class="p-2 border">Lahan</th>
                <th class="p-2 border">Keterangan</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $d)
            <tr>
                <td class="p-2 border">{{ $d->tanggal }}</td>
                <td class="p-2 border">{{ $d->petani->nama }}</td>
                <td class="p-2 border">{{ $d->lahan->kode_lahan }}</td>
                <td class="p-2 border">{{ $d->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection