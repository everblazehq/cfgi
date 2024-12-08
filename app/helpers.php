<?php

echo 'Hello from helpers.php';

if (!function_exists('getFullCoinName')) {
    function getFullCoinName($ticker) {
        $coinMap = [
            'btc' => 'Bitcoin',
            'eth' => 'Ethereum',
            'ltc' => 'Litecoin',
            // Add more mappings as needed
        ];

        return $coinMap[$ticker] ?? 'Unknown Coin';
    }
}
