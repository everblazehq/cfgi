@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'bg-accent-blue hover:bg-blue-700 px-6 py-2 rounded-full transition-colors']) }}
>
    {{ $slot }}
</button>
