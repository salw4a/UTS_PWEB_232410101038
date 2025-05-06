@extends('layouts.app')
@section('title', 'Tambah Konser')
@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-xl font-bold mb-4">Add New Concert</h1>
    <form action="{{ route('pengelolaan.store', ['username' => $username]) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Concert Title" class="w-full px-4 py-2 border rounded">
        <input type="date" name="date" class="w-full px-4 py-2 border rounded">
        <input type="time" name="time" class="w-full px-4 py-2 border rounded">
        <input type="text" name="location" placeholder="Location" class="w-full px-4 py-2 border rounded">
        <input type="number" name="capacity" placeholder="Capacity" class="w-full px-4 py-2 border rounded">
        <input type="text" name="price1" placeholder="Price (Cheapest)" class="w-full px-4 py-2 border rounded">
        <input type="text" name="price2" placeholder="Price (Most expensive)" class="w-full px-4 py-2 border rounded">
        <select name="status" class="w-full px-4 py-2 border rounded">
            <option value="Scheduled">Scheduled</option>
            <option value="Cancelled">Cancelled</option>
            <option value="Done">Done</option>
        </select>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Save</button>
    </form>
</div>
@endsection

