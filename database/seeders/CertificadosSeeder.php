<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('certificados')->insert([
        'numero_de_cda' => '21.850',
        'numero_de_lote' => '4433/24',
        'fecha_de_emision' => Carbon::createFromFormat('d-m-Y', '30-04-2024')->format('Y-m-d'),
        'fecha_de_validez' => Carbon::createFromFormat('d-m-Y', '30-04-2026')->format('Y-m-d'),
        'producto_id' => 11, // Reemplazar con el ID correcto
        'proveedor_id' => 18, // Reemplazar con el ID correcto
        'tipo_de_evento_id' => 1, // Reemplazar con el ID correcto
        'numero_de_remito' => '0009-00045852',
        'numero_de_cda_proveedor' => '456.857',
        'estado' => 'Aprobado',
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    }
}
