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
        // Crear la tabla 'tblequipo'
        Schema::create('tblequipo', function (Blueprint $table) {
            // Definir la columna 'id' como llave primaria con auto-incremento
            $table->bigIncrements('id');

            // Definir las columnas como string
            $table->string('imagen');
            $table->string('nombrecompleto');
            $table->string('puesto');
            $table->string('twiter');
            $table->string('facebook');
            
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
