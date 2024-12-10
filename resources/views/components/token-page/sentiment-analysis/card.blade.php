@props(['title', 'progress', 'chartData', 'index', 'isBlurred' => false])
<div class="flex flex-col bg-background-primary border border-border-light rounded-xl p-7 gap-10">
    <div class="flex flex-col gap-5">
        <div class="flex justify-between items-center">
            <h3 class="font-medium">{{ $title }}</h3>
            <x-icons.info tooltip="Sentiment analysis explanation" />
        </div>
        <!--progress bar goes here -->
        <x-progress-bar
            :progressWidth=$progress
            :rounded="50"
        />
        <div class="flex justify-center">
            <x-global.badges.status-badge type="fear" size="sm">36% DOWNTREND MARKET</x-global.badges.status-badge>
        </div>
    </div>
    <div class="flex flex-col gap-5 relative">
        <div class="{{ $isBlurred ? 'blurred' : '' }}">
            <div class="w-full min-h-[225px] bg-[#1E1E1E] rounded-xl pt-3">
                <canvas id="cardBarCanvasChart{{ $index }}"></canvas>
            </div>
            <div id="cardBarChartLabels{{ $index }}" />
                <!-- Labels will be inserted here -->
            </div>
        </div>
        @if($isBlurred)
            <div class="overlay">
                <x-icons.lock class="w-11 h-11 mb-4" />
                <p class="font-medium text-lg mb-4">Sign up now to unlock Bitcoin Fear and Greed historical</p>
                <button class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-full">Sign Up</button>
            </div>
        @endif
    </div>
</div>

<style>
    .blurred {
    position: relative;
    background: rgba(17, 17, 17, 0.53);
    filter: blur(10px);
    backdrop-filter: blur(20px);
    z-index: 1;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 20;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    pointer-events: none;
}

.overlay * {
    pointer-events: auto;
}
</style>
@vite('resources/js/app.js')
