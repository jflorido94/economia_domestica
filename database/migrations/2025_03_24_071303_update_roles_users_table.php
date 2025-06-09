<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Inserta roles básicos antes de agregar la clave foránea
        DB::table('roles')->insertOrIgnore([
            ['id' => 1, 'name' => 'usuario', 'description' => 'Rol básico para usuarios.'],
            ['id' => 2, 'name' => 'admin', 'description' => 'Rol para administradores.'],
        ]);

        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role_id')) {
                $table->foreignId('role_id')->default(1) // Valor predeterminado para rol_id
                    ->constrained('roles')->onDelete('cascade'); // Relación con la tabla rols, con eliminación en cascada
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']); // Eliminar la clave foránea
            $table->dropColumn('role_id'); // Eliminar la columna
        });
    }
};
