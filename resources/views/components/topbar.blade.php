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
                src="data:image/png;base64,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" 
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