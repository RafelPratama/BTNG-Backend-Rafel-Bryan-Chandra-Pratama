# API Showroom Mobil

Proyek ini merupakan REST API untuk mengelola data mobil menggunakan Laravel 12 dan MySQL. API menyediakan fitur CRUD (Create, Read, Update, Delete) untuk data mobil.

## Teknologi
- Laravel 12
- PHP
- MySQL
- Postman
- Scramble API Documentation

## Persiapan Proyek

1. Clone repository atau unduh source code proyek.
2. Masuk ke folder proyek.
3. Install dependency:

   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`.
5. Atur koneksi database MySQL pada file `.env`.
6. Buat application key:

   ```bash
   php artisan key:generate
   ```

7. Jalankan migration dan seeder:

   ```bash
   php artisan migrate --seed
   ```

8. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

## Endpoint API

Base URL lokal: `http://127.0.0.1:8000/api`

| Method | Endpoint | Fungsi |
|---|---|---|
| GET | `/mobil` | Menampilkan semua data mobil |
| POST | `/mobil` | Menambahkan data mobil |
| GET | `/mobil/{id}` | Menampilkan detail mobil |
| PUT/PATCH | `/mobil/{id}` | Memperbarui data mobil |
| DELETE | `/mobil/{id}` | Menghapus data mobil |

## Dokumentasi API

Dokumentasi interaktif API tersedia melalui:

`http://127.0.0.1:8000/docs/api`

## Pengujian

Pengujian endpoint dilakukan menggunakan Postman, termasuk pengujian CRUD dan validasi input.

## Database

Data mobil disimpan dalam database MySQL. Seeder digunakan untuk menyediakan data awal untuk keperluan pengujian.

## Status Proyek

Proyek dikembangkan sebagai tugas akhir kelas Backend BTNG.
