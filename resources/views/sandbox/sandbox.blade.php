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
                  <td style="padding: 5px;">{{ $parametro->metodo->metodo_de_analisis == 'no aplica' ? '' : $parametro->metodo->metodo_de_analisis }}</td>
              </tr>
              @endforeach
          </tbody>
      </table>


      <hr style="margin: 25px 0px;">

      <h2>Listado de certificados </h2>


      <table style="width: 100%; border-collapse: collapse; margin-top: 10px;" border="1">
          <thead>
              <tr>
                  <th style="padding: 5px; text-align: left;">N° CDA</th>
                  <th style="padding: 5px; text-align: left;">N° LOTE</th>
                  <th style="padding: 5px; text-align: left;">N° PRODUCTO</th>
                  <th style="padding: 5px; text-align: left;">NOMBRE PRODUCTO</th>
                  <th style="padding: 5px; text-align: left;">PROVEEDOR</th>
                  <th style="padding: 5px; text-align: left;">FECHA DE CARGA</th>
                  <th style="padding: 5px; text-align: left;">ESTADO</th>
                  <th style="padding: 5px; text-align: left;">ACCIONES</th>
              </tr>
          </thead>
          <tbody>
              @foreach($certificados as $certificado)
              <tr>
                  <td style="padding: 5px;">{{ $certificado->numero_de_cda }}</td>
                  <td style="padding: 5px;">{{ $certificado->numero_de_lote }}</td>
                  <td style="padding: 5px;">{{ $certificado->producto_id }}</td>
                  <td style="padding: 5px;">{{ $certificado->producto->nombre }}</td>
                  <td style="padding: 5px;">{{ $certificado->proveedor->nombre }}</td>
                  <td style="padding: 5px;">{{ $certificado->fecha_de_emision }}</td>
                  <td style="padding: 5px;">{{ $certificado->estado }}</td>
                  <td style="padding: 5px;">
                      <a href="#">Ver</a>
                      <a href="#">Editar</a>
                  </td>
              </tr>
              @endforeach
          </tbody>

      </table>

      <hr style="margin: 25px 0px;">

      <h2>Detalle de un certificado </h2>



      <ul>
        <li><p>N° DE CDA: {{ $certificado->numero_de_cda }}</p></li>
        <li><p>N° DE LOTE: {{ $certificado->numero_de_lote }}</p></li>
        <li><p>FECHA DE EMISIÓN: {{ $certificado->fecha_de_emision }}</p></li>
        <li><p>FECHA DE VALIDEZ: {{ $certificado->fecha_de_validez }}</p></li>
        <li><p>PRODUCTO: {{ $certificado->producto->nombre }}</p></li>


      </ul>
      <p>OTROS DATOS DE LA PRE CARGA </p>

      <ul>
        <li><p>PROVEEDOR: {{ $certificado->proveedor->nombre }}</p></li>
        <li><p>TIPO DE EVENTO: {{ $certificado->tipoDeEvento->tipo_de_evento }}</p></li>
        <li><p>NUMERO DE REMITO: {{ $certificado->numero_de_remito }} </p></li>
        <li><p>NUMERO DE CDA PROVEEDOR: {{ $certificado->numero_de_cda_proveedor }} </p></li>
        <li><p>ESTADO: {{ $certificado->estado }}</p></li>
      </ul>


      <table style="width: 100%; border-collapse: collapse; margin-top: 10px;" border="1">
        <thead>
            <tr>
                <th style="padding: 5px; text-align: left;">DETERMINACIÓN ANALÍTICA</th>
                <th style="padding: 5px; text-align: left;">PARÁMETROS</th>
                <th style="padding: 5px; text-align: left;">RESULTADOS</th>
                <th style="padding: 5px; text-align: left;">MÉTODO</th>
            </tr>
        </thead>
        <tbody>

            @foreach($resultadosAnalisis as $resultadoAnalisis)
            <tr>
                <td style="padding: 5px;">{{ $resultadoAnalisis->parametro->parametro }}</td>
                <td style="padding: 5px;">
                  {{ ($resultadoAnalisis->parametro->valor_min !== null || $resultadoAnalisis->parametro->valor_max !== null)
                      ? $resultadoAnalisis->parametro->valor_min . ' - ' . $resultadoAnalisis->parametro->valor_max : $resultadoAnalisis->parametro->referencia }}
                </td>
                <td style="padding: 5px;">
                  {{ ($resultadoAnalisis->resultado_valor !== null)
                      ? $resultadoAnalisis->resultado_valor : $resultadoAnalisis->resultado_referencia }}
                </td>

                <td style="padding: 5px;">{{ $resultadoAnalisis->metodoDeAnalisis->metodo_de_analisis == 'no aplica' ? '' : $resultadoAnalisis->metodoDeAnalisis->metodo_de_analisis }}</td>
            </tr>

            @endforeach
        </tbody>

      </table>
      {{-- @dd($resultadosAnalisis) --}}
    </body>
</html>
