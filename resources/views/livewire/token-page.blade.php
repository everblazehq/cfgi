<div class="min-h-screen bg-bg-primary text-text-primary p-2 md:p-8 overflow-x-hidden">
    <header class="mb-8">
        <h1 class="text-h1 font-bold">{{ ucfirst($coin) }}</h1>
    </header>
    @if($useTestData)
    @if(!empty($cfgData) && isset($cfgData[0]['cfgi']))
        {{ $cfgData[0]['cfgi'] }}
        {{ json_encode($cfgData, JSON_PRETTY_PRINT) }}
    @endif
    <div>
        @if(!is_null($timeRemaining))
            <span id="countdownDisplay">{{ gmdate('i:s', $timeRemaining) }}</span>
        @else
            <span id="countdownDisplay">00:00</span> <!-- Default or loading state -->
        @endif
    </div>
    <!-- resources/views/livewire/parent-component.blade.php -->
    <div >
        <span id="countdownDisplay">{{ gmdate('i:s', $timeRemaining) }}</span>
        <div>Countdown: {{ number_format($countdownPercentage, 2) }}%</div>
    </div>
    <div>
        <!-- Button to fetch next data point -->
        <button wire:click.prevent="fetchNextDataPoint" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">
            Test Button Click
        </button>

        <div>
            period: {{ $period }} <br />
            @if(!empty($cfgData) && isset($cfgData[0]['cfgi']))
                {{ $cfgData[0]['cfgi'] }}
                <pre>{{ json_encode($cfgData, JSON_PRETTY_PRINT) }}</pre>
            @endif
            {{ $count }}
        </div>
        @endif

    <!-- TODO: Edge case for when CFGI data is not available && show loading state
        <!-- TODO: Edge case for when coin is not found && show error state -->
        <div class="space-y-20">
            {{-- Fear & Greed Index Section --}}
            <div>
            <x-token-page.fear-greed-index
                :cfgData="$cfgData"
                :coin="$coin"
                wire:model="period"
                :countdownPercentage="$countdownPercentage"
                :timeRemaining="$timeRemaining"
            />
</div>
            {{-- Sandbox Alerts Section --}}
            <x-token-page.sandbox-alerts
                :configured-alerts="0"
                :remaining-alerts="100"
            />

            {{-- Historical Chart Section --}}
            <x-token-page.charts.index :data="$cfgData" :period="$period" :selectedOptions="$selectedOptions" :values="$values" />

            {{-- Detailed Sentiment Analysis --}}
            <x-token-page.sentiment-analysis>
                @if(!empty($cfgData) && isset($cfgData[0]))
                    @foreach($cfgData[0] as $key => $score)
                        @if(!in_array($key, ['date', 'cfgi', 'time']))
                            @php
                                $scoreTimeData = collect($cfgData)->map(function($item) use ($key) {
                                    return [
                                        'score' => $item[$key],
                                        'time' => $item['time'],
                                    ];
                                })->all();
                            @endphp

                            <x-token-page.sentiment-analysis.card
                                title="{{ $key }} sentiment"
                                :progress="$countdownPercentage"
                                :scoreTimeData="$scoreTimeData"
                                :index="$key"
                                :isBlurred="false"
                                :wire:key="$key"
                            />
                        @endif
                    @endforeach
                @else
                    <div>No sentiment analysis data available.</div>
                @endif
            </x-token-page.sentiment-analysis>

            {{-- Index Explanation Section --}}
            <x-token-page.explanation
                :indicators="[
                        'Price Score',
                        'Volatility',
                        'Volume',
                        'Impulse',
                        'Technical',
                        'Social Media',
                        'Dominance',
                        'Search',
                        'Whales',
                        'Order Book'
                    ]"
                :coin-name="$coin"
            />

            {{-- Bitcoin Analysis Text Area --}}
            <x-token-page.embed :coin-name="$coin" />

            {{-- Add to Smartphone Section --}}
            <x-token-page.pwa />
        </div>
    </div>
</div>



