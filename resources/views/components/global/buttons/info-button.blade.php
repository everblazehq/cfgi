@props(['tooltip' => ''])

<button
    type="button"
    {{ $attributes->merge(['class' => 'w-6 h-6 rounded-full bg-[#333] hover:bg-[#444] flex items-center justify-center transition-colors']) }}
    @if($tooltip) title="{{ $tooltip }}" @endif
>
    ?
</button>
