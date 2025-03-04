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
    <div class="p-10 bg-white overflow-hidden shadow-lg sm:rounded-lg" >
      <form method="POST" action="{{ route('preAnalisisAction') }}" class="p-1" >
        @csrf

        <div class="mt-4">
          <x-input-label for="nombre_prudcto" :value="__('Producto')" />
          <x-text-input id="nombre_prudcto" class="block mt-1 w-full" type="text" name="nombre_prudcto" :value="old('nombre_prudcto')" required />
          <x-input-error :messages="$errors->get('nombre_prudcto')" class="mt-2" />
        </div>

        <div class="mt-4 flex ">
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
