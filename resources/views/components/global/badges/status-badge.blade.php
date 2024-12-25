@props(['value' => null,'type', 'size', 'indicator' => null])

@php
    $colors = getFearGreedIndexColor($value);
    $colorsWithOpacity = getFearGreedIndexColor($value, 0.2);
    $badgeSize = ['sm' => 'text-sm p-[6px_12px]', 'base' => 'text-base p-[6px_14px]'];
@endphp
@php
    $label = function($indicator, $value, $buttonType = 'detailed') {
        $value = (float)$value; // Convert the value to a float

        // Helper function to determine the label based on value and ranges
        $getLabel = function($value, $ranges) {
            foreach ($ranges as $range) {
                if ($value >= $range[0] && $value <= $range[1]) {
                    return $range[2]; // Return the corresponding label
                }
            }
            return null; // Return null if no range matches
        };

        // Define ranges for basic labels
        $basicRanges = [
            [0, 20, 'EXTREME FEAR'],
            [20, 40, 'FEAR'],
            [40, 60, 'NEUTRAL'],
            [60, 80, 'GREED'],
            [80, 100, 'EXTREME GREED']
        ];

        // Check for basic label logic if no indicator is provided and button type is 'basic'
        if (empty($indicator) && $buttonType === 'basic') {
            return $getLabel($value, $basicRanges);
        }

        // Define ranges for detailed labels
        $detailedRanges = [
            'trends' => [
                [0, 20, 'Very High Buy Interest'],
                [20, 40, 'High Buy Interest'],
                [40, 60, 'Neutral Interest'],
                [60, 80, 'High Sell Interest'],
                [80, 100, 'Very High Sell Interest']
            ],
            'social' => [
                [0, 20, 'Very Positive Sentiment'],
                [20, 40, 'Positive Sentiment'],
                [40, 60, 'Neutral Sentiment'],
                [60, 80, 'Negative Sentiment'],
                [80, 100, 'Very Negative Sentiment']
            ],
            'technical' => [
                [0, 20, 'Very High Buy Signals'],
                [20, 40, 'Most Buy Signals'],
                [40, 60, 'Neutral Signals'],
                [60, 80, 'Most Sell Signals'],
                [80, 100, 'Very High Sell Signals']
            ],
            'price' => [
                [0, 20, 'Very Uptrend Market'],
                [20, 40, 'Uptrend Market'],
                [40, 60, 'Sideways Market'],
                [60, 80, 'Downtrend Market'],
                [80, 100, 'Very Downtrend Market']
            ],
            'impulse' => [
                [0, 20, 'Very High Bullish Impulse'],
                [20, 40, 'High Bullish Impulse'],
                [40, 60, 'Low Impulse'],
                [60, 80, 'High Bearish Impulse'],
                [80, 100, 'Very High Bearish Impulse']
            ],
            'whales' => [
                [0, 20, 'Very High Whale Movements for Selling'],
                [20, 40, 'High Whale Movements for Selling'],
                [40, 60, 'Neutral Whale Movements'],
                [60, 80, 'High Whale Movements for Buying'],
                [80, 100, 'Very High Whale Movements for Buying']
            ],
            'orders' => [
                [0, 20, 'Very High Selling Pressure'],
                [20, 40, 'High Selling Pressure'],
                [40, 60, 'Neutral Pressure'],
                [60, 80, 'High Buying Pressure'],
                [80, 100, 'Very High Buying Pressure']
            ],
            'dominance' => [
                [0, 20, 'Very Low Dominance (High Greed)'],
                [20, 40, 'Low Dominance (Greed)'],
                [40, 60, 'Moderate Dominance'],
                [60, 80, 'High Dominance (Fear)'],
                [80, 100, 'Very High Dominance (High Fear)']
            ],
            'volatility' => [
                [0, 10, 'Very High Volatility in Bullish Time'],
                [11, 20, 'High Volatility in Bullish Time'],
                [21, 30, 'Moderate Volatility in Bullish Time'],
                [31, 40, 'Low Volatility in Bullish Time'],
                [41, 60, 'Very Low Volatility'],
                [61, 71, 'Low Volatility in Bearish Time'],
                [71, 81, 'Moderate Volatility in Bearish Time'],
                [81, 91, 'High Volatility in Bearish Time'],
                [91, 100, 'Very High Volatility in Bearish Time']
            ],
            'volume' => [
                [0, 10, 'Very High Buying Volume'],
                [11, 20, 'High Buying Volume'],
                [21, 30, 'Moderate Buying Volume'],
                [31, 40, 'Low Buying Volume'],
                [41, 60, 'Very Low Volume'],
                [61, 71, 'Low Selling Volume'],
                [71, 81, 'Moderate Selling Volume'],
                [81, 91, 'High Selling Volume'],
                [91, 100, 'Very High Selling Volume']
            ]
        ];

        // Use the helper function for detailed labels
        if (array_key_exists($indicator, $detailedRanges)) {
            return $getLabel($value, $detailedRanges[$indicator]);
        }

        // Default case for invalid indicators
        return 'Invalid Indicator'; // Handle invalid indicators
    };
@endphp

<div class="w-fit px-3 py-1 rounded-full {{ $badgeSize[$size] }}" style="background-color: {{ $colorsWithOpacity }}; color: {{ $colors }}; border: 1px solid {{ $colors }};">
    {{ $slot }}
    <span>@if($type === 'detailed'){{ $value }}% @endif{{ $label($indicator, $value, $type) }}</span>
</div>
