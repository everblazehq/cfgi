<?php

if (!function_exists('getFullCoinName')) {
    function getFullCoinName($ticker) {
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

        return $coinMap[$ticker] ?? Str::title($ticker);
    }
}
