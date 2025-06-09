<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\test\AccountSeederTest;
use Database\Seeders\test\UserSeederTest;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (app()->environment('local')) {
            // Seeders para producción
            $this->call([
                RoleSeeder::class,
                UserSeeder::class,
            ]);
        } elseif (app()->environment('testing')) {
            // Seeders para desarrollo o pruebas locales
            $this->call([
                RoleSeeder::class,
                UserSeederTest::class,
                AccountSeederTest::class,
            ]);
        }

    }
}
