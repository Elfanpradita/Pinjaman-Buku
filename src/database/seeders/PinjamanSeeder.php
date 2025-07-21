<?php

namespace Database\Seeders;

use App\Models\Pinjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pinjaman::create([
            'buku_id' => 1, // Assuming the book with ID 1 exists
            'user_id' => 1, // Assuming the user with ID 1 exists
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => now()->addDays(7),
        ]);

        Pinjaman::create([
            'buku_id' => 2, // Assuming the book with ID 2 exists
            'user_id' => 1, // Assuming the user with ID 2 exists
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => now()->addDays(14),
        ]);
    }
}
