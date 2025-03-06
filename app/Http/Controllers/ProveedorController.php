<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Retorna la vista del listado completo de proveedores
     * @return \Illuminate\View\View
     */
    public function administrarProveedores()
    {
      // Listado completo de proveedores
      $proveedores = \App\Models\Proveedor::all();

      return view('admin.administrar-proveedores', [
        'proveedores' => $proveedores
      ]);
    }
}
