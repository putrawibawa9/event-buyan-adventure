@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">Daftar Event</h1>
        <a href="{{ route('events.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Event</a>
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">{{ session('success') }}</div>
        @endif
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
