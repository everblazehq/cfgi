@props([
    'progressWidth' => 90, // Default to 50% for placeholder
    'countdownText' => '10 min remaining', // Placeholder text
    'height' => 67, // Match the SVG height
    'viewBox' => '0 0 821 81', // Default viewBox
    'rounded' => 14 // Default border radius
])

<div class="relative w-full">
    <svg class="w-full height={{ $height }}" viewBox="{{ $viewBox }}" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
            <!-- Repeated rectangles -->
            @for ($i = -11; $i < 900; $i += 45)
                <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 {{ $i }} 6.94141)" fill="white" fill-opacity="0.1"/>
            @endfor
            <!-- Dynamic fill rectangle -->
            <rect x="-11" y="7" width="{{ $progressWidth }}" height="{{ $height }}" fill="#177FF0" style="width: {{ $progressWidth }}%; border-radius: {{ $rounded }}px"/>
        </g>
        <!-- Ensure knob is on top -->
        <g filter="url(#filter0_b)" style="z-index: 10; position: relative;">
            <!-- Dynamic knob position -->
            <rect x="{{ $progressWidth * 8.21 - 17 }}" width="17" height="81" rx="8" fill="#157DEE" fill-opacity="0.17"/>
            <rect x="{{ $progressWidth * 8.21 - 16.5 }}" y="0.5" width="16" height="80" rx="7.5" stroke="white" stroke-opacity="0.2"/>
        </g>
        <defs>
            <filter id="filter0_b" x="{{ $progressWidth * 8.21 - 26.4 }}" y="-8.9" width="34.8" height="98.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImageFix" stdDeviation="4.45"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur" result="shape"/>
            </filter>
            <clipPath id="clip0">
                <rect y="12" width="821" height="57" rx="{{ $rounded }}" fill="white"/>
            </clipPath>
        </defs>
    </svg>
    {{-- <div class="absolute -bottom-6 right-0 text-white/60 text-sm">{{ $countdownText }}</div> --}}
</div>

