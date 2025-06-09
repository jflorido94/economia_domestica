<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an admin user
        DB::table('users')->insertOrIgnore([
            [
                'id' => 1,
                'name' => 'Javier Florido',
                'email' => 'hbranky22@hotmail.com',
                'password' => bcrypt('147258'), // Use bcrypt to hash the password
                'rol_id' => 2, // Assign the admin role
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
