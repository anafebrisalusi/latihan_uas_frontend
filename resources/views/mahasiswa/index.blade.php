@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Mahasiswa</h3>
    <a href="/mahasiswa/create" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

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
                <th>NPM</th>
                <th>ID User</th>
                <th>ID Dosen</th>
                <th>ID Kepala Jurusan</th>
                <th>Nama Mahasiswa</th>
                <th>TTL</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Angkatan</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs['npm'] }}</td>
                <td>{{ $mhs['id_user'] }}</td>
                <td>{{ $mhs['id_dosen'] }}</td>
                <td>{{ $mhs['id_kajur'] }}</td>
                <td>{{ $mhs['nama_mahasiswa'] }}</td>
                <td>{{ $mhs['tempat_tanggal_lahir'] }}</td>
                <td>{{ $mhs['jenis_kelamin'] }}</td>
                <td>{{ $mhs['alamat'] }}</td>
                <td>{{ $mhs['agama'] }}</td>
                <td>{{ $mhs['angkatan'] }}</td>
                <td>{{ $mhs['program_studi'] }}</td>
                <td>{{ $mhs['semester'] }}</td>
                <td>{{ $mhs['no_hp'] }}</td>
                <td>{{ $mhs['email'] }}</td>
                <td>
                    <a href="/mahasiswa/{{ $mhs['npm'] }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/mahasiswa/{{ $mhs['npm'] }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">Data mahasiswa tidak tersedia.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection