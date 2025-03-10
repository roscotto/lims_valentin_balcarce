<?php
 /**
  @var \App\Models\Producto[] $productos
 */
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Modulo de carga / carga de datos de análisis') }}
        </h2>
    </x-slot>
    <div class="px-8  w-[100%]" >
      <form method="POST" action="{{route('validacionDatosAnalisis')}}"  class="p-1 flex flex-col justify-center" >
        @csrf
        <div class="flex justify-between w-[100%]">
          <div class="w-[70%]">
            <x-input-label for="nombre_prudcto" :value="__('Producto')" />
            <x-text-input id="nombre_prudcto" class="block mt-1 w-full" type="text" name="nombre_prudcto" value="{{$producto->nombre}}" disabled />
            <input type="hidden" name="producto_id" value="{{$producto->producto_id}}">
            <x-input-error :messages="$errors->get('nombre_prudcto')" class="mt-2" />
          </div>
          <div class="w-[25%] self-end">
            <button class="
            w-full
            px-4
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
              Información
            </button>
          </div>
        </div>
        <div class="mt-4">
          <table class="table-auto w-[100%]">
            <thead >
              <tr class="bg-naranja_primario shadow-sm">
                <th class="p-2 text-white font-bold text-left">Parámetro</th>
                <th class=" text-white font-bold text-center">Valor min</th>
                <th class=" text-white font-bold text-center">Valor max</th>
                <th class=""></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($parametros as $parametro)
                <tr class="mb-4 even:bg-naranja_10 odd:bg-white border-b">
                  @if ($parametro->valor_min != null)
                    <td>{{$parametro->parametro}}</td>
                    <td class="text-center">{{$parametro->valor_min}}</td>
                    <td class="text-center">{{$parametro->valor_max}}</td>
                    <td>
                      <x-input-number
                        name="{{$parametro->parametro}}"
                        value="0"
                        step="0.001"
                        {{-- min="{{$parametro->valor_min}}"
                        max="{{$parametro->valor_max}}" --}}
                        placeholder="Muestra"
                      />
                    </td>
                  @else
                    <td>{{$parametro->parametro}}</td>
                    <td>{{$parametro->valor}}</td>
                    <td></td>
                    <td>
                      <div class="inline-flex items-center">
                        <label class="flex items-center cursor-pointer relative">
                          <input type="checkbox" name="{{$parametro->parametro}}"  class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded shadow hover:shadow-md border border-slate-300 checked:bg-blue-600 checked:border-blue-600" id="check1" />
                          <span class="absolute text-white opacity-0 peer-checked:opacity-100 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          </span>
                        </label>
                        <span><p>Cumple</p></span>
                      </div>
                    </td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

        <div class="mt-4 flex justify-end">
          <div class="mr-2">
            <x-primary-button>
              Aceptar carga
            </x-primary-button>
          </div>
          <div>
            <x-danger-button>
              Borrar carga
            </x-danger-button>
          </div>
        </div>
      </form>
    </div>
</x-app-layout>
