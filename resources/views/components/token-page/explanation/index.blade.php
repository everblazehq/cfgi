@props(['indicators' => [], 'coinName' => ''])

<section
    x-data="{
        activeIndicator: `{{ $indicators[0] }}`,
        indicators: {{ json_encode($indicators) }},
        activeIndex: 0
    }"
    class="bg-bg-primary border border-border-light rounded-[32px] p-7 space-y-7"
>
    <h2 class="text-h2-large font-manrope font-bold">{{ ucfirst($coinName) }} Fear and Greed Index Indicator Explained</h2>
    <div class="flex gap-7">
        <!-- Left sidebar with indicators -->
        <div class="w-fit md:w-[213px] flex flex-col bg-bg-secondary border border-[#323232] rounded-[1.25rem] p-[10px] relative">
            <template x-for="(indicator, index) in indicators" :key="indicator">
                <button
                    class="relative z-10 indicator-button w-full text-left text-sm md:text-xl font-manrope px-3 py-2 md:px-[30px] md:py-[20px] rounded-[0.625rem]"
                    :class="activeIndicator === indicator ? 'bg-accent-blue text-white font-semibold transition-all duration-700 ease-in-out' : 'text-white/60 font-medium hover:text-white/80'"
                    @click="activeIndicator = indicator; activeIndex = index"
                    x-text="indicator">
                </button>
            </template>
        </div>
        <!-- Right content -->
        <div class="flex-1">
            <div class="flex flex-col text-white text-sm md:text-2xl font-manrope font-normal mb-4 gap-7 p-[10px]">
                <p x-text="'Content for ' + '{{ ucfirst($coinName) }}' + ' ' + activeIndicator + ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'">
                </p>
                <p>
                    The {{ ucfirst($coinName) }} Fear and Greed Index values range from 0% (extreme fear) to 100% (extreme greed).
                </p>
            </div>
            <div class="flex flex-col gap-[30px] p-[10px]">
                <p class="text-sm md:text-2xl font-sans font-bold">The values are:</p>
                <div class="flex flex-col gap-[10px]">
                    <x-global.badges.status-badge value="0" type="basic" size="base" />
                    <x-global.badges.status-badge value="21" type="basic" size="base" />
                    <x-global.badges.status-badge value="41" type="basic" size="base" />
                    <x-global.badges.status-badge value="61" type="basic" size="base" />
                    <x-global.badges.status-badge value="81" type="basic" size="base" />
                </div>
            </div>
        </div>
    </div>
</section>
