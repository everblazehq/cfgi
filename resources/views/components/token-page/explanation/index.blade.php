@props(['indicators' => [], 'coinName' => ''])

<section x-data="{
    indicators: {{ json_encode($indicators) }},
    activeIndicator: null,
    activeIndex: 0,
    init() {
        if (this.indicators.length > 0) {
            this.activeIndicator = this.indicators[0];
        }
    }
}" class="bg-bg-primary border border-border-light rounded-[32px] p-7 space-y-7">
    <h4 class="text-h2-large font-manrope font-bold">{{ ucfirst($coinName) }} Fear and Greed Index Indicator Explained
    </h4>
    <div class="flex flex-col sm:flex-row gap-7">
        <!-- Left sidebar with indicators -->
        <nav class="w-full md:w-[213px] bg-bg-secondary border border-[#323232] rounded-[1.25rem] p-[10px] relative"
            aria-label="Indicator Navigation">
            <ul class="flex sm:flex-col overflow-x-auto whitespace-nowrap">
                <template x-for="(indicator, index) in indicators" :key="indicator">
                    <li>
                        <button
                            class="relative z-10 indicator-button w-full text-left text-sm md:text-xl font-manrope px-3 py-2 md:px-[30px] md:py-[20px] rounded-[0.625rem]"
                            :class="activeIndicator === indicator ?
                                'bg-accent-blue text-white font-semibold transition-all duration-700 ease-in-out' :
                                'text-white/60 font-medium hover:text-white/80'"
                            @click="activeIndicator = indicator; activeIndex = index; console.log('Clicked:', indicator, 'Active Indicator:', activeIndicator)"
                            :aria-controls="'content-' + indicator" :id="'button-' + indicator"
                            :aria-selected="activeIndicator === indicator ? 'true' : 'false'">
                            <span x-text="indicator"></span>
                        </button>
                    </li>
                </template>
            </ul>
        </nav>
        <!-- Right content -->
        <div class="flex-1">
            <x-token-page.explanation.content x-bind:activeIndicator="activeIndicator" :coinName="$coinName" />
        </div>
    </div>
</section>
