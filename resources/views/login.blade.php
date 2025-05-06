@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="flex justify-center items-center min-h-[70vh]">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">ConcerTrack</h1>
            <p class="text-gray-600 mt-2">Concert Schedules Management System</p>
        </div>
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label for="username" class="block text-gray-700 text-sm font-medium mb-2">Username</label>
                <input type="text" name="username" id="username" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Username">
                @error('username')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Password">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Ingat saya</label>
                </div>

                <a href="#" class="text-sm text-indigo-600 hover:text-indigo-800">Lupa password?</a>
            </div>
            <button type="submit" class="w-full bg-pink-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-300">Login</button>
        </form>
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">Fill put the username and password (6 characters min)</p>
        </div>
    </div>
</div>
@endsection
