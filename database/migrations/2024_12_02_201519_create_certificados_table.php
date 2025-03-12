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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id('certificado_id');
            $table->string('numero_de_cda', 50);
            $table->string('numero_de_lote', 50);
            $table->date('fecha_de_emision');
            $table->date('fecha_de_validez');
            $table->unsignedBigInteger('producto_id')
              ->foreign('producto_id')
              ->references('producto_id')
              ->on('productos');
            $table->unsignedBigInteger('proveedor_id')
              ->foreign('proveedor_id')
              ->references('proveedor_id')
              ->on('proveedores');
            $table->unsignedBigInteger('tipo_de_evento_id')
              ->foreign('tipo_de_evento_id')
              ->references('tipo_de_evento_id')
              ->on('tipos_de_eventos');
            $table->string('numero_de_remito', 255);
            $table->string('numero_de_cda_proveedor', 255);
            $table->string('estado', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
