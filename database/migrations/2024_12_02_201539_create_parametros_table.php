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
        Schema::create('parametros', function (Blueprint $table) {
            $table->id('parametro_id');
            $table->string('parametro');
            $table->decimal('valor_min', 10, 4)->nullable();
            $table->decimal('valor_max', 10, 4)->nullable();
            $table->string('referencia')->nullable();
            $table->string('valor')->nullable();
            $table->decimal('categoria_de_parametro_id', 10, 0)->nullable();
            //$table->foreignId('categoria_de_parametro_id')->constrained('categorias_de_parametros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametros');
    }
};
