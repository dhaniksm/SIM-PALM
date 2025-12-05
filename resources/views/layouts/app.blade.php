<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- NAVBAR -->
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="text-xl font-semibold">SIM-PALM</h1>

        <div class="flex items-center gap-4">

            {{-- USER BELUM LOGIN --}}
            @guest
                <a href="{{ route('login') }}" 
                   class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Login
                </a>
            @endguest

            {{-- USER SUDAH LOGIN --}}
            @auth
                <div class="relative">
                    <!-- TOMBOL PROFIL -->
                    <button 
                        id="profileBtn"
                        class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-900 transition">
                        {{ auth()->user()->username }}
                    </button>

                    <!-- DROPDOWN -->
                    <div 
                        id="dropdownMenu"
                        class="hidden absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg"
                    >
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button 
                                type="submit" 
                                class="w-full text-left text-red-600 px-4 py-2 hover:bg-red-50">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>

                <script>
                    // Toggle dropdown saat tombol profil ditekan
                    document.getElementById("profileBtn").addEventListener("click", function () {
                        document.getElementById("dropdownMenu").classList.toggle("hidden");
                    });

                    // Menutup dropdown ketika klik area lain
                    document.addEventListener("click", function (event) {
                        const btn = document.getElementById("profileBtn");
                        const menu = document.getElementById("dropdownMenu");

                        if (!btn.contains(event.target) && !menu.contains(event.target)) {
                            menu.classList.add("hidden");
                        }
                    });
                </script>
            @endauth

        </div>
    </nav>

    <!-- CONTENT -->
    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>
