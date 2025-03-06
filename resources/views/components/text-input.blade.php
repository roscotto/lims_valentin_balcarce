@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(
  ['class' =>
    'border-gray-300
    focus:border-naranja_primario
    focus:ring-naranja_primario
    rounded-md shadow-sm'
  ]) }}>
