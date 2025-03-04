<button {{ $attributes->merge(
  ['type' => 'submit',
    'class' =>
      'w-full
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
      duration-150'
    ]) }}>
    {{ $slot }}
</button>
