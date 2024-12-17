@props([
    'cfgData' => [],
    'coin' => '',
    'timeframe' => '',
    'loading' => false,
    'error' => false,
    'errorMessage' => '',
    'priceScores' => [],
])

<section class="flex flex-col lg:flex-row gap-6 w-full mx-auto">
<!-- <h1>Token Page</h1>
    <p>Coin: {{ $coin }}</p>
    <pre>CFGI Data: {{ isset($cfgData) ? json_encode($cfgData, JSON_PRETTY_PRINT) : 'No data available' }}</pre>
</div> -->
{{-- Fear & Greed Index Section --}}

    <div x-data="fearGreedIndex(@js($cfgData))" class="relative w-full lg:w-[33rem]" role="region" aria-label="Fear and Greed Index">
        {{-- Loading State --}}
        <!-- TODO: Test this -->
        @if($loading)
            <div class="absolute inset-0 bg-bg-secondary/50 flex items-center justify-center rounded-xl z-10">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-accent-blue"></div>
            </div>
        @endif

        {{-- Error State --}}
        @if($error)
            <div class="absolute inset-0 bg-red-500/10 text-red-500 p-4 rounded-xl mb-4" role="alert z-10">
                {{ $errorMessage }}
            </div>
        @endif

        <div class="bg-bg-primary backdrop-blur-[30px] border border-border-light rounded-[14px] p-5 sm:p-[30px] flex flex-col items-center gap-5">
            {{-- Header --}}
            <div class="w-full flex justify-between items-start">
                <h2 class="font-manrope text-h2-medium leading-[110%] tracking-[-0.011em] font-bold">
                    Fear & Greed<br /> Index <span class="text-accent-blue">Now</span>
                </h2>
                <button>
                    <x-icons.arrow />
                </button>
            </div>

            {{-- Gauge Component --}}
            <div class="w-full max-w-[25.9375rem] aspect-square relative mx-auto">
                <x-token-page.fear-greed-index.gauge
                    :value="(int)($cfgData['0']['cfgi'] ?? 0)"
                    :min="0"
                    :max="100"
                    class="w-full h-full"
                />
            </div>

            {{-- Bottom Controls --}}
            <div class="w-full flex flex-col sm:flex-row gap-4">
                {{-- Token Selection --}}
                <div class="flex-1 bg-bg-tertiary border border-border-light rounded-[14px] p-[10px_30px]">
                    <span class="block text-sm leading-[140%] tracking-[-0.011em] text-white/30 mb-2">Token</span>
                    <div class="flex items-center gap-2.5">
                        <x-icons.bitcoin />
                        <span class="font-manrope text-[2rem] leading-[140%] tracking-[-0.011em] font-bold">
                            {{ $coin }}
                        </span>
                    </div>
                </div>

                {{-- Timeframe Selection --}}
                <x-token-page.fear-greed-index.dropdown :options="['15 min', '1 hour', '4 hours', '1 day']" label="Temporality" />
            </div>
        </div>
    </div>

    {{-- Coin Analysis Section --}}
    <div
        class="relative flex-1 bg-bg-primary backdrop-blur-[30px] border border-border-light rounded-[14px] p-[30px]"
        role="region"
        aria-label="Bitcoin Analysis"
    >
        <div class="flex justify-between items-center mb-6">
            <h2 class="font-manrope text-h2-medium leading-[110%] tracking-[-0.011em] font-bold text-white">
                {{ getFullCoinName($coin) }} analysis
            </h2>
            <button>
                <x-icons.arrow />
            </button>
        </div>

        <p class="text-white/60 text-sm mb-8">
            The following indicators are used to calculate the CFGI for this token.
        </p>

        {{-- Price Score Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            @foreach($cfgData['0'] as $key => $score)
                @if($key !== 'date')
                <div class="flex items-center justify-between bg-bg-primary border-2 border-border-light rounded-[14px] p-[10px_20px_10px_30px]">
                    <span class="text-white font-medium">{{ ucfirst($key) }}</span>
                    <div class="relative w-12 h-12">
                        <x-token-page.fear-greed-index.price-score-svg :value="$score ?? 0" />
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        {{-- Progress Bar --}}
        <x-token-page.fear-greed-index.progress-bar :progressWidth="50" :countdownText="'17 • 51'" />
    </div>
</section>

