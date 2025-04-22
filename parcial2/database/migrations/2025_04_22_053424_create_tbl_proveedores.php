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
        Schema::create('tbl_proveedores', function (Blueprint $table) {
            $table->id('proveedorid');
            $table->string('nombreProveedor', 50)->unique();
            $table->string('telefono', 15);
            $table->string('email', 50)->unique();
            $table->string('direccion', 100);
            $table->string('ciudad', 50);
            $table->string('pais', 50);
            $table->string('codigoPostal', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_proveedores');
    }
};
