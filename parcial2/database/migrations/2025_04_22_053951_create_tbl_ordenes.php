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
        Schema::create('tbl_ordenes', function (Blueprint $table) {
            $table->id('ordenid');
            $table->foreignId('usuarioid')->constrained('tbl_usuarios')->onDelete('cascade');
            $table->integer('total');
            $table->dateTime('fecha_orden');
          

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ordenes');
    }
};
