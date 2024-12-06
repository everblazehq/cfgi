@props([
    'progressWidth' => 50, // Default to 50% for placeholder
    'countdownText' => '10 min remaining' // Placeholder text
])

<div class="relative pt-4 w-full">
    <svg class="w-full h-auto" viewBox="0 0 821 81" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_12025_17954)">
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 -3.9375 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 40.8281 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 85.5957 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 130.363 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 175.129 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 219.895 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 264.662 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 309.43 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 354.195 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 398.961 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 443.729 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 488.494 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 533.262 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 578.027 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 622.795 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 667.561 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 712.328 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 757.094 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 801.861 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 846.627 6.94141)" fill="white" fill-opacity="0.1"/>
            <rect width="46.9924" height="116.985" transform="matrix(0.866025 -0.5 -0.633158 0.774022 891.395 6.94141)" fill="white" fill-opacity="0.1"/>
            <!-- Dynamic fill rectangle -->
            <rect x="-11" y="7" width="100%" height="67" fill="#177FF0" style="width: {{ $progressWidth }}%"/>
        </g>
        <g filter="url(#filter0_b_12025_17954)">
            <!-- TODO: x values for next two lines need to be dynamic based on progress width -->
            <rect x="491" width="17" height="81" rx="8" fill="#157DEE" fill-opacity="0.17"/>
            <rect x="491.5" y="0.5" width="16" height="80" rx="7.5" stroke="white" stroke-opacity="0.2"/>
        </g>
        <defs>
            <filter id="filter0_b_12025_17954" x="482.1" y="-8.9" width="34.8" height="98.8" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feGaussianBlur in="BackgroundImageFix" stdDeviation="4.45"/>
                <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_12025_17954"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_12025_17954" result="shape"/>
            </filter>
            <clipPath id="clip0_12025_17954">
                <rect y="12" width="821" height="57" rx="14" fill="white"/>
            </clipPath>
        </defs>
    </svg>
    <div class="absolute -bottom-6 right-0 text-white/60 text-sm">{{ $countdownText }}</div>
</div>
