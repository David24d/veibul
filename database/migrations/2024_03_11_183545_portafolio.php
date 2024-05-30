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
        //
        Schema::create('tbl-portafolios', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('titulo');
            $table->string('subtitulo');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('cliente');
            $table->string('categoria');
            $table->string('url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
