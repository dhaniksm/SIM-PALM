<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Landing Page' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <x-navbar />

    <main>
        @yield('content')
    </main>

    <footer class="text-center py-4 text-gray-500">
        © 2025 SIM-PALM. All rights reserved.
    </footer>

    @stack('scripts')

</body>
</html>