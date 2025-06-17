@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Dosen</h3>
    <a href="/dosen/create" class="btn btn-primary mb-3">Tambah Dosen</a>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Pesan error --}}
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>NIDN</th>
                <th>ID User</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dosen as $dsn)
            <tr>
                <td>{{ $dsn['id_dosen'] }}</td>
                <td>{{ $dsn['nama_dosen'] }}</td>
                <td>{{ $dsn['nidn'] }}</td>
                <td>{{ $dsn['id_user'] }}</td>
                <td>
                    <a href="/dosen/{{ $dsn['id_dosen'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/dosen/{{ $dsn['id_dosen'] }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center text-muted">Data dosen tidak tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
