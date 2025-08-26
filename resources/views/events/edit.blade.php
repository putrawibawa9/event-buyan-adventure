@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Edit Event</h1>
        <form action="{{ route('events.update', $event) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block">Nama Event</label>
                <input type="text" name="name" class="border rounded w-full p-2" value="{{ $event->name }}" required>
            </div>
            <div class="mb-4">
                <label class="block">Tanggal</label>
                <input type="date" name="date" class="border rounded w-full p-2" value="{{ $event->date }}" required>
            </div>
            <div class="mb-4">
                <label class="block">Lokasi</label>
                <input type="text" name="location" class="border rounded w-full p-2" value="{{ $event->location }}" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            <a href="{{ route('events.index') }}" class="ml-2 text-gray-600">Batal</a>
        </form>
    </div>
</div>
@endsection
