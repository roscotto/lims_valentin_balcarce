<?php
 /**
  @var \App\Models\Certificado[] $certificados
*/
?>

@extends('layouts.main')


@section('title', 'Listado de análisis')

@section('content')
<section>

  <p class="h1">Laboratorio de Control de Calidad</p>

  <h1>Listado de análisis</h1>

  @if ($certificados->isEmpty())
  <p>No hay certificados</p>
  @else
  <ul>
    @foreach($certificados as $certificado)
      <li>
        <a href="#">
          {{ $certificado->nombre }}
        </a>
      </li>
    @endforeach
  </ul>
  @endif

</section>
@endsection
