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
        Schema::create('tbl_pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ordenid')->constrained('tbl_ordenes')->onDelete('cascade');
            $table->foreignId('juegoid')->constrained('tbl_juegos')->onDelete('cascade');
            $table->integer('cantidad');
            $table->integer('precio');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pedidos');
    }
};
