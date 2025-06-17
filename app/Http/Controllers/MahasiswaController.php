<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    protected $apiUrl = 'http://localhost:8080/mahasiswa';

    public function index()
    {
        $response = Http::get($this->apiUrl);

        if ($response->failed()) {
            return back()->with('error', 'Gagal mengambil data dari API.');
        }

        $mahasiswa = $response->json();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required',
            'id_user' => 'required',
            'id_dosen' => 'required',
            'id_kajur' => 'required',
            'nama_mahasiswa' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'angkatan' => 'required',
            'program_studi' => 'required',
            'semester' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);

        $response = Http::post($this->apiUrl, $request->all());

        if ($response->failed()) {
            return back()->with('error', 'Gagal menambahkan data ke API.');
        }

        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil ditambahkan.');
    }

    public function edit($npm)
    {
        $response = Http::get("{$this->apiUrl}/$npm");

        if ($response->failed() || !$response->json()) {
            return back()->with('error', 'Data mahasiswa tidak ditemukan.');
        }

        $mahasiswa = $response->json();
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $npm)
    {
        $response = Http::put("{$this->apiUrl}/$npm", $request->all());

        if ($response->failed()) {
            return back()->with('error', 'Gagal memperbarui data.');
        }

        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($npm)
    {
        $response = Http::delete("{$this->apiUrl}/$npm");

        if ($response->failed()) {
            return back()->with('error', 'Gagal menghapus data.');
        }

        return back()->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}