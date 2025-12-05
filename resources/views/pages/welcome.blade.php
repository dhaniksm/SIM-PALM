@extends('layouts.landing')

@section('content')

<x-hero 
    title="Sistem Manajemen Organisasi Modern"
    subtitle="Kelola anggota, kegiatan, alat, dan laporan dalam satu dashboard yang terintegrasi."
    button="Masuk ke Sistem"
/>

<section class="px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 pb-16">

    <x-summary-card icon="👥" title="Total Anggota" value="1.204" />
    <x-summary-card icon="📦" title="Data Barang" value="58" />
    <x-summary-card icon="📅" title="Jadwal Bulanan" value="12" />
    <x-summary-card icon="📊" title="Laporan Baru" value="7" />

</section>

<section class="px-8 pb-20">
    <x-section-title>Aktivitas Sistem</x-section-title>
    <x-chart-card id="chartDummy" />
</section>

<section class="px-8 grid grid-cols-1 md:grid-cols-3 gap-8 pb-20">

    <x-feature-card icon="📘" title="Manajemen Anggota">
        Kelola data anggota secara terpusat dan efisien.
    </x-feature-card>

    <x-feature-card icon="🧰" title="Peminjaman Barang">
        Pantau alat dan inventaris dengan sistem peminjaman digital.
    </x-feature-card>

    <x-feature-card icon="📈" title="Laporan">
        Insight otomatis untuk evaluasi kegiatan organisasi.
    </x-feature-card>

</section>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('chartDummy'), {
        type: 'line',
        data: {
            labels: ['Jan','Feb','Mar','Apr','Mei','Jun'],
            datasets: [{
                label: 'Aktivitas',
                data: [12, 19, 13, 15, 22, 17]
            }]
        }
    });
</script>
@endpush