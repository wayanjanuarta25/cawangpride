<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Pastikan role sudah ada sebelum menetapkan ke user
        $superAdminRole = Role::firstOrCreate(['name' => 'superadmin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Buat user SuperAdmin
        $superAdmin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password'),
        ]);
        $superAdmin->assignRole($superAdminRole);

        // Buat user Admin Biasa
        $admin = User::create([
            'name' => 'Admin Biasa',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);
        $admin->assignRole($adminRole);
    }
}
