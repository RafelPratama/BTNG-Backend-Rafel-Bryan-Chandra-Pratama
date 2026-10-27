# API Showroom Mobil — Laravel 12

RESTful API untuk mengelola data mobil pada showroom menggunakan Laravel 12 dan MySQL. Proyek ini dibuat untuk memenuhi Tugas Akhir Kelas Website Backend BTNG.

## 1. Live Deployment

- **URL utama aplikasi:** https://app-cf6f0f82-35b8-4488-8576-30eb4cf8db26.cleverapps.io/
- **API daftar mobil:** https://app-cf6f0f82-35b8-4488-8576-30eb4cf8db26.cleverapps.io/api/mobil
- **Dokumentasi API Scramble:** https://app-cf6f0f82-35b8-4488-8576-30eb4cf8db26.cleverapps.io/docs/api

## 2. Teknologi yang Digunakan

- Laravel 12
- PHP 8.2 atau versi yang kompatibel
- MySQL
- Eloquent ORM
- Laravel API Resource
- Scramble untuk dokumentasi API interaktif

## 3. Fitur

- Menampilkan seluruh data mobil.
- Menampilkan detail mobil berdasarkan ID.
- Menambahkan data mobil.
- Memperbarui data mobil.
- Menghapus data mobil.
- Validasi data menggunakan `$request->validate()`.
- Format respons API menggunakan `message` dan `data`.
- Seeder untuk mengisi data awal.
- Dokumentasi API interaktif melalui Scramble.

## 4. Daftar Endpoint API

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/api/mobil` | Menampilkan seluruh data mobil |
| GET | `/api/mobil/{id}` | Menampilkan detail mobil |
| POST | `/api/mobil` | Menambahkan mobil |
| PUT / PATCH | `/api/mobil/{id}` | Memperbarui data mobil |
| DELETE | `/api/mobil/{id}` | Menghapus mobil |

### Format Respons

Respons berhasil menggunakan format JSON dengan `message` dan `data`. Contoh:

```json
{
  "message": "Daftar mobil berhasil diambil",
  "data": []
}
```

Status HTTP yang digunakan meliputi `200 OK`, `201 Created`, `404 Not Found`, dan `422 Unprocessable Content`, sesuai kondisi permintaan.

## 5. Persyaratan Menjalankan Proyek

Pastikan perangkat telah memiliki:

- PHP dengan versi yang kompatibel.
- Composer.
- MySQL.
- Git.

## 6. Panduan Instalasi Lokal

### A. Clone Repository

Jalankan perintah berikut di terminal. Ganti `USERNAME` dengan username GitHub pemilik repository.

```bash
git clone https://github.com/USERNAME/BTNG-Backend-Rafel-Bryan-Chandra-Pratama.git
```

Masuk ke folder proyek:

```bash
cd BTNG-Backend-Rafel-Bryan-Chandra-Pratama
```

Pastikan nama folder sesuai dengan hasil clone repository.

### B. Instal Dependensi

```bash
composer install
```

### C. Konfigurasi Environment

Salin file `.env.example` menjadi `.env`.

Untuk Windows PowerShell:

```powershell
Copy-Item .env.example .env
```

### D. Generate Application Key

```bash
php artisan key:generate
```

### E. Konfigurasi Database

Buat database MySQL untuk proyek ini. Kemudian sesuaikan konfigurasi berikut di file `.env` dengan pengaturan MySQL lokal:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=showroom
DB_USERNAME=root
DB_PASSWORD=
```

Sesuaikan nama database, username, dan password dengan konfigurasi perangkat masing-masing.

### F. Jalankan Migration dan Seeder

```bash
php artisan migrate --seed
```

Perintah tersebut membuat tabel yang diperlukan dan menjalankan seeder untuk mengisi data awal.

### G. Jalankan Aplikasi

```bash
php artisan serve
```

Secara default, aplikasi lokal dapat diakses melalui:

`http://127.0.0.1:8000`

API daftar mobil:

`http://127.0.0.1:8000/api/mobil`

Dokumentasi Scramble:

`http://127.0.0.1:8000/docs/api`

## 7. Pengujian API

API dapat diuji menggunakan Postman atau fitur Try it out pada dokumentasi Scramble.

Pengujian meliputi:

1. GET untuk membaca data mobil.
2. POST untuk menambahkan mobil dengan data yang valid.
3. PUT atau PATCH untuk memperbarui data.
4. DELETE untuk menghapus data.
5. Pengujian validasi menggunakan data kosong atau tipe data yang salah.
6. Pengujian ID yang tidak ditemukan.

## 8. Database dan Keamanan

Proyek menggunakan MySQL sebagai basis data dan Eloquent ORM untuk pengelolaan data.

Jangan mengunggah file `.env` asli yang berisi kredensial atau kunci rahasia ke repository publik. Gunakan `.env.example` sebagai contoh konfigurasi.

---

**Tugas Akhir BTNG — Kelas Website Backend**  
Tema: API Showroom Mobil  
Framework: Laravel 12
