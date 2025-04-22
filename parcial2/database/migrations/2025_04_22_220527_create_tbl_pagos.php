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
        Schema::create('tbl_pagos', function (Blueprint $table) {
            $table->id('pagoid');
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->integer('numTarjeta');
            $table->integer('cvv');
            $table->date('fechaExp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pagos');
    }
};
