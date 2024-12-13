<section class="flex flex-col-reverse lg:flex-row font-manrope bg-background-secondary rounded-xl p-6 gap-8 lg:gap-0">
    <div class="lg:w-[65%] relative flex flex-col gap-6">
        <h2 class="text-h2 font-bold mb-6">Add it to your smartphone</h2>

        <!-- Android Instructions -->
        <div class="text-white text-[1.25rem] font-normal mb-8">
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
        <div class="text-white text-[1.25rem] font-normal">
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
    <div class="lg:absolute w-[500px] lg:bottom-[48px] lg:right-0 flex justify-center items-center mt-8">
        <x-token-page.pwa.install class="absolute bottom-0 right-0 transform" style="width: 150%; height: auto;" />
    </div>
</section>
