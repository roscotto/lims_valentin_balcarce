<input
    type="number"
    name="{{ $name }}"
    id="{{ $id }}"
    value="{{ old($name, $value) }}"
    @if ($min !== null) min="{{ $min }}" @endif
    @if ($max !== null) max="{{ $max }}" @endif
    step="{{ $step }}"
    placeholder="{{ $placeholder }}"
    @if ($disabled) disabled @endif
    class="border-gray-300 focus:border-naranja_primario focus:ring-naranja_primario rounded-md w-full"
/>

@error($name)
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
