@extends('layouts.admin')

@section('content')
<div class="p-6">
    <h1 class="text-xl font-bold mb-6">Menu Laporan</h1>

    <div class="grid grid-cols-3 gap-6">
        <a href="{{ route('laporan.panen') }}"
           class="block bg-white shadow rounded p-5 hover:bg-gray-50">
            <h2 class="font-semibold text-lg mb-2">Laporan Panen</h2>
            <p class="text-sm text-gray-600">Rekap data panen per bulan dan per petani.</p>
        </a>

        <a href="{{ route('laporan.pemupukan') }}"
           class="block bg-white shadow rounded p-5 hover:bg-gray-50">
            <h2 class="font-semibold text-lg mb-2">Laporan Pemupukan</h2>
            <p class="text-sm text-gray-600">Rekap kegiatan pemupukan berdasarkan periode.</p>
        </a>

        <a href="{{ route('laporan.perawatan') }}"
           class="block bg-white shadow rounded p-5 hover:bg-gray-50">
            <h2 class="font-semibold text-lg mb-2">Laporan Perawatan</h2>
            <p class="text-sm text-gray-600">Data perawatan lahan sepanjang periode.</p>
        </a>
    </div>
</div>
@endsection