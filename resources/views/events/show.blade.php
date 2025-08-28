@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Detail Event</h1>
        <div class="mb-4">
            <strong>Nama Event:</strong> {{ $event->name }}
        </div>
        <div class="mb-4">
            <strong>Tanggal:</strong> {{ $event->date }}
        </div>
        <div class="mb-4">
            <strong>Lokasi:</strong> {{ $event->location }}
        </div>
        <a href="{{ route('dashboard') }}" class="text-blue-500">Kembali ke Daftar Event</a>
    </div>
</div>
@endsection
