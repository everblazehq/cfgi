<?php

if (!function_exists('getFullCoinName')) {
    function getFullCoinName($ticker) {
        $coinMap = [
            'btc' => 'Bitcoin',
            'eth' => 'Ethereum',
            'bnb' => 'Binance Coin',
            'sol' => 'Solana',
            'xrp' => 'XRP',
            'doge' => 'Dogecoin',
            'ada' => 'Cardano',
            'trx' => 'TRON',
            'avax' => 'Avalanche',
            'shib' => 'Shiba Inu',
            'dot' => 'Polkadot',
            'uni' => 'Uniswap',
            'ltc' => 'Litecoin',
            'pepe' => 'Pepe',
            'pol' => 'Polygon',
            'icp' => 'Internet Computer',
            'cro' => 'Cronos',
            'wif' => 'Dog Wif Hat',
            'arb' => 'Arbitrum',
            'ftm' => 'Fantom',
            'bonk' => 'Bonk',
            'neiro' => 'Neiro',
            'inj' => 'Injective',
            'sui' => 'SUI',
            'jup' => 'Jupiter',
            'xlm' => 'Stellar',
            'aave' => 'Aave',
            'near' => 'Near',
            'fet' => 'FET',
            'not' => 'NOT',
            'ton' => 'TON',
            'eigen' => 'Eigen',
            'babydoge' => 'BABYDOGE',
            'og' => 'OG',
            'apu' => 'APU',
            'spx' => 'SPX',
            'giga' => 'GIGA',
            'mog' => 'MOG',
            'popcat' => 'POPCAT',
            'bobo' => 'BOBO',
            // Add more mappings as needed
        ];

        return $coinMap[$ticker] ?? 'Unknown Coin';
    }
}
