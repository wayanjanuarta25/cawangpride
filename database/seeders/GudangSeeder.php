<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GudangSeeder extends Seeder
{
    public function run()
    {
        DB::table('gudangs')->insert([
            ['nama' => 'Gudang Cawang 1', 'lokasi' => 'Cawang'],
            ['nama' => 'Gudang Mako 1', 'lokasi' => 'Kalibata'],
        ]);
    }
}
