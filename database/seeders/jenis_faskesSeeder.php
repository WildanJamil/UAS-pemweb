<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jenis_faskes;

class jenis_faskesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        jenis_faskes::create([
            'nama' => 'puskesmas',
        ]);
    }
}
