<style>
    .form-label {
        font-weight: 600;
        color: #1e3a8a; /* Biru navy */
    }
    .form-control {
        background-color: #f0f6ff; /* Biru muda soft */
        border: 1px solid #c7ddef;
        color: #1e3a8a;
    }
    .form-control:focus {
        border-color: #3b82f6;
        box-shadow: 0 0 0 0.15rem rgba(59, 130, 246, 0.25);
    }
    select.form-control {
        background-color: #f0f6ff;
    }

    .btn-soft-blue {
    background-color: #3b82f6;       /* biru sedang */
    color: white;
    border: none;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
  }

  .btn-soft-blue:hover {
    background-color: #2563eb;       /* biru lebih gelap saat hover */
    box-shadow: 0 0 8px rgba(37, 99, 235, 0.4);
  }
</style>

<div class="mb-3">
    <label class="form-label">NPM</label>
    <input type="text" name="npm" value="{{ old('npm', $mahasiswa['npm'] ?? '') }}" class="form-control" required {{ isset($mahasiswa) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label class="form-label">ID User</label>
    <input type="text" name="id_user" value="{{ old('id_user', $mahasiswa['id_user'] ?? '') }}" class="form-control" required {{ isset($mahasiswa) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label class="form-label">ID Dosen</label>
    <input type="text" name="id_dosen" value="{{ old('id_dosen', $mahasiswa['id_dosen'] ?? '') }}" class="form-control" required {{ isset($mahasiswa) ? '' : '' }} class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">id_kajur</label>
    <input type="text" name="id_kajur" value="{{ old('id_kajur', $mahasiswa['id_kajur'] ?? '') }}" class="form-control" required {{ isset($mahasiswa) ? 'readonly' : '' }}>
</div>

<div class="mb-3">
    <label class="form-label">Nama Mahasiswa</label>
    <input type="text" name="nama_mahasiswa" value="{{ old('nama_mahasiswa', $mahasiswa['nama_mahasiswa'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">TTL</label>
    <input type="text" name="tempat_tanggal_lahir" value="{{ old('tempat_tanggal_lahir', $mahasiswa['tempat_tanggal_lahir'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="Laki-laki" {{ (old('jenis_kelamin', $mahasiswa['jenis_kelamin'] ?? '') == 'Laki-laki') ? 'selected' : '' }}>Laki-laki</option>
        <option value="Perempuan" {{ (old('jenis_kelamin', $mahasiswa['jenis_kelamin'] ?? '') == 'Perempuan') ? 'selected' : '' }}>Perempuan</option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <input type="text" name="alamat" value="{{ old('alamat', $mahasiswa['alamat'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Agama</label>
    <input type="text" name="agama" value="{{ old('agama', $mahasiswa['agama'] ?? '') }}" class="form-control" required>
</div>


<div class="mb-3">
    <label class="form-label">Angkatan</label>
    <input type="text" name="angkatan" value="{{ old('angkatan', $mahasiswa['angkatan'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Program Studi</label>
    <input type="text" name="program_studi" value="{{ old('program_studi', $mahasiswa['program_studi'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Semester</label>
    <input type="text" name="semester" value="{{ old('semester', $mahasiswa['semester'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">No. HP</label>
    <input type="text" name="no_hp" value="{{ old('no_hp', $mahasiswa['no_hp'] ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" value="{{ old('email', $mahasiswa['email'] ?? '') }}" class="form-control" required>
</div>