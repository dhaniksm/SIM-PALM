@extends('layout.master')

@section('content')
<div class="p-6">

    <h1 class="text-2xl font-semibold mb-6 text-gray-800">Operasional Harian Perkebunan Sawit</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        {{-- Informasi Umum --}}
        <div class="bg-white p-5 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Informasi Umum</h2>

            <div class="space-y-3">
                <div>
                    <label class="text-sm text-gray-600">Tanggal</label>
                    <input type="date" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Petani</label>
                    <input type="text" class="w-full border rounded p-2" placeholder="Nama petani">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Lahan atau Blok</label>
                    <input type="text" class="w-full border rounded p-2" placeholder="Contoh blok A1">
                </div>
            </div>
        </div>

        {{-- Panen Sawit --}}
        <div class="bg-white p-5 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Panen Sawit</h2>

            <div class="space-y-3">
                <div>
                    <label class="text-sm text-gray-600">Total Janjang</label>
                    <input type="number" class="w-full border rounded p-2" placeholder="Contoh 125">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Total Berat Kilogram</label>
                    <input type="number" class="w-full border rounded p-2" placeholder="Contoh 540">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Catatan</label>
                    <textarea class="w-full border rounded p-2" rows="2"></textarea>
                </div>
            </div>
        </div>

        {{-- Transport --}}
        <div class="bg-white p-5 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Transport</h2>

            <div class="space-y-3">
                <div>
                    <label class="text-sm text-gray-600">Jenis Kendaraan</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Nomor Kendaraan</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Sopir</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Biaya Bahan Bakar</label>
                    <input type="number" class="w-full border rounded p-2">
                </div>
            </div>
        </div>

        {{-- Pupuk --}}
        <div class="bg-white p-5 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Pupuk</h2>

            <div class="space-y-3">
                <div>
                    <label class="text-sm text-gray-600">Jenis Pupuk</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Jumlah Kilogram</label>
                    <input type="number" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Petugas</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>
            </div>
        </div>

        {{-- Tenaga Kerja --}}
        <div class="bg-white p-5 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Tenaga Kerja</h2>

            <div class="space-y-3">
                <div>
                    <label class="text-sm text-gray-600">Jumlah Pekerja</label>
                    <input type="number" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Jam Kerja Total</label>
                    <input type="number" class="w-full border rounded p-2" placeholder="Contoh 8">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Upah Harian</label>
                    <input type="number" class="w-full border rounded p-2">
                </div>
            </div>
        </div>

        {{-- Peralatan --}}
        <div class="bg-white p-5 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">Peralatan</h2>

            <div class="space-y-3">
                <div>
                    <label class="text-sm text-gray-600">Nama Peralatan</label>
                    <input type="text" class="w-full border rounded p-2">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Kondisi</label>
                    <input type="text" class="w-full border rounded p-2" placeholder="Contoh baik atau rusak ringan">
                </div>

                <div>
                    <label class="text-sm text-gray-600">Jam Operasional</label>
                    <input type="number" class="w-full border rounded p-2">
                </div>
            </div>
        </div>

    </div>

    <div class="mt-6">
        <button class="bg-primary text-white px-6 py-2 rounded hover:opacity-90">Simpan Operasional</button>
    </div>

</div>
@endsection