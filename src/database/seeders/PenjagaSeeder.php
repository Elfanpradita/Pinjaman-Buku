<?php

namespace Database\Seeders;

use App\Models\Penjaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penjaga::create([
            'company_id' => 1, // Assuming the company with ID 1 exists
            'name' => 'John Doe',
            'user_id' => 1, // Assuming the user with ID 1 exists
        ]);

        Penjaga::create([
            'company_id' => 1,
            'name' => 'Jane Smith',
            'user_id' => 1, // Assuming the user with ID 2 exists
        ]);
    }
}
