<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificado;
use App\Models\Producto;


class AnalisisController extends Controller
{
  /**
   *  Retorna la vista de sandbox
   *  @return \Illuminate\View\View
   */
  public function preAnalisisForm(){
    // Listado completo de productos con sus relaciones
    $eventos = \App\Models\TipoDeEvento::all();
    $productos = Producto::with(['categoria', 'proveedores', 'parametros'])->get();
    $proveedores = \App\Models\Proveedor::all();


    //necesito un arrglo clave valor con los productos donde cada clave sea el id del producto y su valor sea el nombre del producto
    return view('analisis.pre_analisis',[
      'productos' => $productos,
      'eventos' => $eventos,
      'proveedores' => $proveedores
    ]);
  }

  /**
   * Agrega una nueva noticia a la base de datos
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function preAnalisisFormAction(Request $request){
    $data = $request->only(["tipo_evento", "proveedor", "productos", "n_remito", "n_cda_proveedor"]);

    //aca deberia crear una nueva entrada en la tabla certificado. Lo basico, somo con los datos de remito y cda

    //traigo la informacion del producto
    $producto = Producto::findOrFail($data['productos']);

    //traigo los metodos de analisis del producto
    $metodoDeAnalisis = $this->getMetodosPorParametrosdeProducto($data['productos']);


    //re dirijo a la seiguiente pantalla
    return view('analisis.carga_datos_analisis',[
      'producto' => $producto,
      'parametros' => $metodoDeAnalisis->parametros
    ]);

  }

  /**
   *  Retorna la vista de sandbox
   *  @return \Illuminate\View\View
   */
  public function cargaDatosAnalisis($producto_id){
    //por ahora no lo uso
    // $producto = Producto::where('producto_id', $producto_id)->first();

    // dd($producto);

    // return view('analisis.carga_datos_analisis',[

    // ]);
  }

  private function getMetodosPorParametrosdeProducto($producto_id)
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
          case '5': // Si el producto es de la categoría 5 = ACIDO FOSFORICO
              foreach ($producto->parametros as $parametro) {
                  switch ($parametro->categoria_de_parametro_id) {
                      case '1': // CONCENTRACION
                          $parametro->metodo = \App\Models\MetodoDeAnalisis::find(20);
                          break;
                      case '2': // PESO ESPECIFICO
                          $parametro->metodo = \App\Models\MetodoDeAnalisis::find(21);
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
          case '6': // Si el producto es de la categoría 6 = AGUA AMONIACAL
            foreach ($producto->parametros as $parametro) {
                switch ($parametro->categoria_de_parametro_id) {
                    case '1': // CONCENTRACION
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(22);
                        break;
                    case '2': // PESO ESPECIFICO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(23);
                        break;
                    case '5': // CLORURO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(24);
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
          case '8': // Si el producto es de la categoría 8 = AGUA DESMINERALIZADA
            foreach ($producto->parametros as $parametro) {
                switch ($parametro->categoria_de_parametro_id) {
                    case '5': // CLORURO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(29);
                        break;
                    case '28': // PH
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(30);
                        break;
                    case '32': // CONDUCTIVIDAD
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(31);
                        break;
                    case '2': // PESO ESPECÍFICO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(32);
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
          case '9': // Si el producto es de la categoría 9 = HIPOCLORITO DE SODIO
            foreach ($producto->parametros as $parametro) {
                switch ($parametro->categoria_de_parametro_id) {
                    case '1': // CONCENTRACION
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(33);
                        break;
                    case '11': // ALCALINIDAD
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(34);
                        break;
                    case '2': // PESO ESPECÍFICO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(35);
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
          case '10': // Si el producto es de la categoría 10 = HIDROXIDO DE SODIO
            foreach ($producto->parametros as $parametro) {
                switch ($parametro->categoria_de_parametro_id) {
                    case '1': // CONCENTRACION
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(36);
                        break;
                    case '2': // PESO ESPECÍFICO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(37);
                        break;
                    case '10': // CARBONATO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(38);
                        break;
                    case '5': // CLORURO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(39);
                        break;
                    case '7': // SULFATOS
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(40);
                        break;
                    case '6': // METALES PESADOS
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(41);
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
          case '11': // Si el producto es de la categoría 11 = HIDROXIDO DE POTASIO
            foreach ($producto->parametros as $parametro) {
                switch ($parametro->categoria_de_parametro_id) {
                    case '1': // CONCENTRACION
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(42);
                        break;
                    case '2': // PESO ESPECÍFICO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(43);
                        break;
                    case '10': // CARBONATO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(44);
                        break;
                    case '5': // CLORURO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(45);
                        break;
                    case '7': // SULFATOS
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(46);
                        break;
                    case '6': // METALES PESADOS
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(47);
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
          case '12': // Si el producto es de la categoría 12 =  CLORURO FERRICO
            foreach ($producto->parametros as $parametro) {
                switch ($parametro->categoria_de_parametro_id) {
                    case '1': // CONCENTRACION
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(48);
                        break;
                    case '2': // PESO ESPECÍFICO
                        $parametro->metodo = \App\Models\MetodoDeAnalisis::find(49);
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













