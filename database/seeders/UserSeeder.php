<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faskes = User::create([
            'name' => 'khalik',
            'email' => 'faskes12@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $faskes->assignRole('faskes');
    }
}
