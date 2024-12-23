@props(['title', 'progress', 'scoreTimeData', 'index', 'isBlurred' => false])
<div class="flex flex-col bg-bg-primary border border-border-light rounded-xl p-7 gap-10 w-full">
    <div class="flex flex-col gap-5">
        <div class="flex justify-between items-center">
            <h3 class="font-medium">{{ $title }}</h3>
            <x-icons.info tooltip="Sentiment analysis explanation" />
        </div>
        <!--progress bar goes here -->
        <div class="w-full">
            <x-token-page.sentiment-analysis.progress-bar-card
                :value=$progress
            />
        </div>
        <div class="flex justify-center">
            <x-global.badges.status-badge type="fear" size="sm">{{ $scoreTimeData[0]['score'] }}% DOWNTREND MARKET</x-global.badges.status-badge>
        </div>
    </div>
    <div class="flex flex-col gap-5 relative">
        <div class="{{ $isBlurred ? 'blurred' : '' }}">
            @if(is_array($scoreTimeData) && !empty($scoreTimeData))
                <livewire:charts
                    :chartData="[
                        'labels' => collect($scoreTimeData)->pluck('time')->all(),
                        'datasets' => [
                            [
                                'label' => 'My First Dataset',
                                'data' => collect($scoreTimeData)->pluck('score')->all(),
                                'borderWidth' => 0,
                                'borderRadius' => [
                                    'topLeft' => 8,
                                    'topRight' => 8,
                                ],
                            ],
                        ],
                    ]"
                    :chartConfig="[
                        'type' => 'bar',
                        'options' => [
                            'responsive' => true,
                            'maintainAspectRatio' => false,
                            'plugins' => [
                                'legend' => [
                                    'display' => false,
                                ],
                            ],
                            'scales' => [
                                'x' => [
                                    'grid' => [
                                        'display' => false,
                                    ],
                                ],
                                'y' => [
                                    'grid' => [
                                        'display' => false,
                                    ],
                                    'ticks' => [
                                        'display' => false,
                                    ],
                                ],
                            ],
                        ],
                    ]"
                    chartId="{{ $index }}"
                    wire:key="$index"
                />
            @else
                <p>No data available for chart.</p>
            @endif
        </div>
        @if($isBlurred)
            <div class="overlay">
                <x-icons.lock class="w-11 h-11 mb-4" />
                <p class="font-medium text-lg mb-4">Sign up now to unlock Bitcoin Fear and Greed historical</p>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full">Sign Up</button>
            </div>
        @endif
    </div>
</div>

<style>
    .blurred {
    position: relative;
    background: rgba(17, 17, 17, 0.53);
    filter: blur(10px);
    backdrop-filter: blur(20px);
    z-index: 1;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 20;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    pointer-events: none;
}

.overlay * {
    pointer-events: auto;
}

@media (max-width: 768px) {
    .w-full {
        width: 100%;
    }
    .h-full {
        height: auto;
    }
}
</style>
@vite('resources/js/app.js')
