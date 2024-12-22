@props([
    'cfgData' => [],
    'coin' => '',
    'timeframe' => '',
    'loading' => false,
    'error' => false,
    'errorMessage' => '',
    'priceScores' => [],
    'wireModel' => null,
    'countdownPercentage' => 0,
    'timeRemaining' => 0,
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

        <div class="h-full bg-bg-primary backdrop-blur-[30px] border border-border-light rounded-[14px] p-5 sm:p-[30px] flex flex-col justify-between items-center gap-5">
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
                <div class="flex-1 bg-bg-tertiary border border-border-light rounded-[14px] p-[10px_30px]">
                    <span class="block text-sm leading-[140%] tracking-[-0.011em] text-white/30 mb-2">Temporality</span>
                    <div class="relative">
                        <div class="flex items-center justify-between">
                            <select
                                class="w-full bg-bg-tertiary border border-none text-white font-manrope text-[2rem] leading-[140%] tracking-[-0.011em] font-bold appearance-none focus:outline-none focus:ring-2 focus:ring-[#c9ab9970] rounded-[14px] py-0 px-2 cursor-pointer"
                                wire:model.change="period"
                            >
                                <option class="bg-[#1c1c1c] border rounded-full" value="1">15 min</option>
                                <option class="bg-[#1c1c1c]" value="2">1 hour</option>
                                <option class="bg-[#1c1c1c]" value="3">4 hour</option>
                                <option class="bg-[#1c1c1c]" value="4">1 day</option>
                            </select>
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.2625 5.5L10 11.6808L15.7375 5.5L17.5 7.40283L10 15.5L2.5 7.40283L4.2625 5.5Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
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
        @if(isset($cfgData[0]))
            @foreach(collect($cfgData['0'])->filter(function($value, $key) {
                return !in_array($key, ['date', 'cfgi', 'time']);
            }) as $key => $score)
                <div class="flex items-center justify-between bg-bg-primary border-2 border-border-light rounded-[14px] p-[10px_20px_10px_30px]" wire:key="score-{{ $loop->index }}">
                    <span class="text-white font-medium">{{ ucfirst($key) }}</span>
                    <div class="relative w-12 h-12">
                        <x-token-page.fear-greed-index.price-score-svg :value="$score ?? 0" :wire:key="'svg-' . $key" />
                    </div>
                </div>
            @endforeach
            @else
                <p class="text-white/60 text-sm mb-8">
                    No CFGI data available.
                </p>
            @endif
        </div>

        {{-- Progress Bar --}}
        <x-token-page.fear-greed-index.progress-bar :progressWidth="$countdownPercentage" :timeRemaining="$timeRemaining" :countdownText="'17 • 51'" />
    </div>
</section>

<style>
    select {
        background-color: transparent !important;
        border: none !important;
        appearance: none !important;
    }
    select:focus {
        /* box-shadow: none !important;
        outline: 1px rgba(255, 255, 255, 0.1) solid !important; */
    }
</style>
