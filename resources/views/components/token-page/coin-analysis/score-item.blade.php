@props(['label', 'value', 'color'])

<div class="flex justify-between items-center min-w-[400px] h-[72px] px-[30px] py-[10px] border border-[rgba(255,255,255,0.1)] rounded-[12px]">
    <span class="font-manrope text-[20px] leading-[140%] tracking-[-0.011em] text-white">
        {{ $label }}
    </span>
    <div class="relative w-[52px] h-[52px]">
        <div class="absolute inset-0 bg-[#212121] border border-[rgba(255,255,255,0.1)] rounded-full"></div>
        <div
            class="absolute inset-0 rounded-full"
            style="background: {{ $color }}; clip-path: polygon(50% 50%, 50% 0, {{ 50 + (180 * $value / 100) }}% 0);"
        ></div>
    </div>
</div>
