<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    public function run()
    {
        Status::insert([
            ['nama' => 'Baru'],
            ['nama' => 'Bekas'],
            ['nama' => 'Rusak'],
        ]);
    }
}
