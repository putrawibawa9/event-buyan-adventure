@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Upload Image for Event: {{ $event->name }}</h1>
        <form action="{{ route('events.images.store', $event) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block">Image</label>
                <input type="file" name="image" class="border rounded w-full p-2" accept="image/*" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
            <a href="{{ route('events.images.index', $event) }}" class="ml-2 text-gray-600">Cancel</a>
        </form>
    </div>
</div>
@endsection
