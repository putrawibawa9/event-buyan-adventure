@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Tambah Event</h1>
    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block">Nama Event</label>
                <input type="text" name="name" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Tanggal</label>
                <input type="date" name="date" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Lokasi</label>
                <input type="text" name="location" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label class="block">Deskripsi</label>
                <textarea name="description" class="border rounded w-full p-2" rows="3"></textarea>
            </div>
            <div class="mb-4">
                <label class="block">Total Person</label>
                <input type="number" name="total_person" class="border rounded w-full p-2" min="1">
            </div>
            <div class="mb-4">
                <label class="block">Gambar</label>
                <input type="file" name="image" class="border rounded w-full p-2" accept="image/*">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            <a href="{{ route('events.index') }}" class="ml-2 text-gray-600">Batal</a>
        </form>
    </div>
</div>
@endsection
