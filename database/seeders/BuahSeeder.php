<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BuahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buah')->insert([
            [
                'nama_buah' => 'Apel',
                'stok' => 100,
                'harga' => 25000.00,
                'satuan' => 'kg',
                'deskripsi' => 'Apel segar dari Malang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_buah' => 'Jeruk',
                'stok' => 80,
                'harga' => 20000.00,
                'satuan' => 'kg',
                'deskripsi' => 'Jeruk manis lokal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_buah' => 'Pisang',
                'stok' => 50,
                'harga' => 15000.00,
                'satuan' => 'ikat',
                'deskripsi' => 'Pisang kepok matang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
