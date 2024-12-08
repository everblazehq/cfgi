@props(['type' => 'button'])

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => 'bg-background-pillButton hover:bg-[#444] px-6 py-2 border-2 border-border-light rounded-full transition-colors']) }}
>
    {{ $slot }}
</button>
