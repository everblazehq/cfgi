@props(['options' => [], 'label' => ''])

<div x-data="{
        open: false,
        selected: '15 min',
        options: ['15 min', '1 hour', '4 hours', '1 day'],
        focusIndex: 0
    }"
    x-init="
        if (!options.includes(selected)) {
            selected = options[0];
        }
    "
    class="flex-1 bg-bg-tertiary border border-border-light rounded-[14px] p-[10px_30px] cursor-pointer relative"
>
    <span class="block text-sm leading-[140%] tracking-[-0.011em] text-white/30 mb-2">{{ $label }}Temporality</span>
    <div class="relative">
        <div
            tabindex="0"
            @click="open = !open; if(open) { focusIndex = options.indexOf(selected); $nextTick(() => $refs[`option${focusIndex}`]?.focus()); }"
            @keydown.enter="open = !open; if(open) { focusIndex = options.indexOf(selected); $nextTick(() => $refs[`option${focusIndex}`]?.focus()); }"
            @keydown.space.prevent="open = !open; if(open) { focusIndex = options.indexOf(selected); $nextTick(() => $refs[`option${focusIndex}`]?.focus()); }"
            @keydown.escape="open = false"
            aria-haspopup="listbox"
            :aria-expanded="open"
            class="appearance-none text-white font-bold rounded-[14px] w-fit text-left flex items-center justify-between gap-3"
        >
            <span x-text="selected" class="font-manrope text-[2rem] leading-[140%] tracking-[-0.011em] font-bold"></span>
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.2625 5.5L10 11.6808L15.7375 5.5L17.5 7.40283L10 15.5L2.5 7.40283L4.2625 5.5Z" fill="white"/>
            </svg>
        </div>
        <ul
            x-show="open"
            x-trap="open"
            @click.away="open = false"
            role="listbox"
            tabindex="-1"
            class="absolute text-white font-semibold text-[2rem] p-2 z-10 mt-1 w-full bg-[rgba(40,40,40,1)] border border-border-light rounded-[14px]"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
        >
            <template x-for="(option, index) in options" :key="index">
                <li
                    @click.stop="selected = option; open = false"
                    @keydown.enter.stop="selected = options[focusIndex]; open = false"
                    @keydown.arrow-up.prevent="focusIndex = (focusIndex - 1 + options.length) % options.length; $nextTick(() => $refs[`option${focusIndex}`]?.focus())"
                    @keydown.arrow-down.prevent="focusIndex = (focusIndex + 1) % options.length; $nextTick(() => $refs[`option${focusIndex}`]?.focus())"
                    role="option"
                    :aria-selected="selected === option"
                    tabindex="0"
                    x-ref="`option${index}`"
                    :class="{'bg-white/30': focusIndex === index, 'text-white': focusIndex !== index}"
                    class="cursor-pointer select-none relative hover:bg-white/30"
                    style="outline: none;"
                >
                    <span x-text="option"></span>
                </li>
            </template>
        </ul>
    </div>
</div>
