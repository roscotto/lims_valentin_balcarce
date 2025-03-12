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
   * Crea una nueva entrada en la tabla certificados y devuelve la vista de carga de datos de analisis
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
   *  Valida los datos ingresados en el formulario de carga de datos
   *  @return \Illuminate\View\View
   */
  public function validacionDatosAnalisis(Request $request){
    //bandera que indica si alguno de los parametros es incorrecto
    $bandera = true;
    //arreglo que registra que campos estan mal
    $errores = [];
    //obtenemos el id del producto
    $producto_id = $request->producto_id;
    //traigo los metodos de analisis del producto
    $metodoDeAnalisis = $this->getMetodosPorParametrosdeProducto($producto_id)->parametros;
    //este arrglo contendra los datos de la base saneados
    $valoresMetodoDeAnalisis = [];

    //ahora que tenemos los datos del metodo de analisis transformamos los datos en algo más legible
    foreach ($metodoDeAnalisis as $metodo) {
      $unMetodo = [
        $metodo->parametro = str_replace(' ', '_', $metodo->parametro),
        $metodo->valor_min,
        $metodo->valor_max,
        $metodo->referencia
      ];
      array_push($valoresMetodoDeAnalisis, $unMetodo);
    }

    foreach ($valoresMetodoDeAnalisis as $metodo) {
      //esta variable contiene el nombre del parametro que vamos a evaluar
      $parametro_nombre    = $metodo[0];
      $parametro_valor_max = (float) $metodo[2];
      $parametro_valor_min = (float) $metodo[1];
      $parametro_referencia= $metodo[3];
      //usamos el nombre del parametro para obtener el valor traido del request
      $valor_parametro = $request->$parametro_nombre;


      if ($parametro_referencia == null){
        $valor_parametro_parse = (float) $valor_parametro;
        if (!($valor_parametro_parse >= $parametro_valor_min && $valor_parametro_parse <= $parametro_valor_max)){
          $bandera = false;
          $nombre = str_replace('_', ' ', $parametro_nombre);
          $errores[] = "El parámetro '{$nombre}' esta fuera de rango.";
        }
      }else{
        if ($valor_parametro != 'on'){
          $bandera = false;
          $errores[] = "El parámetro '{$parametro_nombre}' no corresponde.";
        }
      }
    }

    //generar los campos necesarios para crear una nueva fina en la tabla analisis_resultados

    //redireccionar a la misma pantalla mostrando un modal con la informacion necesario
    if ($bandera) {
      return view('analisis.resultado_datos_analisis',[
        'status' => $bandera,
        'message' => 'Los parámetros ingresados cumplen con las especificaciones técnicas requeridas',
        'errores' => $errores
      ]);
    }
    return view('analisis.resultado_datos_analisis',[
      'status' => $bandera,
      'message' => 'Los parámetros ingresados no cumplen con las especificaciones técnicas requeridas',
      'errores' => $errores
    ]);


  }

  /**
   *  Retorna la vista de carga de datos de analisis
   *  @return \Illuminate\View\View
   */
  public function cargaDatosAnalisis(){
    return view('analisis.carga_datos_analisis', [  ]);
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













