@extends('layouts.main')


@section('title', 'Listado de proveedores')

@section('content')
<section>

  <p class="h1">Laboratorio de Control de Calidad</p>

  <h1>Listado de proveedores</h1>

      @if ($proveedores->isEmpty())
        <p>No hay proveedores</p>
      @else
        <ul>
          @foreach($proveedores as $proveedor)
            <li style="list-style: none;">
              <p href="#">
                {{ $proveedor->proveedor_id }} - {{ $proveedor->nombre }}
              </p>
            </li>
          @endforeach
        </ul>
      @endif

</section>
@endsection
