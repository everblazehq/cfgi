@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded-lg transition-colors']) }}
>
    {{ $slot }}
</button>
