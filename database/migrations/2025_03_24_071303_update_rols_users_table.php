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
        DB::table('rols')->insertOrIgnore([
            ['id' => 1, 'name' => 'usuario', 'description' => 'Rol básico para usuarios.'],
            ['id' => 2, 'name' => 'admin', 'description' => 'Rol para administradores.'],
        ]);

        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'rol_id')) {
                $table->foreignId('rol_id')->default(1) // Valor predeterminado para rol_id
                    ->constrained('rols')->onDelete('cascade'); // Relación con la tabla rols, con eliminación en cascada
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['rol_id']); // Eliminar la clave foránea
            $table->dropColumn('rol_id'); // Eliminar la columna
        });
    }
};
