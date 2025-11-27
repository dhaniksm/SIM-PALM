<div class="w-full bg-white h-16 flex items-center justify-between px-6 border-b border-slate-200 sticky top-0">

    <h2 class="text-xl font-semibold">
        {{ $title }}
    </h2>

    <div class="flex items-center gap-6">

        {{-- tombol notifikasi --}}
        <button class="relative text-slate-600 text-xl">
            🔔
        </button>

        {{-- profile --}}
        <div class="flex items-center gap-3">
            <img 
                src="https://via.placeholder.com/40" 
                class="w-10 h-10 rounded-full"
            >

            <div>
                <p class="text-slate-700 font-medium">Admin</p>
                <p class="text-slate-500 text-sm">Kebun</p>
            </div>
        </div>

        {{-- logout --}}
        <form action="/logout" method="POST">
            @csrf
            <button class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                Logout
            </button>
        </form>

    </div>

</div>