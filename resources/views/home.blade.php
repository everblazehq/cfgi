@extends('layout.app')

@push('top-image')
    <img class="absolute top-0 right-0 left-0 object-cover" src="{{ Vite::asset('resources/images/bg_cfgi.jpg') }}" />
@endpush

@section('body')
    <section id="top">
        <div class="flex mx-auto mt-40">
            <div class="flex flex-col w-6/12 pt-10 pb-40">
                <h1><strong class="font-normal text-cyan-300">Crypto</strong> Fear &amp; Greed Index</h1>
                <h2 class="text-xl lg:text-3xl mt-4">The market sentiment indicator</h2>
            </div>
            <div class="w-6/12 relative" >
                <img class="absolute top-[50%] -right-[10%] -left-[10%] -translate-y-1/2 max-w-[120%]" src="{{ Vite::asset('resources/images/header_image.png') }}" alt="CFGI" />
            </div>
        </div>
    </section>

    

    <section id="top-exchanges">
        <div class="mt-[200px]">
            <h3 class="mb-4">Currencies</h3>

            <livewire:home-currencies /> 
        </div>
    </section>

    <section id="faq">
        <div class="mt-16">
            <h3 class="mb-4">FAQ</h3> 

            <div class="p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg" x-data="{toggled: true}" >
                <div class="flex items-center justify-between cursor-pointer" @click="toggled = !toggled">
                    <h4>What is CFGI?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
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
                <div class="flex items-center justify-between cursor-pointer" @click="toggled = !toggled">
                    <h4>How to understand CFGI?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled !== true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled === true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>                                                                                                            
                    </div>
                </div>

                <div class="pt-6 leading-normal" x-show="toggled === true" x-transition>
                    <p>The indicator operates on a simple principle: values <strong class="text-white">above 50</ indicate a positive market sentiment ranging from Neutral to <strong class="text-white">Extreme Greed</strong>. On the other hand, values <strong class="text-white">below 50</strong> imply a negative market sentiment ranging from Neutral to <strong class="text-white">Extreme Fear</strong>. The stronger the sentiment, the greater its potential impact on the current price.</p>

                    <p class="mt-4">Investing in the crypto market using <strong class="text-white">CFGI</strong> involves some effective strategies to consider. For a <strong class="text-white">long-term investment</strong> approach, it's advisable to look for extreme feelings to buy and sell. Extreme Fear signals a good opportunity to enter the market, while <strong class="text-white">Extreme Greed</strong> times present an excellent opportunity to exit.</p>

                    <p class="mt-4">For <strong class="text-white">day trading</strong> or scalping, following a shorter timeframe and focusing on a strong recent feeling of greed is possible. However, it's essential to follow the previous strategy while ensuring <strong class="text-white">proper risk control</strong>.</p>

                    <p class="mt-4">The beta version of CFGI includes the <strong class="text-white">top 40 strongest cryptocurrencies</strong> on the market, reducing the risk of investing in tokens that are too speculative or prone to fraud. If we receive positive feedback, more tokens will be added to the product.</p>
                </div>
            </div>

            <div class="mt-4 p-4 bg-slate-900 border border-solid border-slate-800 rounded-lg" x-data="{toggled: false}">
                <div class="flex items-center justify-between cursor-pointer" @click="toggled = !toggled">
                    <h4>Why an indicator of Fear &amp; Greed?</h4>

                    <div class="inline-flex items-center justify-center w-8 h-8 rounded-full border border-solid border-slate-400">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled !== true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4" x-show="toggled === true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>                                                                                                
                    </div>
                </div>

                <div class="pt-6 leading-normal" x-show="toggled === true" x-transition>
                    <p>For those investing in cryptocurrency, our aim is to find <strong class="text-white">buying and selling opportunities</strong> that maximize profits while minimizing risks. One way to do this is to focus on markets with <strong class="text-white">low long-term risks</strong>. The cryptocurrency market has demonstrated a positive trend over time and is expected to continue for years to come, making it an enticing choice.<p>

                    <p class="mt-4">The <strong class="text-white">CFGI</strong> takes into account human psychology and can help identify patterns of <strong class="text-white">irrational behavior</strong> that repeat throughout market cycles. Since market movements are heavily influenced by these emotional impulses, measuring and quantifying them can provide insight into the <strong class="text-white">market's psychology</strong> and lead to profitable investment decisions.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@pushonce('scripts')
    @vite('resources/js/home.js')
@endpushonce