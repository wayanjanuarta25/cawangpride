<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubJenis;

class SubJenisSeeder extends Seeder
{
    public function run()
    {
        SubJenis::insert([
            ['jenis_materiil_id' => 1, 'nama' => 'ALAT KOMUNIKASI RADIO'],
            ['jenis_materiil_id' => 1, 'nama' => 'ALAT KOMUNIKASI SALURAN'],
            ['jenis_materiil_id' => 1, 'nama' => 'ALAT KOMUNIKASI SATELIT'],
            ['jenis_materiil_id' => 1, 'nama' => 'ALAT KOMUNIKASI MEDIA'],
            ['jenis_materiil_id' => 2, 'nama' => 'DETEKSI'],
            ['jenis_materiil_id' => 2, 'nama' => 'INTERSEPSI/PENYADAPAN'],
            ['jenis_materiil_id' => 2, 'nama' => 'PROTEKSI/PENGAMANAN'],
            ['jenis_materiil_id' => 2, 'nama' => 'ALAT CITRA'],
            ['jenis_materiil_id' => 2, 'nama' => 'ALAT MEKATRONIK'],
        ]);
    }
}
