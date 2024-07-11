<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kabkota;

class KabkotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kabkota::create([
            'nama' => 'Bandung',
            'latitude' => -6.917464,
            'longitude' => 107.619123,
            'provinsi_id' => 1 // Pastikan provinsi dengan ID 1 sudah ada
        ]);
    }
}
