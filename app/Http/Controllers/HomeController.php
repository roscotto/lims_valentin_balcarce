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

      // Listado completo de certificados
      $certificados = \App\Models\Certificado::all();

      // Listado de proveedores
      $proveedores = \App\Models\Proveedor::all();

      // Listado de parametros
      $parametros = \App\Models\Parametro::all();

      // Listado de métodos de análisis
      $metodos = \App\Models\MetodoDeAnalisis::all();

      $productoDeterminado = $this->getMetodosPorParametrosdeProducto(10);

        return view('sandbox.sandbox', [
            'productos' => $productos,
            'certificados' => $certificados,
            'proveedores' => $proveedores,
            'parametros' => $parametros,
            'metodos' => $metodos,
            'productoDeterminado' => $productoDeterminado

        ]);
    }



    /**
     * Obtiene métodos por parámetros de producto.
     *
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

        switch ($producto->categoria_de_producto_id) {
            case '1': // Si el producto es de la categoría 1 = ACIDO SULFURICO
                foreach ($producto->parametros as $parametro) {
                    switch ($parametro->categoria_de_parametro_id) {
                        case '1': // CONCENTRACION
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(1);
                            break;
                        case '2': // PESO ESPECIFICO
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(4);
                            break;
                        case '4': // HIERRO
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(2);
                            break;
                        case '7': // SULFATOS
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(3);
                            break;
                        case '12': // ASPECTO
                            $parametro->metodo = null;
                            break;
                        case '13': // COLOR
                            $parametro->metodo = null;
                            break;
                        case '14': // OLOR
                            $parametro->metodo = null;
                            break;
                        default:
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(60);
                            break;
                    }
                }
                break;
            case '2': // Si el producto es de la categoría 2 = ACIDO CLORHIDRICO
                foreach ($producto->parametros as $parametro) {
                    switch ($parametro->categoria_de_parametro_id) {
                        case '1': // CONCENTRACION
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(5);
                            break;
                        case '17': // CLORO LIBRE
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(6);
                            break;
                        case '2': // PESO ESPECIFICO
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(7);
                            break;
                        case '4': // HIERRO
                            $parametro->metodo = \App\Models\MetodoDeAnalisis::find(8);
                            break;
                        case '12': // ASPECTO
                            $parametro->metodo = null;
                            break;
                        case '13': // COLOR
                            $parametro->metodo = null;
                            break;
                        case '14': // OLOR
                            $parametro->metodo = null;
                            break;
                        default:
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(60);
                            break;
                    }
                }
                break;


            default:
                // Otras categorías pueden ser gestionadas aquí
                break;
        }

        return $producto;
    }
}













