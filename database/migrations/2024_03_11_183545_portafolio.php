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
        // Crear la tabla 'tbl-portafolios'
        Schema::create('tbl-portafolios', function (Blueprint $table) {
            // Definir la columna 'id' como llave primaria con auto-incremento
            $table->bigIncrements('id');
            
            // Definir las columnas  como string
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('cliente');
            $table->string('categoria');
            $table->string('url');

            // Crear columnas de timestamps ('created_at' y 'updated_at')
            $table->timestamps();
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
