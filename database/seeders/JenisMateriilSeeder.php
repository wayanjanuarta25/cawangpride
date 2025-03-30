<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisMateriil;

class JenisMateriilSeeder extends Seeder
{
    public function run()
    {
        JenisMateriil::insert([
            ['nama' => 'ALKOMSUS'],
            ['nama' => 'ALMATSUS'],
            ['nama' => 'ALKUNG'],
        ]);
    }
}
