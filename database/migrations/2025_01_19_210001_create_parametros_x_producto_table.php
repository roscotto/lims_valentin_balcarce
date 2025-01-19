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
        Schema::create('parametros_x_producto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parametro_id');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('parametro_id')->references('parametro_id')->on('parametros')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('producto_id')->references('producto_id')->on('productos')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros_x_producto');
    }
};
