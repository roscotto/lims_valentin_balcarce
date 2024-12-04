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
        Schema::create('proveedores_x_producto', function (Blueprint $table) {
          $table->id();
          $table->unsignedBigInteger('proveedor_id');
          $table->unsignedBigInteger('producto_id');
          $table->foreign('proveedor_id')->references('proveedor_id')->on('proveedores')->onDelete('cascade');
          $table->foreign('producto_id')->references('producto_id')->on('productos')->onDelete('cascade');
          $table->timestamps();
          $table->charset = 'utf8mb4';
          $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores_x_producto');
    }
};
