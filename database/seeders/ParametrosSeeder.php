<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParametrosSeeder extends Seeder
{
    public function run()
    {
        DB::table('parametros')->insert([
            [
                'parametro_id' => 1,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 33.5,
                'valor_max' => 34.5,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 2,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 38.5,
                'valor_max' => 39.5,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 3,
                'parametro' => 'Concentración (H2SO4), % p/v',
                'valor_min' => 28,
                'valor_max' => 29.9,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 4,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 77.5,
                'valor_max' => 78.5,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 5,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 50,
                'valor_max' => 51.5,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 6,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 39.5,
                'valor_max' => 40.5,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 7,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 27,
                'valor_max' => 29,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 8,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 42,
                'valor_max' => 43,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 9,
                'parametro' => 'Concentración (H2SO4), % p/v',
                'valor_min' => 29,
                'valor_max' => 30,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
                'parametro_id' => 10,
                'parametro' => 'Concentración (H2SO4), % p/p',
                'valor_min' => 15,
                'valor_max' => 17,
                'referencia' => null,
                'categoria_de_parametro_id' => 1,
            ],
            [
              'parametro_id' => 11,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 29.5,
              'valor_max' => 31,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 12,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 31,
              'valor_max' => 34,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 13,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 9,
              'valor_max' => 11,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 14,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 92,
              'valor_max' => 93,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 15,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 97.5,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 16,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 37,
              'valor_max' => 38,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 17,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 44,
              'valor_max' => 45.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 18,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 37.5,
              'valor_max' => 38.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 1,
          ],
          [
              'parametro_id' => 19,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 30.5,
              'valor_max' => 31.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 20,
              'parametro' => 'Concentración (H2SO4), % p/p',
              'valor_min' => 60,
              'valor_max' => 61,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 21,
              'parametro' => 'Concentración, % p/v',
              'valor_min' => 28,
              'valor_max' => 29.9,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 22,
              'parametro' => 'Concentración, % p/p',
              'valor_min' => 99.5,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 23,
              'parametro' => 'Concentración (NaOH), % p/p',
              'valor_min' => 31,
              'valor_max' => 33,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 24,
              'parametro' => 'Concentración (NaOH), % p/p',
              'valor_min' => 48.5,
              'valor_max' => 52.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 25,
              'parametro' => 'Concentración (NaOH), % p/p',
              'valor_min' => 39,
              'valor_max' => 41,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 26,
              'parametro' => 'Concentración (NaOH), % p/p',
              'valor_min' => 97.5,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 27,
              'parametro' => 'Concentración (NaOH), % p/v',
              'valor_min' => 28,
              'valor_max' => 29.9,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 28,
              'parametro' => 'Concentración (NaOH), % p/p',
              'valor_min' => 29,
              'valor_max' => 31,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 29,
              'parametro' => 'Concentración (HCl), % p/p',
              'valor_min' => 32,
              'valor_max' => 35,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 30,
              'parametro' => 'Concentración (HCl), % p/v',
              'valor_min' => 18.5,
              'valor_max' => 19.9,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 31,
              'parametro' => 'Concentración (HCl), % p/p',
              'valor_min' => 14.5,
              'valor_max' => 16,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 32,
              'parametro' => 'Concentración (H3PO4), % p/p',
              'valor_min' => 85,
              'valor_max' => 88,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 33,
              'parametro' => 'Concentración (P2O5), % p/p',
              'valor_min' => 61.6,
              'valor_max' => 64,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 34,
              'parametro' => 'Concentración (HNO3), % p/p',
              'valor_min' => 64,
              'valor_max' => 67,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 35,
              'parametro' => 'Concentración (HNO3), % p/p',
              'valor_min' => 48,
              'valor_max' => 51,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 36,
              'parametro' => 'Concentración (KOH), % p/v',
              'valor_min' => 28,
              'valor_max' => 29.8,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 37,
              'parametro' => 'Concentración (KOH), % p/p',
              'valor_min' => 45,
              'valor_max' => 47,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 38,
              'parametro' => 'Concentración (KOH), % p/p',
              'valor_min' => 49,
              'valor_max' => 51,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
            'parametro_id' => 39,
            'parametro' => 'Concentración (KOH), % p/p',
            'valor_min' => 89,
            'valor_max' => 92,
            'referencia' => null,
            'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 40,
              'parametro' => 'Concentración (NH3), % p/p',
              'valor_min' => 27.9,
              'valor_max' => 28.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 41,
              'parametro' => 'Concentración (NH3), % p/p',
              'valor_min' => 18,
              'valor_max' => 19.9,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 42,
              'parametro' => 'Concentración (H2O2), % p/v',
              'valor_min' => 29,
              'valor_max' => 32,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 43,
              'parametro' => 'Concentración (H2O2), % p/v',
              'valor_min' => 34,
              'valor_max' => 36,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 44,
              'parametro' => 'Concentración (H2O2), % p/v',
              'valor_min' => 50,
              'valor_max' => 53,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 45,
              'parametro' => 'Concentración (H2O2), % p/v',
              'valor_min' => 59.9,
              'valor_max' => 61,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 46,
              'parametro' => 'Concentración (H2O2), % p/p',
              'valor_min' => 74.4,
              'valor_max' => 76,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 47,
              'parametro' => 'Concentración (H2O2), % p/p',
              'valor_min' => 60.7,
              'valor_max' => 63,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 48,
              'parametro' => 'Concentración (H2O2), % p/p',
              'valor_min' => 40.8,
              'valor_max' => 42.1,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 49,
              'parametro' => 'Concentración (H2O2), % p/p',
              'valor_min' => 34.8,
              'valor_max' => 36.1,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 50,
              'parametro' => 'Concentración (FeSO4), % p/p BS',
              'valor_min' => 99,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 51,
              'parametro' => 'Concentración (FeCl3), % p/p',
              'valor_min' => 38.5,
              'valor_max' => 42,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 52,
              'parametro' => 'Concentración (Na2CO3), % p/p',
              'valor_min' => 99,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 53,
              'parametro' => 'Concentración (Na2CO3), % p/v',
              'valor_min' => 28.7,
              'valor_max' => 29.9,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 54,
              'parametro' => 'Concentración (KOH), g/lt',
              'valor_min' => 260,
              'valor_max' => 270,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 55,
              'parametro' => 'Concentración (KOH), g/lt',
              'valor_min' => 242,
              'valor_max' => 252,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 56,
              'parametro' => 'Concentración (Cu), % p/p',
              'valor_min' => 25,
              'valor_max' => 27,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 57,
              'parametro' => 'Concentración (Cl2 Activo), g/lt',
              'valor_min' => 98,
              'valor_max' => 105,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 58,
              'parametro' => 'Concentración (FeCl2), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 1
          ],
          [
              'parametro_id' => 59,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.245,
              'valor_max' => 1.255,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 60,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.285,
              'valor_max' => 1.295,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 61,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.495,
              'valor_max' => 1.51,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 62,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.175,
              'valor_max' => 1.189,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 63,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.225,
              'valor_max' => 1.235,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 64,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.83,
              'valor_max' => 1.85,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 65,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.28,
              'valor_max' => 1.295,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 66,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.69,
              'valor_max' => 1.71,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 67,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.82,
              'valor_max' => 1.83,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 68,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.275,
              'valor_max' => 1.29,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 69,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.39,
              'valor_max' => 1.41,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 70,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.29,
              'valor_max' => 1.31,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 71,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.2,
              'valor_max' => 1.22,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 72,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.335,
              'valor_max' => 1.35,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 73,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.195,
              'valor_max' => 1.21,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 74,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.215,
              'valor_max' => 1.23,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 75,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.102,
              'valor_max' => 1.117,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 76,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.32,
              'valor_max' => 1.34,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 77,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.059,
              'valor_max' => 1.075,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 78,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.23,
              'valor_max' => 1.25,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 79,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.02,
              'valor_max' => 1.03,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 80,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.04,
              'valor_max' => 1.055,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 81,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.33,
              'valor_max' => 1.36,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 82,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.495,
              'valor_max' => 1.53,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 83,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.396,
              'valor_max' => 1.42,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 84,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.23,
              'valor_max' => 1.257,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 85,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.318,
              'valor_max' => 1.34,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 86,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.159,
              'valor_max' => 1.182,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 87,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.078,
              'valor_max' => 1.085,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 88,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.07,
              'valor_max' => 1.08,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 89,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.685,
              'valor_max' => 1.705,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 90,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.381,
              'valor_max' => 1.41,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 91,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.31,
              'valor_max' => 1.34,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 92,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.214,
              'valor_max' => 1.252,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 93,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.44,
              'valor_max' => 1.46,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 94,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.5,
              'valor_max' => 1.52,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 95,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 0.89,
              'valor_max' => 0.898,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 96,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 0.921,
              'valor_max' => 0.928,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 97,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.09,
              'valor_max' => 1.11,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 98,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.125,
              'valor_max' => 1.14,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 99,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.195,
              'valor_max' => 1.205,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 100,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.243,
              'valor_max' => 1.254,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 101,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.429,
              'valor_max' => 1.483,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 102,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.235,
              'valor_max' => 1.245,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 103,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.205,
              'valor_max' => 1.215,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 104,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.19,
              'valor_max' => 1.195,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 105,
              'parametro' => 'Peso Específico a 20 ºC, g/ml',
              'valor_min' => 1.135,
              'valor_max' => 1.145,
              'referencia' => null,
              'categoria_de_parametro_id' => 2
          ],
          [
              'parametro_id' => 106,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 20,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 107,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 2,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 108,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 0.001,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 109,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 5,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 110,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 18,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 111,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 0.1,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 112,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 0.2,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 113,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 0,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 114,
              'parametro' => 'Hierro (Fe), ppm',
              'valor_min' => 0,
              'valor_max' => 1,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 115,
              'parametro' => 'Hierro (Fe), g/lt',
              'valor_min' => 0,
              'valor_max' => 0.002,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 116,
              'parametro' => 'Hierro (Fe), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.25,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 117,
              'parametro' => 'Hierro (Fe), mg/lt',
              'valor_min' => 0,
              'valor_max' => 1.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 4
          ],
          [
              'parametro_id' => 118,
              'parametro' => 'Cloruros (Cl), ppm',
              'valor_min' => 0,
              'valor_max' => 5,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 119,
              'parametro' => 'Cloruros (Cl), ppm',
              'valor_min' => 0,
              'valor_max' => 15,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 120,
              'parametro' => 'Cloruros (NaCl), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.2,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 121,
              'parametro' => 'Cloruros (NaCl), % p/p',
              'valor_min' => 0,
              'valor_max' => 1.2,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 122,
              'parametro' => 'Cloruros (Cl), ppm',
              'valor_min' => 0,
              'valor_max' => 10,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 123,
              'parametro' => 'Cloruros (Cl), ppm',
              'valor_min' => 0,
              'valor_max' => 20,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 124,
              'parametro' => 'Cloruros (KCl), ppm',
              'valor_min' => 0,
              'valor_max' => 25,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 125,
              'parametro' => 'Cloruros (KCl), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.006,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 126,
              'parametro' => 'Cloruros (Cl), ppm',
              'valor_min' => 0,
              'valor_max' => 3,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 127,
              'parametro' => 'Cloruro (NaCl), %p/p',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 128,
              'parametro' => 'Cloruros (Cl), g/lt',
              'valor_min' => 0,
              'valor_max' => 0.08,
              'referencia' => null,
              'categoria_de_parametro_id' => 5
          ],
          [
              'parametro_id' => 129,
              'parametro' => 'Metales Pesados (Pb), ppm',
              'valor_min' => 0,
              'valor_max' => 5,
              'referencia' => null,
              'categoria_de_parametro_id' => 6
          ],
          [
              'parametro_id' => 130,
              'parametro' => 'Metales Pesados (Pb), ppm',
              'valor_min' => 0,
              'valor_max' => 10,
              'referencia' => null,
              'categoria_de_parametro_id' => 6
          ],
          [
              'parametro_id' => 131,
              'parametro' => 'Metales Pesados (Pb), ppm',
              'valor_min' => 0,
              'valor_max' => 2,
              'referencia' => null,
              'categoria_de_parametro_id' => 6
          ],
          [
              'parametro_id' => 132,
              'parametro' => 'Metales Pesados (Pb), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.02,
              'referencia' => null,
              'categoria_de_parametro_id' => 6
          ],
          [
              'parametro_id' => 133,
              'parametro' => 'Metales Pesados (Pb), ppm',
              'valor_min' => 0,
              'valor_max' => 125,
              'referencia' => null,
              'categoria_de_parametro_id' => 6
          ],
          [
              'parametro_id' => 134,
              'parametro' => 'Sulfatos (SO4), ppm',
              'valor_min' => 0,
              'valor_max' => 15,
              'referencia' => null,
              'categoria_de_parametro_id' => 7
          ],
          [
              'parametro_id' => 135,
              'parametro' => 'Sulfatos (Na2-2SO4), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.0002,
              'referencia' => null,
              'categoria_de_parametro_id' => 7
          ],
          [
              'parametro_id' => 136,
              'parametro' => 'Sulfatos (SO4), ppm',
              'valor_min' => 0,
              'valor_max' => 200,
              'referencia' => null,
              'categoria_de_parametro_id' => 7
          ],
          [
              'parametro_id' => 137,
              'parametro' => 'Sulfato (Na2SO4), %p/p',
              'valor_min' => 0,
              'valor_max' => 0.05,
              'referencia' => null,
              'categoria_de_parametro_id' => 7
          ],
          [
              'parametro_id' => 138,
              'parametro' => 'Descomposicion (Ebullisión 1h), % v/v',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 8
          ],
          [
              'parametro_id' => 139,
              'parametro' => 'Descomposicion (Ebullisión 1h), % v/v',
              'valor_min' => 0,
              'valor_max' => 1,
              'referencia' => null,
              'categoria_de_parametro_id' => 8
          ],
          [
              'parametro_id' => 140,
              'parametro' => 'Descomposicion (Ebullisión 1h), % v/v',
              'valor_min' => 0,
              'valor_max' => 1.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 8
          ],
          [
              'parametro_id' => 141,
              'parametro' => 'Descomposicion (Ebullisión 1h), % v/v',
              'valor_min' => 0,
              'valor_max' => 2.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 8
          ],
          [
              'parametro_id' => 142,
              'parametro' => 'Volúmenes de Oxígeno, vol',
              'valor_min' => 0,
              'valor_max' => 95,
              'referencia' => null,
              'categoria_de_parametro_id' => 9
          ],
          [
              'parametro_id' => 143,
              'parametro' => 'Volúmenes de Oxígeno, vol',
              'valor_min' => 0,
              'valor_max' => 125,
              'referencia' => null,
              'categoria_de_parametro_id' => 9
          ],
          [
              'parametro_id' => 144,
              'parametro' => 'Volúmenes de Oxígeno, vol',
              'valor_min' => 0,
              'valor_max' => 195,
              'referencia' => null,
              'categoria_de_parametro_id' => 9
          ],
          [
              'parametro_id' => 145,
              'parametro' => 'Volúmenes de Oxígeno, vol',
              'valor_min' => 0,
              'valor_max' => 245,
              'referencia' => null,
              'categoria_de_parametro_id' => 9
          ],
          [
              'parametro_id' => 146,
              'parametro' => 'Carbonatos (Na2CO3), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 10
          ],
          [
              'parametro_id' => 147,
              'parametro' => 'Carbonatos (K2CO3), ppm',
              'valor_min' => 0,
              'valor_max' => 1000,
              'referencia' => null,
              'categoria_de_parametro_id' => 10
          ],
          [
              'parametro_id' => 148,
              'parametro' => 'Carbonatos (K2CO3), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.2,
              'referencia' => null,
              'categoria_de_parametro_id' => 10
          ],
          [
              'parametro_id' => 149,
              'parametro' => 'Carbonatos (K2CO3), g/lt',
              'valor_min' => 3,
              'valor_max' => 4,
              'referencia' => null,
              'categoria_de_parametro_id' => 10
          ],
          [
              'parametro_id' => 150,
              'parametro' => 'Carbonatos (Na2CO3), % p/p',
              'valor_min' => 0,
              'valor_max' => 1,
              'referencia' => null,
              'categoria_de_parametro_id' => 10
          ],
          [
              'parametro_id' => 151,
              'parametro' => 'Alcalinidad Total (Na2O), % p/p',
              'valor_min' => 75.5,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 11
          ],
          [
              'parametro_id' => 152,
              'parametro' => 'Alcalinidad (NaOH), % p/p',
              'valor_min' => 0,
              'valor_max' => 2000,
              'referencia' => null,
              'categoria_de_parametro_id' => 11
          ],
          [
              'parametro_id' => 153,
              'parametro' => 'Alcalinidad (NaOH), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.2,
              'referencia' => null,
              'categoria_de_parametro_id' => 11
          ],
          [
              'parametro_id' => 154,
              'parametro' => 'Alcalinidad (NaOH), g/lt',
              'valor_min' => 2,
              'valor_max' => 5,
              'referencia' => null,
              'categoria_de_parametro_id' => 11
          ],
          [
              'parametro_id' => 155,
              'parametro' => 'Alcalinidad Total (Na2CO3), g/lt',
              'valor_min' => 4.5,
              'valor_max' => 6.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 11
          ],
          [
              'parametro_id' => 156,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Líquido Límpido',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 157,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Fumante',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 158,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Gránulo Variable',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 159,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Polvo',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 160,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Libre de Partículas',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 161,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Escamas',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 162,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Perlas',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 163,
              'parametro' => 'Aspecto',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Piedras',
              'categoria_de_parametro_id' => 12
          ],
          [
              'parametro_id' => 164,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Traslúcido - Opalescente',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 165,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Traslúcido - Leve Amarillento',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 166,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Traslúcido',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 167,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Celeste - Verde Claro',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 168,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Oscuro Anaranjado',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 169,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Amarillento',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 170,
              'parametro' => 'Olor',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Característico',
              'categoria_de_parametro_id' => 14
          ],
          [
              'parametro_id' => 171,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Blanco',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 172,
              'parametro' => 'Color',
              'valor_min' => null,
              'valor_max' => null,
              'referencia' => 'Celeste',
              'categoria_de_parametro_id' => 13
          ],
          [
              'parametro_id' => 173,
              'parametro' => 'Conductividad Electrica, uS/cm',
              'valor_min' => 1,
              'valor_max' => 2000,
              'referencia' => null,
              'categoria_de_parametro_id' => 32
          ],
          [
              'parametro_id' => 174,
              'parametro' => 'Ph, UpH',
              'valor_min' => 6.5,
              'valor_max' => 10,
              'referencia' => null,
              'categoria_de_parametro_id' => 28
          ],
          [
              'parametro_id' => 175,
              'parametro' => 'Cloro Libre, mg/l',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 17
          ],
          [
              'parametro_id' => 176,
              'parametro' => 'Solidos Sedimentables en 10 mm, ml/l',
              'valor_min' => 0,
              'valor_max' => 0,
              'referencia' => null,
              'categoria_de_parametro_id' => 33
          ],
          [
              'parametro_id' => 177,
              'parametro' => 'Solidos Sedimentables en 2 hs, ml/l',
              'valor_min' => 0,
              'valor_max' => 1,
              'referencia' => null,
              'categoria_de_parametro_id' => 33
          ],
          [
              'parametro_id' => 178,
              'parametro' => 'Demanda Bioquimica de Oxigeno, mg/l',
              'valor_min' => 0,
              'valor_max' => 50,
              'referencia' => null,
              'categoria_de_parametro_id' => 34
          ],
          [
              'parametro_id' => 179,
              'parametro' => 'Demanda Quimica de Oxigendo, mg/l',
              'valor_min' => 0,
              'valor_max' => 250,
              'referencia' => null,
              'categoria_de_parametro_id' => 35
          ],
          [
              'parametro_id' => 180,
              'parametro' => 'Fosforo Total, mg/l',
              'valor_min' => 0,
              'valor_max' => 1,
              'referencia' => null,
              'categoria_de_parametro_id' => 36
          ],
          [
              'parametro_id' => 181,
              'parametro' => 'Nitratos, mg/l',
              'valor_min' => 0,
              'valor_max' => 2000,
              'referencia' => null,
              'categoria_de_parametro_id' => 39
          ],
          [
              'parametro_id' => 182,
              'parametro' => 'Sulfatos, mg/l',
              'valor_min' => 0,
              'valor_max' => 5000,
              'referencia' => null,
              'categoria_de_parametro_id' => 7
          ],
          [
              'parametro_id' => 183,
              'parametro' => 'Nitrogeno Amoniacal, mg/l',
              'valor_min' => 0,
              'valor_max' => 25,
              'referencia' => null,
              'categoria_de_parametro_id' => 15
          ],
          [
              'parametro_id' => 184,
              'parametro' => 'Nitrogeno Total (NTK), mg/l',
              'valor_min' => 0,
              'valor_max' => 35,
              'referencia' => null,
              'categoria_de_parametro_id' => 15
          ],
          [
              'parametro_id' => 185,
              'parametro' => 'Nitrógeno Total (N), ppm',
              'valor_min' => 0,
              'valor_max' => 5,
              'referencia' => null,
              'categoria_de_parametro_id' => 15
          ],
          [
              'parametro_id' => 186,
              'parametro' => 'Sustancias Reductoras, % p/p',
              'valor_min' => 0,
              'valor_max' => 0.05,
              'referencia' => null,
              'categoria_de_parametro_id' => 16
          ],
          [
              'parametro_id' => 187,
              'parametro' => 'Cloro Libre (Cl2), ppm',
              'valor_min' => 0,
              'valor_max' => 25,
              'referencia' => null,
              'categoria_de_parametro_id' => 17
          ],
          [
              'parametro_id' => 188,
              'parametro' => 'Estabilidad (Cl2 Activo), -g/día',
              'valor_min' => 0,
              'valor_max' => 4,
              'referencia' => null,
              'categoria_de_parametro_id' => 18
          ],
          [
              'parametro_id' => 189,
              'parametro' => 'Conductividad, uS/cm',
              'valor_min' => 0,
              'valor_max' => 20,
              'referencia' => null,
              'categoria_de_parametro_id' => 19
          ],
          [
              'parametro_id' => 190,
              'parametro' => 'Silice, ppm',
              'valor_min' => 0,
              'valor_max' => 0.01,
              'referencia' => null,
              'categoria_de_parametro_id' => 20
          ],
          [
              'parametro_id' => 191,
              'parametro' => 'Oxido de Aluminio (Al2O3), % p/p',
              'valor_min' => 17,
              'valor_max' => 25,
              'referencia' => null,
              'categoria_de_parametro_id' => 21
          ],
          [
              'parametro_id' => 192,
              'parametro' => 'Oxido Ferroso (FeO), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.015,
              'referencia' => null,
              'categoria_de_parametro_id' => 21
          ],
          [
              'parametro_id' => 193,
              'parametro' => 'Oxido ferrico (Fe2O3), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.05,
              'referencia' => null,
              'categoria_de_parametro_id' => 21
          ],
          [
              'parametro_id' => 194,
              'parametro' => 'Oxido Férrico (Fe2O3), %p/p',
              'valor_min' => 0,
              'valor_max' => 0.005,
              'referencia' => null,
              'categoria_de_parametro_id' => 21
          ],
          [
              'parametro_id' => 195,
              'parametro' => 'Acidez Libre (H2SO4), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.1,
              'referencia' => null,
              'categoria_de_parametro_id' => 22
          ],
          [
              'parametro_id' => 196,
              'parametro' => 'Acidez Libre (HCl), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 22
          ],
          [
              'parametro_id' => 197,
              'parametro' => 'Mercurio (Hg), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.03,
              'referencia' => null,
              'categoria_de_parametro_id' => 23
          ],
          [
              'parametro_id' => 198,
              'parametro' => 'Residuos Insoluble es H2O, % p/p',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 24
          ],
          [
              'parametro_id' => 199,
              'parametro' => 'Residuos Insoluble es H2O, % p/p',
              'valor_min' => 0,
              'valor_max' => 0.05,
              'referencia' => null,
              'categoria_de_parametro_id' => 24
          ],
          [
              'parametro_id' => 200,
              'parametro' => 'Residuos por Evaporación, ppm',
              'valor_min' => 0,
              'valor_max' => 10,
              'referencia' => null,
              'categoria_de_parametro_id' => 24
          ],
          [
              'parametro_id' => 201,
              'parametro' => 'Residuos por Calcinación, ppm',
              'valor_min' => 0,
              'valor_max' => 50,
              'referencia' => null,
              'categoria_de_parametro_id' => 24
          ],
          [
              'parametro_id' => 202,
              'parametro' => 'Humedad, % p/p',
              'valor_min' => 19.2,
              'valor_max' => 25,
              'referencia' => null,
              'categoria_de_parametro_id' => 25
          ],
          [
              'parametro_id' => 203,
              'parametro' => 'Humedad, % p/p',
              'valor_min' => 0,
              'valor_max' => 2,
              'referencia' => null,
              'categoria_de_parametro_id' => 25
          ],
          [
              'parametro_id' => 204,
              'parametro' => 'Granulometría (M 3/4), % p/p',
              'valor_min' => 99,
              'valor_max' => 99.99,
              'referencia' => null,
              'categoria_de_parametro_id' => 26
          ],
          [
              'parametro_id' => 205,
              'parametro' => 'Granulometría, Mn',
              'valor_min' => 0.3,
              'valor_max' => 0.8,
              'referencia' => null,
              'categoria_de_parametro_id' => 26
          ],
          [
              'parametro_id' => 206,
              'parametro' => 'Materia Activa (Hidróxido de Litio), g/lt',
              'valor_min' => 19,
              'valor_max' => 21,
              'referencia' => null,
              'categoria_de_parametro_id' => 27
          ],
          [
              'parametro_id' => 207,
              'parametro' => 'Materia Activa (Hidróxido de Litio), g/lt',
              'valor_min' => 4,
              'valor_max' => 6,
              'referencia' => null,
              'categoria_de_parametro_id' => 27
          ],
          [
              'parametro_id' => 208,
              'parametro' => 'PH (Sol. 10%), UpH',
              'valor_min' => 3,
              'valor_max' => 3.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 28
          ],
          [
              'parametro_id' => 209,
              'parametro' => 'Cadmio (Cd), ppm',
              'valor_min' => 0,
              'valor_max' => 10,
              'referencia' => null,
              'categoria_de_parametro_id' => 29
          ],
          [
              'parametro_id' => 210,
              'parametro' => 'Pérdida por Calcinación, %p/p',
              'valor_min' => 0,
              'valor_max' => 0.5,
              'referencia' => null,
              'categoria_de_parametro_id' => 30
          ],
          [
              'parametro_id' => 211,
              'parametro' => 'Arsénico (As), ppm',
              'valor_min' => 0,
              'valor_max' => 2,
              'referencia' => null,
              'categoria_de_parametro_id' => 31
          ],
          [
              'parametro_id' => 212,
              'parametro' => 'Arsenico (As), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.05,
              'referencia' => null,
              'categoria_de_parametro_id' => 31
          ],
          [
              'parametro_id' => 213,
              'parametro' => 'Arsenico (As), % p/p',
              'valor_min' => 0,
              'valor_max' => 0.0003,
              'referencia' => null,
              'categoria_de_parametro_id' => 31
          ]
        ]);
    }
}
