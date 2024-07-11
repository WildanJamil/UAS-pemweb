<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-faskes']);
        Permission::create(['name' => 'edit-faskes']);
        Permission::create(['name' => 'delete-faskes']);
        Permission::create(['name' => 'detail-faskes']);

        Permission::create(['name' => 'tambah-data']);
        Permission::create(['name' => 'edit-data']);
        Permission::create(['name' => 'delete-data']);
        Permission::create(['name' => 'detail-data']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'faskes']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-faskes');
        $roleAdmin->givePermissionTo('edit-faskes');
        $roleAdmin->givePermissionTo('delete-faskes');
        $roleAdmin->givePermissionTo('detail-faskes');

        $rolefaskes = Role::findByName('faskes');
        $rolefaskes->givePermissionTo('tambah-data');
        $rolefaskes->givePermissionTo('edit-data');
        $rolefaskes->givePermissionTo('delete-data');
        $rolefaskes->givePermissionTo('detail-data');
    }
}