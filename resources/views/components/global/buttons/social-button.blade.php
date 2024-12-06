@props(['platform'])

@php
    $baseClasses = 'bg-[#333] hover:bg-[#444] px-6 py-2 rounded-lg transition-colors flex items-center gap-2';
    $icons = [
        'twitter' => 'twitter-icon-class',
        'facebook' => 'facebook-icon-class',
        'telegram' => 'telegram-icon-class',
        'whatsapp' => 'whatsapp-icon-class',
    ];
@endphp

<button
    type="button"
    {{ $attributes->merge(['class' => $baseClasses]) }}
>
    <span class="{{ $icons[$platform] ?? '' }}"></span>
    {{ Str::upper($platform) }}
</button>
