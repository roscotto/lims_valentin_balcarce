<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalisisController extends Controller
{
    /**
     * Retorna la vista del listado completo de análisis
     * @return \Illuminate\View\View
     */
    public function listadoDeAnalisis()
    {
      // Listado completo de certificados
      $certificados = \App\Models\Certificado::all();

      return view('base-de-datos.listado-de-analisis', [
        'certificados' => $certificados
      ]);
    }
}
