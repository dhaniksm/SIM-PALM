@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex items-center justify-center min-h-[70vh]">
    <div class="bg-white shadow-lg rounded-xl w-full max-w-md p-8">
        <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Masuk ke Akun</h2>

        <form method="POST" action="{{ route('processLogin') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
                <input type="text" name="username" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-semibold transition">
                Masuk
            </button>
        </form>

        <p class="text-center text-gray-500 text-sm mt-6">
            Belum punya akun? <span class="text-blue-600">Daftar</span>.
        </p>
    </div>
</div>
@endsection