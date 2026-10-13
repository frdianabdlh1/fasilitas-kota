<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Jalan',
                'description' => 'Laporan mengenai kerusakan atau masalah pada jalan.',
            ],
            [
                'name' => 'Lampu Jalan',
                'description' => 'Laporan mengenai lampu penerangan jalan.',
            ],
            [
                'name' => 'Drainase',
                'description' => 'Laporan mengenai saluran drainase dan genangan air.',
            ],
            [
                'name' => 'Trotoar',
                'description' => 'Laporan mengenai kerusakan atau masalah pada trotoar.',
            ],
            [
                'name' => 'Taman Kota',
                'description' => 'Laporan mengenai kerusakan atau masalah pada fasilitas taman kota.',
            ],
        ]);
    }
}