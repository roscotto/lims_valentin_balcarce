<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasDeProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias_de_productos')->insert([
          ['categoria_de_producto_id' => 1, 'categoria_de_producto' => 'Ácido Sulfúrico'],
          ['categoria_de_producto_id' => 2, 'categoria_de_producto' => 'Ácido Clorídrico'],
          ['categoria_de_producto_id' => 3, 'categoria_de_producto' => 'Ácido Acético'],
          ['categoria_de_producto_id' => 4, 'categoria_de_producto' => 'Ácido Nítrico'],
          ['categoria_de_producto_id' => 5, 'categoria_de_producto' => 'Ácido Fosfórico'],
          ['categoria_de_producto_id' => 6, 'categoria_de_producto' => 'Agua Amoniacal'],
          ['categoria_de_producto_id' => 7, 'categoria_de_producto' => 'Agua Oxigenada'],
          ['categoria_de_producto_id' => 8, 'categoria_de_producto' => 'Agua Desmineralizada'],
          ['categoria_de_producto_id' => 9, 'categoria_de_producto' => 'Hipoclorito de Sodio'],
          ['categoria_de_producto_id' => 10, 'categoria_de_producto' => 'Hidróxido de Sodio'],
          ['categoria_de_producto_id' => 11, 'categoria_de_producto' => 'Hidróxido de Potasio'],
          ['categoria_de_producto_id' => 12, 'categoria_de_producto' => 'Cloruro Férrico'],
          ['categoria_de_producto_id' => 13, 'categoria_de_producto' => 'Efluentes Industriales'],
          ['categoria_de_producto_id' => 14, 'categoria_de_producto' => 'Otros'],


        ]);
    }
}
