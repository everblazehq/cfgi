@props(['data' => null, 'period' => null, 'selectedOptions' => [], 'wireModel' => []])

<section
    class="flex flex-col gap-20"
>
    <x-token-page.charts.chart-section
        title="Historical"
        primaryButtonText="SETUP FIRST ALERT"
        secondaryButtonText="PERIOD"
        secondaryButtonText2="16 HOURS"
        secondaryButtonAction="setTimeframe('custom')"
        canvasRef="canvas"
        chartType="bar"
        :period="$period"
        :selectedOptions="$selectedOptions"
        wire:model="values"
    >
    <livewire:charts
            :chartData="[
                'labels' => collect($data)->map(function($item) {
                            return $item['time'];
                        })->all(),
                'datasets' => [
                    [
                        'label' => 'My First Dataset',
                        'data' => collect($data)->map(function($item) {
                            return $item['cfgi'];
                        })->all(),
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
            chartId="historical-chart"
            wire:key="{{ $period }}"
            :data="$data"
        />
    </x-token-page.charts.chart-section>

    <x-token-page.charts.chart-section
        title="Price"
        secondaryButtonText="NOW"
        secondaryButtonText2="100,000.00$"
        secondaryButtonAction="setTimeframe('custom')"
        canvasRef="canvas"
        chartType="line"
    >
        <livewire:charts
            :chartData="[
                'labels' => collect($data)->map(fn($item) => $item['time'])->all(),
                'datasets' => [
                    [
                        'label' => 'My First Dataset',
                        'data' => collect($data)->map(fn($item) => $item['cfgi'])->all(),
                        'borderWidth' => 2,
                        'tension' => 0.4,
                        'pointRadius' => 0,
                        'fill' => true,
                        'borderColor' => '#00FFFF',
                    ],
                ],
            ]"
            :chartConfig="[
                'type' => 'line',
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
            chartId="price-chart"
        />
    </x-token-page.charts.chart-section>
</section>
@vite('resources/js/app.js')
