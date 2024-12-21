@props([
    'variant',
    'link' => false
])

@php
    switch ($variant) {
        case 'primary':
            $variantClass = 'rounded-xl border border-2 border-solid border-accent-blue bg-accent-blue px-6 py-4 font-semibold text-white transition-colors hover:bg-blue-700';
            break;
        case 'secondary':
            $variantClass = 'bg-background-pillButton hover:bg-[#444] px-6 py-2 border-2 border-border-light rounded-full transition-colors';
            break;
        case 'outline':
            $variantClass = 'rounded-xl border-2 border-solid border-zinc-300 px-6 py-4 font-semibold transition-colors hover:bg-zinc-700 hover:text-white';
            break;
        default:
            $variantClass = 'rounded-xl bg-accent-blue px-6 py-4 font-semibold transition-colors hover:bg-blue-700';
    }
@endphp

@if($link !== false)
    <a {{ $attributes->merge(['class' => $variantClass]) }}>{{ $slot }}</a>
@else
    <button {{ $attributes->merge(['class' => $variantClass]) }}>{{ $slot }}</button>
@endif