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
        Schema::create('tbl_juegos', function (Blueprint $table) {
            $table->id('juegoid');
            $table->string('tituloJuego', 50)->unique();
            $table->string('descripcion', 255);
            $table->string('imagen', 255);
            $table->integer('precio');
            $table->integer('cantidad_disponible');
            $table->foreignId('plataformaid')->constrained('tblplataformas')->onDelete('cascade');
            $table->foreignId('generoid')->constrained('tbl_categorias')->onDelete('cascade');
            $table->foreignId('proveedorid')->constrained('tbl_proveedores')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_juegos');
    }
};
