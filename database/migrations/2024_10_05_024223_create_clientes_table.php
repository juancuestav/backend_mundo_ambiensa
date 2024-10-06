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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('identificacion')->nullable(); // Número de documento (DNI, RFC, etc.)
            $table->string('nombres');
            $table->string('apellidos')->nullable(); // Puede ser nulo si es una empresa
            $table->string('email')->unique(); // Correo único
            $table->string('telefono')->nullable();
            $table->text('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->boolean('activo')->default(true); // Cliente activo por defecto
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
