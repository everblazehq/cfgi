<section class="relative flex flex-col-reverse lg:flex-row font-manrope">
    <div class="flex flex-col bg-bg-primary border border-border-light rounded-[2rem] p-[1.875rem] gap-6">
        <h4 class="text-h2-large font-bold mb-6">Add it to your smartphone</h4>

        <!-- Android Instructions -->
        <div class="text-white text-xl font-normal mb-8 lg:mr-[35rem]">
            <div class="flex items-center gap-2 mb-4">
                <x-icons.android class="text-accent-blue" />
                <h5 class="text-[30px] font-medium">Android - Google Chrome</h5>
            </div>
            <ol class="list-decimal list-inside text-text-secondary space-y-2">
                <li>
                    <span>Tap the <b>menu icon</b> <x-icons.menu
                            class="inline-block align-middle w-4 h-4 text-accent-blue" /> (in the upper right-hand
                        corner) and tap <b>"Add to homescreen."</b></span>
                </li>
                <li><b>Enter a name</b> for the shortcut and Chrome will add it to your home screen.</li>
            </ol>
        </div>

        <!-- iOS Instructions -->
        <div class="text-white text-xl font-normal lg:mr-[35rem]">
            <div class="flex items-center gap-2 mb-4">
                <x-icons.apple class="text-accent-blue" />
                <h5 class="text-[30px] font-medium">iOS - Safari</h5>
            </div>
            <ol class="list-decimal list-inside text-text-secondary space-y-2">
                <li>
                    <span>Tap the <b>Share button</b> <x-icons.add-to-home
                            class="inline-block align-middle w-4 h-4 text-accent-blue" /> (at the bottom). Then tap
                        <b>Add to Home Screen</b> from the menu.</span>
                </li>
                <li><b>Enter a name</b> for the shortcut and it will be added to your home screen.</li>
            </ol>
        </div>

        <!-- Smartphone Display -->
    </div>
    <div class="flex lg:absolute lg:w-[700px] lg:bottom-0 lg:right-[-3.4rem] justify-center items-center mt-8">
        <x-token-page.pwa.install class="absolute bottom-0 right-0 transform" style="width: 150%; height: auto;" />
    </div>
</section>
