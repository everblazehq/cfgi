@props(['activeIndicator' => '', 'coinName'])

<div class="ftext-white text-sm md:text-2xl font-manrope font-normal mb-4 gap-7 p-[10px]">
    <template x-if="activeIndicator === 'Main Indicator'">
        <div role="tabpanel" class="tab-pane" id="content-Main Indicator" aria-labelledby="button-Main Indicator"
            aria-expanded="activeIndicator === 'Main Indicator'">
            <p>
                The Bitcoin Fear and Greed Index is a multifactorial indicator for cryptocurrency sentiment analysis,
                which
                considers the most critical parameters that determine the psychology of the Bitcoin market to give a
                result
                that defines the level of fear or greed in the market.
            </p>
            <p>
                The {{ ucfirst($coinName) }} Fear and Greed Index values range from 0% (extreme fear) to 100%
                (extreme greed).
            </p>

            <p class="text-sm md:text-2xl font-sans font-bold">The values are:</p>
            <div class="flex flex-col gap-[10px]">
                <x-global.badges.status-badge value="0" type="basic" size="base" />
                <x-global.badges.status-badge value="21" type="basic" size="base" />
                <x-global.badges.status-badge value="41" type="basic" size="base" />
                <x-global.badges.status-badge value="61" type="basic" size="base" />
                <x-global.badges.status-badge value="81" type="basic" size="base" />
            </div>

        </div>
    </template>

    <template x-if="activeIndicator === 'Price Score'">
        <div role="tabpanel" class="tab-pane" id="content-Price Score" aria-labelledby="button-Price Score"
            aria-expanded="activeIndicator === 'Price Score'">
            <p>
                The <b>Price Score</b> indicator is a relevant indicator to analyze and assign the Bitcoin price
                evolution a certain numerical value.
            </p>
            <p>
                This module studies the <b>price trend</b> to determine if the Bitcoin market has a <b>bearish or
                    bullish</b> trend.
            </p>
            <p>
                The <b>main trend</b> defines one part of the <b>general sentiment</b> of the market, and is a factor of
                weight when analyzing a chart. A pronounced and long-lasting <b>positive trend</b> generates a greater
                feeling
                of <b>greed</b>. In the same way, when the <b>trend is negative</b>, a greater feeling of <b>fear</b> is
                generated, regardless of other factors.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Volatility'">
        <div role="tabpanel" class="tab-pane" id="content-Price Volatility" aria-labelledby="button-Price Volatility"
            aria-expanded="activeIndicator === 'Volatility'">
            <p>
                <b>Price Volatility</b> is also another important indicator and the biggest trigger for market
                sentiment. To
                measure it, we use values ​​<b>between 0 and 1</b> that determine the degree of current <b>Bitcoin price
                    fluctuation</b> for the desired time frame.
            </p>
            <p>
                <b>Higher volatility</b> implies a riskier market, which further polarizes <b>bullish</b> and
                <b>bearish</b> sentiments. An increase in volatility implies <b>greater greed</b> in a <b>bull
                    market</b>, but also
                <b>greater fear</b> in a <b>bear market</b>.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Volume'">
        <div role="tabpanel" class="tab-pane" id="content-Volume" aria-labelledby="button-Volume"
            aria-expanded="activeIndicator === 'Volume'">
            <p>
                Like volatility, the Bitcoin <b>Volume</b> is a determining factor.
            </p>
            <p>
                An increase in the volume implies a <b>greater negotiation</b> in the market, which is caused by an
                increase in the movements caused by an <b>interest</b>, which is synonymous with <b>great sentiment</b>.
                A strong
                volume determines a strong level of greed in Bitcoin bull markets, but also a strong level of panic in
                bear markets.
            </p>
            <p>
                Like volatility, it is also calculated with a range <b>between 0 and 1</b>.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Impulse'">
        <div role="tabpanel" class="tab-pane" id="content-Impulse" aria-labelledby="button-Impulse"
            aria-expanded="activeIndicator === 'Impulse'">
            <p>
                The <b>Impulse</b> indicator measures the <b>current Bitcoin price strength</b> compared to previous
                values to determine in a range <b>from -1 to 1</b> how it is affecting the Bitcoin market sentiment.
            </p>
            <p>
                Impulse has a huge impact on sentiment, as on a psychological level we tend to place more importance on
                the <b>latest price move</b>.
            </p>
            <p>
                The strength of this shows <b>price inclination</b> that can be more or less pronounced and determines
                the <b>polarity</b>. A strong <b>bullish impulse</b> in a market implies a <b>greater feeling of
                    greed</b>,
                in the same way that a <b>strong bearish impulse</b> generates a <b>greater feeling of fear</b> or
                panic.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Technical'">
        <div role="tabpanel" class="tab-pane" id="content-Technical" aria-labelledby="button-Technical"
            aria-expanded="activeIndicator === 'Technical'">
            <p>
                It is proven that <b>technical analyzes</b> themselves influence market sentiment, especially those that
                are <b>more popular</b>.
            </p>
            <p>
                The technical analysis indicator analyzes for Bitcoin the <b>26 most popular</b> stock market indicators
                and subdivides them into <b>2 main categories</b> that differentiate them in their type of trend
                <b>indicator</b> or <b>oscillator</b>. Subsequently, each one of them is averaged and assigned a certain
                weight based on the <b>popularity</b> of each one. These results fairly accurately reflect the <b>impact
                    generated by these charts</b> on market analysts.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Social Media'">
        <div role="tabpanel" class="tab-pane" id="content-Social Media" aria-labelledby="button-Social Media"
            aria-expanded="activeIndicator === 'Social Media'">
            <p>
                <b>Social media sentiment</b> analysis is one of the main factors determining crypto market sentiment.
            </p>
            <p>
                This is done through an algorithm that analyzes the <b>popularity</b> of Bitcoin at a given time, based
                on the <b>voting system</b> of one of the largest platforms in the crypto world, to establish a social
                sentiment index.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Dominance'">
        <div role="tabpanel" class="tab-pane" id="content-Dominance" aria-labelledby="button-Dominance"
            aria-expanded="activeIndicator === 'Dominance'">
            <p>
                This other indicator takes into account the <b>dominance</b> of Bitcoin with respect to the general
                market. When it gets <b>greedy</b>, altcoin investments greatly increase and the total market
                capitalization
                increases, which also decreases Bitcoin's dominance. The same thing happens when the <b>market
                    panics</b> but in reverse. For this reason, both the token capitalization and the total market
                capitalization are
                calculated.
            </p>
            <p>
                But there is also a <b>correlation</b> between the dominance of Bitcoin and the dominance of the main
                altcoins, so the indicator calculates different values ​​for each cryptocurrency.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Search'">
        <div role="tabpanel" class="tab-pane" id="content-Trends" aria-labelledby="button-Trends"
            aria-expanded="activeIndicator === 'Search'">
            <p>
                <b>Trends</b> is another factor that determines the sentiment of a particular market. We analyze the
                <b>search volume</b> on Bitcoin has on major search engines on <b>Google</b>.
            </p>
            <p>
                The lookup indicator looks at the current value and compares it to previous values ​​to determine what
                <b>particular interest</b> there is in Bitcoin. For this, <b>specific search terms</b> are used that
                determine the <b>purchasing or ceding</b> interest of Bitcoin, thus excluding general terms that only
                define popularity without demonstrating negativity or possibility.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Whales'">
        <div role="tabpanel" class="tab-pane" id="content-Whales" aria-labelledby="button-Whales"
            aria-expanded="activeIndicator === 'Whales'">
            <p>
                One of the analyzes that can determine the cryptocurrency market is the <b>movement of whales</b>.
            </p>
            <p>
                CFGI analyzes the movements of <b>superlative amounts</b> made by large investors in two ways, first it
                analyzes large movements <b>from wallets to exchanges</b> of Bitcoin and compares them with the large
                movements of <b>stable coins</b> that are also made from wallets to exchanges to estimate the
                <b>proportion
                    of purchase and sale</b> to be made.
            </p>
            <p>
                A <b>high ratio</b> of Bitcoin moves to stablecoins indicates <b>strong selling intent</b> which means
                greed
                market, while a higher ratio of <b>stablecoins</b> moves indicates stronger <b>buying intent</b> and
                fear
                market.
            </p>
        </div>
    </template>

    <template x-if="activeIndicator === 'Order Book'">
        <div role="tabpanel" class="tab-pane" id="content-Order Book" aria-labelledby="button-Order Book"
            aria-expanded="activeIndicator === 'Order Book'">
            <p>
                Another great predictor of sentiment through a quantitative source are the <b>order books</b>. Crypto
                Fear
                and Greed Index analyzes the order book for <b>Bitcoin</b> on a <b>popular exchange</b> to determine the
                <b>buying and selling pressure</b> that contiguous orders exert on the price. In such a way that you can
                know the buying and selling pressure that the <b>orders which are going to be executed</b> will exert.
            </p>
            <p>
                <b>Stronger buying pressure</b> than selling pressure close to price is a clear indication of <b>bearish
                    sentiment</b>, as there are more buy orders within equal distance to the price. While <b>stronger
                    selling
                    pressure</b> above price indicates a <b>bullish sentiment</b>, because there are more sells to
                execute
                than
                buys at the same distance.
            </p>
        </div>
    </template>

    <template x-if="!activeIndicator">
        <div role="tabpanel" class="tab-pane" id="content-default" aria-labelledby="button-default"
            aria-expanded="false">
            <p>
                The selected indicator is not available. Please choose a valid indicator.
            </p>
        </div>
    </template>
</div>
<style>
    .tab-pane {
        display: flex;
        flex-direction: column;
        gap: 30px;
        padding: 10px;
    }
</style>
