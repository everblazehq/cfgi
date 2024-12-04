@extends('layout.app')

@section('body')
    <section id="top">
        <div class="flex mx-auto items-center mt-16">
            <div class="flex flex-col w-6/12">
                <h1><strong class="font-normal text-cyan-300">Crypto</strong> Fear &amp; Greed Index</h1>
                <h2 class="text-xl lg:text-3xl mt-4">The market sentiment indicator</h2>
            </div>
            <div class="w-6/12">
                <img class="relative -top-8 -right-8 -bottom-8 -left-8" src="{{ Vite::asset('resources/images/top-image.png') }}" alt="CFGI" />
            </div>
        </div>
    </section>

    <section id="top-exchanges">
        <div class="mt-16">
            <h3 class="mb-4">Top exchanges</h3>

            <table class="w-full border-collapse border-spacing-0">
                <thead>
                    <tr>
                        <th class="p-4 pl-0 text-left text-slate-400">Currency</th>
                        <th class="p-4 text-left text-slate-400">CFGI</th>
                        <th class="p-4 text-left text-slate-400">Last 2 hours</th>
                        <th class="p-4 text-left text-slate-400">Last Price</th>
                        <th class="p-4 text-left text-slate-400">&nbsp;</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/btc.svg" />
                                <div>
                                    Bitcoin <small class="ml-1 text-slate-400">BTC</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-red-600 rounded-full bg-red-950 text-red-600 text-xs">Explosive</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/eth.svg" />
                                <div>
                                    Ethereum <small class="ml-1 text-slate-400">ETH</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-red-600 rounded-full bg-red-950 text-red-600 text-xs">Explosive</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/bnb.svg" />
                                <div>
                                    BNB <small class="ml-1 text-slate-400">BNB</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-red-600 rounded-full bg-red-950 text-red-600 text-xs">Explosive</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/sol.svg" />
                                <div>
                                    Solana <small class="ml-1 text-slate-400">SOL</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-amber-300 rounded-full bg-amber-950 text-amber-300 text-xs">Good</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/xrp.svg" />
                                <div>
                                    Ripple <small class="ml-1 text-slate-400">XRP</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-amber-300 rounded-full bg-amber-950 text-amber-300 text-xs">Good</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/doge.svg" />
                                <div>
                                    Doge <small class="ml-1 text-slate-400">DOGE</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-amber-300 rounded-full bg-amber-950 text-amber-300 text-xs">Good</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/ada.svg" />
                                <div>
                                    Cardano <small class="ml-1 text-slate-400">ADA</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-red-600 rounded-full bg-red-950 text-red-600 text-xs">Explosive</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/shib.svg" />
                                <div>
                                    Shiba Inu <small class="ml-1 text-slate-400">SHIB</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-amber-300 rounded-full bg-amber-950 text-amber-300 text-xs">Good</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/avax.svg" />
                                <div>
                                    Avalanche <small class="ml-1 text-slate-400">AVAX</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-red-600 rounded-full bg-red-950 text-red-600 text-xs">Explosive</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-4 pl-0 border-t border-solid border-slate-800">
                            <div class="flex items-center">
                                <img class="mr-2 w-4 h-4" src="https://cryptofonts.com/img/SVG/trx.svg" />
                                <div>
                                    Tron <small class="ml-1 text-slate-400">TRX</small>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <div class="inline-block py-1 px-3 border border-solid border-emerald-300 rounded-full bg-emerald-950 text-emerald-300 text-xs">Wise</div>
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            <img class="max-w-24" src="{{ Vite::asset('resources/images/chart.png') }}">
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800">
                            $1,337.00
                        </td>
                        <td class="p-4 border-t border-solid border-slate-800 text-right">
                            <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </section>

    <section id="faq">
        <div class="mt-16">
            <h3 class="mb-4">FAQ</h3>

            <div class="p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg">
                <div class="flex items-center justify-between">
                    <h4>What is CFGI?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>                                                                               
                    </div>
                </div>

                <div class="pt-6 leading-normal">
                    <p>
                        The <strong class="text-white">Crypto Fear and Greed Index (CFGI)</strong> is a comprehensive tool for analyzing cryptocurrency sentiment. It takes into account critical market indicators to determine the level of fear or greed present, with a range of <strong class="text-white">0% to 100%</strong>. The five possible classes within this range are <strong class="text-white">Extreme Greed, Greed, Neutral, Fear, and Extreme Fear</strong>.
                    </p>
                    <p class="mt-4">
                        The CFGI uses various modules to analyze influential variables in the cryptocurrency market, including <strong class="text-white">volume, volatility, dominance, whale movements, search engine data, and order book analysis</strong>. It also features an algorithm that evaluates the social sentiment and how popular technical analysis are affecting the market. Each module is given a specific weight based on its statistical impact on the market.
                    </p>
                    <p class="mt-4">
                        With the CFGI, investors can accurately understand the emotional psychology of each cryptocurrency and use a single indicator to make investment decisions based on a <strong class="text-white">comprehensive analysis</strong> of all relevant factors.
                    </p>
                </div>
            </div>

            <div class="mt-4 p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg">
                <div class="flex items-center justify-between">
                    <h4>How to understand CFGI?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>                                                                                                                  
                    </div>
                </div>
            </div>

            <div class="mt-4 p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg">
                <div class="flex items-center justify-between">
                    <h4>Why an indicator of Fear &amp; Greed?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>                                                                                                                  
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
