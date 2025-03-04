<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificado;


class AnalisisController extends Controller
{
  /**
   *  Retorna la vista de sandbox
   *  @return \Illuminate\View\View
   */
  public function preAnalisisForm(){
    // Listado completo de productos con sus relaciones
    $eventos = \App\Models\TipoDeEvento::all();
    $productos = \App\Models\Producto::with(['categoria', 'proveedores', 'parametros'])->get();
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
    //en base al producto seleccionado debo traerme todos sus parametros con sus valores maximos y minimos de la base de datos

    //aca deberia crear una nueva entrada en la tabla certificado
    //re dirijo a la seiguiente pantalla
    return redirect()->route('cargaDatosAnalisis');

  }

  /**
   *  Retorna la vista de sandbox
   *  @return \Illuminate\View\View
   */
  public function cargaDatosAnalisis(){

    return view('analisis.carga_datos_analisis',[

    ]);
  }

}













