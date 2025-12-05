@extends('layouts.admin')

@section('content')
<div class="p-6 space-y-6">

    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>

    {{-- Summary Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

        {{-- Total Panen --}}
        <div class="bg-white p-5 rounded-lg shadow flex items-center gap-4">
            <div class="bg-primary/20 p-3 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3v18h18"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Total Panen (kg)</p>
                <h2 class="text-2xl font-semibold mt-1 text-gray-800">1200</h2>
            </div>
        </div>

        {{-- Total Pupuk --}}
        <div class="bg-white p-5 rounded-lg shadow flex items-center gap-4">
            <div class="bg-primary/20 p-3 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-4-4-4"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Total Pupuk (kg)</p>
                <h2 class="text-2xl font-semibold mt-1 text-gray-800">320</h2>
            </div>
        </div>

        {{-- Tenaga Kerja --}}
        <div class="bg-white p-5 rounded-lg shadow flex items-center gap-4">
            <div class="bg-primary/20 p-3 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 21v-2a4 4 0 014-4h8a4 4 0 014 4v2"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Tenaga Kerja</p>
                <h2 class="text-2xl font-semibold mt-1 text-gray-800">12</h2>
            </div>
        </div>

        {{-- Kegiatan Minggu Ini --}}
        <div class="bg-white p-5 rounded-lg shadow flex items-center gap-4">
            <div class="bg-primary/20 p-3 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h8M4 18h16"/>
                </svg>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Kegiatan Minggu Ini</p>
                <h2 class="text-2xl font-semibold mt-1 text-gray-800">8</h2>
            </div>
        </div>

    </div>

        {{-- Grafik Tren Panen --}}
    <div class="bg-white p-5 rounded-lg shadow">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Tren Panen 12 Bulan</h2>

        <canvas id="chartPanen" class="h-64"></canvas>
    </div>

        {{-- Tabel Kegiatan Terbaru --}}
    <div class="bg-white p-5 rounded-lg shadow">
        <h2 class="text-lg font-semibold text-gray-700 mb-4">Kegiatan Operasional Terbaru</h2>

        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="py-2">Tanggal</th>
                    <th class="py-2">Kategori</th>
                    <th class="py-2">Petani</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b text-gray-600">
                    <td class="py-2">-</td>
                    <td class="py-2">-</td>
                    <td class="py-2">-</td>
                    <td class="py-2 text-primary cursor-pointer">Detail</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('chartPanen');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'],
            datasets: [{
                label: 'Panen (kg)',
                data: [100,140,200,180,220,260,300,310,280,290,320,350],
                borderColor: '#77B112',
                borderWidth: 2,
                fill: false,
                tension: 0.3
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
@endsection