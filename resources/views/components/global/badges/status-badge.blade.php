@props(['type', 'size'])

@php
    $colors = [
        'extreme-fear' => 'bg-gauge-red/20 text-gauge-red border border-gauge-red',
        'fear' => 'bg-gauge-orange/20 text-gauge-orange border border-gauge-orange',
        'neutral' => 'bg-gauge-yellow/20 text-gauge-yellow border border-gauge-yellow',
        'greed' => 'bg-gauge-green/20 text-gauge-green border border-gauge-green',
        'extreme-greed' => 'bg-gauge-blue/20 text-gauge-blue border border-gauge-blue',
    ];

    $badgeSize = ['sm' => 'text-sm p-[6px_12px]', 'base' => 'text-base p-[6px_14px]'];
@endphp

<div class="w-fit px-3 py-1 rounded-full {{ $badgeSize[$size] }} {{ $colors[$type] }}">
    {{ $slot }}
</div>
