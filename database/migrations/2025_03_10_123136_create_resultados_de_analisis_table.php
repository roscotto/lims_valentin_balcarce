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
        Schema::create('resultados_de_analisis', function (Blueprint $table) {
            $table->id('resultado_de_analisis_id');
            $table->unsignedBigInteger('certificado_id')
              ->foreign('certificado_id')
              ->references('certificado_id')
              ->on('certificados');
            $table->unsignedBigInteger('parametro_id')
              ->foreign('parametro_id')
              ->references('parametro_id')
              ->on('parametros');
            $table->decimal('resultado_valor', 10, 4)->nullable();
            $table->string('resultado_referencia')->nullable();
            $table->unsignedBigInteger('metodo_de_analisis_id')
              ->foreign('metodo_de_analisis_id')
              ->references('metodo_de_analisis_id')
              ->on('metodos_de_analisis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultados_de_analisis');
    }
};
