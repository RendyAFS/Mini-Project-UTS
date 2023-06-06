<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kodeSatuan' => '1',
                'namaSatuan' => 'pcs',
            ],
            [
                'kodeSatuan' => '2',
                'namaSatuan' => 'lusin',
            ],
            [
                'kodeSatuan' => '3',
                'namaSatuan' => 'lembar',
            ],
        ]);
    }
}
