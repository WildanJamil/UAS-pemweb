<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provinsi;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Provinsi::create([
            'nama' => 'Jawa Barat',
            'ibukota' => 'Bandung',
            'latitude' => -6.914744,
            'longitude' => 107.609810
        ]);
    }
}
