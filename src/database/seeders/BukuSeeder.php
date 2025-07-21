<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'title' => 'Belajar Laravel',
            'description' => 'Panduan lengkap untuk belajar Laravel dari dasar hingga mahir.',
            'penjaga_id' => 1, // Assuming the penjaga with ID 1 exists
        ]);

        Buku::create([
            'title' => 'Pemrograman PHP',
            'description' => 'Buku ini membahas konsep dasar pemrograman PHP.',
            'penjaga_id' => 1, // Assuming the penjaga with ID 2 exists
        ]);
    }
}
