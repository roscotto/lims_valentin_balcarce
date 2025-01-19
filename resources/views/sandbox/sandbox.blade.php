<?php
 /**
  @var \App\Models\Producto[] $productos
  @var \App\Models\Certificado[] $certificados
  @var \App\Models\Proveedor[] $proveedores
 */
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sandbox</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
      <h1 class="text-4xl font-bold">Sandbox</h1>

      <h2>Lista de productos</h2>

      <table style="border-collapse: collapse; width: 60%; text-align: center; border: 1px solid black;">
        <thead>
          <tr>
            <th style="border: 1px solid black; padding: 5px;">N° de producto</th>
            <th style="border: 1px solid black; padding: 5px;">Categoría</th>
            <th style="border: 1px solid black; padding: 5px;">Proveedor</th>
            <th style="border: 1px solid black; padding: 5px;">Nombre</th>
            <th style="border: 1px solid black; padding: 5px;">Parámetros</th>
          </tr>
        </thead>
        <tbody>
          @foreach($productos as $producto)
            <tr>
              <td style="border: 1px solid black; padding: 5px;">{{ $producto->producto_id }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $producto->categoria->categoria_de_producto }}</td>
              <td style="border: 1px solid black; padding: 5px;">
                @foreach($producto->proveedores as $proveedor)
                  <p style="margin: 0;">{{ $proveedor->nombre }}</p>
                @endforeach
              </td>
              <td style="border: 1px solid black; padding: 5px;">{{ $producto->nombre }}</td>
              <td style="border: 1px solid black; padding: 5px;">
                @foreach($producto->parametros as $parametro)
                  <p style="margin: 0;"> {{ $parametro->parametro }} ({{ $parametro->valor_min }} - {{ $parametro->valor_max }}) - {{ $parametro->referencia }} - {{ $parametro->valor }} </p>

                @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>



      <h2>Lista de certificados</h2>
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

      <h2>Lista de proveedores</h2>
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

    </body>
</html>
