<?php
 /**
  @var \App\Models\Producto[] $productos
 */
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Modulo de carga / carga de pre-análisis') }}
        </h2>
    </x-slot>
    <div class="p-10 bg-white overflow-hidden shadow-lg sm:rounded-lg" >
      <form method="POST" action="{{ route('preAnalisisAction') }}" class="p-1" >
        @csrf

        <div class="mt-4">
          <x-input-label for="tipo_evento" :value="__('Tipo de evento')" />
          <select name="tipo_evento" id="tipo_evento" class="border p-2 rounded w-full focus:ring-naranja_primario focus:border-naranja_primario focus:outline-none">
            <option value="" selected disabled disabled>Elija una evento</option>
            @foreach ($eventos as $evento)
                <option value="{{ $evento->tipo_de_evento_id}}" >
                  {{$evento->tipo_de_evento}}
                </option><
            @endforeach
          </select>
          {{-- <x-input-error :messages="$errors->get('tipo_evento')" class="mt-2" /> --}}
        </div>

        <div class="mt-4">
          <x-input-label for="proveedor" :value="__('Proveedor')" />
          <select name="proveedor" id="proveedor" class="border p-2 rounded w-full focus:ring-naranja_primario focus:border-naranja_primario focus:outline-none">
            <option value="" selected disabled>Elija una proveedor</option>
            @foreach ($proveedores as $proveedor)
                <option value="{{ $proveedor->proveedor_id}}" >
                  {{$proveedor->nombre}}
                </option>
            @endforeach
          </select>
          {{-- <x-input-error :messages="$errors->get('tipo_evento')" class="mt-2" /> --}}
        </div>

        <div class="mt-4">
          <x-input-label for="productos" :value="__('Productos')" />
          <select name="productos" id="productos" class="border p-2 rounded w-full focus:ring-naranja_primario focus:border-naranja_primario focus:outline-none">
            <option value="" selected disabled>Elija una productos</option>
            @foreach ($productos as $producto)
                <option value="{{ $producto->producto_id}}" >
                  {{$producto->nombre}}
                </option>
            @endforeach
          </select>
          {{-- <x-input-error :messages="$errors->get('tipo_evento')" class="mt-2" /> --}}
        </div>

        <div class="mt-4">
          <x-input-label for="n_remito" :value="__('Número de remito')" />
          <x-text-input id="n_remito" class="block mt-1 w-full" type="text" name="n_remito" :value="old('n_remito')" required />
          <x-input-error :messages="$errors->get('n_remito')" class="mt-2" />
        </div>
        <div class="mt-4">
          <x-input-label for="n_cda_proveedor" :value="__('Número CDA del proveedor')" />
          <x-text-input id="n_cda_proveedor" class="block mt-1 w-full" type="text" name="n_cda_proveedor" :value="old('n_cda_proveedor')" required />
          <x-input-error :messages="$errors->get('n_cda_proveedor')" class="mt-2" />
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
