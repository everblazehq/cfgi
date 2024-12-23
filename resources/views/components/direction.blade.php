@props([
    'variant'
])

<div {{ $attributes->merge(['class' => 'inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-zinc-400']) }}>
    @if($variant === 'up')
        <x-icons.arrow-up />
    @elseif($variant === 'down')
        <x-icons.arrow-down />
    @else
        <x-icons.arrow-auto />
    @endif
</div>