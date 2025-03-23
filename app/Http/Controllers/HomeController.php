<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    /**
     *  Retorna la vista de sandbox
     *  @return \Illuminate\View\View
     */
    public function sandbox()
    {
      // Listado completo de productos
      //$productos = \App\Models\Producto::all();

      // Listado completo de productos con sus relaciones
      $productos = \App\Models\Producto::with(['categoria', 'proveedores', 'parametros'])->get();

      // Asignar los métodos a los parámetros de cada producto
      foreach ($productos as $producto) {
        $productoConMetodos = $this->getMetodosPorParametrosdeProducto($producto->producto_id);
        if ($productoConMetodos) {
            $producto->parametros = $productoConMetodos->parametros;
        }
      }

      // Listado completo de certificados
      $certificados = \App\Models\Certificado::all();

      // Listado de proveedores
      $proveedores = \App\Models\Proveedor::all();

      // Listado de parametros
      $parametros = \App\Models\Parametro::all();

      // Listado de métodos de análisis
      $metodos = \App\Models\MetodoDeAnalisis::all();

      $productoDeterminado = $this->getMetodosPorParametrosdeProducto(11);

      $certificadoDeterminado = \App\Models\Certificado::find(1);

      $resultadosAnalisis = \App\Models\ResultadoDeAnalisis::where('certificado_id', 1)->get();

        return view('sandbox.sandbox', [
            'productos' => $productos,
            'certificados' => $certificados,
            'proveedores' => $proveedores,
            'parametros' => $parametros,
            'metodos' => $metodos,
            'productoDeterminado' => $productoDeterminado,
            'certificadoDeterminado' => $certificadoDeterminado,
            'resultadosAnalisis' => $resultadosAnalisis

        ]);
    }

    /**
     * Método que retorna los métodos de análisis asociados a los parámetros de un producto, asignados dinámicamente según la categoría a la que pertenece el producto     *
     * @param int $producto_id
     * @return \App\Models\Producto|null
     */
    public function getMetodosPorParametrosdeProducto($producto_id)
    {
      // Encuentro el producto por su id
      $producto = \App\Models\Producto::with(['parametros'])->find($producto_id);

      if (!$producto) {
          return null;
      }

      // Definición de mapeos de categorías y sus respectivos métodos
      $metodosPorCategoria = [
        1 => [ // ACIDO SULFURICO
            1 => 1,  // CONCENTRACION
            2 => 4,  // PESO ESPECIFICO
            4 => 2,  // HIERRO
            7 => 3,  // SULFATOS
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        2 => [ // ACIDO CLORHIDRICO
            1 => 5,  // CONCENTRACION
            17 => 6, // CLORO LIBRE
            2 => 7,  // PESO ESPECIFICO
            4 => 8,  // HIERRO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        3 => [ // ACIDO ACETICO
            1 => 9,  // CONCENTRACION
            42 => 10, // PUNTO DE SOLIDIFICACION
            5 => 11,  // CLORUROS
            2 => 12,  // PESO ESPECÍFICO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        4 => [ // ACIDO NITRICO
            1 => 13, // CONCENTRACION
            2 => 14, // PESO ESPECIFICO
            40 => 15, // RESIDUOS POR EVAPORACION
            41 => 16, // PRESIDUOS POR CALCINACION
            4 => 17, // HIERRO
            5 => 18, // CLORURO
            7 => 19, // SULFATOS
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        5 => [ // ACIDO FOSFORICO
            1 => 20, // CONCENTRACION
            2 => 21, // PESO ESPECIFICO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        6 => [ // AGUA AMONIACAL
            1 => 22, // CONCENTRACION
            2 => 23, // PESO ESPECIFICO
            5 => 24, // CLORURO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        7 => [ // AGUA OXIGENADA
            1 => 25, // CONCENTRACION
            9 => 25, // VOLUMEN
            8 => 26, // DESCOMPOSICION
            40 => 27, // RESIDUOS POR EVAPORACION
            2 => 28, // PESO ESPECIFICO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        8 => [ // AGUA DESMINERALIZADA
            5 => 29, // CLORURO
            28 => 30, // PH
            32 => 31, // CONDUCTIVIDAD
            2 => 32, // PESO ESPECIFICO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        9 => [ // HIPOCLORITO DE SODIO
            1 => 33, // CONCENTRACION
            11 => 34, // ALCALINIDAD
            2 => 35, // PESO ESPECIFICO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        10 => [ // HIDROXIDO DE SOD
            1 => 36, // CONCENTRACION
            2 => 37, // PESO ESPECIFICO
            10 => 38, // CARBONATO
            5 => 39, // CLORURO
            7 => 40, // SULFATOS
            6 => 41, // METALES PESADOS
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        11 => [ // HIDROXIDO DE POTASIO
            1 => 42, // CONCENTRACION
            2 => 43, // PESO ESPECIFICO
            10 => 44, // CARBONATO
            5 => 45, // CLORURO
            7 => 46, // SULFATOS
            6 => 47, // METALES PESADOS
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        12 => [ // CLORURO FERRICO
            1 => 48, // CONCENTRACION
            2 => 49, // PESO ESPECIFICO
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],
        13 => [ // EFLUENTES INDUSTRIALES
            43 => 50, // TEMPERATURA
            28 => 51, // PH
            19 => 52, // CONDUCTIVIDAD
            33 => 53, // SOLIDOS SEDIMENTABLES
            37 => 54, // DEMAND
            17 => 55, // CLORO LIBRE
            36 => 56, // FOSFORO TOTAL
            15 => 57, // NITROGENO TOTAL
            7 => 58, // SULFATOS
            39 => 59, // NITRATOS
            12 => 61, // ASPECTO
            13 => 61, // COLOR
            14 => 61, // OLOR
        ],

      ];

      // Obtener los métodos para la categoría del producto
      $metodosCategoria = $metodosPorCategoria[$producto->categoria_de_producto_id] ?? [];

      if (!empty($metodosCategoria)) {
          // Obtener los IDs de métodos a buscar
          $metodoIds = array_values($metodosCategoria);

          // Obtener los métodos de análisis en una sola consulta
          $metodos = \App\Models\MetodoDeAnalisis::whereIn('metodo_de_analisis_id', $metodoIds)->get()->keyBy('metodo_de_analisis_id');

          // Asignar los métodos a los parámetros del producto
          foreach ($producto->parametros as $parametro) {
              $metodoId = $metodosCategoria[$parametro->categoria_de_parametro_id] ?? 60; // Valor por defecto
              $parametro->metodo = $metodos[$metodoId] ?? \App\Models\MetodoDeAnalisis::find(60);
          }
    }

      return $producto;
    }
}













