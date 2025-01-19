<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("productos")->insert(
          [
              [
                  'producto_id' => 1,
                  'nombre' => 'ACIDO ACETICO 20%',
                  'categoria_de_producto_id' => 3
              ],
              [
                  'producto_id' => 2,
                  'nombre' => 'ACIDO ACETICO 29% P/V',
                  'categoria_de_producto_id' => 3
              ],
              [
                  'producto_id' => 3,
                  'nombre' => 'ACIDO ACETICO GLACIAL',
                  'categoria_de_producto_id' => 3
              ],
              [
                  'producto_id' => 4,
                  'nombre' => 'ACIDO CLORHIDRICO 15%',
                  'categoria_de_producto_id' => 2
              ],
              [
                  'producto_id' => 5,
                  'nombre' => 'ACIDO CLORHIDRICO 19% P/V',
                  'categoria_de_producto_id' => 2
              ],
              [
                  'producto_id' => 6,
                  'nombre' => 'ACIDO CLORHIDRICO TEC. PURO',
                  'categoria_de_producto_id' => 2
              ],
              [
                  'producto_id' => 7,
                  'nombre' => 'ACIDO FOSFORICO 85%',
                  'categoria_de_producto_id' => 5
              ],
              [
                  'producto_id' => 8,
                  'nombre' => 'ACIDO NITRICO 50%',
                  'categoria_de_producto_id' => 4
              ],
              [
                  'producto_id' => 9,
                  'nombre' => 'ACIDO NITRICO 65%',
                  'categoria_de_producto_id' => 4
              ],
              [
                  'producto_id' => 10,
                  'nombre' => 'ACIDO SULFURICO 10%',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 11,
                  'nombre' => 'ACIDO SULFURICO 1200',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 12,
                  'nombre' => 'ACIDO SULFURICO 1205',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 13,
                  'nombre' => 'ACIDO SULFURICO 1210',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 14,
                  'nombre' => 'ACIDO SULFURICO 1220',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 15,
                  'nombre' => 'ACIDO SULFURICO 1230',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 16,
                  'nombre' => 'ACIDO SULFURICO 1245',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 17,
                  'nombre' => 'ACIDO SULFURICO 1250',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 18,
                  'nombre' => 'ACIDO SULFURICO 1280',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 19,
                  'nombre' => 'ACIDO SULFURICO 1285',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 20,
                  'nombre' => 'ACIDO SULFURICO 1290',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 21,
                  'nombre' => 'ACIDO SULFURICO 1300',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 22,
                  'nombre' => 'ACIDO SULFURICO 1320',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 23,
                  'nombre' => 'ACIDO SULFURICO 1340',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 24,
                  'nombre' => 'ACIDO SULFURICO 1400',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 25,
                  'nombre' => 'ACIDO SULFURICO 1500',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 26,
                  'nombre' => 'ACIDO SULFURICO 16%',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 27,
                  'nombre' => 'ACIDO SULFURICO 1700',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 28,
                  'nombre' => 'ACIDO SULFURICO 1840',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 29,
                  'nombre' => 'ACIDO SULFURICO 29% P/V',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 30,
                  'nombre' => 'ACIDO SULFURICO 94%',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 31,
                  'nombre' => 'ACIDO SULFURICO 98%',
                  'categoria_de_producto_id' => 1
              ],
              [
                  'producto_id' => 32,
                  'nombre' => 'AGUA AMONIACAL 19% P/V',
                  'categoria_de_producto_id' => 6
              ],
              [
                  'producto_id' => 33,
                  'nombre' => 'AGUA AMONIACAL 28%',
                  'categoria_de_producto_id' => 6
              ],
              [
                  'producto_id' => 34,
                  'nombre' => 'AGUA DESMINERALIZADA',
                  'categoria_de_producto_id' => 8
              ],
              [
                  'producto_id' => 35,
                  'nombre' => 'AGUA OXIGENADA 100 VOLUMENES',
                  'categoria_de_producto_id' => 7
              ],
              [
                  'producto_id' => 36,
                  'nombre' => 'AGUA OXIGENADA 130 VOLUMENES',
                  'categoria_de_producto_id' => 7
              ],
              [
                  'producto_id' => 37,
                  'nombre' => 'AGUA OXIGENADA 200 VOLUMENES',
                  'categoria_de_producto_id' => 7
              ],
              [
                  'producto_id' => 38,
                  'nombre' => 'AGUA OXIGENADA 250 VOLUMENES',
                  'categoria_de_producto_id' => 7
              ],
              [
                  'producto_id' => 39,
                  'nombre' => 'CLORURO FERRICO',
                  'categoria_de_producto_id' => 12
              ],
              [
                  'producto_id' => 40,
                  'nombre' => 'EFLUENTES INDUSTRIALES',
                  'categoria_de_producto_id' => 13
              ],
              [
                  'producto_id' => 41,
                  'nombre' => 'ELECTROLITO ALCALINO B-20',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 42,
                  'nombre' => 'ELECTROLITO ALCALINO B-5',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 43,
                  'nombre' => 'HIPOCLORITO DE SODIO',
                  'categoria_de_producto_id' => 9
              ],
              [
                  'producto_id' => 44,
                  'nombre' => 'POTASA CAUSTICA ESCAMA',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 45,
                  'nombre' => 'POTASA CAUSTICA LIQUIDA 29% P/V',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 46,
                  'nombre' => 'POTASA CAUSTICA LIQUIDA 46%',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 47,
                  'nombre' => 'POTASA CAUSTICA LIQUIDA 50%',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 48,
                  'nombre' => 'SODA CAUSTICA LIQUIDA 29% P/V',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 49,
                  'nombre' => 'SODA CAUSTICA LIQUIDA 30%',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 50,
                  'nombre' => 'SODA CAUSTICA LIQUIDA 32%',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 51,
                  'nombre' => 'SODA CAUSTICA LIQUIDA 40%',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 52,
                  'nombre' => 'SODA CAUSTICA LIQUIDA 50%',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 53,
                  'nombre' => 'SODA CAUSTICA PERLA',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 54,
                  'nombre' => 'SODA SOLVAY 29% P/V',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 55,
                  'nombre' => 'SODA SOLVAY LIVIANA',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 56,
                  'nombre' => 'SULFATO DE ALUMINIO',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 57,
                  'nombre' => 'SULFATO DE COBRE PENTAHIDRATADO',
                  'categoria_de_producto_id' => 14
              ],
              [
                  'producto_id' => 58,
                  'nombre' => 'SULFATO FERROSO HERPTAHIDRATADO',
                  'categoria_de_producto_id' => 14
              ]
          ]
      );

      // Seeder de la relación muchos a muchos entre la tabla de productos con la tabla proveedores
      DB::table('proveedores_x_producto')->insert([
          ['producto_id' => 1, 'proveedor_id' => 18],
          ['producto_id' => 2, 'proveedor_id' => 18],
          ['producto_id' => 3, 'proveedor_id' => 1],
          ['producto_id' => 4, 'proveedor_id' => 18],
          ['producto_id' => 5, 'proveedor_id' => 18],
          ['producto_id' => 6, 'proveedor_id' => 10],
          ['producto_id' => 6, 'proveedor_id' => 15],
          ['producto_id' => 6, 'proveedor_id' => 17],
          ['producto_id' => 7, 'proveedor_id' => 7],
          ['producto_id' => 7, 'proveedor_id' => 8],
          ['producto_id' => 7, 'proveedor_id' => 13],
          ['producto_id' => 8, 'proveedor_id' => 4],
          ['producto_id' => 9, 'proveedor_id' => 4],
          ['producto_id' => 10, 'proveedor_id' => 18],
          ['producto_id' => 11, 'proveedor_id' => 18],
          ['producto_id' => 12, 'proveedor_id' => 18],
          ['producto_id' => 13, 'proveedor_id' => 18],
          ['producto_id' => 14, 'proveedor_id' => 18],
          ['producto_id' => 15, 'proveedor_id' => 18],
          ['producto_id' => 16, 'proveedor_id' => 18],
          ['producto_id' => 17, 'proveedor_id' => 18],
          ['producto_id' => 18, 'proveedor_id' => 18],
          ['producto_id' => 19, 'proveedor_id' => 18],
          ['producto_id' => 20, 'proveedor_id' => 18],
          ['producto_id' => 21, 'proveedor_id' => 18],
          ['producto_id' => 22, 'proveedor_id' => 18],
          ['producto_id' => 23, 'proveedor_id' => 18],
          ['producto_id' => 24, 'proveedor_id' => 18],
          ['producto_id' => 25, 'proveedor_id' => 18],
          ['producto_id' => 26, 'proveedor_id' => 18],
          ['producto_id' => 27, 'proveedor_id' => 18],
          ['producto_id' => 28, 'proveedor_id' => 18],
          ['producto_id' => 29, 'proveedor_id' => 18],
          ['producto_id' => 30, 'proveedor_id' => 18],
          ['producto_id' => 31, 'proveedor_id' => 4],
          ['producto_id' => 31, 'proveedor_id' => 5],
          ['producto_id' => 31, 'proveedor_id' => 7],
          ['producto_id' => 31, 'proveedor_id' => 9],
          ['producto_id' => 31, 'proveedor_id' => 12],
          ['producto_id' => 32, 'proveedor_id' => 7],
          ['producto_id' => 33, 'proveedor_id' => 7],
          ['producto_id' => 34, 'proveedor_id' => 14],
          ['producto_id' => 34, 'proveedor_id' => 18],
          ['producto_id' => 35, 'proveedor_id' => 18],
          ['producto_id' => 36, 'proveedor_id' => 18],
          ['producto_id' => 37, 'proveedor_id' => 18],
          ['producto_id' => 38, 'proveedor_id' => 1],
          ['producto_id' => 38, 'proveedor_id' => 2],
          ['producto_id' => 39, 'proveedor_id' => 11],
          ['producto_id' => 40, 'proveedor_id' => 18],
          ['producto_id' => 41, 'proveedor_id' => 18],
          ['producto_id' => 42, 'proveedor_id' => 18],
          ['producto_id' => 43, 'proveedor_id' => 15],
          ['producto_id' => 43, 'proveedor_id' => 16],
          ['producto_id' => 44, 'proveedor_id' => 3],
          ['producto_id' => 44, 'proveedor_id' => 6],
          ['producto_id' => 44, 'proveedor_id' => 7],
          ['producto_id' => 44, 'proveedor_id' => 13],
          ['producto_id' => 45, 'proveedor_id' => 18],
          ['producto_id' => 46, 'proveedor_id' => 18],
          ['producto_id' => 47, 'proveedor_id' => 8],
          ['producto_id' => 47, 'proveedor_id' => 13],
          ['producto_id' => 47, 'proveedor_id' => 18],
          ['producto_id' => 48, 'proveedor_id' => 18],
          ['producto_id' => 49, 'proveedor_id' => 18],
          ['producto_id' => 50, 'proveedor_id' => 18],
          ['producto_id' => 51, 'proveedor_id' => 18],
          ['producto_id' => 52, 'proveedor_id' => 10],
          ['producto_id' => 52, 'proveedor_id' => 15],
          ['producto_id' => 52, 'proveedor_id' => 17],
          ['producto_id' => 53, 'proveedor_id' => 6],
          ['producto_id' => 53, 'proveedor_id' => 7],
          ['producto_id' => 53, 'proveedor_id' => 13],
          ['producto_id' => 53, 'proveedor_id' => 17],
          ['producto_id' => 54, 'proveedor_id' => 18],
          ['producto_id' => 55, 'proveedor_id' => 6],
          ['producto_id' => 55, 'proveedor_id' => 13],
          ['producto_id' => 56, 'proveedor_id' => 13],
          ['producto_id' => 57, 'proveedor_id' => 13],
          ['producto_id' => 58, 'proveedor_id' => 13],

      ]);


    }
}
