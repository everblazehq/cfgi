@props(['value' => 0])

@php
    // Ensure value is a valid number
    $value = is_numeric($value) ? $value : 0;

    // Calculate the circumference (2 * PI * radius) - keeping in pixels for dasharray
    $circumference = 2 * pi() * 23;

    // Calculate the dash offset based on the value
    $dashOffset = $circumference - ($value / 100) * $circumference;

    // Determine the color based on the value
    $colorClass = match(true) {
        ($value > 0 && $value < 20) => '#FF004D', // Red
        $value < 40 => '#FF540B', // Orange
        $value < 60 => '#FFD600', // Yellow
        $value < 80 => '#90FF00', // Green
        $value <= 100 => '#03EBF3', // Blue
        default => '#212121'  // Edge case for no matching value
    };
@endphp

<svg width="100%" height="100%" viewBox="0 0 53 52" preserveAspectRatio="xMidYMid meet" fill="none" xmlns="http://www.w3.org/2000/svg" style="transform: scale(-1, 1)">
    <mask id="path-1-inside-1_12028_19222" fill="white">
        <path d="M26.5 -1.1365e-06C40.8594 -1.76417e-06 52.5 11.6406 52.5 26C52.5 40.3594 40.8594 52 26.5 52C12.1406 52 0.499999 40.3594 0.499999 26C0.499998 11.6406 12.1406 -5.08827e-07 26.5 -1.1365e-06ZM26.5 42.4851C35.6045 42.4851 42.9851 35.1045 42.9851 26C42.9851 16.8955 35.6045 9.51488 26.5 9.51488C17.3955 9.51488 10.0149 16.8955 10.0149 26C10.0149 35.1045 17.3955 42.4851 26.5 42.4851Z"/>
    </mask>
    <path d="M26.5 -1.1365e-06C40.8594 -1.76417e-06 52.5 11.6406 52.5 26C52.5 40.3594 40.8594 52 26.5 52C12.1406 52 0.499999 40.3594 0.499999 26C0.499998 11.6406 12.1406 -5.08827e-07 26.5 -1.1365e-06ZM26.5 42.4851C35.6045 42.4851 42.9851 35.1045 42.9851 26C42.9851 16.8955 35.6045 9.51488 26.5 9.51488C17.3955 9.51488 10.0149 16.8955 10.0149 26C10.0149 35.1045 17.3955 42.4851 26.5 42.4851Z" fill="#212121" stroke="white" stroke-opacity="0.1" stroke-width="2" mask="url(#path-1-inside-1_12028_19222)"/>
    <circle
        cx="26.5"
        cy="26"
        r="23"
        stroke="{{ $colorClass }}"
        stroke-width="0.5rem"
        stroke-linecap="round"
        stroke-dasharray="{{ $circumference }}"
        stroke-dashoffset="{{ $dashOffset }}"
        transform="rotate(-80 26.5 26)"
        fill="none"
    />
</svg>
