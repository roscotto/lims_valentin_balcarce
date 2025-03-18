<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultadosDeAnalisisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('resultados_de_analisis')->insert([
        [
          'certificado_id' => 1,
          'parametro_id' => 7, // Concentración (H2SO4), % p/p
          'resultado_valor' => '28.10',
          'resultado_referencia' => null,
          'metodo_de_analisis_id' => 1,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 73, // Peso Específico a 20 ºC, g/ml
          'resultado_valor' => '1.204',
          'resultado_referencia' => null,
          'metodo_de_analisis_id' => 4,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 106, // Hierro (Fe), ppm
          'resultado_valor' => '12',
          'resultado_referencia' => null,
          'metodo_de_analisis_id' => 2,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 118, // Cloruros (Cl), ppm
          'resultado_valor' => '1',
          'resultado_referencia' => null,
          'metodo_de_analisis_id' => 3,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 185, // Nitrógeno Total (N), ppm
          'resultado_valor' => '5',
          'resultado_referencia' => null,
          'metodo_de_analisis_id' => 60,
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 186, // Sustancias Reductoras, % p/p
          'resultado_valor' => '0.05',
          'resultado_referencia' => null,
          'metodo_de_analisis_id' => '61',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 156, // Aspecto
          'resultado_valor' => null,
          'resultado_referencia' => 'Cumple',
          'metodo_de_analisis_id' => '61',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 164, // Color
          'resultado_valor' => null,
          'resultado_referencia' => 'Cumple',
          'metodo_de_analisis_id' => '61',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'certificado_id' => 1,
          'parametro_id' => 189, // Olor
          'resultado_valor' => null,
          'resultado_referencia' => 'Cumple',
          'metodo_de_analisis_id' => '61',
          'created_at' => now(),
          'updated_at' => now(),
        ],
      ]);
    }
}
