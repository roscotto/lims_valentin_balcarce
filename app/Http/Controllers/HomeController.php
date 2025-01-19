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
      $productos = \App\Models\Producto::all();

      // Listado completo de certificados
      $certificados = \App\Models\Certificado::all();

      // Listado de proveedores
      $proveedores = \App\Models\Proveedor::all();

        return view('sandbox.sandbox', [
            'productos' => $productos,
            'certificados' => $certificados,
            'proveedores' => $proveedores
        ]);
    }

}
