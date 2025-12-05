@extends('layouts.admin')

@section('title', 'Manajemen Data')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-semibold mb-6">Manajemen Data</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        {{-- Kartu Data Petani --}}
        <a href="{{ route('petani.index') }}"
           class="group block border rounded-lg p-5 hover:bg-gray-50 transition cursor-pointer shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-lg bg-primary text-white">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Data Petani</h3>
                    <p class="text-sm text-gray-600">Lihat dan kelola daftar petani</p>
                </div>
            </div>
        </a>

        {{-- Kartu Data Lahan --}}
        <a href="{{ route('lahan.index') }}"
           class="group block border rounded-lg p-5 hover:bg-gray-50 transition cursor-pointer shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-lg bg-primary text-white">
                    <i class="fa-solid fa-map"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Data Lahan</h3>
                    <p class="text-sm text-gray-600">Kelola informasi lahan</p>
                </div>
            </div>
        </a>

        {{-- Kartu Data Tanaman --}}
        <a href="{{ route('tanaman.index') }}"
           class="group block border rounded-lg p-5 hover:bg-gray-50 transition cursor-pointer shadow-sm">
            <div class="flex items-center gap-4">
                <div class="p-3 rounded-lg bg-primary text-white">
                    <i class="fa-solid fa-seedling"></i>
                </div>
                <div>
                    <h3 class="text-lg font-semibold">Data Tanaman</h3>
                    <p class="text-sm text-gray-600">Kelola jenis dan kategori tanaman</p>
                </div>
            </div>
        </a>

    </div>
</div>
@endsection