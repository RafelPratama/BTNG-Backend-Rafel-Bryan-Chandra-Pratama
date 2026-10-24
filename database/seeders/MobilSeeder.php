<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    public function run(): void
    {
        $mobils = [
            [
                'nama' => 'Avanza 1.5 G',
                'brand' => 'Toyota',
                'harga' => 275000000,
                'tahun' => 2024,
                'transmisi' => 'Matic',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => null,
            ],
            [
                'nama' => 'Civic RS Turbo',
                'brand' => 'Honda',
                'harga' => 615000000,
                'tahun' => 2024,
                'transmisi' => 'CVT',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => null,
            ],
            [
                'nama' => 'Innova Zenix',
                'brand' => 'Toyota',
                'harga' => 430000000,
                'tahun' => 2025,
                'transmisi' => 'Matic',
                'bahan_bakar' => 'Hybrid',
                'status' => 'tersedia',
                'foto' => null,
            ],
            [
                'nama' => 'Brio Satya',
                'brand' => 'Honda',
                'harga' => 180000000,
                'tahun' => 2023,
                'transmisi' => 'Manual',
                'bahan_bakar' => 'Bensin',
                'status' => 'tersedia',
                'foto' => null,
            ],
            [
                'nama' => 'Pajero Sport',
                'brand' => 'Mitsubishi',
                'harga' => 570000000,
                'tahun' => 2024,
                'transmisi' => 'Matic',
                'bahan_bakar' => 'Diesel',
                'status' => 'sold',
                'foto' => null,
            ],
        ];

        foreach ($mobils as $mobil) {
            Mobil::create($mobil);
        }
    }
}