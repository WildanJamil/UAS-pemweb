<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faskes;

class FaskesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faskes::create([
            'nama' => 'Puskesmas XYZ',
            'nama_pengelola' => 'Dr. John Doe',
            'alamat' => 'Jl. Sehat No.123',
            'website' => 'http://puskesmasxyz.com',
            'email' => 'halik123@gmail.com',
            'kabkota_id' => '2',
            'rating' => 4.5,
            'latitude' => -6.914744,
            'longitude' => 107.609810,
            'jenis_faskes_id' => 1, // Pastikan jenis faskes dengan ID 1 sudah ada
            'kategori_id' => 1 // Pastikan kategori dengan ID 1 sudah ada
        ]);
    }
}
