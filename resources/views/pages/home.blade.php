@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mx-auto mt-10">

    <h1 class="text-3xl font-bold mb-4">Selamat Datang di Website Kami</h1>

    @guest
        <a href="{{ route('login') }}"
           class="bg-blue-600 text-white px-5 py-2 rounded-lg">
           Login
        </a>
    @else
        <div class="relative inline-block">
            <button class="bg-gray-800 text-white px-5 py-2 rounded-lg">
                {{ Auth::user()->username }}
            </button>

            <div class="absolute right-0 mt-2 bg-white shadow-md rounded-lg p-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="text-red-600 font-semibold">Logout</button>
                </form>
            </div>
        </div>
    @endguest

</div>
@endsection
