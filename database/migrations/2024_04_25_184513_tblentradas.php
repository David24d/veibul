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
         // Crear la tabla 'tblentradas'
        Schema::create('tblentradas', function (Blueprint $table) {
            // Definir la columna 'id' como llave primaria con auto-incremento
            $table->bigIncrements('id');
            
             // Definir las columnas  como string
            $table->string('fecha');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');
             
            // Crear columnas de timestamps ('created_at' y 'updated_at')
            $table->timestamps();
        });
        //
    }

    /**
     * Revertir las migraciones.
     */
    public function down(): void
    {
        //
    }
};
