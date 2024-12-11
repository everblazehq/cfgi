@props(['indicators' => [], 'coinName' => ''])

<section
    x-data="{
        activeIndicator: `{{ $indicators[0] }}`,
        indicators: {{ json_encode($indicators) }},
        activeIndex: 0
    }"
    class="bg-background-primary border border-border-light rounded-[32px] p-7 space-y-7"
>
    <h2 class="text-[40px] font-manrope font-bold">{{ getFullCoinName($coinName) }} Fear and Greed Index Indicator Explained</h2>
    <div class="flex gap-7">
        <!-- Left sidebar with indicators -->
        <div class="w-[213px] flex flex-col bg-background-secondary border border-[#323232] rounded-[20px] p-[10px] relative">
            <template x-for="(indicator, index) in indicators" :key="indicator">
                <button
                    class="relative z-10 indicator-button w-full text-left text-[20px] font-manrope px-[30px] py-[20px] rounded-[10px]"
                    :class="activeIndicator === indicator ? 'bg-accent-blue text-white font-semibold transition-all duration-700 ease-in-out' : 'text-white/60 font-medium hover:text-white/80'"
                    @click="activeIndicator = indicator; activeIndex = index"
                    x-text="indicator">
                </button>
            </template>
        </div>
        <!-- Right content -->
        <div class="flex-1">
            <div class="flex flex-col text-white text-2xl font-manrope font-normal mb-4 gap-7 p-[10px]">
                <p x-text="'Content for ' + '{{ getFullCoinName($coinName) }}' + ' ' + activeIndicator + ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'">
                </p>
                <p>
                    The {{ getFullCoinName($coinName) }} Fear and Greed Index values range from 0% (extreme fear) to 100% (extreme greed).
                </p>
            </div>
            <div class="flex flex-col gap-[30px] p-[10px]">
                <p class="text-2xl font-sans font-bold">The values are:</p>
                <div class="flex flex-col gap-[10px]">
                    <x-global.badges.status-badge type="extreme-fear" size="base">EXTREME FEAR</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="fear" size="base">FEAR</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="neutral" size="base">NEUTRAL</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="greed" size="base">GREED</x-global.badges.status-badge>
                    <x-global.badges.status-badge type="extreme-greed" size="base">EXTREME GREED</x-global.badges.status-badge>
                </div>
            </div>
        </div>
    </div>
</section>
