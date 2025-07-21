<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /* ——— A. Pastikan role super_admin ada ——— */
        Role::firstOrCreate(['name' => 'super_admin']);

        /* ——— B. Buat / ambil user admin ——— */
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name'     => 'Admin',
                'password' => bcrypt('password'),   // ganti kalau mau
            ]
        );

        /* ——— C. Assign role super_admin bila belum ——— */
        if (! $admin->hasRole('super_admin')) {
            $admin->assignRole('super_admin');
        }

        /* ——— D. Jalankan RoleSeeder & seeder lain ——— */
    $this->call([
            CompanySeeder::class,
            PenjagaSeeder::class,
            BukuSeeder::class,
            PinjamanSeeder::class,
    ]);
}

}