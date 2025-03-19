<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Modulo de carga / carga de datos de análisis') }}
        </h2>
    </x-slot>
    <div class="px-8  w-[100%]" >
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 lg:pt-8 flex justify-center flex-col">
        @if ($status)
        <div class="overflow-hidden shadow-sm sm:rounded-lg border bg-green-100 border-green-600 flex flex-row ">
          <div class="text-green-600 py-4 pl-4">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M10.2426 16.3137L6 12.071L7.41421 10.6568L10.2426 13.4853L15.8995 7.8284L17.3137 9.24262L10.2426 16.3137Z"
                fill="currentColor"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                fill="currentColor"
              />
            </svg>
          </div>
          <div class="p-4 bg-green-100 text-green-600">
            {{ $message }}
          </div>
        </div>
        {{-- aca va el boton de descargar pdf --}}
        <div>
          <div class="flex justify-center sm:w-full">
            <a href="{{ route('imprimirCertificado') }}" class="
            lg:w-[30%]
            sm:w-full
            px-4
            mt-8
            py-2
            bg-white
            border
            border-naranja_primario
            rounded-md
            font-semibold
            text-xs
            text-black
            uppercase
            tracking-widest
            hover:bg-naranja_50
            hover:text-white
            active:bg-naranja_primario
            focus:bg-naranja_primario
            focus:outline-none
            focus:ring-2
            focus:ring-naranja_primario
            focus:ring-offset-2
            transition
            ease-in-out
            duration-150">
              Generar certificado
            </a>
          </div>
        </div>
        @else
        <div class="overflow-hidden shadow-sm sm:rounded-lg bg-red-100 border border-red-600 flex flex-row">
          <div class="text-red-600 py-4 pl-4 bg-red-100">
            <svg width="24"height="24"viewBox="0 0 24 24"fill="none"xmlns="http://www.w3.org/2000/svg">
              <path
                d="M16.3394 9.32245C16.7434 8.94589 16.7657 8.31312 16.3891 7.90911C16.0126 7.50509 15.3798 7.48283 14.9758 7.85938L12.0497 10.5866L9.32245 7.66048C8.94589 7.25647 8.31312 7.23421 7.90911 7.61076C7.50509 7.98731 7.48283 8.62008 7.85938 9.0241L10.5866 11.9502L7.66048 14.6775C7.25647 15.054 7.23421 15.6868 7.61076 16.0908C7.98731 16.4948 8.62008 16.5171 9.0241 16.1405L11.9502 13.4133L14.6775 16.3394C15.054 16.7434 15.6868 16.7657 16.0908 16.3891C16.4948 16.0126 16.5171 15.3798 16.1405 14.9758L13.4133 12.0497L16.3394 9.32245Z"
                fill="currentColor"
              />
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12C21 16.9706 16.9706 21 12 21Z"
                fill="currentColor"
              />
            </svg>
          </div>
          <div class="p-4 bg-red-100 text-red-600">
            {{ $message }}
          </div>
        </div>
        <div class="my-2">
          <table class="table-auto w-[100%]">
            <thead >
              <tr class="bg-naranja_primario shadow-sm">
                <th class="p-2 text-white font-bold text-left">Parámetro</th>
                <th class=" text-white font-bold text-center">Valor min</th>
                <th class=" text-white font-bold text-center">Valor max</th>
                <th class=" text-white font-bold text-center">Muestra obtenida</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($errores as $error)
                <tr class="mb-4 even:bg-naranja_10 odd:bg-white border-b">
                  @if ($error['valor_min'] != null)
                    <td>{{$error['parametro']}}</td>
                    <td class="text-center">{{$error['valor_min']}}</td>
                    <td class="text-center">{{$error['valor_max']}}</td>
                    <td>{{$error['muestra']}}</td>
                  @else
                    <td>{{$error['parametro']}}</td>
                    <td>{{$error['valor_min']}}</td>
                    <td>{{$error['valor_max']}}</td>
                    <td>{{$error['muestra']}}</td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div>
          <div class="flex justify-center sm:w-full">
            <button class="btn-accion lg:w-[30%] sm:w-full lg:mr-1">
              Aceptar carga con desvio
            </button>
            <x-danger-button class="px-4 mt-8 py-2 lg:w-[30%] sm:w-full">
              Rachazar material
            </x-danger-button>

          </div>
        </div>
        @endif
    </div>
</x-app-layout>
