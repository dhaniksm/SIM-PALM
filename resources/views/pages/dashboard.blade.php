@extends('layout.master')

@section('title', 'Dashboard')

@section('content')

    <h1 class="text-2xl font-semibold mb-6">Ringkasan</h1>

    <div class="grid grid-cols-3 gap-4">

        <div class="bg-white p-5 rounded shadow">
            <p class="text-slate-500">Total Petani</p>
            <h3 class="text-2xl font-bold">42</h3>
        </div>

        <div class="bg-white p-5 rounded shadow">
            <p class="text-slate-500">Total Lahan</p>
            <h3 class="text-2xl font-bold">15</h3>
        </div>

        <div class="bg-white p-5 rounded shadow">
            <p class="text-slate-500">Panen Bulan Ini</p>
            <h3 class="text-2xl font-bold">3200 kg</h3>
        </div>

    </div>

@endsection