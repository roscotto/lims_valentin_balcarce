<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasDeParametrosSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias_de_parametros')->insert([
            ['categoria_de_parametro_id' => 1, 'categoria_de_parametro' => 'Concentración'],
            ['categoria_de_parametro_id' => 2, 'categoria_de_parametro' => 'Peso específico'],
            ['categoria_de_parametro_id' => 3, 'categoria_de_parametro' => 'Efluente'],
            ['categoria_de_parametro_id' => 4, 'categoria_de_parametro' => 'Hierro'],
            ['categoria_de_parametro_id' => 5, 'categoria_de_parametro' => 'Cloruro'],
            ['categoria_de_parametro_id' => 6, 'categoria_de_parametro' => 'Metales pesados'],
            ['categoria_de_parametro_id' => 7, 'categoria_de_parametro' => 'Sulfatos'],
            ['categoria_de_parametro_id' => 8, 'categoria_de_parametro' => 'Descomposición'],
            ['categoria_de_parametro_id' => 9, 'categoria_de_parametro' => 'Volúmen'],
            ['categoria_de_parametro_id' => 10, 'categoria_de_parametro' => 'Carbonato'],
            ['categoria_de_parametro_id' => 11, 'categoria_de_parametro' => 'Alcalinidad'],
            ['categoria_de_parametro_id' => 12, 'categoria_de_parametro' => 'Aspecto'],
            ['categoria_de_parametro_id' => 13, 'categoria_de_parametro' => 'Color'],
            ['categoria_de_parametro_id' => 14, 'categoria_de_parametro' => 'Olor'],
            ['categoria_de_parametro_id' => 15, 'categoria_de_parametro' => 'Nitrógeno'],
            ['categoria_de_parametro_id' => 16, 'categoria_de_parametro' => 'Sustancias Reductoras'],
            ['categoria_de_parametro_id' => 17, 'categoria_de_parametro' => 'Cloro Libre'],
            ['categoria_de_parametro_id' => 18, 'categoria_de_parametro' => 'Estabilidad'],
            ['categoria_de_parametro_id' => 19, 'categoria_de_parametro' => 'Conductividad'],
            ['categoria_de_parametro_id' => 20, 'categoria_de_parametro' => 'Silice'],
            ['categoria_de_parametro_id' => 21, 'categoria_de_parametro' => 'Óxido'],
            ['categoria_de_parametro_id' => 22, 'categoria_de_parametro' => 'Acidez'],
            ['categoria_de_parametro_id' => 23, 'categoria_de_parametro' => 'Mercurio'],
            ['categoria_de_parametro_id' => 24, 'categoria_de_parametro' => 'Residuos'],
            ['categoria_de_parametro_id' => 25, 'categoria_de_parametro' => 'Humedad'],
            ['categoria_de_parametro_id' => 26, 'categoria_de_parametro' => 'Granulometría'],
            ['categoria_de_parametro_id' => 27, 'categoria_de_parametro' => 'Materia Activa'],
            ['categoria_de_parametro_id' => 28, 'categoria_de_parametro' => 'PH'],
            ['categoria_de_parametro_id' => 29, 'categoria_de_parametro' => 'Cadmio'],
            ['categoria_de_parametro_id' => 30, 'categoria_de_parametro' => 'Pérdida de Calcinación'],
            ['categoria_de_parametro_id' => 31, 'categoria_de_parametro' => 'Arsénico'],
            ['categoria_de_parametro_id' => 32, 'categoria_de_parametro' => 'Conductividad Electrica'],
            ['categoria_de_parametro_id' => 33, 'categoria_de_parametro' => 'Solidos Sedimentables'],
            ['categoria_de_parametro_id' => 34, 'categoria_de_parametro' => 'Demanda Bioquímica de Oxígeno'],
            ['categoria_de_parametro_id' => 35, 'categoria_de_parametro' => 'Demanda Química de Oxígeno'],
            ['categoria_de_parametro_id' => 36, 'categoria_de_parametro' => 'Fósforo'],
            ['categoria_de_parametro_id' => 37, 'categoria_de_parametro' => 'Demanda Bioquimica de Oxígeno'],
            ['categoria_de_parametro_id' => 38, 'categoria_de_parametro' => 'Demanda Quimica de Oxígeno'],
            ['categoria_de_parametro_id' => 39, 'categoria_de_parametro' => 'Nitratos'],
            ['categoria_de_parametro_id' => 40, 'categoria_de_parametro' => 'Residuos Evaporación'],
            ['categoria_de_parametro_id' => 41, 'categoria_de_parametro' => 'Residuos Calcinación'],
            ['categoria_de_parametro_id' => 42, 'categoria_de_parametro' => 'Punto de Solidificación'],
            ['categoria_de_parametro_id' => 43, 'categoria_de_parametro' => 'Temperatura']
        ]);
    }
}
