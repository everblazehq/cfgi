<?php

if (!function_exists('getTicker')) {
    function getTicker($fullCoinName) {
        $coinMap = [
            'bitcoin' => 'btc',
            'ethereum' => 'eth',
            'ripple' => 'xrp',
            'bnb' => 'bnb',
            'solana' => 'sol',
            'doge' => 'doge',
            'cardano' => 'ada',
            'tron' => 'trx',
            'avalanche' => 'avax',
            'chainlink' => 'link',
            'ton' => 'toncoin',
            'shiba inu' => 'shibinu',
            'sui' => 'sui',
            'hedera' => 'hbar',
            'stellar' => 'xlm',
            'polkadot' => 'dot',
            'bitcoincash' => 'bch',
            'uniswap' => 'uni',
            'litecoin' => 'ltc',
            'pepe' => 'pepe',
            'near' => 'near',
            'aave' => 'aave',
            'polygon' => 'pol',
            'internetcomputer' => 'icp',
            'vechain' => 'vet',
            'ethereumclassic' => 'etc',
            'fetchai' => 'fet',
            'cronos' => 'cro',
            'arbitrum' => 'arb',
            'filecoin' => 'fil',
            'algorand' => 'algo',
            'kaspa' => 'kas',
            'fantom' => 'ftm',
            'atom' => 'atom',
            'bonk' => 'bonk',
            'theta' => 'theta',
            'injective' => 'inj',
            'the-graph' => 'grt',
            'dogwifhat' => 'wif',
            'sei' => 'sei',
            'floki' => 'floki',
            'gala' => 'gala',
            'sandbox' => 'sand',
            'tezos' => 'xtz',
            'helium' => 'hnt',
            'eos' => 'eos',
            'flow' => 'flow',
            'iota' => 'iota',
            'jupiter' => 'jup',
            'bittorrent' => 'btt',
            'zcash' => 'zec',
            'axs' => 'axs',
            'multiversx' => 'egld',
            'mana' => 'mana',
            'mogcoin' => 'mog',
            'apecoin' => 'ape',
            'eigenlayer' => 'eigen',
            'popcat' => 'popcat',
            'spx6900' => 'spx',
            'not' => 'not',
            'giga' => 'giga',
            'neiro' => 'neiro',
            'luna' => 'luna',
            'moodeng' => 'moodeng',
            'apu' => 'apu',
            'harrypotterobamasoni' => 'hpos1i',
            'bobo' => 'bobo',
            'wojak' => 'wojak',
            'tectum' => 'tet',
            'babydoge' => 'babydoge',
            'ogfantoken' => 'og',
            // Add more mappings as needed
        ];

        return $coinMap[$fullCoinName] ?? Str::title($fullCoinName);
    }
}

if (!function_exists('getFearGreedIndexColor')) {
    function getFearGreedIndexColor($value, $opacity = 1) {
        if ($value >= 0 && $value < 20) return 'rgba(255, 0, 77, ' . $opacity . ')'; // Red (#FF004D)
        if ($value < 40) return 'rgba(255, 84, 11, ' . $opacity . ')'; // Orange (#FF540B)
        if ($value < 60) return 'rgba(255, 214, 0, ' . $opacity . ')'; // Yellow (#FFD600)
        if ($value < 80) return 'rgba(144, 255, 0, ' . $opacity . ')'; // Green (#90FF00)
        if ($value <= 100) return 'rgba(3, 235, 243, ' . $opacity . ')'; // Blue (#03EBF3)
        return 'rgba(33, 33, 33, ' . $opacity . ')'; // Edge case (#212121)
    }
}
