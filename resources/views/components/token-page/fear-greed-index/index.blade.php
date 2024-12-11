@props([
    'value' => 0,
    'coinName' => '',
    'timeframe' => '',
    'loading' => false,
    'error' => false,
    'errorMessage' => '',
    'priceScores' => [],
])

<section class="flex flex-col lg:flex-row gap-6 w-full mx-auto">
{{-- Fear & Greed Index Section --}}

    <div x-data="fearGreedIndex(@js($value))" class="relative w-full lg:w-[528px]" role="region" aria-label="Fear and Greed Index">
        {{-- Loading State --}}
        <!-- TODO: Test this -->
        @if($loading)
            <div class="absolute inset-0 bg-background-secondary/50 flex items-center justify-center rounded-xl z-10">
                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-accent-blue"></div>
            </div>
        @endif

        {{-- Error State --}}
        @if($error)
            <div class="absolute inset-0 bg-red-500/10 text-red-500 p-4 rounded-xl mb-4" role="alert z-10">
                {{ $errorMessage }}
            </div>
        @endif

        <div class="bg-background-primary backdrop-blur-[30px] border border-border-light rounded-[14px] p-5 sm:p-[30px] flex flex-col items-center gap-5 sm:gap-[20px]">
            {{-- Header --}}
            <div class="w-full flex justify-between items-start">
                <h2 class="font-manrope text-[36px] leading-[110%] tracking-[-0.011em] font-bold text-white">
                    Fear & Greed<br /> Index <span class="text-accent-blue">Now</span>
                </h2>
                <x-icons.arrow />
            </div>

            {{-- Gauge Component --}}
            <div class="w-[415px] h-[415px] relative">
                <x-token-page.fear-greed-index.gauge
                    :value="$value"
                    :min="0"
                    :max="100"
                    class="w-full h-full"
                />
            </div>

            {{-- Bottom Controls --}}
            <div class="w-full flex flex-col sm:flex-row gap-4">
                {{-- Token Selection --}}
                <div class="flex-1 bg-background-tertiary border border-border-light rounded-[14px] p-[10px_30px]">
                    <span class="block text-[14px] leading-[140%] tracking-[-0.011em] text-white/30 mb-2">Token</span>
                    <div class="flex items-center gap-2.5">
                        <x-icons.bitcoin />
                        <span class="font-manrope text-[32px] leading-[140%] tracking-[-0.011em] font-bold">
                            {{ $coinName }} <!-- TODO: Map coin ticker to coin name -->
                        </span>
                    </div>
                </div>

                {{-- Timeframe Selection --}}
                <div class="flex-1 bg-background-tertiary border border-border-light rounded-[14px] p-[10px_30px]">
                    <span class="block text-[14px] leading-[140%] tracking-[-0.011em] text-white/30 mb-2">Temporality</span>
                    <div class="relative">
                        <select
                            x-model="selectedTimeframe"
                            @change="refreshData()"
                            class="w-full bg-background-tertiary border border-none text-white font-manrope text-[32px] leading-[140%] tracking-[-0.011em] font-bold appearance-none focus:outline-none focus:ring-2 focus:ring-[#177FF0] rounded-[14px] p-0"
                        >
                            <option value="15 min">15 min</option>
                            <option value="1 hour">1 hour</option>
                            <option value="4 hour">4 hour</option>
                            <option value="1 day">1 day</option>
                        </select>
                        <svg class="absolute right-0 top-1/2 -translate-y-1/2 transform rotate-180" width="20" height="20" viewBox="0 0 24 24">
                            <path d="M12 8L6 14L18 14L12 8Z" fill="white"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Coin Analysis Section --}}
    <div
        class="relative flex-1 bg-background-primary backdrop-blur-[30px] border border-border-light rounded-[14px] p-[30px]"
        role="region"
        aria-label="Bitcoin Analysis"
    >
        <div class="flex justify-between items-center mb-6">
            <h2 class="font-manrope text-[36px] leading-[110%] tracking-[-0.011em] font-bold text-white">
                {{ getFullCoinName($coinName) }} analysis <!-- TODO: Map coin ticker to coin name -->
            </h2>
            <x-icons.arrow />
        </div>

        <p class="text-white/60 text-sm mb-8">
            The following indicators are used to calculate the CFGI for this token.
        </p>

        {{-- Price Score Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
            @foreach($priceScores as $score)
            <div class="flex items-center justify-between bg-background-primary border-2 border-border-light rounded-[14px] p-[10px_20px_10px_30px]">
                <span class="text-white font-medium">Price Score</span>
                <div class="relative w-12 h-12">
                    <x-price-score-svg :value="$score['value']" />
                </div>
            </div>
            @endforeach
        </div>

        {{-- Progress Bar --}}
        <x-progress-bar :progressWidth="50" :countdownText="'17 • 51'" />
    </div>
</section>

