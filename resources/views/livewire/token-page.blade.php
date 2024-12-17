@extends('layout.app')

@section('body')
    @php
        $data = [
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

    @php
        if (!isset($cfgData)) {
            echo "cfgData is not set.";
        } elseif (!isset($cfgData['0']['cfgi'])) {
            echo "cfgData['0']['cfgi'] is not set.";
        }
    @endphp

    <div class="min-h-screen bg-bg-primary text-text-primary p-2 md:p-8 overflow-x-hidden">
        <header class="mb-8">
            <h1 class="text-h1 font-bold">{{ getFullCoinName($coin) }}</h1>
        </header>

        <div>

<!-- TODO: Edge case for when CFGI data is not available && show loading state
TODO: Edge case for when coin is not found && show error state
        <div class="space-y-20"> -->
            {{-- Fear & Greed Index Section --}}
            <x-token-page.fear-greed-index
                :cfgData="$cfgData"
                :coin="$coin"
                timeframe="15 min"
                :price-scores="$data['priceScores']"
            />

            {{-- Sandbox Alerts Section --}}
            <x-token-page.sandbox-alerts
                :configured-alerts="$data['sandboxAlerts']['configured']"
                :remaining-alerts="$data['sandboxAlerts']['remaining']"
            />

            {{-- Historical Chart Section --}}
            <x-token-page.charts.index />

            {{-- Detailed Sentiment Analysis --}}
            <x-token-page.sentiment-analysis>
                @foreach($data['sentimentAnalysis'] as $index => $analysis)
                    <x-token-page.sentiment-analysis.card
                        :title="$analysis['title']"
                        :progress="$analysis['progress']"
                        :chart-data="$analysis['chartData']"
                        :index="$index"
                        :is-blurred="false"
                    />
                @endforeach
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
@endsection



