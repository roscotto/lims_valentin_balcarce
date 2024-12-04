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
                'nombre' => 'ACIDO ACETICO 20%'
            ],
            [
                'producto_id' => 2,
                'nombre' => 'ACIDO ACETICO 29% P/V'
            ],
            [
                'producto_id' => 3,
                'nombre' => 'ACIDO ACETICO GLACIAL'
            ],
            [
                'producto_id' => 4,
                'nombre' => 'ACIDO CLORHIDRICO 15%'
            ],
            [
                'producto_id' => 5,
                'nombre' => 'ACIDO CLORHIDRICO 19% P/V'
            ],
            [
                'producto_id' => 6,
                'nombre' => 'ACIDO CLORHIDRICO TEC. PURO'
            ],
            [
                'producto_id' => 7,
                'nombre' => 'ACIDO FOSFORICO 85%'
            ],
            [
                'producto_id' => 8,
                'nombre' => 'ACIDO NITRICO 50%'
            ],
            [
                'producto_id' => 9,
                'nombre' => 'ACIDO NITRICO 65%'
            ],
            [
                'producto_id' => 10,
                'nombre' => 'ACIDO SULFURICO 10%'
            ],
            [
                'producto_id' => 11,
                'nombre' => 'ACIDO SULFURICO 1200'
            ],
            [
                'producto_id' => 12,
                'nombre' => 'ACIDO SULFURICO 1205'
            ],
            [
                'producto_id' => 13,
                'nombre' => 'ACIDO SULFURICO 1210'
            ],
            [
                'producto_id' => 14,
                'nombre' => 'ACIDO SULFURICO 1220'
            ],
            [
                'producto_id' => 15,
                'nombre' => 'ACIDO SULFURICO 1230'
            ],
            [
                'producto_id' => 16,
                'nombre' => 'ACIDO SULFURICO 1245'
            ],
            [
                'producto_id' => 17,
                'nombre' => 'ACIDO SULFURICO 1250'
            ],
            [
                'producto_id' => 18,
                'nombre' => 'ACIDO SULFURICO 1280'
            ],
            [
                'producto_id' => 19,
                'nombre' => 'ACIDO SULFURICO 1285'
            ],
            [
                'producto_id' => 20,
                'nombre' => 'ACIDO SULFURICO 1290'
            ],
            [
                'producto_id' => 21,
                'nombre' => 'ACIDO SULFURICO 1300'
            ],
            [
                'producto_id' => 22,
                'nombre' => 'ACIDO SULFURICO 1320'
            ],
            [
                'producto_id' => 23,
                'nombre' => 'ACIDO SULFURICO 1340'
            ],
            [
                'producto_id' => 24,
                'nombre' => 'ACIDO SULFURICO 1400'
            ],
            [
                'producto_id' => 25,
                'nombre' => 'ACIDO SULFURICO 1500'
            ],
            [
                'producto_id' => 26,
                'nombre' => 'ACIDO SULFURICO 16%'
            ],
            [
                'producto_id' => 27,
                'nombre' => 'ACIDO SULFURICO 1700'
            ],
            [
                'producto_id' => 28,
                'nombre' => 'ACIDO SULFURICO 1840'
            ],
            [
                'producto_id' => 29,
                'nombre' => 'ACIDO SULFURICO 29% P/V'
            ],
            [
                'producto_id' => 30,
                'nombre' => 'ACIDO SULFURICO 94%'
            ],
            [
                'producto_id' => 31,
                'nombre' => 'ACIDO SULFURICO 98%'
            ],
            [
                'producto_id' => 32,
                'nombre' => 'AGUA AMONIACAL 19% P/V'
            ],
            [
                'producto_id' => 33,
                'nombre' => 'AGUA AMONIACAL 28%'
            ],
            [
                'producto_id' => 34,
                'nombre' => 'AGUA DESMINERALIZADA'
            ],
            [
                'producto_id' => 35,
                'nombre' => 'AGUA OXIGENADA 100 VOLUMENES'
            ],
            [
                'producto_id' => 36,
                'nombre' => 'AGUA OXIGENADA 130 VOLUMENES'
            ],
            [
                'producto_id' => 37,
                'nombre' => 'AGUA OXIGENADA 200 VOLUMENES'
            ],
            [
                'producto_id' => 38,
                'nombre' => 'AGUA OXIGENADA 250 VOLUMENES'
            ],
            [
                'producto_id' => 39,
                'nombre' => 'CLORURO FERRICO'
            ],
            [
                'producto_id' => 40,
                'nombre' => 'EFLUENTES INDUSTRIALES'
            ],
            [
                'producto_id' => 41,
                'nombre' => 'ELECTROLITO ALCALINO B-20'
            ],
            [
                'producto_id' => 42,
                'nombre' => 'ELECTROLITO ALCALINO B-5'
            ],
            [
                'producto_id' => 43,
                'nombre' => 'HIPOCLORITO DE SODIO'
            ],
            [
                'producto_id' => 44,
                'nombre' => 'POTASA CAUSTICA ESCAMA'
            ],
            [
                'producto_id' => 45,
                'nombre' => 'POTASA CAUSTICA LIQUIDA 29% P/V'
            ],
            [
                'producto_id' => 46,
                'nombre' => 'POTASA CAUSTICA LIQUIDA 46%'
            ],
            [
                'producto_id' => 47,
                'nombre' => 'POTASA CAUSTICA LIQUIDA 50%'
            ],
            [
                'producto_id' => 48,
                'nombre' => 'SODA CAUSTICA LIQUIDA 29% P/V'
            ],
            [
                'producto_id' => 49,
                'nombre' => 'SODA CAUSTICA LIQUIDA 30%'
            ],
            [
                'producto_id' => 50,
                'nombre' => 'SODA CAUSTICA LIQUIDA 32%'
            ],
            [
                'producto_id' => 51,
                'nombre' => 'SODA CAUSTICA LIQUIDA 40%'
            ],
            [
                'producto_id' => 52,
                'nombre' => 'SODA CAUSTICA LIQUIDA 50%'
            ],
            [
                'producto_id' => 53,
                'nombre' => 'SODA CAUSTICA PERLA'
            ],
            [
                'producto_id' => 54,
                'nombre' => 'SODA SOLVAY 29% P/V'
            ],
            [
                'producto_id' => 55,
                'nombre' => 'SODA SOLVAY LIVIANA'
            ],
            [
                'producto_id' => 56,
                'nombre' => 'SULFATO DE ALUMINIO'
            ],
            [
                'producto_id' => 57,
                'nombre' => 'SULFATO DE COBRE PENTAHIDRATADO'
            ],
            [
                'producto_id' => 58,
                'nombre' => 'SULFATO FERROSO HERPTAHIDRATADO'
            ]
        ]
    );

    }
}
