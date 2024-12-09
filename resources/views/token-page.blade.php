@extends('layout.app')

@section('body')
    @php
        $data = [
            'coin' => '$coin',
            'fearGreedIndex' => [
                'value' => 75.00,
                'timestamp' => now()->toIso8601String()
            ],
            'sandboxAlerts' => [
                'configured' => 0,
                'remaining' => 100
            ],
            'priceScores' => [
                [
                    'value' => 0,
                ],
                [
                    'value' => 10,
                ],
                [
                    'value' => 20,
                ],
                [
                    'value' => 30,
                ],
                [
                    'value' => 40,
                ],
                [
                    'value' => 60,
                ],
                [
                    'value' => 80,
                ],
                [
                    'value' => 100,
                ],
            ],
            'coinAnalysis' => [
                'totalScore' => 17,
                'maxScore' => 51
            ],
            'sentimentAnalysis' => array_map(function() {
                return [
                    'title' => 'Price Score sentiment',
                    'progress' => rand(30, 80),
                    'chartData' => [
                        'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                        'values' => array_map(fn() => rand(1, 20), range(1, 6))
                    ]
                ];
            }, range(1, 8))
        ];
    @endphp

    <div class="min-h-screen bg-background-primary text-text-primary p-4 md:p-8">
        <header class="mb-8">
            <h1 class="text-2xl md:text-3xl font-semibold">{{ Str::title(getFullCoinName($coin)) }}</h1>
        </header>

        <div class="space-y-20">
            {{-- Fear & Greed Index Section --}}
            <x-token-page.fear-greed-index
                :value="$data['fearGreedIndex']['value']"
                :coin-name="$coin"
                timeframe="15 min"
                :price-scores="$data['priceScores']"
            />

            {{-- Sandbox Alerts Section --}}
            <x-token-page.sandbox-alerts
                :configured-alerts="$data['sandboxAlerts']['configured']"
                :remaining-alerts="$data['sandboxAlerts']['remaining']"
            />

            {{-- Historical Chart Section --}}
            <x-token-page.charts />

            {{-- Detailed Sentiment Analysis --}}
            <x-token-page.sentiment-analysis>
                @foreach($data['sentimentAnalysis'] as $index => $analysis)
                    <x-token-page.sentiment-analysis.card
                        :title="$analysis['title']"
                        :progress="$analysis['progress']"
                        :chart-data="$analysis['chartData']"
                        :index="$index"
                        :is-blurred="true"
                    />
                @endforeach
            </x-token-page.sentiment-analysis>

            {{-- Index Explanation Section --}}
            <x-token-page.index-explanation :indicators="[
                'Price Score',
                'Volatility',
                'Volume',
                'Fear line',
                'Technical',
                'Social Media',
                'Dominance',
                'Search',
                'Order Book'
            ]" />

            {{-- Bitcoin Analysis Text Area --}}
            <x-token-page.text-analysis />

            {{-- Share Section --}}
            <x-token-page.social-share :platforms="[
                ['name' => 'twitter', 'label' => 'TWITTER'],
                ['name' => 'facebook', 'label' => 'FACEBOOK'],
                ['name' => 'telegram', 'label' => 'TELEGRAM'],
                ['name' => 'whatsapp', 'label' => 'WHATSAPP'],
                ['name' => 'link', 'label' => 'COPY LINK'],
            ]" />

            {{-- Add to Smartphone Section --}}
            <x-token-page.smartphone-instructions />

            {{-- Footer Image --}}
            <div class="mt-8 relative">
                <img
                    src="/path-to-your-image.png"
                    alt="App Preview"
                    class="w-full rounded-xl shadow-lg"
                />
            </div>
        </div>
    </div>
@endsection

