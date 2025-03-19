<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificado;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Options;


class CertificadoController extends Controller
{
  public function imprimirCertificado(){

    $datos = [
      'nombre' => 'Juan Pérez',
      'curso' => 'Desarrollo Web con Laravel',
      'fecha' => now()->format('d/m/Y'),
    ];

    // Cargar la vista y generar el PDF
    $pdf = Pdf::loadView('certificados.pdf.certificado', compact('datos'));

    // Opcional: Configurar tamaño y orientación
    $pdf->setPaper('A4', 'landscape'); // Opciones: portrait (vertical) o landscape (horizontal)

    // Descargar el archivo
    return $pdf->download('certificado.pdf');
  }
}













