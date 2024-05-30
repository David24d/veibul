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

        Schema::create('tblentradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('fecha');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('imagen');

            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
