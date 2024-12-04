<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('proveedores')->insert([
        ['proveedor_id' => 1, 'nombre' => 'ATANOR'],
        ['proveedor_id' => 2, 'nombre' => 'DALGAR'],
        ['proveedor_id' => 3, 'nombre' => 'DOW QUIMICA'],
        ['proveedor_id' => 4, 'nombre' => 'FABRICACIONES MILITARES RIO III'],
        ['proveedor_id' => 5, 'nombre' => 'FAISAN'],
        ['proveedor_id' => 6, 'nombre' => 'INDAQUIM'],
        ['proveedor_id' => 7, 'nombre' => 'INQUIMEX'],
        ['proveedor_id' => 8, 'nombre' => 'L.Q.S.'],
        ['proveedor_id' => 9, 'nombre' => 'MERANOL'],
        ['proveedor_id' => 10, 'nombre' => 'PETROQUIMICA RIO III'],
        ['proveedor_id' => 11, 'nombre' => 'PPE'],
        ['proveedor_id' => 12, 'nombre' => 'PROQUIMED'],
        ['proveedor_id' => 13, 'nombre' => 'RAME'],
        ['proveedor_id' => 14, 'nombre' => 'TRANSCLOR'],
        ['proveedor_id' => 15, 'nombre' => 'TRANSQUIM'],
        ['proveedor_id' => 16, 'nombre' => 'UNIPAR'],
        ['proveedor_id' => 17, 'nombre' => 'VALENTIN BALCARCE'],
    ]);
    }
}
