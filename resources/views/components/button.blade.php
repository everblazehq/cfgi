@php
    switch ($variant) {
        case 'primary':
            $variantClass = 'py-2 px-4 text-cyan-950 font-semibold border border-solid border-cyan-300 bg-cyan-300 rounded';
            break;
        case 'outline':
            $variantClass = 'py-2 px-4 font-semibold border border-solid border-slate-300 rounded';
            break;
        default:
            $variantClass = 'py-2 px-4 text-cyan-950 font-semibold border border-solid border-cyan-300 bg-cyan-300 rounded';
    }
@endphp

<div {{ $attributes->merge(['class' => $variantClass]) }}>
    {{ $slot }}
</div>