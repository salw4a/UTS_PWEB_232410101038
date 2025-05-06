@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">Profile</h1>
    <p class="text-gray-600">Hello, {{ $username }}! Here's detail about your profile.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="md:col-span-1">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex flex-col items-center">
                <div class="w-32 h-32 rounded-full overflow-hidden mb-4">
                    <img src="{{ asset('images/cutegirl.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
                </div>
                <h2 class="text-xl font-bold text-gray-800">{{ $user['name'] }}</h2>
                <p class="text-gray-600">{{ $user['role'] }}</p>
                <div class="mt-6 w-full">
                    <button class="w-full bg-pink-600 text-white py-2 px-4 rounded-md hover:bg--700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-300 mb-2">Edit Profile</button>
                    <button class="w-full bg-white text-pink-600 border border-pink-600 py-2 px-4 rounded-md hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-300">Change password</button>
                </div>
            </div>
        </div>
    </div>
    <div class="md:col-span-2">
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Account's information</h2>
            <div class="border-t border-gray-200 py-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Username</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $user['username'] }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Full name</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $user['name'] }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Email</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $user['email'] }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Role</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ $user['role'] }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Joined</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ \Carbon\Carbon::parse($user['joinDate'])->format('d M Y') }}</p>
                    </div>
                    <div>
                        <h3 class="text-sm font-medium text-gray-500">Last login</h3>
                        <p class="mt-1 text-sm text-gray-900">{{ \Carbon\Carbon::parse($user['lastLogin'])->format('d M Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Current activity</h2>
            <div class="border-t border-gray-200 pt-4">
                <ul class="divide-y divide-gray-200">
                    <li class="py-3">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900">Login to sistem</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::now()->format('d M Y H:i') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-green-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900">Added new concert</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::now()->subDays(2)->format('d M Y H:i') }}</p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center space-x-4">
                            <div class="flex-shrink-0">
                                <div class="h-8 w-8 rounded-full bg-yellow-100 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900">Updated detail profile</p>
                                <p class="text-sm text-gray-500">{{ \Carbon\Carbon::now()->subDays(5)->format('d M Y H:i') }}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
