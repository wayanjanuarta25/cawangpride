<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            JenisMateriilSeeder::class,
            SubJenisSeeder::class,
            SubSubJenisSeeder::class,
            GudangSeeder::class,
            StatusSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
