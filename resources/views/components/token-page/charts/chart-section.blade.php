@props(['title', 'primaryButtonText', 'secondaryButtonText', 'secondaryButtonText2', 'secondaryButtonAction', 'canvasRef', 'chartType', 'period' => null, 'selectedOptions' => [], 'wireModel' => []])

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
                <div>
                    <select
                        @change="$dispatch('update-values', { value: $event.target.value })"
                        wire:key="unique-key-{{ $period }}"
                        class="bg-bg-accent hover:bg-[#444] px-6 py-2 border-2 border-border-light rounded-full appearance-none focus:outline-none focus:ring-2 focus:ring-[#c9ab9970]"
                    >
                        @foreach($selectedOptions as $option)
                            <option class="text-[#323232] font-semibold bg-bg-accent hover:bg-[#444] px-6 py-2 border-2 border-border-light !important rounded-full !important" value="{{ $option['value'] }}" key="{{ $option['label'] }}">{{ strtoupper($option['label']) }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
        </div>
    </div>
    <div class="w-full bg-[#1E1E1E] rounded-xl">
        {{ $slot }}
    </div>
</div>
<style>
    select {
        border: 1px solid white !important;
    }
</style>
