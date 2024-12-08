@props(['value' => 0, 'min' => 0, 'max' => 100])

<div
    x-data="gauge({{ $value }}, {{ $min }}, {{ $max }})"
    x-init="initGauge()"
    class="relative"
>
    <svg width="416" height="415" viewBox="0 0 416 415" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_12028_19359)">
            <path d="M208 414.613C322.386 414.613 415.114 321.885 415.114 207.499C415.114 93.1137 322.386 0.385742 208 0.385742C93.6146 0.385742 0.886719 93.1137 0.886719 207.499C0.886719 321.885 93.6146 414.613 208 414.613Z" fill="#131313" stroke="#262626" stroke-width="0.772898" stroke-miterlimit="10"/>
            <path d="M208.001 388.694C308.072 388.694 389.195 307.57 389.195 207.499C389.195 107.428 308.072 26.3047 208.001 26.3047C107.93 26.3047 26.8066 107.428 26.8066 207.499C26.8066 307.57 107.93 388.694 208.001 388.694Z" fill="#1D1D1D"/>
            <path d="M360.766 144.225C344.013 103.81 311.695 71.4837 271.28 54.7311C251.787 46.6427 230.417 42.1831 208.007 42.1831C185.596 42.1831 164.214 46.6427 144.726 54.7311C104.318 71.4837 71.992 103.81 55.2394 144.217C47.151 163.706 42.6914 185.08 42.6914 207.498C42.6914 225.669 45.6207 243.152 51.0387 259.507C53.0869 265.69 59.9618 268.824 65.9788 266.331L112.936 246.877C118.246 244.679 120.963 238.828 119.355 233.309C116.704 224.193 115.417 214.497 115.742 204.453C117.334 155.104 158.058 115.489 207.431 115.187C258.678 114.874 300.314 156.325 300.314 207.498C300.314 216.522 299.015 225.244 296.6 233.487C295 238.94 297.852 244.717 303.104 246.889L350.027 266.324C356.044 268.816 362.919 265.682 364.967 259.499C370.385 243.148 373.314 225.669 373.314 207.498C373.314 185.08 368.854 163.714 360.766 144.225Z" fill="#111111"/>
            <mask id="mask0_12028_19359" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="42" y="42" width="332" height="226">
                <path d="M360.766 144.229C344.013 103.814 311.695 71.4876 271.28 54.735C251.787 46.6466 230.417 42.187 208.007 42.187C185.596 42.187 164.214 46.6466 144.726 54.735C104.318 71.4876 71.992 103.814 55.2394 144.221C47.151 163.71 42.6914 185.084 42.6914 207.502C42.6914 225.673 45.6207 243.156 51.0387 259.511C53.0869 265.694 59.9618 268.828 65.9788 266.335L112.936 246.881C118.246 244.683 120.963 238.832 119.355 233.313C116.704 224.197 115.417 214.501 115.742 204.457C117.334 155.107 158.058 115.493 207.431 115.191C258.678 114.878 300.314 156.329 300.314 207.502C300.314 216.526 299.015 225.248 296.6 233.491C295 238.944 297.852 244.721 303.104 246.893L350.027 266.328C356.044 268.82 362.919 265.686 364.967 259.503C370.385 243.152 373.314 225.673 373.314 207.502C373.314 185.084 368.854 163.718 360.766 144.229Z" fill="white"/>
            </mask>
            <g mask="url(#mask0_12028_19359)">
                <g filter="url(#filter0_d_12028_19359)">
                    <path d="M207.995 207.505L55.2316 270.786C47.1432 251.297 42.6836 229.923 42.6836 207.505C42.6836 185.087 47.1432 163.712 55.2316 144.224L207.995 207.505Z" fill="#FF004D"/>
                </g>
                <path d="M207.994 207.508L55.2305 144.227C71.983 103.82 104.31 71.4938 144.717 54.7412L207.99 207.508H207.994Z" fill="#FF540B"/>
                <path d="M271.277 54.735L208.004 207.502H207.996L144.723 54.735C164.211 46.6466 185.586 42.187 208.004 42.187C230.422 42.187 251.788 46.6466 271.277 54.735Z" fill="#FFD600"/>
                <path d="M360.767 144.229L208.004 207.502L271.277 54.7349C311.692 71.4874 344.011 103.814 360.763 144.229H360.767Z" fill="#90FF00"/>
                <path d="M373.309 207.509C373.309 229.927 368.85 251.294 360.761 270.782L207.998 207.509L360.761 144.236C368.85 163.724 373.309 185.095 373.309 207.509Z" fill="#03EBF3"/>
                <g opacity="0.05">
                    <path d="M55.3984 144.293L360.732 270.767" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M55.3984 270.767L360.732 144.293" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M144.83 360.196L271.303 54.8628" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M271.303 360.196L144.83 54.8628" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M42.8223 207.531L373.31 207.535" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M91.2207 324.374L324.91 90.6846" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M208.064 372.769L208.068 42.2817" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M324.91 324.374L91.2207 90.6846" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M55.3984 144.29L360.732 270.763" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M55.3984 270.763L360.732 144.29" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M144.83 360.197L271.303 54.8633" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M271.303 360.197L144.83 54.8633" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M42.8223 207.523L373.31 207.527" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M91.2207 324.371L324.91 90.6812" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M208.064 372.77L208.068 42.2822" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M324.91 324.371L91.2207 90.6812" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M50.9082 156.466L365.227 258.593" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M60.834 282.548L355.304 132.509" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M157.004 364.687L259.131 50.3687" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M283.088 354.765L133.049 60.2944" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M43.3301 220.493L372.805 194.566" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M100.748 333.181L315.386 81.8774" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M221.03 372.265L195.104 42.7905" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M333.72 314.85L82.416 100.212" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M47.3867 168.949L368.746 246.104" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M67.1719 293.869L348.959 121.188" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M169.488 368.204L246.643 46.8442" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M294.406 348.421L121.725 66.6338" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M44.8555 233.375L371.277 181.676" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M110.939 341.209L305.196 73.8364" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M233.916 370.736L182.217 44.314" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M341.753 304.653L74.3809 110.397" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M44.8555 181.676L371.277 233.379" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M74.3809 304.653L341.753 110.397" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M182.217 370.736L233.92 44.314" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M305.196 341.209L110.939 73.8364" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M47.3867 246.1L368.746 168.949" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M121.725 348.421L294.409 66.6338" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M246.639 368.204L169.488 46.8442" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M348.959 293.869L67.1719 121.185" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M43.3301 194.566L372.805 220.497" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M82.4102 314.85L333.718 100.212" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M195.102 372.265L221.032 42.7905" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M315.386 333.181L100.748 81.8774" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M50.9082 258.593L365.227 156.466" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M133.049 354.765L283.088 60.2944" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M259.131 364.687L157.004 50.3687" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                    <path d="M355.304 282.548L60.834 132.509" stroke="#343D40" stroke-width="0.386449" stroke-miterlimit="10"/>
                </g>
                <path d="M110.459 167.105L305.674 247.966" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M110.459 247.962L305.674 167.105" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M167.635 305.143L248.495 109.928" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M248.495 305.143L167.639 109.928" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M102.416 207.537H313.715" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M133.359 282.241L282.772 132.829" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M208.064 313.183V101.884" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M282.768 282.241L133.359 132.829" stroke="#343D40" stroke-width="0.83473" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M100.797 163.108L315.334 251.972" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M100.797 251.972L315.334 163.108" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M163.633 314.809L252.497 100.271" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M252.497 314.809L163.633 100.271" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M91.959 207.539H324.172" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M125.967 289.636L290.165 125.438" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M208.064 323.647V91.4331" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M290.165 289.636L125.967 125.438" stroke="#343D40" stroke-width="1.25596" stroke-miterlimit="10"/>
                <path d="M107.586 174.893L308.543 240.188" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M113.932 255.501L302.198 159.573" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M175.416 308.015L240.71 107.058" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M256.028 301.669L160.1 113.402" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M102.74 215.821L313.386 199.247" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M139.453 287.874L276.677 127.2" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M216.354 312.861L199.779 102.215" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M288.402 276.15L127.729 138.925" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M105.334 182.875L310.794 232.202" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M117.986 262.738L298.145 152.333" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M183.402 310.264L232.729 104.805" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M263.268 297.612L152.863 117.453" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M103.719 224.059L312.413 191.006" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M145.965 293.008L270.166 122.062" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M224.592 311.882L191.539 103.188" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M293.538 269.634L122.592 145.433" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M103.719 191.006L312.413 224.059" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M122.592 269.635L293.538 145.438" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M191.539 311.882L224.592 103.188" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M270.162 293.008L145.965 122.062" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M105.334 232.202L310.794 182.875" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M152.863 297.612L263.268 117.453" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M232.729 310.264L183.402 104.805" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M298.145 262.738L117.986 152.333" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M102.74 199.247L313.386 215.825" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M127.729 276.15L288.402 138.925" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M199.773 312.861L216.352 102.215" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M276.677 287.874L139.453 127.2" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M107.586 240.188L308.543 174.893" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M160.1 301.669L256.028 113.402" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M240.71 308.015L175.416 107.058" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
                <path d="M302.198 255.501L113.932 159.573" stroke="#343D40" stroke-width="0.417365" stroke-miterlimit="10"/>
            </g>
            <path d="M360.766 144.225C344.014 103.81 311.695 71.4837 271.28 54.7311C251.787 46.6427 230.417 42.1831 208.007 42.1831C185.596 42.1831 164.214 46.6427 144.726 54.7311C104.318 71.4837 71.992 103.81 55.2394 144.217C47.151 163.706 42.6914 185.08 42.6914 207.498C42.6914 225.669 45.6207 243.152 51.0387 259.507C53.0869 265.69 59.9618 268.824 65.9788 266.331L112.936 246.877C118.246 244.679 120.963 238.828 119.355 233.309C116.704 224.193 115.417 214.497 115.742 204.453C117.334 155.104 158.058 115.489 207.431 115.187C258.678 114.874 300.314 156.325 300.314 207.498C300.314 216.522 299.015 225.244 296.6 233.487C295 238.94 297.852 244.717 303.104 246.889L350.027 266.324C356.044 268.816 362.919 265.682 364.967 259.499C370.385 243.148 373.314 225.669 373.314 207.498C373.314 185.08 368.854 163.714 360.766 144.225Z" stroke="#333333" stroke-width="0.772898" stroke-miterlimit="10"/>
            <g filter="url(#filter1_d_12028_19359)">
                <path
                    d="M208.063 58.5254L177.885 207.505H238.244L208.063 58.5254L177.885 207.505H238.244L208.063 58.5254Z"
                    fill="white"
                    transform="rotate({{ ($value - $min) / ($max - $min) * 225 - 112.5 }}, 208, 207.5)"
                />
            </g>
            <g filter="url(#filter2_d_12028_19359)">
                <path d="M208.002 246.376C229.473 246.376 246.879 228.97 246.879 207.499C246.879 186.028 229.473 168.623 208.002 168.623C186.531 168.623 169.125 186.028 169.125 207.499C169.125 228.97 186.531 246.376 208.002 246.376Z" fill="#111111"/>
                <path d="M208.002 246.376C229.473 246.376 246.879 228.97 246.879 207.499C246.879 186.028 229.473 168.623 208.002 168.623C186.531 168.623 169.125 186.028 169.125 207.499C169.125 228.97 186.531 246.376 208.002 246.376Z" stroke="#262626" stroke-width="0.772898" stroke-miterlimit="10"/>
            </g>
            <g filter="url(#filter3_b_12028_19359)">
                <rect x="133.5" y="274" width="149" height="74" rx="14" fill="#131313" fill-opacity="0.4"/>
                <rect x="133.951" y="274.451" width="148.098" height="73.0976" rx="13.5488" stroke="white" stroke-opacity="0.1" stroke-width="0.902409"/>
                <text x="208" y="320" fill="white" font-size="24" text-anchor="middle">{{ number_format($value, 2) }}</text>
            </g>
        </g>
    </svg>
</div>

<!-- @pushOnce('scripts')
<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('gauge', (value, min, max) => ({
        value: value,
        min: min,
        max: max,
        initGauge() {
            // Additional initialization if needed
        }
    }))
})
</script>
@endPushOnce -->
