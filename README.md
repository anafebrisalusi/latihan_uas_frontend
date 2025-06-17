# Laravel 10 - Panduan Instalasi dan Push ke GitHub

## 📦 Persiapan Sebelum Install Laravel
Pastikan sudah menginstall:
- PHP ≥ 8.1
- Composer
- Git
- Git Bash (jika di Windows)
- MySQL / MariaDB (opsional)

## ⚙️ Cara Menginstal Laravel 10

1. **Buka Git Bash / Terminal**
2. Jalankan perintah berikut untuk membuat project Laravel baru:

```bash
composer create-project laravel/laravel nama_projectmu "^10.0"
```

3. **Masuk ke folder project:**

```bash
cd nama_projectmu
```

4. **Jalankan server lokal Laravel:**

```bash
php artisan serve
```

Laravel akan berjalan di `http://localhost:8000`

---

## Cara Buka Git Bash
### 1. Buka folder project kamu di VSCode
```Buka VSCode

Klik menu File > Open Folder... lalu pilih folder project kamu (misalnya folder PBF)
```
### 2. Buka Terminal Git Bash
```Di VSCode, tekan: Ctrl + Shift + P

Ketik: Select Default Profile

Pilih: Git Bash

Lalu buka terminal: Terminal > New Terminal

Sekarang terminal kamu akan pakai Git Bash ✔️
```

## ☁️ Cara Push Laravel ke GitHub dengan Git Bash

### 1. **Inisialisasi Git**

```bash
git init
```

### 2. **Tambahkan semua file ke Git**

```bash
git add .
```

### 3. **Commit perubahan pertama**

```bash
git commit -m "Initial commit"
```

### 4. **Buat repository di GitHub**, lalu hubungkan dengan:

```bash
git remote add origin https://github.com/username/repo-kamu.git
```

### 5. **Ganti nama branch ke `main` (kalau belum)**

```bash
git branch -M main
```

### 6. **Push ke GitHub**

```bash
git push -u origin main
```

---

## 📁 File Penting

- `.env` — konfigurasi database & environment (jangan di-push ke publik).
- `routes/web.php` — tempat rute utama aplikasi.
- `app/Http/Controllers/` — tempat controller Laravel.
- `resources/views/` — folder tampilan (Blade Template).

---

## 🔐 Tips Git Ignore

Pastikan file `.gitignore` berisi agar tidak ikut push:

```
/vendor
/node_modules
.env
```

---

## 📌 Catatan

Jika ada error seperti `CRLF will be replaced by LF`, itu hanya peringatan tentang format baris dan bisa diabaikan.

---

## 🧑‍💻 Author

Ana Febri Salusi  
[GitHub: anafebrisalusi](https://github.com/anafebrisalusi)
