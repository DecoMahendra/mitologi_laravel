<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}

DB::table('produks')->insert([
    ['nama' => 'Kaos', 'gambar' => 'kaos.jpg'],
    ['nama' => 'Jaket', 'gambar' => 'jaket.jpg'],
    ['nama' => 'Hoodie', 'gambar' => 'hoodie.jpg'],
    ['nama' => 'Rompi', 'gambar' => 'rompi.jpg'],
    ['nama' => 'Kemeja', 'gambar' => 'kemeja.jpg'],
    ['nama' => 'Jersey', 'gambar' => 'jersey.jpg'],
    ['nama' => 'Baju Komunitas', 'gambar' => 'komunitas.jpg'],
    ['nama' => 'Topi', 'gambar' => 'topi.jpg'],
]);
