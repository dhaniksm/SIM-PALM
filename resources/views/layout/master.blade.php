<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-100">

    <div class="flex">

        {{-- SIDEBAR --}}
        @include('components.sidebar')

        <div class="flex-1 ml-64 min-h-screen">

            {{-- TOPBAR --}}
            @include('components.topbar', ['title' => $title ?? ''])

            {{-- PAGE CONTENT --}}
            <div class="p-6">
                @yield('content')
            </div>

        </div>

    </div>

</body>
</html>