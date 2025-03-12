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

      <hr style="margin: 25px 0px;">

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
                  <p style="margin: 0;"> {{ $parametro->parametro }}
                    @if($parametro->valor_min) {{ $parametro->valor_min }} @endif
                    @if($parametro->valor_max) - {{ $parametro->valor_max }} @endif
                    @if ($parametro->referencia) - {{ $parametro->referencia }} - {{ $parametro->valor }} @endif
                  </p>

                @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>

      <hr style="margin: 25px 0px;">

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

      <hr style="margin: 25px 0px;">

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

      <hr style="margin: 25px 0px;">

      <h2>Listado de Parámetros con su categoría</h2>

      <table style="border-collapse: collapse; width: 60%; text-align: center; border: 1px solid black;">
        <thead>
          <tr>
            <th style="border: 1px solid black; padding: 5px;">N° de parámetro</th>
            <th style="border: 1px solid black; padding: 5px;">Categoría</th>
            <th style="border: 1px solid black; padding: 5px;">Parámetro</th>
            <th style="border: 1px solid black; padding: 5px;">Valor mínimo</th>
            <th style="border: 1px solid black; padding: 5px;">Valor máximo</th>
            <th style="border: 1px solid black; padding: 5px;">Referencia</th>
            <th style="border: 1px solid black; padding: 5px;">Valor</th>
          </tr>
        </thead>
        <tbody>
          @foreach($parametros as $parametro)
            <tr>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->parametro_id }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->categoria->categoria_de_parametro }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->parametro }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->valor_min }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->valor_max }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->referencia }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $parametro->valor }}</td>
            </tr>
          @endforeach
        </tbody>

      </table>

      <hr style="margin: 25px 0px;">

      <h2>Listado de Métodos de Análisis</h2>

      <?php
      //print_r($metodos);
      ?>
      <table style="border-collapse: collapse; width: 60%; text-align: center; border: 1px solid black;">
        <thead>
          <tr>
            <th style="border: 1px solid black; padding: 5px;">N° de método</th>
            <th style="border: 1px solid black; padding: 5px;">Método</th>

          </tr>
        </thead>
        <tbody>
          @foreach($metodos as $metodo)
            <tr>
              <td style="border: 1px solid black; padding: 5px;">{{ $metodo->metodo_de_analisis_id }}</td>
              <td style="border: 1px solid black; padding: 5px;">{{ $metodo->metodo_de_analisis }}</td>

            </tr>
          @endforeach
        </tbody>
      </table>

      <hr style="margin: 25px 0px;">

      <h2>Métodos de Análisis utilizado para cada parámetro de un producto en particular </h2>

      <p><b>Producto: {{ $productoDeterminado->nombre }}</b></p>

      {{-- <p> Parámetros con métodos de análisis</p>
      @foreach($productoDeterminado->parametros as $parametro)
      <p style="margin: 0;"> {{ $parametro->parametro }}
        @if($parametro->valor_min) {{ $parametro->valor_min }} @endif
        @if($parametro->valor_max) - {{ $parametro->valor_max }} @endif
        @if ($parametro->referencia) - {{ $parametro->referencia }} - {{ $parametro->valor }} @endif
        {{ $parametro->metodo ? $parametro->metodo->metodo_de_analisis : '' }}
      </p>
      @endforeach  --}}

      <p>Parámetros con métodos de análisis</p>
      <table style="width: 100%; border-collapse: collapse; margin-top: 10px;" border="1">
          <thead>
              <tr>
                  <th style="padding: 5px; text-align: left;">Parámetro</th>
                  <th style="padding: 5px; text-align: left;">Valor Mínimo</th>
                  <th style="padding: 5px; text-align: left;">Valor Máximo</th>
                  <th style="padding: 5px; text-align: left;">Referencia</th>
                  <th style="padding: 5px; text-align: left;">Valor</th>
                  <th style="padding: 5px; text-align: left;">Método de Análisis</th>
              </tr>
          </thead>
          <tbody>
              @foreach($productoDeterminado->parametros as $parametro)
              <tr>
                  <td style="padding: 5px;">{{ $parametro->parametro }}</td>
                  <td style="padding: 5px;">{{ $parametro->valor_min ?? '' }}</td>
                  <td style="padding: 5px;">{{ $parametro->valor_max ?? '' }}</td>
                  <td style="padding: 5px;">{{ $parametro->referencia ?? '' }}</td>
                  <td style="padding: 5px;">{{ $parametro->valor ?? '' }}</td>
                  {{-- <td style="padding: 5px;">{{ $parametro->metodo ? $parametro->metodo->metodo_de_analisis : '' }}</td> --}}
                  <td style="padding: 5px;">{{ $parametro->metodo->metodo_de_analisis == 'no aplica' ? '' : $parametro->metodo->metodo_de_analisis }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>





    </body>
</html>
