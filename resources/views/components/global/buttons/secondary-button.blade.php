@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'bg-[#333] hover:bg-[#444] px-4 py-2 rounded-lg transition-colors']) }}
>
    {{ $slot }}
</button>
