<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposDeEventosSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipos_de_eventos')->insert([
            ['tipo_de_evento_id' => 1, 'tipo_de_evento' => 'MATERIA PRIMA'],
            ['tipo_de_evento_id' => 2, 'tipo_de_evento' => 'PRODUCTO INTERMEDIO'],
            ['tipo_de_evento_id' => 3, 'tipo_de_evento' => 'PRODUCTO TERMINADO'],
            ['tipo_de_evento_id' => 4, 'tipo_de_evento' => 'EFLUENTES INDUSTRIALES'],
        ]);
    }
}
