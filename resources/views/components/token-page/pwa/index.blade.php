<section class="relative flex flex-col-reverse lg:flex-row font-manrope">
    <div class="flex flex-col bg-background-primary border border-border-light rounded-[2rem] p-[1.875rem] gap-6">
        <h2 class="text-h2 font-bold mb-6">Add it to your smartphone</h2>

        <!-- Android Instructions -->
        <div class="text-white text-[1.25rem] font-normal mb-8 lg:mr-[35rem]">
            <div class="flex items-center gap-2 mb-4">
                <x-icons.android class="text-accent-blue" />
                <h3 class="font-medium">Android - Google Chrome</h3>
            </div>
            <ol class="list-decimal list-inside text-text-secondary space-y-2">
                <li>
                    <span>Tap the menu icon <x-icons.menu class="inline-block align-middle w-4 h-4 text-accent-blue" /> (3 dots in the upper right-hand corner) and tap "Add to homescreen."</span>
                </li>
                <li>Enter a name for the shortcut and Chrome will add it to your home screen.</li>
            </ol>
        </div>

        <!-- iOS Instructions -->
        <div class="text-white text-[1.25rem] font-normal lg:mr-[35rem]">
            <div class="flex items-center gap-2 mb-4">
                <x-icons.apple class="text-accent-blue" />
                <h3 class="font-medium">iOS - Safari</h3>
            </div>
            <ol class="list-decimal list-inside text-text-secondary space-y-2">
                <li>
                    <span>Tap the Share button <x-icons.add-to-home class="inline-block align-middle w-4 h-4 text-accent-blue" /> (the square with an arrow pointing upward).</span>
                </li>
                <li>Enter a name for the shortcut and Safari will add it to your home screen.</li>
            </ol>
        </div>

        <!-- Smartphone Display -->
    </div>
    <div class="flex lg:absolute lg:w-[700px] lg:bottom-0 lg:right-[-3.4rem] justify-center items-center mt-8">
        <x-token-page.pwa.install
            class="absolute bottom-0 right-0 transform"
            style="width: 150%; height: auto;"
        />
    </div>
</section>
