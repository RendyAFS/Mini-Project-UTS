<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'namaBarang' => 'baju',
                'KodeBarang' => '001',
                'hargaBarang' => '25000',
                'deskripsiBarang' => 'kuning',
                'satuan_id' => '1',
            ],
            [
                'namaBarang' => 'celana',
                'KodeBarang' => '002',
                'hargaBarang' => '30000',
                'deskripsiBarang' => 'hitam',
                'satuan_id' => '1'
            ],
        ]);
    }
}
