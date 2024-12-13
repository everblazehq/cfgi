@props(['coinName' => ''])

<section x-data="{
    format: 'dark',
    darkCode: '',
    lightCode: ''
}" class="flex flex-col space-between gap-[1.875rem] font-manrope bg-background-primary border border-border-light rounded-[32px] p-[30px]">
    <div class="flex flex-col gap-[0.375rem]">
        <h2 class="text-h2 font-bold mb-[10px]">{{ getFullCoinName($coinName) }} Analysis</h2>
        <span class="text-white text-base font-medium">Embed the code on your website with current selected temporality and autoupdated.</span>
    </div>
    <div class="relative w-fit bg-background-pillButton border border-border-light rounded-[110px] p-[5px] sm:p-[10px] md:p-[10px]">
        <!-- Sliding background -->
        <div
            class="absolute transition-all duration-200 bg-accent-blue rounded-[69px] h-[calc(100%-10px)] sm:h-[calc(100%-20px)] w-[calc(50%-5px)] sm:w-[calc(50%-10px)]"
            :class="format === 'dark' ? 'left-[5px] sm:left-[10px]' : 'left-[calc(50%+2.5px)] sm:left-[calc(50%+5px)]'"
        ></div>

        <!-- Buttons -->
        <button
            @click="format = 'dark'"
            class="relative text-white text-xs font-semibold py-[10px] px-[15px] rounded-[69px] transition-colors
                   sm:text-lg sm:py-[15px] sm:px-[25px]
                   md:text-xl md:py-[20px] md:px-[30px]"
            :class="format === 'dark' ? 'text-white' : 'text-text-secondary hover:text-white'"
        >
            <span class="sm:hidden">Dark</span>
            <span class="hidden sm:inline">Dark Format</span>
        </button>
        <button
            @click="format = 'light'"
            class="relative text-white text-xs font-semibold py-[10px] px-[15px] rounded-[69px] transition-colors
                   sm:text-lg sm:py-[15px] sm:px-[25px]
                   md:text-xl md:py-[20px] md:px-[30px]"
            :class="format === 'light' ? 'text-white' : 'text-text-secondary hover:text-white'"
        >
            <span class="sm:hidden">Light</span>
            <span class="hidden sm:inline">Light Format</span>
        </button>
    </div>

        <pre x-ref="codeBlock" class="relative bg-background-pillButton [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-border-light [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-white/25">
            <code
                class="language-html bg-background-pillButton"
                x-text="format === 'dark' ? darkCode : lightCode"
                x-init="() => {
                    // Define the code templates with escaped HTML characters and markup delimiter
                    darkCode = `<!-- Dark Mode Bitcoin Widget -->
                        &lt;iframe
                            src=&quot;https://your-domain.com/embed?theme=dark&token=btc&interval=1d&quot;
                            width=&quot;100%&quot;
                            height=&quot;400&quot;
                            frameborder=&quot;0&quot;
                            scrolling=&quot;no&quot;
                            allowtransparency=&quot;true&quot;&gt;
                        &lt;/iframe&gt;`;
                    lightCode = `<!-- Light Mode Bitcoin Widget -->
                        &lt;iframe
                            src=&quot;https://your-domain.com/embed?theme=light&token=btc&interval=1d&quot;
                            width=&quot;100%&quot;
                            height=&quot;400&quot;
                            frameborder=&quot;0&quot;
                            scrolling=&quot;no&quot;
                            allowtransparency=&quot;true&quot;&gt;
                        &lt;/iframe&gt;`;
                    // TODO: Use NextTick instead of setTimeout
                    // Initial highlight with a small delay
                    setTimeout(() => {
                        Prism.highlightElement($el);
                    }, 100);

                    // Watch for format changes and re-highlight with delay
                    $watch('format', () => {
                        $el.style.visibility = 'hidden'; // Hide the code block
                        setTimeout(() => {
                            Prism.highlightElement($el);
                            $el.style.visibility = 'visible'; // Show the code block after highlighting
                        }, 50);
                    });
                }"
            ></code>
        </pre>

    <button
        @click="
            navigator.clipboard.writeText($refs.codeBlock.textContent)
                .then(() => {
                    $el.innerHTML = 'Copied!';
                    // TODO: Use NextTick instead of setTimeout
                    setTimeout(() => {
                        $el.innerHTML = `<svg class='w-4 h-4' fill='currentColor' viewBox='0 0 20 20'>
                            <path d='M8 2a1 1 0 000 2h2a1 1 0 100-2H8z'/>
                            <path d='M3 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v6h-4.586l1.293-1.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L10.414 13H15v3a2 2 0 01-2 2H5a2 2 0 01-2-2V5zM15 11h2a1 1 0 110 2h-2v-2z'/>
                        </svg>Copy Embed`;
                    }, 2000);
                })
        "
        class="w-fit flex items-center gap-[0.625rem] text-white text-xs font-semibold bg-accent-blue rounded-[69px] p-[10px_15px]
               sm:text-lg sm:py-[15px] sm:px-[25px]
               md:text-xl md:py-[20px] md:px-[30px]"
    >
        <x-icons.copy />
        Copy Embed
    </button>

    {{-- Share Section --}}
            <x-token-page.embed.social-share :platforms="[
                ['name' => 'twitter', 'label' => 'TWITTER'],
                ['name' => 'facebook', 'label' => 'FACEBOOK'],
                ['name' => 'telegram', 'label' => 'TELEGRAM'],
                ['name' => 'whatsapp', 'label' => 'WHATSAPP'],
                ['name' => 'copy-link', 'label' => 'COPY LINK'],
            ]" />
</section>
