<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar las migraciones.
     */
    public function up(): void
    {
        // Crear la tabla 'tbl_servicios'
        Schema::create('tbl_servicios', function (Blueprint $table) {
            // Definir la columna 'id' como llave primaria con auto-incremento
            $table->bigIncrements('id');

            // Definir las columnas  como string
            $table->string('icono');
            $table->string('titulo');
            $table->string('descripcion');
            
            // Crear columnas de timestamps ('created_at' y 'updated_at')
            $table->timestamps();
        });
    }

    /**
     * Revertir las migraciones.
     */
    public function down(): void
    {
        //
    }
};
