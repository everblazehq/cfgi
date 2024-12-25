@props([ 'value' => 0, ])

@php
    // Calculate the width of the progress fill in pixels
    $progressWidth = ($value / 100) * 647; // Calculate the actual width in pixels
    // Calculate the knob position based on the progress width
    $knobPosition = $progressWidth - 6.5; // Adjust for knob centering
@endphp

<svg width="100%" height="auto" viewBox="0 0 647 43" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet">
    <g clip-path="url(#clip0_12033_16422)">
        <!-- Repeated rectangles for background pattern -->
        @for ($i = -10.9375; $i <= 705.328; $i += 44.7656)
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 {{ $i }} -12.0586)" fill="white" fill-opacity="0.1"/>
        @endfor
        <!-- Dynamic fill rectangle -->
        <rect x="0" y="-12" width="{{ $progressWidth }}" height="67" fill="#177FF0" rx="12.5"/>
    </g>
    <!-- Ensure knob is on top -->
    <g>
        <!-- Dynamic knob position -->
        <rect x="{{ $knobPosition }}" width="13" height="43" rx="6.5" fill="#157DEE" fill-opacity="0.17"/>
        <rect x="{{ $knobPosition + 0.5 }}" y="0.5" width="12" height="42" rx="6" stroke="white" stroke-opacity="0.2"/>
    </g>
    <defs>
        <clipPath id="clip0_12033_16422">
            <rect y="10" width="647" height="25" rx="12.5" fill="white"/>
        </clipPath>
    </defs>
</svg>

