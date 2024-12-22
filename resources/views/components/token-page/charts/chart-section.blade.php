@props(['title', 'primaryButtonText', 'secondaryButtonText', 'secondaryButtonText2', 'secondaryButtonAction', 'canvasRef', 'chartType'])

<div class="flex flex-col justify-between items-center gap-10 font-manrope semi-bold bg-bg-primary border border-border-light rounded-[14px] p-7">
    <div class="w-full flex flex-col sm:flex-row justify-between items-center gap-[1.875rem] sm:gap-5">
        <h2 class="text-h2-large font-bold">{{ $title }}</h2>
        <div class="flex flex-col sm:flex-row gap-5">
            @if(!empty($primaryButtonText))
                <x-global.buttons.primary-button>
                    {{ $primaryButtonText }}
                </x-global.buttons.primary-button>
            @endif

            @if(!empty($secondaryButtonText))
                <x-global.buttons.secondary-button @click="console.log('click')">
                    {{ $secondaryButtonText }} <span class='text-[#323232] font-semibold'>&nbsp;| {{ $secondaryButtonText2 }}</span>
                </x-global.buttons.secondary-button>
            @endif
        </div>
    </div>
    <div class="w-full bg-[#1E1E1E] rounded-xl">
        {{ $slot }}
    </div>

</div>
