@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow mb-8">
        <h1 class="text-2xl font-bold mb-4">Dashboard</h1>
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-blue-100 p-4 rounded">
                <h2 class="text-lg font-semibold">Total Event</h2>
                <p class="text-3xl">{{ $total_event }}</p>
            </div>
            <div class="bg-green-100 p-4 rounded">
                <h2 class="text-lg font-semibold">Total Penyewa</h2>
                <p class="text-3xl">{{ $total_penyewa }}</p>
            </div>
        </div>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Manajemen Event</h2>
            <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Event</a>
        </div>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2">Nama</th>
                    <th class="py-2">Tanggal</th>
                    <th class="py-2">Lokasi</th>
                    <th class="py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td class="border px-4 py-2">{{ $event->name }}</td>
                    <td class="border px-4 py-2">{{ $event->date }}</td>
                    <td class="border px-4 py-2">{{ $event->location }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('events.show', $event) }}" class="text-blue-500">Lihat</a> |
                        <a href="{{ route('events.edit', $event) }}" class="text-yellow-500">Edit</a> |
                        <form action="{{ route('events.destroy', $event) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
