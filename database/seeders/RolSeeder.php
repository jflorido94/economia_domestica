<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rols')->insertOrIgnore([
            ['id' => 1, 'name' => 'usuario', 'description' => 'Rol básico para usuarios.'],
            ['id' => 2, 'name' => 'admin', 'description' => 'Rol para administradores.'],
        ]);
    }
}
