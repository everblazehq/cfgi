@props(['title', 'primaryButtonText', 'secondaryButtonText', 'secondaryButtonText2', 'secondaryButtonAction', 'canvasRef', 'chartType'])

<div class="flex flex-col justify-between items-center gap-10 font-manrope semi-bold bg-background-primary border border-border-light rounded-[14px] p-7">
    <div class="w-full flex justify-between items-center">
        <h2 class="text-[40px] font-bold">{{ $title }}</h2>
        <div class="flex gap-5">
            @if(!empty($primaryButtonText))
                <x-global.buttons.primary-button>
                    {{ $primaryButtonText }}
                </x-global.buttons.primary-button>
            @endif

            @if(!empty($secondaryButtonText))
                <x-global.buttons.secondary-button @click="{{ $secondaryButtonAction }}">
                    {{ $secondaryButtonText }} <span class='text-[#323232] font-semibold'>&nbsp;| {{ $secondaryButtonText2 }}</span>
                </x-global.buttons.secondary-button>
            @endif
        </div>
    </div>
    <div class="w-full min-h-[388px] bg-[#1E1E1E] rounded-xl">
        <canvas id="{{ $chartType}}CanvasChart"></canvas>
    </div>
    <div id="{{ $chartType }}ChartLabels" />
        <!-- Labels will be inserted here -->
    </div>
</div>
