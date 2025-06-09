<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->id(); // Identificador único del rol
            $table->string('name')->unique(); // Nombre del rol, debe ser único
            $table->text('description')->nullable(); // Descripción del rol, puede ser nula
            $table->timestamps(); // Marcas de tiempo para creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
    }
};
