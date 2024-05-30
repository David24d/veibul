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
        Schema::create('tblequipo', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('imagen');
            $table->string('nombrecompleto');
            $table->string('puesto');
            $table->string('twiter');
            $table->string('facebook');
            
            
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
