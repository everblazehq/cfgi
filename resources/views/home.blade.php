@extends('layout.app')

@section('body')
    <section id="top">
        <div class="flex mx-auto mt-40">
            <div class="flex flex-col w-6/12 pt-10 pb-40">
                <h1><strong class="font-normal text-cyan-300">Crypto</strong> Fear &amp; Greed Index</h1>
                <h2 class="text-xl lg:text-3xl mt-4">The market sentiment indicator</h2>
            </div>
            <div class="w-6/12 relative" >
                <img class="absolute top-[50%] -right-[10%] -left-[10%] -translate-y-1/2 max-w-[120%]" src="{{ Vite::asset('resources/images/header_image.png') }}" alt="CFGI" />
                {{-- <img class="absolute z-40 -top-1/3 right-0" src="{{ Vite::asset('resources/images/header_image_1.png') }}" data-scroll data-scroll-speed="-1.5" />
                <img class="absolute z-30 -top-[10%] left-0" src="{{ Vite::asset('resources/images/header_image_2.png') }}" data-scroll data-scroll-speed="2" />
                <img class="absolute z-20 top-[50%] right-0 translate-x-10 -translate-y-1/2" src="{{ Vite::asset('resources/images/header_image_3.png') }}" />
                <img class="absolute z-10 bottom-0 -left-[15%]" src="{{ Vite::asset('resources/images/header_image_4.png') }}" data-scroll data-scroll-speed="0.25" />
                <img class="absolute right-0 -bottom-[30%]" src="{{ Vite::asset('resources/images/header_image_5.png') }}" data-scroll data-scroll-speed="1" /> --}}
            </div>
        </div>
    </section>

    <section id="top-exchanges">
        <div class="mt-[200px]">
            <h3 class="mb-4">Currencies</h3>

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
                            <a href="/bitcoin-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/ethereum-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/bnb-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/solana-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/ripple-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/doge-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/cardano-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/shibainu-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/avalanche-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
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
                            <a href="/tron-fear-greed-index" class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>                                          
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>        
        </div>
    </section>

    <section id="faq">
        <div class="mt-16">
            <h3 class="mb-4">FAQ</h3>

            <div class="p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg" x-data="{toggled: true}" >
                <div class="flex items-center justify-between">
                    <h4>What is CFGI?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400" @click="toggled = !toggled">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled !== true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled === true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>                                                                              
                    </div>
                </div>

                <div class="pt-6 leading-normal" x-show="toggled === true" x-transition>
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

            <div class="mt-4 p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg" x-data="{toggled: false}">
                <div class="flex items-center justify-between">
                    <h4>How to understand CFGI?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400" @click="toggled = !toggled">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled !== true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled === true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>                                                                                                            
                    </div>
                </div>
            </div>

            <div class="mt-4 p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg" x-data="{toggled: false}">
                <div class="flex items-center justify-between">
                    <h4>Why an indicator of Fear &amp; Greed?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400" @click="toggled = !toggled">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled !== true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled === true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>                                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@pushonce('scripts')
    @vite('resources/js/home.js')
@endpushonce