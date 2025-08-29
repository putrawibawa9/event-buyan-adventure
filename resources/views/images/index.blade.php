@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Images for Event: {{ $event->name }}</h1>
        <a href="{{ route('events.images.create', $event) }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Upload Images</a>
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">{{ session('success') }}</div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach($images as $image)
            <div class="border rounded p-2 flex flex-col items-center">
                <img src="{{ asset('public/uploads/' . $image->path) }}" alt="Event Image" class="h-40 object-cover mb-2">
                <form action="{{ route('events.images.destroy', [$event, $image]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500" onclick="return confirm('Delete image?')">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
        <a href="{{ route('dashboard') }}" class="mt-4 inline-block text-blue-600">Back to Dashboard</a>
    </div>
</div>
@endsection
